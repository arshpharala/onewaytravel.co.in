<?php

namespace App\Http\Controllers\cms;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\Http\Requests\cms\RoleRequest;
use App\Http\Requests\cms\UserRequest;
use App\Http\Requests\cms\PermissionRequest;
use App\Http\Requests\cms\ChangePasswordRequest;
use App\Http\Requests\cms\ProfileRequest;
use App\Events\CreateUser;
use DB;
use App\User;
use Illuminate\Support\Str;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
		// $this->middleware('access:role,insert')->only('insertRole');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    public function userList(Request $request)
    {
        $filter = $request->all();
        $query                   =   User::query();
        
        $users = $query->get();
        $list['name']   = User::all()->pluck('name','name')->toArray();
        $list['email']  = User::all()->pluck('email','email')->toArray();
        $data['list']   = $list;
        $data['users']  = $users;
        
        return view('cms.manageUser.users',$data);
    }

    public function createUser(Request $request)
    {
        return view('cms.manageUser.insertUser');
    }

    public function insertUser(UserRequest $request)
    {
        $data = $request->all();
        $rawPassword = $data['password'];
        $user = User::create([
            'name'      => $data['name'],
            'email'     => $data['email'],
            'password'  => Hash::make($data['password']),
        ]);
        $user['rawPassword'] = $rawPassword;
        Event(new CreateUser($user));
        
        return redirect()->route('userList')->with('success', 'User Created!');
    }

    public function editUser(User $user)
    {
        $data['user']   = $user;
        $data['roles']  = Role::all();
       
        return view('cms.manageUser.updateUser',$data);
    }

    public function updateUser(User $user,UserRequest $request)
    {
        
        $inputs         = $request->all();
        $user->name     = $inputs['name'];
        $user->email    = $inputs['email'];
        $user->active   = empty($inputs['active'])? 0 : 1;
        $user->save();
        if(isset($inputs['resetPwd']))
        {
            $user->resetPassword();
        }
        return redirect()->route('userList')->with('success', 'User Updated Successfully!');
    }

    
    public function deleteUser(Request $request,User $user)
    {
        $user->delete();
    }

    public function changepass()
    {
     return view('cms.manageUser.changePassword');

    }

    public function editProfile()
    {
        $data['user']   = \Auth::User();
        
        return view('cms.manageUser.updateProfile',$data);
    }


    public function changePassword(ChangePasswordRequest $request)
    {
        $current_password = \Auth::User()->password; 
        $currentPassword  =  $request->input('currentPassword');
    
      if(\Hash::check($currentPassword, $current_password))
      {         
           $user_id         = \Auth::User()->id;                       
            $user           = User::find($user_id);
            $user->password = \Hash::make($request->input('newPassword'));
            $user->save();
            Auth::logout();
            return redirect()->route('login')->with('success','Password Changed!');
        }
        else
        {           
            return back()->with('failure','Please enter correct current password');
        } 
    }
    
}
