<?php

$host = "127.0.0.1";
$dbname = "expernetbdd";
$user = "root";
$pwd = "";

$db = new PDO("mysql:host=$host;dbname=$dbname", $user, $pwd);


$requete = "SELECT * FROM movies";

$result = $db->prepare($requete);
$result->execute();
$res = $result->fetchAll(PDO::FETCH_ASSOC);

?>

<style>
    table,th,tr,td {
        border: 1px solid;
    }
</style>

<table>
    <tr>
        <th>id</th>
        <th>name</th>
        <th>release_year</th>
    </tr>
    <?php 
            
        foreach ($res as $key) {
            echo " 
            <tr>
                <td>". $key["id"] ."</td>
                <td>". $key["name"] ."</td>
                <td>". $key["release_year"] ."</td>
            </tr>";
        }
    ?>
</table>