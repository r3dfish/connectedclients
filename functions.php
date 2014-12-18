<?php

if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'get_dhcp_leases':
            echo get_dhcp_leases_from_log();
            break;
        case 'get_blacklisted_macs':
            echo get_blacklisted_macs();
            break;
        case 'remove_blacklisted_mac':
            echo remove_mac_from_blacklist($_POST['mac_address']);
            break;
        case 'add_blacklisted_mac':
            echo add_mac_to_blacklist($_POST['mac_address']);
            break;
        case 'get_iw_clients':
            echo get_iw_connected_clients();
            break;
    }
}

// This function parses the DHCP leases in /tmp/dhcp.leases file
// it is used to build the clients tab
function get_dhcp_leases_from_log(){
    $logs = array();
    array_push($logs, htmlspecialchars(file_get_contents('/tmp/dhcp.leases')));
    $html = json_encode($logs);
    return $html;
}

// This function gets the mac addresses in karmas blacklist
function get_blacklisted_macs(){
    exec("pineapple karma list_macs", $mac_list);
    $html = json_encode($mac_list);
    return $html;
} 

// This function removes a mac address from karmas blacklist
function remove_mac_from_blacklist($mac){
    exec('pineapple karma del_mac "'.$mac.'"');                  
    return "";
}

// This function adds a mac address to karmas blacklist
function add_mac_to_blacklist($mac){
    exec('pineapple karma add_mac "'.$mac.'"');
    return "";
}

// This function gets the list of connected clients from iw
function get_iw_connected_clients(){
    exec("iw dev wlan0 station dump | grep Station | awk '{print $2}'", $iw_connected_clients);
    $html = json_encode($iw_connected_clients);
    return $html;
}

?>
