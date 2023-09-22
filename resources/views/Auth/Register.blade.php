<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
     <body>
      <section class="vh-100" style="background-color: #C70039;">
         <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
           <div class="col-12 col-md-8 col-lg-6 col-xl-5">
            <div class="card shadow-2-strong" style="border-radius: 1rem;">
             <div class="card-body p-5 text-center"> 
              <main class = "container align-center p-5">
               <form method="POST" action="{{ route('register') }}">
                  @csrf
                 <div class="mb-3">
                   <label for="emailInput" class="form-label">Email</label>
                   <input type="email" class="form-control" id="emailInput" name="email" required autocomplete="disable">
                 </div>
                   <div class="mb-3">
                   <label for="passwordInput" class="form-label">Password</label>
                   <input type="password" class="form-control" id="passwordInput" name="password" required>
                 </div>
                   <div class="mb-3">
                   <label for="nameInput" class="form-label">Nombre</label>
                   <input type="text" class="form-control" id="nameInput" name="name" required autocomplete="disable">
                 </div>
                 <button type="submit" class="btn btn-success">Registrar</button>
                 <div>
                    <p>¿Ya tienes cuenta? <a href="{{ route('login') }}"> Inicia Sesion </a> </p>
                 </div>
             </form> 
            </main>
           </div>
          </div>
         </div>
        </div>
       </div>
      </section>
     </body>
</html>