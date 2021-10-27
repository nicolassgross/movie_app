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
        <div class="col s5 offset-s3">
            <div class="card">
                <div class="card-content white-text">
                    <span class="card-title">Cadastro de filmes</span>
                    <div class="row">
                        <!-- INPUT DO TÍTULO DO FILME -->
                        <div class="input-field col s12">
                            <input id="titulo" type="text" class="validate">
                            <label for="titulo">Título do Filme</label>
                        </div>
                    </div>
                    <!-- INPUT DA SINOPSE -->
                    <div class="row">
                        <form class="col s12">
                            <div class="row">
                                <div class="input-field col s12">
                                    <textarea id="sinopse" class="materialize-textarea"></textarea>
                                    <label for="sinopse">Sinopse</label>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- INPUT DA NOTA -->
                    <div class="row">
                        <div class="input-field col s4">
                            <input id="nota" type="number" step=".1" min=".0" max="10" class="validate" require>
                            <label for="nota">Nota</label>
                        </div>
                    </div>
                    <!-- INPUT DA CAPA -->
                    <div class="row">
                    <div class="file-field input-field ">
                        <div class="btn teal darken-3">
                            <span>Capa</span>
                            <input type="file">
                        </div>
                    </div>
                </div>
                    <div class="card-action">
                        <a class="waves-effect waves-light btn grey lighten-1" href="<?php $BASE_URL ?>./">Cancelar</a>
                        <a href="#" class="waves-effect waves-light btn teal darken-3 right">Cadastrar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>    
</body>

</html>

<?php
    include("templates/footer.php");
?>