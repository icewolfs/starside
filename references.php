<?php
/**
 * Starside.de - Referenzen
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
    <div class="nav"><a class="navlink" href="skills.php?lan=<?php echo $lan ?>"><?php echo $skills_lan ?></a></div>
    <div class="navactive"><a class="navlink" href="references.php?lan=<?php echo $lan ?>"><?php echo $ref_lan ?></a></div>
    <div class="nav"><a class="navlink" href="contact.php?lan=<?php echo $lan ?>"><?php echo $contact_lan ?></a></div>
    <div class="nav"><a class="navlink" href="impressum.php?lan=<?php echo $lan ?>"><?php echo $impressum_lan ?></a></div>
  </div>
  
  <div id="lang">
      <div class="langText">
        <a href="<?php echo $PHP_SELF ?>?lan=de"><img src="art/de.gif" border="<?php echo $border_de ?>"></a>
        <a href="<?php echo $PHP_SELF ?>?lan=en"><img src="art/en.gif" border="<?php echo $border_en ?>"></a>
      </div>
  </div>
  <div id="header">
      <div class="headerText"><?php echo strtoupper($ref_lan) ?></div>
  </div>
  
  <div id="main">
    <div id="side">
      <img src="art/referenzen.jpg">
    </div>
    <div id="content">
      <p class="contentText"><?php echo $ref_title ?></p>
      
      <!-- start new project -->
      <?php $project = 'contest'; ?>
      <div class="project">
        <div class="projectTitle">
      <?php if (${$project.'_url'} != null && ${$project.'_url'} != "") { ?> <a href="<?php echo ${$project.'_url'} ?>" target="_blank"><span class="orange">&gt;&nbsp;<?php echo ${$project.'_title'} ?></span></a>
      <?php } else { ?> <?php echo ${$project.'_title'} ?> <?php } ?>
        </div>
        <div class="projectDate"><?php echo ${$project.'_date'} ?></div>
        <div class="projectContent">
          <div class="projectText"><?php echo ${$project.'_text'} ?></div>
          <div class="projectImg">
        <?php if (${$project.'_img'} != null && ${$project.'_img'} != "") { ?>
          <?php if (${$project.'_url'} != null && ${$project.'_url'} != "") { ?>
            <a href="<?php echo ${$project.'_url'} ?>" target="_blank"><img src="art/referenzen/<?php echo ${$project.'_img'} ?>" width="180" border="0" alt=""></a>
          <?php } else { ?>
            <img src="art/referenzen/<?php echo ${$project.'_img'} ?>" width="180" border="0" alt="">
          <?php }
           } ?>
          </div>
        </div>
      </div>
      <!-- end project <?php echo $project ?>-->
      
      <!-- start new project -->
      <?php $project = 'ridp'; ?>
      <div class="project">
        <div class="projectTitle">
      <?php if (${$project.'_url'} != null && ${$project.'_url'} != "") { ?> <a href="<?php echo ${$project.'_url'} ?>" target="_blank"><span class="orange">&gt;&nbsp;<?php echo ${$project.'_title'} ?></span></a>
      <?php } else { ?> <?php echo ${$project.'_title'} ?> <?php } ?>
        </div>
        <div class="projectDate"><?php echo ${$project.'_date'} ?></div>
        <div class="projectContent">
          <div class="projectText"><?php echo ${$project.'_text'} ?></div>
          <div class="projectImg">
        <?php if (${$project.'_img'} != null && ${$project.'_img'} != "") { ?>
          <?php if (${$project.'_url'} != null && ${$project.'_url'} != "") { ?>
            <a href="<?php echo ${$project.'_url'} ?>" target="_blank"><img src="art/referenzen/<?php echo ${$project.'_img'} ?>" width="180" border="0" alt=""></a>
          <?php } else { ?>
            <img src="art/referenzen/<?php echo ${$project.'_img'} ?>" width="180" border="0" alt="">
          <?php }
           } ?>
          </div>
        </div>
      </div>
      <!-- end project <?php echo $project ?>-->
      
      <!-- start new project -->
      <?php $project = 'dragonfly'; ?>
      <div class="project">
        <div class="projectTitle">
      <?php if (${$project.'_url'} != null && ${$project.'_url'} != "") { ?> <a href="<?php echo ${$project.'_url'} ?>" target="_blank"><span class="orange">&gt;&nbsp;<?php echo ${$project.'_title'} ?></span></a>
      <?php } else { ?> <?php echo ${$project.'_title'} ?> <?php } ?>
        </div>
        <div class="projectDate"><?php echo ${$project.'_date'} ?></div>
        <div class="projectContent">
          <div class="projectText"><?php echo ${$project.'_text'} ?></div>
          <div class="projectImg">
        <?php if (${$project.'_img'} != null && ${$project.'_img'} != "") { ?>
          <?php if (${$project.'_url'} != null && ${$project.'_url'} != "") { ?>
            <a href="<?php echo ${$project.'_url'} ?>" target="_blank"><img src="art/referenzen/<?php echo ${$project.'_img'} ?>" width="180" border="0" alt=""></a>
          <?php } else { ?>
            <img src="art/referenzen/<?php echo ${$project.'_img'} ?>" width="180" border="0" alt="">
          <?php }
           } ?>
          </div>
        </div>
      </div>
      <!-- end project <?php echo $project ?>-->
      
      <!-- start new project -->
      <?php $project = 'grt'; ?>
      <div class="project">
        <div class="projectTitle">
      <?php if (${$project.'_url'} != null && ${$project.'_url'} != "") { ?> <a href="<?php echo ${$project.'_url'} ?>" target="_blank"><span class="orange">&gt;&nbsp;<?php echo ${$project.'_title'} ?></span></a>
      <?php } else { ?> <?php echo ${$project.'_title'} ?> <?php } ?>
        </div>
        <div class="projectDate"><?php echo ${$project.'_date'} ?></div>
        <div class="projectContent">
          <div class="projectText"><?php echo ${$project.'_text'} ?></div>
          <div class="projectImg">
        <?php if (${$project.'_img'} != null && ${$project.'_img'} != "") { ?>
          <?php if (${$project.'_url'} != null && ${$project.'_url'} != "") { ?>
            <a href="<?php echo ${$project.'_url'} ?>" target="_blank"><img src="art/referenzen/<?php echo ${$project.'_img'} ?>" width="180" border="0" alt=""></a>
          <?php } else { ?>
            <img src="art/referenzen/<?php echo ${$project.'_img'} ?>" width="180" border="0" alt="">
          <?php }
           } ?>
          </div>
        </div>
      </div>
      <!-- end project <?php echo $project ?>-->
      
      <!-- start new project -->
      <?php $project = 'cc'; ?>
      <div class="project">
        <div class="projectTitle">
      <?php if (${$project.'_url'} != null && ${$project.'_url'} != "") { ?> <a href="<?php echo ${$project.'_url'} ?>" target="_blank"><span class="orange">&gt;&nbsp;<?php echo ${$project.'_title'} ?></span></a>
      <?php } else { ?> <?php echo ${$project.'_title'} ?> <?php } ?>
        </div>
        <div class="projectDate"><?php echo ${$project.'_date'} ?></div>
        <div class="projectContent">
          <div class="projectText"><?php echo ${$project.'_text'} ?></div>
          <div class="projectImg">
        <?php if (${$project.'_img'} != null && ${$project.'_img'} != "") { ?>
          <?php if (${$project.'_url'} != null && ${$project.'_url'} != "") { ?>
            <a href="<?php echo ${$project.'_url'} ?>" target="_blank"><img src="art/referenzen/<?php echo ${$project.'_img'} ?>" width="180" border="0" alt=""></a>
          <?php } else { ?>
            <img src="art/referenzen/<?php echo ${$project.'_img'} ?>" width="180" border="0" alt="">
          <?php }
           } ?>
          </div>
        </div>
      </div>
      <!-- end project <?php echo $project ?>-->
      
      <!-- start new project -->
      <?php $project = 'grm'; ?>
      <div class="project">
        <div class="projectTitle">
      <?php if (${$project.'_url'} != null && ${$project.'_url'} != "") { ?> <a href="<?php echo ${$project.'_url'} ?>" target="_blank"><span class="orange">&gt;&nbsp;<?php echo ${$project.'_title'} ?></span></a>
      <?php } else { ?> <?php echo ${$project.'_title'} ?> <?php } ?>
        </div>
        <div class="projectDate"><?php echo ${$project.'_date'} ?></div>
        <div class="projectContent">
          <div class="projectText"><?php echo ${$project.'_text'} ?></div>
          <div class="projectImg">
        <?php if (${$project.'_img'} != null && ${$project.'_img'} != "") { ?>
          <?php if (${$project.'_url'} != null && ${$project.'_url'} != "") { ?>
            <a href="<?php echo ${$project.'_url'} ?>" target="_blank"><img src="art/referenzen/<?php echo ${$project.'_img'} ?>" width="180" border="0" alt=""></a>
          <?php } else { ?>
            <img src="art/referenzen/<?php echo ${$project.'_img'} ?>" width="180" border="0" alt="">
          <?php }
           } ?>
          </div>
        </div>
      </div>
      <!-- end project <?php echo $project ?>-->
      
      <!-- start new project -->
      <?php $project = 'kt'; ?>
      <div class="project">
        <div class="projectTitle">
      <?php if (${$project.'_url'} != null && ${$project.'_url'} != "") { ?> <a href="<?php echo ${$project.'_url'} ?>" target="_blank"><span class="orange">&gt;&nbsp;<?php echo ${$project.'_title'} ?></span></a>
      <?php } else { ?> <?php echo ${$project.'_title'} ?> <?php } ?>
        </div>
        <div class="projectDate"><?php echo ${$project.'_date'} ?></div>
        <div class="projectContent">
          <div class="projectText"><?php echo ${$project.'_text'} ?></div>
          <div class="projectImg">
        <?php if (${$project.'_img'} != null && ${$project.'_img'} != "") { ?>
          <?php if (${$project.'_url'} != null && ${$project.'_url'} != "") { ?>
            <a href="<?php echo ${$project.'_url'} ?>" target="_blank"><img src="art/referenzen/<?php echo ${$project.'_img'} ?>" width="180" border="0" alt=""></a>
          <?php } else { ?>
            <img src="art/referenzen/<?php echo ${$project.'_img'} ?>" width="180" border="0" alt="">
          <?php }
           } ?>
          </div>
        </div>
      </div>
      <!-- end project <?php echo $project ?>-->
      
      <!-- start new project -->
      <?php $project = 'itvas'; ?>
      <div class="project">
        <div class="projectTitle">
      <?php if (${$project.'_url'} != null && ${$project.'_url'} != "") { ?> <a href="<?php echo ${$project.'_url'} ?>" target="_blank"><span class="orange">&gt;&nbsp;<?php echo ${$project.'_title'} ?></span></a>
      <?php } else { ?> <?php echo ${$project.'_title'} ?> <?php } ?>
        </div>
        <div class="projectDate"><?php echo ${$project.'_date'} ?></div>
        <div class="projectContent">
          <div class="projectText"><?php echo ${$project.'_text'} ?></div>
          <div class="projectImg">
        <?php if (${$project.'_img'} != null && ${$project.'_img'} != "") { ?>
          <?php if (${$project.'_url'} != null && ${$project.'_url'} != "") { ?>
            <a href="<?php echo ${$project.'_url'} ?>" target="_blank"><img src="art/referenzen/<?php echo ${$project.'_img'} ?>" width="180" border="0" alt=""></a>
          <?php } else { ?>
            <img src="art/referenzen/<?php echo ${$project.'_img'} ?>" width="180" border="0" alt="">
          <?php }
           } ?>
          </div>
        </div>
      </div>
      <!-- end project <?php echo $project ?>-->
      
      <!-- start new project -->
      <?php $project = 'dm'; ?>
      <div class="project">
        <div class="projectTitle">
      <?php if (${$project.'_url'} != null && ${$project.'_url'} != "") { ?> <a href="<?php echo ${$project.'_url'} ?>" target="_blank"><span class="orange">&gt;&nbsp;<?php echo ${$project.'_title'} ?></span></a>
      <?php } else { ?> <?php echo ${$project.'_title'} ?> <?php } ?>
        </div>
        <div class="projectDate"><?php echo ${$project.'_date'} ?></div>
        <div class="projectContent">
          <div class="projectText"><?php echo ${$project.'_text'} ?></div>
          <div class="projectImg">
        <?php if (${$project.'_img'} != null && ${$project.'_img'} != "") { ?>
          <?php if (${$project.'_url'} != null && ${$project.'_url'} != "") { ?>
            <a href="<?php echo ${$project.'_url'} ?>" target="_blank"><img src="art/referenzen/<?php echo ${$project.'_img'} ?>" width="180" border="0" alt=""></a>
          <?php } else { ?>
            <img src="art/referenzen/<?php echo ${$project.'_img'} ?>" width="180" border="0" alt="">
          <?php }
           } ?>
          </div>
        </div>
      </div>
      <!-- end project <?php echo $project ?>-->
      
      <!-- start new project -->
      <!--<?php $project = 'kanban'; ?>
      <div class="project">
        <div class="projectTitle">
      <?php if (${$project.'_url'} != null && ${$project.'_url'} != "") { ?> <a href="<?php echo ${$project.'_url'} ?>" target="_blank"><span class="orange">&gt;&nbsp;<?php echo ${$project.'_title'} ?></span></a>
      <?php } else { ?> <?php echo ${$project.'_title'} ?> <?php } ?>
        </div>
        <div class="projectDate"><?php echo ${$project.'_date'} ?></div>
        <div class="projectContent">
          <div class="projectText"><?php echo ${$project.'_text'} ?></div>
          <div class="projectImg">
        <?php if (${$project.'_img'} != null && ${$project.'_img'} != "") { ?>
          <?php if (${$project.'_url'} != null && ${$project.'_url'} != "") { ?>
            <a href="<?php echo ${$project.'_url'} ?>" target="_blank"><img src="art/referenzen/<?php echo ${$project.'_img'} ?>" width="180" border="0" alt=""></a>
          <?php } else { ?>
            <img src="art/referenzen/<?php echo ${$project.'_img'} ?>" width="180" border="0" alt="">
          <?php }
           } ?>
          </div>
        </div>
      </div>-->
      <!-- end project <?php echo $project ?>-->
      
      <!-- start new project -->
      <?php $project = 'praline'; ?>
      <div class="project">
        <div class="projectTitle">
      <?php if (${$project.'_url'} != null && ${$project.'_url'} != "") { ?> <a href="<?php echo ${$project.'_url'} ?>" target="_blank"><span class="orange">&gt;&nbsp;<?php echo ${$project.'_title'} ?></span></a>
      <?php } else { ?> <?php echo ${$project.'_title'} ?> <?php } ?>
        </div>
        <div class="projectDate"><?php echo ${$project.'_date'} ?></div>
        <div class="projectContent">
          <div class="projectText"><?php echo ${$project.'_text'} ?></div>
          <div class="projectImg">
        <?php if (${$project.'_img'} != null && ${$project.'_img'} != "") { ?>
          <?php if (${$project.'_url'} != null && ${$project.'_url'} != "") { ?>
            <a href="<?php echo ${$project.'_url'} ?>" target="_blank"><img src="art/referenzen/<?php echo ${$project.'_img'} ?>" width="180" border="0" alt=""></a>
          <?php } else { ?>
            <img src="art/referenzen/<?php echo ${$project.'_img'} ?>" width="180" border="0" alt="">
          <?php }
           } ?>
          </div>
        </div>
      </div>
      <!-- end project <?php echo $project ?>-->
      
      <!-- start new project -->
      <!--<?php $project = 'urlaub'; ?>
      <div class="project">
        <div class="projectTitle">
      <?php if (${$project.'_url'} != null && ${$project.'_url'} != "") { ?> <a href="<?php echo ${$project.'_url'} ?>" target="_blank"><span class="orange">&gt;&nbsp;<?php echo ${$project.'_title'} ?></span></a>
      <?php } else { ?> <?php echo ${$project.'_title'} ?> <?php } ?>
        </div>
        <div class="projectDate"><?php echo ${$project.'_date'} ?></div>
        <div class="projectContent">
          <div class="projectText"><?php echo ${$project.'_text'} ?></div>
          <div class="projectImg">
        <?php if (${$project.'_img'} != null && ${$project.'_img'} != "") { ?>
          <?php if (${$project.'_url'} != null && ${$project.'_url'} != "") { ?>
            <a href="<?php echo ${$project.'_url'} ?>" target="_blank"><img src="art/referenzen/<?php echo ${$project.'_img'} ?>" width="180" border="0" alt=""></a>
          <?php } else { ?>
            <img src="art/referenzen/<?php echo ${$project.'_img'} ?>" width="180" border="0" alt="">
          <?php }
           } ?>
          </div>
        </div>
      </div>-->
      <!-- end project <?php echo $project ?>-->
      
      <!-- start new project -->
      <?php $project = 'ostmann'; ?>
      <div class="project">
        <div class="projectTitle">
      <?php if (${$project.'_url'} != null && ${$project.'_url'} != "") { ?> <a href="<?php echo ${$project.'_url'} ?>" target="_blank"><span class="orange">&gt;&nbsp;<?php echo ${$project.'_title'} ?></span></a>
      <?php } else { ?> <?php echo ${$project.'_title'} ?> <?php } ?>
        </div>
        <div class="projectDate"><?php echo ${$project.'_date'} ?></div>
        <div class="projectContent">
          <div class="projectText"><?php echo ${$project.'_text'} ?></div>
          <div class="projectImg">
        <?php if (${$project.'_img'} != null && ${$project.'_img'} != "") { ?>
          <?php if (${$project.'_url'} != null && ${$project.'_url'} != "") { ?>
            <a href="<?php echo ${$project.'_url'} ?>" target="_blank"><img src="art/referenzen/<?php echo ${$project.'_img'} ?>" width="180" border="0" alt=""></a>
          <?php } else { ?>
            <img src="art/referenzen/<?php echo ${$project.'_img'} ?>" width="180" border="0" alt="">
          <?php }
           } ?>
          </div>
        </div>
      </div>
      <!-- end project <?php echo $project ?>-->
      
      <!-- start new project -->
      <?php $project = 'inhouse'; ?>
      <div class="project">
        <div class="projectTitle">
      <?php if (${$project.'_url'} != null && ${$project.'_url'} != "") { ?> <a href="<?php echo ${$project.'_url'} ?>" target="_blank"><span class="orange">&gt;&nbsp;<?php echo ${$project.'_title'} ?></span></a>
      <?php } else { ?> <?php echo ${$project.'_title'} ?> <?php } ?>
        </div>
        <div class="projectDate"><?php echo ${$project.'_date'} ?></div>
        <div class="projectContent">
          <div class="projectText"><?php echo ${$project.'_text'} ?></div>
          <div class="projectImg">
        <?php if (${$project.'_img'} != null && ${$project.'_img'} != "") { ?>
          <?php if (${$project.'_url'} != null && ${$project.'_url'} != "") { ?>
            <a href="<?php echo ${$project.'_url'} ?>" target="_blank"><img src="art/referenzen/<?php echo ${$project.'_img'} ?>" width="180" border="0" alt=""></a>
          <?php } else { ?>
            <img src="art/referenzen/<?php echo ${$project.'_img'} ?>" width="180" border="0" alt="">
          <?php }
           } ?>
          </div>
        </div>
      </div>
      <!-- end project <?php echo $project ?>-->
      
      <!-- start new project -->
      <?php $project = 'productprice'; ?>
      <div class="project">
        <div class="projectTitle">
      <?php if (${$project.'_url'} != null && ${$project.'_url'} != "") { ?> <a href="<?php echo ${$project.'_url'} ?>" target="_blank"><span class="orange">&gt;&nbsp;<?php echo ${$project.'_title'} ?></span></a>
      <?php } else { ?> <?php echo ${$project.'_title'} ?> <?php } ?>
        </div>
        <div class="projectDate"><?php echo ${$project.'_date'} ?></div>
        <div class="projectContent">
          <div class="projectText"><?php echo ${$project.'_text'} ?></div>
          <div class="projectImg">
        <?php if (${$project.'_img'} != null && ${$project.'_img'} != "") { ?>
          <?php if (${$project.'_url'} != null && ${$project.'_url'} != "") { ?>
            <a href="<?php echo ${$project.'_url'} ?>" target="_blank"><img src="art/referenzen/<?php echo ${$project.'_img'} ?>" width="180" border="0" alt=""></a>
          <?php } else { ?>
            <img src="art/referenzen/<?php echo ${$project.'_img'} ?>" width="180" border="0" alt="">
          <?php }
           } ?>
          </div>
        </div>
      </div>
      <!-- end project <?php echo $project ?>-->
      
      <!-- start new project -->
      <!--<?php $project = 'sitemap'; ?>
      <div class="project">
        <div class="projectTitle">
      <?php if (${$project.'_url'} != null && ${$project.'_url'} != "") { ?> <a href="<?php echo ${$project.'_url'} ?>" target="_blank"><span class="orange">&gt;&nbsp;<?php echo ${$project.'_title'} ?></span></a>
      <?php } else { ?> <?php echo ${$project.'_title'} ?> <?php } ?>
        </div>
        <div class="projectDate"><?php echo ${$project.'_date'} ?></div>
        <div class="projectContent">
          <div class="projectText"><?php echo ${$project.'_text'} ?></div>
          <div class="projectImg">
        <?php if (${$project.'_img'} != null && ${$project.'_img'} != "") { ?>
          <?php if (${$project.'_url'} != null && ${$project.'_url'} != "") { ?>
            <a href="<?php echo ${$project.'_url'} ?>" target="_blank"><img src="art/referenzen/<?php echo ${$project.'_img'} ?>" width="180" border="0" alt=""></a>
          <?php } else { ?>
            <img src="art/referenzen/<?php echo ${$project.'_img'} ?>" width="180" border="0" alt="">
          <?php }
           } ?>
          </div>
        </div>
      </div>-->
      <!-- end project <?php echo $project ?>-->
      
      <!-- start new project -->
      <?php $project = 'citi'; ?>
      <div class="project">
        <div class="projectTitle">
      <?php if (${$project.'_url'} != null && ${$project.'_url'} != "") { ?> <a href="<?php echo ${$project.'_url'} ?>" target="_blank"><span class="orange">&gt;&nbsp;<?php echo ${$project.'_title'} ?></span></a>
      <?php } else { ?> <?php echo ${$project.'_title'} ?> <?php } ?>
        </div>
        <div class="projectDate"><?php echo ${$project.'_date'} ?></div>
        <div class="projectContent">
          <div class="projectText"><?php echo ${$project.'_text'} ?></div>
          <div class="projectImg">
        <?php if (${$project.'_img'} != null && ${$project.'_img'} != "") { ?>
          <?php if (${$project.'_url'} != null && ${$project.'_url'} != "") { ?>
            <a href="<?php echo ${$project.'_url'} ?>" target="_blank"><img src="art/referenzen/<?php echo ${$project.'_img'} ?>" width="180" border="0" alt=""></a>
          <?php } else { ?>
            <img src="art/referenzen/<?php echo ${$project.'_img'} ?>" width="180" border="0" alt="">
          <?php }
           } ?>
          </div>
        </div>
      </div>
      <!-- end project <?php echo $project ?>-->
      
      <!-- start new project -->
      <!--<?php $project = 'pb'; ?>
      <div class="project">
        <div class="projectTitle">
      <?php if (${$project.'_url'} != null && ${$project.'_url'} != "") { ?> <a href="<?php echo ${$project.'_url'} ?>" target="_blank"><span class="orange">&gt;&nbsp;<?php echo ${$project.'_title'} ?></span></a>
      <?php } else { ?> <?php echo ${$project.'_title'} ?> <?php } ?>
        </div>
        <div class="projectDate"><?php echo ${$project.'_date'} ?></div>
        <div class="projectContent">
          <div class="projectText"><?php echo ${$project.'_text'} ?></div>
          <div class="projectImg">
        <?php if (${$project.'_img'} != null && ${$project.'_img'} != "") { ?>
          <?php if (${$project.'_url'} != null && ${$project.'_url'} != "") { ?>
            <a href="<?php echo ${$project.'_url'} ?>" target="_blank"><img src="art/referenzen/<?php echo ${$project.'_img'} ?>" width="180" border="0" alt=""></a>
          <?php } else { ?>
            <img src="art/referenzen/<?php echo ${$project.'_img'} ?>" width="180" border="0" alt="">
          <?php }
           } ?>
          </div>
        </div>
      </div>-->
      <!-- end project <?php echo $project ?>-->
      
      <!-- start new project -->
      <?php $project = 'ellipson'; ?>
      <div class="project">
        <div class="projectTitle">
      <?php if (${$project.'_url'} != null && ${$project.'_url'} != "") { ?> <a href="<?php echo ${$project.'_url'} ?>" target="_blank"><span class="orange">&gt;&nbsp;<?php echo ${$project.'_title'} ?></span></a>
      <?php } else { ?> <?php echo ${$project.'_title'} ?> <?php } ?>
        </div>
        <div class="projectDate"><?php echo ${$project.'_date'} ?></div>
        <div class="projectContent">
          <div class="projectText"><?php echo ${$project.'_text'} ?></div>
          <div class="projectImg">
        <?php if (${$project.'_img'} != null && ${$project.'_img'} != "") { ?>
          <?php if (${$project.'_url'} != null && ${$project.'_url'} != "") { ?>
            <a href="<?php echo ${$project.'_url'} ?>" target="_blank"><img src="art/referenzen/<?php echo ${$project.'_img'} ?>" width="180" border="0" alt=""></a>
          <?php } else { ?>
            <img src="art/referenzen/<?php echo ${$project.'_img'} ?>" width="180" border="0" alt="">
          <?php }
           } ?>
          </div>
        </div>
      </div>
      <!-- end project <?php echo $project ?>-->
      
    </div>
  </div>

<?php
include_once('footer.php');

