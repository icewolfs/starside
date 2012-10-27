<?php
$baseURL = '/srv/httpd/starside.de/www/jobtest/blog'; // set the file where the blog will be installed - no trailing '/'. DOCUMENT_ROOT is a path to your server's root. (eg. /var/www/html/)

$pageTitle = "starside"; //set the page title here

$perPage = "10"; //This is where you set the number of posts per page.

$blogPageName = "blog.php"; //this is the file that the blog is displayed in

$USERS = array('FrankS'=>'pfmdrdn'); //array of valid users. Format for arrays is ('user'=>'password',...)

$MULTIUSERS = false; //this will show the username of who wrote each post (true or false)

$imagesPerEntry = "2"; //this is the number of files that you can upload with each entry

$COMMENTS = true; //display/allow comments (true or false)

$TABLENAME = 'simpleblog'; //name of the database table that holds this blog's data

$TIMEOFFSET = "0"; //the difference between your time, and your server's time

//RSS Settings

$websiteRoot = 'http://starside.de/jobtest/blog'; //root of your blog (eg. http://www.yoursite.com/blog)

$rssFileName = 'feed.rss'; //this is the name of the RSS file. You must create a blank file and put it into the same directory. Also, set it's permissions to 777.

$rssLink = 'http://starside.de/jobtest/blog/blog.php';//set the link to your site

$rssDesc = 'starside feed';//set a description for what this feed is all about

//CMS Settings
$users_login = array('FrankS'=>'pfmdrdn');

$show_global_nav = true; //true or false will either show or hide the global nav in the CMS pages

$global_nav_items = array('add_blog.php' => 'Add Blog Entry','chooseTable.php' => 'Choose Table'); //assoc array using file names as keys and titles as values


?>