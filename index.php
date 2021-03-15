<?php include("Includes/Main/head.php"); ?>

<!-- TELA DE CARREGAMENTO -->
<div class="loader-wrapper">
    <div class="spinner">
        <div class="double-bounce1"></div>
        <div class="double-bounce2"></div>
    </div>
</div>
<!-- fim -->

<body>
    <div class="botaobottom">
        <li style="animation: fadeIn 10.0s, slideMenu 2.7s;" id="botao-share">
            <div data-hover="" data-delay="0" class="new-button w-dropdown">
                <div class="new-button-toggle w-dropdown-toggle" id="w-dropdown-toggle-4" aria-controls="w-dropdown-list-4" aria-haspopup="menu" aria-expanded="false" role="button" tabindex="0">
                    +
                </div>
                <nav class="add-menu w-dropdown-list" id="w-dropdown-list-4" aria-labelledby="w-dropdown-toggle-4">
                    <h1 class="social-tit">Midias Sociais:</h1>
                    <a href="#" target="_blank" class="add-link w-inline-block" tabindex="0"><i class="fab fa-whatsapp sidebar-icon"></i>
                        <div class="sidebar-link-text">Whatsapp</div>
                    </a><a href="https://www.instagram.com/baianeagencia/" target="_blank" class="add-link w-inline-block" tabindex="0"><i class="fab fa-instagram sidebar-icon"></i>
                        <div class="sidebar-link-text">Instagram</div>
                    </a><a href="#" target="_blank" class="add-link w-inline-block" tabindex="0"><i class="fab fa-facebook sidebar-icon"></i>
                        <div class="sidebar-link-text">Facebook</div>
                    </a><a href="mailto:baianeagencia@gmail.com?subject=Olá%20Baianê%20" class="add-link w-inline-block" tabindex="0"><i class="fas fa-envelope sidebar-icon"></i>
                        <div class="sidebar-link-text">Email</div>
                    </a>
                </nav>
            </div>
        </li>
    </div>
    <?php include("Includes/Main/menu.php"); ?>
    <?php include("Includes/Main/Topicos/video.php"); ?>
    <?php include("Includes/Main/Topicos/Servicos.php"); ?>
    <?php include("Includes/Main/Topicos/Depoimentos.php"); ?>
</body>
<?php include("Includes/Main/footer.php"); ?>

</html>