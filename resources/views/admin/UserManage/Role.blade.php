@extends('admin.layouts.master')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Role </h1>
</div>
<div>
    @if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{session('success')}}
    </div>
  @endif

  @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                 <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
  @endif

  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#slideModal">
    Add New Role
</button>

<div class="modal fade" id="slideModal" tabindex="-1" aria-labelledby="slideModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="slideModalLabel">Add New Role</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" action="/saveRole" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    
                        
                    <!-- title -->
                    <div class="mb-3">
                    <label for="role_name" class="form-label">Role Name</label>
                    <input type="text" class="form-control" id="role_name" name="role_name" placeholder="Post title">
                    </div>
                    
            
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save Changes</button>
            </div>
        </form>
        </div>
        </div>
    </div>

</div>

<div class="row">
    <div class="card mb-4">
      <div class="card-header">
          <i class="fas fa-table me-1"></i>
          View Permissions
      </div>
      <div class="card-body">
          <table id="datatablesSimple">
              <thead>
                  <tr>
                      <th>id</th>
                      <th>Role name</th>
                      <th>Actons</th>
                  </tr>
              </thead>
              <tbody>
                @foreach($roles as $role)
                  <tr>
                      <td>{{$role->id}}</td>
                      <td>{{$role->name}}</td>
                      <td>
                         <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#slideModal{{$role->id}}">Edit</button> 
                         <a href="/permissionToRole/{{$role->id}}" class="btn btn-success">Add Permission to Role</a> 
                         <a href="/deleteRole/{{$role->id}}" class="btn btn-danger">Delete</a>
                        
                           
                        </td>
                  </tr>

                  <div class="modal fade" id="slideModal{{$role->id}}" tabindex="-1" aria-labelledby="slideModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="slideModalLabel">Edit  Slide {{$role->name}}</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form method="POST" action="/roleUpdate" enctype="multipart/form-data">
                          @csrf
                          <input type="hidden" name="role_id" value="{{$role->id}}">
                       <div class="modal-body">
                        <!-- name -->
                            <div class="mb-3">
                                <label for="role_name" class="form-label">name</label>
                                <input type="text" class="form-control" id="role_name" name="role_name" value="{{$role->name}}">
                            </div>
                            
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                      </div>
                  </form>
                      </div>
                    </div>
                  </div>
                  @endforeach
                
                 
              </tbody>
          </table>
      </div>
  </div>

@endsection