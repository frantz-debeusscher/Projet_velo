<?php
require '../class/Boite_Connexion.php';
class Entreprise
{

    private $id_entreprise;
    private $nom_entreprise;
    private $rcs_entreprise;
    private $actif_nonactif_entreprise;

    public function __construct(
        int $id_entreprise,
        string $nom_entreprise,
        string $rcs_entreprise,
        string $actif_nonactif_entreprise
    ) {

        $this->id_entreprise = $id_entreprise;
        $this->nom_entreprise = $nom_entreprise;
        $this->rcs_entreprise = $rcs_entreprise;
        $this->actif_nonactif_entreprise = $actif_nonactif_entreprise;
    }

    // function fonctionne uniquement avec la requete SELECT * FROM table
    //toute la table
    public function getAllEntreprise($sql)
    {
        $connex = Boite_Connexion::getDB();
        $req = $connex->prepare($sql);
        $req->execute();
        $reponse = $connex->fetchOject();
        return $reponse;
    }

//toutes les entreprises
public function getEntrepriseNom($sql, $nom_entreprise)
{
    $connex = Boite_Connexion::getDB();
    $req = $connex->prepare($sql);
    $req->bindParam(":nom_entreprise", $nom_entreprise, PDO::PARAM_INT);
    $req->execute();
    $reponse = $connex->fetchOject();
    return $reponse;
}


    /**
     * Get the value of id_entreprise
     */
    public function getId_entreprise()
    {
        return $this->id_entreprise;
    }

    /**
     * Set the value of id_entreprise
     *
     * @return  self
     */
    public function setId_entreprise($id_entreprise)
    {
        $this->id_entreprise = $id_entreprise;

        return $this;
    }

    /**
     * Get the value of nom_entreprise
     */
    public function getNom_entreprise()
    {
        return $this->nom_entreprise;
    }

    /**
     * Set the value of nom_entreprise
     *
     * @return  self
     */
    public function setNom_entreprise($nom_entreprise)
    {
        $this->nom_entreprise = $nom_entreprise;

        return $this;
    }

    /**
     * Get the value of rcs_entreprise
     */
    public function getRcs_entreprise()
    {
        return $this->rcs_entreprise;
    }

    /**
     * Set the value of rcs_entreprise
     *
     * @return  self
     */
    public function setRcs_entreprise($rcs_entreprise)
    {
        $this->rcs_entreprise = $rcs_entreprise;

        return $this;
    }

    /**
     * Get the value of actif_nonactif_entreprise
     */
    public function getActif_nonactif_entreprise()
    {
        return $this->actif_nonactif_entreprise;
    }

    /**
     * Set the value of actif_nonactif_entreprise
     *
     * @return  self
     */
    public function setActif_nonactif_entreprise($actif_nonactif_entreprise)
    {
        $this->actif_nonactif_entreprise = $actif_nonactif_entreprise;

        return $this;
    }
}
