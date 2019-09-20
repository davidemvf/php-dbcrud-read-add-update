<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- FONT: LATO -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
    <!-- FONT: FONTAWESOME -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">

    <!-- JS: JQUERY -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- JS: MOMENT -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment-with-locales.min.js"></script>

    <!-- JS: HANDLEBARS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.1.0/handlebars.min.js" charset="utf-8"></script>

    <!-- JS: CHART JS -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0/dist/Chart.min.js"></script>

    <!-- CSS: MY STYLE -->
    <link rel="stylesheet" href="style.css">
    <!-- JS: MY SCRIPT -->
    <script src="script.js" charset="utf-8"></script>

    <title>Bevande</title>

  </head>
  <body>
    <h1>Bevande</h1>
    <span class="add">Aggiungi</span>
    <div class="container">


    </div>




    <!-- template contenitore bevande -->
    <script id="entry-template" type="text/x-handlebars-template">
      <div class="bevanda" data-id="{{id}}">
        <h4>Bibita: {{nome}}</h4>
        <h4>Marca: {{marca}}</h4>
        <h4>Prezzo: {{prezzo}}</h4>
        <h4>Scadenza: {{scadenza}}</h4>
        <h4 class="update">Aggiorna</h4>
      </div>
    </script>
  </body>
</html>
