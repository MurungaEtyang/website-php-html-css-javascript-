<style><?php include "./assets/css/fetch.css";?></style>
<?php
    require("../db.php");
    $sql = "SELECT username, email FROM users ORDER BY username DESC";

    $retrev = $con->query($sql);
    if ($retrev->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>NO</th><th>Username</th><th>Email</th></tr>";
        $count = 1;
        while ($row = $retrev->fetch_assoc()) {
            echo "<tr>";
            echo "<td>".$count."</td>";
            echo "<td>".$row['username']."</td>";
            echo "<td>".$row['email']."</td>";
            echo "</tr>";
            $count++;
        }
        echo "</table>";
    } else {
        echo "No results found.";
    }

    $con->close();
?>
