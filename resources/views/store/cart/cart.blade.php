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

        <tr>
            <td>
                <img src="{{url('assets/imgs/temp/tv.jpg')}}" alt="">
                Nome do produto
            </td>
            <td>R$ 200.00</td>
            <td>2</td>
            <td>400,00</td>
        </tr>
    </table>



@endsection