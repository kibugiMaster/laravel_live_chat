<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
    <div class="container d-flex align-items-center justify-content-center">
        <div class="col-6 bg-light shadow border p-5 mt-5">
            <h1 class="text-center">Login</h1>
            <form action="{{ url('login') }}" method="post">
                @csrf
                <div class="form-group col-12">
                    <input type="email" class="form-control" name="email" placeholder="Email" required>
                </div>
                <div class="form-group col-12">
                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                </div>
                <div class="form-group col-12">
                    <button type="submit" class="btn btn-primary col-12">Login</button>
                </div>
                <div class="text-center mt-3">
                    <a href="#">Forgot your password?</a>
                </div>
            </form>
        </div>
    </div>

</body>

</html>
