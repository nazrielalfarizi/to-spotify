<html>

    <head>
        <link href="https://fonts.googleapis.com/css2?family=Dongle:wght@300;400;700&family=Montserrat+Alternates:ital,wght@0,500;0,800;1,700;1,800;1,900&family=Montserrat:wght@700&family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

        <style>
            body{
                font-family: montserrat;
            background-color: rgb(226, 243, 226);
            }
            table{
                border: 3;
                border-collapse: collapse;
                width: 100%;
            }
            td{
                text-align: center;
            }
            .tambah{
                background-color: #127191;
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
            .detail{
                background-color: #12914b;
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
        <center> <h1 class="text-center mb-4">Daftar Lagu</h1></center>
  <div class="container">
       <a href="/tambah" type="button" class="tambah">Tambah Data + </a>
  </div>
       <table>
        <tr>
            <th>#</th>
            <th>Judul Lagu</th>
            <th>Penyanyi lagu</th>
            <th>Action</th>
          </tr>
          @php
          $no = 1;
          @endphp
           @foreach ($data as $daftar)
           <tbody>
             <tr>
               <td scope="row"> {{$no++}}</td>
               <td> {{$daftar->judul}}</td>
               <td> {{$daftar->pencipta}}</td>
               <td> <a href="/detailData/{{$daftar->id}}" class="detail">Detail</a>
            </td>
             </tr>
              @endforeach
           </tbody>
        </table>
    </body>
</html>
