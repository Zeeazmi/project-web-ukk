@extends('layouts.app')
@section('content')
    <!-- App hero header starts -->
    <div class="app-hero-header d-flex align-items-start">

        <!-- Breadcrumb start -->
        <ol class="breadcrumb d-none d-lg-flex">
            <li class="breadcrumb-item">
                <i class="bi bi-house lh-1"></i>
                <a href="index.html" class="text-decoration-none">Costumer</a>
            </li>
            {{-- <li class="breadcrumb-item" aria-current="page">Analytics</li> --}}
        </ol>
        <!-- Breadcrumb end -->

        <!-- Filter start -->
        <div class="ms-auto d-flex flex-row gap-1 day-filters">
            <a href="{{ route('costumer.create') }}" class="btn btn-outline-success btn-sm mx-1"><i
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
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>No Telephon</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($costumer as $no => $hasil)
                                <tr>
                                    <td>{{ $no + 1 }}</td>
                                    <td>{{ $hasil->costumer }}</td>
                                    <td>{{ $hasil->alamat }}</td>
                                    <td>{{ $hasil->no_telephon }}</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{ route('costumer.edit', $hasil->id) }}" class="btn btn-outline-success btn-sm mx-1">Edit</a>
                                            <form action="{{ route('costumer.destroy', $hasil->id) }}" class="delete-data"
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
