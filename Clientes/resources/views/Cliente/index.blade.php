<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <section class="container" id="topo">
        <div class="row">

            <div class="col 12"></div>


        </div>


    </section>

    <section class="container" id="menu">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Lista De Clientes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Adicionar Cliente</a>

        </ul>
    </section>


    <section class="container" id="conteudo">
        <div class="row">

            <div class="col 12"></div>

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Email</th>
                        <th scope="col">Telefone</th>
                        <th scope="col">Data_Cadastro</th>
                        <th scope="col">Cidade</th>
                    </tr>
                </thead>
                <tbody>

                @foreach ($clientes as $cliente)
                
                    <tr>
                        <td>{{$cliente->id}}</td>
                        <td>{{$cliente->Nome}}</td>
                        <td>{{$cliente->Email}}</td>
                        <td>{{$cliente->Telefone}}</td>
                        <td>{{$cliente->Data_Cadastro}}</td>
                        <td>{{$cliente->Cidade}}</td>
                        
                        <td>
                        <a href="{{route('Cliente.edit',$cliente->id)}}" class="btn btn-info">Editar</a>
                        <a href="{{route('Cliente.destroy',$cliente->id)}}" class="btn btn-danger">Deletar</a>
                        </td>
                    </tr>
                    
                
                    @endforeach
                </tbody>

            </table>
        </div>


    </section>

    <section class="container" id="rodape">

        <h5>rodape</h5>


    </section>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>