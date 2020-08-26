@extends('welcome')

@section('content')
    <a href="/Product/Add" class="btn btn-primary">+ Tambah</a>
    <table class="table table-dark" style="margin-top:10px;"> 
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Produk</th>
                <th scope="col">Keterangan</th>
                <th scope="col">Harga</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 0 ?>
            @foreach($product as $row)
            <?php $no++; ?>
            <tr>
                <th scope="row">{{ $no }}</th>
                <td>{{ $row->name_product }}</td>
                <td>{{ $row->information }}</td>
                <td>Rp. {{ number_format($row->price) }}</td>
                <td>{{ $row->total }}</td>
                <td>
                    <a href="/Product/Edit/{{ $row->id_product }}" class="btn btn-warning btn-sm">Edit</a>
                    <a href="/Product/Delete/{{ $row->id_product }}" class="btn btn-danger btn-sm">Hapus</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection