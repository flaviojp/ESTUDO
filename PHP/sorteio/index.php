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

  <div class="container">
  <!-- Content here -->

  <h1 class="mt-5 mb-3">INFORME OS DADOS</h1>

  <form action="resultado.php" method="post">

  <div class="form-group">
    <label for="exampleFormControlTextarea1">Informe os números separados por vírgula sem espaços ou outro sinal de pontuação.</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Ex: 1,2,3,4,5,10,15,20"></textarea>
  </div>
  <div class="form-row">

    <div class="form-group col-md-6">
      <label>Quantidade de números deseja que sortear?</label>
      <input type="text" class="form-control" name="quantidade-de-numero">
    </div>

  </div>
  <button type="submit" class="btn btn-primary">Sortear</button>
</form>

</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>