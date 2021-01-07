@extends('layouts.master')
@section('content')
<div class="container">

    <form action="{{ url('jenis/add') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label class="form-control-label" for="exampleFormControlInput1">Jenis</label>
                    <input type="text" name="nama" class="form-control" id="exampleFormControlInput1" placeholder="input jenis senar">
                    @error('nama')
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