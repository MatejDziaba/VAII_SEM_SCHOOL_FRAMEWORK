<?php

namespace App\Models;

use App\Core\Model;

class RegistrationBuyer extends Model
{
    protected $id_zakaznika_kupujuci;
    protected  $meno;
    protected  $priezvisko;
    protected  $heslo;
    protected  $PSC;
    protected  $email;

    /**
     * @return mixed
     */
    public function getIdZakaznikaKupujuci()
    {
        return $this->id_zakaznika_kupujuci;
    }

    /**
     * @param mixed $id_zakaznika_kupujuci
     */
    public function setIdZakaznikaKupujuci($id_zakaznika_kupujuci): void
    {
        $this->id_zakaznika_kupujuci = $id_zakaznika_kupujuci;
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
    public function getHeslo()
    {
        return $this->heslo;
    }

    /**
     * @param mixed $heslo
     */
    public function setHeslo($heslo): void
    {
        $this->heslo = $heslo;
    }

    /**
     * @return mixed
     */
    public function getPSC()
    {
        return $this->PSC;
    }

    /**
     * @param mixed $PSC
     */
    public function setPSC($PSC): void
    {
        $this->PSC = $PSC;
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