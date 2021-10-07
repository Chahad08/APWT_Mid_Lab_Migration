@extends('layouts.app')
@section('content')
    <div class="container" style="width:500px;">
                
        <form action="{{route('Products.ProductEdit')}}" method="POST">  
            
            {{csrf_field()}}
            <input type="hidden" name="id" value="{{$products->id}}">
            <!-- <br /> 
            <label>ID:</label>  
            <input type="text" name="p_id" class="form-control" value="{{$products->id}}" > -->
             
            <br><hr>
            <p>Name:</p>  
            <input type="text" name="p_name" class="form-control" value="{{$products->p_name}}">
            @error('p_name')
                <span class="text-danger">{{$message}}</span>
            @enderror
            <br><hr>
            <label>Code:</label>  
            <input type="text" name="p_code" class="form-control" value="{{$products->p_code}}">
            @error('p_code')
                <span class="text-danger">{{$message}}</span>
            @enderror
            <br><hr>
            <label>Description:</label>  
            <input type="text" name="p_desc" class="form-control" value="{{$products->p_desc}}">
            @error('p_desc')
                <span class="text-danger">{{$message}}</span>
            @enderror
            <br><hr>
            <label>Category:</label>  
            <select class="custom-select" id="inputGroupSelect01" name="p_category">
                <option selected>{{$products->p_category}}</option>
                <option value="Phone">Phone</option>
                <option value="Laptop">Laptop</option>
            </select>
            @error('p_category')
                <span class="text-danger">{{$message}}</span>
            @enderror
            <br><hr>  
            <label>Price:</label>
            <input type="text" name="p_price" class="form-control" value="{{$products->p_price}}">
            @error('p_price')
                <span class="text-danger">{{$message}}</span>
            @enderror
            <br><hr>   
            <label>Quantity:</label>
            <input type="text" name="p_quantity" class="form-control" value="{{$products->p_quantity}}">
            @error('p_quantity')
                <span class="text-danger">{{$message}}</span>
            @enderror
            <br><hr> 
            <label>Stock Date:</label>
            <input type="date" name="p_stock_date" class="form-control" value="{{$products->p_stock_date}}">
            @error('p_stock_date')
                <span class="text-danger">{{$message}}</span>
            @enderror
            <br><hr>  
            <label>Rating:</label>
            <input type="text" name="p_rating" class="form-control" value="{{$products->p_rating}}">
            @error('p_rating')
                <span class="text-danger">{{$message}}</span>
            @enderror
            <br><hr> 
            <label>Purchased:</label>
            <input type="text" name="p_purchased" class="form-control" value="{{$products->p_purchased}}">
            @error('p_purchased')
                <span class="text-danger">{{$message}}</span>
            @enderror
            <br><hr> 
            <input type="submit" name="submit" value="Update" class="btn btn-info" /><br />  
            <br>
            </div>                    
            
        </form> 
    </div>    
@endsection