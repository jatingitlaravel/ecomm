@extends('master')
@section('content')



<div class="container">
    <div calss="row">
    <div class="col-sm-6">
        <img class="detail-img" src="{{$product['gallery']}}" alt="">
    </div>
    <div class="col-sm-6">
        <a href="/">go back</a>
        <h2>Name : {{$product['name']}} </h2>
        <h3>Price : {{$product['price']}} </h3>
        <h4>Categories : {{$product['categories']}} </h4>
        <h4>Descriprtion : {{$product['Descriprtion']}} </h4>
        <br><br>
        <button class="btn  btn-primary">Add to Cart</button>
        <br></br>
        <button class="btn  btn-primary">Buy Now</button>
        </div>
    </div>
</div>
@endsection