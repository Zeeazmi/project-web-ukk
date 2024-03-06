@extends('layouts.app')
@section('content')
    <!-- App hero header starts -->
    <div class="app-hero-header d-flex align-items-start">

        <!-- Breadcrumb start -->
        <ol class="breadcrumb d-none d-lg-flex">
            <li class="breadcrumb-item">
                <i class="bi bi-house lh-1"></i>
                <a href="{{ route('costumer.index') }}" class="text-decoration-none">Costumer</a>
            </li>
            <li class="breadcrumb-item" aria-current="page">Tambah Costumer</li>
        </ol>
        <!-- Breadcrumb end -->

        <!-- Filter start -->
        {{-- <div class="ms-auto d-flex flex-row gap-1 day-filters">
            <a href="{{ route('barang.create') }}" class="btn btn-outline-success btn-sm mx-1">Tambah</a>
        </div> --}}
        <!-- Filter end -->

    </div>
    <form action="{{ route('costumer.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row gx-3">
            <div class="col-lg-12 col-sm-6 col-12">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="m-0">
                            <label class="form-label" for="costumer">Costumer</label>
                            <input type="text" class="form-control" id="costumer" name="costumer"
                                placeholder="Enter text" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-sm-6 col-12">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="m-0">
                            <label class="form-label" for="alamat">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat"
                                placeholder="Enter text" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-sm-6 col-12">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="m-0">
                            <label class="form-label" for="no_telephon">No Telephon</label>
                            <input type="text" class="form-control" id="no_telephon" name="no_telephon"
                                placeholder="Enter text" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Row end -->
        <button type="submit" name="button" class="btn btn-info">
            <i class="bi bi-plus-square"></i> Simpan
        </button>
    </form>
@endsection
