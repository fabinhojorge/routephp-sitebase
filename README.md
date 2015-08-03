# routephp-sitebase

This project is a homemade php framework to help to construct sites. It contains a settings.php file used to configure some variables. Theres is a index.php where it's possible to set the layout, headers, footers, navigations and the flow of the application. It's possible to capture the controller and actions of the request, and then redirect to content file.

It's important to create a .htaccess file with the follow content:

	RewriteEngine on
	RewriteCond %{REQUEST_FILENAME} !-d
	RewriteCond %{REQUEST_FILENAME} !-f
	RewriteRule . index.php [L]

This will redirect all request to index.php to be managed
