**Easily run Magento from PHP 5.4's webserver**

Copy the router.php file into your Magento root directory. When starting PHP's webserver, use the router file as the last parameter:

```bash
php -S 127.0.0.1:8080 router.php
```

To enable developer mode (for example, in Magento 2 below) use the following which sets the EnvVar:

```bash
MAGE_MODE=developer php -d variables_order=EGPCS -S 127.0.0.1:8080 router.php
```

To install from a shell installer (to script in a deployment, for instance):

```bash
curl -sS https://raw.github.com/philwinkle/Magento-PHP-Webserver-Router/master/install.sh | bash
```

------

Special thanks to www.twitter.com/sonassi for their help in getting this set up.

http://magento.stackexchange.com/questions/3595/magento-under-php-5-4-webserver-fatal-getfrontnamebyroute-on-non-object

http://www.sonassi.com/knowledge-base/magento-kb/running-magento-in-php-5-4s-built-in-web-server/
