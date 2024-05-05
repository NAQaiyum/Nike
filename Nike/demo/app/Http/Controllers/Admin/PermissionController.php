<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    public function index(){
        $title = "Client";
        $getDatas = Client::orderBy('placement', 'ASC')->get();
        return View('admin.client.index',compact('title','getDatas'));
    }
    public function getForm(Request $request){
        $data      = Client::find($request->id);
        $title     = $data ? 'Edit '.$data->title : 'create Client';
        return view('admin.client.form',[
            'title'     => $title,
            'data'      => $data
        ]);;
    }
    public function save(Request $request){
        $validator = Validator::make($request->all(), [
            'image'          => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        if ($validator->fails()) {
            notify()->error('Image Size invalied');
            return redirect()->back();
        }
        $imageAttributes        = [];
        $attributes             = [];
        $image   			    = $request->file('image');
        $logo_footer   			= $request->file('logo_footer');
        $icon   			    = $request->file('icon');
        if($image){
            $photo 	        = rand().$image->getClientOriginalName();
            $destination 	= 'uploads/client';
            $image->move($destination, $photo);

            $clientImg 	        = $destination.'/'.$photo;
            
            $imageAttributes = [ 
                'image' => $clientImg,
            ];
        }

        $attributes = [
            'title'    => strip_tags(preg_replace('/[^A-Za-z0-9\-" "]/', '', $request->title)),
            'placement'    => $request->placement,
        ];

        $data = array_merge($imageAttributes, $attributes);
        
        try {
            if($request->id){
                
                $submit         =  Client::find($request->id);
                if($image){
                    $image_path = public_path($submit->image);

                    if(File::exists($image_path)) {
                        File::delete($image_path);
                    }
                }
                $update = $submit->update($data);
                notify()->success('Client Successfully Updated !');
            }else{
                $submit      =  Client::create($data);
                notify()->success('Client Successfully created !');
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
        $data   =  Client::find($request->id);
        if($data && $data->image){
            $image_path = public_path($data->image);

            if(File::exists($image_path)) {
                File::delete($image_path);
            }
        }
        $del     = $data->delete();
        notify()->success('Data Successfully Deleted  !');
        return redirect()->back();
    }
}
