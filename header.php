<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            display: flex;
        }

        /* Sidebar styles */
        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            width: 250px;
            height: 100%;
            background-color: #333;
            color: white;
            padding-top: 80px; /* Space for the logo */
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.2);
        }

        .sidebar ul {
            list-style: none;
            padding: 0;
        }

        .sidebar ul li {
            padding: 15px;
            text-align: center;
            border-bottom: 1px solid #444;
        }

        .sidebar ul li a {
            color: white;
            text-decoration: none;
            display: block;
        }

        .sidebar ul li:hover {
            background-color: #555;
        }

        /* Header styles */
        .header {
            position: fixed;
            top: 0;
            left: 250px; /* Matches sidebar width */
            width: calc(100% - 250px);
            height: 80px;
            background-color: #007BFF;
            color: white;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        .logo {
            width: 30%;
            height: auto;
        }

        .search-bar {
            flex-grow: 1;
            max-width: 600px;
            margin: 0 20px;
        }

        .search-bar input {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 4px;
        }

        .about-us {
            font-size: 16px;
            cursor: pointer;
        }

        /* Main content styles */
        .content {
            margin-top: 80px; /* Space for the header */
            margin-left: 250px; /* Space for the sidebar */
            padding: 20px;
        }
    </style>
    <?php wp_head(); ?> <!-- WordPress header hook -->
</head>
<body <?php body_class(); ?>>
     
  

       <!-- Header -->
       <header class="header">
        
        <div class="search-bar">
            <input type="text" placeholder="Search...">
        </div>
        <div class="about-us"> <a href="<?php echo site_url('about-us'); ?>" class="btn btn-link text-white">About Us</a></div>
    </header>

   
 <!-- Sidebar -->
 <div class="sidebar">
 <div class="logo">

            </div>
        <ul>
            <li><a class="<?php echo (is_front_page()) ? 'active' : ''; ?>" href="<?php echo site_url(); ?>">Home</a></li>
            <li><a class="<?php echo (is_page('healthcare')) ? 'active' : ''; ?>" href="<?php echo site_url('healthcare'); ?>">Healthcare</a></li>
            <li><a class="<?php echo (is_page('artentertainment')) ? 'active' : ''; ?>" href="<?php echo site_url('artentertainment'); ?>">Art & Entertainment</a></li>
            <li><a class="<?php echo (is_page('automobiles')) ? 'active' : ''; ?>" href="<?php echo site_url('automobiles'); ?>">Automobiles</a></li>
            <li> <a class="<?php echo (is_page('computer')) ? 'active' : ''; ?>" href="<?php echo site_url('computer'); ?>">Computer and Electronics</a>
            <li><a class="<?php echo (is_page('education')) ? 'active' : ''; ?>" href="<?php echo site_url('education'); ?>">Education & Communication</a></li>
            <li><a class="<?php echo (is_page('travel')) ? 'active' : ''; ?>" href="<?php echo site_url('travel'); ?>">Travel</a></li>
    </div>
        </ul>
    </div>

 
  