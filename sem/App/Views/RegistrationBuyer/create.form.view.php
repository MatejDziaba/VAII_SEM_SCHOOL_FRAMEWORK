<?php
$layout = 'auth';
/** @var Array $data */
?>
<div class="container">
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
                <div class="card-body">
                    <h5 class="card-title text-center">Registrácia ako kupujúci</h5>
                    <div class="text-center text-danger mb-3">
                    </div>
                    <form class="form-signin" method="post" action="?c=z_registrovani_kupujuci&a=store">
                        <?php /** @var \App\Models\RegistrationBuyer $data */
                        if ($data->getIdZakaznikaKupujuci()) {
                            ?>
                            <input type="hidden" name="id_zakaznika_kupujuci" value="<?php echo $data->getIdZakaznikaKupujuci() ?>">
                        <?php } ?>
                        <div class="form-label-group mb-3">
                            <input name="meno" type="text" id="meno" class="form-control" placeholder="Meno"
                                   required autofocus>
                        </div>

                        <div class="form-label-group mb-3">
                            <input name="priezvisko" type="priezvisko" id="priezvisko" class="form-control"
                                   placeholder="Priezvisko" required>
                        </div>

                        <div class="form-label-group mb-3">
                            <input name="PSC" type="text" id="PSC" class="form-control" placeholder="PSC"
                                   required autofocus>
                        </div>

                        <div class="form-label-group mb-3">
                            <input name="email" type="email" id="email" class="form-control"
                                   placeholder="Email" required>
                        </div>

                        <div class="form-label-group mb-3">
                            <input name="heslo" type="heslo" id="heslo" class="form-control"
                                   placeholder="Heslo" required>
                        </div>
                        <div class="text-center">
                            <button class="btn btn-primary" type="submit" name="submit">Registrovať
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>