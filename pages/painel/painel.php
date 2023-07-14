<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="painel.css">
  <title>Todo List</title>
</head>
<body>


<div class="sair">
  <h1 id="ola">To do list</h1>
<a href="../../funcionalidades/logout.php" id="sair" >Sair</a>
</div>

<div class="wrapper">
  <div class="container">
    <h1>A fazer...</h1>
    <form class="form" action="../../funcionalidades/script.js">
      <div class="inputBox">
        <input type="text" class="adicionar-texto" id="txt" placeholder="Nova atividade..." required>
        <button class="adicionar" id="adicionar"><img src="../../images/adicionar.svg"  class="btn-adicionar"alt="deletar" ></i></button>
      </div>
    </form>
    <ul id="data">

    </ul>
    <div class="footer">
      <p id="total_task"></p>
      <button id="clearFazer" class="clear">Apagar tudo</button>
    </div>
  </div>

  <div class="container">
    <h1>Fazendo...</h1>
    <form class="form" action="../../funcionalidades/script.js">
    </form>
    <ul id="data2">

    </ul>
    <div class="footer">
      <p id="total_task2"></p>
      <button id="clearFazendo" class="clear">Apagar tudo</button>
    </div>
  </div>

  <div class="container">
    <h1>Feito!</h1>
    <form class="form" action="../../funcionalidades/script.js">
    </form>
    <ul id="data3">

    </ul>
    <div class="footer">
      <p id="total_task3"></p>
      <button id="clearFeito" class="clear">Apagar tudo</button>
    </div>
  </div>

  </div>






      <!-- Janela modal -->
      <div id="modal" class="modal">
        <div class="modal-content">
            <!-- Conteúdo da janela modal -->
            <h1>Editar a sua atividade</h1>
            <input type="text" id="editInput" class="modal-input">
            <div class="btn-container">
            <button onclick="closeModal()" id="closeModal" class="modal-btn-fechar">Fechar</button>
            <button type="button" id="editText" class="modal-btn-editar">Editar</button>
            </div>
        </div>
    </div>


  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="../../funcionalidades/script.js"></script>




</body>
</html>
