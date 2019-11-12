# Zoom - Webhook with API sample

Sample script which receives webhook event and trigger downloading recorded file.

- Tested Environment<br>
CentOS7<br>
Apache/2.4.6<br>
OpenSSL/1.0.2k-fips<br>
PHP/5.4.16<br>
Zoom payed account<br>

- Webhook Document<br>
https://marketplace.zoom.us/docs/guides/tools-resources/webhooks

- To do<br>
1: Make sure that the Web server is runnig SSL along with PHP.<br>
2: Copy all the files on to the server's directory.<br>
3: Add webhook entry Zoom Market place.<br>
4: Retrieve API Key and Secret from Zoom Market place.<br>
5: Edit "webhook.php" and add API Key and Secret.<br>

- Permissions<br>
drwxrwxrwx. 2 apache apache download<br>
-rwxr-xr-x. 1 apache apache jwt.php<br>
-rwxrwxrwx. 1 apache apache webhook.log<br>
-rwxrw-rw-. 1 apache apache webhook.php<br>
