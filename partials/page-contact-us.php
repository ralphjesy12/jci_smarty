<!-- -->
<section>

    <!--
    Available heights
    height-100
    height-150
    height-200
    height-250
    height-300
    height-350
    height-400
    height-450
    height-500
    height-550
    height-600
-->
<div id="map2" class="contact-over-map"></div>


<div class="container">

    <div class="contact-over-box pull-right">

        <h3 class="size-20">Drop us a line or just say <strong><em>Hello!</em></strong></h3>


        <!--
        MESSAGES

        How it works?
        The form data is posted to php/contact.php where the fields are verified!
        php.contact.php will redirect back here and will add a hash to the end of the URL:
        #alert_success 		= email sent
        #alert_failed		= email not sent - internal server error (404 error or SMTP problem)
        #alert_mandatory	= email not sent - required fields empty
        Hashes are handled by assets/js/contact.js

        Form data: required to be an array. Example:
        contact[email][required]  WHERE: [email] = field name, [required] = only if this field is required (PHP will check this)
        Also, add `required` to input fields if is a mandatory field.
        Example: <input required type="email" value="" class="form-control" name="contact[email][required]">

        PLEASE NOTE: IF YOU WANT TO ADD OR REMOVE FIELDS (EXCEPT CAPTCHA), JUST EDIT THE HTML CODE, NO NEED TO EDIT php/contact.php or javascript
        ALL FIELDS ARE DETECTED DINAMICALY BY THE PHP

        WARNING! Do not change the `email` and `name`!
        contact[name][required] 	- should stay as it is because PHP is using it for AddReplyTo (phpmailer)
        contact[email][required] 	- should stay as it is because PHP is using it for AddReplyTo (phpmailer)
    -->

    <!-- Alert Success -->
    <div id="alert_success" class="alert alert-success margin-bottom-30">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <strong>Thank You!</strong> Your message successfully sent!
    </div><!-- /Alert Success -->


    <!-- Alert Failed -->
    <div id="alert_failed" class="alert alert-danger margin-bottom-30">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <strong>[SMTP] Error!</strong> Internal server error!
    </div><!-- /Alert Failed -->


    <!-- Alert Mandatory -->
    <div id="alert_mandatory" class="alert alert-danger margin-bottom-30">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <strong>Sorry!</strong> You need to complete all mandatory (*) fields!
    </div><!-- /Alert Mandatory -->


    <form action="<?=get_template_directory_uri()?>/php/contact.php" method="post" enctype="multipart/form-data">
        <fieldset>
            <input type="hidden" name="action" value="contact_send" />

            <div class="row">
                <div class="col-md-12 margin-bottom-20">
                    <label for="contact:name">Full Name *</label>
                    <input required type="text" value="" class="form-control" name="contact[name][required]" id="contact:name">
                </div>
                <div class="col-md-12 margin-bottom-20">
                    <label for="contact:email">E-mail Address *</label>
                    <input required type="email" value="" class="form-control" name="contact[email][required]" id="contact:email">
                </div>
                <div class="col-md-12 margin-bottom-20">
                    <label for="contact:phone">Phone</label>
                    <input type="text" value="" class="form-control" name="contact[phone]" id="contact:phone">
                </div>

                <div class="col-md-12 margin-bottom-20">
                    <label for="contact:subject">Subject *</label>
                    <input required type="text" value="" class="form-control" name="contact[subject][required]" id="contact:subject">
                </div>
                <!-- <div class="col-md-12 margin-bottom-20">
                    <label for="contact_department">Department</label>
                    <select class="form-control pointer" name="contact[department]">
                        <option value="">--- Select ---</option>
                        <option value="Marketing">Marketing</option>
                        <option value="Webdesign">Webdesign</option>
                        <option value="Architecture">Architecture</option>
                    </select>
                </div> -->

                <div class="col-md-12 margin-bottom-20">
                    <label for="contact:message">Message *</label>
                    <textarea required maxlength="10000" rows="6" class="form-control" name="contact[message]" id="contact:message"></textarea>
                </div>
            </div>

        </fieldset>

        <div class="row">
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> SEND MESSAGE</button>
            </div>
        </div>
    </form>
</div>
</div>
</section>
<!-- / -->



<!-- PAGELEVEL SCRIPTS -->
<script type="text/javascript" src="<?=get_template_directory_uri()?>/assets/js/contact.js"></script>

<!--
GMAP.JS
http://hpneo.github.io/gmaps/
-->
<script type="text/javascript" src="//maps.google.com/maps/api/js?key=AIzaSyCqCn84CgZN6o1Xc3P4dM657HIxkX3jzPY"></script>
<script type="text/javascript" src="<?=get_template_directory_uri()?>/assets/plugins/gmaps.js"></script>
<script type="text/javascript">

jQuery(document).ready(function(){

    /**
    @BASIC GOOGLE MAP
    **/
    var map2 = new GMaps({
        div: '#map2',
        lat: 14.4124927,
        lng: 120.9215917,
        scrollwheel: false
    });

    var marker = map2.addMarker({
        lat: 14.4124927,
        lng: 120.9215917,
        title: 'JCI Imus Wagayway'
    });

});

</script>
