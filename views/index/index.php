<?php
topo(array(
    "icone" => "fa fa-home",
    "pageName" => " Home",
    "css" => array(
        "../../css/index/index.css",
    )
));
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="jumbotron">
                <h1> <?php echo $olaMundo . ' - ' . $nome; ?></h1>
            </div>
        </div>
    </div>
</div>
<?php
rodape(array(
    "js" => array(
        "../../js/index/index.js",
    )
));
?>