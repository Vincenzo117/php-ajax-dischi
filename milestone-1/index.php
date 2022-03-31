<?php
include './server.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/styles/app.css">
    <title>Document</title>
</head>

<body>
    <div id="app-container">
        <header>
            <div class="container">
                <figure>
                    <img class="header__logo" src="./assets/img/logo.png" alt="" />
                </figure>
            </div>
        </header>

        <main>
            <div class="container">
                <div class="records-wrapper">
                    <?php
                    foreach ($data as $key => $value) {
                    ?>
                        <div class="record">
                            <figure class="record__thumb">
                                <img src="<?php echo $value['poster'];?>" alt="" />
                            </figure>
                            <h3 class="record__title"><?php echo $value['title'];?></h3>
                            <div class="record__info">
                                <div class="record__author"><?php echo $value['author'];?></div>
                                <div class="record__year"><?php echo $value['year'];?></div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </main>
    </div>
</body>

</html>