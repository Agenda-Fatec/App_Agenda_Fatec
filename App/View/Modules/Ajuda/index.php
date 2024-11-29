<!DOCTYPE html>
<html lang="pt-br">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title> Ajuda | Agenda Fatec </title>

        <script defer type="text/javascript" src="<?= FILES ?>/View/Assets/JS/Global.js">  </script>

        <link rel="stylesheet" type="text/css" href="<?= FILES ?>/View/Assets/CSS/Ajuda.css">

        <!-- Favicon (Global.js) -->

    </head>

    <body>

        <?php include VIEWS . "../Components/Menu.php" ?>

        <div id="container">

            <?php include VIEWS . "../Components/Header.php" ?>

            <main>

                <section id="module-list">

                    <h1>Ajuda</h1>
                    <p>Confira nessa página alguns tópicos que podem ser úteis para a utilização de nosso sistema</p>

                    <div class="div-section" id="tutorial">
                        <h2>Como agendar uma sala?</h2>

                        <h3>1º: Realize o seu cadastro</h3>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestias dolorum voluptatem aspernatur. Maiores temporibus sit dicta consequatur dolore, rem expedita delectus nostrum itaque quae reiciendis hic perferendis harum debitis labore!</p>   
                        <img src="" alt="Futura imagem">
                        
                        <h3>2º: Realize o login no site</h3>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestias dolorum voluptatem aspernatur. Maiores temporibus sit dicta consequatur dolore, rem expedita delectus nostrum itaque quae reiciendis hic perferendis harum debitis labore!</p>   
                        <img src="" alt="Futura imagem">
                        
                        <h3>3º: Visite a área de salas</h3>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestias dolorum voluptatem aspernatur. Maiores temporibus sit dicta consequatur dolore, rem expedita delectus nostrum itaque quae reiciendis hic perferendis harum debitis labore!</p>   
                        <img src="" alt="Futura imagem">

                        <h3>4º: Realize o seu agendamento</h3>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestias dolorum voluptatem aspernatur. Maiores temporibus sit dicta consequatur dolore, rem expedita delectus nostrum itaque quae reiciendis hic perferendis harum debitis labore!</p>   
                        <img src"" alt="Futura imagem">

                        <p class="msg-ajuda">Pronto! Você realizou o seu agendamento, agora basta aguardar a resposta do responsável do sistema. Você será notificado pelo seu e-mail institucional.</p>
                    </div>

                    <div class="div-section" id="contato">
                        <h2>Entrando em contato</h2>
                        <p class="msg-ajuda">Dúvidas na hora de agendar? Sugestões? Contate nossos administradores</p>
                        
                        <form action="#" id="form">

                            <label for="form-assunto">Assunto do e-mail</label>
                            <input type="text" id="form-assunto" name="form-assunto" required>

                            <label for="form-email">E-mail</label>
                            <input type="email" id="form-email" name="form-email" required>

                            <label for="form-mensagem">Mensagem</label>
                            <textarea id="form-mensagem" name="form-mensagem" required></textarea>
                            
                            <button type="submit">Enviar email</button>

                        </form>
                    </div>
                </section>

            </main>

        </div>
        <script type="text/javascript">
            document.querySelector("form").onsubmit = function(event) {

                event.preventDefault();

                const data = new FormData(event.target);

                const sender_email = data.get("form-email").trim();

                const recipient_email = "vinicius.cassemira@fatec.sp.gov.br";

                const subject = data.get("form-assunto").trim();

                const message = "%0D%0A%0D%0A".concat(data.get("form-mensagem").trim()).concat("%0D%0A%0D%0A");

                const link = `${recipient_email}?subject=${subject}&body=Olá!${message}%20(${sender_email}).`;

                window.open("mailto:".concat(link));

            }

        </script>
    </body>

</html>