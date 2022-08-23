<?php

/**

 * Template Name: Contact Page

 *

 * @package WordPress

 * @subpackage Otherside Consulting

 * @since Otherside Consulting 1.0

 */

get_header(); ?>
<section class="section-padding bg-deep">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12285.599438181325!2d-105.0149922!3d39.663219!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc47c315f9d47ea22!2sForklift+Specialists+Inc!5e0!3m2!1sen!2sus!4v1551817679274" width="700" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></div>
                    <!--/.comment-form-->
                </div>
                <div class="col-md-4">
                    <div class="address-box boxshadow">
                        <h4><a href="#">Address </a></h4>
                        <p>Forklift Specialists<br/>
                          1224, 2975 S Wyandot St, Englewood <br/>CO 80110
                        </p>
                    </div>
                    <div class="address-box boxshadow">
                        <h4><a href="#">Talk with us</a></h4>
                        <p>Phone: <a href="tel:3039342111">(303)934-2111</a><br/>
Email:                    <a href="mailto:services@forkliftspecialists.com">services@forkliftspecialists.com</a><br/>
</p>
                    </div>
                </div>
                <div class="col-sm-12">
                	<div class="contact-form bg-white">
                        <form id="contact">
                            <div class="input-head">
                                <h4><a href="#">Get in Touch!</a></h4>
                            </div>
                            <div class="input-field">
                                <div class="single-input">
                                    <input type="text" name="name" placeholder="Name" class="form-control" required/>
                                </div>
                                <div class="single-input">
                                    <input type="email" name="email" placeholder="Email" class="form-control" required/>
                                </div>
                                <div class="single-input">
                                    <input type="url" name="website" placeholder="Website" class="form-control">
                                </div>
                            </div>
                            <div class="message-box">
                                <textarea name="message" placeholder="Message" required></textarea>
                            </div>
                            <input type="hidden" name="recipient_email" value="contact@enroutedigitallab.com" />
                            <input type="hidden" name="from_email" value="contact@enroutedigitallab.com" />
                            <button type="submit" class="cryptod-button-warning">Send</button>
                        </form>
                    </div>

                </div>
            </div><!--/.row-->
        </div><!--/.container-->
    </section>

<?php
get_footer();
