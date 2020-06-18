<?php 
    $pagename="contact";
    include('header.php'); 
    include('common-banner.php');  
?>

<section>
    <div class="container">
        <div class="breadcrumb-data">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                </ol>
            </nav>
        </div>
    </div>
</section>

<section  class="mb-4">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="main_title mb-4">Get in Touch</h2>
            </div>

            <div class="col-md-6">
                <form action="form-action-contact.php" method="post">
                    <div class="form-group"><input type="text" class="form-control" maxlength="40" name="fname"
                            id="fname" placeholder="Your Name" required></div>
                    <div class="form-group"><input type="text" class="form-control" maxlength="40" name="companyname"
                            id="companyname" placeholder="Your Company Name" required></div>
                    <div class="form-group"><input type="text" class="form-control" maxlength="40" name="designation"
                            id="designation" placeholder="Your Designation" required></div>
                    <div class="form-group"><input type="email" class="form-control" name="email" id="email"
                            placeholder="Your Email Address" required></div>
                    <div class="form-group"><input type="text" class="form-control" maxlength="10"
                            pattern="[789][0-9]{9}" name="mobile" id="mobile" placeholder="Your Mobile Number" required>
                    </div>
                    <div class="form-group"><input type="text" class="form-control" maxlength="50" name="subject"
                            id="subject" placeholder="Subject"></div>
                    <div class="form-group">
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option selected>For Product</option>
                            <option value="Calorised and Ceramic Coated Pipe">Calorised and Ceramic Coated Pipe</option>
                            <option value="Burning / Thermal Lance">Burning / Thermal Lance</option>
                            <option value="Refractory / MonoLithic Injection Lance">Refractory / MonoLithic Injection Lance</option>
                            <option value="Manually Operated Slide-Gate System">Manually Operated Slide-Gate System</option>
                            <option value="Powder Coated Pipe">Powder Coated Pipe</option>
                            <option value="M.S. ERW Pipes">M.S. ERW Pipes</option>
                            <option value="Coated Graphite Electrodes">Coated Graphite Electrodes</option>
                        </select>
                    </div>
                    <div class="form-group"><textarea class="form-control" placeholder="Your Message"
                            id="exampleFormControlTextarea1" rows="3" maxlength="90" name="message"></textarea></div>
                    <p>Verify you're a human - Please enter the following code in the box below- 7102</p>
                    <div class="form-group"><input type="text" class="form-control" name="code" placeholder="" required>
                    </div>
                    <button type="button" class="mediabtn2" data-toggle="collapse" data-target="#demo">submit</button>
                </form>
            </div>
            <!--end service col-->
            <div class="col-md-6">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7538.86541820458!2d72.83229403463967!3d19.132527246919153!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd403623bc74c0415!2sKandi%20Engineering%20Pvt%20Ltd!5e0!3m2!1sen!2sin!4v1587382228058!5m2!1sen!2sin"
                    width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                    tabindex="0"></iframe>
            </div>
            <!--end service col-->
        </div>
        <!--end row-->
</section>

<?php 
  include('about_kandi.php');
  include('footer.php'); 
  ?>