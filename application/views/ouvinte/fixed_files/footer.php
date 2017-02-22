</div>

<style>

    .chat-window {
        position: fixed;
        float: right;
        bottom: -20px;
        margin-left: 10px;
    }

    .chat-window > div > .panel {
        border-radius: 5px 5px 0 0;
    }

    .icon_minim {
        padding: 2px 10px;
    }

    .msg_container_base {
        background: #e5e5e5;
        margin: 0;
        padding: 0 10px 10px;
        max-height: 300px;
        overflow-x: hidden;
    }

    .top-bar {
        background: #666;
        color: white;
        padding: 10px;
        position: relative;
        overflow: hidden;
    }

    .msg_receive {
        padding-left: 0;
        margin-left: 0;
    }

    .msg_sent {
        padding-bottom: 20px !important;
        margin-right: 0;
    }

    .messages {
        background: white;
        padding: 10px;
        border-radius: 2px;
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
        max-width: 100%;
    }

    .messages > p {
        font-size: 13px;
        margin: 0 0 0.2rem 0;
    }

    .messages > time {
        font-size: 11px;
        color: #ccc;
    }

    .msg_container {
        padding: 10px;
        overflow: hidden;
        display: flex;
    }

    .avatar {
        position: relative;
    }

    .base_receive > .avatar:after {
        content: "";
        position: absolute;
        top: 0;
        right: 0;
        width: 0;
        height: 0;
        border: 5px solid #FFF;
        border-left-color: rgba(0, 0, 0, 0);
        border-bottom-color: rgba(0, 0, 0, 0);
    }

    .base_sent {
        justify-content: flex-end;
        align-items: flex-end;
    }

    .base_sent > .avatar:after {
        content: "";
        position: absolute;
        bottom: 0;
        left: 0;
        width: 0;
        height: 0;
        border: 5px solid white;
        border-right-color: transparent;
        border-top-color: transparent;
        box-shadow: 1px 1px 2px rgba(black, 0.2);
    / / not quite perfect but close
    }

    .msg_sent > time {
        float: right;
    }

    .msg_container_base::-webkit-scrollbar-track {
        -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
        background-color: #F5F5F5;
    }

    .msg_container_base::-webkit-scrollbar {
        width: 12px;
        background-color: #F5F5F5;
    }

    .msg_container_base::-webkit-scrollbar-thumb {
        -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, .3);
        background-color: #555;
    }

    .btn-group.dropup {
        position: fixed;
        left: 0px;
        bottom: 0;
    }
</style>
<footer class="footer bg-dark" style="z-index: 0;">

    <div id="jp_container_N">
        <div class="jp-type-playlist">
            <div id="jplayer_N" class="jp-jplayer hide"></div>
            <div class="jp-gui">
                <div class="jp-video-play hide">
                    <a class="jp-video-play-icon">play</a>
                </div>
                <div class="jp-interface">
                    <div class="jp-controls">
                        <div><a class="jp-previous"><i class="icon-control-rewind i-lg"></i></a></div>
                        <div>
                            <a class="jp-play"><i class="icon-control-play i-2x"></i></a>
                            <a class="jp-pause hid"><i class="icon-control-pause i-2x"></i></a>
                        </div>
                        <div><a class="jp-next"><i class="icon-control-forward i-lg"></i></a></div>
                        <div class="hide"><a class="jp-stop"><i class="fa fa-stop"></i></a></div>
                        <div><a class="" data-toggle="dropdown" data-target="#playlist"><i class="icon-list"></i></a>
                        </div>
                        <div class="jp-progress hidden-xs">
                            <div class="jp-seek-bar dk">
                                <div class="jp-play-bar bg-info">
                                </div>
                                <div class="jp-title text-lt">
                                    <ul>
                                        <li></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="hidden-xs hidden-sm jp-current-time text-xs text-muted"></div>
                        <div class="hidden-xs hidden-sm jp-duration text-xs text-muted"></div>
                        <div class="hidden-xs hidden-sm">
                            <a class="jp-mute" title="mute"><i class="icon-volume-2"></i></a>
                            <a class="jp-unmute hid" title="unmute"><i class="icon-volume-off"></i></a>
                        </div>
                        <div class="hidden-xs hidden-sm jp-volume">
                            <div class="jp-volume-bar dk">
                                <div class="jp-volume-bar-value lter"></div>
                            </div>
                        </div>
                        <div>
                            <a class="jp-shuffle" title="shuffle"><i class="icon-shuffle text-muted"></i></a>
                            <a class="jp-shuffle-off hid" title="shuffle off"><i class="icon-shuffle text-lt"></i></a>
                        </div>
                        <div>
                            <a class="jp-repeat" title="repeat"><i class="icon-loop text-muted"></i></a>
                            <a class="jp-repeat-off hid" title="repeat off"><i class="icon-loop text-lt"></i></a>
                        </div>
                        <div class="hide">
                            <a class="jp-full-screen" title="full screen"><i class="fa fa-expand"></i></a>
                            <a class="jp-restore-screen" title="restore screen"><i
                                    class="fa fa-compress text-lt"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="jp-playlist dropup" id="playlist">
                <ul class="dropdown-menu aside-xl dker">
                    <!-- The method Playlist.displayPlaylist() uses this unordered list -->
                    <li class="list-group-item"></li>
                </ul>
            </div>
            <div class="jp-no-solution hide">
                <span>Update Required</span>
                To play the media you will need to either update your browser to a recent version or update your <a
                    href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
            </div>
        </div>
    </div>
</footer>

</section>

</section>

