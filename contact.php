<?php 
$title = "Contact Us";
	include("assets/includes/header.php");
    include("admin/assets/includes/connection.php");
$msg = "";
if (isset($_POST['send'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message']; 

    $sql = "INSERT INTO contacts(name,email,message) VALUES ('$name','$email','$message')";
    if ($conn->query($sql) === TRUE) {
        $msg = "Thanks for your interest, we will reply your message within 24Hrs";
        ?><script type="text/javascript">
        alert('Thank you for your message. We will contact you soon..!');
    </script>
        <?php
    }else{
        echo $conn->error;
    }

}

?>
<section class="container">
	<div class="col-lg-12 py-4 my-4 text-center">
		<h2 class="text-primary">We are Happy to help you...!</h2>
	</div>
	<div class="thm-container">
         <div class="row">
             <div class="col-md-8">
                 <div class="contact-form-content">
                     <div class="title">
                         <span>Contact with us</span>
                         <h2>Send Message</h2>
                         <p class="text-danger"><?php echo $msg; ?></p>
                     </div><!-- /.title -->
                     <form method="POST" class="contact-form">
                         <input type="text" name="name" placeholder="Your full name" required>
                         <input type="text" name="email" placeholder="Your email address" required>
                         <textarea name="message" placeholder="What you are looking for?" required></textarea>
                         <button type="submit" name="send" class="thm-btn yellow-bg">Submit Now</button>
                         <div class="form-result"></div><!-- /.form-result -->
                     </form>
                 </div><!-- /.contact-form-content -->
             </div><!-- /.col-md-8 -->
             <div class="col-md-4">
                 <div class="contact-info-page text-center">
                     <div class="title text-center">
                        <span>Contact info</span>
                        <h2>Details</h2>
                     </div><!-- /.title -->
                     <div class="single-contact-info-page">
                         <h4>Address</h4>
                         <p><b>Kalyani Builders & Developers,</b><br>
                         	Plot No. 33, 937/1, Sarve No.10, Jadhavawadi, Jalgaon Road, Opp. Renuka Mata Mandir, Aurangabad.
                         </p>
                     </div><!-- /.single-contact-info-page -->
                     <div class="single-contact-info-page">
                         <h4>Phone</h4>
                         <p><!--Local: 222 999 888 <br> --> Mobile: +91 9881223533</p>
                     </div><!-- /.single-contact-info-page -->
                     <div class="single-contact-info-page">
                         <h4>Email</h4>
                         <p>needhelp@printify.com <br> <!--inquiry@printify.com--></p>
                     </div><!-- /.single-contact-info-page -->
                     <div class="single-contact-info-page">
                         <h4>Follow</h4>
                         <div class="social">
                            <a href="#" class="fab fa-twitter hvr-pulse"></a><!--  
                             --><a href="https://instagram.com/kalyani_builders_4300_?igshid=YmMyMTA2M2Y=" class="fab fa-linkedin hvr-pulse"></a><!--  
                             --><a href="https://www.facebook.com/ratan.kale.7509" class="fab fa-facebook-f hvr-pulse"></a><!--  
                             --><a href="#" class="fab fa-youtube hvr-pulse"></a>
                        </div><!-- /.social -->
                     </div><!-- /.single-contact-info-page -->
                 </div><!-- /.contact-info-page -->
             </div><!-- /.col-md-4 -->
         </div><!-- /.row -->
     </div>
</section>
<?php
	include("assets/includes/footer.php");
?>