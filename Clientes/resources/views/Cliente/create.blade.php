<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <div class="container">


        <div class="row">
            <div class="12">

                <section class="container" id="menu">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page"
                                href="{{ route('Cliente.index') }}">Inicio</a>
                        </li>
                    </ul>

                    <form action="{{ route('Cliente.store') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="Nome" class="form-label">Nome</label>
                            <input type="text" name="Nome" class="form-control" id="Nome" aria-describedby="emailHelp">

                        </div>

                        <div class="mb-3">
                            <label for="Email" class="form-label">Email</label>
                            <input type="email" name="Email" class="form-control" id="Email"
                                aria-describedby="emailHelp">

                        </div>


                        <div class="mb-3">
                            <label for="Data_Cadastro" class="form-label">Data</label>
                            <input type="date" name="Data_Cadastro" class="form-control" id="Data_Cadastro" aria-describedby="emailHelp">

                        </div>

                        <div class="mb-3">
                            <label for="Telefone" class="form-label">Telefone</label>
                            <input type="number" name="Telefone" class="form-control" id="Telefone"
                                aria-describedby="emailHelp">

                        </div>

                        <div class="mb-3">
                            <label for="Cidade" class="form-label">Cidade</label>
                            <input type="text" name="Cidade" class="form-control" id="Cidade"
                                aria-describedby="emailHelp">

                        </div>





                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

            </div>



        </div>


    </div>


















    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>