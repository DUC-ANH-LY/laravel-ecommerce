@extends('master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <img src="{{$product['gallery']}}"  style="height: 200px"alt="">

        </div>
        <div class="col-sm-6">
            <h2>{{$product['name']}}</h2>
            <br>
            <h3>Price: {{$product['price']}}</h3>
            <br>
            <h4>Category: {{$product['category']}}</h4>
            <br>
            <h4>Details: {{$product['description']}}</h4>
            <br>
            <form action="/add_to_cart" method="POST">
                @csrf
                <input type="hidden" name="product_id" value={{$product['id']}}>
                <button class="btn btn-primary">Add to Cart</button>
            </form>
            <br>
            <br>
            <button type="button" class="btn btn-success">Buy Now</button>
            <br>
            <br>
            <a href="" >Go Back</a>
            
        </div>
    </div>
</div>
@endsection