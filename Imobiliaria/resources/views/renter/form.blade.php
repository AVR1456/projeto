<p class="form-group">
    {!! Form::label('name','Nome') !!}
    {!! Form::text('name',null,['class' => 'form-control', 'placeholder' => 'Nome']) !!}
</p>
<p class="form-group">
    {!! Form::label('cpf','CPF') !!}
    {!! Form::text('cpf',null,['class' => 'form-control', 'placeholder' => 'cpf']) !!}
</p>

<p class="form-group">
    {!! Form::label('phone','Telefone') !!}
    {!! Form::text('phone',null,['class' => 'form-control']) !!}
</p>

<p class="form-group">
    {!! Form::label('birth_date','Data Nasc') !!}
    {!! Form::date('birth_date',null,['class' => 'form-control']) !!}
</p>

<p class="form-group">
    {!! Form::label('email','Email') !!}
    {!! Form::text('email',null,['class' => 'form-control']) !!}
</p>


<p class="form-group">
        {!! Form::label('id_realstateagent', 'Corretor') !!}  
        {!! Form::select('id_realstateagent', $agentTypes, null, ['class' => 'form-control']) !!}
    </p>

<p class="form-group">
    <input class="btn btn-default" type="reset" value="Limpar">
    <input class="btn btn-primary" type="submit" value="Salvar">
</p>

