@extends('layouts.master')
@section('content')
<div class="container">

    <form action="{{ url('ukuran/'.$data->ukuran_id) }}" method="POST">
        @csrf
        @method('put')
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label class="form-control-label" for="exampleFormControlInput1">Ukuran</label>
                    <input type="number" value="{{$data->ukuran}}" name="ukuran" class="form-control" id="exampleFormControlInput1" placeholder="input ukuran">
                    @error('jumlah')
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