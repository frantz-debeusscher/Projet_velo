<?php
require '../class/Boite_Connexion.php';
class Stock{
    private $id_stock;
    private $ville_stock;
    private $mecanique_stock;
    private $electrique_stock;
    private $date_entree_stock;
    private $date_sortie_stock;
    private $mecha_sortie;
    private $electri_sortie;

    public function __construct(

        int $id_stock,
        string $ville_stock,
        int $mecanique_stock,
        int $electrique_stock,
        int $date_entree_stock,
        int $date_sortie_stock,
        int $mecha_sortie,
        int $electri_sortie
    )
    {
        $this->id_stock = $id_stock;
        $this->ville_stock = $ville_stock;
        $this->mecanique_stock = $mecanique_stock;
        $this->electrique_stock = $electrique_stock;
        $this->date_entree_stock = $date_entree_stock;
        $this->date_sortie_stock = $date_sortie_stock;
        $this->mecha_sortie = $mecha_sortie;
        $this->electri_sortie = $electri_sortie;

    }

// function fonctionne uniquement avec la requete SELECT * FROM table
    //toute la table
    public function getAllStock($sql)
    {
        $connex = Boite_Connexion::getDB();
        $req = $connex->prepare($sql);
        $req->execute();
        $reponse = $connex->fetchOject();
        return $reponse;
    }

    /**
     * Get the value of id_stock
     */ 
    public function getId_stock()
    {
        return $this->id_stock;
    }

    /**
     * Set the value of id_stock
     *
     * @return  self
     */ 
    public function setId_stock($id_stock)
    {
        $this->id_stock = $id_stock;

        return $this;
    }

    /**
     * Get the value of ville_stock
     */ 
    public function getVille_stock()
    {
        return $this->ville_stock;
    }

    /**
     * Set the value of ville_stock
     *
     * @return  self
     */ 
    public function setVille_stock($ville_stock)
    {
        $this->ville_stock = $ville_stock;

        return $this;
    }

    /**
     * Get the value of mecanique_stock
     */ 
    public function getMecanique_stock()
    {
        return $this->mecanique_stock;
    }

    /**
     * Get the value of electrique_stock
     */ 
    public function getElectrique_stock()
    {
        return $this->electrique_stock;
    }

    /**
     * Set the value of electrique_stock
     *
     * @return  self
     */ 
    public function setElectrique_stock($electrique_stock)
    {
        $this->electrique_stock = $electrique_stock;

        return $this;
    }

        /**
         * Get the value of date_entree_stock
         */ 
        public function getDate_entree_stock()
        {
                return $this->date_entree_stock;
        }

        /**
         * Set the value of date_entree_stock
         *
         * @return  self
         */ 
        public function setDate_entree_stock($date_entree_stock)
        {
                $this->date_entree_stock = $date_entree_stock;

                return $this;
        }

    /**
     * Get the value of date_sortie_stock
     */ 
    public function getDate_sortie_stock()
    {
        return $this->date_sortie_stock;
    }

    /**
     * Set the value of date_sortie_stock
     *
     * @return  self
     */ 
    public function setDate_sortie_stock($date_sortie_stock)
    {
        $this->date_sortie_stock = $date_sortie_stock;

        return $this;
    }

        /**
         * Get the value of mecha_sortie
         */ 
        public function getMecha_sortie()
        {
                return $this->mecha_sortie;
        }

        /**
         * Set the value of mecha_sortie
         *
         * @return  self
         */ 
        public function setMecha_sortie($mecha_sortie)
        {
                $this->mecha_sortie = $mecha_sortie;

                return $this;
        }

    /**
     * Get the value of electri_sortie
     */ 
    public function getElectri_sortie()
    {
        return $this->electri_sortie;
    }

    /**
     * Set the value of electri_sortie
     *
     * @return  self
     */ 
    public function setElectri_sortie($electri_sortie)
    {
        $this->electri_sortie = $electri_sortie;

        return $this;
    }
}