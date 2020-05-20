<pre><?php
include 'includes/dbconnection.php';
$con=mysqli_connect("localhost", "root", "", "bpmsdb");
if (!isset($_GET['id']))
{
    echo 'No ID was given...';
    exit;
}


$sql = "DELETE FROM usersl WHERE id = ?";
if (!$result = $con->prepare($sql))
{
    die('Query failed: (' . $con->errno . ') ' . $con->error);
}

if (!$result->bind_param('i', $_GET['id']))
{
    die('Binding parameters failed: (' . $result->errno . ') ' . $result->error);
}

if (!$result->execute())
{
    die('Execute failed: (' . $result->errno . ') ' . $result->error);
}

if ($result->affected_rows > 0)
{
    echo "The ID was deleted with success.";
}
else
{
    echo "Couldn't delete the ID.";
}
$result->close();
$con->close();
