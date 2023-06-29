@extends('layouts.app')

    @section('title', 'AJI MIS | DASHBOARD')
    
    @section('content')
        <div class="contaier-fluid">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="bg-no-repeat bg-cover bg-center p-4 rounded-[6px] relative" style="background-image: url({{asset('public/sites/assets/images/all-img/widget-bg-1.png')}})">
                      <div class="max-w-[180px]">
                        <div class="text-xl font-medium text-slate-900 mb-2">
                          Start your porting cloud
                        </div>
                        <p class="text-sm text-slate-800">
                          Free for 14 day
                        </p>
                      </div>
                      <div class="absolute top-1/2 -translate-y-1/2 ltr:right-6 rtl:left-6 mt-2 h-12 w-12 bg-white rounded-full text-xs font-medium
                          flex flex-col items-center justify-center">
                        Now
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-md-6 col-lg">
                    <div class="card">
                        <div class="card-body pt-4 pb-3 px-4">
                          <div class="flex space-x-3 rtl:space-x-reverse">
                            <div class="flex-none">
                              <div class="h-12 w-12 rounded-full flex flex-col items-center justify-center text-2xl bg-[#FFEDE6] dark:bg-slate-900	 text-warning-500">
                                <iconify-icon icon=heroicons:cube></iconify-icon>
                              </div>
                            </div>
                            <div class="flex-1">
                              <div class="text-slate-600 dark:text-slate-300 text-sm mb-1 font-medium">
                                Your Package
                              </div>
                              <div class="text-slate-900 dark:text-white text-lg font-medium">
                                Free
                              </div>
                            </div>
                          </div>
                          
                        </div>
                      </div>
                  </div>
                  <div class="col-12 col-md-6 col-lg">
                    <div class="card">
                        <div class="card-body pt-4 pb-3 px-4">
                          <div class="flex space-x-3 rtl:space-x-reverse">
                            <div class="flex-none">
                              <div class="h-12 w-12 rounded-full flex flex-col items-center justify-center text-2xl bg-[#FFEDE6] dark:bg-slate-900	 text-warning-500">
                                <iconify-icon icon=carbon:dashboard></iconify-icon>
                              </div>
                            </div>
                            <div class="flex-1">
                              <div class="text-slate-600 dark:text-slate-300 text-sm mb-1 font-medium">
                                Procution Dashboard
                              </div>
                              <div class="text-slate-900 dark:text-white text-lg font-medium">
                                1 Active
                              </div>
                            </div>
                          </div>
                          
                        </div>
                      </div>
                  </div>
                  <div class="col-12 col-md-6 col-lg">
                    <div class="card">
                        <div class="card-body pt-4 pb-3 px-4">
                          <div class="flex space-x-3 rtl:space-x-reverse">
                            <div class="flex-none">
                              <div class="h-12 w-12 rounded-full flex flex-col items-center justify-center text-2xl bg-[#FFEDE6] dark:bg-slate-900	 text-warning-500">
                                <iconify-icon icon=codicon:dashboard></iconify-icon>
                              </div>
                            </div>
                            <div class="flex-1">
                              <div class="text-slate-600 dark:text-slate-300 text-sm mb-1 font-medium">
                                Power Monitoring
                              </div>
                              <div class="text-slate-900 dark:text-white text-lg font-medium">
                                0 Active
                              </div>
                            </div>
                          </div>
                          
                        </div>
                      </div>
                  </div>
                     
            </div>
        </div>
    @endsection
    
