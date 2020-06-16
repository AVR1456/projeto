<p class="form-group">
    {!! Form::label('description','Descrição') !!}
{!! Form::text('description',null,['class' => 'form-control', 'placeholder' => 'Descrição']) !!}
</p>

<p class = "form-group">
    
    {!! Form::label('address', 'Endereço') !!}
    {!! Form::text('address', null, ['class' => 'form-control']) !!}
       
</p>

<p class="form-group">
    {!! Form::label('number','Numero') !!}
    {!! Form::text('number',null,['class' => 'form-control']) !!}
</p>




<p class="form-group">

    {!! Form::label('owner_id', 'Proprietario:') !!}  
    {!! Form::select('owner_id', $ownerTypeList, null, ['class' => 'form-control']) !!}

</p>

<p class="form-group">

{!! Form::label('rent_id', 'Locador:') !!}
{!! Form::select('rent_id', $rentTypeList, null , ['class' => 'form-control']) !!}

</p>

<p class="form-group">
    <input class="btn btn-default" type="reset" value="Limpar">
    <input class="btn btn-primary" type="submit" value="Salvar">
</p>