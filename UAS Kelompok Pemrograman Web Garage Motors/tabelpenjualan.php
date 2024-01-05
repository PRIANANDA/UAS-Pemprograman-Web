<!DOCTYPE html>
<html lang = "en">

<head>
     <meta charset = "UTF-8">
     <meta name    = "viewport" content = "width=device-width, initial-scale=1.0">
     <link rel     = "icon" type = "image/png" sizes = "35x34" href ="./image/logo.jpg">
     <title> Garage Motor ~ Always You </title>
     <link rel     = "stylesheet" href = "./style/style.css">
</head>

<body>

    <header class = "menu1">
    <div class    = "menu2">
    </div>

     <div class   = "menu3">
     <div class   = "menu3">
          <li><a href = "index.php"> Halaman </a></li>
          <li><a href = "motor.php"> Motor </a></li>
          <li><a href = "tabelpenjualan.php"> Tabel </a></li>
          <li><a href = "lainnya.php"> Lainnya </a></li>
    </div>
    </div>
</header>

<?php
$dataPenjualan1= array(
    array ("No Motor","Id Motor","Nama Motor","Bahan Bakar","Perkiraan Harga Motor"),
    array ('1',  '10021', 'Scoopy Tipe 1', 'Pertalite', '20.000.000'),
    array ('2',  '10022', 'Scoopy Tipe 2', 'Pertalite', '22.000.000'),
    array ('3',  '10023', 'Scoopy Tipe 3', 'Pertalite', '24.000.000'),
    array ('4',  '10024', 'Beat Tipe 1',   'Pertalite', '14.000.000'),
    array ('5',  '10025', 'Beat Tipe 2',   'Pertalite', '16.000.000'),
    array ('6',  '10026', 'Beat Tipe 3',   'Pertalite', '18.000.000'),
    array ('7',  '10027', 'Vario Tipe 1',  'Pertalite', '17.000.000'),
    array ('8',  '10028', 'Vario Tipe 2',  'Pertalite', '19.000.000'),
    array ('9',  '10029', 'Vario Tipe 3',  'Pertalite', '21.000.000'),
    array ('10', '10030', 'Nmax Tipe 1',   'Pertamax',  '28.000.000'),
    array ('11', '10031', 'Nmax Tipe 2',   'Pertamax',  '30.000.000'),
    array ('12', '10032', 'Nmax Tipe 3',   'Pertamax',  '32.000.000'),
    array ('13', '10033', 'Vespa Tipe 1',  'Pertamax',  '43.000.000'),
    array ('14', '10034', 'Vespa Tipe 2',  'Pertamax',  '54.000.000'),
    array ('15', '10035', 'Vespa Tipe 3',  'Pertamax',  '65.000.000'),
);
?>

<?php
$dataPenjualan2 = array(
    array ("Id Penjualan Perhari","Penjualan Motor Perhari","Jumlah Motor Terjual","Harga Motor"),
    array ("1009", "Penjualan Hari ke 1","3","76,416.000"),
    array ("10010","Penjualan Hari ke 2","4","106.416.000"),
    array ("10011","Penjualan Hari ke 3","7","176.416.000"),
    array ("10012","Penjualan Hari ke 4","8","199.427.000"),
);
?>

<?php
$dataPenjualan3 = array(
    array ("Id Penjualan Perminggu","Penjualan Motor Perminggu","Jumlah Motor Terjual","Harga Motor"),
    array ("1005","Penjualan Minggu ke 1","10","229.248.000"),
    array ("1006","Penjualan Minggu ke 2","13","294.748.000"),
    array ("1007","Penjualan Minggu ke 3","17","454.078.000"),
    array ("1008","Penjualan Minggu ke 4","20","548.079.000"),

);
?>
<table border="2" width="80%" height="500px">
    <?php
    foreach ($dataPenjualan1 as $r) 
    {
        echo "<tr>";
        foreach ($r as $c) 
        {
        echo "<td> $c </td>";
        }
        echo "</tr>";
    }
    ?>
</table>
<table border="2" width="80%" height="500px">
    <?php
    foreach ($dataPenjualan2 as $r) 
    {
        echo "<tr>";
        foreach ($r as $c) 
        {
        echo "<td> $c </td>";
        }
        echo "</tr>";
    }
    ?>
