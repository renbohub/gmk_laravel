@extends('layouts.layout')   
    @section('content')
        <div class="container-fluid bg-white">
            <div class="row pt-4">
                
              <div class="col-6">
                <h4><button class="btn btn-success add-button" id="addButton">NEW</button> &nbsp; Edit List Area &nbsp;&nbsp;</h4>
                
              </div>
              <div class="col-6 text-right">
                
              </div>
              <div class="col-12">
                <hr>
              </div>
                <table  id="data-table" class="table">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Shift No</th>
                        <th>Shift Start</th>
                        <th>Shift End</th>
                        <th>Add Day on start</th>
                        <th>Add Day on finish</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
        <!-- Add the modal markup -->
                <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editModalLabel">Edit Item</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!-- Add a form for editing data -->
                            <form id="editForm">
                            <input type="hidden" id="area_id" name="area_id">
                            <div class="form-group">
                                <label for="area_code">Shift No</label>
                                <input type="text" class="form-control" id="area_code" name="shift_no">
                            </div>
                            <div class="form-group">
                                <label for="area_name">Start Shift</label>
                                <input type="text" class="form-control" id="area_name" name="shift_start">
                            </div>
                            <div class="form-group">
                                <label for="area_desc">End Shift</label>
                                <input type="text" class="form-control" id="area_desc" name="shift_end">
                            </div>
                             <div class="form-group">
                                <label for="area_desc">Add Day on start</label>
                                <input type="number" class="form-control" id="add_s" name="add_s">
                            </div>
                             <div class="form-group">
                                <label for="area_desc">Add Day on end</label>
                                <input type="number" class="form-control" id="add_e" name="add_e">
                            </div>
                        
                            <!-- Add more fields for editing as needed -->
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        
                            <button type="submit" class="btn btn-primary" id="saveEdit">Save changes</button>
                        
                        </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editModalLabel">Delete Item</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!-- Add a form for editing data -->
                            Do you want to delete?
                            <form id="deleteForm">
                            <input type="hidden" id="d_area_id" name="area_id">
                            <input class="border-0" type="text" id="d_area_desc" name="area_desc" disabled>
                            </form>
                            <!-- Add more fields for editing as needed -->
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        
                            <button type="submit" class="btn btn-primary" id="saveDelete">Confirm</button>
                        
                        </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editModalLabel">Add Item</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!-- Add a form for editing data -->
                            <form id="addForm">
                            <input type="hidden" id="area_id" name="area_id">
                           <div class="form-group">
                                <label for="area_code">Shift No</label>
                                <input type="text" class="form-control" id="area_code" name="shift_no">
                            </div>
                            <div class="form-group">
                                <label for="area_name">Start Shift</label>
                                <input type="text" class="form-control" id="area_name" name="shift_start">
                            </div>
                            <div class="form-group">
                                <label for="area_desc">End Shift</label>
                                <input type="text" class="form-control" id="area_desc" name="shift_end">
                            </div>
                             <div class="form-group">
                                <label for="area_desc">Add Day on start</label>
                                <input type="number" class="form-control" id="add_s" name="add_s">
                            </div>
                             <div class="form-group">
                                <label for="area_desc">Add Day on end</label>
                                <input type="number" class="form-control" id="add_e" name="add_e">
                            </div>
                        
                        
                            <!-- Add more fields for editing as needed -->
                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        
                            <button type="submit" class="btn btn-primary" id="saveAdd">Save changes</button>
                        </form>
                        </div>
                        </div>
                    </div>
                </div>

        <script>
        $(document).ready(function () {
           const dataTable = $('#data-table').DataTable({
                serverSide: true,
                ajax: 'http://127.0.0.1:1880/api/v1.0/dharma/list_shift', // Your server-side API endpoint
                columns: [
                { name: 'shift_id' },
                { name: 'shift_no' },
                { name: 'shift_start' },
                { name: 'shift_end' },
                { name: 'shift_add_start' },
                { name: 'shift_add_end' },
                { name: 'action' },
                
                ],
            });
             $('#data-table tbody').on('click', '.edit-button', function () {
                const id = $(this).data('id');
                
                const rowData = dataTable.row($(this).parents('tr')).data();
                console.log(rowData)
                $('#area_id').val(id);
                $('#area_code').val(rowData[1]);
                $('#area_name').val(rowData[2]);
                $('#area_desc').val(rowData[3]);
                $('#add_s').val(rowData[4]);
                $('#add_e').val(rowData[5]);
                // Populate other form fields as needed
                $('#editModal').modal('show');
            });
            $('#addButton').click(function() {
        // This function will be executed when the button is clicked
                $('#addModal').modal('show');
                
                // You can perform any other actions you want here
            });

            $('#data-table tbody').on('click', '.delete-button', function () {
                const id = $(this).data('id');
                
                const rowData = dataTable.row($(this).parents('tr')).data();
                console.log(rowData)
                $('#d_area_id').val(id);
                $('#d_area_desc').val(rowData[1]);
                // Populate other form fields as needed
                $('#deleteModal').modal('show');
            });
            $('#saveEdit').click(function () {
                const formData = $('#editForm').serializeArray();
                // console.log(formData)
                const updatedData = {};
                formData.forEach(function (field) {
                    updatedData[field.name] = field.value;
                });
                $.ajax({
                    method: 'PUT', // You can use PUT or POST based on your API
                    url: 'http://127.0.0.1:1880/api/v1.0/dharma/list_shift', // Update API endpoint
                    data: JSON.stringify(updatedData),
                    contentType: 'application/json',
                    success: function (response) {
                        // Handle success, update the DataTable, and close the modal
                        $('#editModal').modal('hide');
                        dataTable.ajax.reload();
                    },
                    error: function (error) {
                        // Handle errors
                        console.error('Error:', error);
                    }
                });
            });
            $('#saveDelete').click(function () {
                const formData = $('#deleteForm').serializeArray();
                // console.log(formData)
                const updatedData = {};
                formData.forEach(function (field) {
                    updatedData[field.name] = field.value;
                });
                $.ajax({
                    method: 'DELETE', // You can use PUT or POST based on your API
                    url: 'http://127.0.0.1:1880/api/v1.0/dharma/list_shift', // Update API endpoint
                    data: JSON.stringify(updatedData),
                    contentType: 'application/json',
                    success: function (response) {
                        // Handle success, update the DataTable, and close the mhttp://127.0.0.1:1880/api/v1.0/dharma/list_shift
                        $('#deleteModal').modal('hide');
                        dataTable.ajax.reload();
                    },
                    error: function (error) {
                        // Handle errors
                        console.error('Error:', error);
                    }
                });
            });
            $('#saveAdd').click(function () {
                const formData = $('#addForm').serializeArray();
                // console.log(formData)
                const updatedData = {};
                formData.forEach(function (field) {
                    updatedData[field.name] = field.value;
                });
                $.ajax({
                    method: 'POST', // You can use PUT or POST based on your API
                    url: 'http://127.0.0.1:1880/api/v1.0/dharma/list_shift', // Update API endpoint
                    data: JSON.stringify(updatedData),
                    contentType: 'application/json',
                    success: function (response) {
                        // Handle success, update the DataTable, and close the modal
                        $('#addModal').modal('hide');
                        dataTable.ajax.reload();
                    },
                    error: function (error) {
                        // Handle errors
                        console.error('Error:', error);
                    }
                });
            });

            
        });   
        </script>
 @endsection
    
