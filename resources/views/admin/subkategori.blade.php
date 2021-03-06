@extends('layouts.lucid')

@section('content')
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i
                                    class="fa fa-arrow-right"></i></a> Sub Kategori</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="icon-home"></i></a></li>
                            <li class="breadcrumb-item active">Sub Kategori</li>
                        </ul>
                    </div>

                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2>Input/Update Sub Kategori</h2>
                        </div>
                        <div class="body">
                            <form action="{{ route('subkategori.store') }}" method="POST">
                                @csrf
                                <div class="row clearfix">
                                    <div class="col-12">
                                        <input type="hidden" name="idedit" id="idedit" value="">
                                        <div class="form-group">
                                            <label for="">Kategori</label>
                                            <select name="kategori" class="form-control select2" id="kategori">
                                                <option value="" disabled selected hidden>Pilih </option>
                                                @foreach ($kategori as $val)
                                                    <option value="{{ $val->id }}">{{ $val->nama }}</option>
                                                @endforeach
                                            </select>
                                            @error('kategori') <div class="small text-danger">{{ message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="">Nama Sub Kategori</label>
                                            <input type="text" class="form-control" name="nama" placeholder="Tuliskan"
                                                required>
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
                            <h2>Data Sub Kategori</h2>
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
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $i => $val)
                                            <tr>
                                                <td>{{ ++$i }}</td>
                                                <td>{{ $val->nama }}</td>
                                                <td>
                                                    @foreach ($val->tokategori as $item)
                                                        {{ $item->nama }}
                                                    @endforeach
                                                </td>
                                                <td>
                                                    <button type="submit" class="btn btn-primary btn-sm editsubkategori"
                                                        data-id="{{ $val->id }}">Edit</button>
                                                    <a href="{{ route('subkategori.destroy', $val->id) }}"
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
