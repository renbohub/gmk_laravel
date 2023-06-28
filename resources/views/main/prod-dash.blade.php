@extends('layouts.app')

    @section('title', 'AJI MIS | DASHBOARD')
    
    @section('content')
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-6 col-lg pb-2">
                    <div class="card">
                        <div class="card-body pt-4 pb-3 px-4">
                          <div class="flex space-x-3 rtl:space-x-reverse">
                            <div class="flex-none">
                              <div class="h-12 w-12 rounded-full flex flex-col items-center justify-center text-2xl bg-[#E5F9FF] dark:bg-slate-900	 text-dark-500">
                                <iconify-icon icon=carbon:dashboard></iconify-icon>
                              </div>
                            </div>
                            <div class="flex-1">
                              <div class="text-slate-600 dark:text-slate-300 text-sm mb-1 font-medium">
                                Procution Dashboard <br>
                                Active
                              </div>
                              <div class="text-slate-900 dark:text-white text-lg font-medium">
                                1 Device
                              </div>
                            </div>
                          </div>
                          
                        </div>
                      </div>
                </div>
                <div class="col-12 col-md-6 col-lg pb-2">
                    <div class="card">
                        <div class="card-body pt-4 pb-3 px-4">
                          <div class="flex space-x-3 rtl:space-x-reverse">
                            <div class="flex-none">
                              <div class="h-12 w-12 rounded-full flex flex-col items-center justify-center text-2xl bg-[#FFEDE6] dark:bg-slate-900	 text-primary-500">
                                <iconify-icon icon=carbon:dashboard></iconify-icon>
                              </div>
                            </div>
                            <div class="flex-1">
                              <div class="text-slate-600 dark:text-slate-300 text-sm mb-1 font-medium">
                                Procution Dashboard <br>
                                Near Expired
                              </div>
                              <div class="text-slate-900 dark:text-white text-lg font-medium">
                                1 Device
                              </div>
                            </div>
                          </div>
                          
                        </div>
                      </div>
                </div>
                <div class="col-12 col-md-6 col-lg pv-2">
                    <div class="card">
                        <div class="card-body pt-4 pb-3 px-4">
                          <div class="flex space-x-3 rtl:space-x-reverse">
                            <div class="flex-none">
                              <div class="h-12 w-12 rounded-full flex flex-col items-center justify-center text-2xl bg-[#EAE6FF]  dark:bg-slate-900	 text-warning-500">
                                <iconify-icon icon=carbon:dashboard></iconify-icon>
                              </div>
                            </div>
                            <div class="flex-1">
                              <div class="text-slate-600 dark:text-slate-300 text-sm mb-1 font-medium">
                                Procution Dashboard <br>
                                Expired
                              </div>
                              <div class="text-slate-900 dark:text-white text-lg font-medium">
                                0 Device
                              </div>
                            </div>
                          </div>
                          
                        </div>
                      </div>
                </div>
            </div>
            <section class="">  
                <div class="row pt-3">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header py-3">
                              
                                <div class="col-6">List Device Connected</div>
                                <div class="col-6 text-right">
                                    <button type="button" class="btn btn-primary py-2" data-toggle="modal" data-target="#exampleModal">
                                    Add Device
                                  </button>
                                </div>
                            </div>
                            <div class="card-body">
                                @isset($alert)
                                @if ($alert == 200)
                                    <div class="alert alert-success" role="alert"> Your device is added </div>  
                                @else
                                    <div class="alert alert-danger" role="alert"> Your device is out of limit, please upgrade your package! </div>
                                @endif  
                                    
                                @else
                                            
                                @endisset
                                   
                                <table id="table-list" class="table">
                                    <thead>
                                        <th>Device Name</th>
                                        <th>Device Owner</th>
                                        <th>Due Date</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                        <th>HMI Status</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    
                </div>
                {{-- modal add hmi --}}
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Add Device</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          Do you want to add Device to Production Dashboard?
                        </div>
                        <div class="modal-footer">
                          <form action="{{route('add-device')}}" method="post">
                            @csrf
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                          <button type="submit" class="btn btn-primary">Yes</button>
                         </form>
                        </div>
                      </div>
                    </div>
                  </div>
                {{-- end modal add hmi --}}
            </section>
            
            
        </div>
        
    @endsection
    @section('script')
    <script>
      var id = {{Session::get('Users')['cust_id'] }};
        $(document).ready(function () {
            var table = $('#table-list').DataTable( {
            "columns": [
            { "name": "device_name" },
            { "name": "device_owner" },
            { "name": "device_expired" },
            { "name": "device_status" },
            { "name": "action" },
            { "name": "hmi_status" }

        ],
    serverSide: true,
    "processing": true,
        ajax: {
            url: 'http://porting.my.id:1880/porting/api/v1.0/web/data/table/list_device',
            type: 'POST',
            "data": {
             data_id: id // Include the additional variable
           }
        }
    } );
        });
    </script>
    @endsection