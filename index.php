<?php
require_once 'settings.php';


?>

<html>
<head>

	<title>PGI Project</title>
	<!-- <link rel="stylesheet" type="text/css" href="static/style.css" /> -->

	<!-- Sidebar styles -->
	<link rel="stylesheet" href="static/sidebar.css" />
    
  <!-- Boxicons CDN Link -->
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet' />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

</head>

<body>

<!-- SIDEBAR (common) -->
<div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus icon'></i>
        <div class="logo_name">CodingLab</div>
        <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav-list">
      <li>
          <i class='bx bx-search' ></i>
         <input type="text" placeholder="Search...">
         <span class="tooltip">Search</span>
      </li>
      <li>
        <a href="?section=food">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">Food</span>
        </a>
         <span class="tooltip">Food</span>
      </li>
      <li>
       <a href="?section=research">
         <i class='bx bx-user' ></i>
         <span class="links_name">Research</span>
       </a>
       <span class="tooltip">Research</span>
     </li>
     <li>
       <a href="#">
         <i class='bx bx-chat' ></i>
         <span class="links_name">Messages</span>
       </a>
       <span class="tooltip">Messages</span>
     </li>
     <li>
       <a href="#">
         <i class='bx bx-pie-chart-alt-2' ></i>
         <span class="links_name">Analytics</span>
       </a>
       <span class="tooltip">Analytics</span>
     </li>
     <li>
       <a href="#">
         <i class='bx bx-folder' ></i>
         <span class="links_name">File Manager</span>
       </a>
       <span class="tooltip">Files</span>
     </li>
     <li>
       <a href="#">
         <i class='bx bx-cart-alt' ></i>
         <span class="links_name">Order</span>
       </a>
       <span class="tooltip">Order</span>
     </li>
     <li>
       <a href="#">
         <i class='bx bx-heart' ></i>
         <span class="links_name">Saved</span>
       </a>
       <span class="tooltip">Saved</span>
     </li>
     <li>
       <a href="#">
         <i class='bx bx-cog' ></i>
         <span class="links_name">Setting</span>
       </a>
       <span class="tooltip">Setting</span>
     </li>
     <li class="profile">
         <div class="profile-details">
           <img src="static/images/indiano-google.jpg" alt="profileImg">
           <div class="name_job">
             <div class="name">Prem Shahi</div>
             <div class="job">Web designer</div>
           </div>
         </div>
         <i class='bx bx-log-out' id="log_out" ></i>
     </li>
    </ul>
</div>


<!-- CONTENTS (depends on section) -->

<section class="home-section">
<?php

if (!isset($_GET['section'])) include "contents/home.php";
else {
	switch($_GET['section']) {
		case 'food':
			include "contents/food.php";
			break;
		
		case 'research':
			include "contents/research.php";
			break;
		
		default:
			include "contents/home.php";
			break;
	}
}

?>
</section>

<script type="text/javascript" src="static/sidebar.js"></script>

<script type="text/javascript" src="static/fetch.js"> </script>
</body>
</html>