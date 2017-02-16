<script>

    window.history.pushState("", "", "<?php echo base_url('plataform')?>");

</script>
<div class="">
    <div id="custom_carousel" class="carousel slide" data-ride="carousel" data-interval="2500">
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-3"><img src="http://placehold.it/350x250" class="img-responsive"></div>
                        <div class="col-md-9">
                            <h2>Slide 1</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, labore, magni illum nemo ipsum quod voluptates ab natus nulla possimus incidunt aut neque quaerat mollitia perspiciatis assumenda asperiores consequatur soluta.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, labore, magni illum nemo ipsum quod voluptates ab natus nulla possimus incidunt aut neque quaerat mollitia perspiciatis assumenda asperiores consequatur soluta.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-3"><img src="http://placehold.it/350x250" class="img-responsive"></div>
                        <div class="col-md-9">
                            <h2>Slide 2</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, labore, magni illum nemo ipsum quod voluptates ab natus nulla possimus incidunt aut neque quaerat mollitia perspiciatis assumenda asperiores consequatur soluta.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, labore, magni illum nemo ipsum quod voluptates ab natus nulla possimus incidunt aut neque quaerat mollitia perspiciatis assumenda asperiores consequatur soluta.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-3"><img src="http://placehold.it/350x250" class="img-responsive"></div>
                        <div class="col-md-9">
                            <h2>Slide 4</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, labore, magni illum nemo ipsum quod voluptates ab natus nulla possimus incidunt aut neque quaerat mollitia perspiciatis assumenda asperiores consequatur soluta.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, labore, magni illum nemo ipsum quod voluptates ab natus nulla possimus incidunt aut neque quaerat mollitia perspiciatis assumenda asperiores consequatur soluta.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-3"><img src="http://placehold.it/350x250" class="img-responsive"></div>
                        <div class="col-md-9">
                            <h2>Slide 3</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, labore, magni illum nemo ipsum quod voluptates ab natus nulla possimus incidunt aut neque quaerat mollitia perspiciatis assumenda asperiores consequatur soluta.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, labore, magni illum nemo ipsum quod voluptates ab natus nulla possimus incidunt aut neque quaerat mollitia perspiciatis assumenda asperiores consequatur soluta.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Item -->
        </div>
        <!-- End Carousel Inner -->
        <div class="controls">
            <ul class="nav">
                <li data-target="#custom_carousel" data-slide-to="0" class="active"><a href="#"><img src="http://placehold.it/50x50"><small>Slide One</small></a></li>
                <li data-target="#custom_carousel" data-slide-to="1"><a href="#"><img src="http://placehold.it/50x50"><small>Slide Two</small></a></li>
                <li data-target="#custom_carousel" data-slide-to="2"><a href="#"><img src="http://placehold.it/50x50"><small>Slide Three</small></a></li>
                <li data-target="#custom_carousel" data-slide-to="3"><a href="#"><img src="http://placehold.it/50x50"><small>Slide Four</small></a></li>
            </ul>
        </div>
    </div>
    <!-- End Carousel -->
</div>
<div style="padding: 4%;">
<div class="row">
    <div class="col-md-7">
        <h3 class="font-thin">New Songs</h3>
        <div class="row row-sm">

            <?php for($i=0;$i<8;$i++):?>
                <div class="col-xs-6 col-sm-3">
                    <div class="item">
                        <div class="pos-rlt">
                            <div class="item-overlay opacity r r-2x bg-black">
                                <div class="center text-center m-t-n">
                                    <a id="channelLink"  onclick=" ResquestPage('<?php echo base_url('ch/');?>channel',<?php echo $_POST['version'];?>); return false;" href="<?php echo base_url('@channel');?>"><i class="fa fa-play-circle i-2x"></i></a>
                                </div>
                            </div>
                            <a id="channelLink" onclick=" ResquestPage('<?php echo base_url('ch/');?>channel',<?php echo $_POST['version'];?>); return false;" href="<?php echo base_url('@channel');?>"><img src="<?php echo base_url('assets/templates/ouvinte/'.$_POST['version'].'/');?>images/a2.png" alt="" class="r r-2x img-full"></a>
                        </div>
                        <div class="padder-v">
                            <a id="channelLink" onclick=" ResquestPage('<?php echo base_url('ch/');?>channel',<?php echo $_POST['version'];?>);return false; " href="<?php echo base_url('@channel');?>" class="text-ellipsis">Spring rain</a>
                            <a id="channelLink" onclick=" ResquestPage('<?php echo base_url('ch/');?>channel',<?php echo $_POST['version'];?>); return false;" href="<?php echo base_url('@channel');?>" class="text-ellipsis text-xs text-muted">Miaow</a>
                        </div>
                    </div>
                </div>
            <?php endfor;?>

        </div>
    </div>
    <div class="col-md-5">
        <h3 class="font-thin">Top Songs</h3>
        <div class="list-group bg-white list-group-lg no-bg auto">

            <?php for($i=0;$i<5;$i++):?>

                <a onclick=" ResquestPage('<?php echo base_url('ch/');?>nerdcast',<?php echo $_POST['version'];?>); return false;" href="<?php echo base_url('channel');?>" class="list-group-item clearfix">
                    <span class="pull-right h2 text-muted m-l">1</span>
                    <span class="pull-left thumb-sm avatar m-r">
                            <img src="<?php echo base_url('assets/templates/ouvinte/'.$_POST['version'].'/');?>images/a4.png" alt="...">
                          </span>
                    <span class="clear">
                            <span>Little Town</span>
                            <small class="text-muted clear text-ellipsis">by Chris Fox</small>
                          </span>
                </a>
            <?php endfor;?>


        </div>
    </div>
</div>

</div>
<script>
    $(document).ready(function(ev){
        $('#custom_carousel').on('slide.bs.carousel', function (evt) {
            $('#custom_carousel .controls li.active').removeClass('active');
            $('#custom_carousel .controls li:eq('+$(evt.relatedTarget).index()+')').addClass('active');
        })
    });
    window.onload = function(){
        document.getElementById('channelLink').onclick = function(){ return false; }
    }
</script>