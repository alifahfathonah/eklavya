<section class="contact-page-top">
<h1 class="text-center" >Contact Us</h1>

</section>

<section class="contact-middle">
<div class="container-fluid">
  <div class="container">
    <div class="row border-contact">
      <div class="col-md-6">
        <div class="alert alert-success " role="alert" style="display:none">
          Email Send Successfully
        </div>
        <div class="alert alert-danger" role="alert" style="display:none">
          Email Not Send please Try Again
        </div>
        <div class="mail-contact d-none d-sm-block">
          <div class="form contact-form">
            <h4>Let's Connect</h4>
                <div id="errormessage"></div>
                  <form action="<?php echo base_url();?>Website/send_mail" method="post"  role="form" class="contactForm">
                    <div class="form-group">
                      <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars"  required/>
                      <div class="validation"></div>
                    </div>
                    <div class="form-group">
                      <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" required />
                      <div class="validation"></div>
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" name="mobile" id="nobile" placeholder="Your Mobile No." data-rule="minlen:10" data-msg="Please enter a valid Mobile No."  required/>
                      <div class="validation"></div>
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                      <div class="validation"></div>
                    </div>
                    <div class="form-group">
                      <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                      <div class="validation"></div>
                    </div>
                    <div class="text-center"><button class="btn btn-outline-primary btn-techno" type="submit">Send Message</button></div>
                  </form>
                </div>
        </div>

      </div>
      <div class="col-md-6" id="con-text">
        <h4>Contact Us</h4>
        <p> <b class="big-text">Address :</b> Waghbil, Panhala, Rakshi, Maharashtra 416201</p>

        <p> <b  class="big-text">Principal  No. : </b> +91 855094 2204 </p>
        <p> <b  class="big-text">Vice-Principal No. : </b> +91 959565 9500 </p>
        <p> <b  class="big-text">School No. : </b> +91 966514 0230</p>
        <p> <b  class="big-text">Email : </b> <span class="theme-color">eklavyapublicschool@gmail.com</span> </p>
       <p class="center"> <a class="social" href="#"><i class="fab fa-facebook-f social"></i></a>   &nbsp; <a class="social" href="#"><i class="fab fa-twitter"></i></a> &nbsp;
         <a class="social" href="#"><i class="fab fa-linkedin-in"></i></a> &nbsp; <a class="social" href="#"><i class="fab fa-instagram"></i></a>  </p>

         <div class="map-div mb-4 d-none d-sm-block">
           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6423.832820450353!2d74.14315860327665!3d16.794882789855556!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc1a93d49b020c9%3A0x94dcf87a9baf829a!2sEklavya%20Public%20School!5e0!3m2!1sen!2sin!4v1580626417341!5m2!1sen!2sin" width="600" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
         </div>
      </div>

      <div class="col-md-6 d-block d-sm-none mb-4">
        <div class="mail-contact ">
          <div class="form contact-form">
            <h4>Let's Connect</h4>
                <div id="errormessage"></div>
                  <form action="<?php echo base_url();?>Website/send_mail" method="post"  role="form" class="contactForm">
                    <div class="form-group">
                      <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                      <div class="validation"></div>
                    </div>
                    <div class="form-group">
                      <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                      <div class="validation"></div>
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" name="mobile" id="nobile" placeholder="Your Mobile No." data-rule="minlen:10" data-msg="Please enter a valid Mobile No." />
                      <div class="validation"></div>
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                      <div class="validation"></div>
                    </div>
                    <div class="form-group">
                      <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                      <div class="validation"></div>
                    </div>
                    <div class="text-center"><button class="btn btn-outline-primary btn-techno" type="submit">Send Message</button></div>
                  </form>
                </div>
        </div>

      </div>
    </div>
  </div>

 <div class="row">
   <div class="col-md-12">
     <div class="map">
       <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3822.753303278958!2d74.28052601434369!3d16.63914582833291!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc1012619d99647%3A0x659bce8c62e22dd!2sTechno%20Thinks%20Up%20Solutions%20Pvt%20Ltd!5e0!3m2!1sen!2sin!4v1577509701556!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe> -->
     </div>
   </div>
 </div>


  </div>
</div>
</section>


<script type="text/javascript">
      $(document).ready(function(){

        <?php if($this->session->flashdata('send_email_sucess')){ ?>
            $('.alert-success').show().delay(5000).fadeOut();
      <?php  }
      elseif ($this->session->flashdata('send_email_error')) {?>
        $('.alert-danger').show().delay(5000).fadeOut();
      <?php } ?>
      });
    </script>
