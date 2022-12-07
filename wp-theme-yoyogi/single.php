
<?php get_header();?>



<main class="main  p-news-detail ">


<div class="o-detail-page-header">

    <div class="o-detail-page-header_inner">

        <div class="o-detail-page-header_meta">
            <div class="o-detail-page-header_date">
                <?php the_time("Y.m.d"); ?>
            </div>

            <div class="o-detail-page-header_meta_divider"></div>

            <div class="o-detail-page-header_cat">
                <?php echo get_field( 'category');?>
            </div>
        </div>

        <div class="o-detail-page-header_title">
            <?php echo get_field( 'title');?>
        </div>

    </div>


</div>

<div class="p-news-detail_content">
    <div class="container-narrow">
        <div class="post-body">
            <?php if(get_field( 'image')): ?>
                <p><img loading="lazy" src="<?php echo get_field( 'image')?>" alt="" width="1024" height="768" class="aligncenter size-large wp-image-580"></p>
            <?php endif; ?>
            <p>
                <?php echo get_field( 'content');?>
            </p>
        </div>
    </div>
</div>

<div class="p-news-detail_navigation">
    <div class="o-single-navigation">

        <div class="o-single-navigation_inner">

            <div class="o-single-navigation_prev">
                <?php
                $prev_post = get_previous_post();
                if ( ! empty( $prev_post ) ): ?>
                    <a class="js-hover a-link-arrow meta wide" href="<?php echo get_permalink( $prev_post->ID ); ?>" data-pjax-state="">

                        <i class="a-arrow meta  left"></i>

                        <span>
                        PREV
                        </span>

                    </a>
                <?php else: ?>
                    <a class="js-hover a-link-arrow meta wide disabled" href="" data-pjax-state="">

                        <i class="a-arrow meta  left"></i>

                        <span>
                        PREV
                        </span>

                    </a>
                <?php endif; ?>
            </div>

            <a href="<?php echo get_site_url();?>/blog" class="o-single-navigation_back" data-pjax-state="">
                <div class="o-single-navigation_back_in">
                    <div class="row">
                        <span class="square"></span>
                        <span class="square"></span>
                        <span class="square"></span>
                    </div>
                    <div class="row">
                        <span class="square"></span>
                        <span class="square"></span>
                        <span class="square"></span>
                    </div>
                    <div class="row">
                        <span class="square"></span>
                        <span class="square"></span>
                        <span class="square"></span>
                    </div>
                </div>
                <div class="o-single-navigation_back_out">
                    <div class="row">
                        <span class="square"></span>
                        <span class="square"></span>
                        <span class="square"></span>
                    </div>
                    <div class="row">
                        <span class="square"></span>
                        <span class="square"></span>
                        <span class="square"></span>
                    </div>
                    <div class="row">
                        <span class="square"></span>
                        <span class="square"></span>
                        <span class="square"></span>
                    </div>
                </div>
            </a>

            <div class="o-single-navigation_next">
                <?php
                $next_post = get_next_post();
                if ( ! empty( $next_post ) ): ?>
                    <a class="js-hover a-link-arrow meta wide" href="<?php echo get_permalink( $next_post->ID ); ?>" data-pjax-state="">


                        <span>
                        NEXT
                        </span>

                        <i class="a-arrow meta  "></i>
                    </a>
                <?php else: ?>
                    <a class="js-hover a-link-arrow meta wide disabled" href="" data-pjax-state="">


                        <span>
                        NEXT
                        </span>

                        <i class="a-arrow meta  "></i>
                    </a>
                <?php endif; ?>
                

            </div>

        </div>

    </div>
</div>


</main>

<?php get_footer(); ?>