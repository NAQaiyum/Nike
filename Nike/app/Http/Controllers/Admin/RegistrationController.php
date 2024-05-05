<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\User;use App\Models\Student;use App\Models\Teacher;
class RegistrationController extends Controller
{
    public function save(Request $request){
        $validator = Validator::make($request->all(), [
            'first_name'    => ['required'],
            'image'         => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        if ($validator->fails()) {
            toastr()->error($validator->errors()->all());
            return redirect()->back();
        }
        $imageAttributes        = [];
        $attributes             = [];
        $image   			    = $request->file('image');

        // return $request;

        if($image){
            $photo 	        = rand().$image->getClientOriginalName();
            $destination 	= 'uploads/user';
            $image->move($destination, $photo);

            $img 	        = $destination.'/'.$photo;
            
            $imageAttributes = [ 
                'image' => $img,
            ];
        }

        $attributes = [
            'first_name'  => strip_tags($request->first_name),
            'last_name'   => strip_tags($request->last_name),
            'email'       => strip_tags($request->email),
            'phone'       => strip_tags($request->phone),
            'address'     => strip_tags($request->address),
            'gender'      => strip_tags($request->gender),
            'dist_id'     => strip_tags($request->dist_id),
            'institution' => strip_tags($request->institution),
            'institution_reg_no'      => strip_tags($request->institution_reg_no),
            'nid'         => strip_tags($request->nid),
            'location'    => strip_tags($request->location),
            'reg_type'    => strip_tags($request->reg_type),
            'level'       => strip_tags($request->level),
        ];
        
        $data = array_merge($imageAttributes, $attributes);

        try {
            $submit     =  User::create([
                'name'      => $request->first_name,
                'email'     => $request->email,
                'password'  => Hash::make($request->password),
                'reg_type'  => $request->reg_type
            ]);
            
            $userData   = array_merge($attributes,['user_id' => $submit->id]);
            if($request->reg_type == 1){
                $subData    = Student::create($userData);
            }
            if($request->reg_type == 2){
                $subData    = Teacher::create($userData);
            }
            
            toastr()->success('User Successfully created !');
            return redirect()->back();
        } catch (\Illuminate\Database\QueryException $ex) {
            toastr()->error($ex->getMessage());
            return redirect()->back()->withErrors($ex->getMessage())
                ->with('myexcep', $ex->getMessage())->withInput();
        }
        return $attributes;
    }
}
