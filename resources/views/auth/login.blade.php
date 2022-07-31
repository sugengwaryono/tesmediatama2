@extends('layouts.app-auth')

@section('title', 'LOGIN')

@section('content')
<body class="hold-transition login-page">
<div class="login-box">

  <div class="login-logo">
    <a href="/"><b>LOGIN</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Login untuk masuk</p>
    @if (Session::has('message'))
      <p class="alert {{ Session::get('alert-class', 'alert-success') }}">{{ Session::get('message') }}
          @if (Session::has('email'))
          {!! Form::open(array('url' => 'send/confirmation-code')) !!}
              {!! Form::hidden('email', Session::get('email')) !!}
              Jika email <strong>{{Session::get('email')}}</strong> anda belum menerima email konfirmasi klik: <button class="btn btn-success" type="submit">Kirim Kode Konfirmasi</button>
              <hr />
          {!! Form::close() !!}
          @endif
      </p>
    @endif
    <form role="form" method="POST" action="{{ url('/login') }}">
      {!! csrf_field() !!}
      <div class="form-group has-feedback">
        <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">
              <i class="fa fa-btn fa-sign-in"></i> Login
          </button>
        </div>
        <!-- /.col -->
      </div>
    </form>
    <!-- /.social-auth-links -->
    
  
    <div class="row">
      <div class="col-xs-8">
        <a href="{{ url('/') }}">&larr; Kembali ke Beranda</a>
      </div>
      
    
    </div>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

@endsection
