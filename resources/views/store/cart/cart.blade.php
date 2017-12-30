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
        @for($i=0;$i<8;$i++)
        <tr>
            <td>
                <img src="{{url('assets/imgs/temp/tv.jpg')}}" alt="" class="img-cart">
                Nome do produto
            </td>
            <td>R$ 200.00</td>
            <td>
                2
                <a href="" class="cart-action-item">+</a> -
                <a href="" class="cart-action-item">-</a>
            </td>
            <td>400,00</td>
        </tr>
            @endfor
    </table>

    <div class="total-cart"><span>R$ 200,00</span></div>

    <div class="finish-cart">
        <a href="">Finalizar compra <i class="fa fa-shopping-cart" aria-hidden="true"></i> </a>
    </div>


@endsection