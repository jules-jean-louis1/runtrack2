<!-- 

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles1.php">
    <title>Jour06</title>
</head>
<body>
    <main>
        <form action="index.php" method="post" class="form-example">
            <select name="color">
                <option id="btn1" value="style1" name="sty1">Azure</option>
                <option id="btn2" value="style2" name="sty2">Green</option>
                <option id="btn3" value="style3" name="sty3">Black</option>
                <option id="btn4" value="style4" name="sty4">Brown</option>
                <input type="submit" value="valid" name="envoyer"><br />
            </select> <br /> <br /> 
        </form>
    </main>
</body>
</html> -->

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="style1.php"> -->
    <title>Document</title>
</head>
<body>
    <main>
        <div>Formulaire</div>
        <div>
            <?php
                $green = 'Green';
                $red = 'Red';
                $select = 'Blue';
                $styl = ['Blue','Green','Red',];
                
                echo "<select>";
                foreach ($styl as $colors) {
                    if ($select == $colors) {
                        echo "<option selected='select' value='$colors'>$colors</option>";
                        echo '<link href="/styles2.css" media="screen" rel="stylesheet" type="text/css" />';
                    } else {
                        echo "<option value='$colors'>$colors</option>";
                    }
                }echo "<input type='submit' value='envoi' name='envoyer'>";
                echo "</select>";
                

            ?>
            
        </div>
    </main>
</body>
</html>
