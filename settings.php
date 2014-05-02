<?php 
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Version details
 *
 * @package    Theme
 * @subpackage elearning
 * @copyright 2014 onwards Perception System Pvt.Ltd.  (http://www.perceptionsystem.com)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
$settings = null; 

defined('MOODLE_INTERNAL') || die; 


	$ADMIN->add('themes', new admin_category('theme_elearning', 'PS-learning')); 

	// "geneicsettings" settingpage 
	$temp = new admin_settingpage('theme_elearning_generic',  get_string('geneicsettings', 'theme_elearning')); 
	 
	 // Logo file setting
    $name = 'theme_elearning/logo';
    $title = get_string('logo','theme_elearning');
    $description = get_string('logodesc', 'theme_elearning');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'logo');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Header Title  setting
    $name = 'theme_elearning/headertexttitle';
    $title = get_string('headertexttitle','theme_elearning');
    $description = get_string('headertextdesc', 'theme_elearning');    
    $setting = new admin_setting_configtext($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Header Details  setting
    $name = 'theme_elearning/headertextdetail';
    $title = get_string('headertextdetail','theme_elearning');
    $description = get_string('headertextdetaildesc', 'theme_elearning');    
    $setting = new admin_setting_confightmleditor($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    $ADMIN->add('theme_elearning', $temp);
    
    
    // "Welcome page" setting 
	$temp = new admin_settingpage('theme_elearning_welcome',  get_string('welcomepage', 'theme_elearning'));	
 
     // Welcome page Title  setting
    $name = 'theme_elearning/welcometitle';
    $title = get_string('welcometitle','theme_elearning');
    $description = get_string('welcometitledesc', 'theme_elearning');   
    $setting = new admin_setting_configtext($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Welcome page Sub Title  setting
    $name = 'theme_elearning/welcomesubtitle';
    $title = get_string('welcomesubtitle','theme_elearning');
    $description = get_string('welcomesubtitledesc', 'theme_elearning');    
    $setting = new admin_setting_configtext($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Welcome page  Content setting
    $name = 'theme_elearning/welcomecontent';
    $title = get_string('welcomecontent','theme_elearning');
    $description = get_string('welcomecontentdesc', 'theme_elearning');    
    $setting = new admin_setting_confightmleditor($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);   
    
    // Welcome page  BG Image setting
    $name = 'theme_elearning/pagebackground';
    $title = get_string('pagebackground','theme_elearning');
    $description = get_string('welcomebgimagedesc', 'theme_elearning');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'pagebackground');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);    
    
    // Welcome page  buttontext setting
    $name = 'theme_elearning/welcomebuttontext';
    $title = get_string('welcomebuttontext','theme_elearning');
    $description = get_string('welcomebuttontextdesc', 'theme_elearning');    
    $setting = new admin_setting_configtext($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Welcome page buttonurl   setting
    $name = 'theme_elearning/welcomebuttonurl';
    $title = get_string('welcomebuttonurl','theme_elearning');
    $description = get_string('welcomebuttonurldesc', 'theme_elearning');    
    $setting = new admin_setting_configtext($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
     $ADMIN->add('theme_elearning', $temp);
     
     // "Upcoming Course page" setting 	 	
	$temp = new admin_settingpage('theme_elearning_upcourse', get_string('upcourse', 'theme_elearning'));
	
	// Upcoming Coursel page Separator Icon  setting
    $name = 'theme_elearning/upcourseseparatoricon';
    $title = get_string('upcourseseparatoricon','theme_elearning');
    $description = get_string('upcoursesepicondesc', 'theme_elearning');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'upcourseseparatoricon');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting); 
	
	// Upcoming Course page Title  setting
    $name = 'theme_elearning/upcoursetitle';
    $title = get_string('upcoursetitle','theme_elearning');
    $description = get_string('upcoursetitledesc', 'theme_elearning');
    $setting = new admin_setting_configtext($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);  
    
    // Content.
    $name = 'theme_elearning/upcoursecontent';
    $title = get_string('upcoursecontent', 'theme_elearning');
    $description = get_string('upcoursecontentdesc', 'theme_elearning');
    $setting = new admin_setting_confightmleditor($name, $title, $description, '');    
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);     
    
	$ADMIN->add('theme_elearning', $temp);


     // "Testimonial page" setting 	 
     	
	$temp = new admin_settingpage('theme_elearning_Testimonial', get_string('testimonial', 'theme_elearning'));
	
	// Testimonial page Title  setting
    $name = 'theme_elearning/testimonialtitle';
    $title = get_string('testimonialtitle','theme_elearning');
    $description = get_string('testimonialtitledesc', 'theme_elearning');  
    $setting = new admin_setting_configtext($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);  
    
    // Testimonial page Separator Icon  setting
    $name = 'theme_elearning/testimonialseparatoricon';
    $title = get_string('testimonialseparatoricon','theme_elearning');
    $description = get_string('testimonialsicondesc', 'theme_elearning');   
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'testimonialseparatoricon');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);      
    
    // Testimonial page SeparatorLine setting
    $name = 'theme_elearning/testimonialseparatorline';
    $title = get_string('testimonialseparatorline','theme_elearning');
    $description = get_string('testimonialslinedesc', 'theme_elearning'); 
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'testimonialseparatorline');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting); 
    
    // Testimonial page  BG Image setting
    $name = 'theme_elearning/testimonialbackground';
    $title = get_string('testimonialbackground','theme_elearning');
    $description = get_string('testimonialbgdesc', 'theme_elearning'); 
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'testimonialbackground');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);    
    
	/*
     * Testimonial 1
     */
     
    //This is the descriptor for Testimonial 1
    $name = 'theme_elearning/testimonial1info';
    $heading = get_string('testimonial1', 'theme_elearning');    
    $setting = new admin_setting_heading($name, $heading, '');
    $temp->add($setting);

    // Content.
    $name = 'theme_elearning/testimonialcontent1';
    $title = get_string('testimonialcontent', 'theme_elearning');
    $description = get_string('testimonialcontentdesc', 'theme_elearning'); 
    $setting = new admin_setting_confightmleditor($name, $title, $description, '');    
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Name.
    $name = 'theme_elearning/testimonialname1';
    $title = get_string('testimonialname', 'theme_elearning');
    $description = get_string('testimonialnamedesc', 'theme_elearning');
    $setting = new admin_setting_configtext($name, $title, $description, '');    
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Company Name.
    $name = 'theme_elearning/testimonialcompanyname1';
    $title = get_string('testimonialcompanyname', 'theme_elearning');
    $description = get_string('testimonialcnamedesc', 'theme_elearning');
    $setting = new admin_setting_configtext($name, $title, $description, '');   
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    /*
     * Testimonial 2
     */
     
    //This is the descriptor for Testimonial 2
    $name = 'theme_elearning/testimonial2info';
    $heading = get_string('testimonial2', 'theme_elearning');    
    $setting = new admin_setting_heading($name, $heading, '');
    $temp->add($setting);

    // Content.
    $name = 'theme_elearning/testimonialcontent2';
    $title = get_string('testimonialcontent', 'theme_elearning');
    $description = get_string('testimonialcontentdesc', 'theme_elearning'); 
    $setting = new admin_setting_confightmleditor($name, $title, $description, '');    
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Name.
    $name = 'theme_elearning/testimonialname2';
    $title = get_string('testimonialname', 'theme_elearning');
	$description = get_string('testimonialnamedesc', 'theme_elearning'); 
    $setting = new admin_setting_configtext($name, $title, $description, '');   
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Company Name.
    $name = 'theme_elearning/testimonialcompanyname2';
    $title = get_string('testimonialcompanyname', 'theme_elearning');
    $description = get_string('testimonialcnamedesc', 'theme_elearning');
    $setting = new admin_setting_configtext($name, $title, $description, '');    
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    /*
     * Testimonial 3
     */
     
    //This is the descriptor for Testimonial 3
    $name = 'theme_elearning/testimonial3info';
    $heading = get_string('testimonial3', 'theme_elearning');
    $setting = new admin_setting_heading($name, $heading, '');
    $temp->add($setting);

    // Content.
    $name = 'theme_elearning/testimonialcontent3';
    $title = get_string('testimonialcontent', 'theme_elearning');
    $description = get_string('testimonialcontentdesc', 'theme_elearning');
    $setting = new admin_setting_confightmleditor($name, $title, $description, '');   
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Name.
    $name = 'theme_elearning/testimonialname3';
    $title = get_string('testimonialname', 'theme_elearning');
    $description = get_string('testimonialnamedesc', 'theme_elearning');
    $setting = new admin_setting_configtext($name, $title, $description, '');    
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Company Name.
    $name = 'theme_elearning/testimonialcompanyname3';
    $title = get_string('testimonialcompanyname', 'theme_elearning');
    $description = get_string('testimonialcnamedesc', 'theme_elearning');
    $setting = new admin_setting_configtext($name, $title, $description, '');    
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
	
	
     /*
     * Testimonial 4
     */
     
    //This is the descriptor for Testimonial 4
    $name = 'theme_elearning/testimonial4info';
    $heading = get_string('testimonial4', 'theme_elearning');    
    $setting = new admin_setting_heading($name, $heading, '');
    $temp->add($setting);

    // Content.
    $name = 'theme_elearning/testimonialcontent4';
    $title = get_string('testimonialcontent', 'theme_elearning');
    $description = get_string('testimonialcontentdesc', 'theme_elearning');
    $setting = new admin_setting_confightmleditor($name, $title, $description, '');   
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Name.
    $name = 'theme_elearning/testimonialname4';
    $title = get_string('testimonialname', 'theme_elearning');
    $description = get_string('testimonialnamedesc', 'theme_elearning');
    $setting = new admin_setting_configtext($name, $title, $description, '');   
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Company Name.
    $name = 'theme_elearning/testimonialcompanyname4';
    $title = get_string('testimonialcompanyname', 'theme_elearning');
    $description = get_string('testimonialcnamedesc', 'theme_elearning');
    $setting = new admin_setting_configtext($name, $title, $description, '');    
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
	 $ADMIN->add('theme_elearning', $temp);
    
     // "Purchase theme page" setting 	 	
	$temp = new admin_settingpage('theme_elearning_purchase', get_string('purchase', 'theme_elearning'));
	
	// Purchase theme Heading  setting
    $name = 'theme_elearning/purchaseheading';
    $title = get_string('purchaseheading','theme_elearning');
    $description = get_string('purchaseheadingdesc', 'theme_elearning');    
    $setting = new admin_setting_confightmleditor($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
	// Purchase theme  buttontext setting
    $name = 'theme_elearning/purchasebtntext';
    $title = get_string('purchasebtntext','theme_elearning');
    $description = get_string('purchasebtndesc', 'theme_elearning');     
    $setting = new admin_setting_configtext($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Purchase theme buttonurl   setting
    $name = 'theme_elearning/purchasebtnurl';
    $title = get_string('purchasebtnurl','theme_elearning');
    $description = get_string('purchasebtnurldesc', 'theme_elearning');  
    $setting = new admin_setting_configtext($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
     $ADMIN->add('theme_elearning', $temp);
     
	// Social Networking 
		$temp = new admin_settingpage('theme_elearning_social', get_string('socialheading', 'theme_elearning'));
		
	// Social gmail +  URL setting
	// Custom or standard layout.
    $name = 'theme_elearning/gmail';
    $title = get_string('gmail', 'theme_elearning');
    $description = get_string('gmailaddesc', 'theme_elearning');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, 1);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
	
	
	$name = 'theme_elearning/gmailurl';
    $title = get_string('gmailurl','theme_elearning');
    $description = get_string('gmailurldesc', 'theme_elearning');   
    $setting = new admin_setting_configtext($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Social Gmail  setting
    $name = 'theme_elearning/gmailicon';
    $title = get_string('gmailicon','theme_elearning');
    $description = get_string('gmailicondesc', 'theme_elearning');   
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'gmailicon');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);  
    
    // Social Facebook URL setting
    $name = 'theme_elearning/facebook';
    $title = get_string('facebook', 'theme_elearning');
    $description = get_string('facebookaddesc', 'theme_elearning');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description,1);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_elearning/facebookurl';
    $title = get_string('facebookurl','theme_elearning');
    $description = get_string('facebookurldesc', 'theme_elearning');    
    $setting = new admin_setting_configtext($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Social Facebook Icon  setting
    $name = 'theme_elearning/facebookicon';
    $title = get_string('facebookicon','theme_elearning');
    $description = get_string('facebookicondesc', 'theme_elearning');  
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'facebookicon');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);  
    
    // Social Twitter URL setting
    $name = 'theme_elearning/twitter';
    $title = get_string('twitter', 'theme_elearning');
    $description = get_string('twitteraddesc', 'theme_elearning');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title,$description, 1);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_elearning/twitterurl';
    $title = get_string('twitterurl','theme_elearning');
    $description = get_string('twitterurldesc', 'theme_elearning');   
    $setting = new admin_setting_configtext($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Social Twitter Icon  setting
    $name = 'theme_elearning/twittericon';
    $title = get_string('twittericon','theme_elearning');
    $description = get_string('twittericondesc', 'theme_elearning');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'twittericon');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);  
    
    // Social Skype URL setting
    $name = 'theme_elearning/skype';
    $title = get_string('skype', 'theme_elearning');
    $description = get_string('skypeaddesc', 'theme_elearning');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, 1);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_elearning/skypeurl';
    $title = get_string('skypeurl','theme_elearning');
    $description = get_string('skypeurldesc', 'theme_elearning');    
    $setting = new admin_setting_configtext($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Social Skype Icon  setting
    $name = 'theme_elearning/skypeicon';
    $title = get_string('skypeicon','theme_elearning');
    $description = get_string('skypeicondesc', 'theme_elearning');    
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'skypeicon');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);  
	
	$ADMIN->add('theme_elearning', $temp);
	
	//Footer Conents
	$temp = new admin_settingpage('theme_elearning_footer', get_string('footer', 'theme_elearning'));
		
	// Project name setting
    $name = 'theme_elearning/projectname';
    $title = get_string('projectname','theme_elearning');
    $description = get_string('projectnamedesc', 'theme_elearning');
    $setting = new admin_setting_configtext($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    // Project name setting
    $name = 'theme_elearning/projectname';
    $title = get_string('projectname','theme_elearning');
    $description = get_string('projectnamedesc', 'theme_elearning'); 
    $setting = new admin_setting_configtext($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Project URL setting
    $name = 'theme_elearning/projecturl';
    $title = get_string('projecturl','theme_elearning');
    $description = get_string('projecturldesc', 'theme_elearning');   
    $setting = new admin_setting_configtext($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Project copyrights setting
    $name = 'theme_elearning/copyrights';
    $title = get_string('copyrights','theme_elearning');
    $description = get_string('copyrightsdesc', 'theme_elearning');   
    $setting = new admin_setting_configtext($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Project privacy policy setting
    $name = 'theme_elearning/privacypolicyurl';
    $title = get_string('privacypolicyurl','theme_elearning');
    $description = get_string('privacyurldesc', 'theme_elearning');   
    $setting = new admin_setting_configtext($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

	$ADMIN->add('theme_elearning', $temp);
	
