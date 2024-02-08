<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Harjutused</title>
</head>
<body>
        <h1>Harjutused 04</h1>
            <?php
              $p = 4;
              switch ($p) {
                case ($p > 10):
                    echo "SUPER!";
                    break;

                case ($p>=5 && $p<=9):
                    echo "TEHTUD!";
                    break;
                case ($p<5):
                     echo "KASIN!";
                    break;
                default:
                    echo "Punkte pole lisatud";
                    break;
              }  
            ?>


        <form action=""method="get">
                Lisa sünniaasta: <input type="number" name="synd"
                min="1900" max="2100" placeholder="2000">
                <input type="submit" value="Leia juubel"><br>
                </form>

                <?php
                if (!empty($_GET['synd'])) {
                    $aasta = $_GET ['synd']; //tüübi sünniaasta
                    $seeaasta = date('Y'); //käesolev aasta
                    $vanus= $seeaasta - $aasta; //vanus
                    //var_dump ($aasta);     //testimiseks
                    if ($vanus % 5 == 0) { // jääk, et leida juubel
                        echo "Sul juubel";

                    } else {
                        echo "Ei ole juubel";
                    }
                }

                ?>

        <?php
            $nr1= 5;
            $nr2= 5;

            //< > >= <= == !=  true false
            // or - VÕI || - üks õige
            // and - NING &&- mõlemad õiged
            if ($nr2 != 0 && $nr1 !=0) {
                $tehe= $nr1 / $nr2;
                echo $tehe;
            } 
            else {
                echo "Nulliga ei saa jagada!";
            }
          
           

        ?>

    <h1>Harjutused 03</h1>
    <!-- 
        action - fail kuhu saadetaske
        method - kuidas saadetakse GET on valik, POST on peidetud
     -->
     <form action="" method="GET">
            Toode 1: <input type="number" name="toode1"><br>
            Toode 2: <input type="number" name="toode2"><br>
            Toode 3: <input type="number" name="toode3"><br>

            <input type="submit" value ="Arvuta"> <br>

        </form>
        <?php
            if(!empty($_GET['toode1']) &&
             !empty ($_GET['toode2']) &&
             !empty ($_GET['toode3'])) {
                
            // GETiga saatsin, GETiga võtan
            $t1 = $_GET['toode1'];
            $t2 = $_GET['toode2'];
            $t3 = $_GET['toode3'];
            $kokku = $t1+$t2+$t3;

            echo "Toode 1: $t1 tk<br>"; 
            echo "Toode 2: $t2 tk<br>";
            echo "Toode 3: $t3 tk<br>";
            echo "Kõik kokku: $kokku tk";
            }
        ?>

    <h1> Harjutused 02</h1>
    <?php   
        $arv1 = 5;                 //int
        $arv2 = 3.14;             //float
        $tehe = $arv1/$arv2;     
        $jaak = $arv1 % $arv2;   // jääk

        echo "Vastus: $tehe <br>";
        printf ("vastus: %d / %0.2f = %0.2f<br>", $arv1, $arv2, $tehe);
        echo $jaak;

    ?>

    <h1>Harjutused 01</h1>
    <?php
    /*
    Harjutus 01
    8.2.24
    Lihtsalt harjutan
    */
        $enimi="Piret";    //String
        $pnimi= "Ploompuu";
        $v=37;
        $pikkus = 1.69;
        // $enimi = "Mari";
        $hyydnimi = "boss";
        $lugu = 'Dr. Alban - "It\'s My Life"';

    
    echo "<p>Tere $enimi \"$hyydnimi\" $pnimi!<br>";
    echo "Vanus: $v<br>Pikkus: $pikkus</p>";
    echo '<p>Lemmik lugu on: '.$lugu.'</p>'; //punkt on elementide kokku liitmiseks

    ?>
</body>
</html>