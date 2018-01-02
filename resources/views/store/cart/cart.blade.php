@extends('store.layouts.main')
@section('content')

        <h1 class="title">Meu carrinho</h1>

    <table class="table table-striped">
        <tr>
            <th>Item</th>
            <th>Preço</th>
            <th>Quantidade</th>
            <th>Sub. total</th>
        </tr>
        @forelse($products as $product)
        <tr>
            <td>
                <img src="{{url("assets/imgs/temp/{$product['item']->image}")}}" alt="" class="img-cart">
                {{$product['item']->name}}
            </td>
            <td>R$ {{$product['item']->price}}</td>
            <td>
                {{$product['qtd']}}
                <a href="{{route('add.cart', $product['item']->id)}}" class="cart-action-item">+</a> -
                <a href="{{route('remove.cart', $product['item']->id)}}" class="cart-action-item">-</a>
            </td>
            <td>{{$product['item']->price * $product['qtd']}}</td>
        </tr>
        @empty
            <p>Não há itens no carrinho de compras</p>
            @endforelse
    </table>

    <div class="total-cart"><span>R$ {{$cart->total()}}</span></div>

    <div class="finish-cart">
        <a href="">Finalizar compra <i class="fa fa-shopping-cart" aria-hidden="true"></i> </a>
    </div>


@endsection