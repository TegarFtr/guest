
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guest Event</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <style>
        .card-text {
            color: #EFEAE3;
        }
       
        .card-body {
            background-color: #65705A;
        }
        .card-container {
            background-color: #655446;
            margin: 0 auto;
            margin-top: 5%;
        }
        .card-header {
            background-color: #ffffff;
            margin: 0;
        }
        .btn-primary { 
            background-color: #EFEAE3;
            border-color: #655446;
            color: #655446;
            margin-left: 10px;

        }
    </style>
</head>
<body style="background-color: #CBD5C0;">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card text-center">
                    <div class="card-header">
                        Signup your account here
                    </div>
                    <div class="card-body">
                        <p class="card-text">Username can only contain names and numbers without any symbols, max 8 letters</p>
                        <p class="card-text">Never forget your password or you won't be able to log in forever</p>

                        <br>
                        <form action="{{ url('signup') }}" method="post">
                            @csrf
                        <div class="mb-3 row ml-auto"> 
                            <label for="staticEmail" class="col-sm-3 col-form-label" style="color: #EFEAE3;">Username</label>
                            <div class="col-sm-8">
                            <input type="text" name="username" class="form-control" id="exampleFormControlInput1" placeholder="ex: lidya123"></div>
                        </div>
                        <div class="mb-3 row ml-auto">
                            <label for="inputPassword" class="col-sm-3 col-form-label" style="color: #EFEAE3;">Password</label>
                            <div class="col-sm-8">
                                <input type="password" name="password" class="form-control" id="inputPassword">
                            </div>
                            <br>
                            <br>
                            <br>
                            <button type="submit" class="btn btn-primary">Signup</button>
                            <p class="card-text">_________________________________________________________________________</p>
                        </div>
                        </form>
                        
                        <p class="card-text">Click the signup button and you're be able to log into your account</p>
                        <a href="{{ url('contactus') }}" class="btn btn-primary ml-4">Back</a>
                        
                        <a href="{{ url('login') }}" class="btn btn-primary">login</a>
                    </div>
                    <div class="card-footer text-body-secondary">
                        Back to the homepage  |  log into your account
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
