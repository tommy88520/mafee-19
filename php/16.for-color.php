<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
        }

        td {
            width: 30px;
            height: 30px;
        }

        tr {
            width: 30px;
            height: 30px;
        }
    </style>
</head>

<body>


    <table border="1">
        <?php for ($i = 0; $i < 256; $i += 17) : ?>
            <tr">
                <?php for ($k = 0; $k < 256; $k += 17) : ?>
                    <td style="background-color: #<?= sprintf("%'02X%'02X", $i, $k) ?>00;"></td>
                <?php endfor ?>
                </tr>
            <?php endfor ?>

            <!-- 整個區塊註解 -->
            <?php /*
            <?php for ($i = 0; $i < 256; $i += 17) : ?>
            <tr">
                <?php for ($k = 0; $k < 256; $k += 17) : ?>
                    <td style="background-color: #<?= sprintf("%'02X%'02X", $i, $k) ?>00;"></td>
                <?php endfor ?>
                </tr>
            <?php endfor ?>
            */?>
    </table>

</body>

</html>