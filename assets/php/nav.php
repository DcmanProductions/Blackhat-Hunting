<?php
if (!isset($page)) $page = -1;
?>

<nav class="row center vertical">
    <a id="brand" href="/" class="fa-solid fa-hat-cowboy"></a>
    <div id="nav-items" class="row">
        <a href="/" class="nav-item <?php echo $page == 0 ? "selected" : ""; ?>" title="Goto the home page">Home</a>
        <a href="/about" class="nav-item <?php echo $page == 1 ? "selected" : ""; ?>" title="Goto the about page">About</a>
        <a href="/packages" class="nav-item <?php echo $page == 2 ? "selected" : ""; ?>" title="Goto the packages page">Packages</a>
        <a href="/gallery" class="nav-item <?php echo $page == 3 ? "selected" : ""; ?>" title="Goto the gallery page">Gallery</a>
    </div>
    <div id="social-buttons">
        <a href="https://maineadventures.org" class="btn" title="View Maine Adventures site" target="_blank">maine adventures</a>
    </div>
</nav>

<script src="/assets/js/min/nav.min.js"></script>