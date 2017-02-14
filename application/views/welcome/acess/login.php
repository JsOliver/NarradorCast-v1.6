<?php
echo $this->head_ud->head(0,$version,$metas,$title);
echo '<link rel="stylesheet" href="'.base_url('assets/templates/landing/'.$version.'/css/login-forms.css').'">';
?>

<div class="loader">
    <div class="loader-img"></div>
</div>
<div class="top-content-narrador">
    <?php

    $this->db->from('landing_page');
    $this->db->order_by('id','desc');
    $this->db->limit(1,0);
    $get = $this->db->get();
    $count = $get->num_rows();
    $result = $get->result_array();

    if($count > 0):

        $titulo = $result[0]['titulo'];
        $descricao = $result[0]['texto1'];
        $btn1 = $result[0]['btn1'];
        $btn2 = $result[0]['btn2'];
        $btn1_link = $result[0]['btn1_link'];
        $btn2_link = $result[0]['btn2_link'];
        $titulo_cad =  $result[0]['titulo_cad'];
        $texto_cad =  $result[0]['texto_cad'];
        $faq =  $result[0]['faq'];
        $plp =  $result[0]['plp'];
        $sobre =  $result[0]['sobre'];
        $nact =  $result[0]['activen'];
        $n1 = $result[0]['n1'];
        $n2 = $result[0]['n2'];
        $n3 = $result[0]['n3'];
        $n1ico = $result[0]['icon1'];
        $n2ico = $result[0]['icon2'];
        $n3ico = $result[0]['icon3'];
    else:

        $titulo = 'Ouça os melhores podcasts gratuitamente';
        $descricao = 'Ouça os melhores podcasts no narradorcast, e cadastre seu podcast para alcançar o mais usuarios.';
        $btn1 = 'Entrar';
        $btn2 = 'Sobre';
        $btn1_link = 'login';
        $btn2_link = '#always-beautiful';
        $titulo_cad =  'Cadastre-se';
        $texto_cad =  'Cadastre-se para ter acesso a plataforma mais completa de podcasts.';
        $faq =  'Cadastre-se para ter acesso a plataforma mais completa de podcasts.';
        $plp =  'Cadastre-se para ter acesso a plataforma mais completa de podcasts.';
        $sobre =  'Normalmente ouvimos mais de um podcast, por isso existe o agregador de podcast, assim podemos concentrar vários podcasts diferentes em um mesmo lugar, facilitando os acessos. O NarradorCast é um agregador de podcast gratuito onde você pode criar seu próprio feed com os podcasts preferidos e ainda descobrir novos podcasts que ainda não conhecia. Temos uma área em que os podcasts cadastrados são agrupados por assuntos diversos, assim é possível você selecionar o tema e encontrar o que mais combina com você.';

        $nact =  0;
        $n1 = '';
        $n2 = '';
        $n3 = '';
        $n1ico = '';
        $n2ico = '';
        $n3ico = '';
    endif;
    ?>
    <!-- Top menu -->
    <div class="inner-bg" style="padding: 0;margin-top: -45px;">
        <div class="l-form-1-container section-container section-container-image-bg"
             style="position: relative; z-index: 0;background-image: url('<?php echo base_url('assets/templates/landing/'.$version.'/img/backgrounds/2.png');?>'); -webkit-background-size: cover;
                 -o-background-size: cover;
                 -moz-background-size: cover;
                 background-size: cover;">
            <div class="container">
                <nav class="navbar navbar-inverse navbar-no-bg" role="navigation">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a href="<?php echo base_url('');?>"><img class="img-responsive" style="width: 150px;float: left;margin: 0; padding: 0;" src="<?php echo base_url('assets/templates/general/'.$version.'/img/logos/logo-large.png');?>"></a>
                        </div>

                    </div>
                </nav>
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 l-form-1 section-description wow fadeIn animated"
                         style="visibility: visible; animation-name: fadeIn;">
                        <h2>Entrar</h2>
                        <div class="divider-1 wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                            <span></span></div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3 l-form-1-box wow fadeInUp animated"
                         style="visibility: visible; animation-name: fadeInUp;">

                        <div class="l-form-1-top">
                            <div class="l-form-1-top-left">
                                <h3>Entrar no NarradorCast</h3>
                                <p>Entre com seu e-mail e senha:</p>
                            </div>
                            <div class="l-form-1-top-right">
                                <i class="fa fa-lock"></i>
                            </div>
                        </div>
                        <div class="l-form-1-bottom">
                            <form role="form" action="" method="post" id="login_form">
                                <div class="form-group">
                                    <label class="sr-only" for="l-form-1-username">E-mail</label>
                                    <input type="text" name="email" placeholder="E-mail..."
                                           class="l-form-1-username form-control" id="l-form-1-username">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="l-form-1-password">Senha</label>
                                    <input type="password" name="senha" placeholder="Senha..."
                                           class="l-form-1-password form-control" id="l-form-1-password">
                                </div><br>
                                <b id="error"></b>

                                <button type="submit" class="btn" onclick='$("#error").html("Aguarde...");'>Entrar!</button>
                            </form>
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3 l-form-1-social-login">
                        <h4>...ou entrar com:</h4>
                        <div class="l-form-5-social-login">
                            <a class="btn btn-link-3" href="#">
                                <i class="fa fa-facebook"></i> <span class="btn-link-3-text">Entrar com Facebook</span>
                            </a>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>
<?php
echo  $this->head_ud->js(0,$version);
?>

<script>
    $(document).ready(function(){
        $('#login_form').validate({


        rules: {
               
                email: { required: true, email: true },
                senha: { required: true,  minlength: 6 }
            },
            messages: {
                email: { required: 'Informe o seu email', email: 'Ops, informe um email válido' },
                senha: { required: 'Informe sua senha', email: 'No mínimo 6 caracteres' }

            },
            submitHandler: function( form ){
                var dados = $( form ).serialize();

                $.ajax({
                    type: "POST",
                    url: "loginForm",
                    data: dados,
                    success: function( data )
                    {
                        if(data == 11){
                            window.location.reload();

                        }else{

                            $("#error").html(data);
                        }
                    }
                });

                return false;
            }
        });
    });
</script>