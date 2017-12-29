@extends('store.layouts.main')
@section('content')
    <section class="products">
        <h1 class="title">Lançamentos</h1>

        @for($i=0;$i<8;$i++)
        <article class="product col-md-3 col-sm-6 col-xs-12">
            <img src="{{url('assets/imgs/temp/tv.jpg')}}" alt="">
            <h2>Produto 1</h2>
            <a href="#">Adicionar no carrinho <i class="fa fa-cart-plus" aria-hidden="true"></i></a>
        </article>
            @endfor

    </section>
@endsection