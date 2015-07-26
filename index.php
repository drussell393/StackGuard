<?php 

ini_set('display_errors',1);
ini_set('display_startup_errors',1);
include 'modules/get_minions.php';

?>

<html>
<body>

<link rel="stylesheet" href="css/style.css" type="text/css">

<title>Trip Through LOLLAND</title>
<div id="nav">

    <ul>
        <?php get_minions(); ?>
    </ul>

</div>
<div class="fuckclasses">
    <h1>LOL OMG WOT</h1>
    <p>This shit be cray!</p>
</div>
</body>
</html>
