@extends('layouts.master')
@section('content')
<div class="container">

    <form action="{{ url('pemasukan/add') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label class="form-control-label" for="exampleFormControlInput1">Merk</label>
                    <input type="number" name="jumlah" class="form-control" id="exampleFormControlInput1" placeholder="Merk Senar">
                    @error('jumlah')
                    <div class="alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="form-control-label" for="exampleFormControlInput1">Jenis</label>
                    <select name="sumber_pemasukan_id" class="form-control" id="exampleFormControlSelect1">
                        <option selected="" disabled="">Jenis</option>
                        {{-- @foreach ($pemasukan as $pm) --}}
                        <option value="1">1</option>
                        {{-- @endforeach --}}
                    </select>
                    @error('sumber_pemasukan_id')
                    <div class="alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="form-control-label" for="exampleFormControlInput1">Ukuran</label>
                    <select name="sumber_pemasukan_id" class="form-control" id="exampleFormControlSelect1">
                        <option selected="" disabled="">Ukuran</option>
                        {{-- @foreach ($pemasukan as $pm) --}}
                        <option value="1">1</option>
                        {{-- @endforeach --}}
                    </select>
                    @error('sumber_pemasukan_id')
                    <div class="alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="form-control-label" for="exampleFormControlInput1">Harga</label>
                    <input type="number" value="" name="total_pemasukan" class="form-control" id="exampleFormControlInput1" placeholder="">
                    @error('total_pemasukan')
                    <div class="alert-danger">
                        {{-- {{ $message }} --}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="form-control-label" for="exampleFormControlInput1">stok</label>
                    <input type="number" name="stok" class="form-control" id="exampleFormControlInput1" placeholder="stok">
                    @error('jumlah')
                    <div class="alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                {{-- <div class="form-group">
                    <label class="form-control-label" for="exampleFormControlInput1">Tanggal</label>
                    <input name="tanggal" type="text" class="form-control datepicker" autocomplete="off" >
                    @error('tanggal')
                    <div class="alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="form-control-label" for="exampleFormControlTextarea2">keterangan</label>
                    <textarea name="keterangan" class="form-control" id="exampleFormControlTextarea2" rows="3" resize="none"></textarea>
                    @error('keterangan')
                    <div class="alert-danger">{{ $message }}</div>
                    @enderror
                </div> --}}
                <div class="form-group">
                    <input type="submit" class="btn btn-info" value="simpan" >
                    
                </div>
      </div>
      
      
    </div>
    
</form>

</div>
@endsection