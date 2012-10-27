<?php
/**
 * Starside.de - Kontakt
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


// handle submit and send data
function addArray(&$array, $key, $val)
{
  unset($array[$key]);
  $tempArray = array($key => $val);
  $array = $array + $tempArray;
}

$vname    = "";
$nname    = "";
$firma    = "";
$homepage = "";
$strasse  = "";
$plz    = "";
$ort    = "";
$telefon  = "";
$email    = "";
$nospam = "";
$unterlagen = "";
$text   = "";
$ip = "";
$domain = "";

$error = 0;

if ($_POST["submit"] == "1") {
  
  $vname    = $_POST["vname"];
  $nname    = $_POST["nname"];
  $firma    = $_POST["firma"];
  $homepage = $_POST["homepage"];
  $strasse  = $_POST["strasse"];
  $plz    = $_POST["plz"];
  $ort    = $_POST["ort"];
  $land     = $_POST["land"];
  $telefon  = $_POST["telefon"];
  $email    = $_POST["email"];
  $nospam   = $_POST["nospam"];
  $unterlagen = $_POST["unterlagen"];
  $text     = $_POST["text"];
  $ip = $_SERVER['REMOTE_ADDR'];
  $domain = GetHostByName($ip);
  
  if (!(strlen($nname) >1) ) {
    $error = 1;
    addArray($contact_descr, 'nname', '<span class="fehler">'.$contact_descr['nname'].'</span>');
  }

  if ( preg_match("/^[-a-zA-Z0-9\._]+@[-a-zA-Z0-9]+\.[a-zA-Z][a-zA-Z\.]*[a-zA-Z]$/i", $email) == false ) {
    $error = 1;
    addArray($contact_descr, 'email', '<span class="fehler">'.$contact_descr['email'].'</span>');
  }

  if (!(strlen($text) > 1)) {
    $error = 1;
    addArray($contact_descr, 'text', '<span class="fehler">'.$contact_descr['text'].'</span>');
  }

  if ( $unterlagen == 'post' && !(strlen($strasse) > 1) && !(strlen($plz) > 1) && !(strlen($ort) > 1) ) {
    $error = 1;
    $contact_required .= $contact_error;
    addArray($contact_descr, 'strasse', '<span class="fehler">'.$contact_descr['strasse'].'</span>');
    addArray($contact_descr, 'plz', '<span class="fehler">'.$contact_descr['plz'].'</span>');
    addArray($contact_descr, 'ort', '<span class="fehler">'.$contact_descr['ort'].'</span>');
  }
  
  if ($nospam != 'nospam') {
    $error = 1;
    addArray($contact_descr, 'nospam', '<span class="fehler">'.$contact_descr['nospam'].'</span>');
  }
  
  if ($error == 0) {

    $message =   "Vorname:    $vname\r\n"
                ."Nachname:   $nname\r\n"
                ."Firma:      $firma\r\n"
                ."Homepage:   $homepage\r\n"
                ."Strasse:    $strasse\r\n"
                ."PLZ / Ort:  $plz $ort\r\n"
                ."Land:       $land\r\n"
                ."Telefon:    $telefon\r\n"
                ."E-Mail:     $email\r\n"
                ."Unterlagen: $unterlagen\r\n"
                ."---------------------------\r\n"
                ."IP:         $ip\r\n"
                ."Domain:     $domain\r\n"
                ."Sprache:    $lan\r\n"
                ."\r\n$text\r\n";

    mail("frank.sons@starside.de", "Formular - starside.de", $message,
       "From: $email\r\n");
//    mail("frank.sons@starside.de", "Formular - starside.de", $message,
//       "From: no-reply@starside.de\r\n");
//      ."BCC: frank.sons@da-fractales.de\r\n");

  } else {
    $contact_required = "<span class=\"fehler\">$contact_required</span>";
  }
}
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
    <div class="nav"><a class="navlink" href="skills.php?lan=<?php echo $lan ?>"><?php echo $skills_lan ?></a></div>
    <div class="nav"><a class="navlink" href="references.php?lan=<?php echo $lan ?>"><?php echo $ref_lan ?></a></div>
    <div class="navactive"><a class="navlink" href="contact.php?lan=<?php echo $lan ?>"><?php echo $contact_lan ?></a></div>
    <div class="nav"><a class="navlink" href="impressum.php?lan=<?php echo $lan ?>"><?php echo $impressum_lan ?></a></div>
  </div>
  
  <div id="lang">
      <div class="langText">
        <a href="<?php echo $PHP_SELF ?>?lan=de"><img src="art/de.gif" border="<?php echo $border_de ?>"></a>
        <a href="<?php echo $PHP_SELF ?>?lan=en"><img src="art/en.gif" border="<?php echo $border_en ?>"></a>
      </div>
  </div>
  <div id="header">
      <div class="headerText"><?php echo strtoupper($contact_lan) ?></div>
  </div>
  
  <div id="main">
    <div id="side">
      <img src="art/kontakt.jpg">
    </div>
    <div id="content">
      
<?php if ($error == 1 || $_POST["submit"] != 1) { ?>
      
      <div class="contentSmallText"><p><?php echo $contact_txt ?></p><p><?php echo $contact_required ?></p></div>
      
      <form action="<?php echo $PHP_SELF; ?>" method="post">
      <input type='hidden' name='lan' value='<?php echo $lan ?>'>
      <input type="hidden" name="submit" value="1">
      
      <div class="contentInputFrame">
      
        <div class="contentInput">
          <div class="inputText"><?php echo $contact_descr['vname'] ?></div>
          <div class="inputForm"><input type="text" name="vname" size="50" value="<?php echo $vname; ?>"></div>
        </div>
        
        <div class="contentInput">
          <div class="inputText"><?php echo $contact_descr['nname'] ?></div>
          <div class="inputForm"><input type="text" name="nname" size="50" value="<?php echo $nname; ?>"></div>
        </div>
        
        <div class="contentInput">
          <div class="inputText"><?php echo $contact_descr['firma'] ?></div>
          <div class="inputForm"><input type="text" name="firma" size="50" value="<?php echo $firma; ?>"></div>
        </div>
        
        <div class="contentInput">
          <div class="inputText"><?php echo $contact_descr['homepage'] ?></div>
          <div class="inputForm"><input type="text" name="homepage" size="50" value="<?php echo $homepage; ?>"></div>
        </div>
        
        <div class="contentInput">
          <div class="inputText"><?php echo $contact_descr['strasse'] ?></div>
          <div class="inputForm"><input type="text" name="strasse" size="50" value="<?php echo $strasse; ?>"></div>
        </div>
        
        <div class="contentInput">
          <div class="inputText"><?php echo $contact_descr['plz'] ?>&nbsp;/&nbsp;<?php echo $contact_descr['ort'] ?></div>
          <div class="inputForm"><input type="text" name="plz" size="5" value="<?php echo $plz; ?>">&nbsp;/&nbsp;<input type="text" name="ort" size="40" value="<?php echo $ort; ?>"></div>
        </div>
        
        <div class="contentInput">
          <div class="inputText"><?php echo $contact_descr['telefon'] ?></div>
          <div class="inputForm"><input type="text" name="telefon" size="50" value="<?php echo $telefon; ?>"></div>
        </div>
        
        <div class="contentInput">
          <div class="inputText"><?php echo $contact_descr['land'] ?></div>
          <div class="inputForm"><input type="text" name="land" size="50" value="<?php echo $land; ?>"></div>
        </div>
        
        <div class="contentInput">
          <div class="inputText"><?php echo $contact_descr['email'] ?></div>
          <div class="inputForm"><input type="text" name="email" size="50" value="<?php echo $email; ?>"></div>
        </div>
        
        <div class="contentInput">
          <div class="inputText"><?php echo $contact_descr['nospam'] ?></div>
          <div class="inputForm"><input type="checkbox" name="nospam" value="nospam" <?php if ($nospam == "nospam") echo "checked"; ?>></div>
        </div>
        
        <div class="contentInput">
          <div class="inputText"><?php echo $contact_descr['text'] ?></div>
          <div class="inputForm"><textarea cols="50" rows="5" name="text" id="text" wrap="virtual"><?php echo $text; ?></textarea></div>
        </div>
        
      </div>
      
      <!--<div class="contentMeebo">-->
        <!-- Beginning of meebo me widget code. Want to talk with visitors on your page? Go to http://www.meebome.com/ and get your widget! -->
        <!--<embed src="http://widget.meebo.com/mm.swf?aqoVnPEKch" type="application/x-shockwave-flash" width="160" height="275"></embed>
      </div>-->
      
      <div class="contentSmallText"><?php echo $con_files ?></div>
      <div class="contentList">
        <input type="radio" name="unterlagen" value="nein" <?php if ($unterlagen == "" || $unterlagen == "nein") echo "checked"; ?>>&nbsp;<?php echo $con_files_no ?><br/>
        <input type="radio" name="unterlagen" value="email" <?php if ($unterlagen == "email") echo "checked"; ?>>&nbsp;<?php echo $con_files_email ?><br/>
        <input type="radio" name="unterlagen" value="post" <?php if ($unterlagen == "post") echo "checked"; ?>>&nbsp;<?php echo $con_files_mail ?><br/><br/>
        <input type="image" src="art/but_abschicken1_<?php echo $lan ?>.gif" alt="send" border="0">
      </div>
      
      </form>
      
<?php } else {?>
      
      <div class="contentSmallText">
        <p><?php if ($unterlagen =! "nein") echo $contact_files;
              else echo $contact_no_files; ?></p>
        <p><a href="index.php?lan=<?php echo $lan ?>"><span class="orange">&gt;&nbsp;</span><?php echo $home_lan ?></a></p>
      </div>
      
<?php } ?>

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
