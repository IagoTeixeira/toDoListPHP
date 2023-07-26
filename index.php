<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Consumindo dados</title>
</head>
<body>
    <?php 
        
        include "./header.php";
        session_start();
        session_destroy();
    ?>
    <div class="telaDoMeio">
        <div class="boxText">
            <input type="text" id="toDoText">
            <button onclick="putText()">Enviar</button>
        </div>            
        <div id="boxList">
            <ol id="list">
                <p>LISTA VAZIA</p>
            </ol>
        </div>
    </div>

    <script src="./script/index.js"></script>
</body>
</html>