<html>
    <body>
    <?php 
        $nilai_a = 2;
        $nilai_b = 3;
        $hasil = $nilai_a + $nilai_b;
        $hasil2 = $nilai_b - $nilai_a;
        $hasil3 = $nilai_a * $nilai_b;
        $hasil4 = $nilai_b / $nilai_a;
        $hasil5 = $nilai_a % $nilai_b;
        $hasil6 = $nilai_a ** $nilai_b;
    ?>
        <h3>Nilai A = <?= $nilai_a ?> </h3>
        <h3>Nilai B = <?= $nilai_b ?> </h3>
        <h3>Hasil Penjumlahan Antara nilai A dan B = <?= $hasil ?> </h3>
        <h3>Hasil Pengurangan Antara nilai B dan A = <?= $hasil2 ?> </h3>
        <h3>Hasil Perkalian Antara nilai A dan B = <?= $hasil3 ?> </h3>
        <h3>Hasil Pembagian Antara nilai B dan A = <?= $hasil4 ?> </h3>
        <h3>Hasil bagi Antara nilai B dan A = <?= $hasil5 ?> </h3>
        <h3>Hasil pERPANGKTAN Antara nilai A dan B = <?= $hasil6 ?> </h3>
    </body>

</html>