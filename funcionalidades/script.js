console.log("pegou aqui")

let UsuarioId = 0;

function sessao() {
  $.ajax({
    url: '../../funcionalidades/sessao.php',
    type: 'post',
    async: true,
    xhrFields: {
      withCredentials: true
    },
    success: function(result) {
      if (result !== "false") {
        alert("Login efetuado com sucesso!");
        UsuarioId = result;
        console.log(UsuarioId);
        showData(); // Chama a função showData() aqui
        showFazendo(); // Chama a função showFazendo() aqui
        showFeito(); // Chama a função showFeito() aqui
        totalFazer(); // Chama a função totalFazer() aqui
        totalFazendo(); // Chama a função totalFazendo() aqui
        totalFeito(); // Chama a função totalFeito() aqui
      } else {
        console.log("Sem sessão");
        alert("Não foi possível localizar a sessão");
      }
    },
    error: function() {
      console.log("Erro ao processar a requisição");
    }
  });
}

sessao();

   function showData() {
    $.ajax({
      url: '../../funcionalidades/show.php',
      type: 'GET',
      data: {UsuarioId},
      async: true,
      success: function(result) {
        if (result) {
          $("#data").html(result);
        } else {
          console.log(result);
          alert("Erro ao carregar as tarefas a fazer");
        }
      }
    });
  }

  function showFazendo() {
    $.ajax({
      url: '../../funcionalidades/showFazendo.php',
      type: 'GET',
      data: {UsuarioId},
      async: true,
      success: function(result) {
        if (result) {
          $("#data2").html(result);
        } else {
          console.log(result);
          alert("Erro ao carregar as tarefas fazendo");
        }
      }
    });
  }

  function showFeito() {
    $.ajax({
      url: '../../funcionalidades/showFeito.php',
      type: 'GET',
      data: {UsuarioId},
      async: true,
      success: function(result) {
        if (result) {
          $("#data3").html(result);
        } else {
          console.log(result);
          alert("Erro ao carregar as tarefas feito");
        }
      }
    });
  }


  function totalFazer() {
    $.ajax ({
      url: '../../funcionalidades/totalFazer.php',
      type: 'GET',
      data: {UsuarioId},
      async: true,
      success: function(result){
        $("#total_task").html(result);
        console.log(result)
      }
    });
  }

  function totalFazendo() {
    $.ajax ({
      url: '../../funcionalidades/totalFazendo.php',
      type: 'GET',
      data: {UsuarioId},
      async: true,
      success: function(result){
        $("#total_task2").html(result);
        console.log(result)
      }
    });
  }

  function totalFeito() {
    $.ajax ({
      url: '../../funcionalidades/totalFeito.php',
      type: 'GET',
      data: {UsuarioId},
      async: true,
      success: function(result){
        $("#total_task3").html(result);
        console.log(result)
      }
    });
  }


  $(document).on("click", "#clearFazer", function(){
    $.ajax({
      url:'../../funcionalidades/clear.php',
      type: 'GET',
      data: {UsuarioId},
      async: true,
      success: function(result) {
        if (result == 1) {
          showData();
          totalFazer();
        }
      }
    });
  });

  
  $(document).on("click", "#clearFazendo", function(){
    $.ajax({
      url:'../../funcionalidades/clearFazendo.php',
      type: 'GET',
      data: {UsuarioId},
      async: true,
      success: function(result) {
        if (result == 1) {
          showFazendo();
          totalFazendo();
        }
      }
    });
  });

  $(document).on("click", "#clearFeito", function(){
    $.ajax({
      url:'../../funcionalidades/clearFeito.php',
      type: 'GET',
      data: {UsuarioId},
      async: true,
      success: function(result) {
        if (result == 1) {
          showFeito();
          totalFeito();
        }
      }
    });
  });



  $(document).on("click", "#clearFazer", function(){
    $.ajax({
      url:'../../funcionalidades/clear.php',
      type: 'GET',
      data: {UsuarioId},
      async: true,
      success: function(result) {
        if (result == 1) {
          showData();
          totalFazer();
        }
      }
    });
  });

  $("#adicionar").on("click", function(e){
    e.preventDefault();
    txt = $("#txt").val();
    UsuarioId = UsuarioId

    $.ajax({
      url: '../../funcionalidades/insert.php',
      type: 'post',
      data: {txt,
      UsuarioId},
      success: function(result){
        if (result == 1) {
          txt = $("#txt").val('');
          alert("Todo List Added Successfully.");
          showData(); // Chama a função showData() aqui
          showFazendo(); // Chama a função showFazendo() aqui
          showFeito(); // Chama a função showFeito() aqui
          totalFazer(); // Chama a função totalFazer() aqui
          totalFazendo(); // Chama a função totalFazendo() aqui
          totalFeito(); // Chama a função totalFeito() aqui
        }else {
          console.log(result);
          alert("Erro ao fazer a adição da tarefa");
        }
      }
    });
  });

  $(document).on("click", "#delete", function(){
    id = $(this).data("id");
    element = $(this);

    $.ajax({
      url:'../../funcionalidades/delete.php',
      type: 'post',
      data: {id: id},
      success: function(result) {
        if (result == 1) {
          $(element).closest("li").fadeOut();
          showData(); // Chama a função showData() aqui
          showFazendo(); // Chama a função showFazendo() aqui
          showFeito(); // Chama a função showFeito() aqui
          totalFazer(); // Chama a função totalFazer() aqui
          totalFazendo(); // Chama a função totalFazendo() aqui
          totalFeito(); // Chama a função totalFeito() aqui
        } else {
          alert("Erro ao fazer a deleção da tarefa");
        }
      }
    });
  });

