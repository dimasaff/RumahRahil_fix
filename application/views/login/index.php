<div class="row justify-content-center">
    <div class="col-xl-10 col-lg-12 col-md-9">
        <div class="card shadow-sm my-5">
            <div class="card-body p-0">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="login-form">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Login</h1>
                            </div>
                            <form class="user" method="POST" action="<?= base_url('Login'); ?>">
                                <div class="form-group">
                                    <input type="email" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Alamat Email" required>
                                    <div class="invalid-feedback">
                                        Data Tidak Boleh Kosong
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" id="exampleInputPassword" placeholder="Password" required>
                                    <div class="invalid-feedback">
                                        Data Tidak Boleh Kosong
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-block">Login</button>
                                </div>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="font-weight-bold small" href="<?= base_url('login/registrasi'); ?>">Registrasi</a>
                            </div>
                            <div class="text-center">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>