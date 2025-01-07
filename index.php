<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>LiCakes</title>
    <meta name="viewport" content="width=device-width, inital-scale=1">
    <!--CSS/ESTILO-->
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/slick.css"/>
    <link rel="stylesheet" type="text/css" href="css/slick-theme.css">
    <link rel="stylesheet" href="css/lity.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>

<body>

    <!--CABEÇALHO-->
    <?php require_once("conteudo/topoBTN.php") ?>
    <!--FIM CABEÇALHO-->

    <!--BANNER-->
    <section class="banner">
        <img src="img/banner1.png" alt="Um banner de bolo">
        <img src="img/banner2.png" alt="Um banner de bolo">
        <img src="img/banner3.png" alt="Um banner de bolo">
        <img src="img/banner4.png" alt="Um banner de bolo">
        <img src="img/banner5.png" alt="Um banner de bolo">
    </section>
    <!--FIM BANNER-->

    <!--BOLOS-->
    <section class="bolos">
        <div class="site">
            <div class="wow line linha1"></div>
            <div class="wow bolosTitulo">
                <h2 class="wow letters letters-left">Bolos</h2>
                <h2 class="wow letters ampersand">&amp;</h2>
                <h2 class="wow letters letters-right">Doces</h2>
            </div>

            <div class="wow line linha2"></div>
            <div class="bolosIMG wow animate__animated animate__bounceInLeft">
                <div>
                    <a href="produtos.php#b_recheados" style="text-decoration:none">
                        <p>Bolos Recheados</p>
                        <img class="size" src="img/bolos1.png" alt="bolo">
                    </a>   
                </div>
                <div>
                    <a href="produtos.php#b_cafe" style="text-decoration:none">
                        <p>Para logo de manha</p>
                        <img class="size" src="img/bolos2.png" alt="bolo">
                    </a>
                </div>
                <div>
                    <a href="produtos.php#b_festas" style="text-decoration:none">
                        <p>Bolos Festas</p>
                        <img class="size" src="img/bolos3.png" alt="bolo">
                    </a>
                </div>
             </div>
        </div>
    </section>
     <!--FIM BOLOS-->

    <!--DOCES-->
    <section class="doces">
        <div class="site">
            <div class="docesIMG wow animate__animated animate__bounceInLeft">
                <div>
                    <a href="produtos.php#d_presentes" style="text-decoration:none">
                        <p>Para presentes</p>
                        <img class="size" src="img/Doces1.png" alt="bolo">
                    </a>
                </div>
                <div>
                    <a href="produtos.php#d_gourmet" style="text-decoration:none">
                        <p>Doces Finos</p>
                        <img class="size" src="img/Doces2.png" alt="bolo">
                    </a>
                </div>
                <div>
                    <a href="produtos.php#d_trad" style="text-decoration:none">
                        <p>Tradicionais</p>
                        <img class="size" src="img/Doces3.png" alt="bolo">
                    </a>
                </div>
             </div>
        </div>
    </section>
    <!--FIM DOCES-->

    <!--PROMOCAO-->
    <section class="promocao">
        <img src="img/bannerPromocao1.png" alt="">
        <img src="img/bannerPromocao2.png" alt="">
        <img src="img/bannerPromocao3.png" alt="">
    </section>
    <!--FIM PROMOCAO-->

    <!--FUNDADORA-->
    <section class="fundadora">
        <h2 class="wow animate__animated animate__bounceInDown">Fundadora</h2>
        <div class="site wow animate__animated animate__bounceInUp">
            <img src="img/placeHolderFundadora.png" alt="imagem da fundadora da empresa">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
            industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
            and scrambled it to make a type specimen book. It has survived not only five centuries, but also the
            leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s
            with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
            publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        </div>
    </section>
    <!--FIM FUNDADORA-->

     <!--APP-->
        <section class="videoApp">
            <img src="img/Anuncio_APP3.gif">
            <div id="wrap">
                <a href="app.php" class="btn-slide btn_index">
                  <span class="circle"><i class="fa fa-rocket"></i></span>
                  <span class="title">Baixe</span>
                  <span class="title-hover">Clique aqui</span>
                </a>
            </div>
        </section>
    <!--FIM APP-->

    <!--RODAPE-->
    <footer class="rodape2">
            <div class="site">
                <a href="index.html">
                    <img src="img/logos/novaLogov3.png" alt="Logo LiCakes">
                </a>
                <ul>
                    <a href="#">
                        <img src="img/logos/face 80px.png" alt="Logo face">
                    </a>
                    
                    <a href="#">
                        <img src="img/logos/Insta 80px.png" alt="Logo Insta">
                    </a>
                    
                    <a href="#">
                        <img src="img/logos/Twitter 80px.png" alt="Logo twitter">
                    </a>
                </ul>
                <h2>contato@licakes.com.br</h2>
                <h2>(11) 98573-1585</h2>
            </div>      
    </footer>
            <div class="direitos2">
                <h2>Web Site feito pela System Makers</h2>
            </div>

    <script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="js/slick.js"></script>
    <script type="text/javascript" src="js/lity.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <script type="text/javascript" src="js/wow.js"></script>
    <script type="text/javascript" src="js/animacoes.js"></script>
    <!--FIM RODAPE-->
</body>

</html>

