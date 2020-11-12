<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h3>Кресла-качалки МИ</h3>
    </header>
    <div class="gallery">
        <?php 
            include 'gallery.php';
            echo $Gallery;
        ?>
    </div>
    <div class="form_up">
        <form action="upload_limit.php" method="POST" enctype="multipart/form-data">
            <input type="file" name="filename" id=""><br/>
            <input type="submit" value="Загрузить">
        </form>
    </div>
    <div id="modal1" class="modal_div">
        <span class="modal_close">X</span>
        <div id="big_img"></div>
     </div>
     <div id="overlay"></div>

     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     <script src="script.js"></script>
</body>
</html>