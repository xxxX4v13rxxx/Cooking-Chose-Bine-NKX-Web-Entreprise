<?php
/**
 * Title: Menu de l’école
 * Slug: ecolefortin/navigation
 * Categories: ecolefortin
 * Block Types: core/template-part/header
 */
?>
<!-- wp:group {"className":"ef-sidebar","layout":{"type":"default"}} -->
<div class="wp-block-group ef-sidebar">
<!-- wp:html -->
<a class="ef-brand" href="<?php echo esc_url( ecolefortin_link( '/accueil/' ) ); ?>" aria-label="École de musique Fortin — Accueil">
<img class="ef-brand-desktop" src="<?php echo esc_url( ecolefortin_asset( 'logo-desktop.svg' ) ); ?>" alt="École de musique Fortin" width="112" height="89" />
<span class="ef-brand-mobile"><img src="<?php echo esc_url( ecolefortin_asset( 'logo-note.svg' ) ); ?>" alt="" width="39" height="43" /><img src="<?php echo esc_url( ecolefortin_asset( 'logo-wordmark.svg' ) ); ?>" alt="École de musique Fortin" width="165" height="40" /></span>
</a>
<!-- /wp:html -->
<!-- wp:navigation {"overlayMenu":"mobile","textColor":"custom-color-1","backgroundColor":"custom-color-4","ariaLabel":"Menu principal","className":"ef-navigation","layout":{"type":"flex","orientation":"vertical"}} -->
<!-- wp:navigation-link {"label":"Accueil","url":"<?php echo esc_url( ecolefortin_link( '/accueil/' ) ); ?>","kind":"custom"} /-->
<!-- wp:navigation-link {"label":"Événements","url":"<?php echo esc_url( ecolefortin_link( '/evenements/' ) ); ?>","kind":"custom"} /-->
<!-- wp:navigation-link {"label":"Cours","url":"<?php echo esc_url( ecolefortin_link( '/cours/' ) ); ?>","kind":"custom"} /-->
<!-- wp:navigation-link {"label":"À propos","url":"<?php echo esc_url( ecolefortin_link( '/a-propos/' ) ); ?>","kind":"custom"} /-->
<!-- wp:navigation-link {"label":"Contact","url":"<?php echo esc_url( ecolefortin_link( '/contact/' ) ); ?>","kind":"custom"} /-->
<!-- /wp:navigation -->
</div>
<!-- /wp:group -->
