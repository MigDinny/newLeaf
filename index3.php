<?php
require_once 'settings.php';


?>

<html>
<head>

	<title>newLeaf</title>
	<link rel="stylesheet" type="text/css" href="static/style.css" />

	<!-- Sidebar styles -->
	<link rel="stylesheet" href="static/sidebar.css" />
  
  <script src="https://cdn.jsdelivr.net/npm/js-cookie/src/js.cookie.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js" integrity="sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.bootstrap3.min.css" integrity="sha256-ze/OEYGcFbPRmvCnrSeKbRTtjG4vGLHXgOqsyLFTRjg=" crossorigin="anonymous" />


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
        <div class="logo_name">EstagIO</div>
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
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">Empregos</span>
        </a>
         <span class="tooltip">Empregos</span>
      </li>
      <li>
       <a href="?section=internships">
         <i class='bx bx-chat' ></i>
         <span class="links_name">Estágios</span>
       </a>
       <span class="tooltip">Estágios</span>
     </li>      
      <li>
       <a href="?section=research">
         <i class='bx bx-user' ></i>
         <span class="links_name">Bolsas</span>
       </a>
       <span class="tooltip">Bolsas</span>
     </li>
     <li>
       <a href="?section=create_offer">
         <i class='bx bx-align-justify' ></i>
         <span class="links_name">Criar oferta</span>
       </a>
       <span class="tooltip">Criar oferta</span>
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
<script type="text/javascript" src="static/home.js"></script>

</body>
</html>