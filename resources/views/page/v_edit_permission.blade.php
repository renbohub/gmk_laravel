@extends('layouts.layout')
@section('content')
<div class="container-fluid bg-white">
    <div class="row pt-4">

        <div class="col-10">
            <h4><button class="btn btn-success add-button" id="addButton">NEW</button> &nbsp; Edit List Permission
                &nbsp;&nbsp;</h4>

        </div>
        <div class="col-2 text-right">
            <div class="form-group">
                <label for="exampleFormControlSelect1">Select Roles</label>
                <select class="form-control" id="role-id" onchange="selectData()">
                    @foreach ($roles as $i)
                        <option value="{{$i['role_id']}}">{{$i['role_name']}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-12">
            <hr>
        </div>
        <table id="data-table" class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Role Id</th>
                    <th>Permission Access List</th>
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
                        <label for="area_code">Route Name</label>
                         <select class="form-control" id="route_name" name="route_name">
                            @foreach ($route as $i2)
                                <option value="{{$i2['route_name']}}">{{$i2['route_name']}}</option>    
                            @endforeach                           
                        </select>
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
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel"
    aria-hidden="true">
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
                    <input class="border-0" type="text" id="d_area_desc" name="route_name" disabled>
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
                        <label for="area_code">Role Name</label>
                         <select class="form-control" id="route_name" name="role_id">
                            @foreach ($roles as $i3)
                                <option value="{{$i3['role_id']}}">{{$i3['role_name']}}</option>    
                            @endforeach                           
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="area_code">Route Name</label>
                         <select class="form-control" id="route_name" name="route_id">
                            @foreach ($route as $i4)
                                <option value="{{$i4['route_id']}}">{{$i4['route_name']}}</option>    
                            @endforeach                           
                        </select>
                    </div>

                    <!-- Add more fields for editing as needed -->

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                <button type="submit" class="btn btn-primary" id="saveAdd">Add Data</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
        $(document).ready(function() {
        // DataTable initialization
            const dataTable = $('#data-table').DataTable({
                "ajax": {
                    "url": "http://127.0.0.1:1880/api/v1.0/porthings/list_permission",
                    "data": function (d) {
                        return $.extend({}, d, {
                            "extra_search": $('#role-id').val()
                        });
                    }
                },
                columns: [
                    { name: 'shift_id' },
                    { name: 'shift_no' },
                    { name: 'shift_start' },
                    { name: 'action' },
                ],
            });

        // Event listener for role selection change
            $('#role-id').change(function() {
                // Get the selected role ID
                var selectedRole = $(this).val();

                // Update DataTable with the new role ID
                dataTable.ajax.url("http://127.0.0.1:1880/api/v1.0/porthings/list_permission").load();
            });

    // Event listener for edit button click
            $('#data-table tbody').on('click', '.edit-button', function () {
                const id = $(this).data('id');
                const rowData = dataTable.row($(this).parents('tr')).data();
                console.log(rowData)
                $('#area_id').val(id);
                $('#route_name').val(rowData[2]);
                // Populate other form fields as needed
                $('#editModal').modal('show');
            });
             $('#data-table tbody').on('click', '.delete-button', function () {
                const id = $(this).data('id');
                const rowData = dataTable.row($(this).parents('tr')).data();
                console.log(rowData)
                $('#d_area_id').val(id);
                $('#d_area_desc').val(rowData[2]);
                // Populate other form fields as needed
                $('#deleteModal').modal('show');
            });

            $('#addButton').click(function() {
        // This function will be executed when the button is clicked
                $('#addModal').modal('show');
                
                // You can perform any other actions you want here
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
                    url: 'http://127.0.0.1:1880/api/v1.0/dharma/list_permission', // Update API endpoint
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
                    url: 'http://127.0.0.1:1880/api/v1.0/dharma/list_permission', // Update API endpoint
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
                    url: 'http://127.0.0.1:1880/api/v1.0/dharma/list_permission', // Update API endpoint
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