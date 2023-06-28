@extends('layouts.app')

    @section('title', 'AJI MIS | DASHBOARD')
    
    @section('content')
    <div class="row">
        <div class="col-4">
          
          <div class="list-group pb-3" id="list-tab" role="tablist">
            <div class="list-group-item list-group-item-action disabale" ><iconify-icon icon="ant-design:setting-filled"></iconify-icon><b>&nbspSetting</b></div>
            <a class="list-group-item list-group-item-action active" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Overview</a>
            <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Extend Due Date</a>
            <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Buy Package</a>
          </div>
          <div class="card">
            <div class="card-header">
                <b>Status</b>
            </div>
            <div class="card-body">
                <table class="table">
                    <tbody>
                        <tr>
                            <td>Device Id</td>
                            <td>:</td>
                            <td>{{$content['device_id']}}</td>
                        </tr>
                        <tr>
                            <td>Status HMI</td>
                            <td>:</td>
                            <td> 
                                @if ($content['device_mac'] == 0)
                                    Not Actived
                                @else
                                    Actived
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td>Status Token</td>
                            <td>:</td>
                            <td>{{$content['device_status']}}</td>
                        </tr>
                        <tr>
                            <td>Due Date</td>
                            <td>:</td>
                            <td>{{gmdate($content['device_expired'])}}</td>
                        </tr>
                        <tr>
                            <td>Billing Cycle</td>
                            <td>:</td>
                            <td>yearly</td>
                        </tr>
                    </tbody>
                </table>
            </div>
          </div>
          <div class="pt-4 pb-4">
            <button class="btn btn-success" style="width: 100%"> Login to Dashboard</button>
          </div>
        </div>
        <div class="col-8">
          <div class="tab-content" id="nav-tabContent">
          
            <div class="tab-pane fade show active" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                <div class="card">
                    <div class="card-header">Device Overview</div>
                    <div class="card-body">
                        <form id="edit_detail" action="" method="POST">
                            @csrf
                                <input type="hidden" name="device_id" class="form-control" id="exampleFormControlInput1" placeholder="device name" value="{{$content['device_id']}}">
                              
                            <div class="form-group">
                              <label for="exampleFormControlInput1">Device Name</label>
                              <input type="text" name="device_name" class="form-control" id="exampleFormControlInput1" placeholder="device name" value="{{$content['device_name']}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Device Token</label>
                                <div class="input-group">
                                    <input type="password" class="form-control" id="password" placeholder="Enter password" value="{{$content['device_token']}}">
                                    <div class="input-group-append">
                                      <button class="btn btn-outline-secondary py-1" type="button" id="togglePassword">Show</button>
                                    </div>
                                  </div>
                            </div>
                            <div class="form-group">
                              <label for="exampleFormControlSelect1">Device Owner</label>
                              <input type="text" class="form-control" name="device_owner" id="exampleFormControlInput1" placeholder="device name" value="{{$content['device_owner']}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Device Mac Address</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="device name" value="{{$content['device_mac']}}" disabled>
                            </div>
                            
                            
                          
                    </div>
                    <div class="card-footer" >
                        <div>
                            <button class="btn btn-primary">Save Change</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">...</div>
            <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">...</div>
          </div>
        </div>
      </div>
    @endsection
    @section('script')
    <script>
        $(document).ready(function() {
          $('#togglePassword').click(function() {
            var passwordInput = $('#password');
            var passwordFieldType = passwordInput.attr('type');
    
            if (passwordFieldType === 'password') {
              passwordInput.attr('type', 'text');
              $(this).text('Hide');
            } else {
              passwordInput.attr('type', 'password');
              $(this).text('Show');
            }
          });
        });
      </script>
      <script>
        $(document).ready(function() {
            $('#edit_detail').submit(function(event) {
                event.preventDefault(); // Prevent form submission

                var formData = $(this).serialize(); // Serialize form data

                $.ajax({
                url: 'http://porting.my.id:1880/porting/api/v1.0/web/data/json/list_device/edit',
                type: 'POST',
                data: formData,
                success: function(response) {
                    location.reload();
                },
                error: function(xhr, status, error) {
                    // Handle any errors
                    // ...
                }
                });
            });
            });
      </script>
    @endsection