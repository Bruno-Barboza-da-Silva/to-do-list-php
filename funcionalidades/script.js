console.log("pegou aqui")

$(document).ready(function(){
  function showData() {
    $.ajax ({
      url: '../../funcionalidades/show.php',
      type: 'post',
      success: function(result){
        if (result) {
          $("#data").html(result);
        } else {
          console.log(result);
          alert("ERRO")
        }
      }
    });
  }
  showData();

  function totalTask() {
    $.ajax ({
      url: '../../funcionalidades/task.php',
      type: 'post',
      success: function(result){
        $("#total_task").html(result);
      }
    });
  }
  totalTask();

  $("#btn").on("click", function(e){
    e.preventDefault();
    txt = $("#txt").val();

    $.ajax({
      url: '../../funcionalidades/insert.php',
      type: 'post',
      data: {txt: txt},
      success: function(result){
        if (result == 1) {
          txt = $("#txt").val('');
          alert("Todo List Added Successfully.");
          showData();
          totalTask();
        }else {
          console.log(result);
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
          showData();
          totalTask();
        }
      }
    });
  });


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
        alert("Deu certo carai!")
        let text = result.split('"')[1]  // tentar trocar mais pra frente

        $("#editInput").val(text)
        openModal();
      } else {
        alert("ERRO")
      }
    }
  });
});



$(document).on("click", "#editText", function(e) {
  e.preventDefault();
  let txt = $("#editInput").val();

  console.log(id, txt, "teste");

  $.ajax({
    url:'../../funcionalidades/edit.php',
    type: 'post',
    data: {id, txt},
    async: true, 
    success: function(result) {
      if (result == 1) {
        
        alert("Alteração realizada com sucesso!");
        showData();
        totalTask();
        closeModal();
      } else {
        alert("ERRO");
      }
    }
  });
});








// ---------------------------------------------------------------------------------------------------------------------------------------------------
// Cadastro
$("#cadastro").on("click", function(e){

  e.preventDefault();
  email = $("#email").val();
  senha = $("#senha").val();



  console.log(email, senha)

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
        alert("ERRO")
      }
    }
  });
});








// ------------------------------------------------------------------------------------------------------------------------------------------------


  $(document).on("click", "#clear", function(){
    $.ajax({
      url:'../../funcionalidades/clear.php',
      type: 'post',
      success: function(result) {
        if (result == 1) {
          showData();
          totalTask();
        }
      }
    });
  });
});