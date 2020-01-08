<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>>>Campaign Validator<<</title>
  </head>
  <body>
    <h1>Campaign Validator</h1>
    <form>
      <div class="form-group">
        <label for="exampleInputEmail1">Campaign</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <small id="emailHelp" class="form-text text-muted">ser numérico de 8 à 9 caracteres</small>
        <small id="emailHelp" class="form-text text-muted">ser alfanumérico de 24 caracteres (não pode ter espaço)</small>
        <small id="emailHelp" class="form-text text-muted">conter em qualquer posição o texto .BRM ex: Campain.home-70%off.BRN-thing</small>
        <small id="emailHelp" class="form-text text-muted">começar com o prefixo KD e ser seguido de 6 dpigitos numéridos ex:KD123456</small>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </body>
</html>

<?php
echo "Teste";
