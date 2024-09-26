@extends('admin.layouts.master')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Settings</h1>
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
    <h1>Change Site Settings</h1>
    <hr/>
    <form action="/settingUpdate" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group mb-3">
            <label for="site_name">Site Name</label>
            <input type="text" name="site_name" id="site_name" class="form-control" value="{{$setting['site_name']}}">
        </div>

        <div class="form-group mb-3">
            <label for="site_name">Site Description</label>
            <input type="text" name="site_description" id="site_description" class="form-control" value="{{ $setting['site_description']}}">
        </div>

        <!-- Site Keywords -->
    <div class="mb-3">
        <label for="site_keywords" class="form-label">Site Keywords</label>
        <input type="text" class="form-control" id="site_keywords" name="site_keywords" value="{{ $setting['site_keywords'] ?? '' }}">
    </div>

    <!-- Site Author -->
    <div class="mb-3">
        <label for="site_author" class="form-label">Site Author</label>
        <input type="text" class="form-control" id="site_author" name="site_author" value="{{ $setting['site_author'] ?? '' }}">
    </div>

    <!-- Site Email -->
    <div class="mb-3">
        <label for="site_email" class="form-label">Site Email</label>
        <input type="email" class="form-control" id="site_email" name="site_email" value="{{ $setting['site_email'] ?? '' }}">
    </div>

    <!-- Site Phone -->
    <div class="mb-3">
        <label for="site_phone" class="form-label">Site Phone</label>
        <input type="text" class="form-control" id="site_phone" name="site_phone" value="{{ $setting['site_phone'] ?? '' }}">
    </div>

    <!-- Social Media Links -->
    <div class="mb-3">
        <label for="facebook_link" class="form-label">Facebook Link</label>
        <input type="text" class="form-control" id="facebook_link" name="facebook_link" value="{{ $setting['facebook_link'] ?? '' }}">
    </div>

    <div class="mb-3">
        <label for="twitter_link" class="form-label">Twitter Link</label>
        <input type="text" class="form-control" id="twitter_link" name="twitter_link" value="{{ $setting['twitter_link'] ?? '' }}">
    </div>

    <div class="mb-3">
        <label for="linkedin_link" class="form-label">LinkedIn Link</label>
        <input type="text" class="form-control" id="linkedin_link" name="linkedin_link" value="{{ $setting['linkedin_link'] ?? '' }}">
    </div>

    <div class="mb-3">
        <label for="instagram_link" class="form-label">Instagram Link</label>
        <input type="text" class="form-control" id="instagram_link" name="instagram_link" value="{{ $setting['instagram_link'] ?? '' }}">
    </div>

    <!-- Site Maintenance Mode -->
    <div class="mb-3">
        <label for="maintenance_mode" class="form-label">Maintenance Mode</label>
        <select class="form-select" id="maintenance_mode" name="maintenance_mode">
            <option value="0" {{ ($setting['maintenance_mode'] ?? '0') == '0' ? 'selected' : '' }}>Off</option>
            <option value="1" {{ ($setting['maintenance_mode'] ?? '0') == '1' ? 'selected' : '' }}>On</option>
        </select>
    </div>

    <!-- Maintenance Mode Text -->
    <div class="mb-3">
        <label for="maintenance_mode_text" class="form-label">Maintenance Mode Text</label>
        <textarea class="form-control" id="maintenance_mode_text" name="maintenance_mode_text">{{ $setting['maintenance_mode_text'] ?? '' }}</textarea>
    </div>

       <!-- Submit Button -->
       <button type="submit" class="btn btn-primary">Save Settings</button>


    </form>
</div>

@endsection