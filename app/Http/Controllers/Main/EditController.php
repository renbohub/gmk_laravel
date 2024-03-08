<?php

namespace App\Http\Controllers\Main;

use Illuminate\Http\Request;
use App\Http\Traits\GeneralServices;
use App\Exports\ReportExcel;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;
use Session;

class EditController extends Controller
{
    use GeneralServices;
    public function editShift(Request $request){        
        $data['tittle'] = 'Porting - Dashboard';
        $data['shift'] = DB::table('list_shift')
        ->get();
        return view('page.v_edit_shift',$data);
    } 
    public function editShiftDetail(Request $request){        
        $data['tittle'] = 'Porting - Dashboard';
        $data['shift'] = DB::table('list_shift')
        ->where('shift_id',$request['id'])
        ->get();
        return view('page.v_edit_shift_detail',$data);
    }
    public function editShiftAct(Request $request){        
        $data['tittle'] = 'Porting - Dashboard';
        $data['shift'] = DB::table('list_shift')
        ->get();
        $query = DB::table('list_shift')
                    ->where('shift_id',$request['id'])
                    ->update(['shift_start'=>$request['shift_start'],'shift_end'=>$request['shift_end']]);
        return view('page.v_edit_shift',$data);
    }  
    public function editUser(Request $request){        
        $data['tittle'] = 'Porting - Dashboard';
        return view('page.v_edit_user',$data);
    }
    public function editPermission(Request $request){        
        $data['tittle'] = 'Porting - Dashboard';
        $query = DB::table('t_permissions')
                ->join('l_routes','t_permissions.route_id','l_routes.route_id')
                ->join('l_roles','t_permissions.role_id','l_roles.role_id')
                ->get();
        $data['shift'] = $query;
        return view('page.v_edit_permission',$data);
    } 
    public function editPermissionAct(Request $request){        
        $data['tittle'] = 'Porting - Dashboard';
        $query1 = DB::table('t_permissions')
                 ->where('permission_id',$request['id'])
                 ->delete();
        $query =  DB::table('t_permissions')
                 ->join('l_routes','t_permissions.route_id','l_routes.route_id')
                 ->join('l_roles','t_permissions.role_id','l_roles.role_id')
                 ->get();
         $data['shift'] = $query;
        $data['shift'] = $query;
        return view('page.v_edit_permission',$data);
    } 
    public function editPermissionDetail(Request $request){        
        $data['tittle'] = 'Porting - Dashboard';
        $data['route'] = DB::table('l_routes')
                            ->get();
        $data['role'] = DB::table('l_roles')
                            ->get();
        
        return view('page.v_edit_permission_detail',$data);
    }
    public function editPermissionDetailAct(Request $request){        
        $data['tittle'] = 'Porting - Dashboard';
        $query =  DB::table('t_permissions')
                ->join('l_routes','t_permissions.route_id','l_routes.route_id')
                ->join('l_roles','t_permissions.role_id','l_roles.role_id')
                ->get();
        $data['shift'] = $query;
        $insert = DB::table('t_permissions')
                  ->insert(['role_id'=>$request['role_id'],'route_id'=>$request['route_id']]);
       
        return view('page.v_edit_permission',$data);
    } 
     
}