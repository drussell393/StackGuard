<?php 
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
include 'modules/get_minions.php';
?>

<html>
    <head>
        <link rel="stylesheet" href="css/style.css" type="text/css">
        <title>StackGuard</title>
    </head>
    <body>
        <div id="sg-nav">
            <ul>
                <?php get_minions(); ?>
            </ul>
        </div>
        <div class="main-sg-panel">
            <h1>Placeholder</h1>
            <p>More interesting stuff will go here.</p>
        </div>
    </body>
</html>
