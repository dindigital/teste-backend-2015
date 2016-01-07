@extends('layouts.default')

@section('content')
	<section id="about" class="about-section"><!-- about start -->
	  <div class="container">
	    <div class="row">
	      <div class="col-md-4 doctor-profile"> 
	      	<div class="bg-profile"> 
		    	<img src="{{asset('image/'.$medico->foto)}}">
		    </div>
	          <h3> {{ $medico->nome }} </h3>
	          <strong>{{ $medico->especialidade }}     |      {{ $medico->celular }} </strong>
	          <p> {{ $medico->descricao }} </p>
	        </div>
	    </div>
	  </div>
	</section>
@stop