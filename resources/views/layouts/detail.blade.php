<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Dongle:wght@300;400;700&family=Montserrat+Alternates:ital,wght@0,500;0,800;1,700;1,800;1,900&family=Montserrat:wght@700&family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Detail Musik</title>

    <style>
        .button{
                padding: 1.3em 3em;
                font-size: 12px;
                text-transform: uppercase;
                letter-spacing: 2.5px;
                font-weight: 500;
                color: #000;
                background-color: #fff;
                border: none;
                border-radius: 45px;
                box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
                transition: all 0.3s ease 0s;
                cursor: pointer;
                outline: none;
                text-decoration: none;
        }
        body{
            font-family: montserrat;
            background-color: rgba(167, 166, 166, 0.966);
        }
        .container{
                border: 1px solid #ddd;
                display: inline-block;
                padding: 2em;
                font-family: Montserrat;
                background-color: #ddd;
                margin-left: 400px;
                margin-top: 40px;
                border-radius:10px;
        }
        .hapus{
                background-color: rgb(196, 14, 14);
                color: white;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 10px;
                margin-bottom: 30px;
                padding: 1.3em 3em;
                font-size: 12px;
                text-transform: uppercase;
                letter-spacing: 2.5px;
                font-weight: 500;
                border: none;
                border-radius: 30px;
                box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
                transition: all 0.3s ease 0s;
                cursor: pointer;
                outline: none;
            }
            .edit{
                background-color: #4CAF50;
                color: white;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 10px;
                margin-bottom: 30px;
                padding: 1.3em 3em;
                font-size: 12px;
                text-transform: uppercase;
                letter-spacing: 2.5px;
                font-weight: 500;
                border: none;
                border-radius: 30px;
                box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
                transition: all 0.3s ease 0s;
                cursor: pointer;
                outline: none;
            }
        </style>
</head>
<body>

    <div class="container">
    <h2 class="card-title">Judul : {{$data->judul}} </h2>
    <p class="card-text">Penyanyi : {{$data->pencipta}}</p>
    <h3 class=text-center>Lirik</h3>
    <p class="card-text">{{ $data->lirik }}</p>

    <audio controls>
        <source src="{{$data->lagu}}" type="audio/mpeg">
        </audio> <br><br>
    <a href="/dashboard" class="button">Back</a>
    <a href="/delete/{{$data->id}}" class="hapus">Delete</a>
    <a href="/show/{{$data->id}}" class="edit">Edit</a>
</div>

</body>
</html>
