<?php
echo $this->head_ud->head(0,$version,$metas,$title);
?>
<body>
<style>


    .top-content-narrador{
        background-image: url('<?php echo base_url('assets/templates/landing/'.$version.'/img/backgrounds/2.png');?>');
        -webkit-background-size: cover;
        -o-background-size: cover;
        -moz-background-size: cover;
        background-size: cover;
    }

    .call-action-narrador{
        background-image: url('<?php echo base_url('assets/templates/landing/'.$version.'/img/backgrounds/2.png');?>');
        -webkit-background-size: cover;
        -o-background-size: cover;
        -moz-background-size: cover;
        background-size: cover;
    }
    .top-content-narrador a{
       color:white;

    }

    .top-content-narrador p{
       color:white;

    }

    .top-content-narrador h1{
       color:white;

    }
</style>
<!-- Loader -->
<div class="loader">
    <div class="loader-img"></div>
</div>

<!-- Top content -->
<div class="top-content-narrador" style="">
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
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="top-navbar-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a class="scroll-link" href="#always-beautiful">Sobre nós</a></li>
                    <?php if($nact == 1):?>
                    <li><a class="scroll-link" href="#features">Novidades</a></li>
                    <?php endif;?>
                    <li><a class="scroll-link" href="#c-form-3">Contato</a></li>
                    <li><a class="btn btn-link-2" href="<?php echo base_url('login');?>">Entrar</a></li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="inner-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-7 text">
                    <h1 class="wow fadeInLeftBig"><?php echo $titulo;?></h1>
                    <div class="description wow fadeInLeftBig">
                        <p>
                            <?php echo $descricao;?>
                        </p>
                    </div>
                    <div class="top-big-link wow fadeInUp">
                        <a class="btn btn-link-1" href="<?php echo $btn1_link;?>" target="_blank"><?php echo $btn1;?></a>
                        <a class="btn btn-link-2 scroll-link" href="<?php echo $btn2_link;?>"><?php echo $btn2;?></a>
                    </div>
                </div>
                <div class="col-sm-5 form-box wow fadeInUp">
                    <div class="form-top">
                        <div class="form-top-left">
                            <h3><?php echo $titulo_cad;?></h3>
                            <p><?php echo $texto_cad;?></p>
                        </div>
                        <div class="form-top-right">
                            <i class="fa fa-pencil" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="form-bottom">

                        <form method="post" action="" id="cadastro_form">
                            <div class="form-group">
                                <label  class="sr-only" for="form-first-name"><b class="text-danger">*</b> Nome</label>
                                <input type="text" name="nome" placeholder="* Nome..." class="form-first-name form-control" id="form-first-name">
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="form-last-name"><b class="text-danger">*</b> Sobrenome</label>
                                <input type="text" name="sobrenome" placeholder="* Sobrenome..." class="form-last-name form-control" id="form-last-name">
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="form-email"><b class="text-danger">*</b> E-mail</label>
                                <input type="text" name="email" placeholder="* E-mail..." class="form-email form-control" id="form-email">
                            </div>

                            <div class="form-group">
                                <label class="sr-only" for="form-pass"><b class="text-danger">*</b> Senha</label>
                                <input type="password" name="senha" placeholder="* Senha..." class="form-pass form-control" id="form-pass">
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="form-about-yourself">Sobre mim <small>(Opicional)</small></label>
                                <textarea name="sobre" placeholder="Sobre mim... "
                                          class="form-about-yourself form-control" id="form-about-yourself"></textarea>
                            </div>
                            <button type="submit" class="btn">Cadastrar!</button>
                            <div class="form-links">
                                <a href="#" class="launch-modal" data-modal-id="modal-privacy">Politica de Privacidade</a> -
                                <a href="#" class="launch-modal" data-modal-id="modal-faq">FAQ</a>
                                <br>
                                <b id="error"></b>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<?php if($nact == 1):?>
