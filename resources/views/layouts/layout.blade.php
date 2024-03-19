<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="utf-8" />
    <title>GMK Draft</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <!-- ================== BEGIN core-css ================== -->
    <link href="{{asset('public/sites/css/vendor.min.css')}}" rel="stylesheet" />
    <link href="{{asset('public/sites/css/app.min.css')}}" rel="stylesheet" />
    
  
    <script src="{{asset('public/sites/plugins/apexcharts/dist/apexcharts.min.js')}}"></script>
</head>

<body>
    <!-- BEGIN #app -->
    <div id="app" class="app app-content-full-width" >
        <!-- BEGIN #header -->
        <div id="header" class="app-header">
            <!-- BEGIN desktop-toggler -->

            <!-- END mobile-toggler -->

            <!-- BEGIN brand -->
            <div class="brand">
                <a href="#" class="brand-logo">
                    <span class="brand-img">
                        <span class="brand-img-text text-theme"><b>S</b></span>

                    </span>
                    <span class="brand-img">
                        <span class="brand-img-text text-theme"><b>M</b></span>
                        
                    </span>
                    <span class="brand-img">
                        <span class="brand-img-text text-theme"><b>T</b></span>
                        
                    </span>
                    
                </a>
            </div>
            <!-- END brand -->

            <!-- BEGIN menu -->
            <div class="menu">
                <div class="menu-item ">
                    <div id="time"></div>
                </div>
                <div class="menu-item dropdown dropdown-mobile-full">
                    <a href="#" data-bs-toggle="dropdown" data-bs-display="static" class="menu-link">
                        <div class="menu-img online">
                            <img src="{{asset('public/sites/img/user/profile.jpg')}}" alt="Profile" height="60" />
                        </div>
                        <div class="menu-text d-sm-block d-none">
                            
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end me-lg-3 fs-11px mt-1">
                        
                        @if(session('Users')['role_id'] ==1)
                        <a class="dropdown-item d-flex align-items-center" href="{{route('edit.shift')}}">Edit Shift <i
                                class="bi bi-gear ms-auto text-theme fs-16px my-n1"></i>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item d-flex align-items-center" href="{{route('edit.permission')}}">Edit Permission <i
                            class="bi bi-gear ms-auto text-theme fs-16px my-n1"></i>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item d-flex align-items-center" href="{{route('edit.user')}}">Edit User <i
                            class="bi bi-gear ms-auto text-theme fs-16px my-n1"></i>
                        </a>
                        
                        
                        
                        @else
                        <div class="dropdown-divider"></div>
                        <form action="{{route('edit.user.cp')}}" method="POST" id="report_option">
                            @csrf      
                            <input type="hidden" class="form-control"  name="id" value="{{session('Users')['id'] }}">
                            <button type="submit" class="dropdown-item d-flex align-items-center" id="submitBtn">Change Password</button>
                        </form> 
                        
                        @endif
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item d-flex align-items-center"
                            href="{{route('logout-action')}}">LOGOUT <i
                                class="bi bi-toggle-off ms-auto text-theme fs-16px my-n1"></i></a>
                    </div>
                </div>
            </div>
            <!-- END menu -->

            <!-- BEGIN menu-search -->
            <form class="menu-search" method="POST" name="header_search_form">
                <div class="menu-search-container">
                    <div class="menu-search-icon"><i class="bi bi-search"></i></div>
                    <div class="menu-search-input">
                        <input type="text" class="form-control form-control-lg" placeholder="Search menu..." />
                    </div>
                    <div class="menu-search-icon">
                        <a href="#" data-toggle-class="app-header-menu-search-toggled" data-toggle-target=".app"><i
                                class="bi bi-x-lg"></i></a>
                    </div>
                </div>
            </form>
            <!-- END menu-search -->
        </div>
        <!-- END #header -->

        <!-- BEGIN #content -->

        <!-- END #content -->

        <!-- BEGIN btn-scroll-top -->
        <div class="bg-dark bg-opacity-70 text-white">
    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
                <ul class="nav justify-content-start">
                  <li class="nav-item">
                     <a class="navbar-brand" href="#">
                        <img src="{{asset('public/sites/img/logo-1.png')}}" width="30" height="30" alt="" class="d-inline-block align-middle">
                        
                    </a>                  
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">GANDUMAS KENCANA - DAS CONTROL VALVE STORAGE SYSTEM</a>
                  </li>
                </ul>
            </div>
            <div class="col-6">
                <ul class="nav justify-content-end">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('dashboard')}}">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('graphic.realtime')}}">Line Monitor</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('alarm.view')}}">Alarm Log</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('graphic.report')}}">Reporting</a>
                  </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@yield('content')
