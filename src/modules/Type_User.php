<?php
require '../class/Boite_Connexion.php';
class Type_User
{
    private $id_type_user;
    private $pro_perso_user;
    private $entreprise_id_entreprise;

    public function __construct(
        int $id_type_user,
        string $pro_perso_user,
        int $entreprise_id_entreprise

    ) {
        $this->id_type_user = $id_type_user;
        $this->pro_perso_user = $pro_perso_user;
        $this->entreprise_id_entreprise = $entreprise_id_entreprise;
    }

    // function fonctionne uniquement avec la requete SELECT * FROM table
    //toute la table
    public function getAllTypeUser($sql)
    {
        $connex = Boite_Connexion::getDB();
        $req = $connex->prepare($sql);
        $req->execute();
        $reponse = $connex->fetchOject();
        return $reponse;
    }




    /**
     * Get the value of id_type_user
     */
    public function getId_type_user()
    {
        return $this->id_type_user;
    }

    /**
     * Set the value of id_type_user
     *
     * @return  self
     */
    public function setId_type_user($id_type_user)
    {
        $this->id_type_user = $id_type_user;

        return $this;
    }

    /**
     * Get the value of pro_perso_user
     */
    public function getPro_perso_user()
    {
        return $this->pro_perso_user;
    }

    /**
     * Set the value of pro_perso_user
     *
     * @return  self
     */
    public function setPro_perso_user($pro_perso_user)
    {
        $this->pro_perso_user = $pro_perso_user;

        return $this;
    }

    /**
     * Get the value of entreprise_id_entreprise
     */
    public function getEntreprise_id_entreprise()
    {
        return $this->entreprise_id_entreprise;
    }

    /**
     * Set the value of entreprise_id_entreprise
     *
     * @return  self
     */
    public function setEntreprise_id_entreprise($entreprise_id_entreprise)
    {
        $this->entreprise_id_entreprise = $entreprise_id_entreprise;

        return $this;
    }
}
