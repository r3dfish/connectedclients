<h2>About Connected Clients Infusion</h2>
<h3>DHCP Leases tab</h3>
<p>The DHCP Leases tab references /tmp/dhcp.leases to get the list of dhcp leases that have been given out by the wifi pineapple.  This does not mean that all clients with DHCP leases are currently connected as a client can disconnect from the pineapple but the DHCP lease can still exist.</p>
<p>The blacklist button will add the mac address to Karma's blacklist.</p>
<h3>Connected Clients tab</h3>
<p>The Connected Clients tab uses the 'iw' command to get a list of all the clients currently associated with the pineapple.  The clients listed on this tab are broken down according to the interface they are connected to.  wlan0 is the interface that is used by pineap to trick victims into connecting to the pineapple.  wlan0-1 is the interal inteface used by the pineapple that throws up the built in accesspoint, which is protected by WPA2 by default.</p>
<p>The deauthenticate and disassociate buttons can be clicked to send the respective command to the selected client.  By first blacklisting a client's mac address, and then either deauthenticating them or disassociating them, you can kick the selected device off of networks provided by the pineapple and simultaneously block the client from re-connecting.</p>
<h3>Blacklist tab</h3>
<p>The Blacklist tab shows the mac addresses currently in Karma's blacklist.  Macs listed in the blacklist will not be allowed to associate with the pineapple.</p>
<p>The remove button will remove the selected mac address from Karma's blacklist.</p>
<h2>Changelog</h2>
<h3>v1.3</h3>
<p>Updated code to work with pineapple firmware 2.1.0.  Added the deauthenticate and disassociate buttons to the connected clients tab.  Split the connected clients tab into wlan0 and wlan0-1.</p>
<h3>v1.2</h3>
<p>Connected Clients tab changed to show currently connected mac addresses from 'iw' output.  DHCP leases from /tmp/dhcp.leases moved to DHCP Leases tab.</p>
<h3>v1.1</h3>
<p>Added Blacklist tab and ability to blacklist mac addresses from DHCP leases.</p>
<h3>v1.0</h3>
<p>Initial Release.  Shows DHCP leases.</p>
