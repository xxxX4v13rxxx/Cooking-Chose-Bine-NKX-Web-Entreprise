<?php
/**
 * Title: Accueil — Image fixe et titre défilant
 * Slug: ecolefortin/hero
 * Categories: ecolefortin
 */
?>
<!-- wp:group {"anchor":"accueil","className":"ef-hero-frame","layout":{"type":"default"}} -->
<div class="wp-block-group ef-hero-frame" id="accueil">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ef-hero ef-fixed-hero"} -->
<figure class="wp-block-image size-full ef-hero ef-fixed-hero"><img src="<?php echo esc_url( ecolefortin_asset( 'piano-desktop.png' ) ); ?>" alt="Un piano, une partition ouverte et un métronome" /></figure>
<!-- /wp:image -->
<!-- wp:paragraph {"className":"ef-hero-label"} -->
<p class="ef-hero-label">École Fortin</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
