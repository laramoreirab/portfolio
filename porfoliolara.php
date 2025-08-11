<?php 
$arquivo = file("editor.txt")
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href='https://cdn.boxicons.com/fonts/basic/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" type="image/png"  href="/imagem/logo/favicon.png">
    <script src="https://kit.fontawesome.com/5e045f87ce.js" crossorigin="anonymous"></script>
    <title>Portfólio</title>
</head>
<body>
    <div class="container">
        <header>
            <div class="cabecalho">
                <div class="logo">
                    <img src="/imagem/logo/logolara.png" alt="logo" class="logotipo">
                </div>
                <nav>
                    <ul class="menu">
                        <li class="sessao"><a href="#" class="linkmenu">Home</a></li>
                        <li class="sessao"><a href="#sobre" class="linkmenu">Sobre</a></li>
                        <li class="sessao"><a href="#tech" class="linkmenu">Tecnologias</a></li>
                        <li class="sessao"><a href="#proj" class="linkmenu">Projetos</a></li>
                        <li class="sessao"><a href="#contt" class="linkmenu">Contato</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <div class="apresentacao">
            <div class="aprenbox">
                <div class="elem1">  <img  class="mark1"  src="/imagem/elementos/manchamain.png" alt="" ></div>
                <div class="avatar" ><img src="/imagem/elementos/avatarlaraok.png" alt="" class="avatarlara"></div>
                <h1 class="titulointro"><?php echo "$arquivo[0]"?></h1>
                <h2 class="subtitulointro">Desenvolvedora Fullstack</h2>
                <p class="textointro"><?php echo "$arquivo[1]"?></p>
                <button class="saibamais"><a href="#sobre">Saiba mais</a></button>
                <div class="mainredes">
                    <a href="https://github.com/laramoreirab" target="_blank"><i class="fa-brands fa-github fa-2xl" style="color: #000000;"></i></a>
                    <a href="www.linkedin.com/in/lara-moreira-barreto-3b882b300" target="_blank"><i class="fa-brands fa-linkedin fa-2xl" style="color: #000000;"></i></a>
                    <a href="mailto:laramoreiraba@gmail.com" target="_blank"><i class="fa-solid fa-envelope fa-2xl" style="color: #000000;"></i></a>
                </div>
            </div>
        </div> 

    <section id="sobre">
    <h1 class="titulocorpo"><?php echo "$arquivo[2]"?></h1>
    <div class="sobre">
        <div class="infosobre">
                <div class="foto"><img src="/imagem/elementos/fotolara.svg" class="fotolara"></div>
        <div class="titulosobre">
            <h2 class="nomesobre"><?php echo "$arquivo[3]"?></h2>
            <h4 class="subsobre"><?php echo "$arquivo[4]"?></h4>
            <div class="continfogerais">
                <div class="alinhamentoinfogerais">
                    <div class="local"><i class="fa-solid fa-location-dot fa-xl" style="color: #000000;"></i>
                        <p class="localtxt"><?php echo "$arquivo[5]"?></p>
                    </div>
                    <div class="idade">
                        <i class="fa-regular fa-calendar fa-xl" style="color: #000000;"></i>
                        <p class="idadetxt"><?php echo "$arquivo[6]"?></p>
                    </div>
                    <div class="emailsobre">
                        <i class="fa-regular fa-envelope fa-xl" style="color: #000000;"></i>
                        <p class="emailtxt"><?php echo "$arquivo[7]"?></p>
                    </div>
                    <div class="gitsobre">
                        <i class="fa-brands fa-square-github fa-xl" style="color: #000000;"></i>
                        <p class="gitxt"><?php echo "$arquivo[8]"?></p>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="curriculo">
            <div class="parte1">
                <div class="objetivo">
                    <div class="superiorobj">
                    <div class="alignline1"><hr class="line1"></div>
                    <h2 class="titobje"><?php echo "$arquivo[9]"?></h2>
                    </div>
                    <p class="objetxt">
                    <?php echo "$arquivo[10]"?>
                    </p>
                </div>
                <div class="formacao">
                    <div class="superiorformacao">
                        <h2 class="formatitulo"><?php echo "$arquivo[11]"?></h2>
                    <div class="alignline2"><hr class="line2"></div>
                    </div>
                    <div class="linhadotempo">
                        <div class="haste"></div>
                        <div class="bolinhas">
                        <div class="bolinha1"><img src="/imagem/elementos/bolinha.png" class="bolinhapreta"  alt=""></div>
                        <div class="bolinha2"><img src="/imagem/elementos/bolinha.png" class="bolinhapreta" alt=""></div>
                        <div class="bolinha3"><img src="/imagem/elementos/bolinha.png" class="bolinhapreta" alt=""></div>
                        <div class="bolinha4"><img src="/imagem/elementos/bolinha.png"  class="bolinhapreta" alt=""></div>
                        </div>
                    </div>
                    <div class="cronologia">
                        <h3 class="anoeng">2024 - 2029</h5>
                        <h4 class="titeng">Engenharia de Informação</h4>
                        <h5 class="instufabc">Universidade Federal do ABC</h5>

                        <h3 class="anobct">2024 - 2027</h5>
                        <h4 class="titlbct">Bacharelado em Ciência e Tecnologia</h4>
                         <h5 class="instufabc">Universidade Federal do ABC</h5>

                        <h3 class="anotec">2025 - 2026</h3>
                        <h4 class="titecnico">Curso Técnico em Desenvolvimento de Sistemas</h4>
                        <h5 class="instsenai">Senai Armando de Arruda Pereira</h5>

                        <h3 class="anomedio">2021 - 2023</h3>
                        <h4 class="titlmedio">Ensino Médio Regular</h4>
                        <h5 class="instmedio">Colégio Engenheiro Salvador Arena</h5>
                    </div>
                </div>
            </div>
            <div class="parte2">
                <div class="idiomas">
                    <div class="superioridiomas">
                    <div class="alignline4"><hr class="line4"></div>
                    <h2 class="titidiomas"><?php echo "$arquivo[12]"?></h2>
                    </div>
                    <div class="portugues">
                        <p class="labelportugues"><?php echo "$arquivo[13]"?></p>
                        <img src="/imagem/elementos/nivelport.png" alt="" class="proficiencia1">
                    </div>
                    <div class="ingles">
                        <p class="labelingles"><?php echo "$arquivo[14]"?></p>
                        <img src="/imagem/elementos/niveling.png" alt="" class="proficiencia2">
                    </div>
                </div>
                <div class="cursos">
                    <div class="superiorcursos">
                    <h2 class="titcursos"><?php echo "$arquivo[15]"?></h2>
                    <div class="alignline5"><hr class="line5"></div>
                    </div>
                    <ul class="listacursos">
                        <li class="topicocurso">Ética na Inteligência Artificial - Senai - Abril 2025 - 4h</li>
                        <li class="topicocurso">Segurança do Trabalho - Senai - Abril 2025 - 14h</li>
                        <li class="topicocurso">Excel Básico - Senai - Abril 2025 - 20h </li>
                        <li class="topicocurso">Introdução a Computação Quântica - IBM - Fevereiro 2025 - 6h</li>
                    </ul>
                </div>
                <div class="trabalhovol">
                    <div class="superiortrabvol">
                    <div class="alignline6"><hr class="line6"></div>
                    <h2 class="titrabvolun"><?php echo "$arquivo[16]"?></h2>
                    </div>
                    <ul class="trabtxt">
                        <li>Maratona de Programação Paulista</li>
                        <p class="voluntariado"><?php echo "$arquivo[17]"?></p>
                        <li>Arena em ação</li>
                        <p class="voluntariado"><?php echo "$arquivo[18]"?></p>
                    </ul>  
                </div>
                <div class="softskills">
                    <div class="superiorsoft">
                    <h2 class="softtitle">Soft Skills<?php echo "$arquivo[19]"?></h2>
                    <div class="alignline3"><hr class="line3"></div>
                    </div>
                    <p class="softtxt"><?php echo "$arquivo[20]"?>
                    </p>
                </div>
            </div>
        </div>
    </div>
    </section>

    <section id="tech">
    <div class="tecnologias">
        <h1 class="titulocorpo"><?php echo "$arquivo[21]"?></h1>
        <div class="contech">
            <div class="superiortech">
                <img src="/imagem/elementos/hteml.png" class="imghtml">
                <img src="/imagem/elementos/cess.png" alt="" class="imgcss">
                <img src="/imagem/elementos/javascri.png" alt="" class="imgjavascri">
                <img src="/imagem/elementos/pehp.png" alt="" class="imgphp">
            </div>
            <div class="inferiortech">
                <img src="/imagem/elementos/java.png" alt="" class="imgjava">
                <img src="/imagem/elementos/python.png" alt="" class="imgpython">
                <img src="/imagem/elementos/cplus.png" alt="" class="imgcplus">
                <img src="/imagem/elementos/clang.png" alt="" class="imgc">
            </div>
        </div>
    </div>
    </section>

    <section id="proj">
    <div class="projetos">
        <h1 class="titulocorpo"><?php echo "$arquivo[22]"?></h1>
        <div class="projetech">
            <img src="/imagem/projetos/etech.jpeg" class="etechimg">
            <div class="contexto1">
                <h2 class="etechtitle"><?php echo "$arquivo[23]"?></h2>
                <p class="textetech"><?php echo "$arquivo[24]"?></p>
                <button class="explorar">
                    <a href="https://github.com/laramoreirab/projetoEcommerce.git" target="_blank">
                    <i class="fa-brands fa-github-alt fa-2xl"></i>
                    Explorar 
                    </a>
                </button>
            </div>
        </div>
        <div class="projnetflix">
            <div class="contexto2">
            <h2 class="netflixtitle"><?php echo "$arquivo[25]"?></h2>
            <p class="textnet"><?php echo "$arquivo[26]"?></p>
            <button class="explorar">
                <a href="https://github.com/laramoreirab/NetflixClone.git" target="_blank">
                <i class="fa-brands fa-github-alt fa-2xl"></i>
                Explorar 
                </a> 
            </button>
            </div>
            <img src="/imagem/projetos/netflixclone.jpeg" class="netimg">
        </div>
        <div class="projlogin">
            <img src="/imagem/projetos/paginalogin.jpeg" class="loginimg">
            <div class="contexto3">
            <h2 class="logintitle"><?php echo "$arquivo[27]"?></h2>
            <p class="textlogin"><?php echo "$arquivo[28]"?></p>
            <button class="explorar">
                <a href="https://github.com/laramoreirab/loginpage.git" target="_blank">
                <i class="fa-brands fa-github-alt fa-2xl"></i>
                Explorar 
                </a> 
            </button>
            </div>
        </div>
    </div>
    </section>

    <section id="contt">
    <div class="contato">
        <h1 class="titulocorpo">Contato</h1>
        <form id="contform" action="#.php" method="post">
        <div class="contnumtel">
            <div class="email"><input type="email" placeholder="Email"></div>
            <div class="telefone"><input type="tel" pattern=[0-9]{2}[0-9]{5}-[0-9]{4} placeholder="Celular"></div>
        </div>
        <div class="nome"><input type="text" id="inome" placeholder="Nome"></div>
        <div class="mensagem"><textarea id="imsg" placeholder="Mensagem"></textarea></div>
        <div class="enviarbtt"><input type="submit"></div>
        </form>
        <div class="containeredes">
            <div class="mailcont">
                <i class="fa-regular fa-envelope fa-2xl" id="envelope"></i>
                <p class="textmail"><?php echo "$arquivo[7]"?></p>
            </div>
            <div class="linkedincont">
                <i class="fa-brands fa-linkedin-in fa-2xl" id="linkedin"></i>
                <p class="textlink"><?php echo "$arquivo[3]"?></p>
            </div>
            <div class="instacont">
                <i class="fa-brands fa-instagram fa-2xl" id="instagram"></i>
                <p class="textinsta"><?php echo "$arquivo[29]"?></p>
            </div>
        </div>
        <div class="mapa"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3654.8841334496324!2d-46.56091152378593!3d-23.64432016464695!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5cec46ebe475%3A0x8d2c14858d37a05e!2sSchool%20Senai%20Armando%20de%20Arruda%20Pereira!5e0!3m2!1sen!2sbr!4v1754584962771!5m2!1sen!2sbr"  height="380" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
    </div>
    </section>


    <footer>
        <p class="footertxt">
            <i class="fa-regular fa-copyright" style="color: #2d2f34;"></i>
            2025 Lara Moreira Barreto
        </p>
        <div class="alinharlinha"><hr class="linefooter"></div>
        <div class="iconsfooter">
        <i class="fa-brands fa-linkedin fa-xl"></i>
        <i class="fa-brands fa-github fa-xl"></i>
        <i class="fa-brands fa-instagram fa-xl"></i>
        </div>
    </footer>
</div>
<script src="app.js"></script>
</body>
</html>