<style>
    .modal-busy {
        position: fixed;
        z-index: 99999999;
        height: 100%;
        width: 100%;
        top: 0px;
        left: 0px;
        background-color: black;
        filter: alpha(opacity=70);
        opacity: .7;
        -moz-opacity: .9;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .center-busy {
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

    .center-busy img {
        width: 45%;
        height: auto;

    }
</style>
<div class="modal-busy" style="display: none" align="middle">
    <div class="center-busy">
        <img src="{{ asset('backend/assets/icon/circle_rotate.gif') }}" alt="">
    </div>
</div>
