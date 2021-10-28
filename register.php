<?php
include_once("templates/header.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Novo Filme</title>
</head>

<body>
    <div class="row">
        <form action="newmovie.php" method="POST">
            <div class="col s5 offset-s3">
                <div class="card">
                    <div class="card-content white-text">
                        <span class="card-title">Cadastro de filmes</span>
                        <div class="row">
                            <!-- INPUT DO TÍTULO DO FILME -->
                            <div class="input-field col s12">
                                <input id="titulo" type="text" class="validate" name="titulo" require>
                                <label for="titulo">Título do Filme</label>
                            </div>
                        </div>
                        
                        <!-- INPUT DO ANO DO FILME -->
                        <div class="row">
                            <div class="input-field col s4">
                                <label for="date">Ano do Filme</label>
                                <input id="ano" type="number" min="1900" class="validate" name="ano" require></input>
                            </div>
                        </div>
                        <!-- INPUT DA SINOPSE -->
                            <div class="row">
                                <div class="input-field col s12">
                                    <label for="nota">Sinopse</label>
                                    <textarea id="sinopse" class="materialize-textarea" name="sinopse"></textarea>
                                </div>
                            </div>
                        <!-- INPUT DA NOTA -->
                        <div class="row">
                            <div class="input-field col s4">
                                <input id="nota" type="number" step=".1" min=".0" max="10" class="validate" name="nota" require>
                                <label for="nota">Nota</label>
                            </div>
                        </div>
                        <!-- INPUT DA CAPA -->
                        <div class="row">
                            <div class="file-field input-field ">
                                <div class="btn teal darken-3 ">
                                    <span>Capa</span>
                                    <input type="file">
                                </div>
                                <div class="file-path-wrapper">
                                    <input type="text" class="file-path" name="poster">
                                </div>
                            </div>
                        </div>
                        <div class="card-action">
                            <a class="waves-effect waves-light btn grey lighten-1" href="<?php $BASE_URL ?>./">Cancelar</a>
                            <button type="submit" class="waves-effect waves-light btn teal darken-3 right">Cadastrar</button>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </form>
</body>

</html>

<?php
include("templates/footer.php");
?>