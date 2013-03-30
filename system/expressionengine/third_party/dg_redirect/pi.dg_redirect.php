<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Memberlist Class
 *
 * @package     ExpressionEngine
 * @category	Plugin
 * @author 		dgrebb
 * @copyright   Copyright (c) 2013, Dan Grebb
 */

$plugin_info = array(
	'pi_name'       	=> 'Redirect',
	'pi_version'        => '1.0',
	'pi_author'     	=> 'Dan Grebb',
	'pi_author_url'     => 'http://dgrebb.com/',
	'pi_description'    => 'Redirects to a URL.',
	'pi_usage' => Dg_redirect::usage()
);

class Dg_redirect {

	public $return_data = "";

	public function __construct($redirect_url = NULL)
	{
		$this->EE =& get_instance();

		if (empty($redirect_url))
		{
			$redirect_url = $this->EE->TMPL->tagdata;
		}

		$redirect_location = $this->redirection($redirect_url);

		$this->return_data = $redirect_location;
	}

	function redirection($url){
		$header = header( "Location: " . $url ); exit;
		if(false !== $header){
			return $header;
		}
		return false;
	}

	public function usage()
	{
		ob_start();

	?>
		This plugin can be wrapped around a URL or custom field with a URL to redirect a page.

		Usage:

		{exp:dg_redirect}
			{custom_field}
		{/exp:dg_redirect}

		or

		{exp:dg_redirect}
			http://example.com
		{/exp:dg_redirect}

		This would redirect to a URL within custom_field or http://example.com

	<?php
		$buffer = ob_get_contents();
		ob_end_clean();
		return $buffer;
	}
}

/* End of file pi.dg_redirect */
/* Location: ./system/expressionengine/third_party/dg_redirect/pi.dg_redirect.php */