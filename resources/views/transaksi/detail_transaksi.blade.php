@extends('layouts.app')
@section('content')
    <!-- App hero header starts -->
    <div class="app-hero-header d-flex align-items-start">

        <!-- Breadcrumb start -->
        <ol class="breadcrumb d-none d-lg-flex">
            <li class="breadcrumb-item">
                <i class="bi bi-house lh-1"></i>
                <a href="{{ route('transaksi.index') }}" class="text-decoration-none">Transaksi</a>
            </li>
            <li class="breadcrumb-item" aria-current="page">Detail Transaksi</li>
            {{-- <li class="breadcrumb-item" aria-current="page">Analytics</li> --}}
        </ol>
        <!-- Breadcrumb end -->

        <!-- Filter start -->
        <div class="ms-auto d-flex flex-row gap-1 day-filters">
            <a href="{{ route('cetakpdf') }}" class="btn btn-outline-danger btn-sm">PDF</a>
        </div>
        <!-- Filter end -->

    </div>
    <!-- App Hero header ends -->
    <div class="col-xxl-12">
        <div class="card mb-3">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered m-0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Tanggal</th>
                                <th>Harga</th>
                                <th>Costumer</th>
                                <th>Barang</th>
                                <th>Jumlah</th>
                                <th>Sub total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>{{ $transaksi->tanggal }}</td>
                                <td>Rp. {{ number_format($transaksi->total_harga * $transaksi->jumlah, 0, ',', '.') }}</td>
                                <td>{{ $transaksi->costumer_name->costumer }}</td>
                                <td>{{ $transaksi->barang_name->barang }}</td>
                                <td>{{ $transaksi->jumlah }}</td>
                                <td>Rp. {{ number_format($transaksi->total_harga * $transaksi->jumlah, 0, ',', '.') }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
