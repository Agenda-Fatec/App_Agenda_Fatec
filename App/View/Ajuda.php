<!DOCTYPE html>
<html lang="pt-br">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title> Dúvidas | Agenda Fatec </title>

        <script defer type="text/javascript" src="<?= FILES ?>/View/Assets/JS/Global.js">  </script>

        <link rel="stylesheet" type="text/css" href="<?= FILES ?>/View/Assets/CSS/Ajuda.css">

        <!-- Favicon (Global.js) -->

    </head>

    <body>

        <?php include VIEWS . "../Components/Menu.php" ?>

        <div id="container">

            <?php include VIEWS . "../Components/Header.php" ?>

            <main>

                <section id="help">

                    <h1> Ajuda </h1>

                    <p> Confira, nesta página, alguns tópicos que podem ser úteis na utilização da aplicação. </p>

                    <h1> Agendamento </h1>

                    <p> Veja abaixo, os passos para agendar uma sala. </p>

                    <section id="tutorial">

                        <div class="tutorial-step">

                            <h2> Passo 01: crie seu cadastro. </h2>
                            
                            <p>
                                
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestias dolorum voluptatem aspernatur. 
                                Maiores temporibus sit dicta consequatur dolore, rem expedita delectus nostrum itaque quae reiciendis 
                                hic perferendis harum debitis labore!
                            
                            </p>
                            
                            <figure> <img src="<?php FILES ?>/View/Assets/Images/Logo.png" alt="Passo 01"> </figure>

                        </div>

                        <div class="tutorial-step">

                            <h2> Passo 02: faça login na aplicação. </h2>
                            
                            <p>
                                
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestias dolorum voluptatem aspernatur. 
                                Maiores temporibus sit dicta consequatur dolore, rem expedita delectus nostrum itaque quae reiciendis 
                                hic perferendis harum debitis labore!
                            
                            </p>
                            
                            <figure> <img src="<?php FILES ?>/View/Assets/Images/Logo.png" alt="Passo 02"> </figure>

                        </div>

                        <div class="tutorial-step">

                            <h2> Passo 03: vá até a página de listagem de salas. </h2>

                            <p>
                                
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestias dolorum voluptatem aspernatur. 
                                Maiores temporibus sit dicta consequatur dolore, rem expedita delectus nostrum itaque quae reiciendis 
                                hic perferendis harum debitis labore!
                            
                            </p>

                            <figure> <img src="<?php FILES ?>/View/Assets/Images/Logo.png" alt="Passo 03"> </figure>

                        </div>

                        <div class="tutorial-step">

                            <h2> Passo 04: requisite uma sala para utilização. </h2>

                            <p>
                                
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestias dolorum voluptatem aspernatur. 
                                Maiores temporibus sit dicta consequatur dolore, rem expedita delectus nostrum itaque quae reiciendis 
                                hic perferendis harum debitis labore!
                            
                            </p>

                            <figure> <img src="<?php FILES ?>/View/Assets/Images/Logo.png" alt="Passo 04"> </figure>

                        </div>

                        <p>
                            
                            Pronto! Você requisitou uma sala. Basta aguardar a confirmação de um administrador. Você será notificado pelo 
                            seu e-mail institucional sobre o andamento. Tenha em mente que a requisição pode ser recusada.
                        
                        </p>

                    </section>

                    <h1> Contato </h1>

                    <p> Possui uma dúvida que não foi abordada? Tem alguma sugestão? Envie-nos um e-mail. </p>

                    <section id="contact">
                        
                        <form action="#">

                            <label for="nome"> Insira seu nome: </label>
                            <input type="text" id="nome" name="nome" required>

                            <label for="email_rementente"> Insira seu e-mail: </label>
                            <input type="email" id="email_rementente" name="email_rementente" required>

                            <label for="email_destinatario"> Insira o e-mail do destinatário: </label>
                            <input type="email" id="email_destinatario" name="email_destinatario" value="vinicius.cassemira@fatec.sp.gov.br" required>

                            <label for="assunto"> Insira o assunto da mensagem: </label>
                            <input type="text" id="assunto" name="assunto" required>

                            <label for="mensagem"> Insira a mensagem: </label>
                            <textarea id="mensagem" name="mensagem" maxlength="255" required></textarea>

                            <div id="buttons">

                                <button type="reset"> Limpar </button>

                                <button type="submit"> Enviar </button>

                            </div>

                        </form>

                    </section>
                    
                </section>

            </main>

        </div>

        <script type="text/javascript">

            document.querySelector("form").onsubmit = function(event) {

                event.preventDefault();

                const data = new FormData(event.target);

                const name = data.get("nome").trim();

                const sender_email = data.get("email_rementente").trim();

                const recipient_email = data.get("email_destinatario").trim();

                const subject = data.get("assunto").trim();

                const message = data.get("mensagem").trim().concat("%0D%0A%0D%0A");

                const link = `${recipient_email}?subject=${subject}&body=${message}(${name} | ${sender_email}).`;

                window.open("mailto:".concat(link));

            }

        </script>

    </body>

</html>