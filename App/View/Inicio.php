<!DOCTYPE html>
<html lang="pt-br">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title> Início | Agenda Fatec </title>

        <script defer type="text/javascript" src="<?= FILES ?>/View/Assets/JS/Global.js">  </script>

        <link rel="stylesheet" type="text/css" href="<?= FILES ?>/View/Assets/CSS/Inicio.css">

        <!-- Favicon (Global.js) -->

    </head>

    <body>

        <?php include VIEWS . "../Components/Menu.php" ?>

        <div id="container">

            <?php include VIEWS . "../Components/Header.php" ?>

            <main>

                <section id="home">

                    <article>
        
                        <h2> Bem-vindo(a) ao </h2>
        
                        <h1> Agenda Fatec </h1>
            
                        <p>
                            
                            Gerenciar e agendar as salas de aula, da <span class="emphasis">Fatec Jahu</span>, agora ficou mais fácil. Selecione 
                            a sala desejada, defina a data e horário (Início e término.) de utilização, faça a solicitação e aguarde pela resposta.
                        
                        </p>
        
                    </article>
        
                    <figure> <img src="<?= FILES ?>/View/Assets/Images/Storyset/Inicio.svg" alt="Calendário"> </figure>
        
                </section>

                <section id="about">

                    <figure> <img src="<?= FILES ?>/View/Assets/Images/Storyset/Sobre.svg" alt="Estudo"> </figure>

                    <article>
        
                        <h2> Sobre o Projeto </h2>
            
                        <p>
                            
                            A ideia por trás do <span class="emphasis">Agenda Fatec</span>, surgiu a partir de um problema enfrentado pela 
                            <span class="emphasis">Fatec Jahu</span>, onde, para se requisitar uma sala, é necessário que isso ocorra de forma 
                            cara a cara. Outro ponto a se destacar, é que os horários dos agendamentos são salvos em folhas de papel, o que gera 
                            um custo de material que poderia ser descartado, caso o processo fosse feito digitalmente.
                            <br><br>
                            A proposta do <span class="emphasis">Agenda Fatec</span> é proporcionar um melhor gerenciamento e agendamento das 
                            salas da instituição de ensino, garantindo um maior controle e praticidade à <span class="emphasis">Fatec Jahu</span>.
                        
                        </p>
        
                    </article>

                </section>

                <section id="contact">

                    <article>
        
                        <h2> Contato </h2>
            
                        <p>
                            
                            Veja os conteúdos relacionados ao <span class="emphasis">Agenda Fatec</span> ou contate a 
                            <span class="emphasis">Fatec Jahu</span>.
                            <br><br>
                            Alguma dúvida? <a href="/ajuda">Clique aqui</a>.
                        
                        </p>

                        <div id="links">

                            <a target="_blank" href="https://github.com/Agenda-Fatec"> <i class="bx bxl-github">  </i> </a>
                            <a target="_blank" href="https://fatecjahu.edu.br"> <i class="bx bxs-school">  </i> </a>

                        </div>
        
                    </article>

                    <figure> <img src="<?= FILES ?>/View/Assets/Images/Storyset/Contato.svg" alt="Contatos"> </figure>

                </section>

            </main>

        </div>
        
    </body>

</html>