</table>
<table border="2" width="80%" height="500px">
    <?php
    foreach ($dataPenjualan3 as $r) 
    {
        echo "<tr>";
        foreach ($r as $c) 
        {
        echo "<td> $c </td>";
        }
        echo "</tr>";
    }
    ?>
</table>

<style>
    table 
    {
    color: black;
    margin: 30px;
    width: 50%; 
    position: relative;
    }
    th,td 
    {
    text-align: center;
    padding-right: 20px;
    padding-left: 20px;
    padding: 15px;
    border: 1.5px solid red;
    }
</style>

<?php
$MerekMotor = "Honda";
$HargaMotor = 24000000;
$Diskon     = 0;

    if ($MerekMotor === "Yamaha") 
    {
    $Diskon = 0.1 * $HargaMotor;
    } else if ($MerekMotor === "Honda")
    {
    $Diskon = 0.15 * $HargaMotor;
    } else {
    $Diskon = 0;
    }

    $TotalSetelahDiskon = $HargaMotor - $Diskon;
?>
<table>
    <tr>
    <th> Keterangan  </th>
    <th> Nilai-Nilai </th>
    </tr>

    <tr>
    <td> Jenis Motor </td>
    <td> <?php echo $MerekMotor; ?></td>
    </tr>

    <tr>
    <td> Harga Motor </td>
    <td> Rp: <?php echo number_format ($HargaMotor, 0, ',', '.'); ?> </td>
    </tr>

    <tr>
    <td> Diskon </td>
    <td> Rp: <?php echo number_format ($HargaMotor, 0, ',', '.'); ?> </td>
    </tr>

    <tr>
    <td> Total Setelah Diskon </td>
    <td> Rp: <?php echo number_format ($TotalSetelahDiskon, 0, ',', '.'); ?> </td>
    </tr>

</table>

<?php
$HargaMotor = 24000000;
$Jumlah_Pjln= 4;
?>
    <table>
        <tr>
        <th> Penjualan Kendaraan </th>
        <th> Harga Kendaraan     </th>
    </tr>
    <?php
        for ($i = 1; $i <= $Jumlah_Pjln; $i++)
        {
        $ttl = $HargaMotor * $i;
        echo "<tr><td> Penjualan Minggu ke $i</td><td> Rp: " . number_format($ttl,0, ',', '.') . "</td></tr>";
        }
?>
</table>
</body>

<?php
    $HargaMotor = 2000000;
    $Jumlah_Pjln= 4;
    ?>
        <table>
            <tr>
            <th> Penjualan Kendaraan </th>
            <th> Harga Kendaraan     </th>
        </tr>
        <?php
        $i = 1;

       while ($i <= $Jumlah_Pjln)
       {
       $ttl = $HargaMotor * $i;
       echo " <tr><td> Hari Penjualan $i </td><td> Rp: " . number_format($ttl,0, ',', '.') . "</td></tr>";
       $i++;
       }
?>
</table>

<?php
    $HargaMotor = 22000000;
    $Jumlah_Pjln= 4;
    $i          = 1;
    ?>
        <table>
            <tr>
            <th> Penjualan Kendaraan </th>
            <th> Harga Kendaraan     </th>
        </tr>
        <?php
        do 
       {
       $ttl = $HargaMotor * $i;
       echo "<tr><td> Hari Penjualan $i </td><td> Rp: " . number_format($ttl,0, ',', '.') . "</td></tr>";
       $i++;
       } while ($i <= $Jumlah_Pjln);
?>
</table>

<?php
$MerekMotor = "Yamaha";
$HargaMotor = 24000000;
$Diskon     = 0;

    switch ($MerekMotor) 
    {
    case "Yamaha":
    $Diskon = 0.1 * $HargaMotor; break;
    case "Piaggio":
    $Diskon = 0.15 * $HargaMotor; break;
    default:
    $Diskon = 0;
    } 
$TotalSetelahDiskon = $HargaMotor - $Diskon;
    echo "MerekMotor: $MerekMotor <br>";
    echo "HargaMotor: Rp: " . number_format ($HargaMotor, 0, ',', '.') . "<br>";
    if ($Diskon > 0) 
    {
    echo " Kamu Mendapatkan Diskon Motor Sebesar: Rp: ". number_format ($Diskon,0, ',', '.') . "<br>";
    }
    echo " Total Yang Harus Kamu Bayar: Rp: ". number_format ($TotalSetelahDiskon,0, ',', '.');

    


















 