<div class="features-container section-container">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 features section-description wow fadeIn">
                <h2>Novidades</h2>
                <div class="divider-1 wow fadeInUp"><span></span></div>
            </div>
        </div>
        <div class="row">



            <div class="col-sm-4 features-box features-box-gray wow fadeInUp" >
                <div class="features-box-icon">
                    <span aria-hidden="true" class=" <?php echo $n1ico;?>"></span>
                </div>
            <?php echo $n1;?>
            </div>
            <div class="col-sm-4 features-box features-box-gray wow fadeInUp">
                <div class="features-box-icon">
                    <span aria-hidden="true" class="<?php echo $n2ico;?>"></span>
                </div>
            <?php echo $n2;?>
            </div>

            <div class="col-sm-4 features-box features-box-gray wow fadeInUp">
                <div class="features-box-icon">
                    <span aria-hidden="true" class="<?php echo $n3ico;?>"></span>
                </div>
            <?php echo $n3;?>
            </div>



        </div>
        <div class="row">
            <div class="col-sm-12 section-bottom-button wow fadeInUp">
                <a class="btn btn-link-1 scroll-link" href="#top-content">Cadastre-se</a>
            </div>
        </div>
    </div>
</div>
<?php endif;?>

<!-- Always beautiful -->
<div class="always-beautiful-container section-container">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 always-beautiful section-description wow fadeIn">
                <h2>Sobre nós</h2>
                <div class="divider-1 wow fadeInUp"><span></span></div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-7 always-beautiful-box wow fadeInLeft">
                <div class="always-beautiful-box-text always-beautiful-box-text-left">
                   <?php echo $sobre;?>
                </div>
            </div>
            <div class="col-sm-5 always-beautiful-box wow fadeInUp">
                <img style="width: 200px;" src="<?php echo base_url('assets/templates/landing/'.$version.'/img/backgrounds/3.png');?>" alt="">
            </div>
        </div>
    </div>
</div>


