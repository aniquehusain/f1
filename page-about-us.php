<?php get_header();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* From Uiverse.io by Daniel1227k */ 
        .card {
  position: relative;
  width: 190px;
  height: 254px;
  background: #f00;
  display: flex;
  justify-content: center;
  align-items: center;
  overflow: hidden;
  border-radius: 8px;
}

.card::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: linear-gradient(315deg, #03a9f4, #ff0058);
}

.card::after {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: linear-gradient(315deg, #03a9f4, #ff0058);
  filter: blur(30px);
}

.card img {
  position: absolute;
  z-index: 2;
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: 0.5s;
}

.card:hover img {
  opacity: 0.3;
}

.card .content {
  position: absolute;

  z-index:1;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.6);
  transform: scale(0);
  transition: 0.5s;
}

.card:hover .content {
  transform: scale(1);
}

.content .title {
  position: relative;
  color: #fff;
  font-weight: 500;
  line-height: 1em;
  font-size: 1em;
  letter-spacing: 0.1em;
  text-transform: uppercase;
  text-align: center;
  margin-bottom: 10px;
}

.content .title span {
  font-weight: 300;
  font-size: 0.70em;
}

.content .sci {
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 10px;
}

.sci li {
  list-style: none;
}

.sci li a {
  position: relative;
  text-decoration: none;
  color: rgba(255, 255, 255, 0.5);
  background: rgba(0, 0, 0, 0.8);
  width: 40px;
  height: 40px;
  display: flex;
  justify-content: center;
  align-items: center;
  border-radius: 50%;
  transition: 0.3s;
}

.sci li a:hover {
  color: rgba(255, 255, 255, 1);
  background: rgba(255, 0, 88, 0.8);
}

body {
            background-color: #221F1F; /* Dark background */
            color: #F5F5F1; /* Light text for contrast */
            font-family: Arial, sans-serif;
        }

      
    </style>
</head>
<body>

<!-- About Us Section -->
<div class="container">
    <!-- About Us Header -->
    <section class="about-us-header">
        <h1 class="display-4">About Us</h1>
        <p class="lead">Learn more about who we are, what we do, and how we can help you!</p>
    </section>

    <h2 class="text-center my-5">Meet Our Team</h2>
<section class="team d-flex flex-wrap justify-content-center gap-4">
<?php
// WP_Query for the 'emp_details' custom post type
$emp_query = new WP_Query(array('post_type' => 'emp_details', 'posts_per_page' => -1));

if ($emp_query->have_posts()) :
    while ($emp_query->have_posts()) : $emp_query->the_post();
        $empId = get_the_ID();
        $background_image = get_field('emp_img', $empId);
        ?>
        <div class="card">
            <b></b>
            <img src="<?php echo esc_url($background_image); ?>" alt="Team Member">
            <div class="content">
                <p class="title"><?php the_title(); ?><br><span><?php the_field('emp_pos', $empId); ?></span></p>
                <ul class="sci">
                    <li>
                        <a href="#">
                            <svg class="fa-brands fa-facebook" width="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                <path d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"></path>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <svg class="fa-brands fa-twitter" width="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"></path>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <svg class="fa-brands fa-linkedin-in" width="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"></path>
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <?php
    endwhile;
else :
    echo "<p>No team members found.</p>";
endif;
wp_reset_postdata();
?>
</section>
</div>

        
        
<!-- Bootstrap 5 JS (Optional) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php get_footer();?>