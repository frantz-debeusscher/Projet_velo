<?php
require '../class/Boite_Connexion.php';
class Ville_User
{

	private $id_Ville_user;
    private $adresse_user;
    private $ville_user;
    private $code_p_user;
    private $actif_nonactif_ville_user;

    public function __construct(

        int $id_Ville_user,
        string $adresse_user,
        string $ville_user,
        string $code_p_user,
        string $actif_nonactif_ville_user
    ){
        $this->id_Ville_user = $id_Ville_user;
        $this->adresse_user = $adresse_user;
        $this->ville_user = $ville_user;
        $this->code_p_user = $code_p_user;
        $this->actif_nonactif_ville_user = $actif_nonactif_ville_user;

    }
// function fonctionne uniquement avec la requete SELECT * FROM table
    //toute la table
    public function getAllVilleUser($sql)
    {
        $connex = Boite_Connexion::getDB();
        $req = $connex->prepare($sql);
        $req->execute();
        $reponse = $connex->fetchOject();
        return $reponse;
    }

 //par Id
    public function getVilleUserBy($sql, $code_p_user)
    {
        $connex = Boite_Connexion::connect();
        $req = $connex->prepare($sql);
        $req->bindParam(":code_p_user", $code_p_user, PDO::PARAM_INT);
        $req->execute();
        $reponse = $connex->fetchOject();
        
        return $reponse;
    }


    

	/**
	 * Get the value of id_Ville_user
	 */ 
	public function getId_Ville_user()
	{
		return $this->id_Ville_user;
	}

	/**
	 * Set the value of id_Ville_user
	 *
	 * @return  self
	 */ 
	public function setId_Ville_user($id_Ville_user)
	{
		$this->id_Ville_user = $id_Ville_user;

		return $this;
	}

    /**
     * Get the value of adresse_user
     */ 
    public function getAdresse_user()
    {
        return $this->adresse_user;
    }

    /**
     * Set the value of adresse_user
     *
     * @return  self
     */ 
    public function setAdresse_user($adresse_user)
    {
        $this->adresse_user = $adresse_user;

        return $this;
    }

    /**
     * Get the value of ville_user
     */ 
    public function getVille_user()
    {
        return $this->ville_user;
    }

    /**
     * Set the value of ville_user
     *
     * @return  self
     */ 
    public function setVille_user($ville_user)
    {
        $this->ville_user = $ville_user;

        return $this;
    }

    /**
     * Get the value of code_p_user
     */ 
    public function getCode_p_user()
    {
        return $this->code_p_user;
    }

    /**
     * Set the value of code_p_user
     *
     * @return  self
     */ 
    public function setCode_p_user($code_p_user)
    {
        $this->code_p_user = $code_p_user;

        return $this;
    }

    /**
     * Get the value of actif_nonactif_ville_user
     */ 
    public function getActif_nonactif_ville_user()
    {
        return $this->actif_nonactif_ville_user;
    }

    /**
     * Set the value of actif_nonactif_ville_user
     *
     * @return  self
     */ 
    public function setActif_nonactif_ville_user($actif_nonactif_ville_user)
    {
        $this->actif_nonactif_ville_user = $actif_nonactif_ville_user;

        return $this;
    }
}