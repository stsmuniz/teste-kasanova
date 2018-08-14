@extends('adminlte::page')

@section('title', 'Cadastrar Produto')

@section('content_header')
    <h1>Cadastrar Produto</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-xs-12">
            @if (Session::has('success'))
                <div class="alert alert-success">
                    Sucesso: {{ Session::get('success') }}
                </div>
            @endif
            @if($errors->any())
                <div class="alert alert-danger">
                    Erros: {{$errors->first()}}
                </div>
            @endif
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-primary">
                <form action="{{route('admin.products.store')}}" role="form" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="box-body">
                        <div class="form-group">
                            <label for="title">Nome do Produto</label>
                            <input type="text" name="title" id="title" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="title">Preço</label>
                            <input type="text" name="value" id="value" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="title">Categoria</label>
                            <select name="category_id" id="category_id" class="form-control">
                                <option> - </option>
                                @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="photos">
                            <input type="file" name="photos[]" id="photos" multiple>
                        </label>
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-success">Cadastrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
