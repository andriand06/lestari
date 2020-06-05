@extends('layouts.partials.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">

            <form action="{{route('item.store')}}" method="post">
            <div class="form-group">
                <label for="namabarang">Nama Barang</label>
                <input type="text" class="form-control" name="namabarang"id="namabarang" >
            </div>
            <div class="form-group">
                <label for="jumlah">Jumlah</label>
                <input type="text" class="form-control" name="jumlah" id="jumlah">
            </div>
            <div class="form-group">
            <label for="satuan">Satuan</label>
            <select class="custom-select" id="satuan">
                
                <option value="Dus">Dus</option>
                <option value="Box">Box</option>
                <option value="Pcs">Pcs</option>
             </select>
            </div>
            <div class="form-group">
            <label for="harga">Harga</label>
            <input type="text" class="form-control" name="harga" id="harga">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

@endsection