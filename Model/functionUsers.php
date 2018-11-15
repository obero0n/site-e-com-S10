<?php
function getUsers($bdd)
{
  $query = $bdd->query("SELECT * FROM User");
  $result = $query->fetchall(PDO::FETCH_ASSOC);
  return $result;
}
function addUser($bdd, $name, $password, $status, $sexe)
{
   $req = $bdd->prepare('INSERT INTO user(name, password, status, sexe) VALUES(:name, :password,:status, :sexe)');
   $req->execute(array(
   'name'=>$name,
   'password'=>$password,
   'status'=>$status,
   'sexe'=>$sexe
));
}

function getUser($bdd,$name)
{
  $query = $bdd->prepare("SELECT * FROM User WHERE name=?");
  $query->execute([$name]);
  $result = $query->fetch(PDO::FETCH_ASSOC);
  return $result;
}

?>
