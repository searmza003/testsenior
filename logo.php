<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>  
    <form class="form-signin">
        <div class="text-center mb-4">
            <img class="mb-4" src="../../assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
            <h1 class="h3 mb-3 font-weight-normal">Floating labels</h1>
            <p>Build form controls with floating labels via the <code>:placeholder-shown</code> pseudo-element. <a href="https://caniuse.com/#feat=css-placeholder-shown">Works in latest Chrome, Safari, and Firefox.</a></p>
        </div>

        <div class="form-label-group">
            <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">
            <label for="inputEmail">Email address</label>
        </div>

        <div class="form-label-group">
            <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="">
            <label for="inputPassword">Password</label>
        </div>

        <div class="checkbox mb-3">
            <label>
            <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        <p class="mt-5 mb-3 text-muted text-center">© 2017-2018</p>
        </form>                  
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
</body>
</html>