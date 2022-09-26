<!DOCTYPE html>
<html>

<head>

    <title> Display Data </title>
    <style type="text/css">
    table {
        border: 2px solid red;
        background-color: #ffc;
    }

    th {
        border-bottom: 5px solid #000;

    }

    td {
        border-radius: 2px solid #666;
    }
    </style>
</head>

<body>

    <h1> Display Data</h1>
</body>

</html>


<?php
include("connct-mysql.php");
$sqlget = "SELECT * FROM  sakila.actor ";
$sqldata = mysqli_query($dbcon,$sqlget) or die("Errror getting data");
echo "<table";
echo "<tr><th>ID</tr></th><tr><th>Name</tr></th><tr><th>surname</tr></th><tr><th>date</tr></th>";
while ($row = mysqli_fetch_array($sqldata,MYSQLI_ASSOC)){


    echo "<tr><th>;
    echo $row['actor_id'];
    </tr></th>";
    echo "<tr><th>;
    echo $row['first_name'];
    </tr></th>";
    echo "<tr><th>;
    echo $row['last_name'];
    </tr></th>";
    echo "<tr><th>;
    echo $row['last_update'];
    </tr></th>";
}
echo "</table>"

?>