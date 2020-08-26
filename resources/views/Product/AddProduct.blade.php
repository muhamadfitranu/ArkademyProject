@extends('welcome')

@section('content')
    <h2>Tambah Produk</h2>
    <hr>
    <form action="/Product/Store" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="exampleFormControlInput1">Nama Produk</label>
            <input type="text" class="form-control" name="name_product" id="exampleFormControlInput1">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea">Keterangan</label>
            <textarea name="information" class="form-control" id="exampleFormControlTextarea" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput2">Harga</label>
            <input type="number" class="form-control" name="price" id="exampleFormControlInput2">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput3">Jumlah</label>
            <input type="number" class="form-control" name="total" id="exampleFormControlInput3">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection