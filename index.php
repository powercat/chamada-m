<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="css/chamada.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <script src="js/marcar-presenca.js" defer></script>
</head>
<body>
    <h1>Chamada PPI 2022</h1>
    <main class="container">
        <button data-toggle="modal" data-target="#chamada"
            class="btn-padrao">
            Marcar Presença
        </button>
        <h2>Registros</h2>
        <table>
            <thead>
                <tr>
                    <th>Nomes</th>
                    <th>04/jul</th>
                    <th>09/jul</th>
                    <th>11/jul</th>
                    <th>18/jul</th>
                    <th>25/jul</th>
                    <th>01/ago</th>
                </tr>
            </thead>
            <tbody id="dados">
                <tr>
                    <td>
                        Marcelo Figueiredo Barbosa Júnior
                    </td>
                    <td>X</td>
                    <td>X</td>
                    <td>X</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>
                        Marcelo Figueiredo Barbosa Júnior
                    </td>
                    <td>X</td>
                    <td>X</td>
                    <td>X</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </main>
    <div class="modal" tabindex="-1" id="chamada">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-center">
                        Marcar Presença
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="txt_nome">Nome</label>
                            <input type="text" name="txt_nome"
                                id="txt_nome" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="txt_senha">Senha</label>
                            <input type="password" name="txt_senha"
                                id="txt_senha" class="form-control">
                        </div>
                        <div class="text-center">
                            <button type="button" class="btn-padrao"
                                onclick="marcar()">
                                Marcar Presença
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>
