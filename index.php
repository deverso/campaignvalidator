<?php
// OLD $campaignPatterns = '(^[\d]{8,9}$|^[\w]{24}$|.*\.BRM.*|KD[\d]{6}$)';
$campaignPatterns = '/(^[\d]{8,9}$|^[\w]{24}$|.*\.BRM.*|KD[\d]{6}$|^mp_[\d]{6}$|^br_[\d]{6}$|^tr_)/i';
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
    <style>
      .bg {
        background-color: #d6d9dc;
      }
    </style>
    
    <!-- Bootstrap Javascript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <title>Campaign Validator</title>
  </head>
  <body>
      <div class="container align-self-center">
        <div class="border border-light rounded col-12 mt-5 bg">
          <h2>Campaign Validator</h2>
          <div class="alert alert-<?=$result['type']?> alert-dismissible fade show" role="alert" style="display: <?=$result['display']?>">
            <?=$result['text']?>
          </div>
          <form method="post">
            <div class="form-group">
              <input type="text" name="term" class="form-control" value="<?=$_POST['term']?>" autocomplete="off" />
              <small id="emailHelp" class="form-text text-muted">&bull; ser numérico de 8 à 9 caracteres</small>
              <small id="emailHelp" class="form-text text-muted">&bull; ser alfanumérico de 24 caracteres (não pode ter espaço)</small>
              <small id="emailHelp" class="form-text text-muted">&bull; conter em qualquer posição o texto .BRM ex: Campain.home-70%off.BRM-thing</small>
              <small id="emailHelp" class="form-text text-muted">&bull; começar com o prefixo KD e ser seguido de 6 dpigitos numéridos ex:KD123456</small>
              <button type="submit" class="btn btn-primary">Validar</button>
            </div>
          </form>
        </div>
      </div>
  </body>
</html>