//------------------------------------------------------------------------
$(document).on("click", "#right", function(e) {
  e.preventDefault();
  id = $(this).data("id");
  element = $(this);

  $.ajax({
    url:'../../funcionalidades/passar.php',
    type: 'post',
    data: {id},
    async: true, 
    success: function(result) {
      if (result == 1) {
        alert("Alteração realizada com sucesso!");
        showData(); // Chama a função showData() aqui
        showFazendo(); // Chama a função showFazendo() aqui
        showFeito(); // Chama a função showFeito() aqui
        totalFazer(); // Chama a função totalFazer() aqui
        totalFazendo(); // Chama a função totalFazendo() aqui
        totalFeito(); // Chama a função totalFeito() aqui
      } else {
        alert("Erro ao acessar a funcionalidade passar");
      }
    }
  });
});


$(document).on("click", "#left", function(e) {
  e.preventDefault();
  id = $(this).data("id");
  element = $(this);

  $.ajax({
    url:'../../funcionalidades/voltar.php',
    type: 'post',
    data: {id},
    async: true, 
    success: function(result) {
      if (result == 1) {
        alert("Alteração realizada com sucesso!");
        showData(); // Chama a função showData() aqui
        showFazendo(); // Chama a função showFazendo() aqui
        showFeito(); // Chama a função showFeito() aqui
        totalFazer(); // Chama a função totalFazer() aqui
        totalFazendo(); // Chama a função totalFazendo() aqui
        totalFeito(); // Chama a função totalFeito() aqui
      } else {
        alert("Erro ao acessar a funcionalidade voltar");
      }
    }
  });
});



  $(document).on("click", "#editText", function(e) {
    e.preventDefault();
    let txt = $("#editInput").val();
  
    $.ajax({
      url:'../../funcionalidades/edit.php',
      type: 'post',
      data: {id, txt},
      async: true, 
      success: function(result) {
        if (result == 1) {
          alert("Alteração realizada com sucesso!");
          showData(); // Chama a função showData() aqui
          showFazendo(); // Chama a função showFazendo() aqui
          showFeito(); // Chama a função showFeito() aqui
          totalFazer(); // Chama a função totalFazer() aqui
          totalFazendo(); // Chama a função totalFazendo() aqui
          totalFeito(); // Chama a função totalFeito() aqui
          closeModal();
        } else {
          alert("Erro ao fazer a edição");
        }
      }
    });
  });



//------------------------------------------------------------
  function openModal() {
    document.getElementById("modal").style.display = "block";
}

function closeModal() {
  document.getElementById("modal").style.display = "none";
}

$(document).on("click", "#closeModal", function(){
  closeModal()
})

 

// -------------------------------------------------------------------------------------------------------------------------------------


$(document).on("click", "#edit", function(){
  id = $(this).data("id");
  element = $(this);

  $.ajax({
    url:'../../funcionalidades/showEdit.php',
    type: 'GET',
    data: {id: id},
    async: true,
    success: function(result) {
      if (result != "") {
        let text = result.split('"')[1]
        $("#editInput").val(text)
        openModal();
      } else {
        alert("Erro ao abrir a janela de edição")
      }
    }
  });
});


// ---------------------------------------------------------------------------------------------------------------------------------------------------
$("#cadastro").on("click", function(e){
  e.preventDefault();
  email = $("#email").val();
  senha = $("#senha").val();

  $.ajax({
    url: '../../funcionalidades/insertuser.php',
    type: 'post',
    data: {email, senha},
    success: function(result){
      if (result == 1) {
        alert("Usuário cadastrado com sucesso!");
        window.location.href = "painel.php"
      }else {
        console.log(result);
        alert("Erro ao cadastrar o usuário")
      }
    }
  });
});

$("#login").on("click", function(e){

  e.preventDefault();
  email = $("#email").val();
  senha = $("#senha").val();

  $.ajax({
    url: '../../funcionalidades/loginusuario.php',
    type: 'post',
    data: {email, senha},
    success: function(result){
      if (result == 1) {
        alert("Usuário cadastrado com sucesso!");
        window.location.href = "painel.php"
      }else {
        console.log(result);
        alert("Erro ao fazer o login")
      }
    }
  });
});
