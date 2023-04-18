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
    <title>Registro</title>
</head>

     <div class="container col-11 col-md-9" id="form-container">
         <div class="row gx-5">
            <div class="col-md-6">
               <h2>Faça o seu cadastro</h2>
               <form action="cadastrar.php" method="post" enctype="multipart/form-data">
                   <div class="form-floating mb-3">
                     <input type="text" name="nome" placeholder="Nome" required class="form-control">
                     <label for="nome" class="form-label">Digite seu nome</label>
                  </div>
                   <div class="form-floating mb-3">
                     <input type="text" name="email" placeholder="Email" required class="form-control">
                     <label for="email" class="form-label">Digite seu email</label>
                   </div>
                   <div class="form-floating mb-3">
                     <input type="password" name="senha" placeholder="Senha" required class="form-control">
                     <label name="senha" class="form-label">Digite a sua senha</label>
                   </div>
                   <div class="form-floating mb-3">
                     <input type="password" name="repetesenha" placeholder="comfirme sua senha" class="form-control">
                     <label name="repetesenha" class="form-label">Comfirme a senha</label>
                   </div>
                   <div class="form-floating mb-3">
                     <input type="text" name="lembrete" placeholder="lembrete da senha" required class="form-control">
                     <label name="senha" class="form-label">Lembrete</label>
                   </div>
                   <div class="form-floating mb-3">
                     <input type="file" name="foto" placeholder="coloque sua foto aqui" required class="form-control">
                     <label for="foto" class="form-label"></label>
                   </div>
                     <input type="submit" value="Cadastrar" class="btn btn-primary btt">
               </form>
            </div> 
            <div class="col-md-6">
                <div class="row align-items-center">
                    <div class="col-12">
                        <img src="imagem/signup.svg" alt="Tela de cadastro" class="img-fluid">
                    </div>
                    <div class="col-12" id="link-container">
                        <a href="login.php">Já possue uma conta? Faça o login aqui.</a>
                    </div>
                </div>
            </div> 
         </div>
    </div>
    
</body>

</html>