<?php get_header(); ?>

<div class="container">
    <div class="post-grid">
        <?php
        if (have_posts()) :
            while (have_posts()) : the_post();
        ?>
            <article class="post-card">
                <?php if (has_post_thumbnail()) : ?>
                    <div class="post-thumbnail">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('medium_large'); ?>
                        </a>
                    </div>
                <?php endif; ?>
                <div class="post-content">
                    <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <div class="post-meta">
                        <span class="post-date"><?php echo get_the_date('M j, Y'); ?></span>
                        <span class="post-author"><?php the_author(); ?></span>
                    </div>
                    <div class="post-excerpt">
                        <?php the_excerpt(); ?>
                    </div>
                    <a href="<?php the_permalink(); ?>" class="read-more">Read More</a>
                </div>
            </article>
        <?php
            endwhile;
        else :
            echo '<p>No posts found.</p>';
        endif;
        ?>
    </div>
    
    <div class="pagination">
        <?php
        the_posts_pagination(array(
            'mid_size' => 2,
            'prev_text' => __('Previous', 'textdomain'),
            'next_text' => __('Next', 'textdomain'),
        ));
        ?>
    </div>
</div>

<?php get_footer(); ?>