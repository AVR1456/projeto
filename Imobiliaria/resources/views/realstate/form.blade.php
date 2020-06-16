<p class="form-group">
    {!! Form::label('name','Nome') !!}
    {!! Form::text('name',null,['class' => 'form-control', 'placeholder' => 'Nome']) !!}
</p>
<p class="form-group">
    {!! Form::label('cnpj','CNPJ') !!}
    {!! Form::text('cnpj',null,['class' => 'form-control', 'placeholder' => 'CNPJ']) !!}
</p>
<p class="form-group">
    {!! Form::label('address','Endereço') !!}
    {!! Form::text('address',null,['class' => 'form-control']) !!}
</p>
<p class="form-group">
    {!! Form::label('phone','Telefone') !!}
    {!! Form::text('phone',null,['class' => 'form-control']) !!}
</p>
<p class="form-group">
    {!! Form::label('email','Email') !!}
    {!! Form::text('email',null,['class' => 'form-control']) !!}
</p>


<p class="form-group">
    <input class="btn btn-default" type="reset" value="Limpar">
    <input class="btn btn-primary" type="submit" value="Salvar">
</p>
