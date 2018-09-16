
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<?php if ($this->session->flashdata('aboneEmailMesajı')): ?>
            <script>
                swal({
                    title: "<?php echo $this->session->flashdata('aboneEmailMesajı'); ?>",
                    timer: 3500,
                    showConfirmButton: false,
                });
            </script>
<?php endif; ?>