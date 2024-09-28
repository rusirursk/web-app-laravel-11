@extends('admin.layouts.master')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Role : {{ $role->name }}</h1>
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
</div>
<div class="container">
    <div class="card-body">
        <form action="{{ url('givePermissionToRole/' . $role->id) }}" method="POST">
            @csrf
            @method('PUT')
    
            <label for="role_id">Permissions</label>
            <div class="row">
                @foreach ($permissions as $permission)
                <div class="col-md-3">
                    <div class="form-check">
                        <input class="form-check-input" 
                                type="checkbox" name="permissions[]" 
                                value="{{ $permission->name }}" 
                                id="defaultCheck1"
                                {{ in_array($permission->id, $rolePermissions) ? 'checked' : '' }}
                                />
                        <label class="form-check-label" for="defaultCheck1">
                            {{ $permission->name }}
                        </label>
                    </div>
                </div>
                @endforeach
            </div>
    
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Submit</button> 
            </div>
    
        </form>
    </div>
</div>


@endsection