<!DOCTYPE html>
<html>
    <head>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="styles.css" rel="stylesheet">
        <script src="js/bootstrap.bundle.min.js"></script>
        

    </head>
    <body>

        <!--Navigation Menu down here-->
          <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container-fluid personal">
              <a class="navbar-brand" href="#">
                <img src="img/logo.webp" alt="" width="30" height="24" class="d-inline-block align-text-top">
                Injabulo
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav" style="justify-content: center">
                  <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                  <a class="nav-link" href="visit.php">Visit Zimbabwe</a>
                  <a class="nav-link" href="post.php">Posts</a>
                </div>
              </div>
            </div>
          </nav>

          <div class="container">
           
          
          </div>
          <!--Carousel for main page-->
          <div class="container">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="img/vicfalls.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Natural Wonders</h5>
                      <p>Boasting beautiful eyesights , Zimbabwe is a place to visit.Come join us for beautiful scenery</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="img/hwange.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Game Viewing</h5>
                      <p>Come and experience the African wilderness at its fullest</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="img/gz.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Ancient relics</h5>
                      <p>Take a sneak into history and see the experiences of previous generations</p>
                    </div>
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
          </div>

           <!--Carousel for posts-->
           <div class="container">
              <div class="row">
                <h1><strong>Latest News</strong></h1>
                <img src="img/vicfalls.jpg" height="90px" width = "">
                <h2>ZTA hosts ZTA challenge in different cities</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Enim voluptatum accusantium sed laboriosam sapiente numquam hic corrupti sequi quam minima, quas deserunt animi dicta nobis.</p>

              </div>
           </div>

           <div class="container">
              <div class="row">
                <h1><strong>Weather Updates</strong></h1>
                <img src="img/gz.jpg" height="90px" width = "">
                <h2>Day</h2>
                <p>Max - 25 <br> Min - 15</p>
                <h2>Night</h2>
                <p>Max - 15 <br> Min - 03</p>
              </div>
           </div>
           
          <!--Footer Starts Here-->
          <footer class="w-100 py-4 flex-shrink-0">
            <div class="container py-4">
                <div class="row gy-4 gx-5">
                   
                    <div class="col-md-6">
                        <h5 class="text-white mb-3">Quick links</h5>
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                  Why visit Zimbabwe ?
                                </button>
                              </h2>
                              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                  Rich with natural beauty , cultural heritage and game viewing , the Zimbabwean landscape is a pleasure for eyes as it offers one of the natural wonders of the world Victoria falls , the relics of the past world in Great Zimbabwe and Khami ruins.To top it off there is a wild variety of game where over 30 species including 13 endangered ones.
                                </div>
                              </div>
                            </div>
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                  How much does it cost to visit Zimbabwe?
                                </button>
                              </h2>
                              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                  From as little as USD 250 you can visit Zimbabwe from neighbouring countries.For those overseas from as little as USD 2000 you can enjoy the Zimbabwean safari for a week via our special packages from our partners.For the locals from as little as USD 25 you can have a wonderful day out in one of our partners' locations.
                                </div>
                              </div>
                            </div>
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                  How safe is it to travel to Zimbabwe?
                                </button>
                              </h2>
                              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                  For over 3 decades , Zimbabwe has been enjoying a lot of peace and national stability.It is one of the top 50 safe tourist destinations in the world and ranks in the top 5 in its region.
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>
                    <div class="col-md-6" style="margin-left : 30px;">
                        <h5 class="text-white mb-3">Quick links</h5>
                        <ul class="list-unstyled text-muted">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Posts</a></li>
                            <li><a href="#">Places</a></li>
                            <li><a href="https://vacancymail.co.zw/categories/tourism-jobs-in-zimbabwe">Vacancies</a></li>
                            
                        </ul>
                    </div>
        
                </div>
            </div>
        </footer>
    </body>
</html>