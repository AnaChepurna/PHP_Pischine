Listen 8100

<VirtualHost *:8100>
	DocumentRoot "/Users/achepurn/http/MyWebSite/d03"
	<Directory "/Users/achepurn/http/MyWebSite/d03">
		Options Indexes FollowSymLinks
		Require all granted
	</Directory>
</VirtualHost>