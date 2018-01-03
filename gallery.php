<!DOCTYPE html>
<html lang="en" ng-app="galleryPage">

<head>
    <title>Gallery | Choice Homes</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- Head section included -->
    <?php include '_partial/head.php' ?>
</head>

<body class="clearfix">
    <div id="wrapper">
        <header>
            <!-- Header section included -->
            <?php include '_partial/header.php' ?>
        </header>

        <main>
            <section id="breadcrumb-section" class="banner-gap">
                <div class="container">
                    <h2 class="page-title">Gallery</h2>
                    <p class="breadcrumbs">
                        <a href="index.php" title="Home">Home</a>
                        <span>/ Gallery</span>
                    </p>
                </div>
            </section>
            <div class="clearfix"></div>
            
            <section id="gallery-page">
                <div class="container">
                    <ul class="list-inline gallery-filters" ng-controller="galleryFilters">
                        <li ng-repeat="type in galleryTypes">
                            <a href="#" class="filter-nav" data-filters="{{type.value}}">{{type.name}}</a>
                        </li>
                    </ul>
                    <ul class="list-inline gallery-contents" ng-controller="galleryContents">
                        <li ng-repeat="content in galleryContents" ng-class="content.type" class="gallery-content">
                            <a data-target="{{content.type}}" data-toggle="modal" class="gallery-box" style="background-image:url({{content.thumbnail}})" data-file="{{content.file}}" data-alt="{{content.alt}}" data-title="{{content.title}}">
                            </a>
                        </li>
                    </ul>
                </div>
            </section>
        </main>
        
        <div class="modal fade" id="gallery-modal" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header"><button type="button" class="close" data-dismiss="modal">&times;</button><h4 class="modal-title"></h4></div>
                    <div class="modal-body"></div>
                </div>
            </div>
        </div>
        
        <footer>
            <!-- Footer section included -->
            <?php include '_partial/footer.php' ?>
        </footer>
    </div>
</body>
<!-- Footer scripts included -->
<?php include '_partial/footer-scripts.php' ?>
</html>