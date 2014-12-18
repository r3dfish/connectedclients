<h2>Blacklisted Macs: <span id="blacklist_count"></span></h2>
<div id="blacklisted_macs">Loading Mac Blacklist ...</div>

<form name="mac_address_form" action="/components/infusions/connectedclients/functions.php?action=remove_blacklisted_mac" method="POST" onsubmit="$(this).AJAXifyForm(refresh_blacklist_tab); return false;">
<input type="hidden" id="mac_address" name="mac_address" value="" />
<input type="submit" id="remove_blacklist_mac_button" style="height: 0px; width: 0px; border: none; padding: 0px;" hidefocus="true" />
</form>

<script type="text/javascript">
    get_blacklist_macs();
</script>
