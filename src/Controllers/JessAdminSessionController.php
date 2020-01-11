<?php
namespace shukaljasmin\jessadmin\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JessAdminSessionController extends Controller
{
    public function accessSessionData() 
    {
        echo "test";
        $data = $request->session()->all();
        dd($data);
        // if(session()->has('_token'))
           
        // else
        //     echo 'No data in the session';
    }

    public function show(Request $request, $id="test")
    {
        

        $data = $request->session()->all();
        dd($data);
        $value = $request->session()->get('_admin_session');
    }

    public function storeSessionData(Request $request) {
        $request->session()->put('my_name','Virat Gandhi');
        echo "Data has been added to session";
     }
     
     public function deleteSessionData(Request $request) {
        $request->session()->forget('my_name');
        echo "Data has been removed from session.";
     }
}