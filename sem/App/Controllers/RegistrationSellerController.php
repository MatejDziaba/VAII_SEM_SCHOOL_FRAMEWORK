<?php

namespace App\Controllers;

use App\Models\RegistrationSeller;


/** @var RegistrationSeller[] $data */
class RegistrationSellerController
{
    public function index(): Response
    {
        return $this->redirect("?c=registrationseller&a=create");
    }

    public function create()
    {
        return $this->html(new RegistrationSeller(), viewName: 'create.form');
    }

    public function store()
    {
        $id = $this->request()->getValue('id');

        $registration = ( $id ? RegistrationSeller::getOne($id) : new RegistrationSeller());
        $registration->setMeno($this->request()->getValue('meno'));
        $registration->setPriezvisko($this->request()->getValue('priezvisko'));
        $registration->setNazovSpolocnosti($this->request()->getValue('nazov_spolocnosti'));
        $registration->setIdTyp($this->request()->getValue('id_typ'));
        $registration->setICO($this->request()->getValue('ICO'));
        $registration->setDIC($this->request()->getValue('DIC'));
        $registration->setDICDPH($this->request()->getValue('DIC_DPH'));
        $registration->setEmail($this->request()->getValue('email'));
        $registration->save();
        return $this->redirect("?c=home");
    }
}