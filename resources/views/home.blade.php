@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 mb-4">
                <img src=" {{ url('assets/logo.png') }} " width="200" class="rounded mx-auto d-block">
            </div>
            @foreach ($barangs as $barang)
                <div class="row mx-auto">
                    <div class="card mr-2 ml-2 mb-3" style="width: 16rem;">
                        <img src=" {{ url('assets') }}/{{ $barang->gambar }} " class="card-img-top" alt="...">
                        <div class="card-body bg-light">
                            <h5 class="card-title"> {{ $barang->nama_barang }} </h5>
                            <li class="fas fa-star text-warning"></li>
                            <li class="fas fa-star text-warning"></li>
                            <li class="fas fa-star text-warning"></li>
                            <li class="fas fa-star-half-alt text-warning"></li>
                            <li class="far fa-star text-warning"></li> <br>
                            <a href="#" class="btn btn-danger mt-2">Rp.{{ number_format($barang->harga) }} </a>
                            <a href=" {{ url('pesan') }}/{{ $barang->id }} " class="btn btn-primary mt-2">
                                <li class="fa fa-shopping-cart"></li> Pesan
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
        @endsection
