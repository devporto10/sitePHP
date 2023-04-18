<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous" defer></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Login</title>
</head>
<body>

<div class="container col-11 col-md-9" id="form-container">
   <div class="row align-items-center gx-5">
      <div class="col-md-6 order-md-2">
      <h2>Faça o login para continuar</h2>
        <form action="logar.php" method="post" enctype="multipart/form-data">
        <div class="form-floating mb-3">
            <input type="text" name="email" placeholder="Email" required class="form-control">
            <label for="email" class="form-label">Digite seu email</label>
        </div>
        <div class="form-floating mb-3">
            <input type="password" name="senha" placeholder="Senha" required class="form-control">
            <label name="senha" class="form-label">Senha</label>
        </div>
             <input type="submit" value="Logar" class="btn btn-primary btt">
          </form>         
      </div>
      <div class="col-md-6">
                <div class="row align-items-center">
                    <div class="col-12">
                        <img src="imagem/login.svg" alt="Tela de cadastro" class="img-fluid">
                    </div>
                    <div class="col-12" id="link-container">
                        <a href="imagem/login.svg">Já possue uma conta? Faça o login aqui.</a>
                    </div>
                </div>
            </div> 
   </div>
</div>
    
</body>

</html>