<!DOCTYPE html>
<head>
    <title> Mosnegutu Cosmin - ASSIGMENT </title>
    <?php 
        include ('db.php');
    ?>
</head>
<body>
    <center>
    <h1> SELECT / INSERT / DELETE MYSQL </h1>

    <!-- inceput tabel -->
    <table border='1' width='50%'>
    <thead>
    <tr bgcolor="#FF0000"><center>
    <th>id</th>
    <th>nume</th>
    <th>prenume</th>
    <th>delete</th>   
    </center></tr>
    </thead>

    <?php
        $result = mysqli_query($conn,"SELECT * FROM users");       
        while($row = mysqli_fetch_array($result)) 
        {
            echo "<tr>";
            echo "<td><center>" . $row['id'] . "</center></td>";
            echo "<td><center>" . $row['nume'] . "</center></td>";
            echo "<td><center>" . $row['prenume'] . "</center></td>";
            echo "<td><center><a href=\"delete.php?id=".$row['id']."\">Sterge</a></center></td>";
            echo "</tr>";  
        }
        echo "</table>"; //sfarsit tabel
    ?>

    <br />
    <table border='1'><thead>
        <tr bgcolor="#FF0000">
        <th>nume</th>
        <th>prenume</th>
        <th>adauga</th></tr></thead>
        <tr>
            <form action="insert.php" method="post">
            <td><input type="text" name="nume" id="nume"></td>
            <td><input type="text" name="prenume" id="prenume"></td>
            <td><input type="submit" value="Adauga"></td></form>
        </tr>
    </table>
    </center>
</body>
</html>