<div class="col-md-offset-1 col-md-4">
    <div class="appoinment-form">
      <h3> Make an appointment today </h3>
      <div class="message">
        @unless($errors->isEmpty())

        @foreach($errors->getMessages() as $error)
        <div class="alert alert-danger">
          {{ $error[0] }}.
      </div>
      @endforeach

      @endunless
  </div>
  {!! Form::open(array('action' => 'FormularioController@store')) !!}

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
    {!! Form::text('telefone',null,['class'=>'form-control', 'required']) !!}
</div>
<div class="form-group">
    {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
</div>
{!! Form::close() !!}
</div>
</div>