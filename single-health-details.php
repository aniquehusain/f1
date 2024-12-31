<?php
/* Template Name: Article Template */
get_header();
$currentPageId=get_queried_object_id();?>
<?php
			$HealthObj = getSpecifiedPosts('healthcare_article');
                
			$currentPageId=get_queried_object_id();
				while ( $HealthObj->have_posts() ) 
			{ $HealthObj->the_post(); 
                  $healthid= get_the_ID();
				?>
?>
<style>
    .article-header {
        background-color: #221F1F;
        padding: 60px 0;
        color: #E50914; /* Red for heading */
    }

    .article-content {
        display: flex;
        justify-content: space-between;
    }

    .do-column {
        background-color: #28a745; /* Green background for Do column */
        color: white;
        padding: 20px;
        border-radius: 8px;
    }

    .dont-column {
        background-color: #dc3545; /* Red background for Don't column */
        color: white;
        padding: 20px;
        border-radius: 8px;
    }

    .article-content h2 {
        font-size: 1.5rem;
        color: #E50914;
    }
</style>
<div class="container my-5">
    <!-- Article Heading -->
    <section class="article-header text-center">
        <h1 class="display-3"><?php the_title(); ?></h1>
    </section>

    <!-- Article Content Section -->
    <section class="article-content mt-4">
        <div class="row">
            <!-- Article Images -->
            <div class="col-md-6">
                <?php
                $image_gallery = get_field('article_thumbnail'); 
                
                if ($image_gallery) :
                    foreach ($image_gallery as $image) :
                        echo '<img src="' . esc_url($image['url']) . '" alt="' . esc_attr($image['alt']) . '" class="img-fluid mb-3">';
                    endforeach;
                endif;
                ?>
            </div>

            <!-- Do's and Don'ts Content -->
            <div class="col-md-6">
                <h2>Do's</h2>
                <div class="do-column">
                    <?php
                    // Assuming 'do_content' is a custom field where the Do's content is stored
                    echo get_field('dos'); 
                    ?>
                </div>
                
                <h2>Don'ts</h2>
                <div class="dont-column">
                    <?php
                    // Assuming 'dont_content' is a custom field where the Don'ts content is stored
                    echo get_field('dont');
                    ?>
                </div>
            </div>
        </div>
    </section>
</div>



<?php
get_footer();
?>
