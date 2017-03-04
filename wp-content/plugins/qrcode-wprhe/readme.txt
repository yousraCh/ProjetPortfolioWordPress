=== QR Code Generator ===
Contributors: ReneHermi
Donate link: http://www.free-qr-code.net
Tags: qr code, qrcode, qr code generator, qrcode generator, qr code shortcode, qrcode shortcode, barcode, scan, shortcode, image, page, links, widget, post, plugin, admin, posts, images, kaywa, visual qr code, color qr code 
Requires at least: 2.0.2
Tested up to: 4.2
Stable tag: 1.2.6
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

QR Code Wordpress plugin to insert a QR code in your blog. The qr code contains the current URL or any other text you like.


== Description ==



Use this qr code wordpress plugin to create a qr code on any site of your Wordpress installation. Content can be any text or the current URL of the site where it is embeded.



How to use it:

* Use the shortcode [qrcode] within your site to generate a qr code including the URL of the current site
  
* Use the fullowing short code to generate a indivdual qr code with any text content:

  [qrcode content="CONTENT" size="120" alt="ALT_TEXT" class="CLASS_NAME"] 
 
 * It`s not neccessary to give any parameters!
   
 * Possible parameters are: alt, size, class, credit, shadow 
 
 * If you don`t give any parameter like 'alt' or 'size', the standard parameters are:
    alt = "Scan the QR Code"
    size = 120
    class=""
    credit = true
    shadow = true

* The credit option gives a really small but nice looking image link on bottom of the qrcode. If you don´t like it or don´t want to give me any credits you can deactivate it with 'credit = false'. But i will be glad if you let that small link where it is :D'


Look at [free-qr-code.net](http://www.free-qr-code.net/qr-code-wordpress-plugin.html "free-qr-code.net") for further information and for a easy useable qr code online generator.

Try out  [qrcode-generator.com](http://www.qrcode-generator.com "qrcode-generator") for a QR Code Generator with free tracking and scan statistics.

== Changelog ==

= 1.2.7 =
* Remove credit option

= 1.2.5 = 

Fixed some php notices and missing </div>

= 1.2.4 = 

* Just a minor update. Update not necessary

= 1.2.3 =

* Wrap nice looking shadow border box around the qr code and the <3. Deactivate it with [qrcode shadow=false]

= 1.2 =

* Tested up to Wordpress 3.5.1 | Put a nice looking powered by image link | You can deactive that link if you do not want to give any credit or do not like it. But i would be glad if you let it where it is or give me a backlink on any other page of your website.

= 1.1 =

* Tested up to Wordpress 3.4.2

= 1.0 =

* First stable version of the qr code generator plugin



== Installation ==

This section describes how to install the plugin and get it working.


1. Unzip the qr-code-generator file qrcode_wprhe.zip 
2. Upload `qrcode_wprhe.php` to the directory `/wp-content/plugins/qrcode_wprhe/`
3. Activate the plugin through the 'Plugins' menu in WordPress
4. Done

* I am very thankful if you give me credit and a backlink to http://www.free-qr-code.net

== Frequently Asked Questions ==



* This plugins makes use of the Google Chart Tools https://developers.google.com/chart/

* I am very thankful if you give me credit and a backlink to http://www.free-qr-code.net


== Screenshots ==

1. Shows a example content site with the generated qr code
2. Shows the using of the shortcode within the backend in wp-admin
3. The QR Code with activated shadow

== Author ==

Rene Hermenau

"I create useful free microsites!"
(http://www.free-qr-code.net "Free qr code online generator")

