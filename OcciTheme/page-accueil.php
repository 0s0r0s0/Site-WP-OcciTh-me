<?php

get_header(); ?>

<div> 
                                                 
        <?php
        if( have_posts() ) : while ( have_posts() ) : the_post();
            get_template_part('content', 'home', get_post_format()); //get_template_part va chercher les ss-templates, get_post_format
        endwhile; endif;                                             // va récupérer la mise en page particulière du post

        ?>
</div>

<div>

    <aside class="site_sidebar">
                <ul>
                    <?php dynamic_sidebar( 'colonne-1' );
                        dynamic_sidebar( 'colonne-2' ); ?>
                </ul>
    </aside>

</div>

<?php get_footer(); ?>