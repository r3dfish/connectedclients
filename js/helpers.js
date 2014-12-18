function get_large_tab_clients(){

  $.get('/components/infusions/connectedclients/functions.php?action=get_dhcp_leases', function(data){

    data = JSON.parse(data);
    var clients = new Array();
    var dhcp = data[0].split('\n');
    for (var i = dhcp.length - 1; i >= 0; i--) {
      dhcp[i] = dhcp[i].split(' ');
    }

    var dhcp_length = dhcp.length - 1;    
    var html_to_print = "<table style='border-spacing: 25px 2px'><tr><th>UNIX timestamp</th><th>HW Address</th><th>IP Address</th><th>hostname</th><th>Add to Blacklist</th></tr>";
    if(dhcp.length != 0){
      for (var x = 0; x < dhcp_length; x++){
        html_to_print += "<tr><td>"+dhcp[x][0]+"</td><td>"+dhcp[x][1]+"</td><td>"+dhcp[x][2]+"</td><td>";
        if(dhcp[x][3] == "*"){
          html_to_print += "&lt;host name undefined&gt;</td>";
        }else{
          html_to_print += dhcp[x][3]+"</td>";
        }
        html_to_print += "<td><a href=\"#\" onclick=\"add_blacklisted_mac('" + dhcp[x][1] + "')\">blacklist</a></td></tr>";
      }
    }else{
      html_to_print += "<tr>No DHCP clients found</tr>";
    }
    html_to_print += "</table>";
    
    $('#clients_report').html(html_to_print);
    $('#connected_clients_count').html(dhcp_length);
  });
}

function get_small_tab_clients(){

  $.get('/components/infusions/connectedclients/functions.php?action=get_dhcp_leases', function(data){

    data = JSON.parse(data);
    var clients = new Array();
    var dhcp = data[0].split('\n');
    for (var i = dhcp.length - 1; i >= 0; i--) {
      dhcp[i] = dhcp[i].split(' ');
    }

    var dhcp_length = dhcp.length - 1;
    var html_to_print = "DHCP Leases: " + dhcp_length + "<br /><br />";
    if(dhcp.length != 0){
      for (var x = 0; x < dhcp_length; x++){
        if(dhcp[x][3] == "*"){
          html_to_print += "&lt;host name undefined&gt;<br />";
        }else{
          html_to_print += dhcp[x][3]+"<br />";
        }
      }
    }else{
      html_to_print += "No DHCP clients found<br />";
    }
    $('#small_tab_clients_list').html(html_to_print);
  });
}

function get_blacklist_macs(){
  $.get('/components/infusions/connectedclients/functions.php?action=get_blacklisted_macs', function(data){
  
    var macs = JSON.parse(data);
    var macs_length = macs.length;
    $('#blacklist_count').html(macs_length);
    var html_to_print = "";
    for (var x = 0; x < macs_length; x++){
      html_to_print += macs[x] + " <a href=\"#\" onclick=\"remove_blacklisted_mac('" + macs[x] + "')\">remove</a><br />";
    }
    $('#blacklisted_macs').html(html_to_print);
  });
}

function remove_blacklisted_mac(mac_to_remove){
  document.getElementById('mac_address').value=mac_to_remove;
  document.getElementById("remove_blacklist_mac_button").click();
}

function add_blacklisted_mac(mac_to_add){
  document.getElementById('mac_address').value=mac_to_add;
  document.getElementById("add_blacklist_mac_button").click();
}

function refresh_blacklist_tab() {
  get_tab("/components/infusions/connectedclients/tabs/blacklist.php");
  setTimeout(function(){},500);
}

function refresh_dhcp_tab() {
  get_tab("/components/infusions/connectedclients/tabs/dhcp_leases.php");
  setTimeout(function(){},500);
}

function get_iw_connected_clients(){
  $.get('/components/infusions/connectedclients/functions.php?action=get_iw_clients', function(data){

    var clients = JSON.parse(data);
    $('#clients_count').html(clients.length);
    var html_to_print = "<table style='border-spacing: 25px 2px'><tr><td>Mac Address</td><td>Add to Blacklist</td></tr>";
    for (var x = 0; x < clients.length; x++){
        html_to_print += "<tr><td>" + clients[x] + "</td><td><a href=\"#\" onclick=\"add_blacklisted_mac('" + clients[x] + "')\">blacklist</a></td></tr>";
    }
    html_to_print += "</table>";
    $('#client_macs').html(html_to_print);
  });
}

function refresh_clients_tab() {
  get_tab("/components/infusions/connectedclients/tabs/connected_clients.php");
  setTimeout(function(){},500);
}   
