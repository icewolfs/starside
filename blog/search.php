     <?php
 
//****INCLUDE GLOBALS*******************************************************************

include("config/sqlStrings.php");
include("config/settings.php");

//****HANDLE FORM***********************************************************************

if (isset($_POST['submit']) ){ // Handle the form.

//**************************************************************************************


// Function for escaping and trimming form data.
    function escape_data ($data) { 
        global $dbc;
        if (ini_get('magic_quotes_gpc')) {
            $data = stripslashes($data);
        }
        return mysql_real_escape_string (trim ($data), $dbc);
    } // End of escape_data() function.
    
    //check to see that the fields are filled in
    if(!empty($_POST['search'])){
    $s = escape_data($_POST['search']);
    } else {
    echo 'the search string was empty.';
    
    die;}
        
    $s = escape_data($_POST['search']);
    
    

} // End of the main Submit conditional.

// language check
if ($_GET['lan'] == 'en' || $_POST['lan'] == 'en')
  $lan = 'en';
else
  $lan = 'de';
  
require_once('../lang/lang_'.$lan.'.inc.php');

?>

<!--
super simple PHP blog

written by Todd Resudek for TR1design.net.
todd@tr1design.net

source available at http://www.supersimple.org
copyright 2006

-->

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 //EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $lan ?>" lang="<?php echo $lan ?>">
<HEAD>
<META NAME="author" CONTENT="Frank Sons">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Frank Sons - starside.de</title>
<LINK REL="stylesheet" TYPE="text/css" HREF="../css/layout.css">
<style type="text/css" media="all">@import "../css/blogStyles.css";</style>
<link rel="alternate" type="application/rss+xml" title="RSS news feed (summaries)" href="<?php echo $websiteRoot.'/'.$rssFileName?>" />

</HEAD>
<BODY>

<div id="body" align="center">

  <div id="navbar">
    <div class="navsmall"></div>
    <div class="nav"><a class="navlink" href="../index.php?lan=<?php echo $lan ?>"><?php echo $home_lan ?></a></div>
    <div class="navactive"><a class="navlink" href="blog.php?lan=<?php echo $lan ?>"><?php echo $blog_lan ?></a></div>
    <div class="nav"><a class="navlink" href="../cv.php?lan=<?php echo $lan ?>"><?php echo $cv_lan ?></a></div>
    <div class="nav"><a class="navlink" href="../skills.php?lan=<?php echo $lan ?>"><?php echo $skills_lan ?></a></div>
    <div class="nav"><a class="navlink" href="../references.php?lan=<?php echo $lan ?>"><?php echo $ref_lan ?></a></div>
    <div class="nav"><a class="navlink" href="../contact.php?lan=<?php echo $lan ?>"><?php echo $contact_lan ?></a></div>
    <div class="nav"><a class="navlink" href="../impressum.php?lan=<?php echo $lan ?>"><?php echo $impressum_lan ?></a></div>
  </div>

  <div id="lang">
      <div class="langText">
        <a href="<?php echo $PHP_SELF ?>?lan=de"><img src="../art/de.gif" border="<?php echo $border_de ?>"></a>
        <a href="<?php echo $PHP_SELF ?>?lan=en"><img src="../art/en.gif" border="<?php echo $border_en ?>"></a>
      </div>
  </div>
  <div id="header">
      <div class="headerText"><?php echo strtoupper($blog_lan) ?></div>
  </div>
  
  
<div id="main">
    <div id="side">
      <img src="../art/referenzen.jpg">
    </div>
    <div id="content">
        <h2>Search Results</h2>
        <p class="hr"></p>

<?php
//****GET ENTRIES FROM DATABASE***********************************************************    


//Add the record to the database.
$query = "SELECT comment, image, title, DATE_FORMAT(time, '%M %d, %Y %h:%i%p') AS time, uid, comments, postedBy FROM $TABLENAME WHERE comment LIKE '%$s%' || title LIKE '%$s%' ORDER BY 'uid' DESC";
$result = @mysql_query ($query);
//to find out if we got any results or not
$counter = @mysql_query ($query);
$rows = mysql_fetch_array($counter, MYSQL_NUM);

$entry = '';

