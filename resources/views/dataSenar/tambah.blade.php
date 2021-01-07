@extends('layouts.master')
@section('content')
<div class="container">

    <form action="{{ url('senar/add') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col">
                    <div class="form-group">
                        <label class="form-control-label" for="exampleFormControlInput1">Merk</label>
                        <input type="text" name="merk" class="form-control" id="exampleFormControlInput1" placeholder="input merk">
                        @error('merk')
                        <div class="alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                <div class="form-group">
                    <label class="form-control-label" for="exampleFormControlInput1">Jenis</label>
                    <select name="id_jenis" class="form-control" id="exampleFormControlSelect1">
                        <option selected="" disabled="">Jenis</option>
                        @foreach ($data as $dt)
                        <option value="{{$dt->jenis_id}}">{{$dt->nama}}</option>
                        @endforeach
                    </select>
                    @error('jenis_id')
                    <div class="alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="form-control-label" for="exampleFormControlInput1">ukuran</label>
                    <select name="id_ukuran" class="form-control" id="exampleFormControlSelect1">
                        <option selected="" disabled="">Ukuran</option>
                        @foreach ($data_ukuran as $dt_u)
                        <option value="{{$dt_u->ukuran_id}}">{{$dt_u->ukuran}}</option>
                        @endforeach
                    </select>
                    @error('ukuran')
                    <div class="alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="form-control-label" for="exampleFormControlInput1">stok</label>
                    <input type="number" name="stok" class="form-control" id="exampleFormControlInput1" placeholder="input ukuran">
                    @error('stok')
                    <div class="alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="form-control-label" for="exampleFormControlInput1">harga</label>
                    <input type="number" name="harga" class="form-control" id="exampleFormControlInput1" placeholder="input ukuran">
                    @error('harga')
                    <div class="alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-info" value="simpan" >

                </div>
      </div>


    </div>

</form>

</div>
@endsection
