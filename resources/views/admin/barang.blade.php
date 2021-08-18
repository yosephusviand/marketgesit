@extends('layouts.lucid')

@section('content')
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i
                                    class="fa fa-arrow-right"></i></a> Stock Barang</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="icon-home"></i></a></li>
                            <li class="breadcrumb-item active">Stock Barang</li>
                        </ul>
                    </div>

                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2>Input/Update Barang</h2>
                        </div>
                        <div class="body">
                            <form action="{{ route('barang.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row clearfix">
                                    <div class="col">
                                        <div class="row">
                                            <input type="hidden" name="idedit" id="idedit" value="">
                                            <div class="col-lg-6 col-md-12">
                                                <div class="form-group">
                                                    <label for="">Kategori</label>
                                                    <select name="kategori" class="form-control select2" id="kategori">
                                                        <option value="" disabled selected hidden>Pilih </option>
                                                        @foreach ($kategori as $val)
                                                            <option value="{{ $val->id }}">{{ $val->nama }}</option>
                                                        @endforeach
                                                    </select>
                                                    @error('kategori') <div class="small text-danger">{{ message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                                <div class="form-group">
                                                    <label for="">Sub Kategori</label>
                                                    <select name="subkategori" class="form-control select2"
                                                        id="subkategori">
                                                        <option value="" disabled selected hidden>Pilih </option>
                                                        @foreach ($subkategori as $val)
                                                            <option value="{{ $val->id }}">{{ $val->nama }}</option>
                                                        @endforeach
                                                    </select>
                                                    @error('subkategori') <div class="small text-danger">{{ message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                                <div class="form-group">
                                                    <label for="">Nama Barang</label>
                                                    <input type="text" class="form-control" name="nama"
                                                        placeholder="Tuliskan" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                                <div class="form-group">
                                                    <label for="">Jumlah Barang</label>
                                                    <input type="number" class="form-control" name="qty"
                                                        placeholder="Tuliskan" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Harga Barang</label>
                                            <input type="number" class="form-control" name="harga" placeholder="Tuliskan"
                                                required>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Deskripsi Barang</label>
                                            <textarea name="deskripsi" class="form-control" id="" cols="30"
                                                rows="5"></textarea>
                                        </div>
                                        <label for="">Foto Utama</label>
                                        <div class="form-group shadow">
                                            <input type="file" name="fotoutama" class="dropify" data-max-file-size="2048K"
                                                data-allowed-file-extensions="jpg png jpeg" accept="image/*">
                                            @if ($errors->has('fotoutama'))
                                                <br>
                                                <span class="text-danger">{{ $errors->first('fotoutama') }}</span>
                                            @endif
                                        </div>


                                        <label for="">Foto Detail</label>
                                        <div class="row">

                                            <div class="col-lg-6 col-md-12 ">
                                                <div class="form-group shadow">
                                                    <input type="file" name="foto[]" class="dropify"
                                                        data-max-file-size="2048K"
                                                        data-allowed-file-extensions="png jpg jpeg" accept="image/*">
                                                    @if ($errors->has('foto'))
                                                        <br>
                                                        <span class="text-danger">{{ $errors->first('foto') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                                <div class="form-group shadow">
                                                    <input type="file" name="foto[]" class="dropify"
                                                        data-max-file-size="2048K"
                                                        data-allowed-file-extensions="png jpg jpeg" accept="image/*">
                                                    @if ($errors->has('foto'))
                                                        <br>
                                                        <span class="text-danger">{{ $errors->first('foto') }}</span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-12">
                                                <div class="form-group shadow">
                                                    <input type="file" name="foto[]" class="dropify"
                                                        data-max-file-size="2048K"
                                                        data-allowed-file-extensions="png jpg jpeg" accept="image/*">
                                                    @if ($errors->has('foto'))
                                                        <br>
                                                        <span class="text-danger">{{ $errors->first('foto') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                                <div class="form-group shadow">
                                                    <input type="file" name="foto[]" class="dropify"
                                                        data-max-file-size="2048K"
                                                        data-allowed-file-extensions="png jpg jpeg" accept="image/*">
                                                    @if ($errors->has('foto'))
                                                        <br>
                                                        <span class="text-danger">{{ $errors->first('foto') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2>Data Barang</h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table
                                    class="table table-hover js-basic-example dataTable table-custom table-sm table-bordered">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>No</th>
                                            <th>Kategori</th>
                                            <th>Sub Kategori</th>
                                            <th>Nama Barang</th>
                                            <th>Deskrisi</th>
                                            <th>QTY</th>
                                            <th>Stock</th>
                                            <th>Harga</th>
                                            <th>Foto Utama</th>
                                            <th>Foto Detail</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $i => $val)
                                            <tr>
                                                <td>{{ ++$i }}</td>
                                                <td>{{ $val->tokategori->nama ?? ''}}</td>
                                                <td>{{ $val->tosubkategori->nama ?? '' }}</td>
                                                <td>{{ $val->nama }}</td>
                                                <td>{{ $val->deskripsi }}</td>
                                                <td>{{ $val->qty }}</td>
                                                <td>{{ $val->stock_qty }}</td>
                                                <td>{{ number_format($val->harga, 0) }}</td>
                                                <td>
                                                    <img src="{{ route('barang.displayImage', $val->id) }}" alt=""
                                                        title="" width="100px">
                                                </td>
                                                <td>
                                                    @foreach ($val->tofotodetail as $detail)
                                                        <img src="{{ route('barangdetail.displayImage', $detail->id) }}"
                                                            alt="" title="" width="100px">
                                                    @endforeach
                                                </td>
                                                <td>
                                                    <button type="submit" class="btn btn-primary btn-sm editbarang"
                                                        data-id="{{ $val->id }}">Edit</button>
                                                    <a href="{{ route('barang.destroy', $val->id) }}"
                                                        class="btn btn-danger btn-sm">Hapus</a>
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
    </div>
@endsection
