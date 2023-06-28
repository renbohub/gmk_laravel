<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Traits\GeneralServices;
use Illuminate\Support\Facades\Http;
use Session;

class LoginController extends Controller
{
    use GeneralServices;
    public function index(Request $request){
        $data['title'] = 'Admin';
        return view('auth.login',$data);
    }

    public function post(Request $request)
    {
        $role = [
            'email' => 'Required',
            'password' => 'Required',
        ];
        

        $validateData = $this->ValidateRequest($request->all(), $role);

        if (!empty($validateData)) {
            return redirect()->back()->withErrors($validateData);
        }
        $login = Http::post('http://porting.my.id:1880/porting/api/v1.0/web/auth/login', $request->all());
        $data = $login->json();
        
        if($data['status_code'] != 200) {
           
            return redirect()->back()->withErrors($data['status_desc']);
        }
        Session::put('Users',$login['content']);
        

        return redirect('/');
    }

    public function logout(){
        Session::flush();
        return redirect('/login');
    }
}