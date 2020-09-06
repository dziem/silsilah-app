@extends('tree.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Keluarga {{ $tree->nama }}</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('tree.index') }}">Kembali</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <h3>Orang Tua</h3>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <h3>Saudara Kandung</h3>
        </div>
    </div>
@endsection