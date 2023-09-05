<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $title = "Gallery";
    include_once $_SERVER['DOCUMENT_ROOT'] . "/assets/php/header.php"
    ?>
    <link rel="stylesheet" href="/assets/css/min/home.min.css">
    <link rel="stylesheet" href="/assets/css/min/gallery.min.css">
    <script src="/assets/js/min/gallery.min.js"></script>
</head>

<body>
    <?php
    $page = 3;
    include_once $_SERVER["DOCUMENT_ROOT"] . "/assets/php/nav.php";
    ?>
    <div id="landing" class="col center horizontal vertical short">
    </div>

    <h1>Gallery</h1>

    <div class="center horizontal">
        <div id="gallery" class="grid">
            <?php
            $dir = $_SERVER['DOCUMENT_ROOT'] . "/assets/images/gallery/";
            $items = scandir($dir);
            if ($items) {
                $files = array();
                foreach ($items as $image) {
                    if (!is_dir($dir . $image)) {
                        array_push($files,  $image);
                        echo '
                    <div class="gallery-image" style="background-image: url(\'/assets/images/gallery/sm/' . $image . '\')">
                    <img src="/assets/images/gallery/' . $image . '" alt="" loading="lazy">
                    </div>
                    ';
                    }
                }
            }
            ?>
        </div>
    </div>
    <?php include_once $_SERVER["DOCUMENT_ROOT"] . "/assets/php/footer.php"; ?>

</body>

</html>