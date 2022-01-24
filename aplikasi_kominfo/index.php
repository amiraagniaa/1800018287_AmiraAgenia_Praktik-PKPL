<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/fe86e2d4c6.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/login.css" type="text/css">
        <title>Halaman Login</title>
        <link href="img/logo.png" rel="icon">
        <link href="img/logo.png" rel="apple-touch-icon">
    </head>
    <body>
        <div class="container">
            <h4 class="text-center">FROM LOGIN</h4>
            <hr>
            <form method="post" name="login" action="proses_login.php">
                <div class="form-group">
                    <label> Username </label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fas fa-user"></i>
                            </div>
                        </div>
                        <input type="username" name="username" id="username" class="form-control" placeholder="Masukkan Username Anda">
                    </div>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fas fa-unlock-alt"></i>
                            </div>
                        </div>
                        <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan Password Anda">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary" value="login" name="login">SUBMIT</button>
                <button type="reset" class="btn btn-danger">RESET</button>
            </form>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    </body>
</html>