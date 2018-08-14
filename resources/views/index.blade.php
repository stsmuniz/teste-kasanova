<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Teste KazaPronta</title>
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
        .product .product-image {
            height: 40vh;
            background: #fff url('http://via.placeholder.com/350x150') no-repeat center/cover;
        }
    </style>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed top">
            <div class="container">
                <a href="#" class="navbar-brand">KazaPronta</a>
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
                <h3 class="pb-3 mb-4 border-bottom">Vitrine</h3>
                <div class="row">
                    @for($i = 0; $i < 6; $i++)
                        <?php $product = $products[$i]; ?>
                        <div class="col-md-4">
                            <div class="card mb-4 shadow-sm product">
                                <a href="{{url('/produto/'.$product->id)}}">
                                    <div class="product-image"
                                         style="background-image: url({{
                                         $product->photos()->first() ?
                                         $product->photos()->first()->url :
                                         'http://via.placeholder.com/350x150'}})"></div>
                                </a>
                                <div class="card-body">
                                    <h5 class="card-title">{{$product->title}}</h5>
                                    <p class="card-text">Categoria: {{$product->category->name}}</p>
                                    <p class="card-text">R$ {{number_format($product->value, 2, ',', '.')}}</p>
                                    <a href="{{url('/produto/'.$product->id)}}" class="btn btn-primary">Ver Detalhes</a>
                                </div>
                            </div>
                        </div>
                    @endfor
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
