@extends('layouts.app')
@section('content')
    <!-- App hero header starts -->
    <div class="app-hero-header d-flex align-items-start">

        <!-- Breadcrumb start -->
        <ol class="breadcrumb d-none d-lg-flex">
            <li class="breadcrumb-item">
                <i class="bi bi-house lh-1"></i>
                <a href="index.html" class="text-decoration-none">Barang</a>
            </li>
            {{-- <li class="breadcrumb-item" aria-current="page">Analytics</li> --}}
        </ol>
        <!-- Breadcrumb end -->

        <!-- Filter start -->
        <div class="ms-auto d-flex flex-row gap-1 day-filters">
            <a href="{{ route('barang.create') }}" class="btn btn-outline-success btn-sm mx-1"><i
                    class="bi bi-plus-square me-1"></i>Tambah</a>
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
                                <th>#id</th>
                                <th>Nama Barang</th>
                                <th>Harga</th>
                                <th>Stok Awal</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($barang as $no => $hasil)
                                <tr>
                                    <td>{{ $no + 1 }}</td>
                                    <td>{{ $hasil->barang }}</td>
                                    <td>Rp.{{ $hasil->harga }}</td>
                                    <td>{{ $hasil->stok }}</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{ route('barang.edit', $hasil->id) }}"
                                                class="btn btn-outline-success btn-sm mx-1">Edit</a>
                                            <form action="{{ route('barang.destroy', $hasil->id) }}" class="delete-data"
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
