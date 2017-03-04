<?php

/**
 *  Template Name : contacts
 */

get_header();  ?>

<div class="contacts container">
<div id="carte" class="col-xs-12 col-md-12 col-sm-12 col-lg-12">
    <?php echo do_shortcode( "[google_maps id=\"71\"]" ) ?>
</div>
    <section>
<div id="coordonnee" class="col-xs-12 col-sm-12 col-md-6  col-lg-6 row">

        <div id="mobile">
            <div id="icone_mobile">
                <i class="fa fa-mobile"></i>
            </div>
        </div>

        <p><strong> <div id="num_tel">
                    (+33) 6756929** </div></strong></p>
        <p><div class="mail_link">yousrachkarnat@gmail.com</div></p>
        <p><div class="mail_link">www.yousrachkarnat.com</div></p>
    <br>
   <div class="codeQR">
       <?php echo do_shortcode( "[su_qrcode data=\"http://chart.apis.google.com/chart?cht=qr&chs=300x300&chl=BEGIN:VCARD%0AVERSION:2.1%0AN:chkarnat;yousra%0AFN:yousra%20chkarnat%0AORG:%0ATITLE:%0AADR:;;avenue%20champollion;Dijon;;21000;France%0ATEL;WORK;VOICE:%2B33675692941%0AEMAIL;PREF;INTERNET:yousrachkarnat%40gmail.com%0AURL:%0ANOTE:avenue%20champollion%0AEND:VCARD&choe=UTF-8&chld=L\" title=\"QR\"]" ) ?>
   </div>
        <div class="vcard">
            <?php echo do_shortcode( "	[qrcode src=\"phpqrcode\" mode=\"auto\" size=\"7\" err=\"L\" css=\"none\"]" ) ?>
            </div>
        </div>
</div>
    </section>

    <aside class="col-xs-12 col-sm-12 col-md-6 col-lg-6 row">

        <div id="coord_title"><h1>LET'S KEEP IN TOUCH </h1> </div>
        <?php echo do_shortcode( "[contact-form-7 id=\"10\" title=\"contact1\"]" ) ?>

     </aside>


</div>

<?php get_footer(); ?>

