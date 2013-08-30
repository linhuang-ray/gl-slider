<?php
/*
  Template Name: New Home Page 20130822
 */

get_header();
?>

<!-- Content -->
<div class="homepage-blocks">
    <div class="block-inner">
        <?php while (have_posts()) : the_post(); ?>
            <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
                <div class="home-section"><div class="two-third">
                        <h2>Greenlight ITC <em>&mdash; why we exist</em></h2>
                        <p><strong>Are you a small or medium Australian business?</strong></p>
                        <p><strong>Is technology holding your business back, rather than empowering it to grow?</strong></p>
                        <p><strong>Are you looking to save your business time while increasing its profit?</strong></p>
                        <p>We can help. Our mission is to DESIGN, IMPLEMENT and OPTIMISE technology solutions that help business like yours. Our specialties are:</p>
                        <div><div class="home-small-img"><img src="http://www.greenlight-itc.com/wp-content/uploads/2013/08/User-Accounts-alt.png" alt="IT Support" /><p>IT Support</p></div>
                            <div class="home-small-img"><img src="http://www.greenlight-itc.com/wp-content/uploads/2013/08/Globe.png" alt="Business Internet" /><p>Business Internet</p></div>
                            <div class="home-small-img"><img src="http://www.greenlight-itc.com/wp-content/uploads/2013/08/Phone.png" alt="Business Internet" /><p>Phone Solutions</p></div>
                            <div class="home-small-img"><img src="http://www.greenlight-itc.com/wp-content/uploads/2013/08/iCloud.png" alt="Business Internet" /><p>Cloud Solutions</p></div>
                            <div class="clear"></div>
                        </div>
                    </div><div class="one-third last"><h2>Blog <em>&mdash; what we think</em></h2>
                        <?php
                        $args = array('posts_per_page' => 4, 'order' => 'desc', 'orderby' => 'date');
                        $postslist = get_posts($args);
                        foreach ($postslist as $post) :
                            setup_postdata($post);
                            ?> 
                            <p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><br> 
                                <span><?php the_date(); ?></span></p>
                            <?php
                        endforeach;
                        wp_reset_postdata();
                        ?>
                    </div><div class="clear"></div>
                </div>
                <?php the_content(); ?>
                <div class="home-section testimonials-slide">
                    <div class="green-slider">
                        <?php
                        $test_arg = array('posts_per_page' => 4, 'order' => 'desc', 'orderby' => 'date', 'post_type' => 'testimonials');
                        $test_list = get_posts($test_arg);
                        foreach ($test_list as $testimonial):
                            setup_postdata($testimonial);
                            ?>
                            <div class='slide-content'>
                                <div class='slide-caption'>
                                    <p><?php the_excerpt(); ?></p>
                                </div>
                                <div class='slide-img'>
                                    <?php
                                    if (has_post_thumbnail($id)) { // check if the post has a Post Thumbnail assigned to it.
                                        echo get_the_post_thumbnail($id);
                                    }
                                    ?>
                                </div>
                                <div class='clear'></div>
                            </div>
                        <?php endforeach; ?>
                        
                    </div>
                </div> 
            </div>
        <?php endwhile; ?>
    </div>
</div>
<!-- /Content -->

<?php get_footer(); ?>