<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <div class="box">
       <form action="">
        <fieldset>
            <legend><b>Cadastro de Álbum <b></legend>
            <br>
            <div class="inputbox">
                <input type="text" name="" id="name" class="inputUser" required>
                <label for="Artista">Artista</label>
            </div>
            <br><br>
            <div class="inputbox">
                <input type="text" name="albname" id="albname" class="inputUser" required>
                <label for="album">Nome do Álbum</label>
            </div>
            <br><br>
            <div class="inputbox">
                <input type="text" name="descrip" id="descrip" class="inputUser" required>
                <label for="Descricão">Descrição</label>
            </div>
            <br><br>
         <p>Genero</p>
        <input type="radio" name="genero" value="pop">
        <label for="pop">POP</label>
        <input type="radio" name="genero" value="samba">
        <label for="samba">Samba</label>
        <input type="radio" name="genero" value="funk">
        <label for="funk">Funk</label>
        <input type="radio" name="genero" value="rb">
        <label for="rb">R&B</label>
        <input type="radio" name="genero" value="mpb">
        <label for="mpb">MPB</label>

        <div class="inputbox">
                <label for="Descricão"><b>Data de Lançamento</b></label>
                <input type="date" name="data_lanc" id="data_lanc" class="inputUser" required>
            </div>
            <br><br>
            <div class="inputbox">
                <input type="text" name="grav" id="grav" class="inputUser" required>
                <label for="grav">Gravadora</label>
            </div>
            <br><br>
            <div class="inputbox">
                <input type="text" name="premio" id="premio" class="inputUser" required>
                <label for="premi">Prêmios</label>
            </div>
            <br><br>
            <div class="inputbox">
                <input type="text" name="indica" id="indica" class="inputUser" required>
                <label for="indic">Indicações</label>
            </div>
            <br><br>

            <input type="submit" name="submit" id="submit" values="enviar">
        </fieldset>
       
       </form>
    </div>
    <script src="js/javascript.js"></script>
</body>
</html>