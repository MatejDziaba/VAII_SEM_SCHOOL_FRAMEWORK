<?php

namespace App\Controllers;

use App\Core\AControllerBase;
use App\Core\Responses\Response;
use App\Models\RegistrationBuyer;

/** @var RegistrationBuyer[] $data */

class RegistrationBuyerController extends AControllerBase
{

    public function index(): Response
    {
        return $this->redirect("?c=registrationbuyer&a=create");
    }

    public function create()
    {
        return $this->html(new RegistrationBuyer(), viewName: 'create.form');
    }

    public function store()
    {
        $id = $this->request()->getValue('id');

        $registration = ( $id ? RegistrationBuyer::getOne($id) : new RegistrationBuyer());
        $registration->setMeno($this->request()->getValue('meno'));
        $registration->setPriezvisko($this->request()->getValue('priezvisko'));
        $registration->setHeslo($this->request()->getValue('heslo'));
        $registration->setPSC($this->request()->getValue('PSC'));
        $registration->setEmail($this->request()->getValue('email'));
        $registration->save();
        return $this->redirect("?c=home");
    }
}