<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
        }
    </style>
</head>
<body>


<table border="1">
    <?php for($i=1; $i<=9; $i++): ?>
    <tr>
        <?php for($k=1; $k<=9; $k++): ?>

        <td><?= sprintf('%s * %s = %s', $i,$k,$i*$k) ?></td>
         <?php endfor ?>

    </tr>
    <?php endfor ?>
</table>

</body>
</html>