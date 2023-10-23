RewriteEngine On
RewriteCond %{QUERY_STRING} ^post_url=([^&]+)
RewriteRule ^clean-url/post/(.*)$ /clean-url/post/$1? [L,R=301]
 these rules are not required in this case