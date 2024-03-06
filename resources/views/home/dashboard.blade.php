@extends('layouts.app')
@section('content')
    <!-- App hero header starts -->
    <div class="app-hero-header d-flex align-items-start">

        <!-- Breadcrumb start -->
        <ol class="breadcrumb d-none d-lg-flex">
            <li class="breadcrumb-item">
                <i class="bi bi-house lh-1"></i>
                <a href="index.html" class="text-decoration-none">Home</a>
            </li>
            <li class="breadcrumb-item" aria-current="page">Analytics</li>
        </ol>
        <!-- Breadcrumb end -->

        <!-- Filter start -->
        <div class="ms-auto d-flex flex-row gap-1 day-filters">
            
        </div>
        <!-- Filter end -->

    </div>
    <!-- App Hero header ends -->
    <!-- App body starts -->
    <div class="app-body">

        <!-- Row start -->
        <div class="row gx-3">
            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="d-flex flex-column">
                            <div class="d-flex align-items-center py-2">
                                <div class="icon-box lg border border-danger rounded-5">
                                    <i class="bi bi-check-circle text-white fs-3 lh-1"></i>
                                </div>
                                <div class="mx-3">
                                    <h3 class="m-0 text-white">{{ $barang }}</h3>
                                    <p class="m-0">Barang</p>
                                </div>
                            </div>
                            <div id="sparklineLine1" class="ms-auto"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="d-flex flex-column">
                            <div class="d-flex align-items-center py-2">
                                <div class="icon-box lg border border-info rounded-5">
                                    <i class="bi bi-check-circle text-white fs-3 lh-1"></i>
                                </div>
                                <div class="mx-3">
                                    <h3 class="m-0 text-white">{{ $costumer }}</h3>
                                    <p class="m-0">Costumer</p>
                                </div>
                            </div>
                            <div id="sparklineLine2" class="ms-auto"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="d-flex flex-column">
                            <div class="d-flex align-items-center py-2">
                                <div class="icon-box lg border border-success rounded-5">
                                    <i class="bi bi-check-circle text-white fs-3 lh-1"></i>
                                </div>
                                <div class="mx-3">
                                    <h3 class="m-0 text-white">{{ $barangmasuk }}</h3>
                                    <p class="m-0">Barang Masuk</p>
                                </div>
                            </div>
                            <div id="sparklineLine3" class="ms-auto"></div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="col-xl-3 col-sm-6 col-12">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="d-flex flex-column">
                            <div class="d-flex align-items-center py-2">
                                <div class="icon-box lg border border-warning rounded-5">
                                    <i class="bi bi-check-circle text-white fs-3 lh-1"></i>
                                </div>
                                <div class="mx-3">
                                    <h3 class="m-0 text-white">9600</h3>
                                    <p class="m-0">Sales</p>
                                </div>
                            </div>
                            <div id="sparklineLine4" class="ms-auto"></div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
        <!-- Row end -->

        <!-- Row start -->
        <div class="row gx-3">
            <div class="col-xxl-6 col-sm-12 col-12">
                <div class="card mb-3">
                    <div class="card-header">
                        <h5 class="card-title">Transaksi Terbaru</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <div class="table-outer">
                                <table class="table align-middle">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Tanggal</th>
                                            <th>Harga</th>
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
            </div>
        </div>
        <!-- Row end -->

    </div>
@endsection
