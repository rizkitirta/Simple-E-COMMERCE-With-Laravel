@extends('layouts.app')

@section('content')
<a href=" {{ url('home') }} " class="ml-5"><img src=" {{ url('assets/Back.png') }} "></a>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card-header rounded mx-auto d-block mt-4">
                    <h4 class="text-center"> Detail {{ $barang->nama_barang }} </h4>
                </div>
                <div class="card-body">
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
                                        <td>{{$barang->nama_barang }} </td>
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
                                    <form action="" method="POST">
                                        <tr>
                                            <td>Jumlah Pesanan</td>
                                            <td>:</td>
                                            <td>
                                               <input type="text" name="jumlah_pesanan" class="form-control" required>
                                            </td>
										</tr>
										<tr>
											<td></td>
											<td></td>
											<td>
												<button type="submit" class="btn btn-danger"><li class="fa fa-shopping-cart"></li> Beli</button>
											</td>
										</tr>
                                    </form>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
