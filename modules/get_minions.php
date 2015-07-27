<?php
function get_minions() {
    $minions_list = shell_exec('sudo ls -1 /etc/salt/pki/master/minions');
    $minions_list = explode("\n", $minions_list);
    array_pop($minions_list);
    foreach($minions_list as $minion) {
        echo "        <li>".$minion."</li>\n" ;
    }
}
?>
