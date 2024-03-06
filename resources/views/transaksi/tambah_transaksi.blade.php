@extends('layouts.app')
@section('content')
    <div class="app-hero-header d-flex align-items-start">


        <ol class="breadcrumb d-none d-lg-flex">
            <li class="breadcrumb-item">
                <i class="bi bi-house lh-1"></i>
                <a href="{{ route('transaksi.index') }}" class="text-decoration-none">Transaksi</a>
            </li>
            <li class="breadcrumb-item" aria-current="page">Tambah Transaksi</li>
        </ol>

    </div>
    <form action="{{ route('transaksi.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row gx-3">
            <div class="col-xl-12 col-sm-6 col-12">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="m-0">
                            <label class="form-label" for="barang">Barang</label>
                            <select class="form-select" id="barang" name="barang" aria-label="Default select example">
                                @foreach ($barang as $barang)
                                    <option value="{{ $barang->id }}"
                                        @if (old('barang_id') == $barang->id) selected="selected" @endif>
                                        {{ $barang->barang }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12 col-sm-6 col-12">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="m-0">
                            <label class="form-label" for="costumer">Costumer</label>
                            <select class="form-select" id="costumer" name="costumer" aria-label="Default select example">
                                @foreach ($costumer as $costumer)
                                    <option value="{{ $costumer->id }}"
                                        @if (old('costumer_id') == $costumer->id) selected="selected" @endif>
                                        {{ $costumer->costumer }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-12">

                <div class="card mb-3">
                    <div class="card-body">
                        <div class="m-0">
                            <label class="form-label" for="tanggal">Tanggal</label>
                            <div class="input-group">
                                <span class="input-group-text">
                                    <i class="bi bi-calendar4"></i>
                                </span>
                                <input type="date" id="tanggal" name="tanggal" class="form-control datepicker" />
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-12 col-sm-6 col-12">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="m-0">
                            <label class="form-label" for="jumlah">Jumlah</label>
                            <input type="text" class="form-control" id="jumlah" name="jumlah"
                                placeholder="Enter text" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-sm-6 col-12">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="m-0">
                            <label class="form-label" for="total_harga">Harga</label>
                            <input type="text" class="form-control" id="total_harga" name="total_harga"
                                placeholder="Enter text" />
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <a href="{{ route('transaksi.index') }}" class="btn btn-outline-danger btn-sm">Batal</a>
        <button type="submit" name="button" class="btn btn-outline-primary btn-sm mx-1">
            <i class="bi bi-plus-square"></i> Simpan
        </button>
    </form>
@endsection
