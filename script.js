$(document).ready(function(){
  function showData() {
    $.ajax ({
      url: 'show.php',
      type: 'post',
      success: function(result){
        $("#data").html(result);
      }
    });
  }
  showData();

  function totalTask() {
    $.ajax ({
      url: 'task.php',
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
      url: 'insert.php',
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
      url: 'delete.php',
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
    url: 'showEdit.php',
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
    url: 'edit.php',
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
    url: 'insertuser.php',
    type: 'post',
    data: {email, senha},
    success: function(result){
      if (result == 1) {
        alert("Usuário cadastrado com sucesso!");
        window.location.href = "painel.php"
        // showData();
        // totalTask();
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
      url: 'clear.php',
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
