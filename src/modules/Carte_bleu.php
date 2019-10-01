<?php
class Carte_bleu{
    private $id_carte_bleu;
    private $numero_cb;
    private $nom_payeur_cb;
    private $date_validite_cb;
    private $actif_nonactif_cb;
    private $panier_id_panier_panier;
   
    public function __construct(
        int $id_carte_bleu,
        int $numero_cb,
        string $nom_payeur_cb,
        string $date_validite_cb,
        string $actif_nonactif_cb,
        int $panier_id_panier_panier)
{
    $this->id_carte_bleu = $id_carte_bleu;
    $this->numero_cb = $numero_cb;
    $this->nom_payeur_cb = $nom_payeur_cb;
    $this->date_validite_cb = $date_validite_cb;
    $this->actif_nonactif_cb = $actif_nonactif_cb;
    $this->panier_id_panier_panier = $panier_id_panier_panier;
   

}



    /**
     * Get the value of id_carte_bleu
     */ 
    public function getId_carte_bleu()
    {
        return $this->id_carte_bleu;
    }

    /**
     * Set the value of id_carte_bleu
     *
     * @return  self
     */ 
    public function setId_carte_bleu($id_carte_bleu)
    {
        $this->id_carte_bleu = $id_carte_bleu;

        return $this;
    }

    /**
     * Get the value of numero_cb
     */ 
    public function getNumero_cb()
    {
        return $this->numero_cb;
    }

    /**
     * Set the value of numero_cb
     *
     * @return  self
     */ 
    public function setNumero_cb($numero_cb)
    {
        $this->numero_cb = $numero_cb;

        return $this;
    }

    /**
     * Get the value of nom_payeur_cb
     */ 
    public function getNom_payeur_cb()
    {
        return $this->nom_payeur_cb;
    }

    /**
     * Set the value of nom_payeur_cb
     *
     * @return  self
     */ 
    public function setNom_payeur_cb($nom_payeur_cb)
    {
        $this->nom_payeur_cb = $nom_payeur_cb;

        return $this;
    }

    /**
     * Get the value of date_validite_cb
     */ 
    public function getDate_validite_cb()
    {
        return $this->date_validite_cb;
    }

    /**
     * Set the value of date_validite_cb
     *
     * @return  self
     */ 
    public function setDate_validite_cb($date_validite_cb)
    {
        $this->date_validite_cb = $date_validite_cb;

        return $this;
    }

    /**
     * Get the value of actif_nonactif_cb
     */ 
    public function getActif_nonactif_cb()
    {
        return $this->actif_nonactif_cb;
    }

    /**
     * Set the value of actif_nonactif_cb
     *
     * @return  self
     */ 
    public function setActif_nonactif_cb($actif_nonactif_cb)
    {
        $this->actif_nonactif_cb = $actif_nonactif_cb;

        return $this;
    }

    /**
     * Get the value of panier_id_panier_panier
     */ 
    public function getPanier_id_panier_panier()
    {
        return $this->panier_id_panier_panier;
    }

    /**
     * Set the value of panier_id_panier_panier
     *
     * @return  self
     */ 
    public function setPanier_id_panier_panier($panier_id_panier_panier)
    {
        $this->panier_id_panier_panier = $panier_id_panier_panier;

        return $this;
    }
}