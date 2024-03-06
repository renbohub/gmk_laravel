<?php

namespace App\Http\Controllers\Main;

use Illuminate\Http\Request;
use App\Http\Traits\GeneralServices;
use App\Exports\ReportExcel;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Http;
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
         $data['tittle'] = 'Porting - Report';
         return view('main.report',$data);
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