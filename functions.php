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
        case 'get_iw_wlan0_clients':
            echo get_iw_wlan0_connected_clients();
            break;
        case 'get_iw_wlan0_1_clients':
            echo get_iw_wlan0_1_connected_clients();
            break;
        case 'deauthenticate_mac_wlan0':
            echo deauth_wlan0_connected_mac($_POST['deauth_wlan0_mac_address']);
            break;
        case 'deauthenticate_mac_wlan0_1':
            echo deauth_wlan0_1_connected_mac($_POST['deauth_wlan0_1_mac_address']);
            break;
        case 'disassociate_mac_wlan0':
            echo disassociate_wlan0_connected_mac($_POST['disassociate_wlan0_mac_address']);
            break;
        case 'disassociate_mac_wlan0_1':
            echo disassociate_wlan0_1_connected_mac($_POST['disassociate_wlan0_1_mac_address']);
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

// This function gets the list of clients connected to wlan0 from iw
function get_iw_wlan0_connected_clients(){
    exec("iw dev wlan0 station dump | grep Station | awk '{print $2}'", $iw_connected_clients);
    $html = json_encode($iw_connected_clients);
    return $html;
}

// This function gets the list of clients connected to wlan0-1 from iw
function get_iw_wlan0_1_connected_clients(){
    exec("iw dev wlan0-1 station dump | grep Station | awk '{print $2}'", $iw_connected_clients);
    $html = json_encode($iw_connected_clients);
    return $html;
}

// This function deauthenticates a mac address connected to wlan0 using hostapd_cli
function deauth_wlan0_connected_mac($mac){
   exec('hostapd_cli -p /var/run/hostapd-phy0 -i wlan0 deauthenticate "'.$mac.'"');
   return "";
}

// This function deauthenticates a mac address connected to wlan0-1 using hostapd_cli
function deauth_wlan0_1_connected_mac($mac){
   exec('hostapd_cli -p /var/run/hostapd-phy0 -i wlan0-1 deauthenticate "'.$mac.'"');
   return "";
}

// This function disassociates a mac address connected to wlan0 using hostapd_cli
function disassociate_wlan0_connected_mac($mac){
   exec('hostapd_cli -p /var/run/hostapd-phy0 -i wlan0 disassociate "'.$mac.'"');
   return "";
}

// This function disassociates a mac address connected to wlan0-1 using hostapd_cli
function disassociate_wlan0_1_connected_mac($mac){
   exec('hostapd_cli -p /var/run/hostapd-phy0 -i wlan0-1 disassociate "'.$mac.'"');
   return "";
}

?>
