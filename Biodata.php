<!DOCTYPE html>
<html>
    <body>
    
        <?php
        $nama = "TS BAGAS CHARAN ";
        $kelas = "XI";
        $jurusan = "Pengembangan perangkat lunka dan gim (PPLG)";
        
        ?>
        <h1 style="color:red"><?= "BIODATA"?></h1>
        <hr>
        <table>
            <tr>
                <td>Nama</td>
                <td>: </td>
                <td style="background-color: orange;"><?= $nama ?> </td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td>: </td>
                <td><?= $kelas ?> </td>

            </tr>
            <tr>
                <td>Jurusan</td>
                <td>: </td>
                <td><?= $jurusan ?> </td>
            </tr>
        </table>
        <hr>
        <h2> <i> Latihan variable dengan PHP</i></h2>
</body>
</html>