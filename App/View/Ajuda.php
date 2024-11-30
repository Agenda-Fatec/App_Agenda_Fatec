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

                    <p> Confira nesta página, alguns tópicos que podem ser úteis na utilização da aplicação. </p>

                    <h1> Agendamento </h1>

                    <p> Confira abaixo os passos para agendar uma sala: </p>

                    <section id="tutorial">

                        <div class="tutorial-step">

                            <h2> Passo 01: crie seu cadastro. </h2>
                            
                            <p>
                                
                                Para agendar uma sala, você precisa ter um cadastro e estar logado em nosso site. Clique no botão Cadastro localizado no lado superior direito da tela, ou <a href="/cadastro">clique aqui</a> para realizar seu cadastro. 
                        
                            </p>
                            
                            <p>
                                
                                Insira seu nome completo, seu e-mail institucional da Fatec, selecione sua relação com a instituição de ensino (se você é um professor ou aluno, por exemplo), defina uma senha de acesso e clique em cadastrar.
                        
                            </p>

                            <p>

                                Caso já possua o seu cadastro, passe para o próximo passo.

                            </p>
                            
                            <figure> <img src="<?php FILES ?>/View/Assets/Images/ajuda/ajuda01.png" alt="Passo 01"> </figure>

                        </div>

                        <div class="tutorial-step">

                            <h2> Passo 02: faça login na aplicação. </h2>
                            
                            <p>
                                
                                Caso possua um cadastro mas ainda não está logado, clique no botão de login localizado no lado superior direito da tela, ou <a href="/login">clique aqui</a> para fazer o login. 
                                Insira seu e-mail institucional e sua senha (os mesmos que foram usados no cadastro) e clique em entrar. 
                            
                            </p>
                            
                            <figure> <img src="<?php FILES ?>/View/Assets/Images/ajuda/ajuda02.png" alt="Passo 02"> </figure>

                        </div>

                        <div class="tutorial-step">

                            <h2> Passo 03: vá até a página de listagem de salas. </h2>

                            <p>
                                
                                Clique no ícone do menu, localizado no lado superior esquerdo, e clique em salas para visualizar todas as salas cadastradas no sistema. Após isso selecione a sala que deseja agendar.
                            
                            </p>

                            <p>
                                <a href="/salas">clique aqui</a> para visitar a área de salas.
                            </p>

                            <figure> <img src="<?php FILES ?>/View/Assets/Images/ajuda/ajuda03.png" alt="Passo 03"> </figure>

                        </div>

                        <div class="tutorial-step">

                            <h2> Passo 04: requisite uma sala para utilização. </h2>

                            <p>
                                
                                Após ter selecionado a sala que deseja agendar, clique no botão agendar, no campo superior direito. Você será redirecionado para uma nova tela, onde deverá ser definido o dia e horário da utilização, além do Auxiliar de Docente do seu curso. Após isso clique em Requisitar.
                            
                            </p>

                            <figure> <img src="<?php FILES ?>/View/Assets/Images/ajuda/ajuda04.png" alt="Passo 04"> </figure>

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