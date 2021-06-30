<!-- Idcust Field -->
<div class="form-group col-sm-6">
    {!! Form::label('IDCUST', 'Pelanggan:') !!}
    {!! Form::select('IDCUST', $combocust, null, ['class' => 'form-control']) !!}
</div>

<!-- Testimoni Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('TESTIMONI', 'Testimoni:') !!}
    {!! Form::textarea('TESTIMONI', null, ['class' => 'form-control']) !!}
</div>

<!-- Star Field -->
<div class="form-group col-sm-6">
    {!! Form::label('STAR', 'Bintang:') !!}
    {!! Form::number('STAR', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('testimonis.index') }}" class="btn btn-light">Cancel</a>
</div>
