@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li>

                        </li>
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page"> {{ $barang->nama_barang }} </li>
                    </ol>
                </nav>
            </div>

            <div class="mt-4">
                <a href=" {{ url('home') }} " class="ml-5">
                    <li class="fa fa-arrow-left fa-2x"></li>
                </a>
            </div>

            <div class="card-body">
                <h1 class="text-center font-weight-bold">Detail Batik</h1>
                <div class="row">
                    <div class="col-md-6">
                        <img class="rounded mx-auto d-block mt-4" src=" {{ url('assets') }}/{{ $barang->gambar }} "
                            width="300">
                    </div>
                    <div class="col-md-6 mt-5">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>Nama</td>
                                    <td>: </td>
                                    <td>{{ $barang->nama_barang }} </td>
                                </tr>
                                <tr>
                                    <td>Stok</td>
                                    <td>: </td>
                                    <td> {{ number_format($barang->stok) }} </td>

                                </tr>
                                <tr>
                                    <td>Harga</td>
                                    <td>: </td>
                                    <td>Rp.{{ number_format($barang->harga) }} </td>
                                </tr>
                                <tr>
                                    <td>Keterangan</td>
                                    <td>: </td>
                                    <td> {{ $barang->keterangan }} </td>
                                </tr>

                                <tr>
                                    <td>Jumlah Pesanan</td>
                                    <td>:</td>
                                    <td>
                                        <form action=" {{ url('pesan') }}/{{ $barang->id }} " method="POST">
                                            @csrf
                                            <input type="text" name="jumlah_pesanan" class="form-control" required>
                                            <button type="submit" class="btn btn-danger mt-3">
                                                <li class="fa fa-shopping-cart"></li> Masukan Keranjang
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
