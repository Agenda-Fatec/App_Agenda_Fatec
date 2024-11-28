<!DOCTYPE html>
<html lang="pt-br">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title> Equipe de Desenvolvimento | Agenda Fatec </title>

        <script defer type="text/javascript" src="<?= FILES ?>/View/Assets/JS/Global.js">  </script>

        <link rel="stylesheet" type="text/css" href="<?= FILES ?>/View/Assets/CSS/Equipe.css">

        <!-- Favicon (Global.js) -->

    </head>

    <body>

        <?php include VIEWS . "../Components/Menu.php" ?>

        <div id="container">

            <?php include VIEWS . "../Components/Header.php" ?>

            <main>

                <section id="team">

                    <h1> Equipe do Projeto </h1>

                    <div class="developer">

                        <figure> <img src="<?= FILES ?>/View/Assets/Images/Equipe/Arthur.jpg" alt="Arthur"> </figure>

                        <h2> Arthur Chagas da Costa </h2>
    
                        <section class="contact">
    
                            <a href="mailto:arthur.costa19@fatec.sp.gov.br"> <i class="bx bx-envelope">  </i> </a>
                            <a href="https://github.com/arthurch-costa"> <i class="bx bxl-github">  </i> </a>
                            <a href="https://www.linkedin.com/in/arthurch-costa"> <i class="bx bxl-linkedin-square">  </i> </a>
    
                        </section>
    
                    </div>

                    <div class="developer">

                        <figure> <img src="<?= FILES ?>/View/Assets/Images/Equipe/Deivide.jpg" alt="Arthur"> </figure>

                        <h2> Deivide Benedito dos Santos </h2>
    
                        <section class="contact">
    
                            <a href="mailto:deivide.santos01@fatec.sp.gov.br"> <i class="bx bx-envelope">  </i> </a>
                            <a href="https://github.com/DeivideBS"> <i class="bx bxl-github">  </i> </a>
                            <a href="https://github.com/DeivideBS"> <i class="bx bxl-linkedin-square">  </i> </a>
    
                        </section>
    
                    </div>

                    <div class="developer">

                        <figure> <img src="<?= FILES ?>/View/Assets/Images/Equipe/Pablo.jpg" alt="Arthur"> </figure>

                        <h2> Pablo Valentin </h2>
    
                        <section class="contact">
    
                            <a href="mailto:pablo.valentin@fatec.sp.gov.br"> <i class="bx bx-envelope">  </i> </a>
                            <a href="https://github.com/PabloValentin94"> <i class="bx bxl-github">  </i> </a>
                            <a href="https://www.linkedin.com/in/pablo-valentin/"> <i class="bx bxl-linkedin-square">  </i> </a>
    
                        </section>
    
                    </div>

                    <div class="developer">

                        <figure> <img src="<?= FILES ?>/View/Assets/Images/Equipe/Pedro.jpg" alt="Arthur"> </figure>

                        <h2> Pedro Henrique Lucatto </h2>
    
                        <section class="contact">
    
                            <a href="mailto:pedro.lucatto@fatec.sp.gov.br"> <i class="bx bx-envelope">  </i> </a>
                            <a href="https://github.com/Pedro-Lucatto"> <i class="bx bxl-github">  </i> </a>
                            <a href="https://github.com/Pedro-Lucatto"> <i class="bx bxl-linkedin-square">  </i> </a>
    
                        </section>
    
                    </div>

                    <div class="developer">

                        <figure> <img src="<?= FILES ?>/View/Assets/Images/Equipe/Thiago.jpg" alt="Arthur"> </figure>

                        <h2> Thiago Franca de Figueredo </h2>
    
                        <section class="contact">
    
                            <a href="mailto:thiago.figueredo@fatec.sp.gov.br"> <i class="bx bx-envelope">  </i> </a>
                            <a href="https://github.com/thiagofjau"> <i class="bx bxl-github">  </i> </a>
                            <a href="https://www.linkedin.com/in/tffjau/"> <i class="bx bxl-linkedin-square">  </i> </a>
    
                        </section>
    
                    </div>

                    <div class="developer">

                        <figure> <img src="<?= FILES ?>/View/Assets/Images/Equipe/Vinicius.jpg" alt="Arthur"> </figure>

                        <h2> Vinícius Cruz Cassemira </h2>
    
                        <section class="contact">
    
                            <a href="mailto:vinicius.cassemira@fatec.sp.gov.br"> <i class="bx bx-envelope">  </i> </a>
                            <a href="https://github.com/ViniciusCassemira"> <i class="bx bxl-github">  </i> </a>
                            <a href="https://www.linkedin.com/in/viniciuscassemira/"> <i class="bx bxl-linkedin-square">  </i> </a>
    
                        </section>
    
                    </div>

                </section>

            </main>

        </div>
        
    </body>

    <script type="text/javascript">

        document.getElementById("team").querySelectorAll("a").forEach(link => {

            link.target = "_blank";

        });

    </script>

</html>