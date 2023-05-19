<!DOCTYPE html>
<html lang="en">

    <head>
    <?= $this->include('layouts/head') ?>
    </head>

    <body class="sb-nav-fixed">

    <!-- Navbar-->
    <?= $this->include('layouts/navbar') ?> 
    <!-- End of Navbar -->

    <div id="layoutSidenav">

    <!-- Sidebar-->
    <?= $this->include('layouts/sidebar') ?> 
    <!-- End of Sidebar -->

    <div id="layoutSidenav_content">

    <!-- Content-->
    <?= $this->renderSection('content') ?> 
    <!-- End of Content -->
            
    <!-- Footer-->
    <?= $this->include('layouts/footer') ?> 
    <!-- End of Footer -->    
            
    <!-- Scripts-->
    <?= $this->include('layouts/scripts') ?> 
    <!-- End of Scripts -->  
    
        </div>
    </div>
    </body>
</html>
