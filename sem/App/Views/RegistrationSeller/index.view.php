<?php
$layout = 'auth';
/** @var Array $data */
?>
<div class="container">
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
                <div class="card-body">
                    <h5 class="card-title text-center">Registrácia ako predavajúci</h5>
                    <div class="text-center text-danger mb-3">
                    </div>
                    <form class="form-signin" method="post" action="?c=z_registrovani_predavajuci&a=store">
                        <?php /** @var \App\Models\RegistrationSeller $data */
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
                            <input name="nazov_spolocnosti" type="text" id="nazov_spolocnosti" class="form-control" placeholder="nazov_spolocnosti"
                                   required autofocus>
                        </div>

                        <div class="form-label-group mb-3">
                            <input name="id_typ" type="id_typ" id="id_typ" class="form-control"
                                   placeholder="id_typ" required>
                        </div>

                        <div class="form-label-group mb-3">
                            <input name="ICO" type="ICO" id="ICO" class="form-control"
                                   placeholder="ICO" required>
                        </div>

                        <div class="form-label-group mb-3">
                            <input name="DIC" type="DIC" id="DIC" class="form-control"
                                   placeholder="DIC" required>
                        </div>

                        <div class="form-label-group mb-3">
                            <input name="DIC_DPH" type="DIC_DPH" id="DIC_DPH" class="form-control"
                                   placeholder="DIC_DPH" required>
                        </div>

                        <div class="form-label-group mb-3">
                            <input name="email" type="email" id="email" class="form-control"
                                   placeholder="Email" required>
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

