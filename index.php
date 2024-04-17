<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMvix - vendas de ponto</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link rel="stylesheet" href="css/topo.css">
    <link rel="stylesheet" href="css/beneficios.css">
    <link rel="stylesheet" href="css/reps.css">
    <link rel="stylesheet" href="css/vantagens.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="/css/avaliacoes.css">

</head>
<body>
    <header>
        <section id="topo">
            <div id="disclaimer">
                <img src="img/logo.png" alt="logo bmvix">
                <h2>Confiança e suporte de quem está há mais de <span>15 anos no mercado.</span></h2>
                <p></p>
            </div>

            <div class="form-contato">
                <p>Enviando sua informções para contato, você recebe uma promoção exclusiva.</p>
                <form action="enviar_email_topo.php" method="post">
                    <div class="form-group">
                        <input type="text" name="nome" id="nome" placeholder="Digite seu nome">
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" id="email" placeholder="Digite seu melhor email">
                    </div>
                    <div class="form-group">
                        <input type="text" name="tel" id="tel" placeholder="Número do whatsapp">
                    </div>
                    <input type="submit" value="Receber Contato" class="btn">

                    <?php
                        if (!empty($mensagem_sucesso)) {
                            echo "<div><p style='color: green;'>$mensagem_sucesso</p></div>";
                        }
                        if (!empty($mensagem_erro)) {
                            echo "<div><p style='color: red;'>$mensagem_erro</p></div>";
                        }
                    ?>
                </form>
            </div>
        </section>
    </header>

    <main>
        <section id="beneficios">                
                <div class="content_beneficios">
                    <div class="beneficios">
                        <h2>Beneficios de manter um controle eficiente da jornada de trabalho:</h2>
                        <ul>
                            <li>Conformidade legal</li>
                            <li>Precisão nos cálculos</li>
                            <li>Controle financeiro</li>
                            <li>Transparência e confiança entre as partes</li>
                            <li>Gestão do tempo</li>
                            <li>Tomada de decisão<br> baseado em dados</li>
                            <li>Redução de conflitos</li>
                            <li>Foco na produtividade</li>
                        </ul>
                        <button id="saibaMais" class="animation">Saiba mais</button>
                    </div>

                    <div class="video_beneficios">
                        <video src="/video/secullum.mp4" autoplay="true" controls></video>
                    </div>
                </div>          
        </section>

        <section id="reps"> 
            <div class="rep-title">
                <h2>Tipos de equipamentos que são permitidos por lei:</h2>
            </div>

            <div class="descricao">
                <div class="rep-video">
                    <video src="/video/Relógios.mp4" controls></video>
                </div>

                <div class="descricao-tipo-rep">
                    <div class="tipo-rep">
                        <div class="card-rep">
                            <img src="/img/idclass.jpg" alt="Relógio idclass control id">
                            <div class="card-text">
                                <h3>REP-C</h3>
                                <p>Registrador que emite comprovante a cada registro, 1 CNPJ por máquina</p>
                            </div>
                        </div>
                    </div>

                    <div class="tipo-rep">
                        <div class="card-rep">
                            <img src="/img/idflex.webp" alt="Equipamento IDFlex control id">
                            <div class="card-text">
                                <h3>REP-A</h3>
                                <p>Registrador de ponto que não necessita emissão de comprovante, podendo ser utilizado mais de 1 CNPJ</p>
                            </div>
                        </div>
                    </div>

                    <div class="tipo-rep">
                        <div class="card-rep">
                            <img src="/img/checkin.png" alt="Imagem com computador e celular, exibindo aplicativo secullum ponto">
                            <div class="card-text">
                                <h3>REP-P</h3>
                                <p>Registrador de ponto via programa, nessa opção utiliza-se o próprio computador, tablet ou celular</p>
                            </div>
                        </div>
                    </div>

                    <div class="tipo-rep">
                        <div class="card-rep">
                            <img src="/img/cartografico.webp" alt="Relógio idclass control id">
                            <div class="card-text">
                                <h3>Cartografico</h3>
                                <p>Registrador de ponto que utiliza um cartão para marcar os pontos</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="vantagens">
            <div class="vantagens-group">
                <h2> Quais as vantagens práticas de utilizar um sistema de ponto informatizado da BMVIX</h2>
                <div class="vantagens">
                    <h3>Consegue utilizar da compensação de horas para diminuir custos:<br>Ex: Se você tem movimento maior na sexta-feira, o funcionário pode trabalhar até 2 horas a mais e ser liberado em dia de menor movimento na semana seguinte, conforme o acordo coletivo SINDIBARES/SINTRAHOTEIS/ES.</h3>
                    
                    <div class="imgs">
                        <img src="img/descricao-1.jpg" alt="">
                        <img src="img/descricao1.jpg" alt="">
                    </div>
                </div>

                <div class="vantagens">
                    <h3>Facilitar controle para utilizar da diminuição do almoço para 30 minutos, compensando em outro horário a diferença, abaixo trecho do acordo coletivo</h3>
                    <div class="imgs">
                        <img src="img/descricao3.jpg" alt="">
                    </div>
                </div>

                <div class="vantagens">
                    <h3>Opção de baixo custo, já que pode ser adotados sistemas alternativos, que não emitam comprovante, conforme acordo coletivo abaixo</h3>
                    
                    <div class="imgs">
                        <img src="img/descricao4.jpg" alt="">
                    </div>
                </div>

                <div class="vantagens-text">
                    <h3>Garantia de que quem está registrando é o colaborador correto</h3>
                    <h3>Informações em tempo real, podendo se programar melhor para a folha de pagamento, sem surpresas</h3>
                    <h3>Ponto WEB, acessível de qualquer lugar que tenha internet, acompanhe sua empresa à distância</h3>
                </div>

                <div class="vantagens-video">
                    <video src="video/secullum.mp4" controls></video>
                </div>
            </div>        
        </section>
    </main>

    <footer class="footer">
        <div class="contatos">
            <h4 class="titulo-footer">Contatos</h4>
            <div class="info-contatos">
                <a href="#" class="telefone"><i class="fa-solid fa-phone"></i>(27)3339-9660</a>
                <a href="#" class="web"><i class="fa-solid fa-globe"></i>www.bmvix.com.br</a>
                <a href="#" class="email"><i class="fa-solid fa-envelope"></i>luyan@allcard.com.br</a>
            </div>

            <div class="redes-sociais">
                <a href="https://www.instagram.com/bmvix.tecnologia/"><i class="fa-brands fa-square-instagram"></i></a>
                <a href="https://api.whatsapp.com/send?phone=552733399660"><i class="fa-brands fa-square-whatsapp"></i></a>
                <a href="https://www.youtube.com/@bmvix3941"><i class="fa-brands fa-youtube"></i></a>
            </div>
        </div>

        <div class="form-footer">
            <h4 class="titulo-footer">Tire suas dúvidas</h4>
            <form action="enviar_email_footer.php" method="post">
               <input type="text" name="name" id="name" placeholder="Digite seu nome">
               <input type="email" name="email-footer" id="email-footer" placeholder="Digite seu email">
               <input type="text" name="tel-footer" id="tel-footer" placeholder="Digite seu telefone">
               <textarea name="obs" id="obs" cols="30" rows="10" placeholder="Inofrme sua dúvida"></textarea>
               <input type="submit" value="Enviar" class="btn-form-footer">
            </form>
        </div>
    </footer>

    <script src="/reviews.js"></script>
</body>
</html>