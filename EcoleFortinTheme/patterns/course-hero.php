<?php
/**
 * Title: Cours — Image fixe et titre défilant
 * Slug: ecolefortin/course-hero
 * Categories: ecolefortin
 */
?>
<!-- wp:group {"anchor":"accueil","className":"ef-hero-frame","layout":{"type":"default"}} -->
<div class="wp-block-group ef-hero-frame" id="accueil">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ef-hero ef-fixed-hero ef-course-hero"} -->
<figure class="wp-block-image size-full ef-hero ef-fixed-hero ef-course-hero"><img src="<?php echo esc_url( ecolefortin_asset( 'equipe-cours.png' ) ); ?>" alt="Les quatre membres de l’équipe de l’école" /></figure>
<!-- /wp:image -->
<!-- wp:paragraph {"className":"ef-hero-label"} -->
<p class="ef-hero-label">École Fortin</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
