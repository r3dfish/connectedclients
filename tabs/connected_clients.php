<h2>Connected Clients: <span id="clients_count"></span></h2>
<div id="client_macs">Loading connected clients ...</div>

<form name="mac_address_form" action="/components/infusions/connectedclients/functions.php?action=add_blacklisted_mac" method="POST" onsubmit="$(this).AJAXifyForm(refresh_clients_tab); return false;">
<input type="hidden" id="mac_address" name="mac_address" value="" />
<input type="submit" id="add_blacklist_mac_button" style="height: 0px; width: 0px; border: none; padding: 0px;" hidefocus="true" />
</form>

<script type="text/javascript">
    get_iw_connected_clients();
</script>
