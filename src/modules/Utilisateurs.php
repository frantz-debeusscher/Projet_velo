<?php
require '../class/Boite_Connexion.php';
class Utilisateurs

{
    private $id_utilisateurs;
    private $nom_utilisateurs;
    private $prenom_utilisateurs;
    private $telephone_utilisateurs;
    private $email_utilisateurs;
    private $passe_utilisateurs;
    private $actif_nonacti_utilisateur;
    private $Ville_user_id_Ville_user;
    private $type_user_id_type_user;
    private $carte_bleu_id_carte_bleu;


    public function __construct(

        int $id_utilisateurs,
        string $nom_utilisateurs,
        string $prenom_utilisateurs,
        int $telephone_utilisateurs,
        string $email_utilisateurs,
        string $passe_utilisateurs,
        string $actif_nonacti_utilisateur,
        string $Ville_user_id_Ville_user,
        string $type_user_id_type_user,
        string $carte_bleu_id_carte_bleu
    ) {

        $this->id_utilisateurs = $id_utilisateurs;
        $this->nom_utilisateurs = $nom_utilisateurs;
        $this->prenom_utilisateurs = $prenom_utilisateurs;
        $this->telephone_utilisateurs = $telephone_utilisateurs;
        $this->email_utilisateurs = $email_utilisateurs;
        $this->passe_utilisateurs = $passe_utilisateurs;
        $this->actif_nonacti_utilisateur = $actif_nonacti_utilisateur;
        $this->Ville_user_id_Ville_user = $Ville_user_id_Ville_user;
        $this->type_user_id_type_user = $type_user_id_type_user;
        $this->carte_bleu_id_carte_bleu = $carte_bleu_id_carte_bleu;
    }


    // function fonctionne uniquement avec la requete SELECT * FROM table
    //toute la table
    public function getAllUtilisateur($sql)
    {
        $connex = Boite_Connexion::getDB();
        $req = $connex->prepare($sql);
        $req->execute();
        $reponse = $connex->fetchOject();
        return $reponse;
    }

    //par Id
    public function getUtilisateurById($sql, $id)
    {
        $connex = Boite_Connexion::connect();
        $req = $connex->prepare($sql);
        $req->bindParam(":id", $id, PDO::PARAM_INT);
        $req->execute();
        $reponse = $connex->fetchOject();

        return $reponse;
    }

    //par nom

    public function getUtilisateurByNom($sql, $nom_utilisateurs)
    {
        $connex = Boite_Connexion::connect();
        $req = $connex->prepare($sql);
        $req->bindParam(":nom_utilisateurs", $nom_utilisateurs, PDO::PARAM_INT);
        $req->execute();
        $reponse = $connex->fetchOject();

        return $reponse;
    }









    /**
     * Get the value of id_utilisateurs
     */
    public function getId_utilisateurs()
    {
        return $this->id_utilisateurs;
    }

    /**
     * Set the value of id_utilisateurs
     *
     * @return  self
     */
    public function setId_utilisateurs($id_utilisateurs)
    {
        $this->id_utilisateurs = $id_utilisateurs;

        return $this;
    }

    /**
     * Get the value of nom_utilisateurs
     */
    public function getNom_utilisateurs()
    {
        return $this->nom_utilisateurs;
    }

    /**
     * Set the value of nom_utilisateurs
     *
     * @return  self
     */
    public function setNom_utilisateurs($nom_utilisateurs)
    {
        $this->nom_utilisateurs = $nom_utilisateurs;

        return $this;
    }

    /**
     * Get the value of prenom_utilisateurs
     */
    public function getPrenom_utilisateurs()
    {
        return $this->prenom_utilisateurs;
    }

    /**
     * Set the value of prenom_utilisateurs
     *
     * @return  self
     */
    public function setPrenom_utilisateurs($prenom_utilisateurs)
    {
        $this->prenom_utilisateurs = $prenom_utilisateurs;

        return $this;
    }

    /**
     * Get the value of telephone_utilisateurs
     */
    public function getTelephone_utilisateurs()
    {
        return $this->telephone_utilisateurs;
    }

    /**
     * Set the value of telephone_utilisateurs
     *
     * @return  self
     */
    public function setTelephone_utilisateurs($telephone_utilisateurs)
    {
        $this->telephone_utilisateurs = $telephone_utilisateurs;

        return $this;
    }

    /**
     * Get the value of email_utilisateurs
     */
    public function getEmail_utilisateurs()
    {
        return $this->email_utilisateurs;
    }

    /**
     * Set the value of email_utilisateurs
     *
     * @return  self
     */
    public function setEmail_utilisateurs($email_utilisateurs)
    {
        $this->email_utilisateurs = $email_utilisateurs;

        return $this;
    }

    /**
     * Get the value of passe_utilisateurs
     */
    public function getPasse_utilisateurs()
    {
        return $this->passe_utilisateurs;
    }

    /**
     * Set the value of passe_utilisateurs
     *
     * @return  self
     */
    public function setPasse_utilisateurs($passe_utilisateurs)
    {
        $this->passe_utilisateurs = $passe_utilisateurs;

        return $this;
    }

    /**
     * Get the value of actif_nonacti_utilisateur
     */
    public function getActif_nonacti_utilisateur()
    {
        return $this->actif_nonacti_utilisateur;
    }

    /**
     * Set the value of actif_nonacti_utilisateur
     *
     * @return  self
     */
    public function setActif_nonacti_utilisateur($actif_nonacti_utilisateur)
    {
        $this->actif_nonacti_utilisateur = $actif_nonacti_utilisateur;

        return $this;
    }

    /**
     * Get the value of Ville_user_id_Ville_user
     */
    public function getVille_user_id_Ville_user()
    {
        return $this->Ville_user_id_Ville_user;
    }

    /**
     * Set the value of Ville_user_id_Ville_user
     *
     * @return  self
     */
    public function setVille_user_id_Ville_user($Ville_user_id_Ville_user)
    {
        $this->Ville_user_id_Ville_user = $Ville_user_id_Ville_user;

        return $this;
    }

    /**
     * Get the value of type_user_id_type_user
     */
    public function getType_user_id_type_user()
    {
        return $this->type_user_id_type_user;
    }

    /**
     * Set the value of type_user_id_type_user
     *
     * @return  self
     */
    public function setType_user_id_type_user($type_user_id_type_user)
    {
        $this->type_user_id_type_user = $type_user_id_type_user;

        return $this;
    }

    /**
     * Get the value of carte_bleu_id_carte_bleu
     */
    public function getCarte_bleu_id_carte_bleu()
    {
        return $this->carte_bleu_id_carte_bleu;
    }

    /**
     * Set the value of carte_bleu_id_carte_bleu
     *
     * @return  self
     */
    public function setCarte_bleu_id_carte_bleu($carte_bleu_id_carte_bleu)
    {
        $this->carte_bleu_id_carte_bleu = $carte_bleu_id_carte_bleu;

        return $this;
    }
}
