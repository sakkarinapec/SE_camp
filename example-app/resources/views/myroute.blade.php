<html>
<head>
    <meta charset="utf-8">
</head>
<body>
   <style>
        .srcoll-box{
            width: 150;
            height:350;
            overflow: auto;
            padding: 10px;
            border:4px solid #000000 ;
            background-color:#bfedf9 ;

        }
    </style>
</body>
<body>
    <?php $multi_x = $myinput; ?>
    <h1>ตารางสูตรคูณ แม่ <?php echo $multi_x ?></h1>
    <div class="srcoll-box">
    <table>
        <tbody>
           <?php
            for ($i = 1; $i <= 24; $i++) {
                $result = $multi_x * $i;
            ?>
                <tr>
                    <td><?php echo $multi_x; ?></td>
                    <td>x</td>
                     <td><?php echo $i; ?></td>
                    <td>=</td>
                    <td><?php echo $result; ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    </div>
    <style>
        table {
            width: 10px;
            height: 200px;
        }
    </style>
</body>
</html>
