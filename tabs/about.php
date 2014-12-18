<h2>About Connected Clients Infusion</h2>
<h3>DHCP Leases tab</h3>
<p>The DHCP Leases tab references /tmp/dhcp.leases to get the list of dhcp leases that have been given out by the wifi pineapple.  This does not mean that all clients with DHCP leases are currently connected as a client can disconnect from the pineapple but the DHCP lease can still exist.</p>
<p>The blacklist button will add the mac address to Karma's blacklist.</p>
<h3>Connected Clients tab</h3>
<p>The Connected Clients tab uses the 'iw' command to get a list of all the clients currently associated with wlan0.  The clients listed on this tab are currently connected to the pineapple via wlan0.</p>
<h3>Blacklist tab</h3>
<p>The Blacklist tab shows the mac addresses currently in Karma's blacklist.  Macs listed in the blacklist will not be allowed to associate with the pineapple.</p>
<p>The remove button will remove the selected mac address from Karma's blacklist.</p>
<h2>Changelog</h2>
<h3>v1.2</h3>
<p>Connected Clients tab changed to show currently connected mac addresses from 'iw' output.  DHCP leases from /tmp/dhcp.leases moved to DHCP Leases tab.</p>
<h3>v1.1</h3>
<p>Added Blacklist tab and ability to blacklist mac addresses from DHCP leases.</p>
<h3>v1.0</h3>
<p>Initial Release.  Shows DHCP leases.</p>
