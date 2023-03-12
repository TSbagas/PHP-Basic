<html>
    <head>
        <title>Belajar Function PHP</title>
    </head>
    <body>
        <h1>Belajar membuat Function Di PHP</h1>
        <hr>
        <form action="" method='POST'>
            <input type="number" name="nilai1" id=""><br>
            <input type="number" name="nilai2" id=""><br>
            <select name="selec" id="">
                <option value=1>Luas_segitiga</option>
                <option value=2>Luas_persegi_panjang</option>
            </select><br>
            <input type="submit" name="" id="" value="simpan">
        </form>
        <?php
            $selects = $_POST['selec'];
            $n1 = $_POST['nilai1'];
            $n2 = $_POST['nilai2'];
            if ($n1 == '' || $n2 == '' ){
                echo 'Tidak ada nomor';
            } else {
                if ($selects == 1){
                    function luas_segitiga($n1,$n2){
                        $alas = $n1;
                        $tinggi = $n2;
                        $luas = 0.5 * $alas * $tinggi;
                        return $luas;
                    }
                    echo 'Luas segitiga adalah :' . luas_segitiga($n1,$n2);
                }
                    
                if($selects == 2){
                        function luas_persegi_panjang($n1,$n2){
                            $panjang = $n1;
                            $lebar = $n2;
                            $luas = $panjang * $lebar;
                            return $luas;
                }
                    echo 'Luas persegi panjang adalah :' . luas_persegi_panjang($n1,$n2);
            }
        }
            ?>
    </body>
</html>