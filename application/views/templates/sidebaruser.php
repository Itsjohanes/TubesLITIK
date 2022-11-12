 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

     <!-- Sidebar - Brand -->
     <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
         <div class="sidebar-brand-icon rotate-n-15">
             <i class="fas fa-code"></i>
         </div>
         <div class="sidebar-brand-text mx-3">PromDas</div>
     </a>

     <!-- Divider -->
     <hr class="sidebar-divider">


     <!-- QUERY MENU -->

     <?php
        if ($title == 'Dashboard User') {
            echo "<li class='nav-item active'>";
        } else {
            echo "<li class='nav-item'>";
        }
        ?> <a class="nav-link" href="<?= base_url('User'); ?>">
         <i class="fas fa-address-card"></i>
         <span>Dashboard User</span></a>
     </li>
     <hr class="sidebar-divider d-none d-md-block">






     <?php
        if ($title == 'Materi User') {
            echo "<li class='nav-item active'>";
        } else {
            echo "<li class='nav-item'>";
        }
        ?>
     <a class="nav-link" href="<?= base_url('MateriUser'); ?>">
         <i class="fas fa-book"></i>
         <span>Materi</span></a>
     </li>

     <!-- LOOPING MENU -->

     <!-- Divider -->
     <hr class="sidebar-divider d-none d-md-block">




     <?php
        if ($title == 'IDE') {
            echo "<li class='nav-item active'>";
        } else {
            echo "<li class='nav-item'>";
        }
        ?>
     <a class="nav-link" href="<?= base_url('IDE'); ?>">
         <i class="fas fa-desktop"></i>
         <span>IDE</span></a>
     </li>

     <hr class="sidebar-divider d-none d-md-block">

     <li class="nav-item">
         <a class="nav-link" href="<?= base_url('auth/logout'); ?>">
             <i class="fas fa-fw fa-sign-out-alt"></i>
             <span>Logout</span></a>
     </li>


     <!-- Divider -->
     <hr class="sidebar-divider d-none d-md-block">

     <!-- Sidebar Toggler (Sidebar) -->
     <div class="text-center d-none d-md-inline">
         <button class="rounded-circle border-0" id="sidebarToggle"></button>
     </div>

 </ul>
 <!-- End  of Sidebar -->