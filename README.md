**Easily run Magento from PHP 5.4's webserver**

Copy the router.php file into your Magento root directory. When starting PHP's webserver, use the router file as the last parameter:

```bash
php -S 127.0.0.1:8080 router.php
```
