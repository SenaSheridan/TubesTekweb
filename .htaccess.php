RewriteEngine On

RewriteCond %{akhfasiCI} !-f
RewriteCond %{akhfasiCI} !-d
RewriteRule ^(.*)$ index.php/$1 [L]