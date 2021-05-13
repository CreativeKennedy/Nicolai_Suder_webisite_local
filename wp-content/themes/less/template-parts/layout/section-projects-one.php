<section>
  <!-- Start Bootstrap -->

    <div class="row pl-0 pr-0">
      <div class="col-6 col-xs-12 pl-0 pr-0">
        <h2 class="display-4"><?php the_sub_field('project_one_number'); ?></h2>
          <img src="<?php the_sub_field('project_one_images'); ?>" />


      </div>
      <div class="col-6 col-xs-12 pl-0 pr-0">
        <h2 class="display-2"><?php the_sub_field('project_one_subline'); ?></h2>
        <p class="lead"><?php the_sub_field('project_one_text'); ?></p>
        <button class="btn btn-link"><a href="<?php the_sub_field('project_one_button'); ?>">Læs mere</button></a>
      </div>

    </div>
  <!-- End Bootstrap -->
</section>
