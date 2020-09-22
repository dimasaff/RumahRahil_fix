</div>
<footer class="sticky-footer bg-primary <?= $fixedFooter; ?>">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span class="text-light">Copyright &copy; Private Coding 2020</span>
        </div>
    </div>
</footer>
<!-- Login Content -->
<script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/ruang-admin.min.js"></script>
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
    $(document).ready(function() {
        $('.custom-file-input').on('change', function() {
            let fileName = $(this).val().split('\\').pop();
            $(this).next('.custom-file-label').addClass("selected").html(fileName);
        });
        $('#role_id').on('change', function() {
            var jenjang = $('role_id').val();
            if (jenjang == 2) {
                $('#kelas_id').hide();
            }
            if (jenjang == 3) {
                $('#mapel_id').hide();
            }
        });
    });
</script>
</body>

</html>