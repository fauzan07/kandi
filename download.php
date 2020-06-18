<?php 
    $pagename="downloads";
    include('header.php'); 
    include('common-banner.php');  
?>

<section>
    <div class="container">
        <div class="breadcrumb-data">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Downloads</li>
                </ol>
            </nav>
        </div>
    </div>
</section>

<section class="about_company_profile mb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h2 class="main_title mb-4">Downloads</h2>
                <ul class="list">
                <li><a href="upload-pdf/Kkandi-Company-Brochure.pdf" target="_blank" rel="noopener">Company Brochure</a></li>
                <li><a href="upload-pdf/Kandi-CCCP-Brochure.pdf" target="_blank" rel="noopener">Calorised and Coated Ceramic Pipe &#8211; Brochure</a></li>
                <li><a href="upload-pdf/Kkandi-Burning-Lance-Final.pdf" target="_blank" rel="noopener">Burning / Thermal Lance &#8211; Brochure</a></li>
                <li><a href="upload-pdf/Kandi-Lance-Holder-Spec.pdf" target="_blank" rel="noopener">Burning / Thermal Lance Holder &#8211; Spec</a></li>
                <li><a href="upload-pdf/Coated-Graphite.pdf" target="_blank" rel="noopener">Coated Graphite Electrode &#8211; Brochure</a></li>
                <li><a href="upload-pdf/MSDS-of-Thermal-Lance-Pipes.pdf" target="_blank" rel="noopener">Material Safety Data Sheet &#8211; MSDS Burning / Thermal Lance</a></li>
                <li><a href="upload-pdf/Kandi-msds-ceramic-coated-pipe.pdf" target="_blank" rel="noopener">Material Safety Data Sheet &#8211; Calorised &amp; Coated Ceramic Pipe</a></li>
                </ul>
               
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