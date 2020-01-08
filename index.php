<!DOCTYPE html>
<html lang="en">
<head>
  <title>Campaign Validator</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Campaign Format Validator</h2>
  <form action="/action_page.php">
    <div class="form-group">
      <label for="email">Campaign:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
        <small id="emailHelp" class="form-text text-muted">&bullet; ser numérico de 8 à 9 caracteres</small>
        <small id="emailHelp" class="form-text text-muted">&bullet; ser alfanumérico de 24 caracteres (não pode ter espaço)</small>
        <small id="emailHelp" class="form-text text-muted">&bullet; conter em qualquer posição o texto .BRM ex: Campain.home-70%off.BRN-thing</small>
        <small id="emailHelp" class="form-text text-muted">&bullet; começar com o prefixo KD e ser seguido de 6 dpigitos numéridos ex:KD123456</small>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>
