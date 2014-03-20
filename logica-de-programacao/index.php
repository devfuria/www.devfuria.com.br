<?php
/**
 * index Lógica
 */
/**
 * Includes
 */
require "../core/boot.php";
?>
<!DOCTYPE html>
<html lang="pt">
    <head>
        <?php
        $conteudo->head->setTitle('Lógica de Programação');
        $conteudo->head->setDescription('Curso de Lógica de Programação alinhada a Orientação de Objetos e TDD.');
        $conteudo->head->setkeywords("lógica básico; lógica de programação; lógica para iniciantes; " .
            "raciocio lógico; algoritmo; lógica descomplicado; aprendendo lógica; matéria sobre lógica; aula sobre lógica; "
        );
        $conteudo->head->setAuthor();
        include BASE_PATH . VIEWS_PATH . "/head.php";
        ?>

        <link rel="canonical" href="<?php echo LINKS_PATH; ?>/logica/" />
        <style type="text/css">
            h1 {
                font-weight: bolder;
                color: #2F4F4F
            }
        </style>

    </head>

    <body>
        <?php
        $conteudo->navtop->secao_ativa = Conteudo::SECAO_LOG;
        include BASE_PATH . VIEWS_PATH . "/nav-top.php";
        ?>
        <!-- Page content of course! -->
    <main class="bs-masthead" id="content" role="main">
        <div class="container">
            <h1>Lógica de Programação<small></small></h1>
            <p class="lead">Curso de Lógica de Programação (com TDD e OOP)</p>
            <p>O curso de lógica era apenas uma matéria no meio do curso de PHP (coitado)</p>
            <p>Com a inclusão do curso de JS eu me senti obrigado e falar de lógica de um modo geral.</p>
            <p>Então, desmenbrei a matéria da seção PHP e nasceu o curso de lógica.</p>
            <p>Refazendo alguns exercícios de lógica eu percebi que poderiar aplicar a técnica de TDD.</p>
            <p>Mas antes de falar sobre TDD, somos obrigados a falar de OOP e</p>
            <p>antes de falar de OOP sobres obrigado a falar de funções.</p>
            <p>O curso está organizado dessa forma:</p>
            <ul>
                <li>inicia com alguns exercícios para quebrar o gelo,</li>
                <li>depois aprendemos sobre funções,</li>
                <li>na sequência aprendemos o básico (do básico) sobre OOP</li>
                <li>e finalmente TDD.</li>
            </ul>
            <p>Aí o "bicho pega"</p>
            <p>Seja bem vindo ao curso!</p>
        </div>
    </main>

    <?php
    $conteudo->lista->label = ListaSecao::LABEL_CURSO_LOG;
    $conteudo->lista->setLinks($conteudo->paginas, Conteudo::SECAO_LOG, Conteudo::CATEGORIA_CURSO);
    include BASE_PATH . VIEWS_PATH . "/cursos/lista-secao.php";
    ?>
    <?php include BASE_PATH . VIEWS_PATH . "/footer-js.php"; ?>
</body>
</html>