
        <?php


$con = new mysqli("localhost","root","password","db_name") or die("unable to Connect".$con->connect_error);
$query="select * from messages";
$result=$con->query($query);
echo "<table><tr><th>User&nbsp;&nbsp;</th><th>Message</th></tr>";
while($row=$result->fetch_assoc())
{
    echo "<tr><td>".$row['userid']."&nbsp;&nbsp;:-</td><td>".$row['message']."</td></tr>";
}
echo "</table>";
$mydate=getdate(date("U"));
if($mydate['mday']%4==0)
{
	delete();
}

function getrows()
{
	$con = new mysqli("localhost","root","Saketh@1","saketh") or die("unable to Connect".$con->connect_error);
	$c = $con->query("select count(*) as a from messages");
	$c=$c->fetch_row();
	return $c[0];
}
function delete(){
	if(getrows()>=1000)
	{
		$con = new mysqli("localhost","root","Saketh@1","saketh") or die("unable to Connect".$con->connect_error);
		$con->query("delete from messages");
	}
}

?>

   <style>
   		box{
   			box-shadow: 
   		}