if (count($rows) != 1) {
    while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
        $dateTime = strtolower($row[3]); //makes the AM PM lowercase. CSS is set to Capitalize the date later
        
        //anchor tag set for easier linking
        $entryTitle = "<a name=\"{$row[4]}\"></a><h1 class=\"title\">{$row[2]}</h1>\n<p class=\"time\">$dateTime</p>";

        $entry = '';
        $ima = split(", ", $row[1]); //build array out of images list
        for ($i=0; $i<count($ima); $i++) {
            if ($imagesPerEntry == 1) {
                if (!empty($ima[$i])) { 
                    if (substr($ima[$i],-4) != '.pdf') { //filter out PDFs
                        $entry .= "<img src=\"blogImages/$ima[$i]\" class=\"im\" />\n";
                    } else { //handle PDFs
                        $entry .= "<a href=\"blogImages/$ima[$i]\" target=\"_blank\"><img src=\"im/pdfIcon.gif\" border=\"0\" class=\"im\"/> $ima[$i]</a>";
                    }
                }
            }
        }
        //****************************************************************************************    
        
        
        //****DISPLAY COMMENT*********************************************************************    
        
        
        $com = nl2br($row[0]);
        for ($i=0; $i<count($ima); $i++) {
            $j = $i+1;
            if ($imagesPerEntry != 1) {
                if (substr($ima[$i],-4) != '.pdf') { //filter out PDFs
                    $com = str_replace("[$j]", "<img src=\"blogImages/$ima[$i]\" class=\"im\" />\n", $com);
                } else { //handle PDFs
                    $com = str_replace("[$j]", "<a href=\"blogImages/$ima[$i]\" target=\"_blank\"><img src=\"im/pdfIcon.gif\" border=\"0\" class=\"im\" /> $ima[$i]</a>\n", $com);
                }
            }
        }
        $entry .= "<p class=\"comment\">$com</p>";
        
        //****************************************************************************************    
        
        
        //****DISPLAY POSTED BY******************************************************************
        
        //if multiUsers is turned on in settings.php, display the username that wrote the entry
        if($MULTIUSERS){
            $entry .= "<p class=\"postedBy\">Posted By: $row[6]</p>";
        }
        
        //***************************************************************************************
        
        
        
        //****DISPLAY COMMENTS*******************************************************************
        
        //you must have comments turned on (in settings.php) for this to display
        $entryComments = '';
        if($COMMENTS){
            if($row[5] != 0){
                $entryComments .= "<p class=\"userComment\"><a href=\"javascript:void();\" onclick=\"window.open('comments.php?entry=$row[4]', 'Comments', 'width=490,height=350,location=no,toolbars=no,status=no scrollbars=yes');\">$row[5] comments</a> | <a href=\"javascript:void();]\" onclick=\"window.open('comments.php?entry=$row[4]', 'Comments', 'width=490,height=350,location=no,toolbars=no,status=no, scrollbars=yes');\">Comment</a><a class=\"permalink\" href=\"$blogPageName?entry=$row[4]\">permalink</a></p>";
            }else{
                $entryComments .= "<p class=\"userComment\">$row[5] comments | <a href=\"javascript:void();\" onclick=\"window.open('comments.php?entry=$row[4]', 'Comments', 'width=490,height=350,location=no,toolbars=no,status=no, scrollbars=yes');\">Comment</a><a class=\"permalink\" href=\"$blogPageName?entry=$row[4]\">permalink</a></p>";
            }
        }
        
        //***************************************************************************************
        
        $entryBreak = "<p class=\"hr\"></p>"; //this is the break line. set it's appearance in the CSS file.
        
    }
    
    echo $entryTitle;
    echo $entry;
    echo $entryComments;
    echo $entryBreak;
    

} else {
    echo '<p>The search yielded no results. <a href="javascript: history.go(-1);" >Go back </a>and try again.</p>';
}
$footer  = "<br /><a href=\"http://www.supersimple.org\"><img src=\"im/ss.gif\" alt=\"super simple blog script\" border=\"0\" /></a>";
$footer .= " <a href=\"$rssFileName\"><img src=\"im/rss.gif\" alt=\"super simple RSS script\" border=\"0\" /></a>";
?>

      <p class="contentText"><?php echo $footer ?></p>
    </div>
  </div>
</div>

<?php mysql_close(); // Close the database connection. ?>

<script src="http://www.google-analytics.com/urchin.js" type="text/javascript">
</script>
<script type="text/javascript">
_uacct = "UA-578641-1";
urchinTracker();
</script>
</BODY>
</HTML>