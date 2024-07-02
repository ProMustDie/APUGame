<?php include "db_conn.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
			display: flex;
			justify-content: center;
			align-items: center;
			flex-wrap: wrap;
			min-height: 100vh;
		}
		.alb {
			width: 200px;
			height: 200px;
			padding: 5px;
		}
        .alb img{
            width: 150px;
            padding: 5px;
        }
        a {
			text-decoration: none;
			color: black;
		}
    </style>
</head>
<body>
    <a href="index.php">&#8592;</a>
    <?php
        $sql = "SELECT * FROM sqlgame ORDER BY questionID ASC";
        $res = mysqli_query($connection, $sql);

        if(mysqli_num_rows($res) > 0){
            while ($images = mysqli_fetch_assoc($res)){ ?>

            <div class="alb">
                <img src="<?=$images['tableReference']?>" alt="">
            </div>


            <?php } 
        }?>
        
</body>
</html>
