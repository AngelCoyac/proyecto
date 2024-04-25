<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="{{asset('assetss/estilos.css')}}">
</head>
<body>

<div class="container">
    <div class="card">
        <div class="card-header">
            <center><h3>Iniciar sesión </h3></center>
           
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="input-group form-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                    </div>
                    <input id="email" type="email" class="form-control" name="email" :value="old('email')" required autofocus placeholder="Correo">
                </div>
                <div class="input-group form-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-key"></i></span>
                    </div>
                    <input id="password" type="password" class="form-control" name="password" required autocomplete="current-password" placeholder="Contraseña">
                </div>
               
                <div class="form-group">
                    <input type="submit"  value="Iniciar" class="btn float-right login_btn">
                </div>
            </form>
        </div>
       
    </div>
</div>

<script src="https://kit.fontawesome.com/a81368914c.js"></script>
</body>
</html>
