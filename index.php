<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan Literature</title>
    <link rel="shortcut icon" href="icon.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    include_once("navbar.php");
    ?>
    <div class="banner">
        <div class="title">
            <h1>Perpustakaan Literature</h1>
            <p>Membaca adalah jendela ilmu</p>
        </div>
    </div>
    <div class="top-book">
        <p class="fs-1 fw-bold text-center">Buku Populer</p>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card h-100">
                    <img src="200x100.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente molestiae perspiciatis provident aperiam quam maiores. Ea fugiat voluptates tempore assumenda repudiandae error, distinctio tempora consectetur delectus quasi! Tenetur, quaerat autem?</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="200x100.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus ipsa dicta distinctio soluta iusto voluptatum fugiat, sint eius! Corrupti et mollitia, aliquid quisquam voluptatem consectetur nesciunt magni obcaecati doloremque aspernatur.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="200x100.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam illo molestias natus dolorem itaque praesentium, ipsam consequatur doloribus molestiae, non nihil, ab iste similique fugit enim unde corrupti delectus! Provident!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>