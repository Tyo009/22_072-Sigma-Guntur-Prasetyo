<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
     initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="coba2.css">
</head>

<body>
    <?php
    $angka1 = $_POST['angka1'];
    $angka2 = $_POST['angka2'];
    $hasil = $_POST['hasil'];

    if(isset($_POST['tambah']));
    {
        $hasil = $angka1+ $angka2;
    }
    if(isset($_POST['kurang']))
    {
        $hasil= $angka1 - $angka2;
    }
    if(isset($_POST['kali']))
    {
        $hasil= $angka1 * $angka2;
    }
    if(isset($_POST['bagi']))
    {
        $hasil= $angka1 / $angka2;
    }
    if(isset($_POST['pangkat']))
    {
        $hasil= $angka1 ** $angka2;
    }

    if(isset($_POST['persen']))
    {
        $hasil= $angka1*$angka2/100;
    }
    if(isset($_POST['clear']))
    {
        $angka1 = null;
        $angka2 = null;
        $hasil = null;
    }
    ?>
        <h1>KALKULATOR</h1>
        <form action="" method="POST" >
            <table  align="center" bgcolor="aqua">
                <tr>
                    <td>Masukkan Angka Pertama</td>
                    <td></td>
                    <td><input type="text" placeholder="Angka Pertama"name="angka1" value="<?=$angka1?>"></td>
                </tr>
                <tr>
                    <td>Masukkan Angka Kedua</td>
                    <td></td>
                    <td><input type="text" name="angka2" placeholder="Angka Kedua" value="<?=$angka2?>"></td>
                </tr>
                <tr>
                    <td>Hasil</td>
                    <td></td>
                    <td><input type="text" placeholder="Hasil" name="hasil" value="<?=$hasil?>" ></td>
                </tr>
                <tr>
                    <td colspan="3" > 
                    <button type="submit" name="tambah" value="+" >+</button>
                    <button type="submit" name="kurang" value="-">-</button>
                    <button type="submit" name="kali" value="x">x</button>
                    <button type="submit" name="bagi" value="/">/</button>
                    <button type="submit" name="pangkat" value="^2">^2</button>
                    <button type="submit" name="persen" value="%">%</button>
                    <button type="submit" name="clear" value="C">C</button>
                    </td>
                </tr>
            </table>
        </form>

    </body>
    </html>