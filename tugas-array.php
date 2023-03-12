<html>
    <head>
        <title> TUGAS ARRAY PHP</title>
    <head>
        <link rel="stylesheet" href="ok.css">
        <body>
            
            <?php
                $hari = array("SENIN","SELASA","RABU","KAMIS","JUMAT","SABTU","MINGGU");
                for($i=0;$i<=6;$i++){
                    echo "<div class='fr'> $hari[$i] </div>";
                }
            ?>
            <h3>Looping dengan FOR</h3>
            <div class='body'></div>
            <?php
            $hari = array("SENIN","SELASA","RABU","KAMIS","JUMAT","SABTU","MINGGU");
            foreach ($hari as $hr) {
                echo "<div class='foreach'> $hr </div>";
            }
            ?>
            <h3>Looping dengan FOREACH</h3>

        </body>
</html>