<!-- Pacotes
<div class="pricing-container section-container">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 pricing section-description wow fadeIn">
                <h2>Pricing</h2>
                <div class="divider-1 wow fadeInUp"><span></span></div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 pricing-box  wow fadeInUp">
                <div class="pricing-box-inner">
                    <div class="pricing-box-price"><span>$ </span><strong>12</strong><span> / month</span></div>
                    <h3>Basic</h3>
                    <h4>Freelancer</h4>
                    <div class="pricing-box-features">
                        <ul>
                            <li>1000 video lessons</li>
                            <li>Normal speed</li>
                            <li>500 solved exercises</li>
                            <li>300MB to save your code</li>
                            <li>750 hours of support</li>
                        </ul>
                    </div>
                    <div class="pricing-box-sign-up">
                        <a class="btn btn-link-1 scroll-link" href="#top-content">Sign up</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 pricing-box pricing-box-best wow fadeInDown">
                <div class="pricing-box-inner">
                    <div class="pricing-box-price">
                        <span>$ </span><strong>35</strong><span> / month</span>
                        <div class="pricing-box-icon">
                            <span aria-hidden="true" class="typcn typcn-star"></span>
                        </div>
                    </div>
                    <h3>Ultimate</h3>
                    <h4>Best value</h4>
                    <div class="pricing-box-features">
                        <ul>
                            <li>3000 video lessons</li>
                            <li>2x speed</li>
                            <li>2000 solved exercises</li>
                            <li>500MB to save your code</li>
                            <li>900 hours of support</li>
                        </ul>
                    </div>
                    <div class="pricing-box-sign-up">
                        <a class="btn btn-link-1 scroll-link" href="#top-content">Sign up</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 pricing-box wow fadeInUp">
                <div class="pricing-box-inner">
                    <div class="pricing-box-price"><span>$ </span><strong>75</strong><span> / month</span></div>
                    <h3>Platinum</h3>
                    <h4>Big company</h4>
                    <div class="pricing-box-features">
                        <ul>
                            <li>5000 video lessons</li>
                            <li>4x speed</li>
                            <li>4000 solved exercises</li>
                            <li>900MB to save your code</li>
                            <li>Unlimited hours of support</li>
                        </ul>
                    </div>
                    <div class="pricing-box-sign-up">
                        <a class="btn btn-link-1 scroll-link" href="#top-content">Sign up</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="testimonials-container section-container section-container-gray-bg">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 testimonials section-description wow fadeIn animated" style="visibility: visible; animation-name: fadeIn;">
                <h2>Testimonials</h2>
                <div class="divider-1 wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;"><span></span></div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1 testimonial-list wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                <div role="tabpanel">

                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="tab1">
                            <div class="testimonial-image">
                                <img src="assets/img/testimonials/1.jpg" alt="" data-at2x="assets/img/testimonials/1.jpg" style="width: auto !important; height: auto !important;">
                                <div class="testimonial-icon">
                                    <span aria-hidden="true" class="typcn typcn-pin"></span>
                                </div>
                            </div>
                            <div class="testimonial-text">
                                <p>
                                    "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
                                    Lorem ipsum dolor sit amet, consectetur..."<br>
                                    <a href="#">Lorem Ipsum, dolor.co.uk</a>
                                </p>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab2">
                            <div class="testimonial-image">
                                <img src="assets/img/testimonials/2.jpg" alt="" data-at2x="assets/img/testimonials/2.jpg" style="width: auto !important; height: auto !important;">
                                <div class="testimonial-icon">
                                    <span aria-hidden="true" class="typcn typcn-pin"></span>
                                </div>
                            </div>
                            <div class="testimonial-text">
                                <p>
                                    "Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip
                                    ex ea commodo consequat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit
                                    lobortis nisl ut aliquip ex ea commodo consequat..."<br>
                                    <a href="#">Minim Veniam, nostrud.com</a>
                                </p>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab3">
                            <div class="testimonial-image">
                                <img src="assets/img/testimonials/3.jpg" alt="" data-at2x="assets/img/testimonials/3.jpg" style="width: auto !important; height: auto !important;">
                                <div class="testimonial-icon">
                                    <span aria-hidden="true" class="typcn typcn-pin"></span>
                                </div>
                            </div>
                            <div class="testimonial-text">
                                <p>
                                    "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
                                    Lorem ipsum dolor sit amet, consectetur..."<br>
                                    <a href="#">Lorem Ipsum, dolor.co.uk</a>
                                </p>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab4">
                            <div class="testimonial-image">
                                <img src="assets/img/testimonials/4.jpg" alt="" data-at2x="assets/img/testimonials/4.jpg" style="width: auto !important; height: auto !important;">
                                <div class="testimonial-icon">
                                    <span aria-hidden="true" class="typcn typcn-pin"></span>
                                </div>
                            </div>
                            <div class="testimonial-text">
                                <p>
                                    "Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip
                                    ex ea commodo consequat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit
                                    lobortis nisl ut aliquip ex ea commodo consequat..."<br>
                                    <a href="#">Minim Veniam, nostrud.com</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab"></a>
                        </li>
                        <li role="presentation">
                            <a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab"></a>
                        </li>
                        <li role="presentation">
                            <a href="#tab3" aria-controls="tab3" role="tab" data-toggle="tab"></a>
                        </li>
                        <li role="presentation">
                            <a href="#tab4" aria-controls="tab4" role="tab" data-toggle="tab"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

