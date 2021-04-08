
<div id="contato" class="section cta section-2">
    <div class="container-big">
        <div class="content-width">
            <h5 class="plus-margin-bottom top-marg2">ENTRE EM CONTATO</h5>
            <div class="call-buttons">
                <h1 class="contato-botoes">Se preferir pelas redes sociais:</h1>
                <a href="https://wa.me/message/YYTYX6HFNW6JC1" target="_blank">
                    <div class="whatssapp-btn">
                        <i style="margin-right:8px;" class="fab fa-whatsapp"></i>Whatsapp
                    </div>
                </a>
                <a href="https://www.instagram.com/baianeagencia/" target="_blank">
                    <div class="insta-btn">
                        <i style="margin-right:8px;" class="fab fa-instagram"></i>Direct
                    </div>
                </a>
            </div>
            <!--  -->
            <h1 class="contato-formulario">Ou preenncha o formulário:</h1>
            <form class="limite-contato" action="contact.php" method="post">
                <div class="elem-group">
                    <label for="name">Seu Nome:</label>
                    <input type="text" id="name" name="visitor_name" placeholder="Seu Nome" pattern=[A-Z\sa-z]{3,20} required>
                </div>
                <div class="elem-group">
                    <label for="email">Seu E-mail:</label>
                    <input type="email" id="email" name="visitor_email" placeholder="exemplo@email.com" required>
                </div>
                <div class="elem-group">
                    <label for="department-selection">Selecione um Departamento:</label>
                    <select id="department-selection" name="concerned_department" required>
                        <option value="">Selecione um Departamento</option>
                        <option value="gestao-de-trafego">Gestão de Tráfego</option>
                        <option value="fotografia">Fotografia</option>
                        <option value="mentoria">Mentoria</option>
                        <option value="web-design">Criação de Sites</option>
                        <option value="social-media">Social Media</option>
                        <option value="videos-institucionais">Videos Institucionais</option>
                    </select>
                </div>
                <div class="elem-group">
                    <label for="title">Assunto:</label>
                    <input type="text" id="title" name="email_title" required placeholder="Assunto" required>
                </div>
                <div class="elem-group">
                    <label for="message">Escreva sua mensagem:</label>
                    <textarea id="message" name="visitor_message" placeholder="Escreva aqui sua mensagem" required></textarea>
                </div>
                <button class="enviar" type="submit">Enviar</button>
            </form>

            <!--  -->


        </div>
    </div>
</div>