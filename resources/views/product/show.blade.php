<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalhes do Produto - Teste KazaPronta</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
        body {
            padding: 0;
            margin: 0;
            border: 0;
        }
        section.jumbotron {
            background: #fff url({{url('/css/images/header_cazapronta.jpg')}}) no-repeat center center ;
            color: #fff;
        }
    </style>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed top">
        <div class="container">
            <a href="{{url('/')}}" class="navbar-brand">KazaPronta</a>
        </div>
    </nav>
</header>
<main role="main">
    <section class="jumbotron text-center">
        <div class="container">
            <h1 class="jumbotron-heading">TESTE KAZAPRONTA</h1>
        </div>
    </section>
    <div class="vitrine">
        <div class="container">
            <h3 class="pb-3 mb-4 border-bottom">{{$product->title}}</h3>
            <div class="row">
                <div class="col-xs-12 col-md-6">
                    @if($product->photos()->first())
                        <div id="productCarousel" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                @for($i = 0; $i < count($product->photos); $i++)
                                    <li data-target="#productCarousel" data-slide-to="{{$i}}" @if($i == 0) class="active" @endif></li>
                                @endfor
                            </ol>
                            <div class="carousel-inner">
                                @foreach($product->photos as $photo)
                                    <div class="carousel-item @if($loop->first) active @endif">
                                        <img class="d-block w-100" src="{{$photo->url}}">
                                    </div>
                                @endforeach
                            </div>
                            <a class="carousel-control-prev" href="#productCarousel" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#productCarousel" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    @else
                        <img src="http://via.placeholder.com/350x150" alt="{{$product->name}}">
                    @endif
                </div>
                <div class="col-xs-12 col-md-6">
                    <p><span class="text-bold">Categoria: </span>{{$product->category->name}}</p>
                    <p>R$ {{number_format($product->value, 2, ',', '.')}}</p>
               </div>
            </div>
        </div>
    </div>
</main>
<footer class="text-muted">
    <div class="container">
        <p>Esta página, seu conteúdo e seu código foram desenvolvidos para o teste proposto pela kazapronta</p>
    </div>
</footer>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js" integrity="sha384-pjaaA8dDz/5BgdFUPX6M/9SUZv4d12SUPF0axWc+VRZkx5xU3daN+lYb49+Ax+Tl" crossorigin="anonymous"></script>
</body>
</html>
