<?php
require '../class/Boite_Connexion.php';
class Tva
{

    private $id_tva;
    private $valeur_tva;
   
    public function __construct(

        int $id_tva,
        int $valeur_tva
    )
{
    $this->id_tva = $id_tva;
    $this->valeur_tva = $valeur_tva;

}
public function getAllTva($sql)
{
    $connex = Boite_Connexion::getDB();
    $req = $connex->prepare($sql);
    $req->execute();
    $reponse = $connex->fetchOject();
    return $reponse;
}






    /**
     * Get the value of id_tva
     */ 
    public function getId_tva()
    {
        return $this->id_tva;
    }

    /**
     * Set the value of id_tva
     *
     * @return  self
     */ 
    public function setId_tva($id_tva)
    {
        $this->id_tva = $id_tva;

        return $this;
    }

    /**
     * Get the value of valeur_tva
     */ 
    public function getValeur_tva()
    {
        return $this->valeur_tva;
    }

    /**
     * Set the value of valeur_tva
     *
     * @return  self
     */ 
    public function setValeur_tva($valeur_tva)
    {
        $this->valeur_tva = $valeur_tva;

        return $this;
    }
}