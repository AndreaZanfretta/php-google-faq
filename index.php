<?php
include 'data.php';


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Domande Frequenti - Privacy e termini</title>
</head>
<body>
    <header>
        <div class="nav">
            <div class="logo">
                <img src="img/logo.svg" alt="Google-logo">
                <h4>Privacy e termini</h4>
            </div>
            <div class="nav-menu">
                <ul><?php foreach($links as $key => $link){ ?>
                    <li><?php echo $link;  ?></li>
                    <?php } ?>
                </ul>

            </div>
        </div>
    </header>
    <main>
        <div class="container">
            <?php foreach($QA as $element) { 
                echo $element['question'];
                echo $element['answer'];
            }
            ?>
        </div>
    </main>
</body>
</html>