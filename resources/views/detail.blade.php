@extends('master') 
@section("content")
<div class="container">
  <div class="row">
    <div class="col-sm-6">
    <img class="detail-img"src="{{$product['gallery']}}" alt="">
  </div>
        <div class="col-sm-6">
            <a href="/">Kembali</a>
            <h2>{{$product['name']}}</h2>
            <h3> Harga : {{$product['price']}}</h3>
            <h4> Keterangan : {{$product['description']}}</h4>
            <h3> Kategori : {{$product['category']}}</h3>
            <br></br>
            <form action="/add_to_cart" method="POST">
              @csrf
                <input type="hidden" name="product_id" value={{{$product['id']}}}>
            <button class="btn btn-primary">Tambah ke Keranjang</button>
            <br></br>
            <button class="btn btn-success"> Beli Sekarang</button>
  </div>
  </div>
</div>
@endsection