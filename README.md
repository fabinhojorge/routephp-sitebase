# routephp-sitebase

It's important to create a .htaccess file with the follow content:

	RewriteEngine on
	RewriteCond %{REQUEST_FILENAME} !-d
	RewriteCond %{REQUEST_FILENAME} !-f
	RewriteRule . index.php [L]

This will redirect all request to index.php to be managed
