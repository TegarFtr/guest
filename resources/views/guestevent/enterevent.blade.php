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
            color: #CBD5C0;
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

    </style>
</head>
<body>
        <header class="header">
                <p class="subwelcome">Congratulations, you have successfully registered your account. <br>Please upload your poster and enter a description of your event.</p>
        </header>
        @if($errors->has('error'))
            <div class="alert alert-danger">
                {{ $errors->first('error') }}
            </div>
        @endif
    <form action="" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row mt-3">
            <label for="formFile1" class="col-sm-4 col-form-label text-right">Judul Acara</label>
            <div class="col-sm-6">
                <input type="text" name="judul" id="formfile1" class="form-control">
            </div>
        </div>
        <br>
        <div class="row mt-3">
            <label for="formFile" class="col-sm-4 col-form-label text-right">Upload your poster here</label>
            <div class="col-sm-6">
                <input type="file"  class="form-control" id="formfile" name="sampul" accept="image/*" onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])"/>
            </div>
            <div class="mt-3 text-center"><img src="" id="output" alt="" width="200"></div>
        </div>
        <br>
        <div class="row mt-3">
            <label for="exampleFormControlTextarea1" class="col-sm-4 col-form-label text-right">Describe your event here</label>
            <div class="col-sm-6">
            <textarea class="form-control" name="deskripsi" id="exampleFormControlTextarea1" rows="5"></textarea>
            </div>
        </div>
        <p></p>
        <div class="text-center">
            <button type="submit" class="btn btn-primary">Save and add guests list</button>
        </div>
    </form>

    <footer class="mt-5">
        <div class="card text-center">
            <div class="card-body">
                <p class="text-white">© Copyright 2023 Guest Event Co. All Rights Reserved. <br>Design by : <a rel="nofollow" href="https://instagram.com/lidyalfia?igshid=NzZlODBkYWE4Ng==">GuE</a></p>
            </div>
        </div>
    </footer>


</body>
</html>
