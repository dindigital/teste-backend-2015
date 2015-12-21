@foreach ($medicos as $medico)
<div class="col-md-4 doctor-profile"> 
  <div class="bg-profile"> 
    <a href="{{ URL::to('doctor',$medico->id) }}" ><img src="image/{{ $medico->foto }}" alt=""> </a>
  </div>
  <h3> {{ $medico->nome }} </h3>
  <strong>{{ $medico->especialidade }}     |      {{ $medico->celular }} </strong>
  <p> {{ $medico->descricao }} </p>
  <div class="social"> <a href="#"><i class="fa fa-facebook-square fa-size"> </i></a> <a href="#"><i class="fa fa-linkedin-square fa-size"> </i> </a> <a href="#"><i class="fa  fa-twitter-square fa-size"> </i> </a> </div>
</div>
@endforeach
