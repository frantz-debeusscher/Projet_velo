<?php
require '../class/Boite_Connexion.php';
class Periode
{
    private $id_periode;
    private $type_periode;
    private $remise_periode;
    private $tarif_total_periode;

    public function __construct(
        int $id_periode,
        string $type_periode,
        int $remise_periode,
        int $tarif_total_periode
    ) {

        $this->id_periode = $id_periode;
        $this->type_periode = $type_periode;
        $this->remise_periode = $remise_periode;
        $this->tarif_total_periode = $tarif_total_periode;
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

    //par Id
    //public function getPeriodeById($sql, $id)
   // {
     //   $connex = Boite_Connexion::connect();
     //   $req = $connex->prepare($sql);
     //   $req->bindParam(":id", $id, PDO::PARAM_INT);
      //  $req->execute();
     //   $reponse = $connex->fetchOject();
        
      //  return $reponse;
    //}

    // par type
   // public function getPeriodeByPeriode($sql, $type_periode)
   // {
      //  $connex = Boite_Connexion::connect();
      //  $req = $connex->prepare($sql);
      //  $req->bindParam(":type_periode", $type_periode, PDO::PARAM_INT);
      //  $req->execute();
      //  $reponse = $connex->fetchOject();
        
     //   return $reponse;
   // }

    // par remise periode
   // public function getPeriodeByRemise($sql, $remise_periode)
   // {
       // $connex = Boite_Connexion::connect();
       // $req = $connex->prepare($sql);
       // $req->bindParam(":type_periode", $remise_periode, PDO::PARAM_INT);
       // $req->execute();
       // $reponse = $connex->fetchOject();
        // fetch(PDO::FetchObject);
       // return $reponse;
   // }



    /**
     * Get the value of id_periode
     */
    public function getId_periode()
    {
        return $this->id_periode;
    }

    /**
     * Set the value of id_periode
     *
     * @return  self
     */
    public function setId_periode($id_periode)
    {
        $this->id_periode = $id_periode;

        return $this;
    }

    /**
     * Get the value of type_periode
     */
    public function getType_periode()
    {
        return $this->type_periode;
    }

    /**
     * Set the value of type_periode
     *
     * @return  self
     */
    public function setType_periode($type_periode)
    {
        $this->type_periode = $type_periode;

        return $this;
    }

    /**
     * Get the value of remise_periode
     */
    public function getRemise_periode()
    {
        return $this->remise_periode;
    }

    /**
     * Set the value of remise_periode
     *
     * @return  self
     */
    public function setRemise_periode($remise_periode)
    {
        $this->remise_periode = $remise_periode;

        return $this;
    }

    /**
     * Get the value of tarif_total_periode
     */
    public function getTarif_total_periode()
    {
        return $this->tarif_total_periode;
    }

    /**
     * Set the value of tarif_total_periode
     *
     * @return  self
     */
    public function setTarif_total_periode($tarif_total_periode)
    {
        $this->tarif_total_periode = $tarif_total_periode;

        return $this;
    }
}
