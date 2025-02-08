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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <div class="container">
        <form action="login.php" method="post">
            <div class="box p-5 rounded">
                <h2 class="text-center">Login</h2>
                <label class="form-label mt-3 fw-semibold">Email address</label>
                <input class="form-control" placeholder="name@example.com" name="email" />
                <label class="form-label mt-3 fw-semibold">Username</label>
                <input class="form-control" name="user"  />
                <label class="form-label mt-3 fw-semibold">Password</label>
                <input type="password" class="form-control" name="pass" />
                <a href="">Forgot Password</a>
                <input type="submit" class="form-control btn-color mt-3 w-100" value="Enviar" name="Login" />
                
                
            </div>
        </form>
    </div>

</body>

</html>