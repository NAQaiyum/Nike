<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use DataTables;use DB;use Str;use File;

class CourseOutlineController extends Controller
{
    private $fileDir        = 'admin.course.chapter.';
    private $title          = 'Course Outline';
    private $route          = 'admin::course.outline.';
    private $model          = 'App\Models\CourseOutline';
    private $modelCourse    = 'App\Models\Course';

    public function index(Request $request){
        $title      = $this->title;
        $getDatas   = $this->model::get();
        if ($request->ajax()) {
            return $getDatas = Datatables::of($getDatas)
                ->addIndexColumn()
                ->addColumn('title', function($row){
                    return $name    = $row->title;
                })
                ->addColumn('sub_title', function($row){
                    return $subtitle    = $row->sub_title;
                })
                ->addColumn('thumbnail', function($row){
                    return $thumbnail    = '<img src="'.asset($row->image).'" width = "50px" />';

                })
                ->addColumn('action', function($row){
                    $btn =   '
                    <a href="javascript:void(0);" class="btn btn-xs sharp btn-primary" data-bs-toggle="modal" data-bs-target="#create" onclick="getForm('.$row->id.')"><i class="fa fa-pencil"></i></a>
                    <a
                        href="'.route($this->route.'delete',["id"=>$row->id]).'"
                        class="btn btn-xs sharp btn-danger"
                        onclick="return confirm(`Are you Sure`)"><i class="fa fa-trash"></i></a>
                    ';

                    return $btn;
                })
                ->rawColumns(['action','thumbnail','cover'])
                ->make(true);
        }
        return view($this->fileDir.'index',[
            'title'        => $title,
            'getDatas'     => $getDatas,
            'route'        => $this->route,
        ]);
    }
    public function getForm(Request $request){
        $data      = $this->model::find($request->id);
        $getCourse = $this->modelCourse::where('status', 1)->get();
        $title     = $data ? 'Edit '.$data->name : 'create Course';
        return view($this->fileDir.'form',[
            'title'    => $title,
            'data'     => $data,
            'getCourse'=> $getCourse,
            'route'    => $this->route,
        ]);
    }
    public function save(Request $request){
        ini_set('memory_limit','-1');

        $validator = Validator::make($request->all(), [
            'thumbnail' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'cover' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($validator->fails()) {
            toastr()->error('Image Size invalied');
            return redirect()->back();
        }

        $image   			= $request->file('thumbnail');
        $attributes         = [];
        $coverAttributes    = [];
        $imageAttributes    = [];

        if($image){
            $photo 	        = rand().$image->getClientOriginalName();
            $destination 	= 'uploads/course';
            $image->move(public_path($destination), $photo);

            $image 	        = $destination.'/'.$photo;
            $imageAttributes     = [
                'image'    => $image,
            ];
        }
        $uniqid = Str::random(6);
        if($request->id){
            $submit      =  $this->model::find($request->id);
        }
        $attributes        = [
            'course_id'     =>  $request->course_id,
            'title'         =>  $request->title,
            'sub_title'     =>  $request->sub_title,
            'description'   =>  $request->description
        ];
        $data = array_merge($attributes, $imageAttributes);

        try {
            if($request->id){
                if($image){
                    $image_path = public_path($submit->thumbnail);
                    if(File::exists($image_path)) {
                        File::delete($image_path);
                    }
                }
                $update = $submit->update($data);
                toastr()->success('Data Successfully Updated !');
            }else{
                $submit      =  $this->model::create($data);
                toastr()->success('Data Successfully Created  !');
            }
            return redirect()->back();
        }catch (\Illuminate\Database\QueryException $ex) {
            toastr()->error('problem To Submit Data');
            return redirect()->back()->withErrors($ex->getMessage())
                ->with('myexcep', $ex->getMessage())->withInput();
        }
        return $data;
    }
    public function delete(Request $request){
        $data   =  $this->model::find($request->id);
        if($data){
            $image_path = public_path($data->thumbnail);
            if(File::exists($image_path)) {
                File::delete($image_path);
            }
        }
        $del     = $data->delete();

        toastr()->success('Data Successfully Deleted  !');
        return redirect()->back();
    }
}
