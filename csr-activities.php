<?php 
    $pagename="activities";
    include('header.php'); 
    include('common-banner.php');  
?>

<section>
    <div class="container">
        <div class="breadcrumb-data">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">CRS Activities</li>
                </ol>
            </nav>
        </div>
    </div>
</section>

<section class="about_company_profile mb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h2 class="main_title mb-4">CRS Activities</h2>
                <img src="images/CSR1.jpg" class="my-3 img-fluid" alt="Responsive image">
                <p>Inauguration of Classroom provided to School at Manor Mar’15</p>
                <img src="images/CSR2.jpg" class="my-3 img-fluid" alt="Responsive image">
                <p>Supported E-learning and Rubella activities at Manor</p>
                <img src="images/CSR3.jpg" class="my-3 img-fluid" alt="Responsive image">
                <p>Other CSR Activities</p>
            </div>
            <!-- <div class="col-md-1">
          <span class="vertical-line"></span>
          </div>
       -->
            <?php include('sidebar.php'); ?>

        </div>
    </div>
</section>





<?php 
  include('about_kandi.php');
  include('footer.php'); 
  ?>