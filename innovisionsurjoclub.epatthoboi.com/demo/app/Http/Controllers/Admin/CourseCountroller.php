<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use DataTables;use DB;use Str;use File;

class CourseCountroller extends Controller
{
    private $fileDir            = 'admin.course.';
    private $title              = 'Account Report';
    private $route              = 'admin::course.';
    private $model      	    = 'App\Models\Course';

    public function index(Request $request){
        $title      = $this->title;
        $getDatas   = $this->model::get();
        if ($request->ajax()) {
            return $getDatas = Datatables::of($getDatas)
                ->addIndexColumn()
                ->addColumn('name', function($row){
                    return $name    = $row->name;
                })
                ->addColumn('subtitle', function($row){
                    return $subtitle    = $row->subtitle;
                })
                ->addColumn('thumbnail', function($row){
                    return $thumbnail    = '<img src="'.asset($row->thumbnail).'" width = "50px" />';
                    
                })
                ->addColumn('cover', function($row){
                    return $cover    = '<img src="'.asset($row->cover).'" width = "50px" />';
                })
                ->addColumn('code', function($row){
                    return $code    = $row->code;
                })
                ->addColumn('limit', function($row){
                    return $limit    = $row->limit;
                })
                ->addColumn('start', function($row){
                    return $start    = $row->start;
                })
                ->addColumn('end', function($row){
                    return $end    = $row->end;
                })
                ->addColumn('status', function($row){
                    return $status    = $row->status;
                })
                ->addColumn('action', function($row){
                    $btn =   '
                    <a href="javascript:void(0);" class="btn btn-xs sharp btn-primary" data-bs-toggle="modal" data-bs-target="#create" onclick="getForm('.$row->id.')"><i class="fa fa-pencil"></i></a>
                    <a href="'.route($this->route.'delete',["id"=>$row->id]).'" class="btn btn-xs sharp btn-danger"><i class="fa fa-trash"></i></a>
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
        $title     = $data ? 'Edit '.$data->name : 'create Course';
        return view($this->fileDir.'form',[
            'title'    => $title,
            'data'     => $data,
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

        $cover   			= $request->file('cover');
        $image   			= $request->file('thumbnail');
        $attributes         = [];
        $coverAttributes    = [];
        $imageAttributes    = [];

        if($cover){
            $photo 	        = rand().$cover->getClientOriginalName();
            $destination 	= 'uploads/slider';
            $cover->move(public_path($destination), $photo);

            $cover	        = $destination.'/'.$photo;
            $coverAttributes     = [ 
                'cover'    => $cover,
            ];
        }
        if($image){
            $photo 	        = rand().$image->getClientOriginalName();
            $destination 	= 'uploads/course';
            $image->move(public_path($destination), $photo);

            $image 	        = $destination.'/'.$photo;
            $imageAttributes     = [ 
                'thumbnail'    => $image,
            ];
        }
        $uniqid = Str::random(6);
        if($request->id){
            $submit      =  $this->model::find($request->id);
        }
        
        $attributes        = [
            'name'      =>  $request->name,
            'subtitle'  =>  $request->subtitle,
            'code'      =>  $request->id && $submit->code ? $submit->code : $uniqid,
            'limit'     =>  $request->limit,
            'start'     =>  $request->start,
            'end'       =>  $request->end,
            'status'    =>  $request->status
        ];
        $data = array_merge($attributes, $imageAttributes,$coverAttributes);

        try {
            if($request->id){
                if($image){
                    $image_path = public_path($submit->thumbnail);
                    if(File::exists($image_path)) {
                        File::delete($image_path);
                    }
                }
                if($cover){
                    $image_path = public_path($submit->cover);
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
        $del     = $data->delete();
        toastr()->success('Data Successfully Deleted  !');
        return redirect()->back();
    }
}
