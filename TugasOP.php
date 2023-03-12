<html>
    <head>
        <title></title>
    </head>
    <body>
        <h1>Calc Sederhana</h1>
        <form action="" method="POST">
        Nilai 1 : <input type="number" name='angka1'><br><br>
        Nilai 2 : <input type="number" name='angka2'><br><br>
            <input type="submit" name='tombol' value='+'>
            <input type="submit" name='tombol' value='-'>
            <input type="submit" name='tombol' value='*'>
            <input type="submit" name='tombol' value='/'><br>
        </form>
       
        <?php 
        $a1 = $_POST['angka1'];
        $a2 = $_POST['angka2'];
        $tb = $_POST['tombol'];

        if($a1 == '' || $a2 == ''){
            echo 0;
        }else if($tb == '+'){
            function tambah($a1,$a2){
                $hasil = $a1 + $a2;
                return $hasil;
            }
            $hasil = tambah($a1,$a2);
        }
        else if($tb == '-'){
            function kurang($a1,$a2){
                $hasil = $a1 - $a2;
                return $hasil;
            }
            $hasil = kurang($a1,$a2);
        }else if($tb == '*'){
            function kali($a1,$a2){
                $hasil = $a1 * $a2;
                return $hasil;
            }
            $hasil = kali($a1,$a2);

        }else if($tb == '/'){
            function bagi($a1,$a2){
                $hasil = $a1 / $a2;
                return $hasil;
            }
            $hasil = bagi($a1,$a2);

        }else{
            echo '';
        }
            
        ?>
        <input type="number" value=<?= $hasil ?> disabled>
    </body>
</html>