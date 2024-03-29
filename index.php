<?php get_header(); ?>

<div class="row">

    <!-- Blog Entries Column -->
    <div class="col-md-8">

        <h1 class="my-4">Blog
            <small>Read Latest Posts</small>
        </h1>

        <?php if (have_posts()) :
            while (have_posts()) : the_post(); ?>
                
            
            <?php get_template_part( 'template-parts/content',  get_post_format() ); ?>


            <?php endwhile; ?>


            <!-- Pagination -->
            <ul class="pagination justify-content-center mb-4">
                <?php if (get_previous_posts_link()) : ?>
                    <li class="page-item">
                        <span class="page-link"><?php previous_posts_link('&laquo; Newer'); ?></span>
                    </li>
                <?php else : ?>
                    <li class="page-item">
                        <span class="page-link text-muted">&laquo; Newer</span>
                    </li>
                <?php endif;
                    if (get_next_posts_link()) : ?>
                    <li class="page-item">
                        <span class="page-link"><?php next_posts_link('Older &raquo;'); ?></span>
                    </li>
                <?php else : ?>
                    <li class="page-item">
                        <span class="page-link text-muted">Older &raquo;</span>
                    </li>
                <?php endif; ?>
            </ul>

        <?php else : ?>
            <div class="card mb-4">
                <h1>Write something awesome ..</h1>
            </div>
        <?php endif; ?>

    </div>

    <!-- Sidebar Widgets Column -->
    <div class="col-md-4">

        <!-- Search Widget -->
        <div class="card my-4">
            <h5 class="card-header">Search</h5>
            <form class="card-body" method="get" action="<?php echo site_url('/'); ?>">
                <div class="input-group">
                    <input name="s" type="text" class="form-control" placeholder="Search for..." value="<?php get_search_query(); ?>">
                    <span class="input-group-btn">
                        <input class="btn btn-secondary" type="submit" value="Search" />
                    </span>
                </div>
            </form>
        </div>

        <?php dynamic_sidebar( 'main-sidebar' ); ?>

    </div>

</div>
<!-- /.row -->

<?php get_footer(); ?>