<?php
require '../class/Boite_Connexion.php';
class Produits
{
private $id_produits;
private $Type_produits;
private $nom_article_produits;
private $descriptif_produits;

public function __construct(
int $id_produits,
string $Type_produits,
string $nom_article_produits,
string $descriptif_produits
)
{
$this->id_produits = $id_produits;
$this->Type_produits = $Type_produits;
$this->nom_article_produits = $nom_article_produits;
$this->descriptif_produits = $descriptif_produits;

}

// function fonctionne uniquement avec la requete SELECT * FROM table
        //toute la table
        public function getAllProduits($sql){
                $connex = Boite_Connexion::getDB();
                $req = $connex ->prepare($sql);
                $req -> execute();
                $reponse = $connex->fetchOject();
                //fetch(PDO::FetchObject);
                return $reponse;
            }
                //par Id
        public function getProduitById($sql,$id){
                $connex = Boite_Connexion::connect();
                $req = $connex ->prepare($sql);
                $req->bindParam(":id", $id, PDO::PARAM_INT);
                $req -> execute();
                $reponse =$connex->fetchOject();
                //fetch(PDO::FetchObject);
                return $reponse;
            }
                // par type
        public function getProduitByType($sql,$Type_produits){
                $connex = Boite_Connexion::connect();
                $req = $connex ->prepare($sql);
                $req->bindParam(":Type_produits", $Type_produits,PDO::PARAM_INT);
                $req -> execute();
                $reponse =$connex->fetchOject();
               // fetch(PDO::FetchObject);
                return $reponse;
            }
                //par produits
            public function getProduitByNom($sql,$nom_article_produits){
                $connex = Boite_Connexion::connect();
                $req = $connex ->prepare($sql);
                $req->bindParam(":nom_article_produits", $nom_article_produits,PDO::PARAM_INT);
                $req -> execute();
                $reponse =$connex->fetchOject();
               // fetch(PDO::FetchObject);
                return $reponse;
            }
        
/**
 * Get the value of id_produits
 */ 
public function getId_produits()
{
return $this->id_produits;
}

/**
 * Set the value of id_produits
 *
 * @return  self
 */ 
public function setId_produits($id_produits)
{
$this->id_produits = $id_produits;

return $this;
}

/**
 * Get the value of Type_produits
 */ 
public function getType_produits()
{
return $this->Type_produits;
}

/**
 * Set the value of Type_produits
 *
 * @return  self
 */ 
public function setType_produits($Type_produits)
{
$this->Type_produits = $Type_produits;

return $this;
}

/**
 * Get the value of nom_article_produits
 */ 
public function getNom_article_produits()
{
return $this->nom_article_produits;
}

/**
 * Set the value of nom_article_produits
 *
 * @return  self
 */ 
public function setNom_article_produits($nom_article_produits)
{
$this->nom_article_produits = $nom_article_produits;

return $this;
}

/**
 * Get the value of descriptif_produits
 */ 
public function getDescriptif_produits()
{
return $this->descriptif_produits;
}

/**
 * Set the value of descriptif_produits
 *
 * @return  self
 */ 
public function setDescriptif_produits($descriptif_produits)
{
$this->descriptif_produits = $descriptif_produits;

return $this;
}
}