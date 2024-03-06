@extends('layouts.layout')   
@section('content')
    <style>
        .over-flow{
            width: 100%!important;
            overflow-x: auto;
            display: flex;
        }
        .isi{
            min-width: 1200px;
            max-width: 1900px;
        }
        .main-img{
            z-index: -99;
        }
        .field{
        position: relative;
        padding-left: 22%;
        }
        .text-item{
        position: relative;
        }
        .wd-100{
            position: absolute;
        
        }
        .wd-text{
            position: absolute;
            width: 100%;
            padding-top: 25%;
            color: black;
        }
    </style>
    
    <div id="content" class="app-content pt-2">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-9 ps-0">
                <div class="card px-0">
                    <div class="card-header bg-theme bg-opacity-25">
                        Realtime Status
                    </div>
                    <div class="card-arrow">
                        <div class="card-arrow-top-left"></div>
                        <div class="card-arrow-top-right"></div>
                        <div class="card-arrow-bottom-left"></div>
                        <div class="card-arrow-bottom-right"></div>
                    </div>
                    <div class="card-body py-0 my-0 ps-1">
                        <div class="over-flow container mb-4">
                            <div class="row py-0 my-0 isi text-center">
                                {{-- baris 1 --}}
                                    <div class="col-4 px-0 py-0"></div>                                
                                    <div class="col-2 px-0 py-0">
                                        <div class="field text-start">
                                            <img class="wd-100" id="sv21a" src="{{asset('public/sites/images/sv21a-off.png')}}" width="55%" alt="" >
                                            <img class="wd-100" id="sv21b" src="{{asset('public/sites/images/sv21b-off.png')}}" width="55%" alt="" >
                                            <img class="wd-100" id="sv21c" src="{{asset('public/sites/images/sv21c-off.png')}}" width="55%" alt="" >
                                        </div>
                                        <div class="text-item">
                                            <div class="wd-text">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <h5>Mixing Tank <br> 21</h5>
                                                        <center>
                                                            <b><div class="border border-dark border-3 bg-white  pt-0" style="width: 100px;" id="number_21">0001 Kg</div></b>
                                                        </center>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <img src="{{asset('public/sites/images/tank-main-1.png')}}" alt="" width="55%" class="main-img">
                                    </div>
                                    <div class="col-2 px-0 text-center py-0">
                                        <div class="field text-start">
                                            <img class="wd-100" id="sv22a" src="{{asset('public/sites/images/sv22a-off.png')}}" width="55%" alt="" >
                                            <img class="wd-100" id="sv22b" src="{{asset('public/sites/images/sv22b-off.png')}}" width="55%" alt="" >
                                            <img class="wd-100" id="sv22c" src="{{asset('public/sites/images/sv22c-off.png')}}" width="55%" alt="" >
                                        </div>
                                        <div class="text-item">
                                            <div class="wd-text">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <h5>Mixing Tank <br> 22</h5>
                                                        <center>
                                                            <b><div class="border border-dark border-3 bg-white pt-0" style="width: 100px;" id="number_22">0001 Kg</div></b>
                                                        </center>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <img src="{{asset('public/sites/images/tank-main-1.png')}}" alt="" width="55%" class="main-img"></div>
                                    <div class="col-3 px-0 py-0"></div>
                                    <div class="col-1 px-0 py-0"></div>
                                {{-- end baris 1 --}}
                                <div class="col-1 px-0 py-0"></div>
                                <div class="col-1 px-0 py-0"><img src="{{asset('public/sites/images/pipe-c-l.png')}}" alt="" width="100%" class="main-img"></div>
                                <div class="col-1 px-0 py-0"><img src="{{asset('public/sites/images/pipe-c.png')}}" alt="" width="100%" class="main-img"></div>
                                <div class="col-1 px-0 py-0"><img src="{{asset('public/sites/images/pipe-c.png')}}" alt="" width="100%" class="main-img"></div>
                                <div class="col-2 px-0 py-0 text-center"><img src="{{asset('public/sites/images/pipe-3.png')}}" alt="" width="100%" class="main-img"></div>
                                <div class="col-2 px-0 py-0 text-center"><img src="{{asset('public/sites/images/pipe-2.png')}}" alt="" width="100%" class="main-img"></div>
                                <div class="col-3 px-0 py-0"></div>
                                <div class="col-1 px-0 py-0"></div>
                                <!--  -->
                            
                                <!--  -->
                                <div class="col-2 px-0 text-center"><img src="{{asset('public/sites/images/tank-valve-3.png')}}" alt="" width="55%" class="main-img"></div>
                                <div class="col-2 px-0 text-center">
                                    <div class="field text-start">
                                        <img class="wd-100" id="sv6a" src="{{asset('public/sites/images/sv6a-off.png')}}" width="55%" alt="" >
                                        <img class="wd-100" id="sv6b" src="{{asset('public/sites/images/sv6b-off.png')}}" width="55%" alt="" >
                                        <img class="wd-100" id="sv6c" src="{{asset('public/sites/images/sv6c-off.png')}}" width="55%" alt="" >
                                    </div>
                                    <div class="text-item">
                                        <div class="wd-text">
                                            <div class="row">
                                                <div class="col-12">
                                                    <h5>Mixing Tank <br> 6</h5>
                                                    <center>
                                                    <b><div class="border border-dark border-3 bg-white pt-0" style="width: 100px;" id="number_6">0001 Kg</div></b>
                                                    </center>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <img src="{{asset('public/sites/images/tank-main-1.png')}}" alt="" width="55%" class="main-img">
                                </div>
                                <div class="col-2 px-0 text-center"><div class="field text-start">
                                        <img class="wd-100" id="sv7a" src="{{asset('public/sites/images/sv7a-off.png')}}" width="55%" alt="" >
                                        <img class="wd-100" id="sv7b" src="{{asset('public/sites/images/sv7b-off.png')}}" width="55%" alt="" >
                                        
                                    </div>
                                    <div class="text-item">
                                        <div class="wd-text">
                                            <div class="row">
                                                <div class="col-12">
                                                    <h5>Mixing Tank <br> 7</h5>
                                                    <center>
                                                    <b><div class="border border-dark border-3 bg-white pt-0" style="width: 100px;" id="number_7">0001 Kg</div></b>
                                                    </center>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <img src="{{asset('public/sites/images/tank-main-1.png')}}" alt="" width="55%" class="main-img"></div>
                                <div class="col-1 px-0"></div>
                                <div class="col-2 px-0 text-center"><div class="field text-start">
                                        <img class="wd-100" id="sv5a" src="{{asset('public/sites/images/sv5a-off.png')}}" width="55%" alt="" >
                                        <img class="wd-100" id="sv5b" src="{{asset('public/sites/images/sv5b-off.png')}}" width="55%" alt="" >
                                        <img class="wd-100" id="sv5c" src="{{asset('public/sites/images/sv5c-off.png')}}" width="55%" alt="" >
                                    </div>
                                    <div class="text-item">
                                        <div class="wd-text">
                                            <div class="row">
                                                <div class="col-12">
                                                    <h5>Mixing Tank <br> 5</h5>
                                                    <center>
                                                    <b><div class="border border-dark border-3 bg-white  pt-0" style="width: 100px;" id="number_5">0001 Kg</div></b>
                                                    </center>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <img src="{{asset('public/sites/images/tank-main-1.png')}}" alt="" width="55%" class="main-img"></div>
                                <div class="col-2 px-0 text-center"><div class="field text-start">
                                        <img class="wd-100" id="sv17a" src="{{asset('public/sites/images/sv17a-off.png')}}" width="55%" alt="" >
                                        <img class="wd-100" id="sv17b" src="{{asset('public/sites/images/sv17b-off.png')}}" width="55%" alt="" >
                                        
                                    </div>
                                    <div class="text-item">
                                        <div class="wd-text">
                                            <div class="row">
                                                <div class="col-12">
                                                    <h5>Mixing Tank <br> 17</h5>
                                                    <center>
                                                    <b><div class="border border-dark border-3 bg-white pt-0" style="width: 100px;" id="number_17">0001 Kg</div></b> 
                                                    </center>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <img src="{{asset('public/sites/images/tank-main-1.png')}}" alt="" width="55%" class="main-img"></div>
                                <div class="col-1 px-0"></div>
                                <!--  -->
                                    <div class="col-1 px-0"></div>
                                    <div class="col-1 px-0"><img src="{{asset('public/sites/images/pipe-c-t-5.png')}}" alt="" width="100%" class="main-img"></div>
                                    <div class="col-2 px-0 text-center"><img src="{{asset('public/sites/images/pipe-3.png')}}" alt="" width="100%" class="main-img"></div>
                                    <div class="col-2 px-0 text-center"><img src="{{asset('public/sites/images/pipe-3.png')}}" alt="" width="100%" class="main-img"></div>
                                    <div class="col-1 px-0"><img src="{{asset('public/sites/images/pipe-c.png')}}" alt="" width="100%" class="main-img"></div>
                                    <div class="col-2 px-0 text-center"><img src="{{asset('public/sites/images/pipe-3.png')}}" alt="" width="100%" class="main-img"></div>
                                    <div class="col-2 px-0 text-center"><img src="{{asset('public/sites/images/pipe-2.png')}}" alt="" width="100%" class="main-img"></div>
                                    <div class="col-1 px-0"></div>
                                <!--  -->
                                <div class="col-2 px-0 text-center"><img src="{{asset('public/sites/images/tank-in-4.png')}}" alt="" width="100%" class="main-img"></div>
                                <div class="col-2 px-0 text-center">
                                    <div class="field text-start">
                                        <img class="wd-100" id="sv4a" src="{{asset('public/sites/images/sv4a-off.png')}}" width="55%" alt="" >
                                        <img class="wd-100" id="sv4b" src="{{asset('public/sites/images/sv4b-off.png')}}" width="55%" alt="" >
                                        
                                    </div>
                                        <div class="text-item">
                                            <div class="wd-text">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <h5>Mixing Tank <br> 4</h5>
                                                        <center>
                                                        <b><div class="border border-dark border-3 bg-white  pt-0" style="width: 100px;" id="number_4">0001 Kg</div></b>
                                                        </center>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <img src="{{asset('public/sites/images/tank-main-1.png')}}" alt="" width="55%" class="main-img">
                                </div>
                                <div class="col-2 px-0 text-center">
                                <div class="field text-start">
                                    <a href="#modalEdit" data-bs-toggle="modal" >
                                        <img class="wd-100" id="sv3a" src="{{asset('public/sites/images/sv3a-off.png')}}" width="55%" alt="" >
                                        <img class="wd-100" id="sv3b" src="{{asset('public/sites/images/sv3b-off.png')}}" width="55%" alt="" >
                                        </a>
                                    </div>
                                    <div class="text-item">
                                        <div class="wd-text">
                                            <div class="row">
                                                <div class="col-12">
                                                    <h5>Mixing Tank <br> 3</h5>
                                                    <center>
                                                    <b><div class="border border-dark border-3 bg-white  pt-0" style="width: 100px;" id="number_3">0001 Kg</div></b>
                                                    </center>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <img src="{{asset('public/sites/images/tank-main-1.png')}}" alt="" width="55%" class="main-img">
                                </div>
                                
                                <div class="col-2 px-0 text-center">
                                <div class="field text-start">
                                        <img class="wd-100" id="sv10a" src="{{asset('public/sites/images/sv10a-off.png')}}" width="55%" alt="" >
                                        <img class="wd-100" id="sv10b" src="{{asset('public/sites/images/sv10b-off.png')}}" width="55%" alt="" >
                                    </div>
                                    <div class="text-item">
                                        <div class="wd-text">
                                            <div class="row">
                                                <div class="col-12">
                                                    <h5>Mixing Tank <br> 10</h5>
                                                    <center>
                                                    <b><div class="border border-dark border-3 bg-white  pt-0" style="width: 100px;" id="number_10">0001 Kg</div></b>
                                                    </center>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <img src="{{asset('public/sites/images/tank-main-1.png')}}" alt="" width="55%" class="main-img">
                                </div>
                                <div class="col-2 px-0 text-center">
                                <div class="field text-start">
                                        <img class="wd-100" id="sv8a" src="{{asset('public/sites/images/sv8a-off.png')}}" width="55%" alt="" >
                                        <img class="wd-100" id="sv8b" src="{{asset('public/sites/images/sv8b-off.png')}}" width="55%" alt="" >
                                    </div>
                                    <div class="text-item">
                                        <div class="wd-text">
                                            <div class="row">
                                                <div class="col-12">
                                                    <h5>Mixing Tank <br> 8</h5>
                                                    <center>
                                                    <b><div class="border border-dark border-3 bg-white  pt-0" style="width: 100px;" id="number_8">0001 Kg</div></b>
                                                    </center>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <img src="{{asset('public/sites/images/tank-main-1.png')}}" alt="" width="55%" class="main-img">
                                </div>
                                <div class="col-2 px-0"></div>
                                <!--  -->
                                <div class="col-1 px-0"></div>
                                <div class="col-1 px-0"><img src="{{asset('public/sites/images/pipe-c-t-d.png')}}" alt="" width="100%" class="main-img"></div>
                                <div class="col-2 px-0 text-center"><img src="{{asset('public/sites/images/pipe-3.png')}}" alt="" width="100%" class="main-img"></div>
                                <div class="col-2 px-0 text-center"><img src="{{asset('public/sites/images/pipe-3.png')}}" alt="" width="100%" class="main-img"></div>
                                
                                <div class="col-2 px-0 text-center"><img src="{{asset('public/sites/images/pipe-3.png')}}" alt="" width="100%" class="main-img"></div>
                                <div class="col-2 px-0 text-center"><img src="{{asset('public/sites/images/pipe-2.png')}}" alt="" width="100%" class="main-img"></div>
                                <div class="col-1 px-0"></div>
                                
                                
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-3">
                <div class="row pt-0">
                <div class="col-12 px-0 py-0">
                        <div class="card">
                            <div class="card-header bg-theme bg-opacity-25">
                                Alarm Log
                            </div>
                            <div class="card-body px-0 py-0" style="height: 405px">
                                <!-- table-striped -->
                                <table class="table table-striped">
                                    <thead>
                                        <th>Trigger Time</th>
                                        <th>Massage</th>
                                        <th>Count</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>00-00-00 00:00:00</td>
                                            <td>Error PLC with alarm battery</td>
                                            <td>10</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="card-arrow">
                                <div class="card-arrow-top-left"></div>
                                <div class="card-arrow-top-right"></div>
                                <div class="card-arrow-bottom-left"></div>
                                <div class="card-arrow-bottom-right"></div>
                            </div>
    
                        </div>
                    </div>
                    <div class="col-12 px-0 py-0">
                        <div class="card">
                            <div class="card-header bg-theme bg-opacity-25">
                                Daerator Area
                            </div>
                            <div class="card-body px-2 py-0">
                                <div class="row">
                                <table class="table">
                                    <tbody>                           
                                        <tr>
                                            <td class="align-middle">
                                                --
                                            </td>
                                            <td>
                                                <div class="text-center border  bg-opacity-40" id="t-sv-in-1">
                                                    N/A
                                                </div>
                                            </td>
                                            <td class="align-middle">
                                                --
                                            </td>
                                            <td>
                                                <div class="text-center border  bg-opacity-40" id="t-sv-in-2">
                                                    N/A
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                </div>
                                
                            </div>
                            <div class="card-arrow">
                                <div class="card-arrow-top-left"></div>
                                <div class="card-arrow-top-right"></div>
                                <div class="card-arrow-bottom-left"></div>
                                <div class="card-arrow-bottom-right"></div>
                            </div>
    
                        </div>
                    </div>
                    <div class="col px-0 pt-2">
                        <div class="card">
                            <div class="card-header bg-theme bg-opacity-25 py-1 px-1">
                                <table class="table py-0 mb-0 table-borderless px-0">
                                    <tbody>
                                    <tr>
                                        <td class="align-middle ">
                                            Mixing Tank 21
                                        </td>
                                        <td class="align-middle py-0 text-end" align="right">                           
                                            <input type="text"  class="border-light bg-opacity-90 bg-white text-body text-end" placeholder="00 Kg" style="width: 100%;" disabled id="t-v-21">            
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="card-body px-0 py-0 mb-0">
                                <table class="table mb-0">
                                    <tbody>       
                                        <tr>
                                            <td class="align-middle">
                                                SV21A
                                            </td>
                                            <td>
                                                <div class="text-center border bg-danger bg-opacity-40" id="t-sv21a">
                                                    Closed
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="align-middle">
                                                SV21B
                                            </td>
                                            <td>
                                                <div class="text-center border bg-danger bg-opacity-40" id="t-sv21b">
                                                    Closed
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="align-middle">
                                                SV21C
                                            </td>
                                            <td>
                                                <div class="text-center border bg-danger bg-opacity-40" id="t-sv21c">
                                                    Closed
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="card-arrow">
                                <div class="card-arrow-top-left"></div>
                                <div class="card-arrow-top-right"></div>
                                <div class="card-arrow-bottom-left"></div>
                                <div class="card-arrow-bottom-right"></div>
                            </div>
    
                        </div>
                    </div>
                    <div class="col px-0 pt-2">
                        <div class="card">
                            <div class="card-header bg-theme bg-opacity-25 py-1 px-1">
                                <table class="table py-0 mb-0 table-borderless px-0">
                                    <tbody>
                                    <tr>
                                        <td class="align-middle ">
                                            Mixing Tank 22
                                        </td>
                                        <td class="align-middle py-0 text-end" align="right">                           
                                            <input type="text"  class="border-light bg-opacity-90 bg-white text-body text-end" placeholder="00 Kg" style="width: 100%;" disabled  id="t-v-22">            
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="card-body px-0 py-0 mb-0">
                                <table class="table mb-0">
                                    <tbody>       
                                        <tr>
                                            <td class="align-middle">
                                                SV22A
                                            </td>
                                            <td>
                                                <div class="text-center border bg-danger bg-opacity-40" id="t-sv22a">
                                                    Closed
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="align-middle">
                                                SV22B
                                            </td>
                                            <td>
                                                <div class="text-center border bg-danger bg-opacity-40" id="t-sv22b">
                                                    Closed
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="align-middle">
                                                SV22C
                                            </td>
                                            <td>
                                                <div class="text-center border bg-danger bg-opacity-40" id="t-sv22c">
                                                    Closed
                                                </div>
                                            </td>
                                            <td>
                                                
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="card-arrow">
                                <div class="card-arrow-top-left"></div>
                                <div class="card-arrow-top-right"></div>
                                <div class="card-arrow-bottom-left"></div>
                                <div class="card-arrow-bottom-right"></div>
                            </div>
    
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col px-0 pt-2">
                <div class="card">
                    <div class="card-header bg-theme bg-opacity-25 py-1 px-1">
                        <table class="table py-0 mb-0 table-borderless px-0">
                            <tbody>
                            <tr>
                                <td class="align-middle ">
                                    Mixing Tank 6
                                </td>
                                <td class="align-middle py-0 text-end" align="right">                           
                                    <input type="text" class="border-light bg-opacity-90 bg-white text-body text-end" placeholder="00 Kg" disabled style="width: 100%;"  id="t-v-6">            
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-body px-0 py-0 mb-0">
                        <table class="table mb-0">
                            <tbody>       
                                <tr>
                                    <td class="align-middle">
                                        SV6A
                                    </td>
                                    <td>
                                        <div class="text-center text-dark border bg-danger bg-opacity-40" id="t-sv6a">
                                            Closed
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle">
                                        SV6B
                                    </td>
                                    <td>
                                        <div class="text-center border bg-danger bg-opacity-40" id="t-sv6b">
                                            Closed
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle">
                                        SV6C
                                    </td>
                                    <td>
                                        <div class="text-center border bg-danger bg-opacity-40" id="t-sv6c">
                                            Closed
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-arrow">
                        <div class="card-arrow-top-left"></div>
                        <div class="card-arrow-top-right"></div>
                        <div class="card-arrow-bottom-left"></div>
                        <div class="card-arrow-bottom-right"></div>
                    </div>
    
                </div>
            </div>
            <div class="col px-0 pt-2">
                <div class="card">
                    <div class="card-header bg-theme bg-opacity-25 py-1 px-1">
                        <table class="table py-0 mb-0 table-borderless px-0">
                            <tbody>
                            <tr>
                                <td class="align-middle ">
                                    Mixing Tank 7
                                </td>
                                <td class="align-middle py-0 text-end" align="right">                           
                                    <input type="text"  class="border-light bg-opacity-90 bg-white text-body text-end" placeholder="00 Kg" style="width: 100%;" disabled id="t-v-7">            
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-body px-0 py-0 mb-0">
                        <table class="table mb-0">
                            <tbody>       
                                <tr>
                                    <td class="align-middle">
                                        SV7A
                                    </td>
                                    <td>
                                        <div class="text-center border bg-danger bg-opacity-40" id="t-sv7a">
                                            Closed
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle">
                                        SV7B
                                    </td>
                                    <td>
                                        <div class="text-center border bg-danger bg-opacity-40" id="t-sv7b">
                                            Closed
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle">
                                        -
                                    </td>
                                    <td>
                                        
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-arrow">
                        <div class="card-arrow-top-left"></div>
                        <div class="card-arrow-top-right"></div>
                        <div class="card-arrow-bottom-left"></div>
                        <div class="card-arrow-bottom-right"></div>
                    </div>
    
                </div>
            </div>
            <div class="col px-0 pt-2">
                <div class="card">
                    <div class="card-header bg-theme bg-opacity-25 py-1 px-1">
                        <table class="table py-0 mb-0 table-borderless px-0">
                            <tbody>
                            <tr>
                                <td class="align-middle ">
                                    Mixing Tank 5
                                </td>
                                <td class="align-middle py-0 text-end" align="right">                           
                                    <input type="text"  class="border-light bg-opacity-90 bg-white text-body text-end" placeholder="00 Kg" style="width: 100%;" disabled id="t-v-5">            
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-body px-0 py-0 mb-0">
                        <table class="table mb-0">
                            <tbody>       
                                <tr>
                                    <td class="align-middle">
                                        SV5A
                                    </td>
                                    <td>
                                        <div class="text-center border bg-danger bg-opacity-40" id="t-sv5a">
                                            Closed
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle">
                                        SV5B
                                    </td>
                                    <td>
                                        <div class="text-center border bg-danger bg-opacity-40" id="t-sv5b">
                                            Closed
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle">
                                        SV5C
                                    </td>
                                    <td>
                                        <div class="text-center border bg-danger bg-opacity-40" id="t-sv5c">
                                            Closed
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-arrow">
                        <div class="card-arrow-top-left"></div>
                        <div class="card-arrow-top-right"></div>
                        <div class="card-arrow-bottom-left"></div>
                        <div class="card-arrow-bottom-right"></div>
                    </div>
    
                </div>
            </div>
            <div class="col px-0 pt-2">
                <div class="card">
                    <div class="card-header bg-theme bg-opacity-25 py-1 px-1">
                        <table class="table py-0 mb-0 table-borderless px-0">
                            <tbody>
                            <tr>
                                <td class="align-middle ">
                                    Mixing Tank 17
                                </td>
                                <td class="align-middle py-0 text-end" align="right">                           
                                    <input type="text"  class="border-light bg-opacity-90 bg-white text-body text-end" placeholder="00 Kg" style="width: 100%;" disabled id="t-v-17">            
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-body px-0 py-0 mb-0">
                        <table class="table mb-0">
                            <tbody>       
                                <tr>
                                    <td class="align-middle">
                                        SV17A
                                    </td>
                                    <td>
                                        <div class="text-center border bg-danger bg-opacity-40" id="t-sv17a">
                                            Closed
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle">
                                        SV17B
                                    </td>
                                    <td>
                                        <div class="text-center border bg-danger bg-opacity-40" id="t-sv17b">
                                            Closed
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle">
                                        -
                                    </td>
                                    <td>
                                        
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-arrow">
                        <div class="card-arrow-top-left"></div>
                        <div class="card-arrow-top-right"></div>
                        <div class="card-arrow-bottom-left"></div>
                        <div class="card-arrow-bottom-right"></div>
                    </div>
    
                </div>
            </div>
            <div class="col px-0 pt-2">
                <div class="card">
                    <div class="card-header bg-theme bg-opacity-25 py-1 px-1">
                        <table class="table py-0 mb-0 table-borderless px-0">
                            <tbody>
                            <tr>
                                <td class="align-middle ">
                                    Mixing Tank 4
                                </td>
                                <td class="align-middle py-0 text-end" align="right">                           
                                    <input type="text"  class="border-light bg-opacity-90 bg-white text-body text-end" placeholder="00 Kg" style="width: 100%;" disabled id="t-v-4">            
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-body px-0 py-0 mb-0">
                        <table class="table mb-0">
                            <tbody>       
                                <tr>
                                    <td class="align-middle">
                                        SV4A
                                    </td>
                                    <td>
                                        <div class="text-center border bg-danger bg-opacity-40" id="t-sv4a">
                                            Closed
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle">
                                        SV4B
                                    </td>
                                    <td>
                                        <div class="text-center border bg-danger bg-opacity-40" id="t-sv4b">
                                            Closed
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle">
                                        -
                                    </td>
                                    <td>
                                        
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-arrow">
                        <div class="card-arrow-top-left"></div>
                        <div class="card-arrow-top-right"></div>
                        <div class="card-arrow-bottom-left"></div>
                        <div class="card-arrow-bottom-right"></div>
                    </div>
    
                </div>
            </div>
            <div class="col px-0 pt-2">
                <div class="card">
                    <div class="card-header bg-theme bg-opacity-25 py-1 px-1">
                        <table class="table py-0 mb-0 table-borderless px-0">
                            <tbody>
                            <tr>
                                <td class="align-middle ">
                                    Mixing Tank 3
                                </td>
                                <td class="align-middle py-0 text-end" align="right">                           
                                    <input type="text"  class="border-light bg-opacity-90 bg-white text-body text-end" placeholder="00 Kg" style="width: 100%;" disabled id="t-v-3">            
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-body px-0 py-0 mb-0">
                        <table class="table mb-0">
                            <tbody>       
                                <tr>
                                    <td class="align-middle">
                                        SV3A
                                    </td>
                                    <td>
                                        <div class="text-center border bg-danger bg-opacity-40" id="t-sv3a">
                                            Closed
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle">
                                        SV3B
                                    </td>
                                    <td>
                                        <div class="text-center border bg-danger bg-opacity-40" id="t-sv3b">
                                            Closed
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle">
                                        -
                                    </td>
                                    <td>
                                        
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-arrow">
                        <div class="card-arrow-top-left"></div>
                        <div class="card-arrow-top-right"></div>
                        <div class="card-arrow-bottom-left"></div>
                        <div class="card-arrow-bottom-right"></div>
                    </div>
    
                </div>
            </div>
            <div class="col px-0 pt-2">
                <div class="card">
                    <div class="card-header bg-theme bg-opacity-25 py-1 px-1">
                        <table class="table py-0 mb-0 table-borderless px-0">
                            <tbody>
                            <tr>
                                <td class="align-middle ">
                                    Mixing Tank 10
                                </td>
                                <td class="align-middle py-0 text-end" align="right">                           
                                    <input type="text"  class="border-light bg-opacity-90 bg-white text-body text-end" placeholder="00 Kg" style="width: 100%;" disabled id="t-v-10">            
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-body px-0 py-0 mb-0">
                        <table class="table mb-0">
                            <tbody>       
                                <tr>
                                    <td class="align-middle">
                                        SV10A
                                    </td>
                                    <td>
                                        <div class="text-center border bg-danger bg-opacity-40" id="t-sv10a">
                                            Closed
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle">
                                        SV10B
                                    </td>
                                    <td>
                                        <div class="text-center border bg-danger bg-opacity-40" id="t-sv10b">
                                            Closed
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle">
                                        -
                                    </td>
                                    <td>
                                        
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-arrow">
                        <div class="card-arrow-top-left"></div>
                        <div class="card-arrow-top-right"></div>
                        <div class="card-arrow-bottom-left"></div>
                        <div class="card-arrow-bottom-right"></div>
                    </div>
    
                </div>
            </div>
            <div class="col px-0 pt-2">
                <div class="card">
                    <div class="card-header bg-theme bg-opacity-25 py-1 px-1">
                        <table class="table py-0 mb-0 table-borderless px-0">
                            <tbody>
                            <tr>
                                <td class="align-middle ">
                                    Mixing Tank 8
                                </td>
                                <td class="align-middle py-0 text-end" align="right">                           
                                    <input type="text"  class="border-light bg-opacity-90 bg-white text-body text-end" placeholder="00 Kg" style="width: 100%;" disabled id="t-v-8">            
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-body px-0 py-0 mb-0">
                        <table class="table mb-0">
                            <tbody>       
                                <tr>
                                    <td class="align-middle">
                                        SV8A
                                    </td>
                                    <td>
                                        <div class="text-center border bg-danger bg-opacity-40" id="t-sv8a">
                                            Closed
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle">
                                        SV8B
                                    </td>
                                    <td>
                                        <div class="text-center border bg-danger bg-opacity-40" id="t-sv8b">
                                            Closed
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle">
                                        -
                                    </td>
                                    <td>
                                        
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-arrow">
                        <div class="card-arrow-top-left"></div>
                        <div class="card-arrow-top-right"></div>
                        <div class="card-arrow-bottom-left"></div>
                        <div class="card-arrow-bottom-right"></div>
                    </div>
    
                </div>
            </div>
            
            
        </div>
        
    
    </div>
