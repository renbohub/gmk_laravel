@extends('layouts.layout')   
    @section('content')
        <div class="container-fluid ">
            <div class="row pt-4">
              <div class="col-12">
                <h4>Reproting Graphic</h4>
              </div>
              <div class="col-3">
                <div class="card">
                  <div class="card-header"><div class="div"><h4>Reporting Option</h4></div></div>
                  <div class="card-body">
                    <form action="{{route('export.data')}}" method="post" id="report_option">
                      
                      <div class="mb-3" id="year">
                        <label for="year" class="form-label">Select Year</label>
                        <input type="number" min="2023" max="2100" class="form-control"  name="number" placeholder="2023" value="2023">
                      </div>
                      <div class="mb-3" id="month">
                        <label for="month" class="form-label">Select Month</label>
                        <div class="form-group">
                          <select class="form-control" name="month">
                            <option value="1"selected>January</option>
                            <option value="2">February</option>
                            <option value="3">March</option>
                            <option value="4">April</option>
                            <option value="5">Mei</option>
                            <option value="6">June</option>
                            <option value="7">July</option>
                            <option value="8">Augst</option>
                            <option value="9">September</option>
                            <option value="10">Oktober</option>
                            <option value="11">November</option>
                            <option value="12">Desember</option>
                          </select>
                        </div>
                      </div>
                      <div class="mb-3" id="shift">
                        <label for="shift" class="from-label">Shift</label>
                        <div class="form-group" style="width: 100%!important">
                          <select id="example-getting-started" class="form-control" name="shift[]" multiple="multiple" >
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                          </select>
                        </div>
                      </div>
                      <div class="mb-3" id="month">
                        <button type="button" class="btn btn-success" id="submitBtn">Submit</button>
                      </div>
                      
                  
                    
                      <div class="mb-3" id="month">
                        @csrf
                         <button type="submit" id="export-btn" class="btn btn-primmary">Export to Excel</button>
                      </div>
                    </form>
                     
                  </div>
                </div>
              </div>
              <div class="col-9">
                <div class="card">
                  <div class="card-body">
                    <table class="table table-bordered bg-white" id="data-report">
                      <thead>
                        <tr>
                          <th align="center" colspan="20">Data Picker</th>
                        </tr>
                        <tr>
                         <th style="width: 200px">Desc</th>
                         <th>Plan</th>
                         <th>Actual</th>
                         <th>NG Ratio</th>
                         <th>NG Ratio Daily & Monthly</th>
                         <th>Straight Pass Ration</th>
                         <th>Ng Counter</th>
                         <th>NG Point 1</th>
                         <th>NG Point 2</th>
                         <th>NG Point 3</th>
                         <th>NG Point 4</th>
                         <th>NG Point 5</th>
                         <th>NG Point 6</th>
                         <th>NG Point 7</th>
                         <th>NG Point 8</th>
                         <th>NG Point 9</th>
                         <th>NG Point 10</th>
                         <th>NG Point 11</th>
                         <th>NG Point 12</th>
                        </tr>
                      </thead>
                      <tbody>
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <script src="https://appsforoffice.microsoft.com/lib/1/hosted/office.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#example-getting-started').multiselect();
            });
        </script>

        <script>

          

          $(document).ready(function () {
            $("#submitBtn").click(function () {
              const formData = $("#report_option").serialize();
              const url = "http://127.0.0.1:1880/porthings/api/v1.0/web/generate/report"; // Replace with your server's URL
              
              $.ajax({
                url: url,
                type: "GET",
                data: formData,
                dataType: "json",
                success: function (data) {
                  // Process the response data here
                  populateTable(data);
                  console.log(data);
                },
                error: function (error) {
                  console.error("Error:", error);
                },
              });
            });
            function populateTable(data) {
              const tableBody = $('#data-report tbody');
              tableBody.empty();
              data.forEach(function (item) {
                function convertNaNToZero(value) {
                  if (isNaN(value)) {
                    return 0;
                  }
                  return value;
                }
                
                const row = $('<tr>');
                const desc = $('<td>').text(item.tanggal);
                const target = $('<td>').text(item.target);
                const actual = $('<td>').text(item.total_ok);
                const tnr = $('<td>').text(item.ng_ratio);
                const tnrd = $('<td>').text(item.ng_ratio_day_month);
                const spass = $('<td>').text(item.straight_pass);
                const ntotal = $('<td>').text(item.total_ng);
                const n1 = $('<td>').text(item.ng_1);
                const n2 = $('<td>').text(item.ng_2);
                const n3 = $('<td>').text(item.ng_3);
                const n4 = $('<td>').text(item.ng_4);
                const n5 = $('<td>').text(item.ng_5);
                const n6 = $('<td>').text(item.ng_6);
                const n7 = $('<td>').text(item.ng_7);
                const n8 = $('<td>').text(item.ng_8);
                const n9 = $('<td>').text(item.ng_9);
                const n10 = $('<td>').text(item.ng_10);
                const n11 = $('<td>').text(item.ng_11);
                const n12 = $('<td>').text(item.ng_12);
                row.append(desc, target,actual,tnr,tnrd,spass,ntotal,n1,n2,n3,n4,n5,n6,n7,n8,n9,n10,n11,n12);
                tableBody.append(row);
              });
            }
          });
        </script>
    @endsection
    
