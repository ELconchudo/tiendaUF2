@extends('layouts.app')

@section('template_title')
    {{ $carrito->name ?? "{{ __('Show') Carrito" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Carrito</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('carritos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Producto:</strong>
                            {{ $carrito->producto }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidad:</strong>
                            {{ $carrito->cantidad }}
                        </div>
                        <div class="form-group">
                            <strong>Precio Producto:</strong>
                            {{ $carrito->precio_producto }}
                        </div>
                        <div class="form-group">
                            <strong>Total:</strong>
                            {{ $carrito->total }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
