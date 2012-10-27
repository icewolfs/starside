<?php
$uri_impressum = 'impressum.php';

// small workaround to check for blog directory
if (strpos($_SERVER['PHP_SELF'], 'blog') !== false) {
    $uri_impressum = '../' . $uri_impressum;
}
?>
  
  <div id="main">
    <div id="mainFooter">
        <a class="footerlink" href="<?php echo $uri_impressum ?>"><?php echo $impressum_lan ?></a>
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