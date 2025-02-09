<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        

    <script src="./main.js"></script>
    <style>
        body {
            background-color: #69c1fb;
            height: 100%;
        }

        form {
            width: 30%;
            margin: auto;
            padding-top: 150px;
            
        }

        .box {
            background-color: #3daff6;
        }

        .btn-color {
            background-color: #1dffb7;
            border: none;
        }
    </style>

</head>

<body>
     <!-- Bootstrap CSS  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    
    

    <div class="container">
        <form action="register.php" method="post" >
            <div class="box p-5 rounded">
                <h2 class="text-center">Update Account</h2>
                <div class="text-center">
                    
                </div>
                <label class="form-label mt-3 fw-semibold">Email address</label>
                
                <input type ="text"class="form-control" placeholder="AntiguoCorreo@example.com" name="emailAntiguo" />
                <input type ="text"class="form-control mt-3" placeholder="NuevoCorreo@example.com" name="emailNuevo" />
                <label class="form-label mt-3 fw-semibold">Username</label>
                <input type="text" class="form-control"  placeholder="AntiguoUser"name="userAntiguo" />
                <input type="text" class="form-control mt-3" placeholder="NuevoUser"name="userNuevo"  />
                <label class="form-label mt-3 fw-semibold">Password</label>
                <input type="password" class="form-control"placeholder="AntiguoPassword" name="passAntiguo" />
                <input type="password" class="form-control mt-3"  placeholder="NuevoPassword"name="passNuevo"  />
                
                <input type="submit" class="form-control btn-color mt-3 w-100" value="Enviar" name="Login" />
                
                
                
            </div>
        </form>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
        const form = document.querySelector("form");

        form.addEventListener("submit", function (event) {
            let emailAntiguo = String(document.querySelector('input[name="emailAntiguo"]').value.trim());
            let emailNuevo = String(document.querySelector('input[name="emailNuevo"]').value.trim());
            let userAntiguo = String(document.querySelector('input[name="userAntiguo"]').value.trim());
            let userNuevo = String(document.querySelector('input[name="userNuevo"]').value.trim());
            let passAntiguo = String(document.querySelector('input[name="passAntiguo"]').value.trim());
            let passNuevo = String(document.querySelector('input[name="passNuevo"]').value.trim());

        if (!emailAntiguo || !emailNuevo || !userAntiguo || !userNuevo || !passAntiguo || !passNuevo) {
            alert("Por favor, complete todos los campos antes de enviar.");
            event.preventDefault(); // Detiene el envío del formulario
        } else {
            // Asignar los valores convertidos al formulario antes de enviarlo
            document.querySelector('input[name="emailAntiguo"]').value = emailAntiguo;
            document.querySelector('input[name="emailNuevo"]').value = emailNuevo;
            document.querySelector('input[name="userAntiguo"]').value = userAntiguo;
            document.querySelector('input[name="userNuevo"]').value = userNuevo;
            document.querySelector('input[name="passAntiguo"]').value = passAntiguo;
            document.querySelector('input[name="passNuevo"]').value = passNuevo;
        }
    });
});

    </script>

</body>

</html>