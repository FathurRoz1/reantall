<!-- Idcat Field -->
<div class="form-group col-sm-6">
    {!! Form::label('IDCAT', 'Kategori :') !!}
    {!! Form::select('IDCAT', $combocat, null, ['class' => 'form-control']) !!}
</div>

<!-- Idbrand Field -->
<div class="form-group col-sm-6">
    {!! Form::label('IDBRAND', 'Merk :') !!}
    {!! Form::select('IDBRAND',$combobrand, null, ['class' => 'form-control']) !!}
</div>

<!-- Carname Field -->
<div class="form-group col-sm-6">
    {!! Form::label('CARNAME', 'Nama Mobil:') !!}
    {!! Form::text('CARNAME', null, ['class' => 'form-control','maxlength' => 30,'maxlength' => 30]) !!}
</div>

<!-- Carseat Field -->
<div class="form-group col-sm-6">
    {!! Form::label('CARSEAT', 'Tempat Duduk:') !!}
    {!! Form::number('CARSEAT', null, ['class' => 'form-control']) !!}
</div>

<!-- Carcolor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('CARCOLOR', 'Warna Mobil:') !!}
    {!! Form::text('CARCOLOR', null, ['class' => 'form-control','maxlength' => 30,'maxlength' => 30]) !!}
</div>

<!-- Carfuel Field -->
<div class="form-group col-sm-6">
    {!! Form::label('CARFUEL', 'Bahan Bakar:') !!}
    {!! Form::text('CARFUEL', null, ['class' => 'form-control','maxlength' => 30,'maxlength' => 30]) !!}
</div>

<!-- Carnumber Field -->
<div class="form-group col-sm-6">
    {!! Form::label('CARNUMBER', 'Nomor Mobil:') !!}
    {!! Form::text('CARNUMBER', null, ['class' => 'form-control','maxlength' => 30,'maxlength' => 30]) !!}
</div>

<!-- Carcylinder Field -->
<div class="form-group col-sm-6">
    {!! Form::label('CARCYLINDER', 'Jumlah Silinder :') !!}
    {!! Form::text('CARCYLINDER', null, ['class' => 'form-control','maxlength' => 30,'maxlength' => 30]) !!}
</div>

<!-- Carfeature Field -->
<div class="form-group col-sm-6">
    {!! Form::label('CARFEATURE', 'Fitur :') !!}
    {!! Form::text('CARFEATURE', null, ['class' => 'form-control','maxlength' => 30,'maxlength' => 30]) !!}
</div>

<!-- Caryear Field -->
<div class="form-group col-sm-6">
    {!! Form::label('CARYEAR', 'Tahun Mobil:') !!}
    {!! Form::number('CARYEAR', null, ['class' => 'form-control','maxlength' => 30,'maxlength' => 30]) !!}
</div>

<!-- Caryear Field -->
<div class="form-group col-sm-6">
    {!! Form::label('PRICE', 'Harga:') !!}
    {!! Form::number('PRICE', null, ['class' => 'form-control','maxlength' => 30,'maxlength' => 30]) !!}
</div>

<!-- Carpicture Field -->
<div class="form-group col-sm-6">
    {!! Form::label('CARPICTURE', 'Gambar:') !!}
    {!! Form::file('CARPICTURE', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('cars.index') }}" class="btn btn-light">Cancel</a>
</div>
