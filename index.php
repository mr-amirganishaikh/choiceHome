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
                                    <img src="img/about-us1.jpg" alt="Los Angeles" />
                                </div>

                                <div class="item">
                                    <img src="img/about-us2.jpg" alt="Los Angeles" />
                                </div>
                                
                                <div class="item">
                                    <img src="img/about-us3.jpg" alt="Los Angeles" />
                                </div>
                            </div>
                            <i class="carousel-control-left fa fa-angle-left" data-target="#carousel-homeAbout" data-slide="prev"></i>
                            <i class="carousel-control-right fa fa-angle-right" data-target="#carousel-homeAbout" data-slide="next"></i>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <h1 class="section-title">Welcome We Are <strong>Choice Home</strong></h1>
                        <p class="para">Choice Home is a full-service real estate development company. Our objective is to be a profitable leader in commercial, retail and residential real estate.</p>
                        <a class="link-knowMore" href="about-us.php">Know More <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </section>
            
            <div class="clearfix"></div>
            
            <section id="home-project">
                <div class="container">
                    <h1 class="section-title">Our <strong>Projects</strong></h1>
                    <div class="col-xs-12 col-sm-6">                        
                        <div class="col-xs-12 col-sm-12 prj-hover prj-img01" style="height:auto">
                            <a href="projects.php">
                                <img src="img/project-img/phoneix-market.jpg" class="img-responsive" style="width:100%;height:100%;">
                                <div class ="prj-text">
                                    <h5>PHEONIX MARKET RENNOVATION</h5>
                                    <p>Designed as a ‘city within a city’.  </p>
                                </div>
                            </a>
                        </div>                        
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <!--<div class="col-xs-12 col-sm-12 prj-hover prj-img02">
                            <a href="projects.php">
                                <img src="img/project-img/img02.jpg" class="img-responsive">
                                <div class ="prj-text">
                                    <h5>PHEONIX MARKET RENNOVATION</h5>
                                    <p>Designed as a ‘city within a city’. </p>
                                </div>
                            </a>
                        </div> -->  
                        <div class="col-xs-12 col-sm-12 prj-hover prj-img03" style="margin-bottom: 25px;">
                            <a href="projects.php">
                                <img src="img/project-img//kohinoor-city.jpg" class="img-responsive">
                                <div class ="prj-text" style="padding-bottom:10px;">
                                    <h5 style="font-size:1.1rem">KOHINOOR CITY KURLA INN</h5>
                                </div>
                            </a>
                        </div>
                        <div class="col-xs-12 col-sm-12 prj-hover prj-img03">
                            <a href="projects.php">
                                <img src="img/project-img/bkc.jpg" class="img-responsive">
                                <div class ="prj-text" style="padding-bottom:10px;">
                                    <h5 style="font-size:1.1rem">BKC X CENTER</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3" style="margin-bottom:25px;">
                        <div class="col-xs-12 col-sm-12 prj-hover prj-img03">
                            <a href="projects.php">
                                <img src="img/project-img/phoneix-art-guild.jpg" class="img-responsive">
                                <div class ="prj-text" style="padding-bottom:10px;">
                                    <h5 style="font-size:1.1rem">PHOENIX ART GUILD CENTER</h5>
                                </div>
                            </a>
                        </div> 
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="col-xs-12 col-sm-12 prj-hover prj-img04">
                            <a href="projects.php">
                                <img src="img/project-img/phoneix-paragon.jpg" class="img-responsive">
                                <div class ="prj-text" style="padding-bottom:10px;">
                                    <h5 style="font-size:1.1rem">PHOENIX PARAGON RENNOVATION</h5>
                                </div>
                            </a>
                        </div> 
                    </div>
                </div>
            </section>
            
            <div class="clearfix"></div>
            
            <section id="home-testimonial">
                <div class="container">
                    <div class="col-xs-12 col-sm-12 testimonial-bg">
                        <div id="Carousel-homeTesti" class="carousel slide" data-ride="carousel" data-interval= "false">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#Carousel-homeTesti" data-slide-to="0" class="active"></li>
                                <li data-target="#Carousel-homeTesti" data-slide-to="1"></li>
                                <li data-target="#Carousel-homeTesti" data-slide-to="2"></li>
                            </ol>

                          <!-- Wrapper for slides -->
                          <div class="carousel-inner">
                                <div class="item active">
                                    <div class="testi-img">
                                        <img src="img/testimonial01.png" alt="Chania">
                                    </div>
                                    <div class="carousel-caption">
                                        <h3>Thomas More</h3>
                                        <h4>R. W. Construction Inc.</h4>
                                        <p>Quisque velit nisi, pretium ut lacinia in, elementum id enim. Nulla quis lorem ut libero malesuada feugiat. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Pellentesque in ipsum id orci porta dapibus. Nulla porttitor accumsan tincidunt. Curabitur aliquet quam id dui posuere blandit. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Donec rutrum congue leo eget malesuada. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Nulla quis lorem ut libero malesuada feugiat.</p>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="testi-img">
                                        <img src="img/testimonial01.png" alt="Chania">
                                    </div>
                                    <div class="carousel-caption">
                                        <h3>John Bravo</h3>
                                        <h4>JB Constructions Pvt Ltd</h4>
                                        <p>Donec sollicitudin molestie malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Proin eget tortor risus. Cras ultricies ligula sed magna dictum porta. Donec sollicitudin molestie malesuada. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem.</p>
                                    </div>
                                </div>

                              <div class="item">
                                  <div class="testi-img">
                                        <img src="img/testimonial01.png" alt="Chania">
                                    </div>
                                    <div class="carousel-caption">
                                        <h3>Kashif Sayed</h3>
                                        <h4>Kreative Sanity</h4>
                                        <p>Quisque velit nisi, pretium ut lacinia in, elementum id enim. Nulla quis lorem ut libero malesuada feugiat. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Pellentesque in ipsum id orci porta dapibus. Nulla porttitor accumsan tincidunt. Curabitur aliquet quam id dui posuere blandit. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Donec rutrum congue leo eget malesuada. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Nulla quis lorem ut libero malesuada feugiat.</p>
                                    </div>
                              </div>
                          </div>
                        </div>
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
