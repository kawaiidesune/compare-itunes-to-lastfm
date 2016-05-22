# Compare iTunes to Last.fm
By [Véronique Bellamy](http://veroniquebellamy.fr/)

## Using this tool
You have to take the */includes* folder and put it in the interface folder that you want to use or build an interface that you want to use with this tool.

### For Command Line Interface
Drop the */includes* folder in */cli* and then run compare.php in PHP. To learn more about command line apps in PHP, please [read the relevant PHP documentation](http://php.net/manual/en/features.commandline.php).

### For WordPress
Drop the */includes* folder in */wordpress/compare-itunes-to-lastfm*

## Configuring this tool
* **MYSQL:** By default, set to false. If you wish to allow people to store their data (including yourself), you need MySQL.
* **REGISTRATION:** By default, this is set to 0. If it is set to 1, registration is disabled for the public but enabled for those who have an invite code. If it is set to 2, registration is enabled for the public. *MYSQL must be set to true and all values must be correctly set in order to use Registration.*
* **FIRST_INVITE:**
* **REQUIRE_HTTPAUTH:** By default, this is set to false. Set to true in order to enable this. If you have REGISTRATION defined, this will allow registered users to login. If not, you must define HTTPAUTH_USR and HTTPAUTH_PWD to enable this.
	* **HTTPAUTH_USR:** By default, this is commented out.

## Credits
This project uses the [PHP Last.fm API](https://github.com/matto1990/PHP-Last.fm-API), written by matto1990 and [a Plist parser](https://gist.github.com/michaelfox/888563) by michaelfox.