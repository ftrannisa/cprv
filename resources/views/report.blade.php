@extends('layouts/app')


@section('content')
<div class="title m-l m-b-md">
            Report Page
    </div>
    <div  class="m-l"> 
    <table id="t01">
       
        <tr>
            <th>Time</th>
            <th>PIN</th> 
            <th>Product A</th>
            <th>Product B</th>
        </tr>
        @foreach ($data as $data)
        <tr>
            <td>{{$data->createdAt}}</td>
            <td>{{$data->pin}}</td>
            <td>{{$data->productA}}</td> 
            <td>{{$data->productB}}</td>
        @endforeach
        </tr>
    </table>
       
    
    </div>
@endsection
