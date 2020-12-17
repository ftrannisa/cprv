@extends('layouts/app')


@section('content')
    <div class="title m-l m-b-md">
            Product Page
    </div>
    
    <div  class="flex-center"> 
    <form action="{{ route('postProduct') }}" method="post">
    {{ csrf_field() }}
        <div class="row">
            <div class="col col-sm-6">
            
                <img src="https://static9.depositphotos.com/1594920/1088/i/600/depositphotos_10885434-stock-photo-kitten-european-cat-3-months.jpg" alt="grey kitten" width="180" height="200">
                
                <h5>A</h5>
               
            <label for="product1">Choose how many: </label>
            <select id="product1" name="product1">
                <option value=0>0</option>
                <option value=1>1</option>
                <option value=2>2</option>
                <option value=3>3</option>
                <option value=4>4</option>
                <option value=5>5</option>
            </select>
    
            </div>
            <div class="col-sm-6">
                <img src="https://www.lomsnesvet.ca/wp-content/uploads/sites/21/2019/08/Kitten-Blog-683x1024.jpg" alt="brown kitten" width="150" height="200">
                <h5>B</h5>
                <label for="product2">Choose how many: </label>
            <select id="product2" name="product2">
            <option value=0>0</option>
                <option value=1>1</option>
                <option value=2>2</option>
                <option value=3>3</option>
                <option value=4>4</option>
                <option value=5>5</option>
            </select>
               
            </div>
        </div>  
    </div>
    <div class="flex-center m-t">
    <div class="submitProduct">
        <input type="submit" class="btn btn-primary btn-block">
    </div>
    </div>
    
    </form>

@endsection
