<main class="main-content main-content-bg mt-0">
    <div class="page-header min-vh-100">
        <span class="mask bg-gradient-dark opacity-6"></span>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-7">
                    <div class="card border-0 mb-0">
                        <div class="card-header bg-transparent">
                            <h5 class="text-dark text-center mt-2 mb-3 icon-system-green">
                                <img src="./assets/img/logos/logo-minedu.png" alt="" srcset="">
                            </h5>
                        </div>
                        <div class="card-body px-lg-5 pt-0">
                            <form role="form" class="text-start" id="form-login" name="form-login">

                                <div class="mb-3">
                                    <label>NRO. DNI</label>
                                    <input type="text" id="cod_mod" name="cod_mod" class="form-control"
                                        placeholder="DNI" aria-label="codigo modular" maxlength="8">
                                </div>

                                <div class="text-center">
                                    <button id="btn-login" type="button" class="btn btn-primary w-100 my-4 mb-2" onclick="user().set_login()"><i
                                            class="fa-duotone fa-key"></i> Acceder</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>