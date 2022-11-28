@extends('layouts.main')
  
@section('container')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Create </h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary float-end" href="{{ route('students.index') }}"> Back</a><br>
        </div>
    </div>
</div>
     
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
     
<form action="{{ route('students.store') }}" method="POST" enctype="multipart/form-data"> 
    @csrf
    
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>NIS :</strong>
                <input type="number" name="nis" class="form-control" placeholder="NIS">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama :</strong>
                <input type="text" name="nama" class="form-control" placeholder="Nama">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Rombel :</strong><br>
                <input type="radio" name="rombel" value="PPLG XI-1"> PPLG XI-1 <br>
                <input type="radio" name="rombel" value="PPLG XI-2"> PPLG XI-2 <br>
                <input type="radio" name="rombel" value="PPLG XI-3"> PPLG XI-3 <br>
                <input type="radio" name="rombel" value="PPLG XI-4"> PPLG XI-4 <br>
                <input type="radio" name="rombel" value="PPLG XI-5"> PPLG XI-5 <br>
            </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Rayon :</strong>
                <input type="text" name="rayon" class="form-control" placeholder="Rayon" >
            </div>
        </div>
        <br>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Keterangan :</strong>
                <input type="radio" name="ket" value="Hadir"> Hadir
                <input type="radio" name="ket" value="Sakit"> Sakit
                <input type="radio" name="ket" value="Ijin"> Ijin
                <input type="radio" name="ket" value="Alfa"> Alfa
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
     
</form>
@endsection