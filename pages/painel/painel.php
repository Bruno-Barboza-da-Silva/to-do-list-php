<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
  <link rel="stylesheet" href="painel.css">
  <title>Todo List</title>
</head>
<body>


<div class="sair">
  <h1 id="ola">olá [nome]</h1>
<a href="../../funcionalidades/logout.php" id="sair" >Sair</a>
</div>

<div class="wrapper">
  <div class="container">
    <h1>A fazer...</h1>
    <form class="form" action="../../funcionalidades/script.js">
      <div class="inputBox">
        <input type="text" id="txt" placeholder="Enter your Task" required>
        <button id="adicionar"><i class="fa fa-plus"></i></button>
      </div>
    </form>
    <ul id="data">

    </ul>
    <div class="footer">
      <p id="total_task"></p>
      <button id="clearFazer">Clear</button>
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
      <button id="clearFazendo">Clear</button>
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
      <button id="clearFeito">Clear</button>
    </div>
  </div>

  </div>






      <!-- Janela modal -->
      <div id="modal" class="modal">
        <div class="modal-content">
            <!-- Conteúdo da janela modal -->
            <h1>Editar a sua atividade</h1>
            <input type="text" id="editInput">
            <button onclick="closeModal()" id="closeModal">Fechar</button>
            <button type="button" id="editText">Editar</button>
        </div>
    </div>


  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="../../funcionalidades/script.js"></script>




</body>
</html>
