
<!-- Start Bootstrap -->


<section>
<div class="container-fluid">

  <div class="row justify-content-center">
    <h2 class="display-4"><?php the_sub_field('header_services'); ?></h2>
  </div>

  <div class="row ">
    <div class="col-6">
      <p class="lead pr-5"><?php the_sub_field('subline_services'); ?></p>
      <button class="btn btn-link"><a href="<?php the_sub_field('button_cta_url_service'); ?>"> &#187; Se alle ydelsere</button></a>

    </div>
    <div class="col-6">

      <section class="container pt-3">
          <div class="row">
              <div class="col-lg-12">
                  <h1>Bootstrap 4 Card Deck Slider</h1>
              </div>
          </div>
      </section>
      <section class="carousel slide" data-ride="carousel" id="postsCarousel">
          <div class="container">
              <div class="row">
                  <div class="col-12 text-md-right lead">
                      <a class="btn btn-secondary-outline prev" href="" title="go back"><i class="fa fa-lg fa-chevron-left"></i></a>
                      <a class="btn btn-secondary-outline next" href="" title="more"><i class="fa fa-lg fa-chevron-right"></i></a>
                  </div>
              </div>
          </div>
          <div class="container pt-0 mt-2">
              <div class="carousel-inner">
                  <div class="carousel-item active">
                      <div class="card-deck">
                          <div class="card h-100">
                              <div class="card-img-top card-img-top-250">
                                  <img class="img-fluid" src="http://i.imgur.com/EW5FgJM.png" alt="Carousel 1">
                              </div>
                              <div class="card-body pt-2">
                                  <h6 class="small text-wide p-b-2">Insight</h6>
                                  <h2>
                                      <a href="">Why Stuff Happens Every Year.</a>
                                  </h2>
                              </div>
                          </div>
                          <div class="card h-100">
                              <div class="card-img-top card-img-top-250">
                                  <img class="img-fluid" src="http://i.imgur.com/Hw7sWGU.png" alt="Carousel 2">
                              </div>
                              <div class="card-body pt-2">
                                  <h6 class="small text-wide p-b-2">Development</h6>
                                  <h2>
                                      <a href="">How to Make Every Line Count.</a>
                                  </h2>
                              </div>
                          </div>
                          <div class="card h-100">
                              <div class="card-img-top card-img-top-250">
                                  <img class="img-fluid" src="http://i.imgur.com/g27lAMl.png" alt="Carousel 3">
                              </div>
                              <div class="card-body pt-2">
                                  <h6 class="small text-wide p-b-2">Design</h6>
                                  <h2>
                                      <a href="">Responsive is Essential.</a>
                                  </h2>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="carousel-item">
                      <div class="card-deck">
                          <div class="card">
                              <div class="card-img-top card-img-top-250">
                                  <img class="img-fluid" src="//visualhunt.com/photos/l/1/office-student-work-study.jpg" alt="Carousel 4">
                              </div>
                              <div class="card-body pt-2">
                                  <h6 class="small text-wide p-b-2">Another</h6>
                                  <h2>
                                      <a href="">Tagline or Call-to-action.</a>
                                  </h2>
                              </div>
                          </div>
                          <div class="card">
                              <div class="card-img-top card-img-top-250">
                                  <img class="img-fluid" src="//visualhunt.com/photos/l/1/working-woman-technology-computer.jpg" alt="Carousel 5">
                              </div>
                              <div class="card-body pt-2">
                                  <h6 class="small text-wide p-b-2"><span class="pull-xs-right">12.04</span> Category 1</h6>
                                  <h2>
                                      <a href="">This is a Blog Title.</a>
                                  </h2>
                              </div>
                          </div>
                          <div class="card">
                              <div class="card-img-top card-img-top-250">
                                  <img class="img-fluid" src="//visualhunt.com/photos/l/1/people-office-team-collaboration.jpg" alt="Carousel 6">
                              </div>
                              <div class="card-body pt-2">
                                  <h6 class="small text-wide p-b-2">Category 3</h6>
                                  <h2>
                                      <a href="">Catchy Title of a Blog Post.</a>
                                  </h2>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>


    </div>


  </div>
</div>

<script type="text/javascript">

(function($) {
    "use strict";

    // manual carousel controls
    $('.next').click(function(){ $('.carousel').carousel('next');return false; });
    $('.prev').click(function(){ $('.carousel').carousel('prev');return false; });

})(jQuery);

</script>
