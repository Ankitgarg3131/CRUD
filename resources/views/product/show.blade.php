@extends('layouts.app')
@section('xyz')
<div class="container">
    {{-- <button type="submit" value="update"> UPDATE</button> --}}
    <table>
        <tr>
            <th>Name:</th>
            <th><strong>Email:</strong> </th>
        </tr>
        @foreach($product as $products)
        <tr>
        <td id="name"><span class="n1" >{{ $products->id }}</span></td>   
        <td id="name"><span class="n1" >{{ $products->name }}</span></td>
        <td id="email"><span class="n2" >{{ $products->email }}</span></td>
        <td> <a id="{{ $products }}" class="edit btn btn-success" href="" data-toggle="modal" data-target="#myModal">Update</a></td>
        <td>
            <form method="post" action="/product/{{ $products->id }}">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="Delete">
                <button class="btn btn-danger delete" data-id="{{ $products->id }}" type="submit">Delete</button> 
            </form>
        </td>

        
        </tr>
        @endforeach
    </table>            
    @include('modal1')
            
</div>
@endsection