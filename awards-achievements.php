<?php 
  $pagename="awards";
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
                    <li class="breadcrumb-item active" aria-current="page">Awards & Achievements</li>
                </ol>
            </nav>
        </div>
    </div>
</section>

<section class="about_company_profile mb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h2 class="main_title mb-4">Awards & Achievements</h2>
                <p>Over the years, Kandi Engineering Pvt Ltd&#8217;s achievements have been recognised by various industry analysts, forums and clients. Here are some of our recent achievements</p>
                <img src="images/award-1.jpg" class="img-fluid" alt="Responsive image">
                <p>Awards &#8211; Rotary Club &amp; EEPC Shield Award</p>
                <img src="images/award-2.jpg" class="img-fluid" alt="Responsive image">
                <p>Century Quality International ERA Award at Geneva Mar’15</p>
                <img src="images/award-3.jpg" class="img-fluid" alt="Responsive image">
                <p>IndiaMart Award – Leaders of Tomorrow</p>
                <img src="images/award-4.jpg" class="img-fluid" alt="Responsive image">
                <p>Mahanagar Gas Limited &#8211; Certificate of Appreciation</p>
            </div>

            <?php include('sidebar.php'); ?>

        </div>
    </div>
</section>





<?php 
  include('about_kandi.php');
  include('footer.php'); 
  ?>