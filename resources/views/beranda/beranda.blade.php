@extends('layouts.app')

@section('scripts')
<script src="{!! asset('mytuta/js/select.spec.js') !!}"></script>
<script id="dsq-count-scr" src="//mobilokal.disqus.com/count.js" async></script>
@endsection

@section('content')
  @include('layouts.utility')
    <!-- Start Body Content -->
  	<div class="main" role="main">
    	<div id="content" class="content full padding-b0">
            <div class="container">
            	<!-- Welcome Content and Services overview -->
            	<div class="row">
                	<div class="col-md-6">
                    	<h1 class="uppercase strong">Ujian Praktek Mediatama. -Sugeng Waryono-</h1>
                        <p class="lead">Silahkan login di pojok kanan atas.</p>
                    </div>
                    <div class="col-md-6">
                       
                    </div>
                </div>
                
           	</div>
            <div class="spacer-50"></div>
            <div class="lgray-bg make-slider">
            	<div class="container">
                    <!-- Search by make -->

                </div>
            </div>
        </div>
   	</div>
    <!-- End Body Content -->
@endsection
