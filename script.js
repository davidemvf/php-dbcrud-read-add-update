$(document).ready(init);

function init() {

  getData();

  $(document).on("click", ".update", upDrinks);

  $(document).on("click", ".add", addDrinks)


};

function getData() {

  $(".container").html("");

  $.ajax({
    url: "api.php",
    method: "GET",
    success: function(data) {
      console.log(data);
      printItem(data);
    },
    error: function () {
      alert("Errore")
    }
  })
};

function printItem(data) {
  var source   = document.getElementById("entry-template").innerHTML;
  var template = Handlebars.compile(source);

  for (var i=0; i<data.length; i++) {
    var bevanda = data[i];
    var context = bevanda;
    var html = template(context);

    $(".container").append(html);
  }
}

function upDrinks() {
  var id = thisDinkId($(this));
  console.log("id: ", id);
  var nome = prompt("Nome bevanda");
  var marca = prompt("Marca");
  var prezzo = prompt("Prezzo");
  var scadenza = prompt("Scadenza");

  $.ajax({
    url: "apiUp.php",
    method: "GET",
    data: {id: id, nome: nome, marca: marca, prezzo: prezzo, scadenza: scadenza},
    success: function(data) {
      console.log(data);

    },
    error: function () {
      alert("Errore")
    }
  })
}

// funzione per selezionare l'id del box selezionato
function thisDinkId(me) {
 var room = me.parent();
 var id = room.data("id");
 console.log(id);
 return id;
}

function addDrinks() {
  var nome = prompt("Nome bevanda");
  var marca = prompt("Marca");
  var prezzo = prompt("Prezzo");
  var scadenza = prompt("Scadenza");

  $.ajax({
    url: "apiAdd.php",
    method: "GET",
    data: {nome: nome, marca: marca, prezzo: prezzo, scadenza: scadenza},
    success: function(data) {
      console.log(data);
      getData();
    },
    error: function () {
      alert("Errore")
    }
  })

}
