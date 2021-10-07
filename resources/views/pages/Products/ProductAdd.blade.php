@extends('layouts.app')
@section('content')
     <div class="container" style="width:500px;">
        <form action="{{route('Products.ProductAdd')}}" method="POST">  
            
            {{csrf_field()}}
            <br />  
            <p>Name:</p>  
            <input type="text" name="p_name" class="form-control" >
            @error('p_name')
                <span class="text-danger">{{$message}}</span>
            @enderror
            <br><hr>
            <label>Code:</label>  
            <input type="text" name="p_code" class="form-control">
            @error('p_code')
                <span class="text-danger">{{$message}}</span>
            @enderror
            <br><hr>
            <label>Description:</label>  
            <input type="text" name="p_desc" class="form-control" >
            @error('p_desc')
                <span class="text-danger">{{$message}}</span>
            @enderror
            <br><hr>
            <label>Category:</label>  
            <select class="custom-select" id="inputGroupSelect01" name="p_category">
                <option selected>Choose...</option>
                <option value="Phone">Phone</option>
                <option value="Laptop">Laptop</option>
            </select>
            @error('p_category')
                <span class="text-danger">{{$message}}</span>
            @enderror
            <br><hr>  
            <label>Price:</label>
            <input type="text" name="p_price" class="form-control">
            @error('p_price')
                <span class="text-danger">{{$message}}</span>
            @enderror
            <br><hr>   
            <label>Quantity:</label>
            <input type="text" name="p_quantity" class="form-control">
            @error('p_quantity')
                <span class="text-danger">{{$message}}</span>
            @enderror
            <br><hr> 
            <label>Stock Date:</label>
            <input type="date" name="p_stock_date" class="form-control">
            @error('p_stock_date')
                <span class="text-danger">{{$message}}</span>
            @enderror
            <br><hr> 
            <label>Rating:</label> 
            <select class="custom-select" id="inputGroupSelect01" name="p_rating">
                <option selected>Choose...</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
                <option value="4">Four</option>
                <option value="5">Five</option>
            </select>
            @error('p_rating')
                <span class="text-danger">{{$message}}</span>
            @enderror
            <br><hr> 
            <label>Purchased:</label>
            <input type="date" name="p_purchased" class="form-control">
            @error('p_purchased')
                <span class="text-danger">{{$message}}</span>
            @enderror
            <br><hr> 
            <input type="submit" name="submit" value="Add" class="btn btn-info" /><br />  
            <br>
            </div>                    
            
        </form> 
    </div>     
@endsection