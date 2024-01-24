<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function AdminDashboard(){
        return view('admin.index');
        
        
    }

    public function AdminLogout(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/admin/login');
    }

    public function AdminLogin(){
 
        return view('admin.admin_login');

    }




    public function AdminProfile(){

        $id = Auth::user()->id;
        $profileData = User::find($id);
        return view('admin.admin_profile_vue',compact('profileData'));
    }


    public function AdminProfileStore(Request $request)
    {
        $id = Auth::user()->id;
        $data = User::find($id);

        // Validation
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'nullable|string',  // Adjust validation rules as needed
            'adress' => 'nullable|string', // Adjust validation rules as needed
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Update data
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->adress = $request->adress;

        $data->save();
        
        $notification =array(
            'message' =>'Profile updated successfully',
            'status' => 'success'

        );

        return redirect()->back()->with($notification);
    }
    public function AdminChangePassword(){
        $id = Auth::user()->id;
        $profileData = User::find($id);
        return view('admin.admin_change_password',compact('profileData'));
    }

}