<a href="#" data-toggle="scroll-to-top" class="btn-scroll-top fade"><i class="fa fa-arrow-up"></i></a>
<!-- END btn-scroll-top -->
</div>
<!-- END #app -->
        <div class="app-theme-panel">
           <div class="app-theme-panel-container">
               <a href="javascript:;" data-toggle="theme-panel-expand" class="app-theme-toggle-btn"><i class="bi bi-sliders"></i></a>
               <div class="app-theme-panel-content">
                   <div class="small fw-bold text-inverse mb-1">Display Mode</div>
                   <div class="card mb-3">
                       <!-- BEGIN card-body -->
                       <div class="card-body p-2">
                           <div class="row gx-2">
                               <div class="col-6">
                                   <a href="javascript:;" data-toggle="theme-mode-selector" data-theme-mode="dark" class="app-theme-mode-link active">
                                       <div class="img"><img src="{{asset('public/sites/img/mode/dark.jpg')}}" class="object-fit-cover" height="76" width="76" alt="Dark Mode"></div>
                                       <div class="text">Dark</div>
                                   </a>
                               </div>
                               <div class="col-6">
                                   <a href="javascript:;" data-toggle="theme-mode-selector" data-theme-mode="light" class="app-theme-mode-link">
                                       <div class="img"><img src="{{asset('public/sites/img/mode/light.jpg')}}" class="object-fit-cover" height="76" width="76" alt="Light Mode"></div>
                                       <div class="text">Light</div>
                                   </a>
                               </div>
                           </div>
                       </div>
                       <!-- END card-body -->
                       
                       <!-- BEGIN card-arrow -->
                       <div class="card-arrow">
                           <div class="card-arrow-top-left"></div>
                           <div class="card-arrow-top-right"></div>
                           <div class="card-arrow-bottom-left"></div>
                           <div class="card-arrow-bottom-right"></div>
                       </div>
                       <!-- END card-arrow -->
                   </div>
                   
                   <div class="small fw-bold text-inverse mb-1">Theme Color</div>
                   <div class="card mb-3">
                       <!-- BEGIN card-body -->
                       <div class="card-body p-2">
                           <!-- BEGIN theme-list -->
                           <div class="app-theme-list">
                               <div class="app-theme-list-item"><a href="javascript:;" class="app-theme-list-link bg-pink" data-theme-class="theme-pink" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Pink">&nbsp;</a></div>
                               <div class="app-theme-list-item"><a href="javascript:;" class="app-theme-list-link bg-red" data-theme-class="theme-red" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Red">&nbsp;</a></div>
                               <div class="app-theme-list-item"><a href="javascript:;" class="app-theme-list-link bg-warning" data-theme-class="theme-warning" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Orange">&nbsp;</a></div>
                               <div class="app-theme-list-item"><a href="javascript:;" class="app-theme-list-link bg-yellow" data-theme-class="theme-yellow" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Yellow">&nbsp;</a></div>
                               <div class="app-theme-list-item"><a href="javascript:;" class="app-theme-list-link bg-lime" data-theme-class="theme-lime" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Lime">&nbsp;</a></div>
                               <div class="app-theme-list-item"><a href="javascript:;" class="app-theme-list-link bg-green" data-theme-class="theme-green" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Green">&nbsp;</a></div>
                               <div class="app-theme-list-item active"><a href="javascript:;" class="app-theme-list-link bg-teal" data-theme-class="" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Default">&nbsp;</a></div>
                               <div class="app-theme-list-item"><a href="javascript:;" class="app-theme-list-link bg-info" data-theme-class="theme-info"  data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Cyan">&nbsp;</a></div>
                               <div class="app-theme-list-item"><a href="javascript:;" class="app-theme-list-link bg-primary" data-theme-class="theme-primary"  data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Blue">&nbsp;</a></div>
                               <div class="app-theme-list-item"><a href="javascript:;" class="app-theme-list-link bg-purple" data-theme-class="theme-purple" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Purple">&nbsp;</a></div>
                               <div class="app-theme-list-item"><a href="javascript:;" class="app-theme-list-link bg-indigo" data-theme-class="theme-indigo" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Indigo">&nbsp;</a></div>
                               <div class="app-theme-list-item"><a href="javascript:;" class="app-theme-list-link bg-gray-100" data-theme-class="theme-gray-200" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Gray">&nbsp;</a></div>
                           </div>
                           <!-- END theme-list -->
                       </div>
                       <!-- END card-body -->
                       
                       <!-- BEGIN card-arrow -->
                       <div class="card-arrow">
                           <div class="card-arrow-top-left"></div>
                           <div class="card-arrow-top-right"></div>
                           <div class="card-arrow-bottom-left"></div>
                           <div class="card-arrow-bottom-right"></div>
                       </div>
                       <!-- END card-arrow -->
                   </div>
                   
                   <div class="small fw-bold text-inverse mb-1">Theme Cover</div>
                   <div class="card">
                       <!-- BEGIN card-body -->
                       <div class="card-body p-2">
                           <!-- BEGIN theme-cover -->
                           <div class="app-theme-cover">
                               <div class="app-theme-cover-item active">
                                   <a href="javascript:;" class="app-theme-cover-link" style="background-image: url({{asset('public/sites/img/cover/cover-thumb-1.jpg')}});" data-theme-cover-class="" data-toggle="theme-cover-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Default">&nbsp;</a>
                               </div>
                               <div class="app-theme-cover-item">
                                   <a href="javascript:;" class="app-theme-cover-link" style="background-image: url({{asset('public/sites/img/cover/cover-thumb-2.jpg')}});" data-theme-cover-class="bg-cover-2" data-toggle="theme-cover-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Cover 2">&nbsp;</a>
                               </div>
                               <div class="app-theme-cover-item">
                                   <a href="javascript:;" class="app-theme-cover-link" style="background-image: url({{asset('public/sites/img/cover/cover-thumb-3.jpg')}});" data-theme-cover-class="bg-cover-3" data-toggle="theme-cover-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Cover 3">&nbsp;</a>
                               </div>
                               <div class="app-theme-cover-item">
                                   <a href="javascript:;" class="app-theme-cover-link" style="background-image: url({{asset('public/sites/img/cover/cover-thumb-4.jpg')}});" data-theme-cover-class="bg-cover-4" data-toggle="theme-cover-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Cover 4">&nbsp;</a>
                               </div>
                               <div class="app-theme-cover-item">
                                   <a href="javascript:;" class="app-theme-cover-link" style="background-image: url({{asset('public/sites/img/cover/cover-thumb-5.jpg')}});" data-theme-cover-class="bg-cover-5" data-toggle="theme-cover-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Cover 5">&nbsp;</a>
                               </div>
                               <div class="app-theme-cover-item">
                                   <a href="javascript:;" class="app-theme-cover-link" style="background-image: url({{asset('public/sites/img/cover/cover-thumb-6.jpg')}});" data-theme-cover-class="bg-cover-6" data-toggle="theme-cover-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Cover 6">&nbsp;</a>
                               </div>
                               <div class="app-theme-cover-item">
                                   <a href="javascript:;" class="app-theme-cover-link" style="background-image: url({{asset('public/sites/img/cover/cover-thumb-7.jpg')}});" data-theme-cover-class="bg-cover-7" data-toggle="theme-cover-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Cover 7">&nbsp;</a>
                               </div>
                               <div class="app-theme-cover-item">
                                   <a href="javascript:;" class="app-theme-cover-link" style="background-image: url({{asset('public/sites/img/cover/cover-thumb-8.jpg')}});" data-theme-cover-class="bg-cover-8" data-toggle="theme-cover-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Cover 8">&nbsp;</a>
                               </div>
                               <div class="app-theme-cover-item">
                                   <a href="javascript:;" class="app-theme-cover-link" style="background-image: url({{asset('public/sites/img/cover/cover-thumb-9.jpg')}});" data-theme-cover-class="bg-cover-9" data-toggle="theme-cover-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Cover 9">&nbsp;</a>
                               </div>
                           </div>
                           <!-- END theme-cover -->
                       </div>
                       <!-- END card-body -->
                       
                       <!-- BEGIN card-arrow -->
                       <div class="card-arrow">
                           <div class="card-arrow-top-left"></div>
                           <div class="card-arrow-top-right"></div>
                           <div class="card-arrow-bottom-left"></div>
                           <div class="card-arrow-bottom-right"></div>
                       </div>
                       <!-- END card-arrow -->
                   </div>
               </div>
           </div>
       </div>
<!-- ================== BEGIN core-js ================== -->
<script src="{{asset('public/sites/js/vendor.min.js')}}"></script>
<script src="{{asset('public/sites/js/app.min.js')}}"></script>
<!-- ================== END core-js ================== -->

<!-- ================== BEGIN page-js ================== -->
<script src="{{asset('public/sites/plugins/@highlightjs/cdn-assets/highlight.min.js')}}"></script>

<script src="{{asset('public/sites/js/demo/highlightjs.demo.js')}}"></script>
<!-- ================== END page-js ================== -->

@yield('script')

<script>
(function(i, s, o, g, r, a, m) {
   i['GoogleAnalyticsObject'] = r;
   i[r] = i[r] || function() {
       (i[r].q = i[r].q || []).push(arguments)
   }, i[r].l = 1 * new Date();
   a = s.createElement(o),
       m = s.getElementsByTagName(o)[0];
   a.async = 1;
   a.src = g;
   m.parentNode.insertBefore(a, m)
})(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

ga('create', 'UA-53034621-1', 'auto');
ga('send', 'pageview');
</script>
</body>

</html>
