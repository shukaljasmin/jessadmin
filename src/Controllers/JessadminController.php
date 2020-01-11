<?php
namespace shukaljasmin\jessadmin\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use shukaljasmin\jessadmin\Library\jeaaadmin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use shukaljasmin\jessadmin\Models\Admin;




class JessadminController extends Controller
{
    public function index()
    {
        $path=config("jessadmin.path.login");
        //return config("jessadmin.path.login");
         return view($path);
    }
    
    public function admin_login(Request $request)
    {
        // $array=array();
        // $array["email"]=$request->email;
        // $array["pass"]=$request->password;
        // $array["login_time"]=date('Y-m-d H:i:s');
        // $array["ip"]=$request->ip();
        //$request->session()->put('_admin_session',$array);
        //redirect(route("/jess_sesstion"));
        // DD($request->password);
        // DD($request->email);

        $validatedData =$request->validate([
        'email' => 'required',
        'password' => 'required',
        ]);

        // print_r($request->email);
        // print_r($request->password);
        // $admin=Admin::all();
        // var_dump($admin);
        // DD($admin);        


        $admin = Admin::where('email', '=', $request->email)->first();
        if (!$admin) 
        {
            return response()->json(['success'=>false, 'message' => 'Login Fail, please check email id']);
        }
        if (!Hash::check($request->password, $admin->password)) 
        {
            return response()->json(['success'=>false, 'message' => 'Login Fail, pls check password']);
        }
    
        $array=array();
        $array["email"]=$admin->email;
        $array["pass"]=$admin->password;
        $array["name"]=$admin->name;
        $array["role"]=$admin->role;
        $array["login_time"]=date('Y-m-d H:i:s');
        $array["ip"]=$request->ip();
        $request->session()->put('_admin_session',$array);
        return Redirect::to('admin/jess_home');
    }

    public function home()
    {
        $path=config("jessadmin.path.dashboard");
        return view($path);
    }
}
