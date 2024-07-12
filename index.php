<!DOCTYPE html>
<html lang="en">
<header>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ian Calbreath</title>
    <!-- Include CDN link to PDF.js library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.6.347/pdf.min.js"></script>
    <!-- CDN for bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
    <!-- //This is part of style for the theme -->
    <link rel="shortcut icon" href="assets/images/fav.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="assets/images/fav.jpg">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/plugins/slider/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/plugins/slider/css/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
    <!-- end the style for the theme -->
    
    <link rel="stylesheet" href="css/style.css">
</header>

<head>
    <?php include_once './componentWebsite/header.php' ?>
</head>

<body>
    <?php
    //ask if the variable ruta exist
    if (isset($_GET["ruta"])) {
        // ask if variable ruta have some of this values include in the variable and if exist
        if ($_GET["ruta"] == "default" || $_GET["ruta"] == "contact" || $_GET["ruta"] == "project") {
                // complete the path with the next instruction example ./componentWebsite/Page/default.php
            include_once './componentWebsite/Page/' . $_GET["ruta"] . '.php';
        } else {
                // else ruta not exist print text 404 page not found
            echo '<h1 class="display-1 text-center">404 Page not found<h1>';
        }
    }
    ?>


<footer class="container-fluid footer">
    <!-- this is the same instruction to include content to other document php. -->
    <?php include_once './componentWebsite/footer.php' ?>
</footer>

</body>

<!--js to load PDF. PDF.js load and display-->
<script src="./js/pdfViewer.js"></script>


<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
<script src="assets/plugins/slider/js/owl.carousel.min.js"></script>
<script src="assets/js/script.js"></script>

</html>