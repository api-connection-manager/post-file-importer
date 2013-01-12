<?php
namespace CityIndex\WP\PostImporter\Modules;

/**
 * Description of MailChimp
 *
 * @author daithi
 */
class MailChimp {
	
	function get_data(){
		
		global $API_Connection_Manager;
		$module = $API_Connection_Manager->get_service('mailchimp/index.php');
		
		/**
		 * lists(string apikey, array filters, int start, int limit, string sort_field, string sort_dir) 
		 */
		$res = $module->request(
				"lists",
				"post"
				);
		
		ar_print($res);
	}
}

?>
