<h2>Connected Clients: <span id="clients_count"></span></h2>
<h2>wlan0 Connected Clients: <span id="wlan_0_clients_count"></span></h2>
<div id="wlan0_client_macs">Loading wlan0 connected clients ...</div>
<hr />
<h2>wlan0-1 Connected Clients: <span id="wlan0_1_clients_count"></span></h2>
<div id="wlan0_1_client_macs">Loading wlan0-1 connected clients ...</div>

<form name="mac_address_form" action="/components/infusions/connectedclients/functions.php?action=add_blacklisted_mac" method="POST" onsubmit="$(this).AJAXifyForm(refresh_clients_tab); return false;">
<input type="hidden" id="add_blacklist_csrf_token" name="_csrfToken" value="" />
<input type="hidden" id="mac_address" name="mac_address" value="" />
<input type="submit" id="add_blacklist_mac_button" style="height: 0px; width: 0px; border: none; padding: 0px;" hidefocus="true" />
</form>

<form name="mac_deauthenticate_wlan0_form" action="/components/infusions/connectedclients/functions.php?action=deauthenticate_mac_wlan0" method="POST" onsubmit="$(this).AJAXifyForm(refresh_clients_tab); return false;">
<input type="hidden" id="deauth_wlan0_mac_csrf_token" name="_csrfToken" value="" />
<input type="hidden" id="deauth_wlan0_mac_address" name="deauth_wlan0_mac_address" value="" />
<input type="submit" id="deauthenticate_wlan0_mac_button" style="height: 0px; width: 0px; border: none; padding: 0px;" hidefocus="true" />
</form>

<form name="mac_deauthenticate_wlan0_1_form" action="/components/infusions/connectedclients/functions.php?action=deauthenticate_mac_wlan0_1" method="POST" onsubmit="$(this).AJAXifyForm(refresh_clients_tab); return false;">
<input type="hidden" id="deauth_wlan0_1_mac_csrf_token" name="_csrfToken" value="" />
<input type="hidden" id="deauth_wlan0_1_mac_address" name="deauth_wlan0_1_mac_address" value="" />
<input type="submit" id="deauthenticate_wlan0_1_mac_button" style="height: 0px; width: 0px; border: none; padding: 0px;" hidefocus="true" />
</form>

<form name="mac_disassociate_wlan0_form" action="/components/infusions/connectedclients/functions.php?action=disassociate_mac_wlan0" method="POST" onsubmit="$(this).AJAXifyForm(refresh_clients_tab); return false;">
<input type="hidden" id="disassociate_wlan0_mac_csrf_token" name="_csrfToken" value="" />
<input type="hidden" id="disassociate_wlan0_mac_address" name="disassociate_wlan0_mac_address" value="" />
<input type="submit" id="disassociate_wlan0_mac_button" style="height: 0px; width: 0px; border: none; padding: 0px;" hidefocus="true" />
</form>

<form name="mac_disassociate_wlan0_1_form" action="/components/infusions/connectedclients/functions.php?action=disassociate_mac_wlan0_1" method="POST" onsubmit="$(this).AJAXifyForm(refresh_clients_tab); return false;">
<input type="hidden" id="disassociate_wlan0_1_mac_csrf_token" name="_csrfToken" value="" />
<input type="hidden" id="disassociate_wlan0_1_mac_address" name="disassociate_wlan0_1_mac_address" value="" />
<input type="submit" id="disassociate_wlan0_1_mac_button" style="height: 0px; width: 0px; border: none; padding: 0px;" hidefocus="true" />
</form>

<script type="text/javascript">
    get_iw_connected_clients();
</script>
