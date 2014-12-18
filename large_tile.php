<?php
namespace pineapple;

$pineapple = new Pineapple(__FILE__);

$pineapple->drawTabs(
    [
    'dhcp_leases.php'=>'DHCP Leases',
    'connected_clients.php'=>'Connected Clients',
    'blacklist.php'=>'Blacklist',
    'about.php'=>'About'
    ]
);

?>
<script type='text/javascript' src='<?=$rel_dir?>js/helpers.js'></script>
