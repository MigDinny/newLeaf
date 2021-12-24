<?php
require_once 'settings.php';

?>

<html>
<head>

	<title>newLeaf</title>
	<link rel="stylesheet" type="text/css" href="static/style.css" />
  <link rel="icon" href="static\images\logo-min.png">

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

  <?php

  if (isset($_GET['section'])) {
    switch ($_GET['section']) {

      case 'home':
        
        break;
      
      case 'create-offer':
        echo '<link rel="stylesheet" href="static/offer.css">';
        break;
      
      case 'about':
        echo '<link rel="stylesheet" href="static/about_us.css">';
        break;
      
      case 'jobs': case 'internships': case 'research':
        echo '<script>if (localStorage.getItem("selected_course") == null) window.location.replace("/?msg=not_selected"); </script>';
        break;
    }
  } else {
    echo '<script src="static/home.js"></script>';
  }

  ?>


</head>

<body>

<!-- SIDEBAR (common) -->
  <div class="sidebar">
      <!--<div class="logo">
        <div class="logo-details">
          <img src="static/images/azul2.png" alt="logoImg">
          <div class="name_job">
            <div class="name"></div>
          </div>
        </div>

         
      </div>-->

    <div class="logo-details">
        <div class="logo_name">
        <!-- <a href="/index3.php" style = "color: #fff"> -->
        <a href="/" style = "color: #fff">
        <img src="static/images/logo-min.png" alt="logoImg" style="height: 50px;vertical-align: middle;margin-right: 10px;"/>
        <span> newLeaf  </span>
        </a>

        </div>
        <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav-list">


      <?php
      if (!isset($_GET['section'])) {}
      else if ($_GET['section'] == 'jobs' || $_GET['section'] == 'internships' || $_GET['section'] == 'research') {
        echo '<li>
            <i class=\'bx bx-search\' ></i>
            <input type="text" id="search-bar" placeholder="Search..." onChange="fetchData(\''.$_GET['section'].'\');">
            <span class="tooltip">Search</span>
            </li>';
      }
      ?>


    <div id="listings">
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
      <li >
        <a href="?section=research">
          <i class='bx bx-archive' ></i>
          <span class="links_name">Bolsas de investigação</span>
        </a>
        <span class="tooltip">Bolsas de investigação</span>
      </li>
    </div>

    


     <li>
       <a href="?section=about">
         <i class='bx bx-info-circle' ></i>
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
    -->
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

    case 'about':
      include "contents/about_us.php";
      break;
      
		default:
			include "contents/home.php";
			break;
	}
}

?>
</section>

<script type="text/javascript" src="static/sidebar.js"></script>
<script>

  if (localStorage.getItem('selected_course') == null) {
    document.getElementById('listings').innerHTML = "";
  }


</script>

</body>
</html>