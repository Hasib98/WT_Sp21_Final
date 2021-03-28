<?php
    require_once "db_config.php";
    $query ="select * from student";
    $result = get($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <table border="1" style="border-collapse:collapse">
        <tr>
            <th>Name</th>
            <th>ID</th>
            <th>DOB</th>
            <th>Credit</th>
            <th>CGPA</th>
            <th>Dept_id</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
   

<?php
    foreach($result as $row){
        echo "<tr>";
        echo "<td>".$row["name"]."</td>";
        echo "<td>".$row["id"]."</td>";
        echo "<td>".$row["dob"]."</td>";
        echo "<td>".$row["credit"]."</td>";
        echo "<td>".$row["cgpa"]."</td>";
        echo "<td>".$row["dept_id"]."</td>";
    }
?>
 </table>
</body>
</html>