@extends('layouts.app-dash-lte')

@section('content-header', 'Video Baru')

@section('breadcump')
<li>Dashboard</li>
<li>Pengguna</li>
<li class="active">Membuat Video Baru</li>
@endsection

@section('content')
<div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title">Video Baru</h3>
    <div class="box-tools pull-right">
      <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
      <i class="fa fa-minus"></i></button>
    </div>
  </div>
  <div class="box-body">
    <div class="row">
      {!! Form::open(array('route' => 'dashboard.videos.store', 'method' => 'POST', 'files' => true)) !!}
      <div class="col-xs-6">
        {{ Form::tutaText('name', old('name'), '*', ['required' => 'required'], 'Nama') }}
        {{ Form::tutaText('url', old('url'), '*', ['required' => 'required']) }}
        
      </div>
     
  </div>
  <div class="row">
    <div class="col-xs-12">
      <div class="form-group pull-right">
        {!! Form::submit('Save', array('class' => 'btn btn-primary')) !!}
        <a class="btn btn-small btn-warning" href="{{ URL::to('dashboard/videos') }}">Cancel</a>
        {!! Form::close() !!}
      </div>
    </div>
  </div>
  <!-- /.box-body -->
</div>

<!-- /.box -->
@endsection
