@extends('store.layouts.main')

@section('content')

    <h1  class="title">{{$title}}</h1>

    <table class="table table-striped">

        <tr>
            <th>Nome</th>
            <th>quantidade</th>
            <th>preço</th>



        </tr>


        @forelse($products as $product)
            <tr>

                <td>{{$product->name}}</td>
                <td>{{$product->pivot->qtd}}</td>
                <td>{{$product->pivot->price}}</td>



            </tr>

        @empty
            Não há pedidos
        @endforelse



    </table>

@endsection