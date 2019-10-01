<?php
require '../class/Boite_Connexion.php';
class Permis
{
    private $id_panier_panier;
    private $prix_total_panier;
    private $date_panier;
    private $solder_panier;
    private $litige_panier;
    private $date_depart;
    private $date_retour;
    private $tarif_id_tarif;
    private $utilisateurs_id_utilisateurs;

    public function __construct(
        int $id_panier_panier,
        int $prix_total_panier,
        date $date_panier,
        int $solder_panier,
        string $litige_panier,
        date $date_depart,
        date $date_retour,
        int $tarif_id_tarif,
        int $utilisateurs_id_utilisateurs
    ) {
        $this->id_panier_panier = $id_panier_panier;
        $this->prix_total_panier = $prix_total_panier;
        $this->date_panier = $date_panier;
        $this->solder_panier = $solder_panier;
        $this->litige_panier = $litige_panier;
        $this->date_depart = $date_depart;
        $this->date_retour = $date_retour;
        $this->tarif_id_tarif = $tarif_id_tarif;
        $this->utilisateurs_id_utilisateurs = $utilisateurs_id_utilisateurs;
    }

    // function fonctionne uniquement avec la requete SELECT * FROM table
    //toute la table
    public function getAllPanier($sql)
    {
        $connex = Boite_Connexion::getDB();
        $req = $connex->prepare($sql);
        $req->execute();
        $reponse = $connex->fetchOject();
        return $reponse;
    }


    //par Id
    public function getPanierById($sql, $id)
    {
        $connex = Boite_Connexion::connect();
        $req = $connex->prepare($sql);
        $req->bindParam(":id", $id, PDO::PARAM_INT);
        $req->execute();
        $reponse = $connex->fetchOject();
        //fetch(PDO::FetchObject);
        return $reponse;
    }


    /**
     * Get the value of id_panier_panier
     */
    public function getId_panier_panier()
    {
        return $this->id_panier_panier;
    }

    /**
     * Set the value of id_panier_panier
     *
     * @return  self
     */
    public function setId_panier_panier($id_panier_panier)
    {
        $this->id_panier_panier = $id_panier_panier;

        return $this;
    }

    /**
     * Get the value of prix_total_panier
     */
    public function getPrix_total_panier()
    {
        return $this->prix_total_panier;
    }

    /**
     * Set the value of prix_total_panier
     *
     * @return  self
     */
    public function setPrix_total_panier($prix_total_panier)
    {
        $this->prix_total_panier = $prix_total_panier;

        return $this;
    }

    /**
     * Get the value of date_panier
     */
    public function getDate_panier()
    {
        return $this->date_panier;
    }

    /**
     * Set the value of date_panier
     *
     * @return  self
     */
    public function setDate_panier($date_panier)
    {
        $this->date_panier = $date_panier;

        return $this;
    }

    /**
     * Get the value of solder_panier
     */
    public function getSolder_panier()
    {
        return $this->solder_panier;
    }

    /**
     * Set the value of solder_panier
     *
     * @return  self
     */
    public function setSolder_panier($solder_panier)
    {
        $this->solder_panier = $solder_panier;

        return $this;
    }

    /**
     * Get the value of litige_panier
     */
    public function getLitige_panier()
    {
        return $this->litige_panier;
    }

    /**
     * Set the value of litige_panier
     *
     * @return  self
     */
    public function setLitige_panier($litige_panier)
    {
        $this->litige_panier = $litige_panier;

        return $this;
    }
    /**
     * Get the value of date_depart
     */
    public function getDate_depart()
    {
        return $this->date_depart;
    }

    /**
     * Set the value of date_depart
     *
     * @return  self
     */
    public function setDate_depart($date_depart)
    {
        $this->date_depart = $date_depart;

        return $this;
    }

    /**
     * Get the value of date_retour
     */
    public function getDate_retour()
    {
        return $this->date_retour;
    }

    /**
     * Set the value of date_retour
     *
     * @return  self
     */
    public function setDate_retour($date_retour)
    {
        $this->date_retour = $date_retour;

        return $this;
    }

    /**
     * Get the value of tarif_id_tarif
     */
    public function getTarif_id_tarif()
    {
        return $this->tarif_id_tarif;
    }

    /**
     * Set the value of tarif_id_tarif
     *
     * @return  self
     */
    public function setTarif_id_tarif($tarif_id_tarif)
    {
        $this->tarif_id_tarif = $tarif_id_tarif;

        return $this;
    }

    /**
     * Get the value of utilisateurs_id_utilisateurs
     */
    public function getUtilisateurs_id_utilisateurs()
    {
        return $this->utilisateurs_id_utilisateurs;
    }

    /**
     * Set the value of utilisateurs_id_utilisateurs
     *
     * @return  self
     */
    public function setUtilisateurs_id_utilisateurs($utilisateurs_id_utilisateurs)
    {
        $this->utilisateurs_id_utilisateurs = $utilisateurs_id_utilisateurs;

        return $this;
    }
}
