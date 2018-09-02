<?php

	// Get current template
  $templates = wp_get_theme()->get_page_templates();
  $current_template_file = get_page_template_slug();
  $current_template = "default";
  foreach ($templates as $key => $value) {
      if ($key === $current_template_file) {
        $current_template = strtolower($value);
      }
  }

  // NOTE: Update Custom Field Names if Needed

  // If page header image defined use that
  if (get_field( 'header_image' )) {
  	$inner_header_image = get_field( 'header_image' )['url'];
  }
  // if no page header image defined use template header image
  else {
  	$inner_header_image = get_theme_mod('inner_headers_'.$current_template);
  }
?>
<div class="inner-hero" style="background-image: url('<?php echo $inner_header_image ?>')">
  <div class="inner-hero__container">
    <div class="row row-site column">
      <div class="inner-hero__caption">
        <?php if(get_field( 'header_h1' )) : ?>
        <h1 class="inner-hero__caption-label"><?php echo get_field( 'header_h1' ); ?></h1>
        <h2 class="inner-hero__caption-title"><?php echo the_title(); ?></h2>
        <?php elseif ( get_the_title() ) : ?>
        <h1 class="inner-hero__caption-title"><?php echo the_title(); ?></h1>
        <?php else : ?>
        <h1 class="inner-hero__caption-title">Sunset Pools & Spas</h1>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>