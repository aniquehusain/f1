<?php get_header();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Articles</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
         body {
    background-color: #221F1F; /* Dark background */
    color: #F5F5F1; /* Light text for contrast */
    font-family: Arial, sans-serif;
  }

  /* Section Headers */
  h1, h3 {
    color: #E50914; /* Bright red for headings */
  }

  /* Divider */
  .b-example-divider {
    border-top: 2px solid #E50914; /* Red divider */
    margin: 20px 0;
  }
        .article-card {
            transition: all 0.3s ease-in-out;
            color: #E50914;
        }

        .article-card:hover {
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            transform: translateY(-5px);
        }

        .article-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
        .card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.card:hover {
    transform: translateY(-5px); /* Slight lift effect */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Add shadow on hover */
}
    </style>
</head>
<body>
    <!-- Main Container -->
<div class="container my-5">
    <!-- Section Title -->
    <h1 class="text-center mb-5"> Articles for Automobiles</h1>

    <!-- Articles Grid -->
    <div class="row g-4"> <!-- Added Bootstrap gutter spacing -->
        <?php 
        $travelObj = getSpecifiedPosts('auto_post');

        if ($travelObj->have_posts()) {
            while ($travelObj->have_posts()) {
                $travelObj->the_post();
                $travelId = get_the_ID();
        ?>
            <!-- Single Article Card -->
            <div class="col-md-4"> <!-- Responsive 3-column grid -->
                <div class="card h-100 shadow-sm border-0"> <!-- Card with shadow and no border -->
                    <!-- Article Image -->
                    <img src="<?php echo get_field('article_thumbnail', $travelId); ?>" 
                         class="card-img-top img-fluid" 
                         alt="<?php the_title(); ?>" 
                         style="object-fit: cover; height: 200px;"> <!-- Image styling -->
                    
                    <!-- Card Body -->
                    <div class="card-body d-flex flex-column">
                        <!-- Article Title -->
                        <h5 class="card-title fw-bold"><?php the_title(); ?></h5>
                        <!-- Article Description -->
                        <p class="card-text text-muted">
                            <?php echo wp_trim_words(get_field('article_desc', $travelId), 20, '...'); ?>
                        </p>
                        <!-- Read More Button -->
                        <a href="<?php the_permalink($objectID); ?>" class="btn btn-sm btn-primary mt-auto align-self-start">
                            Read More
                        </a>
                    </div>
                </div>
            </div>
        <?php 
            } // End while
        } else { 
        ?>
            <!-- No Articles Found -->
            <div class="col-12 text-center">
                <p>No articles available at the moment.</p>
            </div>
        <?php 
        } // End if
        ?>
    </div> <!-- End row -->
</div> <!-- End container -->

<!-- Bootstrap 5 JS (Optional) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php get_footer();?>