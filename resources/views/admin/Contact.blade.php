@extends('admin.layouts.master')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Messages</h1>
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
    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Subject</th>
                        <th>Message</th>
                        <th>Project</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($contacts as $contact)        
                    <tr>
                        <td>{{ $contact->id }}</td>
                        <td>{{ $contact->sender_name }}</td>
                        <td>{{ $contact->sender_email }}</td>
                        <td>{{ $contact->sender_phone }}</td>
                        <td>{{ $contact->sender_subject }}</td>
                        <td>{{ $contact->sender_message }}</td>
                        <td>{{ $contact->sender_project }}</td>
                        <td>
                            <a href="/admin/contact/{{ $contact->id }}" class="btn btn-primary">View</a>
                            <a href="/admin/contact/delete/{{ $contact->id }}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
</div>

@endsection