@extends('layouts.app')
@section('content')
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger mb-2">{{ $error }}</div>
    @endforeach
    <!-- App hero header starts -->
    <div class="app-hero-header d-flex align-items-start">

        <!-- Breadcrumb start -->
        <ol class="breadcrumb d-none d-lg-flex">
            <li class="breadcrumb-item">
                <i class="bi bi-house lh-1"></i>
                <a href="{{ route('barang-masuk.index') }}" class="text-decoration-none">Barang Masuk</a>
            </li>
            <li class="breadcrumb-item" aria-current="page">Tambah Barang</li>
        </ol>
        <!-- Breadcrumb end -->

    </div>
    <form action="{{ route('barang-masuk.update', $barangmasuk->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('Patch')
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
                            @error('barang_id')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-12">
                <!-- Card starts -->
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="m-0">
                            <label class="form-label" for="tanggal">Tanggal</label>
                            <div class="input-group">
                                <span class="input-group-text">
                                    <i class="bi bi-calendar4"></i>
                                </span>
                                <input type="date" id="tanggal" name="tanggal" value="{{ $barangmasuk->tanggal }}"
                                    class="form-control datepicker" />
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card ends -->
            </div>
            <div class="col-lg-12 col-sm-6 col-12">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="m-0">
                            <label class="form-label" for="jumlah">Jumlah</label>
                            <input type="text" class="form-control" id="jumlah" name="jumlah"
                                value="{{ $barangmasuk->jumlah }}" placeholder="Enter text" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Row end -->
        <a href="{{ route('barang-masuk.index') }}" class="btn btn-outline-danger btn-sm">Batal</a>
        <button type="submit" name="button" class="btn btn-outline-primary btn-sm mx-1">
            <i class="bi bi-plus-square"></i> Simpan
        </button>
    </form>
@endsection
@push('scripts')
    <script src="{{ asset('assets/js/daterange/daterange.js') }}"></script>
    <script src="{{ asset('assets/js/daterange/custom-daterange.js') }}"></script>
    <script>
        $(".datepicker").daterangepicker({
            singleDatePicker: true,
            startDate: moment().startOf("hour"),
            endDate: moment().startOf("hour").add(32, "hour"),
            locale: {
                format: "DD/MM/YYYY",
            },
        });
    </script>
@endpush
