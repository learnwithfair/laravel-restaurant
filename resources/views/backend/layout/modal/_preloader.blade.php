<style>
    .preloader-busy {
        position: fixed;
        z-index: 99999999;
        height: 100%;
        width: 100%;
        /* height: 100vh; */
        top: 0px;
        left: 0px;
        background-color: black;
        filter: alpha(opacity=90);
        opacity: .9;
        -moz-opacity: .9;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .preloader-center {
        z-index: 999999999;
        margin: 0px auto;
        padding: 0px;
        width: 20%;
        max-width: 130px;
        /* width: 130px; */
        height: auto;
        filter: alpha(opacity=100);
        opacity: 1;
        -moz-opacity: 1;
        display: flex;
        justify-content: center;
    }

    .preloader-center img {
        width: 45%;
        height: auto;

    }
</style>
<div class="preloader-busy" align="middle" id="preloader-busy">
    <div class="preloader-center">
        <img src="{{ asset('backend/assets/icon/loaded-spinner.gif') }}" alt="">
    </div>
</div>
<script>
    var preloader = document.getElementById("preloader-busy");

    function preloaderFunction() {
        preloader.style.display = 'none';
    };
</script>
