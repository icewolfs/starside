<?php
/**
 * Starside.de - Lebenslauf
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
    <div class="nav"><a class="navlink" href="index.php?lan=<?php echo $lan ?>"><?php echo $home_lan ?></a></div>
    <div class="nav"><a class="navlink" href="blog/index.php?lan=<?php echo $lan ?>"><?php echo $blog_lan ?></a></div>
    <div class="navactive"><a class="navlink" href="cv.php?lan=<?php echo $lan ?>"><?php echo $cv_lan ?></a></div>
    <div class="nav"><a class="navlink" href="skills.php?lan=<?php echo $lan ?>"><?php echo $skills_lan ?></a></div>
    <div class="nav"><a class="navlink" href="references.php?lan=<?php echo $lan ?>"><?php echo $ref_lan ?></a></div>
    <div class="nav"><a class="navlink" href="contact.php?lan=<?php echo $lan ?>"><?php echo $contact_lan ?></a></div>
  </div>
  
  <div id="lang">
      <div class="langText">
        <a href="<?php echo $PHP_SELF ?>?lan=de"><img src="art/de.gif" border="<?php echo $border_de ?>"></a>
        <a href="<?php echo $PHP_SELF ?>?lan=en"><img src="art/en.gif" border="<?php echo $border_en ?>"></a>
      </div>
  </div>
  <div id="header">
      <div class="headerText"><?php echo strtoupper($cv_lan) ?></div>
  </div>
  
  <div id="main">
    <div id="side">
      <img src="art/Frank_wmhh_micro.jpg">
    </div>
    <div id="content">
      <div class="contentTitle"><?php echo $cv_personal_title ?></div>
      <div class="contentText"><?php echo $cv_name ?></div>
      <div class="contentText"><?php echo $cv_born ?></div>
      
      <div class="contentTitle"><?php echo $cv_school_title ?></div>
      <div class="contentPreText">08/82 - 06/86</div>
      <div class="contentMainText"><?php echo $cv_grundschule ?></div>
      <div class="contentPreText">08/86 - 06/95</div>
      <div class="contentMainText"><?php echo $cv_schule ?></div>
      
      <div class="contentTitle"><?php echo $cv_mil_title ?></div>
      <div class="contentPreText">07/95 - 06/96</div>
      <div class="contentMainText"><?php echo $cv_military ?></div>
      
      
      <div class="contentTitle"><?php echo $cv_job_training_title ?></div>
      <div class="contentPreText">09/96 - 01/99</div>
      <div class="contentMainText"><?php echo $cv_job_training ?></div>
      
      <div class="contentTitle"><?php echo $cv_jobs_title ?></div>
      <div class="contentPreText">08/11 - 01/13</div>
      <div class="contentMainText"><?php echo $cv_jobs_bigpoint ?></div>
      <div class="contentPreText">02/11 - 07/11</div>
      <div class="contentMainText"><?php echo $cv_jobs_icans ?></div>
      <div class="contentPreText">05/10 - 01/11</div>
      <div class="contentMainText"><?php echo $cv_jobs_arbeitslos_hh ?></div>
      <div class="contentPreText">03/09 - 04/10</div>
      <div class="contentMainText"><?php echo $cv_jobs_modix ?></div>
      <div class="contentPreText">11/06 - 03/09</div>
      <div class="contentMainText"><?php echo $cv_jobs_dis ?></div>
      <div class="contentPreText">11/05 - 10/06</div>
      <div class="contentMainText"><?php echo $cv_jobs_benq ?></div>
      <div class="contentPreText">02/05 - 10/05</div>
      <div class="contentMainText"><?php echo $cv_jobs_arbeitslos ?></div>
      <div class="contentPreText">08/04 - 01/05</div>
      <div class="contentMainText"><?php echo $cv_jobs_twt ?></div>
      <div class="contentPreText">02/04 - 07/04</div>
      <div class="contentMainText"><?php echo $cv_jobs_meta ?></div>
      <div class="contentPreText">02/00 - 12/03</div>
      <div class="contentMainText"><?php echo $cv_job_e7 ?></div>
      <div class="contentPreText">02/99 - 01/00</div>
      <div class="contentMainText"><?php echo $cv_job_tkis ?></div>
      
      <div class="contentTitle"><?php echo $cv_edu_title ?></div>
      <div class="contentPreText">2012</div>
      <div class="contentMainText"><?php echo $cv_phpsummit ?><br/><?php echo $cv_phpunconf12 ?></div>
      <div class="contentPreText">2011</div>
      <div class="contentMainText"><?php echo $cv_phpunconf11 ?><br/><?php echo $cv_zend ?></div>
      <div class="contentPreText">2009</div>
      <div class="contentMainText"><?php echo $cv_devdays ?></div>
      <div class="contentPreText">10/06 - 05/08</div>
      <div class="contentMainText"><?php echo $cv_ait_itprof ?></div>
      <div class="contentPreText">2007</div>
      <div class="contentMainText"><?php echo $cv_itil ?></div>
      <div class="contentPreText">2004</div>
      <div class="contentMainText"><?php echo $cv_meta_consult ?></div>
      <div class="contentPreText">2003</div>
      <div class="contentMainText"><?php echo $cv_imperia ?></div>
      <div class="contentPreText">2002</div>
      <div class="contentMainText"><?php echo $cv_uml ?><br/><?php echo $cv_oose ?></div>
      <div class="contentPreText">2001</div>
      <div class="contentMainText"><?php echo $cv_nps ?></div>
      <div class="contentPreText">2000</div>
      <div class="contentMainText"><?php echo $cv_php_congress ?><br/><?php echo $cv_java_servlet ?></div>
      <div class="contentPreText">1999</div>
      <div class="contentMainText"><?php echo $cv_java ?><br/><?php echo $cv_sql ?></div>
      
      <div class="contentTitle"><?php echo $cv_misc_title ?></div>
      <div class="contentPreText"><?php echo $cv_phpughh ?></div>
      <div class="contentMainText"><?php echo $cv_phpughhorga ?></div>
      <div class="contentPreText"><?php echo $cv_presentations ?></div>
      <div class="contentMainText"><?php echo $cv_slideshare ?></div>
      <div class="contentPreText"><?php echo $cv_languages ?></div>
      <div class="contentMainText"><?php if ($lan == 'en') echo $cv_german.'<br/>'; ?><?php echo $cv_english ?></div>
      <div class="contentPreText"><?php echo $cv_interest_title ?></div>
      <div class="contentMainText"><?php echo $cv_interests ?></div>
      
    </div>
  </div>

<?php
include_once('footer.php');
