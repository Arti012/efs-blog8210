@extends('app')
@section('content')
<div class ="container">
     <div class="row">
          <div class="col-md-12">

             <div class="jumbotron">
             <br>
                 <h1>Eagle Financial Services</h1>
                     <p>Builiding relationships..leaving legacy</p>
                     
                     @if (Auth::check())
                     @extends('navlogin')
                      
<!--                      <p><a class="btn btn-warning btn-sm" href="{{action('CustomerController@index')}}"> Go back</a><p>
 -->                     @else
                     <p><a class="btn btn-primary btn-lg" href="{{ route('login') }}" >Login to start</a></p>
                     @endif
            </div>
@endsection