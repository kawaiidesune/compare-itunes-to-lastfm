<?php
/**
 * @author Véronique Bellamy (v@vero.moe)
 * @copyright 2016 Véronique Bellamy. Some rights reserved. https://veroniquebellamy.fr/en/about/open-source/
 */

include 'plist-parser/Plist.php';
class Compare {
	public $lastfmauthvars = new Array(); /** @var array $lastfmvars[] This is where all the vars will be stored for AuthAPI. */

	/**
	 * @param string $api This is the API key that will be passed into the constructor. It'll be assigned to Compare::lastfm_apikey.
	 * @param string $plist This is the path to the Plist object.
	 * @param string $secret This is the secret key that will be passed into the constructor. It'll be assigned to Compare::lastfm_secret.
	 * @uses AuthApi::__construct()
	 * @uses Plist::from_file()
	 */
	public function __construct($api,$plist) {
		$this->lastfmauthvars['apiKey'] = $api;

		$lastfmauth = new AuthApi('setsession',$this->lastfmvars);
		if (!$auth) {
			return false;
		}

	}
}
?>