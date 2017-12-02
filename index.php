<!DOCTYPE html>
<html lang="en">

<head>
    <title>Choice Homes</title>
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
            <section id="home-banner" class="banner-gap">
                <h2 class="banner-heading container">
                    Get Your Property
                </h2>
                <a href="#" class="enquiry-form-link container">
                    Enquire Now
                </a>
                <ul class="container list-bannerForm list-inline">
                    <li>
                        <select class="form-control">
                                <option value=null>Property Status</option>
                                <option value="rent">For Rent</option>
                                <option value="sale">For Sale</option>
                            </select>
                    </li>
                    <li>
                        <input type="text" class="form-control" placeholder="City or Pincode" />
                    </li>
                    <li>
                        <input type="text" class="form-control" placeholder="Price Range" />
                    </li>
                    <li>
                        <input type="text" class="form-control" placeholder="Required Area (Sq Ft)" />
                    </li>
                    <li>
                        <input type="text" class="form-control" placeholder="Your Mail" />
                    </li>
                    <li>
                        <button type="button" class="btn btn-default btn-block">Enquire Now</button>
                    </li>
                </ul>
            </section>
            <div class="clearfix"></div>

            <section id="home-about">
                <div class="container">
                    <div class="col-xs-12 col-sm-6 pull-right">
                        <div id="carousel-homeAbout" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="http://grandetest.com/theme/agra-html/images/sliders/img05.jpg" alt="Los Angeles" />
                                </div>

                                <div class="item">
                                    <img src="http://grandetest.com/theme/agra-html/images/sliders/img05.jpg" alt="Los Angeles" />
                                </div>
                            </div>
                            <i class="carousel-control-left fa fa-angle-left" data-target="#carousel-homeAbout" data-slide="prev"></i>
                            <i class="carousel-control-right fa fa-angle-right" data-target="#carousel-homeAbout" data-slide="prev"></i>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <h1 class="section-title">Welcome We Are <strong>Choice Home</strong></h1>
                        <p class="para">Their house is a museum where people come to see ‘em. They really are a scream the Addams Family. They're creepy and they're kooky mysterious and spooky.</p>
                        <p class="para">A shadowy flight into the dangerous world of a man who does not exist. Got kind of tired packin' and unpackin town to town and up and down the dial! So join us here each week my friends.</p>
                        <a class="link-knowMore" href="about-us.php">Know More <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </section>
        </main>

        <footer>
            <!-- Footer section included -->
            <?php include '_partial/footer.php' ?>
        </footer>
    </div>
</body>
<!-- Footer scripts included -->
<?php include '_partial/footer-scripts.php' ?>

</html>
