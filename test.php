<?php
    include 'koneksi.php';
    
    $no = 1;
    $data = mysqli_query($kon,"select * from mahasiswa");
    $data1 = mysqli_query($kon,"select * from matakuliah");
    $data2 = mysqli_query($kon,"select * from nilai");
    $data3 = mysqli_query($kon,"select * from customer");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Akademik</title>
    <style>
        body {
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
        }
        #customers {
          font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
          border-collapse: collapse;
          width: 50%;
          margin-left: 25%;
        }
        #customers td, #customers th {
          border: 10px solid #ddd;
          padding: 10px;
        }
        #customers tr:nth-child(even){background-color: red;}
        #customers tr:hover {background-color: 	black;}
        #customers th {
          padding-top: 12px;
          padding-bottom: 12px;
          text-align: left;
          background-color: #dc143c;
          color: white;
        }
        .tbedit {
            background-color: #5ec3cc; /* Blue */
            border: none;
            color: white;
            padding: 5px 15px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 13px;
            margin: 4px 2px;
            cursor: pointer;
            
        }
        .tbhapus {
            background-color: #FFFF00; /* Red */
            border: none;
            color: white;
            padding: 5px 15px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 13px;
            margin: 4px 2px;
            cursor: pointer;
            
        }
        .tbadd {
            background-color: #FFFF00; /* Red */
            border: none;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 15px;
            margin: 4px 2px;
            cursor: pointer;
            
        }
    </style>
</head>
<body>

<hr>
    <center><h2>Data Customer</h2></center>
    <table id="customers" border="1">
        <tr>
            <th>No</th>
            <th>ID</th>
            <th>USERNAME</th>
            <th>PASSWORD</th>
            <th>NAMA</th>
            <th>UMUR</th>
            <th>ALAMAT</th>
            <th>TELP</th>
            <th>EMAIL</th>
            <th>TANGGAL LAHIR</th>
            <th>KODE POS</th>
            <th>NAMA IBU</th>
            <th>GENDER</th>
        </tr>
        <?php while($d3 = mysqli_fetch_array($data3)){?>
        <tr>
            <td><?=$no++?></td>
            <td><?=$d3['id_customer']?></td>
            <td><?=$d3['username']?></td>
            <td><?=$d3['password']?></td>
            <td><?=$d3['nama']?></td>
            <td><?=$d3['umur']?></td>
            <td><?=$d3['alamat']?></td>
            <td><?=$d3['telp']?></td>
            <td><?=$d3['email']?></td>
            <td><?=$d3['tgl_lahir']?></td>
            <td><?=$d3['kode_pos']?></td>
            <td><?=$d3['nama_ibu_k']?></td>
            <td><?=$d3['gender']?></td>
        </tr>
        <?php } ?>
    </table>

    <hr>
    <center><h2>Data Mahasiswa</h2></center>
    <table id="customers" border="1">
        <tr>
            <th>No</th>
            <th>Nim</th>
            <th>Nama</th>
            <th>Prodi</th>
        </tr>
        <?php while($d = mysqli_fetch_array($data)){?>
        <tr>
            <td><?=$no++?></td>
            <td><?=$d['nim']?></td>
            <td><?=$d['nama']?></td>
            <td><?=$d['prodi']?></td>
        </tr>
        <?php } ?>
    </table>

    <hr>
    <center><h2>Data Mata Kuliah</h2></center>
    <table id="customers" border="1">
        <tr>
            <th>No</th>
            <th>KDMK</th>
            <th>NMMK</th>
            <th>SKS</th>
            <th>Prodi</th>
        </tr>
        <?php while($d1 = mysqli_fetch_array($data1)){?>
        <tr>
            <td><?=$no++?></td>
            <td><?=$d1['kdmk']?></td>
            <td><?=$d1['nmmk']?></td>
            <td><?=$d1['sks']?></td>
            <td><?=$d1['prodi']?></td>
        </tr>
        <?php } ?>
    </table>

    <hr>
    <center><h2>Data Nilai</h2></center>
    <table id="customers" border="1">
        <tr>
            <th>No</th>
            <th>THAKD</th>
            <th>NIM</th>
            <th>KDMK</th>
            <th>NILAI</th>
        </tr>
        <?php while($d2 = mysqli_fetch_array($data2)){?>
        <tr>
            <td><?=$no++?></td>
            <td><?=$d2['thakd']?></td>
            <td><?=$d2['nim']?></td>
            <td><?=$d2['kdmk']?></td>
            <td><?=$d2['nilai']?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>