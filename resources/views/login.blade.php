<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>YouChat | Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body style="background-color: #6610f2;">
<div class="container text-center mt-5">
    <div class="card">
        <div class="row">
            <h1 class="text-center">YouChat Login</h1>
        </div>
        <form class="form-control" action="{{ route('user.postLogin') }}" method="GET" enctype="application/x-www-form-urlencoded">
            <div class="row">
                <div class="col-12">
                    <input type="email" name="email" id="email" class="form-control" value="" placeholder="E-mail">
                </div>
            </div>
            <div class="row">
                <div class="col-12 mt-3">
                    <input type="password" name="password" id="password" class="form-control" value="" placeholder="Password">
                </div>
            </div>
            <div class="row text-center">
                <div class="col-12 mt-3">
                    <button type="submit" class="btn btn-success">Login</button>
                </div>
            </div>
        </form>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>
</html>
