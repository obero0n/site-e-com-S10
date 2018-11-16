<?php
require "Model/db.php";
require "Model/functionProduct.php";
require "Service/basketManager.php";
//On démarre la session pour récupérer les informations stockées
session_start();

if(isset($_GET["key"]))
{
  $key = intval(htmlspecialchars($_GET["key"]));
}
//Si l'action concerne un ajout au panier
if($_GET["action"] === "add")
{
  addProductBasket($bdd);
}

//Si l'action concerne un retrait de produit
if($_GET["action"] === "remove")
{
  removeProductBasket($key);
}
?>
