<?php 
  $pagename="company";  
  include('header.php'); 
  include('common-banner.php');  
?>

<section>
  <div class="container">
      <div class="breadcrumb-data">
                    <nav aria-label="breadcrumb">
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">About</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Company Profile</li>
                      </ol>
                    </nav>
                </div>
      </div>
  </section>

    <section class="about_company_profile mb-5">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <h2 class="main_title mb-4">Company Profile</h2>
            <p><strong>KANDI ENGINEERING PVT. LTD.</strong> was incorporated in 1982 and started initial trading activities at Manor (Maharashtra), an Industrial area just 85 kms from Mumbai, INDIA. Cost saving and good quality being a motto of the management, the production started in 1995 for manufacture of industrial products related to Steel and Metallurgical Industry, for products namely:</p>
            <ul class="list">
            <li>Calorised &amp; Ceramic Coated Oxygen Lancing Pipes</li>
            <li>Burning / Thermal Lances for scrap, scull, non-ferrous cutting and clearing of tap holes, launders, etc.</li>
            <li>Refractory / Monolithic Injection Lance</li>
            <li>Manually Operated Slide-Gate System for pouring of liquid steel (upto 30 MT ton capacity)</li>
            <li>Powder Coated Pipes for Oil and Gas applications</li>
            <li>Coated Graphite Electrodes for EAF &amp; LF/VOD</li>
            <li>M.S. ERW Steel Pipes</li>
            </ul>
            <p><em class="caption-text">An ISO 9001 : 2015 Certified company</em></p>
            <img src="images/company-profile-certifiaction-img.jpg" width="600" class="img-fluid" alt="Responsive image">
            <p>An ISO 9001 : 2015 Certified company</p>
          </div>
          
          <?php include('sidebar.php'); ?>

        </div>
      </div>
      </section>





  <?php 
  
  include('footer.php'); 
  ?>