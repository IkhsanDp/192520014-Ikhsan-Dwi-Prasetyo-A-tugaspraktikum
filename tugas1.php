<!DOCTYPE html>
<html>
    <head>
        <title>Tugas 1</title>
        <style type="text/css">
        p{
            font-family: serif;
            line-height: 0.5cm;
            font-size: 18px;
        }
        body {
            background: url(https://www.hoteldekatkampus.com/wp-content/uploads/2015/03/Universitas-Muhammadiyah-Purworejo.jpg);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            
            color: white;
            text-align: center;
        }
        article {
            background-position	: justify;
            line-height			: single;
            margin-top			: 50px;
	        margin-right		: 50px;
	        margin-left			: 450px;
	        background-color	: grey;
            clear				: both;
            overflow			: auto;
            width				: 40%;
        }
    
    </style>
    </head>
    <body>
        <?php
        $nama = "Ikhsan Dwi Prasetyo";
        $nim = 192520014;
        $alamat = "Kutoarjo";
        $email = "psetyo163@gmail.com";
        $bidang = "Sistem Informasi";
        ?>

      <article>
        <h2>----DATA DIRI----</h2>
        <h2>MAHASISWA</h2>
        <img src="saya.jpg" width="200px" height="250px" >
        <p>Nama : <?php echo $nama ?> </p>
        <p>Nim : <?php echo $nim ?> </p>
        <p>Alamat : <?php echo $alamat ?> </p>
        <p>Alamat E-mail : <?php echo $email ?> </p>
        <p>Bidang Minat : <?php echo $bidang ?> </p>
        <h3>UNIVERSITAS MUHAMMADIYAH PURWOREJO</h3>
    </article>
        <h3><span class="blink">www.umpwr.ac.id</span><h3>
    </body>
</html>