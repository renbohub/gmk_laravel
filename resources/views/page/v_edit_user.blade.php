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
                        <th>Username</th>
                        <th>Status Account</th>
                        <th>Roles Account</th>
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
                            <input type="hidden" id="user_id" name="user_id">
                            <div class="form-group">
                                <label for="area_code">Username</label>
                                <input type="text" class="form-control" id="username" name="username">
                            </div>
                           <div class="form-group">
                                <label for="exampleFormControlSelect1">Status Account</label>
                                <select class="form-control" id="status" name="status">
                                    <option value="active">Active</option>
                                    <option value="disable">Disable</option>
                                    
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Role Account</label>
                                <select class="form-control" id="role" name="role">
                                    <option value="admin">Admin</option>
                                    <option value="bod">BOD</option>
                                    <option value="supervisor">Supervisor</option>
                                    <option value="leader">Leader</option>
                                    <option value="member">Member</option>
                                    <option value="guest">Guest</option>
                                    
                                </select>
                            </div>
                           <div class="form-group">
                                <label for="editPassword">Edit Password</label>
                                <input type="checkbox" id="editPassword" onchange="togglePassword()">
                            </div>

                            <div class="form-group" id="passwordFieldGroup" style="display: none;">
                                <label for="area_code">New Password</label>
                                <input type="password" class="form-control" name="auth_password" id="passwordField" minlength="8">
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
                
        <script>
            function togglePassword() {
                var passwordFieldGroup = document.getElementById("passwordFieldGroup");
                var editPasswordCheckbox = document.getElementById("editPassword");

                // Show the password field group only when the checkbox is checked
                passwordFieldGroup.style.display = editPasswordCheckbox.checked ? "block" : "none";
            }
        </script>
        <script>
        $(document).ready(function () {
           const dataTable = $('#data-table').DataTable({
                serverSide: true,
                ajax: 'http://127.0.0.1:1880/api/v1.0/dharma/list_user', // Your server-side API endpoint
                columns: [
                { name: 'auth_id' },
                { name: 'auth_username' },
                { name: 'account_status' },
                { name: 'role' },
                { name: 'action' }
                
                ],
            });
             $('#data-table tbody').on('click', '.edit-button', function () {
                const id = $(this).data('id');
                
                const rowData = dataTable.row($(this).parents('tr')).data();
                console.log(rowData)
                $('#user_id').val(id);
                $('#passwordField').val('');
                $('#username').val(rowData[1]);
                $('#status').val(rowData[2]);
                $('#role').val(rowData[3]);
        
                // Populate other form fields as needed
                $('#editModal').modal('show');
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
                    url: 'http://127.0.0.1:1880/api/v1.0/dharma/list_user', // Update API endpoint
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
                    url: 'http://127.0.0.1:1880/api/v1.0/dharma/list_user', // Update API endpoint
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
          

            
        });   
        </script>
 @endsection
    
