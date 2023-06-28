<?php

namespace App\Http\Controllers\Main;

use Illuminate\Http\Request;
use App\Http\Traits\GeneralServices;
use Illuminate\Support\Facades\Http;
use Session;

class DashboardController extends Controller
{
    use GeneralServices;
    public function index(Request $request){
        $cust_id = Session::get('Users')['cust_id'];
        
        $data['tittle'] = 'Porting - Dashboard';
        return view('main.home',$data);
    }
    public function prod(){
        $data['tittle'] = 'Porting - Production Dashboard';
        return view('main.prod-dash',$data);
    }
    public function pm(){
        $data['tittle'] = 'Porting - Power Monitoring';
        return view('main.pm-dash',$data);
    }
    public function addHMI(Request $request){
        $payload['cust_id'] = Session::get('Users')['cust_id'];
        $data['tittle'] = 'Porting - Power Monitoring';

        $store = Http::post('http://porting.my.id:1880/porting/api/v1.0/web/generate/device/token', $payload);

        $data_store = $store->json();
        $data['alert'] = $data_store['status_code'];
       
       
        $data['tittle'] = 'Porting - Production Dashboard';
        return view('main.prod-dash',$data);
    }
    public function prodDetail($token){
        $data['tittle'] = 'Porting - Power Monitoring Detail';
        $payload['cust_token'] = $token;
        $payload['cust_id'] = Session::get('Users')['cust_id'];
        $store = Http::post('http://porting.my.id:1880/porting/api/v1.0/web/data/json/list_device/detail', $payload);
        $data_store = $store->json();
        $dc =  isset($data_store['status_code']) ? $data_store['status_code'] : 200;
        if($dc == 400) {
           
            return redirect('404');
        }
        $data['content'] = $data_store['content'];
        return view('main.prod-detail',$data);
    }
  
    
    
   
}