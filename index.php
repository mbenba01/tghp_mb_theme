<?php get_header(); ?>

<div class="main-content fixed-width">
  <?php
  while (have_posts()) {
    the_post(); ?>

    <section class="feature section1 grid">
      <span class="featured-image image-1" style="background-image: url(<?php echo get_theme_file_uri('/assets/media/chris-barbalis-284138-unsplash.jpg'); ?>"></span>
      <div class="text-content featured-block">
        <h3>UNLOCK</h3>
        <p class="promo-text">Our skill is in unlocking the
          hidden opportunities that others
          simple cannot see.</p>
      </div>
    </section>

    <section class="feature section2 grid">
      <span class="featured-image image-2" style="background-image: url(<?php echo get_theme_file_uri('/assets/media/mahdis-mousavi-322113-unsplash.jpg'); ?>"></span>
      <div class="text-content featured-block">
        <h3>TRANSFORM</h3>
        <p class="promo-text">Our ambition is always to
          radically improve each site or
          building we develop.</p>
      </div>
    </section>

  <?php
  }
  ?>

  <section class="our-partners feature">
    <h3>OUR BUSINESS PARTNERS</h3>
    <section class="partners section3">
      <div class="partner-image"><img src="<?php echo get_theme_file_uri('/assets/media/AXA.jpg'); ?>" alt=""></div>
      <div class="partner-image"><img src="<?php echo get_theme_file_uri('/assets/media/barratt_homes.jpg'); ?>" alt=""></div>
      <div class="partner-image"><img src="<?php echo get_theme_file_uri('/assets/media/baycroft.jpg'); ?>" alt=""></div>
      <div class="partner-image"><img src="<?php echo get_theme_file_uri('/assets/media/bupa.jpg'); ?>" alt=""></div>
      <div class="partner-image"><img src="<?php echo get_theme_file_uri('/assets/media/circle_housing.jpg'); ?>" alt=""></div>
      <div class="partner-image"><img src="<?php echo get_theme_file_uri('/assets/media/partner-pogo14.jpg'); ?>" alt=""></div>
      <div class="partner-image"><img src="<?php echo get_theme_file_uri('/assets/media/epping_forest_council.jpg'); ?>" alt=""></div>
      <div class="partner-image"><img src="<?php echo get_theme_file_uri('/assets/media/galliard.jpg'); ?>" alt=""></div>
      <div class="partner-image"><img src="<?php echo get_theme_file_uri('/assets/media/hallmark_carre.jpg'); ?>" alt=""></div>
      <div class="partner-image"><img src="<?php echo get_theme_file_uri('/assets/media/hertfordshire_council.jpg'); ?>" alt=""></div>
    </section>
  </section>
  <section class="feature contact grid">
    <span class="featured-contact-background"></span>
    <div class="contact-info">

      <h3>GET IN TOUCH</h3>
      <dl>
        <dt>Address</dt>
        <dd>Company, 12 Floyd Avenue,
          London, W1C 4AB.</dd>
        <dt>Telephone</dt>
        <dd>020 1234 1234</dd>
        <dt>Email</dt>
        <dd>info@company.co.uk</dd>
      </dl>

    </div>
    <div class="contact-block">
      <div class="form-wrapper">
        <form action="">
          <!-- <label for="name">Name</label> -->
          <input type="text" name="name" id="name" placeholder="Full Name..." required>
          <!-- <label for="email">Email</label> -->
          <input type="email" name="email" id="email" required placeholder="Email Address...">
          <!-- <label for="subject">Subject</label> -->
          <input type="text" name="subject" id="subject" placeholder="Subject...">
          <textarea name="textarea" id="textarea" cols="30" rows="5"></textarea>
          <input type="button" value="Send" class="btn">
        </form>
      </div>
    </div>
  </section>
</div>

<?php get_footer(); ?>