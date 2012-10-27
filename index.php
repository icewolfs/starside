<?php
/**
 * Starside.de - Homepage
 * 
 * @package starside
 * 
 * @author Frank Sons
 * @author Frank(dot)Sons(at)starside(dot)de
 */

if ($_GET['lan'] == 'en' || $_POST['lan'] == 'en')
  $lan = 'en';
else
  $lan = 'de';
  
require_once('lang/lang_'.$lan.'.inc.php');

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 //EN">
<HTML>
<HEAD>
<META NAME="author" CONTENT="Frank Sons">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Frank Sons - starside.de</title>
<LINK REL="stylesheet" TYPE="text/css" HREF="css/layout.css">

</HEAD>
<BODY>

<div id="body" align="center">

  <div id="navbar">
    <div class="navsmall"></div>
    <div class="navactive"><a class="navlink" href="index.php?lan=<?php echo$lan ?>"><?php echo$home_lan ?></a></div>
    <div class="nav"><a class="navlink" href="cv.php?lan=<?php echo$lan ?>"><?php echo$cv_lan ?></a></div>
    <div class="nav"><a class="navlink" href="skills.php?lan=<?php echo$lan ?>"><?php echo$skills_lan ?></a></div>
    <div class="nav"><a class="navlink" href="references.php?lan=<?php echo$lan ?>"><?php echo$ref_lan ?></a></div>
    <div class="nav"><a class="navlink" href="contact.php?lan=<?php echo$lan ?>"><?php echo$contact_lan ?></a></div>
  </div>
  
  <div id="lang">
      <div class="langText">
        <a href="<?php echo$PHP_SELF ?>?lan=de"><img src="art/de.gif" border="<?php echo$border_de ?>"></a>
        <a href="<?php echo$PHP_SELF ?>?lan=en"><img src="art/en.gif" border="<?php echo$border_en ?>"></a>
      </div>
  </div>
  <div id="header">
      <div class="headerText"><?php echo strtoupper($home_lan) ?></div>
  </div>
  
  <div id="main">
    <div id="side">
      <img src="art/home.jpg">
    </div>
    <div id="content">
      <p><span class="contentTitle"><?php echo$home_title ?></span></p>
      <p class="contentText"><?php echo$home_text1 ?></p>
      <p class="contentText"><?php echo$home_text2 ?></p>
      <p class="contentText"><?php echo$home_text3 ?></p>
    </div>
  </div>
  
</div>

<script src="http://www.google-analytics.com/urchin.js" type="text/javascript">
</script>
<script type="text/javascript">
_uacct = "UA-578641-1";
urchinTracker();
</script>
</BODY>
</HTML>
