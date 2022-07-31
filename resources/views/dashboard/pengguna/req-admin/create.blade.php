@extends('layouts.app-dash-lte')

@section('scripts')
<script>
$(document).ready(function() {


});
</script>
@endsection

@section('content-header', 'Kirim Request Ke Admin')

@section('breadcump')
<li>Dashboard</li>
<li>Posting</li>
<li class="active">Mengirim Request Ke Admin</li>
@endsection

@section('content')

<!-- POST BARU -->
<div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title">Kirim Request Ke Admin</h3>
    <div class="box-tools pull-right">
      <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
      <i class="fa fa-minus"></i></button>
    </div>
  </div>
  <div class="box-body">
    <div class="row">
      {!! Form::open(array('route' => 'dashboard.pengguna.req-admin.store', 'method' => 'POST', 'files' => true)) !!}
      <div class="col-xs-6">
     {{ Form::label('video_id', 'video') }}
        
        {!! Form::select('video_id', $videos, old('video_id'), array('class' => 'form-control', 'required' => 'required')) !!}
    {{ Form::tutaText('notes', old('notes'), '', ['required' => '']) }}
   




</div>
<div class="col-xs-6">


      <!-- Textarea -->


      <!-- Prepended text-->


     
</div>
    </div>





  <!-- /.box-body -->
</div>
</div>
<!-- /.POST END -->


<!-- AKSI -->
<div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title">Aksi</h3>
    <div class="box-tools pull-right">
      <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
      <i class="fa fa-minus"></i></button>
    </div>
  </div>
  <div class="box-body">

  <div class="row">
    <div class="col-xs-12">
      <div class="form-group pull-right">
        {!! Form::submit('Kirim', array('class' => 'btn btn-primary form-button')) !!}
        <a class="btn btn-small btn-warning" href="{{ URL::to('dashboard/pengguna/req-admin') }}">Batal</a>
        {!! Form::close() !!}
      </div>
    </div>
  </div>
  <!-- /.box-body -->
</div>
</div>
<!-- /.AKSI END -->

@endsection
