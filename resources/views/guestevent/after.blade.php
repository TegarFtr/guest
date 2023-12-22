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
        .header{
            background-color:#65705A;
            justify-content: center;
            justify-items: center;
            align-content: center;
            align-items: center;
            display: flex;
        }
        .btn-primary {
            background-color: #ffffff;
            border-color: #65705A;
            color: #65705A;
            margin-left: 10px;
            align: center;
        }
        body {
            background-color: #DFE6DA;
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
        .subwelcome{
            color: #65705A;
            padding: 8pt;
            margin-left: 25px;
            text-align: center;
            font-family: 'Century Gothic', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            font-size: 20px;
            margin-bottom: 80px;
        }
        .card-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            width: 30rem;
            margin-left: 25px;
            border: 0px;
            margin-top:30px;
            margin-bottom: 30px;
            background-color:#655446;
            align: left;
        }
        .card-text{
            color: #EFEAE3
        }
        .card-body{
            background-color:#65705A;
        }
        .foto{
            margin-top: 20px;
            margin-bottom: 20px;
            width: 25%;
            height: auto;
            left: 50%;

        }
        .text{
            color: #65705A;
            font-family: 'Century Gothic', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            text-align: center;
            margin-left: 100px;
            margin-right: 100px;
        }
    </style>
</head>
<body>
        <header class="header">
            <img src="{{ asset("$acara->file") }}" class="foto" alt="...">
        </header>
        <p class="subwelcome">{{ $acara->judul }}</p>



    <br>

    <h5 class="text">{{ $acara->deskripsi }}</h5>
    <br>
    <h6 class="text">You can download your pictures in the link bellow</h6>
    <br><br>
    <div class="text-center">
        <a href="https://drive.google.com/drive/folders/1-q2t7Lq-YOM824OW9F_3RjmNUDDoScAw" class="btn btn-primary">Download</a>
    </div>
    <footer class="mt-5">
        <div class="card text-center">
            <div class="card-body">
                <p class="text-white">© Copyright 2023 Guest Event Co. All Rights Reserved. <br>Design by : <a rel="nofollow" href="https://instagram.com/lidyalfia?igshid=NzZlODBkYWE4Ng==">GuE</a></p>
            </div>
        </div>
    </footer>


</body>
</html>
