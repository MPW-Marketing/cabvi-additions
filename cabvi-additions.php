<?php
/**
 * Plugin Name: CABVI Additions
 * License: GPL2
 */
	 
// add_action('pagelines_before_branding_icons', 'add_address');
     function add_address() {
		 //$mailchimpform = mailchimpSF_signup_form();
     $cont .= '<span class="logo-address">507 Kent Street, Utica, NY 13501 | (315) 797-2233 toll free (877) 719-9996</span>';
	 
	 echo $cont;
 }
 
  add_action('pagelines_inside_bottom_content', 'add_social');
  
    function add_social() {
    echo '<div class="social">Follow us on<br />
		<div class="social-icons"><a href="https://www.facebook.com/cabvi1929" target="_blank"><img src="/wp-content/uploads/2015/01/FB-f-Logo__blue_50.png" /></a>
		</div><div class="social-icons"><a href="https://www.linkedin.com/company/1334720" target="_blank"><img src="http://www.cabvi.org/wp-content/uploads/2015/08/In-2C-54px-R.png" /></a>
		</div></div>';
}