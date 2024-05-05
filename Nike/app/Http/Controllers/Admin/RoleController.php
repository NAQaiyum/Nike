<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function index(){
        $title      = "Role";
        $getDatas   = Role::get();
        return View('admin.role.index',compact('title','getDatas'));
    }
    public function getForm(Request $request){
        $data      = Role::find($request->id);
        $title     = $data ? 'Edit '.$data->title : 'create Role';
        return view('admin.role.form',[
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
                
                $submit         =  Role::find($request->id);
                $update = $submit->update($data);
                notify()->success('Role Successfully Updated !');
            }else{
                $submit      =  Role::create($data);
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
        $data   =  Role::find($request->id);
        $del     = $data->delete();
        notify()->success('Data Successfully Deleted  !');
        return redirect()->back();
    }
}
