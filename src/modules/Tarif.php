<?php
require '../class/Boite_Connexion.php';
class  Tarif
{
    private $id_tarif;
    private $valeur_tarif;
    private $date;
    private $periode_id_periode;
    private $tva_id_tva;
    private $produits_id_produits;
    private $ville_borne_id_ville_borne;


    public function __construct(

        int $id_tarif,
        int $valeur_tarif,
        int $date,
        string $periode_id_periode,
        int $tva_id_tva,
        string $produits_id_produits,
        string $ville_borne_id_ville_borne

    ) {
        $this->id_tarif = $id_tarif;
        $this->valeur_tarif = $valeur_tarif;
        $this->date = $date;
        $this->periode_id_periode = $periode_id_periode;
        $this->tva_id_tva = $tva_id_tva;
        $this->produits_id_produits = $produits_id_produits;
        $this->ville_borne_id_ville_borne = $ville_borne_id_ville_borne;
    }

// function fonctionne uniquement avec la requete SELECT * FROM table
    //toute la table
    public function getAllPeriode($sql)
    {
        $connex = Boite_Connexion::getDB();
        $req = $connex->prepare($sql);
        $req->execute();
        $reponse = $connex->fetchOject();
        return $reponse;
    }





    /**
     * Get the value of id_tarif
     */
    public function getId_tarif()
    {
        return $this->id_tarif;
    }

    /**
     * Set the value of id_tarif
     *
     * @return  self
     */
    public function setId_tarif($id_tarif)
    {
        $this->id_tarif = $id_tarif;

        return $this;
    }

    /**
     * Get the value of valeur_tarif
     */
    public function getValeur_tarif()
    {
        return $this->valeur_tarif;
    }

    /**
     * Set the value of valeur_tarif
     *
     * @return  self
     */
    public function setValeur_tarif($valeur_tarif)
    {
        $this->valeur_tarif = $valeur_tarif;

        return $this;
    }

    /**
     * Get the value of date
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set the value of date
     *
     * @return  self
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get the value of periode_id_periode
     */
    public function getPeriode_id_periode()
    {
        return $this->periode_id_periode;
    }

    /**
     * Set the value of periode_id_periode
     *
     * @return  self
     */
    public function setPeriode_id_periode($periode_id_periode)
    {
        $this->periode_id_periode = $periode_id_periode;

        return $this;
    }

    /**
     * Get the value of tva_id_tva
     */
    public function getTva_id_tva()
    {
        return $this->tva_id_tva;
    }

    /**
     * Set the value of tva_id_tva
     *
     * @return  self
     */
    public function setTva_id_tva($tva_id_tva)
    {
        $this->tva_id_tva = $tva_id_tva;

        return $this;
    }

    /**
     * Get the value of produits_id_produits
     */
    public function getProduits_id_produits()
    {
        return $this->produits_id_produits;
    }

    /**
     * Set the value of produits_id_produits
     *
     * @return  self
     */
    public function setProduits_id_produits($produits_id_produits)
    {
        $this->produits_id_produits = $produits_id_produits;

        return $this;
    }

    /**
     * Get the value of ville_borne_id_ville_borne
     */
    public function getVille_borne_id_ville_borne()
    {
        return $this->ville_borne_id_ville_borne;
    }

    /**
     * Set the value of ville_borne_id_ville_borne
     *
     * @return  self
     */
    public function setVille_borne_id_ville_borne($ville_borne_id_ville_borne)
    {
        $this->ville_borne_id_ville_borne = $ville_borne_id_ville_borne;

        return $this;
    }
}
