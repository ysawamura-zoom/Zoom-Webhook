# Zoom - Webhook with API sample

Sample script which receives webhook event "recording.completed" and trigger downloading recorded file.

<b>- Tested Environment</b><br>
CentOS7<br>
Apache/2.4.6<br>
OpenSSL/1.0.2k-fips<br>
PHP/5.4.16<br>
Zoom payed account<br>

<b>- Webhook Document</b><br>
https://marketplace.zoom.us/docs/guides/tools-resources/webhooks

<b>- To do</b><br>
1: Make sure that the Web server is runnig SSL along with PHP.<br>
2: Copy all the files on to the server's directory.<br>
3: Add webhook entry Zoom Market place.<br>
4: Retrieve API Key and Secret from Zoom Market place.<br>
5: Edit "webhook.php" and add API Key and Secret.<br>

<b>- Permissions</b><br>
drwxrwxrwx. apache apache download<br>
-rwxr-xr-x. apache apache jwt.php<br>
-rwxrwxrwx. apache apache webhook.log<br>
-rwxrw-rw-. apache apache webhook.php<br>
