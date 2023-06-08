<?php 
    $paragrafoDefault = "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ducimus hic vel eum architecto officia placeat. Aut veniam consectetur repellendus expedita. Illo aliquid consectetur cum reiciendis, consequuntur quam architecto impedit alias!";

    // if( isset($_GET["paragrafo"]) ) {
    //     $paragrafo = $_GET["paragrafo"];
    // } else {
    //     $paragrafo = $paragrafoDefault;
    // }

    // $variabile = (condizione) ? valoreSeVero : valoreSeFalso;
    // $paragrafo = (isset($_GET["paragrafo"])) ? $_GET["paragrafo"] : $paragrafoDefault;

    // $variabile = valoreSeEsistente ?? valoreDiDefault;
    $paragrafo = $_GET["paragrafo"] ?? $null;

    $parolaDaCensurare = $_GET["parolaccia"];
    $placeholderCensura = "***";
    $paragrafoCensurato = str_ireplace($parolaDaCensurare, $placeholderCensura, $paragrafo);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualizzatore di documenti censurati</title>
    <style>
        body { background: #222; color: white; font-family: sans-serif; padding: 1rem; }
        * { padding: 0; margin: 0; box-sizing: border-box; }
        label { display: block; }
        h1, h2 { margin-top: 1rem; margin-bottom: 0.5rem; }
    </style>
</head>
<body>
    <h1>Visualizattore di documenti censurati</h1>

    <h2>Documento originale (<?php echo strlen($paragrafo); ?> caratteri)</h2>
    <p><?php echo $paragrafo; ?></p>

    <h2>Documento censurato (<?php echo strlen($paragrafoCensurato); ?> caratteri)</h2>
    <h3>Parola censurata: <?php echo $parolaDaCensurare; ?></h3>
    <p><?php echo $paragrafoCensurato; ?></p>

    <h2>$_GET DEBUG:</h2>
    <?php 
        var_dump($_GET)
    ?>
</body>
</html>