{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Produtos</h1>
    <a href="{{route('admin.products.create')}}" class="btn btn-success">
        <i class="fa fa-plus"></i> Novo Produto
    </a>
@stop

@section('content')
    @if(isset($products))
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">
                            Produtos
                        </h3>
                    </div>
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>Preço</th>
                                    <th>Categoria</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $product)
                                <tr>
                                    <td>{{$product->title}}</td>
                                    <td>R$ {{number_format($product->value, 2, ',', '.')}}</td>
                                    <td>{{$product->category->name}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    @else
        <h4>Ainda não há produtos cadastrados</h4>
    @endif
@stop
