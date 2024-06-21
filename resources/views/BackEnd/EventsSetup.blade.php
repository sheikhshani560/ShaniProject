@extends('layouts/contentNavbarLayout')

@section('title', 'Dashboard - Analytics')

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/apex-charts/apex-charts.css')}}">
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/apex-charts/apexcharts.js')}}"></script>
@endsection

@section('page-script')
<script src="{{asset('assets/js/dashboards-analytics.js')}}"></script>
@endsection

@section('content')
@if ($errors->any())
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    @foreach ($errors->all() as $error)
        <strong>{{ $error }}</strong>
    @endforeach

</div>
@endif
<div class="row">
  <div class="col-md-12">
    <div class="card mb-4">
      <h5 class="card-header">Events Setup </h5>
      <div class="card-body">
        <form action="{{route('EventsSetupSave')}}" enctype="multipart/form-data" id="EventForm" method="post">
          @csrf
          <div class="row mb-2">
            <div class="mb-3 row">
              <label for="html5-text-input" class="col-md-2 col-form-label">ID</label>
              <div class="col-md-2">
                <input class="form-control" readonly type="number" name="TxtID" id="TxtID" />
              </div>
            </div>
            <div class="mb-3 row">
              <label for="html5-text-input" class="col-md-2 col-form-label">Title</label>
              <div class="col-md-10">
                <input type="text" class="form-control " name="TxtTitle" id="TxtTitle" placeholder="" aria-describedby="defaultFormControlHelp" />
              </div>
            </div>
            <div class="mb-3 row">
              <label for="html5-text-input" class="col-md-2 col-form-label">Description</label>
              <div class="col-md-10">
                <textarea class="form-control" name="TxtDescription" id="TxtDescription" rows="1"></textarea>
              </div>
            </div>
            <div class="mb-3 row">
              <label for="html5-text-input" class="col-md-2 col-form-label">Image</label>
              <div class="col-md-10">
                {{-- <input type="file" name="Txtimg" id="Txtimg"> --}}
                <input type="file" name="Txtimg[]" id="Txtimg" multiple>
              </div>
            </div>

            <button type="submit" class="btn btn-dark mt-5">Save</button>
          </div>

        </form>
      </div>
    </div>

<!-- Basic Bootstrap Table -->
<div class="card">
  <h5 class="card-header">Table Basic</h5>
  <div class="table-responsive text-nowrap">
    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>Title</th>
          <th>Image</th>
          <th>Desc</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
        @foreach ($EventsModel as $event)
@php
      $images = json_decode($event->Image);

@endphp
        <tr>
          <td><i class="bx bxl-angular bx-sm text-danger me-3"></i> <span class="fw-medium">{{$event->id}}</span></td>
          <td>{{$event->Title}}</td>
          <td>
            <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
              <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Lilian Fuller">
                <img src="{{asset('assets/img/avatars/5.png')}}" alt="Avatar" class="rounded-circle">
              </li>
              <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Sophia Wilkerson">
                <img src="{{asset('assets/img/avatars/6.png')}}" alt="Avatar" class="rounded-circle">
              </li>
              <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Christina Parker">
                <img src="{{asset('assets/img/avatars/7.png')}}" alt="Avatar" class="rounded-circle">
              </li>
            </ul>
          </td>
          <td><span class="badge bg-label-primary me-1">Active</span></td>
          <td>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
              </div>
            </div>
          </td>
        </tr>
        @endforeach

      </tbody>
    </table>
  </div>
</div>
<!--/ Basic Bootstrap Table -->
  </div>
</div>


@endsection
