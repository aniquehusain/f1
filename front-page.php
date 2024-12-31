<?php get_header(); ?>
<!doctype html>
<html lang="en" data-bs-theme="dark"> <!-- Enables Bootstrap's dark theme -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Do's and Don'ts - Front Page</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        /* Custom Styles */
        body {
            background-color: #1a1a1a; /* Dark background */
            color: #ffffff; /* Light text for dark theme */
        }

        .gradient-background {
            background: rgba(0, 0, 0, 0.5); /* Semi-transparent overlay */
            color: white;
            padding: 15px;
            border-radius: 4px;
        }

        .hero-image {
          background: url('/assets/images/bg.jpeg') center/cover no-repeat;
            height: 500px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .hero-text {
            text-align: center;
        }
    </style>
</head>
<body>
    <!-- Hero Section -->
    <section class="hero-image text-center text-white">
        <div class="hero-text gradient-background">
            <h1 class="display-4 fw-bold">Welcome to Do's and Don'ts</h1>
            <p class="lead">The most trusted how-to site on the internet</p>
            <a href="<?php echo site_url('all-topics'); ?>" class="btn btn-primary btn-lg">Explore All Topics</a>
        </div>
    </section>

    <!-- Top Articles Section -->
    <section class="container py-5">
        <h2 class="pb-2 border-bottom text-white">Top Articles</h2>
        <div class="row row-cols-1 row-cols-lg-3 g-4">
            <?php
            // Fetch custom posts of type 'top_post'
            $articles = getSpecifiedPosts('top_post'); // Replace with your function

            if ($articles->have_posts()) {
                while ($articles->have_posts()) {
                    $articles->the_post();
                    $article_id = get_the_ID();
                    $background_image = get_field('image', $article_id);
                    $description = get_field('description', $article_id);
            ?>
                    <!-- Individual Article Card -->
                    <div class="col">
                        <div class="card h-100 text-bg-dark rounded-4 shadow-lg"
                            style="background-image: url('<?php echo esc_url($background_image); ?>'); background-size: cover; background-position: center;">
                            <div class="card-body gradient-background d-flex flex-column">
                                <h3 class="card-title"><?php the_title(); ?></h3>
                                <p class="card-text"><?php echo esc_html($description); ?></p>
                                <a href="<?php the_permalink('single-health-details'); ?>" class="btn btn-outline-light mt-auto">Read More</a>
                            </div>
                        </div>
                    </div>
            <?php
                }
                wp_reset_postdata();
            } else {
                echo '<p class="text-white">No articles found!</p>';
            }
            ?>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php get_footer(); ?>
