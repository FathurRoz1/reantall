<!-- Brandname Field -->
<div class="form-group col-sm-6">
    {!! Form::label('BRANDNAME', 'MERK:') !!}
    {!! Form::text('BRANDNAME', null, ['class' => 'form-control','maxlength' => 30,'maxlength' => 30]) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('brands.index') }}" class="btn btn-light">Cancel</a>
</div>
