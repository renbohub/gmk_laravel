@extends('layouts.layout')   
    @section('content')
        <div class="container-fluid ">
            <div class="row pt-4">
              
              <div class="col-lg-3 col-md-12 col-sm-12 col-12">
                <div class="card">
                  <div class="card-header pt-2 py-1"><h4>Filter</h4></div>
                  <div class="card-body">
                    <form action="{{route('alarm.report')}}" method="post" id="report_option">
                      @csrf
                      <div class="mb-3" id="year">
                        <label for="year" class="form-label">Start From</label>
                        <input type="date" class="form-control"  name="date-start">
                      </div>
                      <div class="mb-3" id="year">
                        <label for="year" class="form-label">End Date</label>
                        <input type="date" class="form-control"  name="date-end">
                      </div>
                     
                      <div class="mb-3" id="year">
                        <button type="submit" class="btn btn-success" id="submitBtn">Submit</button>
                      </div>
                      
                      
                     
                    </form>
                     
                  </div>
                  <div class="card-arrow">
                    <div class="card-arrow-top-left"></div>
                    <div class="card-arrow-top-right"></div>
                    <div class="card-arrow-bottom-left"></div>
                    <div class="card-arrow-bottom-right"></div>
                  </div>
                </div>
              </div>
              <div class="col-lg-9 col-md-12 col-sm-12 col-12">
                <div class="card">
                  <div class="card-header pt-2 py-1"><h4>Alarm Log</h4></div>
                  <div class="card-body">
                    <table class="table" id="alarm-table">
                      <thead>
                          <tr>
                              <th>id</th>
                              <th>Start</th>
                              <th>End</th>
                              <th>Desc</th>
                              <th>Status</th>
                          </tr>
                      </thead>
                      <tbody>
                        @foreach ($report as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->start_alarm }}</td>
                            <td>{{ $item->end_alarm }}</td>
                            <td>{{ $item->desc}}</td>
                            <td>{{ $item->status }}</td>
                        </tr>
                        @endforeach
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

<!-- Include DataTables CSS and JS -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
<script type="text/javascript" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>

<!-- Include DataTables Buttons CSS and JS -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.1.1/css/buttons.dataTables.min.css">
<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.1.1/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.1.1/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.1.1/js/buttons.print.min.js"></script>
        <script src="https://appsforoffice.microsoft.com/lib/1/hosted/office.js"></script>
        
    @endsection
    @section('script')
    <script>
      $(document).ready(function () {
          $('#alarm-table').DataTable({
            dom: 'Bfrtip', // Buttons extension
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
      });
  </script>
    @endsection
    
