
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
                                  <img class="img-fluid" src="<?php the_sub_field('icon_images'); ?>" alt="Carousel 1">
                              </div>
                              <div class="card-body pt-2">
                                  <h6 class="small text-wide p-b-2"><?php the_sub_field('header_services'); ?></h6>
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
