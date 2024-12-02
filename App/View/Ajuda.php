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

                    <p> Veja abaixo, os passos para agendar uma sala (Utilize as imagens para se guiar melhor.): </p>

                    <section id="tutorial">

                        <div class="tutorial-step">

                            <h2> Passo 01: crie seu cadastro. </h2>
                            
                            <p>

                                Para requistar uma sala para utilização, você precisa ter um cadastro. 
                                Clique no botão "Cadastro", localizado no canto superior direito da tela, ou 
                                <a href="/cadastro"> clique aqui </a> para realizá-lo.
                                <br><br>
                                Ao entrar na página de cadastro, preencha os campos com os seguintes dados:

                            </p>

                            <ul>

                                <li> <i class="bx bxs-square">  </i> Seu nome completo; </li>
                                <li> <i class="bx bxs-square">  </i> Seu e-mail institucional da Fatec; </li>
                                <li> <i class="bx bxs-square">  </i> Sua relação com a instituição de ensino (Aluno, professor, etc.); </li>
                                <li> <i class="bx bxs-square">  </i> Uma senha para sua conta. </li>
                            
                            </ul>
                            
                            <p>

                                Após isso, clique no botão "Cadastrar".
                                <br><br>
                                Caso já possua o seu cadastro, avançe para o próximo passo.

                            </p>
                            
                            <figure> <img src="<?= FILES ?>/View/Assets/Images/Telas/Cadastro.png" alt="Passo 01"> </figure>

                        </div>

                        <div class="tutorial-step">

                            <h2> Passo 02: faça login na aplicação. </h2>
                            
                            <p>
                                
                                Caso já possua um cadastro, mas ainda não esteja logado, clique no botão "Login", 
                                localizado no canto superior direito da tela, ou <a href="/login"> clique aqui </a> 
                                para fazê-lo.
                                <br><br>
                                Ao entrar na página de login, preencha os campos com os seguintes dados:
                            
                            </p>

                            <ul>

                                <li> <i class="bx bxs-square">  </i> Seu e-mail institucional da Fatec; </li>
                                <li> <i class="bx bxs-square">  </i> Sua senha. </li>
                            
                            </ul>

                            <p>

                                Lembre-se que você deve inserir o mesmo e-mail e a mesma senha de quando se cadastrou.

                            </p>
                            
                            <figure> <img src="<?= FILES ?>/View/Assets/Images/Telas/Login.png" alt="Passo 02"> </figure>

                        </div>

                        <div class="tutorial-step">

                            <h2> Passo 03: vá até a página de listagem de salas. </h2>

                            <p>
                                
                                Clique no ícone do menu, localizado no canto superior esquerdo, e após o menu aparecer na tela, 
                                clique em "Salas" para visualizar todas as salas cadastradas no sistema. Após isso, clique na 
                                sala que deseja requisitar.
                                <br><br>
                                Para ser redirecionado automaticamente até a página de listagem de salas, <a href="/salas"> clique aqui </a>.
                            
                            </p>

                            <figure> <img src="<?= FILES ?>/View/Assets/Images/Telas/Salas.png" alt="Passo 03"> </figure>

                        </div>

                        <div class="tutorial-step">

                            <h2> Passo 04: requisite uma sala para utilização. </h2>

                            <p>
                                
                                Após ter selecionado a sala que deseja requisitar, uma nova página será aberta, onde serão listados os 
                                equipamentos da sala escolhida. Após a abertura da mesma, clique no botão "Agendar", no canto superior direito.
                            
                            </p>

                            <figure> <img src="<?= FILES ?>/View/Assets/Images/Telas/Descricao.png" alt="Passo 04"> </figure>

                            <p>
                                
                                Após clicar no botão "Agendar" você será redirecionado a uma outra página, onde devem ser passados 
                                os seguintes dados:
                            
                            </p>

                            <ul>

                                <li> <i class="bx bxs-square">  </i> Sala que está sendo requisitada (Preenchido automaticamente.); </li>
                                <li> <i class="bx bxs-square">  </i> Dia de utilização desejado; </li>
                                <li> <i class="bx bxs-square">  </i> Hora inicial da utilização da sala; </li>
                                <li> <i class="bx bxs-square">  </i> Hora final da utilização da sala; </li>
                                <li> <i class="bx bxs-square">  </i> Quem deve confirmar esta requisição de utilização de sala. </li>
                            
                            </ul>

                            <p>

                                Após isso, clique no botão "Requisitar" e espere uma confirmação de um administrador.

                            </p>

                            <figure> <img src="<?= FILES ?>/View/Assets/Images/Telas/Agendamento.png" alt="Passo 04"> </figure>

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