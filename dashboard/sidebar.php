 <!-- partial:partials/_sidebar.html -->
 <?php

  if ($_SESSION['role'] == 'Admin') { ?>
   <nav class="sidebar sidebar-offcanvas" id="sidebar">
     <ul class="nav">
       <li class="nav-item">
         <a class="nav-link" href="index.php">
           <i class="icon-grid menu-icon"></i>
           <span class="menu-title">Dashboard</span>
         </a>
       </li>
       <li class="nav-item">
         <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
           <i class="icon-layout menu-icon"></i>
           <span class="menu-title">Artikel</span>
           <i class="menu-arrow"></i>
         </a>
         <div class="collapse" id="ui-basic">
           <ul class="nav flex-column sub-menu">
             <li class="nav-item"> <a class="nav-link" href="artikel.php">Artikel</a></li>
             <li class="nav-item"> <a class="nav-link" href="tambahartikel.php">Tambah Artikel</a></li>
           </ul>
         </div>
       </li>
       <li class="nav-item">
         <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
           <i class="icon-columns menu-icon"></i>
           <span class="menu-title">Data User</span>
           <i class="menu-arrow"></i>
         </a>
         <div class="collapse" id="form-elements">
           <ul class="nav flex-column sub-menu">
             <li class="nav-item"><a class="nav-link" href="user.php">Data User</a></li>
             <li class="nav-item"><a class="nav-link" href="tambahuser.php">Tambah User</a></li>
           </ul>
         </div>
       </li>
       <li class="nav-item">
         <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
           <i class="icon-bar-graph menu-icon"></i>
           <span class="menu-title">Testimoni</span>
           <i class="menu-arrow"></i>
         </a>
         <div class="collapse" id="charts">
           <ul class="nav flex-column sub-menu">
             <li class="nav-item"> <a class="nav-link" href="testimoni.php">Testimoni</a></li>
             <li class="nav-item"> <a class="nav-link" href="tambahtesti.php">Tambah Testimoni</a></li>
           </ul>
         </div>
     </ul>
   </nav>
 <?php  } else { ?>
   <nav class="sidebar sidebar-offcanvas" id="sidebar">
     <ul class="nav">
       <li class="nav-item">
         <a class="nav-link" href="index.php">
           <i class="icon-grid menu-icon"></i>
           <span class="menu-title">Dashboard</span>
         </a>
       </li>
       <li class="nav-item">
         <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
           <i class="icon-layout menu-icon"></i>
           <span class="menu-title">Artikel</span>
           <i class="menu-arrow"></i>
         </a>
         <div class="collapse" id="ui-basic">
           <ul class="nav flex-column sub-menu">
             <li class="nav-item"> <a class="nav-link" href="artikel.php">Artikel</a></li>
             <li class="nav-item"> <a class="nav-link" href="tambahartikel.php">Tambah Artikel</a></li>
           </ul>
         </div>
       </li>
     </ul>
   </nav>
 <?php } ?>