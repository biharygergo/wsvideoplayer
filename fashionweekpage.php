<?php
/**
 * Created by PhpStorm.
 * User: Competitor
 * Date: 10/14/2017
 * Time: 9:14 AM
 * Template Name: FashionWeekPage
 */

    $post = get_post($_POST['id']); // this line is used to define the {id:post_id} which you will see in another snippet further down

    if ($post) { // this is necessary and is a replacement of the typical `if (have_posts())`
        setup_postdata($post); // needed to format custom query results for template tags ?>
<!-- everything below this line is your typical page template coding -->
<div <?php post_class() ?> id="post-<?php the_ID(); ?>">

    <h2><?php the_title(); ?></h2>
    <small><?php the_time('F jS, Y') ?></small>
    <span><?php the_author() ?></span>

    <div class="entry">
        <?php the_content(); ?>
    </div>

</div>
<?php}