@endsection
@section('script')

<script>
function getReatimeValve() {
    $.ajax({
        url: '{{route("realtime.valve")}}',
        type: 'POST',
        data: {
        _token: "{{ csrf_token() }}",
        // Other data you want to send with the request
         },
        success: function(response) {
            var a = response.data;
                var sv3a = 0;
                var sv3b = 0;
                var sv3c = 0;

                var sv4a = 0;
                var sv4b = 0;
                var sv4c = 0;

                var sv5a = 0;
                var sv5b = 0;
                var sv5c = 0;

                var sv6a = 0;
                var sv6b = 0;
                var sv6c = 0;

                var sv7a = 0;
                var sv7b = 0;
                var sv7c = 0;

                var sv8a = 0;
                var sv8b = 0;
                var sv8c = 0;

                var sv10a = 0;
                var sv10b = 0;
                var sv10c = 0;

                var sv17a = 0;
                var sv17b = 0;
                var sv17c = 0;

                var sv21a = 0;
                var sv21b = 0;
                var sv21c = 0;

                var sv22a = 0;
                var sv22b = 0;
                var sv22c = 0;
                // console.log(a);
                sv3a = a[0].sv3a;
                sv3b = a[0].sv3b;
                sv3c = a[0].sv3c;

                sv4a = a[0].sv4a;
                sv4b = a[0].sv4b;
                sv4c = a[0].sv4c;

                sv5a = a[0].sv5a;
                sv5b = a[0].sv5b;
                sv5c = a[0].sv5c;

                sv6a = a[0].sv6a;
                sv6b = a[0].sv6b;
                sv6c = a[0].sv6c;

                sv7a = a[0].sv7a;
                sv7b = a[0].sv7b;
                sv7c = a[0].sv7c;

                sv8a = a[0].sv8a;
                sv8b = a[0].sv8b;
                sv8c = a[0].sv8c;

                sv10a = a[0].sv10a;
                sv10b = a[0].sv10b;
                sv10c = a[0].sv10c;

                sv17a = a[0].sv17a;
                sv17b = a[0].sv17b;
                sv17c = a[0].sv17c;

                sv21a = a[0].sv21a;
                sv21b = a[0].sv21b;
                sv21c = a[0].sv21c;

                sv22a = a[0].sv22a;
                sv22b = a[0].sv22b;
                sv22c = a[0].sv22c;

                //////
                if(sv3a==0){
                    document.getElementById("sv3a").src = "{{asset('public/sites/images/sv3a-off.png')}}";
                    jQuery('#t-sv3a').html("CLOSE");
                    jQuery('#t-sv3a').removeClass("bg-success");
                    jQuery('#t-sv3a').removeClass("bg-danger");
                    jQuery('#t-sv3a').addClass("bg-white");
                }
                else if(sv3a==1){
                    document.getElementById("sv3a").src = "{{asset('public/sites/images/sv3a-on.png')}}";
                    jQuery('#t-sv3a').html("OPEN");
                    jQuery('#t-sv3a').addClass("bg-success");
                    jQuery('#t-sv3a').removeClass("bg-danger");
                    jQuery('#t-sv3a').removeClass("bg-white");
                }

                if(sv3b==0){
                    document.getElementById("sv3b").src = "{{asset('public/sites/images/sv3b-off.png')}}";
                    jQuery('#t-sv3b').html("CLOSE");
                    jQuery('#t-sv3b').removeClass("bg-success");
                    jQuery('#t-sv3b').removeClass("bg-danger");
                    jQuery('#t-sv3b').addClass("bg-white");
                
                }
                else if(sv3b==1){
                    document.getElementById("sv3b").src = "{{asset('public/sites/images/sv3b-on.png')}}";
                    jQuery('#t-sv3b').html("OPEN");
                    jQuery('#t-sv3b').addClass("bg-success");
                    jQuery('#t-sv3b').removeClass("bg-danger");
                    jQuery('#t-sv3b').removeClass("bg-white");
                }
                //////

                if(sv4a==0){
                    document.getElementById("sv4a").src = "{{asset('public/sites/images/sv4a-off.png')}}";
                    jQuery('#t-sv4a').html("CLOSE");
                    jQuery('#t-sv4a').removeClass("bg-success");
                    jQuery('#t-sv4a').removeClass("bg-danger");
                    jQuery('#t-sv4a').addClass("bg-white");
                }
                else if(sv4a==1){
                    document.getElementById("sv4a").src = "{{asset('public/sites/images/sv4a-on.png')}}";
                    jQuery('#t-sv4a').html("OPEN");
                    jQuery('#t-sv4a').addClass("bg-success");
                    jQuery('#t-sv4a').removeClass("bg-danger");
                    jQuery('#t-sv4a').removeClass("bg-white");
                }

                if(sv4b==0){
                    document.getElementById("sv4b").src = "{{asset('public/sites/images/sv4b-off.png')}}";
                    jQuery('#t-sv4b').html("CLOSE");
                    jQuery('#t-sv4b').removeClass("bg-success");
                    jQuery('#t-sv4b').removeClass("bg-danger");
                    jQuery('#t-sv4b').addClass("bg-white");
                }
                else if(sv4b==1){
                    document.getElementById("sv4b").src = "{{asset('public/sites/images/sv4b-on.png')}}";
                    jQuery('#t-sv4b').html("OPEN");
                    jQuery('#t-sv4b').addClass("bg-success");
                    jQuery('#t-sv4b').removeClass("bg-danger");
                    jQuery('#t-sv4b').removeClass("bg-white");
                }
                //////

                if(sv5a==0){
                    document.getElementById("sv5a").src = "{{asset('public/sites/images/sv5a-off.png')}}";
                    jQuery('#t-sv5a').html("CLOSE");
                    jQuery('#t-sv5a').removeClass("bg-success");
                    jQuery('#t-sv5a').removeClass("bg-danger");
                    jQuery('#t-sv5a').addClass("bg-white");
                }
                else if(sv5a==1){
                    document.getElementById("sv5a").src = "{{asset('public/sites/images/sv5a-on.png')}}";
                    jQuery('#t-sv5a').html("OPEN");
                    jQuery('#t-sv5a').addClass("bg-success");
                    jQuery('#t-sv5a').removeClass("bg-danger");
                    jQuery('#t-sv5a').removeClass("bg-white");
                }

                if(sv5b==0){
                    document.getElementById("sv5b").src = "{{asset('public/sites/images/sv5b-off.png')}}";
                    jQuery('#t-sv5b').html("CLOSE");
                    jQuery('#t-sv5b').removeClass("bg-success");
                    jQuery('#t-sv5b').removeClass("bg-danger");
                    jQuery('#t-sv5b').addClass("bg-white");
                }
                else if(sv5b==1){
                    document.getElementById("sv5b").src = "{{asset('public/sites/images/sv5b-on.png')}}";
                    jQuery('#t-sv5b').html("OPEN");
                    jQuery('#t-sv5b').addClass("bg-success");
                    jQuery('#t-sv5b').removeClass("bg-danger");
                    jQuery('#t-sv5b').removeClass("bg-white");
                }
                
                if(sv5c==0){
                    document.getElementById("sv5c").src = "{{asset('public/sites/images/sv5c-off.png')}}";
                    jQuery('#t-sv5c').html("CLOSE");
                    jQuery('#t-sv5c').removeClass("bg-success");
                    jQuery('#t-sv5c').removeClass("bg-danger");
                    jQuery('#t-sv5c').addClass("bg-white");
                }
                else if(sv5c==1){
                    document.getElementById("sv5c").src = "{{asset('public/sites/images/sv5c-on.png')}}";
                    jQuery('#t-sv5c').html("OPEN");
                    jQuery('#t-sv5c').addClass("bg-success");
                    jQuery('#t-sv5c').removeClass("bg-danger");
                    jQuery('#t-sv5c').removeClass("bg-white");
                }
                //////
                //////

                if(sv6a==0){
                    document.getElementById("sv6a").src = "{{asset('public/sites/images/sv6a-off.png')}}";
                    jQuery('#t-sv6a').html("CLOSE");
                    jQuery('#t-sv6a').removeClass("bg-success");
                    jQuery('#t-sv6a').removeClass("bg-danger");
                    jQuery('#t-sv6a').addClass("bg-white");
                }
                else if(sv6a==1){
                    document.getElementById("sv6a").src = "{{asset('public/sites/images/sv6a-on.png')}}";
                    jQuery('#t-sv6a').html("OPEN");
                    jQuery('#t-sv6a').addClass("bg-success");
                    jQuery('#t-sv6a').removeClass("bg-danger");
                    jQuery('#t-sv6a').removeClass("bg-white");
                }

                if(sv6b==0){
                    document.getElementById("sv6b").src = "{{asset('public/sites/images/sv6b-off.png')}}";
                    jQuery('#t-sv6b').html("CLOSE");
                    jQuery('#t-sv6b').removeClass("bg-success");
                    jQuery('#t-sv6b').removeClass("bg-danger");
                    jQuery('#t-sv6b').addClass("bg-white");
                }
                else if(sv6b==1){
                    document.getElementById("sv6b").src = "{{asset('public/sites/images/sv6b-on.png')}}";
                    jQuery('#t-sv6b').html("OPEN");
                    jQuery('#t-sv6b').addClass("bg-success");
                    jQuery('#t-sv6b').removeClass("bg-danger");
                    jQuery('#t-sv6b').removeClass("bg-white");
                }
                if(sv6c==0){
                    document.getElementById("sv6c").src = "{{asset('public/sites/images/sv6c-off.png')}}";
                    jQuery('#t-sv6c').html("CLOSE");
                    jQuery('#t-sv6c').removeClass("bg-success");
                    jQuery('#t-sv6c').removeClass("bg-danger");
                    jQuery('#t-sv6c').addClass("bg-white");
                }
                else if(sv6c==1){
                    document.getElementById("sv6c").src = "{{asset('public/sites/images/sv6c-on.png')}}";
                    jQuery('#t-sv6c').html("OPEN");
                    jQuery('#t-sv6c').addClass("bg-success");
                    jQuery('#t-sv6c').removeClass("bg-danger");
                    jQuery('#t-sv6c').removeClass("bg-white");
                }
                //////

                //////

                if(sv7a==0){
                    document.getElementById("sv7a").src = "{{asset('public/sites/images/sv7a-off.png')}}";
                    jQuery('#t-sv7a').html("CLOSE");
                    jQuery('#t-sv7a').removeClass("bg-success");
                    jQuery('#t-sv7a').removeClass("bg-danger");
                    jQuery('#t-sv7a').addClass("bg-white");
                }
                else if(sv7a==1){
                    document.getElementById("sv7a").src = "{{asset('public/sites/images/sv7a-on.png')}}";
                    jQuery('#t-sv7a').html("OPEN");
                    jQuery('#t-sv7a').addClass("bg-success");
                    jQuery('#t-sv7a').removeClass("bg-danger");
                    jQuery('#t-sv7a').removeClass("bg-white");
                }

                if(sv7b==0){
                    document.getElementById("sv7b").src = "{{asset('public/sites/images/sv7b-off.png')}}";
                    jQuery('#t-sv7b').html("CLOSE");
                    jQuery('#t-sv7b').removeClass("bg-success");
                    jQuery('#t-sv7b').removeClass("bg-danger");
                    jQuery('#t-sv7b').addClass("bg-white");
                }
                else if(sv7b==1){
                    document.getElementById("sv7b").src = "{{asset('public/sites/images/sv7b-on.png')}}";
                    jQuery('#t-sv7b').html("OPEN");
                    jQuery('#t-sv7b').addClass("bg-success");
                    jQuery('#t-sv7b').removeClass("bg-danger");
                    jQuery('#t-sv7b').removeClass("bg-white");
                }
                //////
                //////

                if(sv8a==0){
                    document.getElementById("sv8a").src = "{{asset('public/sites/images/sv8a-off.png')}}";
                    jQuery('#t-sv8a').html("CLOSE");
                    jQuery('#t-sv8a').removeClass("bg-success");
                    jQuery('#t-sv8a').removeClass("bg-danger");
                    jQuery('#t-sv8a').addClass("bg-white");
                }
                else if(sv8a==1){
                    document.getElementById("sv8a").src = "{{asset('public/sites/images/sv8a-on.png')}}";
                    jQuery('#t-sv8a').html("OPEN");
                    jQuery('#t-sv8a').addClass("bg-success");
                    jQuery('#t-sv8a').removeClass("bg-danger");
                    jQuery('#t-sv8a').removeClass("bg-white");
                }

                if(sv8b==0){
                    document.getElementById("sv8b").src = "{{asset('public/sites/images/sv8b-off.png')}}";
                    jQuery('#t-sv8b').html("CLOSE");
                    jQuery('#t-sv8b').removeClass("bg-success");
                    jQuery('#t-sv8b').removeClass("bg-danger");
                    jQuery('#t-sv8b').addClass("bg-white");
                }
                else if(sv8b==1){
                    document.getElementById("sv8b").src = "{{asset('public/sites/images/sv8b-on.png')}}";
                    jQuery('#t-sv8b').html("OPEN");
                    jQuery('#t-sv8b').addClass("bg-success");
                    jQuery('#t-sv8b').removeClass("bg-danger");
                    jQuery('#t-sv8b').removeClass("bg-white");
                }
                //////
                //////

                if(sv10a==0){
                    document.getElementById("sv10a").src = "{{asset('public/sites/images/sv10a-off.png')}}";
                    jQuery('#t-sv10a').html("CLOSE");
                    jQuery('#t-sv10a').removeClass("bg-success");
                    jQuery('#t-sv10a').removeClass("bg-danger");
                    jQuery('#t-sv10a').addClass("bg-white");
                }
                else if(sv10a==1){
                    document.getElementById("sv10a").src = "{{asset('public/sites/images/sv10a-on.png')}}";
                    jQuery('#t-sv10a').html("OPEN");
                    jQuery('#t-sv10a').addClass("bg-success");
                    jQuery('#t-sv10a').removeClass("bg-danger");
                    jQuery('#t-sv10a').removeClass("bg-white");
                }

                if(sv10b==0){
                    document.getElementById("sv10b").src = "{{asset('public/sites/images/sv10b-off.png')}}";
                    jQuery('#t-sv10b').html("CLOSE");
                    jQuery('#t-sv10b').removeClass("bg-success");
                    jQuery('#t-sv10b').removeClass("bg-danger");
                    jQuery('#t-sv10b').addClass("bg-white");
                }
                else if(sv10b==1){
                    document.getElementById("sv10b").src = "{{asset('public/sites/images/sv10b-on.png')}}";
                    jQuery('#t-sv10b').html("OPEN");
                    jQuery('#t-sv10b').addClass("bg-success");
                    jQuery('#t-sv10b').removeClass("bg-danger");
                    jQuery('#t-sv10b').removeClass("bg-white");
                }
                //////
                if(sv17a==0){
                    document.getElementById("sv17a").src = "{{asset('public/sites/images/sv17a-off.png')}}";
                    jQuery('#t-sv17a').html("CLOSE");
                    jQuery('#t-sv17a').removeClass("bg-success");
                    jQuery('#t-sv17a').removeClass("bg-danger");
                    jQuery('#t-sv17a').addClass("bg-white");
                }
                else if(sv17a==1){
                    document.getElementById("sv17a").src = "{{asset('public/sites/images/sv17a-on.png')}}";
                    jQuery('#t-sv17a').html("OPEN");
                    jQuery('#t-sv17a').addClass("bg-success");
                    jQuery('#t-sv17a').removeClass("bg-danger");
                    jQuery('#t-sv17a').removeClass("bg-white");
                }

                if(sv17b==0){
                    document.getElementById("sv17b").src = "{{asset('public/sites/images/sv17b-off.png')}}";
                    jQuery('#t-sv17b').html("CLOSE");
                    jQuery('#t-sv17b').removeClass("bg-success");
                    jQuery('#t-sv17b').removeClass("bg-danger");
                    jQuery('#t-sv17b').addClass("bg-white");
                }
                else if(sv17b==1){
                    document.getElementById("sv17b").src = "{{asset('public/sites/images/sv17b-on.png')}}";
                    jQuery('#t-sv17b').html("OPEN");
                    jQuery('#t-sv17b').addClass("bg-success");
                    jQuery('#t-sv17b').removeClass("bg-danger");
                    jQuery('#t-sv17b').removeClass("bg-white");
                }
                //////
                //////

                if(sv21a==0){
                    document.getElementById("sv21a").src = "{{asset('public/sites/images/sv21a-off.png')}}";
                    jQuery('#t-sv21a').html("CLOSE");
                    jQuery('#t-sv21a').removeClass("bg-success");
                    jQuery('#t-sv21a').removeClass("bg-danger");
                    jQuery('#t-sv21a').addClass("bg-white");
                }
                else if(sv21a==1){
                    document.getElementById("sv21a").src = "{{asset('public/sites/images/sv21a-on.png')}}";
                    jQuery('#t-sv21a').html("OPEN");
                    jQuery('#t-sv21a').addClass("bg-success");
                    jQuery('#t-sv21a').removeClass("bg-danger");
                    jQuery('#t-sv21a').removeClass("bg-white");
                }

                if(sv21b==0){
                    document.getElementById("sv21b").src = "{{asset('public/sites/images/sv21b-off.png')}}";
                    jQuery('#t-sv21b').html("CLOSE");
                    jQuery('#t-sv21b').removeClass("bg-success");
                    jQuery('#t-sv21b').removeClass("bg-danger");
                    jQuery('#t-sv21b').addClass("bg-white");
                }
                else if(sv21b==1){
                    document.getElementById("sv21b").src = "{{asset('public/sites/images/sv21b-on.png')}}";
                    jQuery('#t-sv21b').html("OPEN");
                    jQuery('#t-sv21b').addClass("bg-success");
                    jQuery('#t-sv21b').removeClass("bg-danger");
                    jQuery('#t-sv21b').removeClass("bg-white");
                }
                if(sv21c==0){
                    document.getElementById("sv21c").src = "{{asset('public/sites/images/sv21c-off.png')}}";
                    jQuery('#t-sv21c').html("CLOSE");
                    jQuery('#t-sv21c').removeClass("bg-success");
                    jQuery('#t-sv21c').removeClass("bg-danger");
                    jQuery('#t-sv21c').addClass("bg-white");
                }
                else if(sv21c==1){
                    document.getElementById("sv21c").src = "{{asset('public/sites/images/sv21c-on.png')}}";
                    jQuery('#t-sv21c').html("OPEN");
                    jQuery('#t-sv21c').addClass("bg-success");
                    jQuery('#t-sv21c').removeClass("bg-danger");
                    jQuery('#t-sv21c').removeClass("bg-white");
                }
                //////
                if(sv22a==0){
                    document.getElementById("sv22a").src = "{{asset('public/sites/images/sv22a-off.png')}}";
                    jQuery('#t-sv22a').html("CLOSE");
                    jQuery('#t-sv22a').removeClass("bg-success");
                    jQuery('#t-sv22a').removeClass("bg-danger");
                    jQuery('#t-sv22a').addClass("bg-white");
                }
                else if(sv22a==1){
                    document.getElementById("sv22a").src = "{{asset('public/sites/images/sv22a-on.png')}}";
                    jQuery('#t-sv22a').html("OPEN");
                    jQuery('#t-sv22a').addClass("bg-success");
                    jQuery('#t-sv22a').removeClass("bg-danger");
                    jQuery('#t-sv22a').removeClass("bg-white");
                }

                if(sv22b==0){
                    document.getElementById("sv22b").src = "{{asset('public/sites/images/sv22b-off.png')}}";
                    jQuery('#t-sv22b').html("CLOSE");
                    jQuery('#t-sv22b').removeClass("bg-success");
                    jQuery('#t-sv22b').removeClass("bg-danger");
                    jQuery('#t-sv22b').addClass("bg-white");
                }
                else if(sv22b==1){
                    document.getElementById("sv22b").src = "{{asset('public/sites/images/sv22b-on.png')}}";
                    jQuery('#t-sv22b').html("OPEN");
                    jQuery('#t-sv22b').addClass("bg-success");
                    jQuery('#t-sv22b').removeClass("bg-danger");
                    jQuery('#t-sv22b').removeClass("bg-white");
                }
                if(sv22c==0){
                    document.getElementById("sv22c").src = "{{asset('public/sites/images/sv22c-off.png')}}";
                    jQuery('#t-sv22c').html("CLOSE");
                    jQuery('#t-sv22c').removeClass("bg-success");
                    jQuery('#t-sv22c').removeClass("bg-danger");
                    jQuery('#t-sv22c').addClass("bg-white");
                }
                else if(sv22c==1){
                    document.getElementById("sv22c").src = "{{asset('public/sites/images/sv22c-on.png')}}";
                    jQuery('#t-sv22c').html("OPEN");
                    jQuery('#t-sv22c').addClass("bg-success");
                    jQuery('#t-sv22c').removeClass("bg-danger");
                    jQuery('#t-sv22c').removeClass("bg-white");
                }


        }
    });
};
setInterval(getReatimeValve, 1000);

