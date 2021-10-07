@extends('layouts.app')
@section('content')
<br>
    <p>Name: {{$products->p_name}}</p>
    <hr>
    <p>Code: {{$products->p_code}}</p>
    <hr>
    <p>Description: {{$products->p_desc}}</p>
    <hr>
    <p>Category: {{$products->p_category}}</p>
    <hr>
    <p>Price: {{$products->p_price}}</p>
    <hr>
    <p>Quantity: {{$products->p_quantity}}</p>
    <hr>
    <p>Stock Date: {{$products->p_stock_date}}</p>
    <hr>
    
    <p>Rating: {{$products->p_rating}}</p>
    <hr>
    <p>Purchased: {{$products->p_purchased}}</p>
    <hr>

@endsection