<!-- side content -->
<aside class="aside-md bg-light dk" id="sidebar">
    <section class="vbox animated fadeInRight">
        <section class="w-f-md scrollable hover">

            <ul class="list-group no-bg no-borders auto m-t-n-xxs">
                <ul style="position:fixed;background:#dfe9eb;width: 100%; z-index: 1;" class="nav nav-tabs" id="SidePages">
                    <li role="presentation" class="active">
                        <a style="cursor: pointer;" href="#profile" aria-controls="profile" role="tab" data-toggle="tab"><i
                                class="fa  fa-microphone" aria-hidden="true"></i></a></li>
                    <li role="presentation">
                        <a style="cursor: pointer;"  href="#messages" aria-controls="profile" role="tab" data-toggle="tab"><i class="fa  fa-user" aria-hidden="true"></i></a></li>
                    <li role="presentation">
                        <a style="cursor: pointer;"  href="#settings" aria-controls="profile" role="tab" data-toggle="tab"><i class="fa fa-clock-o" aria-hidden="true"></i></a>
                    </li>
                </ul>
                <br><br>

                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="profile">
                        <?php for($i=0;$i<50;$i++):?>
                        <li class="list-group-item">
                      <span class="pull-left thumb-xs m-t-xs avatar m-l-xs m-r-sm">
                        <img src="<?php echo base_url('assets/templates/ouvinte/' . $version . '/'); ?>images/a1.png"
                             alt="..." class="img-circle">
                        <i class="on b-light right sm"></i>
                      </span>
                            <div class="clear">
                                <div><a href="#">Chris Fox</a></div>
                                <small class="text-muted">New York</small>
                            </div>
                        </li>
                    <?php endfor;?>

                    </div>
                    <div role="tabpanel" class="tab-pane" id="messages">...</div>
                    <div role="tabpanel" class="tab-pane" id="settings">...</div>
                </div>



            </ul>
        </section>
        <footer class="footer footer-md bg-black">
            <form class="" role="search">
                <div class="form-group clearfix m-b-none">
                    <div class="input-group m-t m-b">
                        <span class="input-group-btn">
                          <button type="submit" class="btn btn-sm bg-empty text-muted btn-icon"><i
                                  class="fa fa-search"></i></button>
                        </span>
                        <input type="text" class="form-control input-sm text-white bg-empty b-b b-dark no-border"
                               placeholder="Search members">
                    </div>
                </div>
            </form>
        </footer>
    </section>
</aside>
<!-- / side content -->

</section>
<a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen,open" data-target="#nav,html"></a>
</section>


<?php
echo $this->head_ud->js(1, $version);
?>


<script>
    function ResquestPage(page, version) {


        if (page == null) {

            window.location.href = "404";
        } else {

            $("#bjax-target").html('');
            $("#loading").html('<i style="left: 45%;top: 45%;position: fixed;z-index: 10;" class="fa fa-spinner fa fa-4x fa-spin fa fa-large"></i>');

            $("#bjax-target").fadeIn("slow", function () {


                $.ajax({
                    type: "POST",
                    url: page,
                    data: {page: page, version: version},
                    success: function (result) {
                        $("#bjax-target").html(result);
                        $("#loading").html('');
                        return false;

                    },
                    error: function (result) {
                        alert('erro');

                    }
                });


                $('#bjax-target').animate({
                    scrollTop: 0
                }, 800);
                return false;
            });

        }


    }

</script>
<script>
    $('#plataform').click(function () {
        ResquestPage('<?php echo base_url('');?>plataformpg',<?php echo $version;?>);
        return false;
    });


    $('#feed').click(function () {
        ResquestPage('<?php echo base_url('');?>feedpg',<?php echo $version;?>);
        return false;
    });

    $('#descubra').click(function () {
        ResquestPage('<?php echo base_url('');?>descubrapg',<?php echo $version;?>);
        return false;
    });

    $('#categoria').click(function () {
        ResquestPage('<?php echo base_url('');?>categoriapg',<?php echo $version;?>);
        return false;
    });
    $('#populares').click(function () {
        ResquestPage('<?php echo base_url('');?>popularespg',<?php echo $version;?>);
        return false;
    });
  $('#profile').click(function () {
        ResquestPage('<?php echo base_url('');?>profilepg',<?php echo $version;?>);
        return false;
    });


</script>
<script>
    function time() {


        var time = $("#jplayer_N").jPlayer()[0].childNodes[1].currentTime;


        alert(time);

    }
    $(document).on('click', '.panel-heading span.icon_minim', function (e) {
        var $this = $(this);
        if (!$this.hasClass('panel-collapsed')) {
            $this.parents('.panel').find('.panel-body').slideUp();
            $this.addClass('panel-collapsed');
            $this.removeClass('glyphicon-minus').addClass('glyphicon-plus');
        } else {
            $this.parents('.panel').find('.panel-body').slideDown();
            $this.removeClass('panel-collapsed');
            $this.removeClass('glyphicon-plus').addClass('glyphicon-minus');
        }
    });
    $(document).on('focus', '.panel-footer input.chat_input', function (e) {
        var $this = $(this);
        if ($('#minim_chat_window').hasClass('panel-collapsed')) {
            $this.parents('.panel').find('.panel-body').slideDown();
            $('#minim_chat_window').removeClass('panel-collapsed');
            $('#minim_chat_window').removeClass('glyphicon-plus').addClass('glyphicon-minus');
        }
    });
    $(document).on('click', '#new_chat', function (e) {
        var size = $(".chat-window:last-child").css("margin-left");
        size_total = parseInt(size) + 400;
        alert(size_total);
        var clone = $("#chat_window_1").clone().appendTo(".container");
        clone.css("margin-left", size_total);
    });
    $(document).on('click', '.icon_close', function (e) {
        //$(this).parent().parent().parent().parent().remove();
        $("#chat_window_1").remove();
    });

</script>

</body>
</html>