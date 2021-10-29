<?php include("templates/header.php");
include_once("helpers/connection.php");
include_once("helpers/process.php"); ?>

<body>
    <div class="row">
        <?php while ($filme = $res_select1->fetch(PDO::FETCH_ASSOC)) : ?>
            <div class="col s2">
                <div class="card hoverable">
                    <div id="cardimg" class="card-image">
                        <img src="<?= $filme['poster'] ?>">
                        <a class="btn-floating btn-large halfway-fab waves-effect waves-light red">
                            <i class="material-icons">favorite_border</i></a>
                    </div>
                    <div class="card-content">
                        <p class="valign-wrapper">
                            <i class="material-icons amber-text">star</i><?= $filme['nota'] ?>
                        </p>
                        <span class="card-title"><?= $filme['titulo'] ?></span>
                        <span class="card-date"><?= $filme['ano'] ?></span>
                    </div>
                </div>
            </div>
        <?php endwhile ?>
    </div>
</body>
<script>
    M.toast({
        html: '<?= $_GET["msg"] ?>' 
    });
</script>


</html>
<?php
include("templates/footer.php");
?>