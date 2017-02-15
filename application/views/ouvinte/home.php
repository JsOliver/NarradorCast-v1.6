<?php
$this->load->view('ouvinte/fixed_files/header');
?>
    <script>
        window.onload = function () {
            ResquestPage('<?php echo $page;?>',<?php echo $version;?>);
        }
    </script>

<style>

    #custom_carousel .item {

        color:#000;
        background-color:#eee;
        padding:20px 0;
    }
    #custom_carousel .controls{
        overflow-x: auto;
        overflow-y: hidden;
        padding:0;
        margin:0;
        white-space: nowrap;
        text-align: center;
        position: relative;
        background:#ddd
    }
    #custom_carousel .controls li {
        display: table-cell;
        width: 1%;
        max-width:90px
    }
    #custom_carousel .controls li.active {
        background-color:#eee;
        border-top:3px solid orange;
    }
    #custom_carousel .controls a small {
        overflow:hidden;
        display:block;
        font-size:10px;
        margin-top:5px;
        font-weight:bold
    }
</style>

            <section id="content">

                        <section class="vbox">
                            <section class="scrollable padder-lg w-f-md" style="padding: 0;z-index: 0;" id="bjax-target">






                            </section>
                            <span id="loading"></span>
<?php
$this->load->view('ouvinte/fixed_files/footer');
?>