<?php
$campaignPatterns = '(^[\d]{8,9}$|^[\w]{24}$|.*\.BRM.*|KD[\d]{6}$)';
$result["display"] = 'none';

if (isset($_POST['term'])) {
  $result["display"] = 'block';
  $result["type"] = 'danger';
  $result["text"] = 'Este é um valor <b>inválido</b> para campanhas.';
  if (preg_match($campaignPatterns, $_POST['term']) == 1 ) {
    $result["type"] = 'success';
    $result["text"] = 'Este é um valor <b>valido</b> para campanhas.';
  }
}

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <!-- <div class="border border-primary rounded"> -->
      <h1>Campaign Validator</h1>
      <div class="alert alert-<?=$result['type']?>" role="alert" style="display: <?=$result['display']?>">
        <?=$result['text']?>
      </div>
      <form method="post">
        <div class="form-group">
          <label for="exampleInputEmail1">Campaign</label>
          <input type="text" name="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          <small id="emailHelp" class="form-text text-muted">&bull; ser numérico de 8 à 9 caracteres</small>
          <small id="emailHelp" class="form-text text-muted">&bull; ser alfanumérico de 24 caracteres (não pode ter espaço)</small>
          <small id="emailHelp" class="form-text text-muted">&bull; conter em qualquer posição o texto .BRM ex: Campain.home-70%off.BRN-thing</small>
          <small id="emailHelp" class="form-text text-muted">&bull; começar com o prefixo KD e ser seguido de 6 dpigitos numéridos ex:KD123456</small>
        </div>
        <button type="submit" class="btn btn-primary">Validar</button>
      </form>
    <!-- </div> -->
  </body>
</html>
