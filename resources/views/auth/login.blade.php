<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Dashboard</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@400;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="{!! asset('images/logosmgen.png') !!}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/73c0197af7.js" crossorigin="anonymous"></script>


</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card justify-content-center mt-5">
                    <div class="card-header text-center">{{ __('SMGen Dashboard Login') }}</div>
    
                    <div class="card-body">
                        @if(session('error'))
                            <div class="alert alert-danger" role="alert">
                                {{ session('error') }}
                            </div>
                        @endif

                        <form method="POST" action="/login">
                            @csrf

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input class="form-control" name="email" id="email" type="email" autofocus required>
                            </div>

                            <div class="form-group">
                                <label class="form-control-label">Password</label>
                                <div class="input-group">
                                    <input id="password" name="password" class="form-control" type="password" value="{{ old('password') }}">
                                    <div id="eyeicon" class="btn btn-outline-secondary"><i class="fa-solid fa-eye"></i></div>
                                </div>
                            </div>   
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>
                            </div>
                            <div class="form-group">
                                @error('email')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        let eyeicon = document.getElementById("eyeicon");
        let password = document.getElementById("password");
    
        eyeicon.onclick = function() {
            if(password.type == "password") {
                password.type = "text";
            } else {
                password.type = "password";
            }
        }
    </script>
</body>
</html>
