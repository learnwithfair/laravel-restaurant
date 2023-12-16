<script>
    $(document).ready(function() {



        // Slider Details section start
        // $(document).on('click', '.login_btn', function(e) {
        $('.login_btn').on('submit', function(e) {
            e.preventDefault();
            spinner = loadedModal('Loading');
            $('#login_btn_id').html(spinner);
            console.log(1);
        });
        // Slider Details section end
    });
</script>
