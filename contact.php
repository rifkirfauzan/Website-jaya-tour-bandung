<?php include "header_jt.php" ?>
    <div id="middle" class="light_section">
        <div class="container">       
            <div class="row">
				<div class="col-sm-12 text-center">
                
                    <h2 class="block-header text-center">Contact Form</h2>
                    <form class="contact-form" method="post" action="/">
                        <p class="contact-form-name">
                            <label for="name">Name <span class="required">*</span></label>
                            <input type="text" aria-required="true" size="30" value="" name="name" id="name" class="form-control" placeholder="Name">
                        </p>
                        <p class="contact-form-email">
                            <label for="email">Email <span class="required">*</span></label>
                            <input type="email" aria-required="true" size="30" value="" name="email" id="email" class="form-control" placeholder="Email">
                        </p>
                        <p class="contact-form-subject">
                            <label for="subject">Subject <span class="required">*</span></label>
                            <input type="text" aria-required="true" size="30" value="" name="subject" id="subject" class="form-control" placeholder="Subject">
                        </p>
                        <p class="contact-form-message">
                            <label for="message">Message</label>
                            <textarea aria-required="true" rows="8" cols="45" name="message" id="message" class="form-control" placeholder="Message"></textarea>
                        </p>
                        <p class="contact-form-submit vertical-margin-40">
                            <input type="submit" value="Send" id="contact_form_submit" name="contact_submit" class="theme_btn">
                        </p>
                    </form>
                </div>
              
            </div>
        </div>
    </div>
<?php include "footer_jt.php" ?>