-->
<div id="contact" class="c-form-3-container section-container section-container-image-bg" style="background-image:url('<?php echo base_url('assets/templates/landing/'.$version.'/img/backgrounds/2.png');?>');  -webkit-background-size: cover;
    -o-background-size: cover;
    -moz-background-size: cover;
    background-size: cover; position: relative; z-index: 0;">
    <div class="container">

        <div class="row">
            <div class="col-sm-8 col-sm-offset-2 c-form-3 section-description wow fadeIn animated" style="visibility: visible; animation-name: fadeIn;">
                <h2>Diga um oi</h2>
                <div class="divider-1 wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;"><span></span></div>
                <p>Tem alguma dúvida, sugestão ou quer simplesmente mandar um oi? Mande-nos uma mensagem e responderemos em breve.
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6 col-sm-offset-3 c-form-3-box wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">

                <div class="c-form-3-top">
                    <div class="c-form-3-top-left">
                        <h3>Entre em contato</h3>
                        <p>Prencha o formulario que responderemos em breve:</p>
                    </div>
                    <div class="c-form-3-top-right">
                        <i class="fa fa-envelope"></i>
                    </div>
                </div>
                <div class="c-form-3-bottom">
                    <form method="post" action="" id="ajax_form">
                        <div class="form-group">
                            <label class="sr-only" for="c-form-3-email">E-mail</label>
                            <input type="text" name="email" placeholder="E-mail..." class="c-form-3-email form-control" id="c-form-3-email">
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="c-form-3-subject">Nome</label>
                            <input type="text" name="nome" placeholder="Nome..." class="c-form-3-subject form-control" id="c-form-3-subject">
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="c-form-3-message">Mensagem</label>
                            <textarea name="mensagem" placeholder="Mensagem..." class="c-form-3-message form-control" id="c-form-3-message"></textarea>
                        </div>
                        <button  type="submit" class="btn"> Enviar Mensagem</button>
                        <br>
                        <b id="contatoSucess"></b>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>


<footer>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 footer-social">
                <a href="#"><span class="typcn typcn-social-facebook"></span></a>
                <a href="#"><span class="typcn typcn-social-dribbble"></span></a>
                <a href="#"><span class="typcn typcn-social-twitter"></span></a>
                <a href="#"><span class="typcn typcn-social-google-plus"></span></a>
                <a href="#"><span class="typcn typcn-social-instagram"></span></a>
                <a href="#"><span class="typcn typcn-social-pinterest"></span></a>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 footer-copyright">
                ©  Todos os direitos reservados <a href="http://www.narradorcast.com.br/">NarradorCast</a> <?php echo date('Y');?>.
            </div>
        </div>
    </div>
</footer>

<!-- MODAL: Privacy policy -->
<div class="modal fade" id="modal-privacy" tabindex="-1" role="dialog" aria-labelledby="modal-privacy-label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span><span class="sr-only">Fechar</span>
                </button>
                <h2 class="modal-title" id="modal-privacy-label">Politica de privacidade</h2>
            </div>
            <div class="modal-body">
           <?php echo $plp;?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>

<!-- MODAL: Frequent questions -->
<div class="modal fade" id="modal-faq" tabindex="-1" role="dialog" aria-labelledby="modal-faq-label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span><span class="sr-only">Fechar</span>
                </button>
                <h2 class="modal-title" id="modal-faq-label">Perguntas frequentes</h2>
            </div>
            <div class="modal-body">
                <?php echo $faq;?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn" data-dismiss="modal"><?php echo $_SESSION['ID'];?></button>
            </div>
        </div>
    </div>
</div>

<?php

echo  $this->head_ud->js(0,$version);

?>
<script>
    $(document).ready(function(){
        $('#cadastro_form').validate({
            rules: {
                nome: { required: true, minlength: 2 },
                sobrenome: { required: true, minlength: 2 },
                email: { required: true, email: true },
                senha: { required: true,  minlength: 6 }
            },
            messages: {
                nome: { required: 'Preencha o campo nome', minlength: 'No mínimo 2 letras' },
                sobrenome: { required: 'Preencha o campo nome', minlength: 'No mínimo 2 letras' },
                email: { required: 'Informe o seu email', email: 'Ops, informe um email válido' },
                senha: { required: 'Informe sua senha', email: 'No mínimo 6 caracteres' }

            },
            submitHandler: function( form ){
                var dados = $( form ).serialize();

                $.ajax({
                    type: "POST",
                    url: "cadastroForm",
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
</body>

</html>