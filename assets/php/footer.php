<?php include_once $_SERVER["DOCUMENT_ROOT"] . "/assets/php/contact-us.php"; ?>
<footer class="col center horizontal vertical">
    <img class="logo" src="/assets/images/logo.svg" alt="">
    <div class="row">
        <a href="/" class="nav-item <?php echo $page == 0 ? "selected" : ""; ?>" title="Goto the home page">Home</a>
        <a href="/packages" class="nav-item <?php echo $page == 2 ? "selected" : ""; ?>" title="Goto the packages page">Packages</a>
        <a href="/gallery" class="nav-item <?php echo $page == 3 ? "selected" : ""; ?>" title="Goto the gallery page">Gallery</a>
    </div>
</footer>