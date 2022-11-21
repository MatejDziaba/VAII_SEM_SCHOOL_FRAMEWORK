<?php

namespace App\Models;

use App\Core\Model;

class RegistrationSeller extends Model
{
    protected $id_zakaznika_predavajuci;
    protected $meno;
    protected $priezvisko;
    protected $nazov_spolocnosti;
    protected $id_typ;
    protected $ICO;
    protected $DIC;
    protected $DIC_DPH;
    protected $email;

    /**
     * @return mixed
     */
    public function getIdZakaznikaPredavajuci()
    {
        return $this->id_zakaznika_predavajuci;
    }

    /**
     * @param mixed $id_zakaznika_predavajuci
     */
    public function setIdZakaznikaPredavajuci($id_zakaznika_predavajuci): void
    {
        $this->id_zakaznika_predavajuci = $id_zakaznika_predavajuci;
    }

    /**
     * @return mixed
     */
    public function getMeno()
    {
        return $this->meno;
    }

    /**
     * @param mixed $meno
     */
    public function setMeno($meno): void
    {
        $this->meno = $meno;
    }

    /**
     * @return mixed
     */
    public function getPriezvisko()
    {
        return $this->priezvisko;
    }

    /**
     * @param mixed $priezvisko
     */
    public function setPriezvisko($priezvisko): void
    {
        $this->priezvisko = $priezvisko;
    }

    /**
     * @return mixed
     */
    public function getNazovSpolocnosti()
    {
        return $this->nazov_spolocnosti;
    }

    /**
     * @param mixed $nazov_spolocnosti
     */
    public function setNazovSpolocnosti($nazov_spolocnosti): void
    {
        $this->nazov_spolocnosti = $nazov_spolocnosti;
    }

    /**
     * @return mixed
     */
    public function getIdTyp()
    {
        return $this->id_typ;
    }

    /**
     * @param mixed $id_typ
     */
    public function setIdTyp($id_typ): void
    {
        $this->id_typ = $id_typ;
    }

    /**
     * @return mixed
     */
    public function getICO()
    {
        return $this->ICO;
    }

    /**
     * @param mixed $ICO
     */
    public function setICO($ICO): void
    {
        $this->ICO = $ICO;
    }

    /**
     * @return mixed
     */
    public function getDIC()
    {
        return $this->DIC;
    }

    /**
     * @param mixed $DIC
     */
    public function setDIC($DIC): void
    {
        $this->DIC = $DIC;
    }

    /**
     * @return mixed
     */
    public function getDICDPH()
    {
        return $this->DIC_DPH;
    }

    /**
     * @param mixed $DIC_DPH
     */
    public function setDICDPH($DIC_DPH): void
    {
        $this->DIC_DPH = $DIC_DPH;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }


}