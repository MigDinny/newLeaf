<?php
require_once 'settings.php';


?>

<html>
<head>

	<title>PGI Project</title>
	<link rel="stylesheet" type="text/css" href="static/style.css" />

	<!-- Sidebar styles -->
	<link rel="stylesheet" href="static/sidebar.css" />
    
  <!-- Boxicons CDN Link -->
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet' />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>


  <!-- Offer creation Link -->
  <link rel="stylesheet" href="static/offer.css">

</head>

<body>

<!-- SIDEBAR (common) -->
<div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus icon'></i>
        <div class="logo_name">newLeaf</div>
        <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav-list">
      <li>
          <i class='bx bx-search' ></i>
         <input type="text" placeholder="Search...">
         <span class="tooltip">Search</span>
      </li>
      <li>
        <a href="?section=jobs">
          <i class='bx bx-briefcase'></i>
          <span class="links_name">Empregos</span>
        </a>
         <span class="tooltip">Empregos</span>
      </li>
      <li>
       <a href="?section=internships">
         <i class='bx bxs-graduation' ></i>
         <span class="links_name">Estágios</span>
       </a>
       <span class="tooltip">Estágios</span>
     </li>      
      <li>
       <a href="?section=research">
         <i class='bx bx-archive' ></i>
         <span class="links_name">Bolsas</span>
       </a>
       <span class="tooltip">Bolsas</span>
     </li>
     <li>
       <a href="?section=create_offer">
         <i class='bx bx-list-plus' ></i>
         <span class="links_name">Criar oferta</span>
       </a>
       <span class="tooltip">Criar oferta</span>
     </li>
     
     <li>
       <a href="?section=about">
         <i class='bx bx-error-circle' ></i>
         <span class="links_name">Sobre nós</span>
       </a>
       <span class="tooltip">Sobre nós</span>
     </li>
     <!-- 
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
     </li>-->
     <!--
     <li>
       <a href="#">
         <i class='bx bx-heart' ></i>
         <span class="links_name">Saved</span>
       </a>
       <span class="tooltip">Saved</span>
     </li>-->
    <!-- 
     <li>
       <a href="#">
         <i class='bx bx-cog' ></i>
         <span class="links_name">Setting</span>
       </a>
       <span class="tooltip">Setting</span>
     </li>-->
     <li class="profile">
         <div class="profile-details">
           <img src="static/images/user-profile.jpg" alt="profileImg">
           <div class="name_job">
             <div class="name">Username</div>
             <div class="job">User's Job</div>
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
    case 'create_offer':
      include "contents/create_offer.php";
      break;
		
		case 'research':
			include "contents/research.php";
			break;
		
    case 'internships':
      include "contents/internships.php";
      break;

    case 'jobs':
      include "contents/jobs.php";
      break;

		default:
			include "contents/home.php";
			break;
	}
}

?>
</section>

<script type="text/javascript" src="static/sidebar.js"></script>

</body>
</html>