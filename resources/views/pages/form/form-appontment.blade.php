 <div class="col-md-offset-1 col-md-4">
    <div class="appoinment-form">
      <h3> Make an appointment today </h3>

      @include('errors.list')


  {!! Form::open(['action' => 'FormularioController@store']) !!}

<div class="form-group">
    {!! Form::label('Name', 'Name:') !!}
    {!! Form::text('nome',null,['class'=>'form-control', 'required']) !!}
</div>
<div class="form-group">
    {!! Form::label('E-mail', 'E-mail:') !!}
    {!! Form::text('email',null,['class'=>'form-control', 'required']) !!}
</div>
<div class="form-group">
    {!! Form::label('Phone', 'Phone:') !!}
    {!! Form::text('telefone',null,['class'=>'form-control', 'id' => 'telefone',  'pattern' => '\([0-9]{2}\)[\s][0-9]{4}-[0-9]{4,5}', 'required']) !!}
</div>
<div class="form-group">
    {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
</div>
{!! Form::close() !!}
    </div>
</div>

@section('script')
   @parent

  $("#telefone").mask("(00) 0000-00009");

  alert('teste2');
@stop

