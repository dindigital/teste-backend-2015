@include('partials.header')
@extends('index')

<section id="about" class="about-section"><!-- about start -->
  <div class="container">
    <div class="row">
      <div class="col-md-4 doctor-profile"> 
          <h3> {{ $medico->nome }} </h3>
          <strong>{{ $medico->especialidade }}     |      {{ $medico->celular }} </strong>
          <p> {{ $medico->descricao }} </p>
        </div>
    </div>
  </div>
</section>