@extends('layouts.app')
@section('content')
    <!-- App hero header starts -->
    <div class="app-hero-header d-flex align-items-start">

        <!-- Breadcrumb start -->
        <ol class="breadcrumb d-none d-lg-flex">
            <li class="breadcrumb-item">
                <i class="bi bi-house lh-1"></i>
                <a href="index.html" class="text-decoration-none">Transaksi</a>
            </li>
            {{-- <li class="breadcrumb-item" aria-current="page">Analytics</li> --}}
        </ol>
        <!-- Breadcrumb end -->

        <!-- Filter start -->
        <div class="ms-auto d-flex flex-row gap-1 day-filters">
            <a href="{{ route('cetakpdf') }}" class="btn btn-outline-danger btn-sm">PDF</a>
            <a href="{{ route('transaksi.create') }}" class="btn btn-outline-success btn-sm mx-1">Tambah</a>
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
                                <th>Total Harga</th>
                                <th>Costumer</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($transaksi as $no => $hasil)
                                <tr>
                                    <td>{{ $no + 1 }}</td>
                                    <td>{{ $hasil->tanggal }}</td>
                                    <td>Rp. {{ number_format($hasil->total_harga * $hasil->jumlah, 0, ',', '.') }}</td>
                                    <td>{{ $hasil->costumer_name->costumer }}</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{ route('transaksi.show', $hasil->id) }}"
                                                class="btn btn-outline-success btn-sm me-1">Detail</a>
                                            <form action="{{ route('transaksi.destroy', $hasil->id) }}" class="delete-data"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-outline-danger btn-sm">
                                                    Hapus
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
