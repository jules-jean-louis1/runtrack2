<?php
$noteTab = [1,2,5,9];
$nVirguleTab = ['9,48','14,50','18,66','50,51'];
$motTab = ['Bonjour' , 'tous' , 'le' , 'monde' , '!'];
$myBool =[true,false];
$type=['boolean','entier','chaîne de caractères', 'nombre à virgule flottante'];
$tableau1 = 
[
    2,
    '9.48',
    'Hello',
    true,
    false,
    '14,50',
];
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="job03.css">
    <title>Document</title>
</head>
<body>
    <header>
        <table id="tableau_01">
            <tr>
                <th id="01">Type</th>
                <th>Nom</th>
                <th>Valeur</th>
            </tr>
        </table>
    </header>
    <main>
        <section>
        <table>
            <tr>
                <td><?php echo $type [3]?></td>
                <td><?php echo $motTab [0]?></td>
                <td><?php echo $nVirguleTab [0]?></td>
            </tr>
            <tr>
                <td><?php echo $type [1]?></td>
                <td><?php echo $motTab [1]?></td>
                <td><?php echo $noteTab [1]?></td>
            </tr>
            <tr>
                <td><?php echo $type [1]?></td>
                <td><?php echo $motTab [2]?></td>
                <td><?php echo $noteTab [2]?></td>
            </tr>
            <tr>
                <td><?php echo $type [0]?></td>
                <td><?php echo $motTab [3]?></td>
                <td><?php echo $noteTab [0]?></td>
            </tr>
        </table>
        </section>
    </main>
</body>
</html>
