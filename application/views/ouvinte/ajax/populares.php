<script>

    window.history.pushState("", "", "<?php echo base_url('populares')?>");

</script>
<section class="scrollable padder-lg w-f-md" id="bjax-target">
    <a href="#" class="pull-right text-muted m-t-lg" data-toggle="class:fa-spin"><i  class="icon-refresh i-lg  inline" id="refresh"></i></a>
    <h2 class="font-thin m-b">Populares no Momento <span class="musicbar inline m-l-sm" style="width:20px;height:20px">
                    <span class="bar1 a1 bg-primary lter"></span>
                    <span class="bar2 a2 bg-info lt"></span>
                    <span class="bar3 a3 bg-success"></span>
                    <span class="bar4 a4 bg-warning dk"></span>
                    <span class="bar5 a5 bg-danger dker"></span>
                  </span></h2>
    <div class="row row-sm">

        <?php
        for($i=0;$i<40;$i++):
            ?>
            <div class="col-xs-5 col-sm-2 col-md-3 col-lg-3">
                <div class="item">
                    <div class="pos-rlt">
                        <div class="bottom">
                            <span class="badge bg-info m-l-sm m-b-sm">03:20</span>
                        </div>
                        <div class="item-overlay opacity r r-2x bg-black">
                            <div class="text-info padder m-t-sm text-sm">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o text-muted"></i>
                            </div>
                            <div class="center text-center m-t-n">
                                <a href="<?php echo base_url('ouvir/nerdcast-rpg-o-corvo-a-dama-e-a-piriguete/154');?>"><i class="icon-control-play i-2x"></i></a>
                            </div>
                            <div class="bottom padder m-b-sm">
                                <a href="#" class="pull-right">
                                    <i class="fa fa-heart-o"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-plus-circle"></i>
                                </a>
                            </div>
                        </div>
                        <a href="#"><img src="<?php echo base_url('assets/templates/ouvinte/'.$_POST['version'].'/');?>images/p1.jpg" alt="" class="r r-2x img-full"></a>
                    </div>
                    <div class="padder-v">
                        <a href="<?php echo base_url('ouvir/nerdcast-rpg-o-corvo-a-dama-e-a-piriguete/154');?>"class="text-ellipsis">Tempered Song</a>
                        <a id="channelLink" onclick=" ResquestPage('<?php echo base_url('ch/');?>nerdcast',<?php echo $_POST['version'];?>); return false;" href="<?php echo base_url('channel');?>" class="text-ellipsis text-xs text-muted">Miaow</a>
                    </div>
                </div>
            </div>
        <?php endfor;?>



    </div>
    <nav aria-label="Page navigation">
        <ul class="pager">

            <li><a id="feedmore">Carragar Mais</a></li>

        </ul>
    </nav>
</section>

