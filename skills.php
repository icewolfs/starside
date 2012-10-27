<?php
/**
 * Starside.de - Kenntnisse
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
    <div class="nav"><a class="navlink" href="blog/blog.php?lan=<?php echo $lan ?>"><?php echo $blog_lan ?></a></div>
    <div class="nav"><a class="navlink" href="cv.php?lan=<?php echo $lan ?>"><?php echo $cv_lan ?></a></div>
    <div class="navactive"><a class="navlink" href="skills.php?lan=<?php echo $lan ?>"><?php echo $skills_lan ?></a></div>
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
      <div class="headerText"><?php echo strtoupper($skills_lan) ?></div>
  </div>
  
  <div id="main">
    <div id="side">
      <img src="art/kenntnisse.jpg">
    </div>
    <div id="content">
      
      <div class="skillFrame">
        <div class="skillTitle"><?php echo $sk_lang ?></div>
        <div class="skill">Java</div>
        <div class="skillValue"><?php echo $sk_very_good ?></div>
        <div class="skill">PHP</div>
        <div class="skillValue"><?php echo $sk_very_good ?></div>
        <div class="skill">C#</div>
        <div class="skillValue"><?php echo $sk_good ?></div>
        <div class="skill">SQL</div>
        <div class="skillValue"><?php echo $sk_very_good ?></div>
        <div class="skill">JavaScript</div>
        <div class="skillValue"><?php echo $sk_good ?></div>
        <div class="skill">HTML</div>
        <div class="skillValue"><?php echo $sk_basic ?></div>
        <div class="skill">CSS</div>
        <div class="skillValue"><?php echo $sk_basic ?></div>
        <div class="skill">XML/XSL</div>
        <div class="skillValue"><?php echo $sk_good ?></div>
      </div>
      
      <div class="skillNoFrame">
        <div class="skillTitle"><?php echo $sk_frameworks ?></div>
        <div class="skill">JUnit/PHPUnit</div>
        <div class="skillValue"><?php echo $sk_very_good ?></div>
        <div class="skill">Log4j/log4php</div>
        <div class="skillValue"><?php echo $sk_good ?></div>
        <div class="skill">Hibernate / NHibernate</div>
        <div class="skillValue"><?php echo $sk_good ?></div>
        <div class="skill">xhprof profiling</div>
        <div class="skillValue"><?php echo $sk_very_good ?></div>
        <div class="skill">Zend Framework</div>
        <div class="skillValue"><?php echo $sk_very_good ?></div>
      </div>
      
      <div class="skillFrame">
        <div class="skillTitle"><?php echo $sk_ide ?></div>
        <div class="skill">Eclipse/Zend Studio</div>
        <div class="skillValue"><?php echo $sk_very_good ?></div>
        <div class="skill">Visual Studio</div>
        <div class="skillValue"><?php echo $sk_good ?></div>
        <div class="skill">Apache</div>
        <div class="skillValue"><?php echo $sk_good ?></div>
        <div class="skill">Tomcat</div>
        <div class="skillValue"><?php echo $sk_good ?></div>
        <div class="skill">JBoss</div>
        <div class="skillValue"><?php echo $sk_good ?></div>
        <div class="skill">xDebug</div>
        <div class="skillValue"><?php echo $sk_very_good ?></div>
      </div>
      
      
      <div class="skillNoFrame">
        <div class="skillTitle"><?php echo $sk_db ?></div>
        <div class="skill">MySQL</div>
        <div class="skillValue"><?php echo $sk_very_good ?></div>
        <div class="skill">Oracle</div>
        <div class="skillValue"><?php echo $sk_good ?></div>
        <div class="skill">PostgreSQL</div>
        <div class="skillValue"><?php echo $sk_good ?></div>
      </div>
      
      <div class="skillFrame">
        <div class="skillTitle"><?php echo $sk_misc ?></div>
        <div class="skill">CVS / SVN</div>
        <div class="skillValue"><?php echo $sk_very_good ?></div>
        <div class="skill">Git</div>
        <div class="skillValue"><?php echo $sk_good ?></div>
        <div class="skill">ITIL</div>
        <div class="skillValue"><?php echo $sk_good ?></div>
        <div class="skill">REST</div>
        <div class="skillValue"><?php echo $sk_good ?></div>
        <div class="skill">SOAP</div>
        <div class="skillValue"><?php echo $sk_good ?></div>
      </div>
      
      <!-- <div class="skillNoFrame">
        <div class="skillTitle"><?php echo $sk_cms ?></div>
        <div class="skill">Intershop (ePages)</div>
        <div class="skillValue"><?php echo $sk_very_good ?></div>
        <div class="skill">Imperia</div>
        <div class="skillValue"><?php echo $sk_good ?></div>
        <div class="skill">NPS (Infopark)</div>
        <div class="skillValue"><?php echo $sk_basic ?></div>
        <div class="skill">typo3</div>
        <div class="skillValue"><?php echo $sk_basic ?></div>
      </div> -->
      
      
      
    </div>
  </div>
  
<?php
include_once('footer.php');

