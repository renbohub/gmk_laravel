<?php

namespace App\Http\Controllers\Main;

use Illuminate\Http\Request;
use App\Http\Traits\GeneralServices;
use App\Exports\ReportExcel;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Http;
use Session;

class EditController extends Controller
{
    use GeneralServices;
    public function editShift(Request $request){        
        $data['tittle'] = 'Porting - Dashboard';
        $data['machine'] = $this->GET('http://127.0.0.1:1880/porthings/api/v1.0/web/list/machine');
        return view('page.v_edit_shift',$data);
    } 
    public function editUser(Request $request){        
        $data['tittle'] = 'Porting - Dashboard';
        $data['machine'] = $this->GET('http://127.0.0.1:1880/porthings/api/v1.0/web/list/machine');
        return view('page.v_edit_user',$data);
    }public function editPermission(Request $request){        
        $data['tittle'] = 'Porting - Dashboard';
        $data['machine'] = $this->GET('http://127.0.0.1:1880/porthings/api/v1.0/web/list/machine');
        $data['roles'] = $this->GET('http://127.0.0.1:1880/porthings/api/v1.0/web/list/roles');
        $data['route'] = $this->GET('http://127.0.0.1:1880/porthings/api/v1.0/web/list/route');
        return view('page.v_edit_permission',$data);
    } 
     
}