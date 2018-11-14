<?php
function getUsers($bdd)
{
    $query = $bdd->query("SELECT * FROM user");
    $result = $query->fetchall(PDO::FETCH_ASSOC);
    return $result;
}
?>