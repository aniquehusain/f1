<?php get_header(); ?>
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

  /* Feature Section Design */
  .feature {
    background-color: #F5F5F1; /* Light background for cards */
    color: #221F1F; /* Dark text inside cards */
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    transition: transform 0.2s ease-in-out;
  }

  /* Hover Effect for Feature Cards */
  .feature:hover {
    transform: translateY(-5px);
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
  }

  /* Feature Icons */
  .feature-icon {
    color: #F5F5F1; /* Light icon color */
    background-color: #E50914; /* Bright red background for icons */
    padding: 20px;
    border-radius: 50%;
  }

  /* Links */
  a.icon-link {
    color: #E50914; /* Red link color */
    text-decoration: none;
    font-weight: bold;
  }

  a.icon-link:hover {
    text-decoration: underline;
  }
</style>


<h1>ALL Topics</h1>
<div class="b-example-divider"></div>

<div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
  <div class="feature col">
    <div class="feature-icon d-inline-flex align-items-center justify-content-center fs-2 mb-3">
      <i class="bi bi-lungs-fill"></i>
    </div>
    <h3 class="fs-2">Healthcare</h3>
    <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
    <a href="<?php echo site_url('healthcare'); ?>" class="icon-link">
      See more
    </a>
  </div>
  <div class="feature col">
    <div class="feature-icon d-inline-flex align-items-center justify-content-center fs-2 mb-3">
      <i class="bi bi-suitcase2-fill"></i>
    </div>
    <h3 class="fs-2">Travel</h3>
    <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
    <a href="<?php echo site_url('travel'); ?>" class="icon-link">
      See more
    </a>
  </div>
  <div class="feature col">
    <div class="feature-icon d-inline-flex align-items-center justify-content-center fs-2 mb-3">
      <i class="bi bi-car-front"></i>
    </div>
    <h3 class="fs-2">Automobiles</h3>
    <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
    <a href="<?php echo site_url('automobiles'); ?>" class="icon-link">
      See more
    </a>
  </div>
</div>
<div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
  <div class="feature col">
    <div class="feature-icon d-inline-flex align-items-center justify-content-center fs-2 mb-3">
      <i class="bi bi-brush"></i>
    </div>
    <h3 class="fs-2">Art and Entertainment</h3>
    <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
    <a href="<?php echo site_url('artentertainment'); ?>" class="icon-link">
      See more
    </a>
  </div>
  <div class="feature col">
    <div class="feature-icon d-inline-flex align-items-center justify-content-center fs-2 mb-3">
      <i class="bi bi-pc-display"></i>
    </div>
    <h3 class="fs-2">Computer and Electronics</h3>
    <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
    <a href="<?php echo site_url('computer'); ?>" class="icon-link">
      See more
    </a>
  </div>
  <div class="feature col">
    <div class="feature-icon d-inline-flex align-items-center justify-content-center fs-2 mb-3">
      <i class="bi bi-globe2"></i>
    </div>
    <h3 class="fs-2">Education and Communication</h3>
    <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
    <a href="<?php echo site_url('education'); ?>" class="icon-link">
      See more
    </a>
  </div>
</div>
<div class="feature" data-scroll>
  <h3>Feature Title</h3>
  <p>Some amazing content here.</p>
</div>
const scrollElements = document.querySelectorAll("[data-scroll]");

const scrollHandler = () => {
  scrollElements.forEach((el) => {
    const rect = el.getBoundingClientRect();
    if (rect.top < window.innerHeight - 100) {
      el.classList.add("visible");
    }
  });
};

window.addEventListener("scroll", scrollHandler);
scrollHandler(); // Run initially to catch already visible elements


<?php get_footer(); ?>
