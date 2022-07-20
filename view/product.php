<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <link rel="stylesheet" href="css/product.css">
    <script src="js/product.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    <script src="js/jquery.star-rating-svg.js"></script>
    <link rel="stylesheet" type="text/css" href="css/star-rating-svg.css">
</head>
<body>
    <?php 
    
    include '../controler/Coment.php';
    $coment = new Coment();
    $data = $coment ->display_coment();
    include 'header.php'; ?>

    <main>
        <div class="container">

            <div class="souscontainer">
                <h1>Coaching</br>solo </h1>
                <button id="btndown" class="material-symbols-outlined" onclick="showandhide(1)">add_circle</button>
                <img id="imgcoach" src="img/coachingsolo.jpg" alt="" width="400">
                <p id="imgtext1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, qui, vel dignissimos provident consequatur officiis nobis enim repellendus possimus explicabo ipsum doloribus repellat asperiores at quidem beatae odio aut harum quis, nesciunt cumque. Magni aut cumque quia. Eum a recusandae dolores molestiae libero quas quam dolorem incidunt dicta alias. Mollitia labore modi earum dolore itaque minima necessitatibus architecto pariatur officiis repudiandae. Est cum quae harum odio dignissimos, ex laborum nemo quod. Eaque nam quo natus quam! Est fugiat officiis sint, provident assumenda veritatis omnis necessitatibus, eligendi odio eius deleniti distinctio illum! Dignissimos, esse? Recusandae, sed quo natus libero quas expedita.</p>
            </div>

            <div class="souscontainer">
                <h1>Coaching</br>personnalisé </h1>
                <button id="btndown" class="material-symbols-outlined" onclick="showandhide(2)">add_circle</button>
                <img id="imgcoach" src="img/coachingperso.jpg" alt="" width="400">
                <p id="imgtext2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, qui, vel dignissimos provident consequatur officiis nobis enim repellendus possimus explicabo ipsum doloribus repellat asperiores at quidem beatae odio aut harum quis, nesciunt cumque. Magni aut cumque quia. Eum a recusandae dolores molestiae libero quas quam dolorem incidunt dicta alias. Mollitia labore modi earum dolore itaque minima necessitatibus architecto pariatur officiis repudiandae. Est cum quae harum odio dignissimos, ex laborum nemo quod. Eaque nam quo natus quam! Est fugiat officiis sint, provident assumenda veritatis omnis necessitatibus, eligendi odio eius deleniti distinctio illum! Dignissimos, esse? Recusandae, sed quo natus libero quas expedita.</p>
            </div>
                
            <div class="souscontainer">
                <h1>Coaching</br>Duo </h1>
                <button id="btndown" class="material-symbols-outlined" onclick="showandhide(3)">add_circle</button>
                <img id="imgcoach" src="img/coachingduo.JPG" alt="" width="400">
                <p id="imgtext3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, qui, vel dignissimos provident consequatur officiis nobis enim repellendus possimus explicabo ipsum doloribus repellat asperiores at quidem beatae odio aut harum quis, nesciunt cumque. Magni aut cumque quia. Eum a recusandae dolores molestiae libero quas quam dolorem incidunt dicta alias. Mollitia labore modi earum dolore itaque minima necessitatibus architecto pariatur officiis repudiandae. Est cum quae harum odio dignissimos, ex laborum nemo quod. Eaque nam quo natus quam! Est fugiat officiis sint, provident assumenda veritatis omnis necessitatibus, eligendi odio eius deleniti distinctio illum! Dignissimos, esse? Recusandae, sed quo natus libero quas expedita.</p>
            </div>
        </div>


        <div class="addcoment">
            <h1>Donnez votre avis :</h1>
            <div class="my-rating"></div>
            <form action="../controler/add_coment.php" method="POST">
                <textarea rows="4" cols="50" name="message"></textarea>
                <input type="hidden" id="star-rate" name="stars" value="4">
                <input type="submit" value="Publié">
            </form>
        </div>

        <div class="coment">
            <hr width="50%">
            <div class="undercoment">

            <?php foreach($data as $datum){?>
                <div class="acoment">
                    <?php
                    switch ($datum['stars']) {
                        case 1:
                            echo '<div class="rated1"></div>';
                            break;
                        case 2:
                            echo '<div class="rated2"></div>';
                            break;
                        case 2.5:
                            echo '<div class="rated25"></div>';
                            break;
                        case 3:
                            echo '<div class="rated3"></div>';
                            break;
                        case 3.5:
                            echo '<div class="rated35"></div>';
                            break;
                        case 4:
                            echo '<div class="rated4"></div>';
                            break;
                        case 4.5:
                            echo '<div class="rated45"></div>';
                            break;
                        case 5:
                            echo '<div class="rated5"></div>';
                            break;
                    }
                    ?>
                    
                    <hr width="25%">
                    <p><?php echo $datum['name']; ?></p>
                    <p><?php echo $datum['date']; ?></p>
                    <p><?php echo $datum['message']; ?></p>
                </div>
            <?php } ; ?>

            </div>
        </div>
        
    </main>


    <?php include 'footer.php'; ?>
</body>
</html>