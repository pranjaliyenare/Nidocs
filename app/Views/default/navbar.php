
<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <!-- <h1 class="logo me-auto"><a href="<?php echo base_url(); ?>"><span>Nidocs</span></a></h1> -->
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="<?php echo base_url(); ?>" class="logo me-auto"><img src="<?php echo base_url(); ?>/public/assets/img/logo.png" alt="" class="img-fluid"></a>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class=" <?php if($page == 'index') { echo 'active'; } ?>" href="<?php echo base_url(); ?>">Home</a></li>
 
          <li><a class=" <?php if($page == 'about') { echo 'active'; } ?>" href="<?php echo base_url('about'); ?>">About</a></li>
 
          <li><a class=" <?php if($page == 'services') { echo 'active'; }?>" href="<?php echo base_url('services'); ?>">Services</a></li>
           
          <li><a class=" <?php if($page == 'contact') { echo 'active'; } ?>" href="<?php echo base_url('contact'); ?>">Contact</a></li>
 
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="header-social-links d-flex">
        <a href="#" class="twitter"><i class="bu bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bu bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bu bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bu bi-linkedin"></i></i></a>
      </div>

    </div>
  </header><!-- End Header -->
