<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
class StudentController extends Controller
{
    public function index(){
        $title      = "Student";
        $getDatas   = Student::get();
        return View('admin.student.index',compact('title','getDatas'));
    }
    public function getForm(Request $request){
        $data      = Student::find($request->id);
        $title     = $data ? 'Edit '.$data->title : 'create Student';
        return view('admin.student.form',[
            'title'     => $title,
            'data'      => $data
        ]);;
    }
    public function save(Request $request){
        $validator = Validator::make($request->all(), [
            'name'          => 'required',
        ]);
    
        if ($validator->fails()) {
            notify()->error('Name Required');
            return redirect()->back();
        }
        $attributes             = [];

        $attributes = [
            'title'    => strip_tags(preg_replace('/[^A-Za-z0-9\-" "]/', '', $request->title)),
            'placement'    => $request->placement,
        ];

        $data = array_merge($attributes);
        
        try {
            if($request->id){
                
                $submit         =  Student::find($request->id);
                $update = $submit->update($data);
                notify()->success('Role Successfully Updated !');
            }else{
                $submit      =  Student::create($data);
                notify()->success('Role Successfully created !');
            }
            return redirect()->back();
        } catch (\Illuminate\Database\QueryException $ex) {
            notify()->error($ex->getMessage());
            return redirect()->back()->withErrors($ex->getMessage())
                ->with('myexcep', $ex->getMessage())->withInput();
        }
        return $attributes;
    }
    public function delete(Request $request){
        $data   =  Student::find($request->id);
        $del     = $data->delete();
        notify()->success('Data Successfully Deleted  !');
        return redirect()->back();
    }
}
