<?php

namespace App\Http\Controllers\Main;

use Illuminate\Http\Request;
use App\Http\Traits\GeneralServices;
use App\Exports\ReportExcel;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;
use Session;

class DashboardController extends Controller
{
    use GeneralServices;
    public function index(Request $request){        
        $data['tittle'] = 'Porting - Dashboard';
        return view('main.home',$data);
    } 
     public function detail(Request $request){        
        $data['tittle'] = 'Porting - Dashboard';
    
        return view('main.detail',$data);
    }
    public function report(){
         $data['report'] = [];
         $data['tittle'] = 'Porting - Report';
         $data['tank'] = [];
         $data['report'] = [];
         return view('main.report',$data);
    }
    public function reportData(Request $request){
        
        
        $data['tittle'] = 'Porting - Report';
        $payload = $request->all();
        $shift = $payload['shift'];
        $tank = $payload['tank'];
        $data['tank'] = $tank;
        $shift1_start = '00:00:00';
        $shift2_start = '00:00:00';
        $shift3_start = '23:59:59';
        $shift1_end = '00:00:00';
        $shift2_end = '00:00:00';
        $shift3_end = '00:00:00';

        $data_shift = DB::table('list_shift')
                        ->selectRaw('*')
                        ->whereIn('shift_no',$shift)
                        ->get();
      
        foreach ($data_shift as $row) {
            if($row->shift_no == 1){
                $shift1_start = $row->shift_start;
                $shift1_end = $row->shift_end;
            }
            if($row->shift_no == 2){
                $shift2_start = $row->shift_start;
                $shift2_end = $row->shift_end;
            }
            if($row->shift_no == 3){
                $shift3_start = $row->shift_start;
                $shift3_end = $row->shift_end;
            }
        }
        $query = DB::table('t_log_tanki')
                    ->whereDate('last_update', '>=', $request['date-start'])
                    ->whereDate('last_update', '<=', $request['date-end'])
                    ->where(function ($query) use ($shift1_start, $shift2_start, $shift3_start,$shift1_end, $shift2_end, $shift3_end) {
                        $query->where(function ($subquery)  use ($shift1_start, $shift2_start, $shift3_start,$shift1_end, $shift2_end, $shift3_end)  {
                                $subquery->whereTime('last_update', '>=', $shift1_start)
                                         ->whereTime('last_update', '<=', $shift1_end);
                                })
                                ->orWhere(function ($subquery) use ($shift1_start, $shift2_start, $shift3_start,$shift1_end, $shift2_end, $shift3_end)  {
                                    $subquery->whereTime('last_update', '>=', $shift2_start)
                                             ->whereTime('last_update', '<=', $shift2_end);
                                })
                                ->orWhere(function ($subquery) use ($shift1_start, $shift2_start, $shift3_start,$shift1_end, $shift2_end, $shift3_end)  {
                                    $subquery->whereRaw('(time(last_update) >= "'.$shift3_start.'" and time(last_update) <= "23:59:59") or (time(last_update) <= "'.$shift3_end.'" and time(last_update) >= "00:00:00")');
                                });
                        })
                    ->get();
        $data['report'] = $query;
        
        return view('main.report',$data);
    }
    public function reportAlarm(){
        $data['report'] = [];
        $data['tittle'] = 'Porting - Report';
        
        return view('main.alarm',$data);
   }
   public function reportAlarmAct(Request $request){
       $data['tittle'] = 'Porting - Report';
       $payload = $request->all();
       $query = DB::table('t_alarm_log')
                   ->whereDate('start_alarm', '>=', $payload['date-start'])
                   ->whereDate('start_alarm', '<=', $payload['date-end'])
                   ->get();
       $data['report'] = $query;
       
       return view('main.alarm',$data);
   }
    public function exportData(Request $request)
    {
        $payload = $request->all();
        dd($payload);
        $data1['tittle'] = 'Porting - Report';
        $query = Http::get('http://127.0.0.1:1880/porthings/api/v1.0/web/generate/report',$payload);
            $data = $query -> json();
            return Excel::download(new ReportExcel($data), 'chart.xlsx');
               // Handle API request failure
        return redirect()->route('export.form')->with('error', 'Failed to fetch data from API.');
    }
}