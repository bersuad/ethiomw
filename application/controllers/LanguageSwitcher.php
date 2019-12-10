<?php if ( ! defined('BASEPATH')) exit('Direct access allowed');
class LanguageSwitcher extends CI_Controller
{
   public function __construct() {
       parent::__construct();
   }

   function switchLang($language = "") {
   		if ($language == "አማርኛ") {
   			$language = ($language == "አማርኛ") ? $language : "amharic";
	       	$this->session->set_userdata('site_lang', $language);
	        redirect($_SERVER['HTTP_REFERER']);
   		} elseif ($language == "english") {
	       $language = ($language == "english") ? $language : "english";
	       $this->session->set_userdata('site_lang', $language);
	       redirect($_SERVER['HTTP_REFERER']);
   		} else {
	       $language = ($language == "አማርኛ") ? $language : "amharic";
	       $this->session->set_userdata('site_lang', $language);
	       redirect($_SERVER['HTTP_REFERER']);   			
   		}
   		
   }

}