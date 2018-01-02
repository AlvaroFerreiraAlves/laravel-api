@extends('store.layouts.main')
@section('content')
    <section class="products">
        <h1 class="title">Meu perfil</h1>

        <form class="form-horizontal">
            <fieldset>



                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-3 control-label" for="name">Nome:</label>
                    <div class="col-md-6">
                        <input id="name" name="name" type="text" placeholder="" class="form-control input-md" required="">

                    </div>
                </div>

                <!-- Password input-->
                <div class="form-group">
                    <label class="col-md-3 control-label" for="password">Senha:</label>
                    <div class="col-md-6">
                        <input id="password" name="password" type="password" placeholder="" class="form-control input-md" required="">

                    </div>
                </div>

                <!-- Button -->
                <div class="form-group">
                    <label class="col-md-3 control-label" for="enviar"></label>
                    <div class="col-md-6">
                        <button id="enviar" name="enviar" class="btn btn-primary btn-form">Enviar</button>
                    </div>
                </div>

            </fieldset>
        </form>



    </section>
@endsection