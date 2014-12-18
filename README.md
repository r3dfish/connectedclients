About Connected Clients Infusion
================

Connected Clients is an infusion for the Wifi Pineapple that gives information about connected clients

## DHCP Leases tab ##
The DHCP Leases tab references /tmp/dhcp.leases to get the list of dhcp leases that have been given out by the wifi pineapple.  This does not mean that all clients with DHCP leases are currently connected as a client can disconnect from the pineapple but the DHCP lease can still exist.  
  
The blacklist button will add the mac address to Karma's blacklist.

## Connected Clients tab ##
The Connected Clients tab uses the 'iw' command to get a list of all the clients currently associated with wlan0.  The clients listed on this tab are currently connected to the pineapple via wlan0.

## Blacklist tab ##
The Blacklist tab shows the mac addresses currently in Karma's blacklist.  Macs listed in the blacklist will not be allowed to associate with the pineapple.  
  
The remove button will remove the selected mac address from Karma's blacklist.

# Changelog #
## v1.2 ##
Connected Clients tab changed to show currently connected mac addresses from 'iw' output.  DHCP leases from /tmp/dhcp.leases moved to DHCP Leases tab.  
  
## v1.1 ##
Added Blacklist tab and ability to blacklist mac addresses from DHCP leases.  
  
## v1.0 ##
Initial Release.  Shows DHCP leases.
