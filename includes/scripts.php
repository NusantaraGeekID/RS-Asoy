<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<?= (isset($page) && !empty($page) && in_array($page, $array) && !is_array($page)) ? '<script src="assets/js/main.js"></script>' : ''; ?>
<?= (isset($page) && !empty($page) && in_array($page, $array) && !is_array($page)) ? '<script src="assets/js/style.js" async></script>' : ''; ?>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js" charset="utf8"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta2/dist/js/bootstrap-select.min.js"></script>
<script>
    $('.select-dokter').selectpicker();
    $('.select-poliklinik').selectpicker();
</script>