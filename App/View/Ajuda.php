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

                <p> Como realizar cadastro ou agendamento? </p>

                <h1> Cadastro </h1>

                <p>

                    Para agendar uma sala, é preciso ter cadastro e logar no site.

                </p>

                <section id="tutorial">

                    <div class="tutorial-step">

                        <h2> Passo 01: Crie seu cadastro. </h2>

                        <ul>

                            <li>
                                Clique no botão <a href="/cadastro">Cadastro</a>. <span>(Localizado no lado
                                    superior direito)</span>
                            </li>
                            <li>
                                Digite seu nome completo.
                            </li>
                            <li>
                                Digite seu e-mail institucional da Fatec.
                            </li>
                            <li>
                                Selecione sua relação com a Fatec. <span>(professor ou aluno, por exemplo)</span>
                            </li>
                            <li>
                                Defina uma senha
                            </li>
                            <li>Clique em cadastrar.</li>

                        </ul>

                        <figure> <img src="<?php FILES ?>/View/Assets/Images/ajuda/ajuda01.png" alt="Passo 01">
                        </figure>

                        <p>

                            Caso já possua cadastro, passe para o próximo passo.

                        </p>

                    </div>

                    <div class="tutorial-step">

                        <h1> Agendamento </h1>

                        <h2> Passo 02: Logando no site. </h2>

                        <ul>
                            <li>
                                Clique no botão <a href="/login">Login</a>. <span>(Localizado no lado superior
                                    direito)</span>
                            </li>
                            <li>
                                Digite seu e-mail Fatec cadastrado.
                            </li>
                            <li>
                                Digite a senha cadastrada.
                            </li>
                            <li>Clique em Entrar.</li>

                        </ul>

                        <figure> <img src="<?php FILES ?>/View/Assets/Images/ajuda/ajuda02.png" alt="Passo 02">
                        </figure>

                    </div>

                    <div class="tutorial-step">

                        <h2> Passo 03: Listar salas. </h2>

                        <!-- apagarrr de cima-->
                        <ul>
                            <li>
                                Clique no ícone do menu. <span>(Localizado no lado superior
                                    esquerdo)</span>
                            </li>
                            <li>
                                Clique em <a href="/salas">Salas</a>.
                            </li>
                            <li>
                                Selecione a sala desejada.
                            </li>
                            <li>
                                Clique no botão Agendar <span>(Localizado no lado superior direito)</span>
                            </li>

                        </ul>

                        <figure> <img src="<?php FILES ?>/View/Assets/Images/ajuda/ajuda03.png" alt="Passo 03">
                        </figure>

                    </div>

                    <div class="tutorial-step">

                        <h2> Passo 04: Requisitando sala. </h2>

                        <ul>
                            <li>
                                Escolha a data e horário que deseja agendar.
                            </li>
                            <li>
                                Escolha o auxiliar de docente do seu curso.
                            </li>
                            <li>
                                Clique em Requisitar.
                            </li>
                        </ul>

                        <figure> <img src="<?php FILES ?>/View/Assets/Images/ajuda/ajuda04.png" alt="Passo 04">
                        </figure>

                    </div>

                    <p>

                        Pronto! Você requisitou uma sala. Basta aguardar a confirmação de um administrador. Você será
                        notificado pelo
                        seu e-mail institucional sobre o andamento.
                        <br /><span>(A depender de vários fatores, sua requisição pode ser aprovada ou recusada.)</span>

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
                        <input type="email" id="email_destinatario" name="email_destinatario"
                            value="vinicius.cassemira@fatec.sp.gov.br" required>

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

        document.querySelector("form").onsubmit = function (event) {

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