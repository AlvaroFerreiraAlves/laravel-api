@extends('store.layouts.main')

@section('content')

    <h1  class="title">Meus Pedidos</h1>

    <table class="table table-striped">

        <tr>
            <th>Nome</th>
            <th>Referencia</th>
            <th>status</th>
            <th>Forma de pagamento</th>
            <th>Data</th>

        </tr>


        @forelse($orders as $order)
            <tr>
                <td>{{$order->id}}</td>
                <td>

                    <a href="{{url('pedidos/'.$order->reference)}}">{{$order->reference}}</a>

                </td>
                <td>{{$order->getStatus($order->status)}}</td>
                <td>{{$order->getMethodPayment($order->payment_method)}}</td>
                <td>{{$order->date}}</td>

            </tr>

            @empty
            Não há pedidos
        @endforelse



    </table>

@endsection