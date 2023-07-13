<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
  <link rel="stylesheet" href="style.css">
  <title>Todo List | Brave Coder</title>
</head>
<body>

<div class="wrapper">
    <form class="form" action="../../funcionalidades/script.js">
      <div class="inputBox">
        <input type="text" id="txt" placeholder="Enter your Task" required>
        <button id="btn"><i class="fa fa-plus"></i></button>
      </div>
    </form>
    <ul id="data">

    </ul>
    <div class="footer">
      <p id="total_task"></p>
      <button id="clear">Clear</button>
    </div>
  </div>

      <!-- Botao de sair -->
      <p>
        <a href="logout.php" id="sair">Sair</a>
    </p>





      <!-- Janela modal -->
      <div id="modal" class="modal">
        <div class="modal-content">
            <!-- Conteúdo da janela modal -->
            <h1>Editar a sua atividade</h1>
            <p>Este é um exemplo de janela modal em PHP.</p>
            <input type="text" id="editInput">
            <button onclick="closeModal()" id="closeModal">Fechar</button>
            <button type="button" id="editText">Editar</button>
        </div>
    </div>


  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="../../funcionalidades/script.js"></script>




</body>
</html>
