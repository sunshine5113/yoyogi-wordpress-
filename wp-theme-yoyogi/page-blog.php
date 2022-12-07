
<?php get_header();?>

                <main class="main p-blog">


                    <div class="js-simple-page-header o-simple-page-header">

                        <div class="o-simple-page-header_inner">

                            <h1 class="o-simple-page-header_title">
                                <div class="a-page-title">
                                    BLOG
                                </div>
                            </h1>

                            <div class="o-simple-page-header_body">
                                <div class="a-page-body">
                                ブログ
                                </div>
                            </div>

                        </div>

                    </div>

                    <section id="archive" class="o-archive">

                        <div class="container-middle">

                            <!--row-->
                            <div class="o-archive_row">

                                <?php
                                    $paged = get_query_var('paged') ? get_query_var('paged'):1;
                                    $args = array(
                                        'post_type' => 'post',
                                        'posts_per_page'   => 10,
                                        'paged' => $paged,
                                        'category_name'=>'Blog'
                                    );
                                    $result = new WP_Query( $args );
                                    if ( $result-> have_posts() ) : 
                                        while ( $result->have_posts() ) : 
                                            $result->the_post();
                                ?>
                                <div class="o-archive_item">
                                    <div class="m-news-item">
                                        <div class="m-news-item__img">
                                        <img src="<?php echo get_field('image') ? get_field('image'):get_template_directory_uri().'/assets/images/no_image.jpg'?>" alt="">
                                        </div>
                                        <div class="m-news-item_inner">

                                            <div class="m-news-item_meta">

                                                <div class="m-news-item_date">
                                                    <?php the_time("Y.m.d"); ?>
                                                </div>

                                                <div class="m-news-item_meta_divider"></div>

                                                <div class="m-news-item_category">
                                                    <a href="<?php the_permalink(); ?>">
                                                        <?php echo get_field('category')?>
                                                    </a>
                                                </div>

                                            </div>

                                            <div class="m-news-item_content">

                                                <a href="<?php the_permalink(); ?>">
                                                    <div class="m-news-item_title">
                                                        <h2 class="a-heading-ja size3 ">
                                                            <?php echo get_field('title')?>
                                                        </h2>
                                                    </div>

                                                    <div class="m-news-item_body">
                                                        <p class="a-body size1">
                                                            <?php echo get_field('content')?>
                                                        </p>
                                                    </div>
                                                </a>

                                            </div>

                                        </div>

                                    </div>
                                </div>

                                <?php 
                                    endwhile;
                                    endif;
                                    wp_reset_query();
                                    wp_reset_postdata();
                                ?>

                            </div>
                            <!--/row-->

                        </div>

                    </section>

                    

                    <div class="o-pagination">
                        <div class="container">
                            <?php if(function_exists('wp_pagenavi')) wp_pagenavi(array('query' => $result)); ?>
                            <div class="inner">
                                <div class="prev">
                                    <a class="js-hover a-link-arrow meta   disabled  " href="">

                                        <i class="a-arrow meta  left"></i>

                                        <span>
                                        PREV
                                        </span>

                                    </a>

                                </div>
                                <ul class="pages">
                                    <li>
                                        <span class="page-number page-numbers current">1</span>
                                    </li>
                                    <li>
                                        <a href="" class="page-number page-numbers">2</a>
                                    </li>
                                </ul>
                                <div class="next">
                                    <a class="js-hover a-link-arrow meta   " href="">


                                        <span>
                                        NEXT
                                        </span>

                                        <i class="a-arrow meta  "></i>
                                    </a>

                                </div>
                            </div>

                        </div>
                    </div>


                </main>

                <?php get_footer(); ?>