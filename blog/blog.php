<?php

if ($_GET['lan'] == 'en' || $_POST['lan'] == 'en')
    $lan = 'en';
else
    $lan = 'de';

header( 'Location: http://starside.de/job/blog/index.php?lan=' . $lan) ;


?>

<html>
<head>
<meta http-equiv="refresh" content="0; URL=http://starside.de/job/blog/index.php?lan=<?php echo $lan ?>">
</head>
<body>
</body>
</html>