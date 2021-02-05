<!DOCTYPE html>
<html lang="fi">
    <head>
        <meta charset="utf-8">
        <title>Kotitehtävä 8 - Laskin</title> 
    </head>
<body>

    <form method="GET">
    <h1>Stiinan laskin jee</h1>
    <p>Syötä haluamasi luvut ja valitse laskutoimitus.</p>
        <ul>
     <ol> Kertominen: * </ol>
     <ol> Vähentäminen: - </ol>
     <ol> Jakaminen: / </ol>
     <ol> Yhteenlasku: + </ol>
        </ul>
     <p>Syötä ensimmäinen luku:</p>
        <input type="number" name="luku1">
        <p>Syötä toinen luku:</p>
        <input type="number" name="luku2">
        <p>Syötä laskutoimituksen symboli:</p>
        <input type="text" name="symbol">
        <button>Laske!</button>
    </form>
    <?php
    $luku1= $_GET['luku1'];
    $luku2= $_GET['luku2'];
    $symbol =$_GET['symbol'];

    if($symbol == '+')
    {
        $add = $luku1 + $luku2;
        echo "<br>";
        echo "Yhteenlaskun tulos:".$add;   
    }
    else if($symbol == '-')
    {
        $subs = $luku1 - $luku2;
        echo "<br>";
        echo "Erotuksen tulos:".$subs;
    }
     else if($symbol == '*')
    {
        $mul = $luku1 * $luku2;
        echo "<br>";
        echo "Tulo on:".$mul;
    }
    else if($symbol == '/')
    {
        $div = $luku1 / $luku2;
        echo "<br>";
        echo "Osamäärä on:".$div;
    }
    ?>
    </body> 
</html>