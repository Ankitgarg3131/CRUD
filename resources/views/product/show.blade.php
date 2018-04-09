@extends('layouts.app')
@section('xyz')
<div class="container">
<form method="put" action="">
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
                    <td> <a id="{{ $products }}" class="edit" href="" data-toggle="modal" data-target="#myModal">Edit</a></td>
                    </tr>
                    @endforeach
                </table>
            </form>
              @include('modal1')
            
        </div>
@endsection