function getRealtimeTank() {
    $.ajax({
        url: '{{route("realtime.tank")}}',
        type: 'POST',
        data: {
        _token: "{{ csrf_token() }}",
        // Other data you want to send with the request
         },
        success: function(response) {
            var a = response.data;
            console.log(a);
                jQuery('#number_3').html(parseFloat(a[0].tanki_3).toFixed(2) + 'KG');
                jQuery('#number_4').html(parseFloat(a[0].tanki_4).toFixed(2) + 'KG');
                jQuery('#number_5').html(parseFloat(a[0].tanki_5).toFixed(2) + 'KG');
                jQuery('#number_6').html(parseFloat(a[0].tanki_6).toFixed(2) + 'KG');
                jQuery('#number_7').html(parseFloat(a[0].tanki_7).toFixed(2) + 'KG');
                jQuery('#number_8').html(parseFloat(a[0].tanki_8).toFixed(2) + 'KG');
                jQuery('#number_10').html(parseFloat(a[0].tanki_10).toFixed(2) + 'KG');
                jQuery('#number_17').html(parseFloat(a[0].tanki_17).toFixed(2) + 'KG');
                jQuery('#number_21').html(parseFloat(a[0].tanki_21).toFixed(2) + 'KG');
                jQuery('#number_22').html(parseFloat(a[0].tanki_22).toFixed(2) + 'KG');

                jQuery('#t-v-3').attr("placeholder",parseFloat(a[0].tanki_3).toFixed(2) + 'KG');
                jQuery('#t-v-4').attr("placeholder",parseFloat(a[0].tanki_4).toFixed(2) + 'KG');
                jQuery('#t-v-5').attr("placeholder",parseFloat(a[0].tanki_5).toFixed(2) + 'KG');
                jQuery('#t-v-6').attr("placeholder",parseFloat(a[0].tanki_6).toFixed(2) + 'KG');
                jQuery('#t-v-7').attr("placeholder",parseFloat(a[0].tanki_7).toFixed(2) + 'KG');
                jQuery('#t-v-8').attr("placeholder",parseFloat(a[0].tanki_8).toFixed(2) + 'KG');
                jQuery('#t-v-10').attr("placeholder",parseFloat(a[0].tanki_10).toFixed(2) + 'KG');
                jQuery('#t-v-17').attr("placeholder",parseFloat(a[0].tanki_17).toFixed(2) + 'KG');
                jQuery('#t-v-21').attr("placeholder",parseFloat(a[0].tanki_21).toFixed(2) + 'KG');
                jQuery('#t-v-22').attr("placeholder",parseFloat(a[0].tanki_22).toFixed(2) + 'KG');
        }
    });
};
setInterval(getRealtimeTank, 1000);
</script>
    \

@endsection
