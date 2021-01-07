@extends('layouts.master')
@section('content')
<div class="container">

    <form action="{{ url('senar/add') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col">
                
                <div class="form-group">
                    <label class="form-control-label" for="exampleFormControlInput1">Jenis</label>
                    <select name="jenis_id" class="form-control" id="exampleFormControlSelect1">
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
                    <label class="form-control-label" for="exampleFormControlTextarea2">jabatan</label>
                  <input type="text" name="id_ukuran" class="form-control" id="exampleFormControlInput1" placeholder="ukuran">
                  @error('id_ukuran')
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