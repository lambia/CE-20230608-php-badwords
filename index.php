<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad Words</title>
    <style>
        body { background: #222; color: white; font-family: sans-serif; padding: 1rem; }
        * { padding: 0; margin: 0; box-sizing: border-box; }
        label { display: block; }
        #bottoniera { margin-top: 1rem;}
    </style>
</head>
<body>

    <h1>Pannello di controllo per censuratori della santa inquisizione</h1>

    <form action="censura.php" method="GET">
        <label for="paragrafo">Inserisci il paragrafo di testo da verificare</label>
        <textarea name="paragrafo" id="paragrafo" cols="30" rows="10"></textarea>

        <label for="parolaccia">Inserisci la parola da censurare</label>
        <input type="text" name="parolaccia" id="parolaccia">

        <div id="bottoniera">
            <button type="submit">Invia</button>
            <button type="reset">Pulisci</button>
        </div>
    </form>
    
</body>
</html>