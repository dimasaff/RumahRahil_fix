<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <div class="card mb-3 col-lg">
            <div class="row no-gutters">
                <div class="col-md-12">
                    <div class="card-body">
                        <h1 class="text-center">Kunci Jawaban Soal</h1>
                        <div class="col-lg">
                            <?= $this->session->flashdata('message'); ?>
                        </div>
                        <a href="" class="btn btn-primary" data-toggle="modal" data-target="#createModal">Tambah data</a>
                        <span>
                            <div class="col-md-5 mt-2 mb-2">
                                <select id="sortPaketSd" class="form-control" name="sortPaketSd" required onchange="">
                                    <option selected value="all">Tampilkan Semua</option>..</option>
                                    <?php foreach ($paket as $t) : ?>
                                        <option value="<?= $t['id_paket_latihan_sd']; ?>"><?= $t['nama_paket_sd']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </span>
                        <table class="table table-hover">
                            <thead class="bg-primary text-light">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Paket Soal</th>
                                    <th scope="col">Nomer Soal</th>
                                    <th scope="col">Jawaban Benar</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody id="tabelpaketsd">

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="createModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="createModalLabel">Kunci Jawaban</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="needs-validation" method="POST" action="<?= base_url('KunciJawabanSD'); ?>" novalidate>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="inputKelas">Pilih Paket Soal</label>
                            <select id="inputKelas" class="form-control" name="nama_paket_sd" required>
                                <option selected value="">Pilih..</option>
                                <?php foreach ($paket as $t) : ?>
                                    <option value="<?= $t['id_paket_latihan_sd']; ?>"><?= $t['nama_paket_sd']; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <div class="invalid-feedback">
                                Tolong Pilih Salah Satu Tema
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputNameTheme">Jawaban Benar</label>
                            <input type="text" class="form-control" id="exampleInputSubNameTheme" placeholder="Masukkan Nama SubTema" name="paket_soal" required>
                            <div class="invalid-feedback">
                                Data Tidak Boleh Kosong
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>