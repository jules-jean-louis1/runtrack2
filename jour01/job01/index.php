
<?php 
$str="La Plateforme";
$str2="Vive";
$str3="!";
$val='6';
$addition=$val +('4');
$myBool=true;
$myBool2=false;
?>



<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="job01-php.css">
    <title>Doc PHP</title>
</head>
<body>
    <main>
        <section>
            <div class="job01_test">
                <?php
                echo $str;
                echo "<br>" . $str2 . ' ' . $str . ' ' . $str3;
                echo "<br>" . $val;
                echo "<br>" . $addition;
                echo "<br>" . $myBool;
                echo "<br>" . $myBool2;
                ?>
            </div>
        </section>
    </main>
</body>
</html>