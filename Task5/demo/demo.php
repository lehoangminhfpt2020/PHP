<html>
    <head>
        <title>demo PDO</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
        <?php
            include 'connect_db.php';
            $result = mysqli_query($connect,"SELECT * FROM `menu`" );
            mysqli_close($connect);
            echo '<br>';
            while ($row = mysqli_fetch_array($result)){
                echo $row['ID'].'<br>';
            }
            ?>


    </body>
</html>
