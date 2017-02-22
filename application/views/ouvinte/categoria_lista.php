<?php
$this->load->view('ouvinte/fixed_files/header');
?>
    <script>
        window.onload = function () {
            ResquestPage('<?php echo base_url($page.'/'.$cts);?>',<?php echo $version;?>);
        }
    </script>



    <section id="content">

        <section class="vbox">
            <section class="scrollable padder-lg w-f-md" style="padding: 0;z-index: 0;" id="bjax-target">






            </section>
            <span id="loading"></span>
<?php
$this->load->view('ouvinte/fixed_files/footer');
?>