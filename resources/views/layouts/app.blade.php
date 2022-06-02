<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <title>Sneaker</title>
</head>

<body>
    <header>
        <nav class="nav navbar-light bg-light navbar-expand-sm">
            <div class="container-fluid">
                <ul class="navbar-nav me-auto mb-2 mt-1">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('product.index') }}">
                            Tênis
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('brand.index') }}">
                            Marcas
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('tag.index') }}">
                            Tags
                        </a>
                    </li> 
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('cart.index') }}">
                            Carrinho
                        </a>
                    </li> 
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">
                          Client Page
                        </a>
                    </li> 
                    <li class="ms-auto">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="btn btn-danger mt-1">Sair</button>
                        </form>
                    </li>                                                                     
                </ul>
            </div>
        </nav>
    </header>
    <main class="container">
        @if (session()->has('success'))
            <div class="alert alert-success">{{ session()->get('success') }}</div>
        @endif
        @if (session()->has('error'))
            <div class="alert alert-danger">{{ session()->get('error') }}</div>
        @endif
        <section>
            @yield('content')
        </section>
    </main>
</body>

</html>
