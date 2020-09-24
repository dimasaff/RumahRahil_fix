<!-- Modal Logout -->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabelLogout">Logout</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Apakah anda yakin ingin Logout?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                <a href="<?= base_url('Login/logout'); ?>" class="btn btn-primary">Logout</a>
            </div>
        </div>
    </div>
</div>

</div>
<!---Container Fluid-->
</div>
<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>copyright &copy; <script>
                    document.write(new Date().getFullYear());
                </script> - developed by
                <b><a>Private Coding</a></b>
            </span>
        </div>
    </div>
</footer>
<!-- Footer -->
</div>
</div>

<!-- Scroll to top -->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<script src="<?= base_url('asset/'); ?>vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('asset/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url('asset/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="<?= base_url('asset/'); ?>js/ruang-admin.min.js"></script>

<script>
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();

    function actionTemaSD() {
        let a = document.getElementById('sortKelas').value;
        tema(a);
    }

    function actionSubTemaSD() {
        let a = document.getElementById('sortTema').value;
        subtema(a);
    }

    function actionMapel() {
        let a = document.getElementById('sortKelas').value;
        mapel(a);
    }


    function actionPaketSD() {
        let a = document.getElementById('sortSubtema').value;
        paket(a);
    }
<<<<<<< HEAD

=======
>>>>>>> 147085972f0dbc720934e21e70604fefc804aa2b
    function actionBab() {
        let a = document.getElementById('sortJurusan').value;
        bab(a);

    }

    function tema(a) {
        var xhttp;
        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("tabeltema").innerHTML = this.responseText;
            }
        };
        xhttp.open("POST", "<?= base_url('tema/tableTema/'); ?>" + a, true);
        xhttp.send();
    }

    function subtema(a) {
        var xhttp;
        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("tabelsubtema").innerHTML = this.responseText;
            }
        };
        xhttp.open("POST", "<?= base_url('subtema/tableSubtema/'); ?>" + a, true);
        xhttp.send();
    }

    function mapel(a) {
        var xhttp;
        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("tabelmapel").innerHTML = this.responseText;
            }
        };
        xhttp.open("POST", "<?= base_url('mapel/tableMapel/'); ?>" + a, true);
        xhttp.send();
    }


    function paket(a) {
        var xhttp;
        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("tabelpaketsd").innerHTML = this.responseText;
            }
        };
        xhttp.open("POST", "<?= base_url('PaketSoalSd/tablePaketsd/'); ?>" + a, true);
<<<<<<< HEAD
        xhttp.send();
    }

    function bab(a) {
        var xhttp;
        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("tabelbab").innerHTML = this.responseText;
            }
        };
        xhttp.open("POST", "<?= base_url('bab/tableBab/'); ?>" + a, true);
=======
>>>>>>> 147085972f0dbc720934e21e70604fefc804aa2b
        xhttp.send();
    }
    function bab(a) {
       var xhttp;
       xhttp = new XMLHttpRequest();
       xhttp.onreadystatechange = function() {
           if (this.readyState == 4 && this.status == 200) {
               document.getElementById("tabelbab").innerHTML = this.responseText;
           }
       };
       xhttp.open("POST", "<?= base_url('bab/tableBab/'); ?>" + a, true);
       xhttp.send();
    }
</script>

</body>

</html>