<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <meta name="description" content="As aplicações web prometem ser o futuro do desenvolvimento de software. Sua natureza, sua arquitetura, conquistou os usuários e os desenvolvedores também (programador web não trabalha, se diverte). Essa matéria é uma introdução ao desenvolvimento web. Divirta-se!"/>
        <meta name="keywords" content="webapp; app's; desenvolvimento, desenvolvimento web, website, webstandards, programação, php, php fácil, php iniciando, php iniciante, começando com php, php descomplicado, javascript, js, html, html5, css"/>
        <meta property="og:image" content="http://www.devfuria.com.br/imagens/favicon_1_16x16x1.png"/>

        <title>Um bom começo | devfuria.com.br</title>
        <link rel="shortcut icon" type="imagens/gif" href="../../../imagens/favicon.ico">
        <link href="../../../css/devfuria.css" media="screen" rel="stylesheet" type="text/css" />
        <script src="../../../furia/jquery/jquery1-8-0.js" type="text/javascript"></script>
        <script src="../../../furia/tooltip/jquery.tools.min.js" type="text/javascript"></script>
        <link href="../../../furia/treeview/jquery.treeview.css" rel="stylesheet" type="text/css" />
        <script src="../../../furia/treeview/lib/jquery.cookie.js" type="text/javascript"></script>
        <script src="../../../furia/treeview/jquery.treeview.js" type="text/javascript"></script>

        <script type="text/javascript" src="../../../furia/js/ga.js" ></script>
    </head>


    <body>
        <div id="furia-conteudo">

            <header>
                <p><a href="http://www.devfuria.com.br/" class="home">www.devfuria.com.br</a></p>
                <p class="menu_topo">
                    <a href="http://www.devfuria.com.br/mapa-do-site">mapa do site</a>
                    <a href="https://github.com/flaviomicheletti/devfuria" target="_blanck" class="mapa_site">forke me on github</a>
                </p>
            </header>
            <nav class="secoes">
                <p>

                    <a href="../../../php/" >PHP</a>
                    <a class="em_breve" >HTML &amp; CSS<span>(em breve)</span></a>
                    <a class="em_breve" >Javascript<span>(em breve)</span></a>
                    <a class="em_breve" >Mysql<span>(em breve)</span></a>
                    <a class="em_breve" >Análise<span>(em breve)</span></a>            </p>
            </nav>

        <p>
            <script type="text/javascript" src="../../../furia/js/gs.js" ></script>
            <gcse:search></gcse:search>
        </p>

        <nav class="guia">
            <ul>
                <li>
                    <a href="http://www.devfuria.com.br/">Home</a>
                    <span><em>Home</em></span>
                </li>
                <li>
                    <a href="../../../php/">PHP</a>
                    <span><em>Árvore completa do curso</em></span>
                </li>
                <li>
                    <a >Um bom começo</a>
                    <span><em>Matéria atual</em></span>
                </li>
            </ul>
        </nav>
        <div style="clear: both"></div>
        <div class="banners_dir">
            <div class="ban-lat-dir _336x280">Publicidade</div>
            <div class="ban-lat-dir _336x280">Publicidade</div>
            <div class="ban-lat-dir _336x280">Publicidade</div>
            <div class="ban-lat-dir _336x280">Publicidade</div>
        </div>
        <article>
            <h1>Um bom começo</h1>

            <p><em>PHP é uma linguagem de programação para uso geral</em>. Inicialmente, projetada por Rasmus Lerdorf na década de 1990, tinha
                como objetivo principal contar as visitas que eram realizadas em seu currículo on-line. Atualmente (2012) é utilizada,
                principalmente para construir aplicações web. Entende-se por aplicações web (às vezes abreviado para “webapp” ou
                simplesmente “app´s”) programas ou softwares escritos para rodarem na plataforma web, no modelo cliente/servidor.</p>

            <p>Um pequeno site pode se beneficiar de uma linguagem do lado do servidor. Um formulário de envio de contato , um portal
                de internet, um software gerenciador de email (o Gmail da Google ou o e-mail do Yahoo, por exemplo), um site do tipo
                E-comerce e muitos outros sistemas também utilizam-se de linguagem do lado do servidor. Nem toda aplicação web precisa
                ser destinada a Internet. Programas como a Intranet de uma empresa, softwares comerciais e de gestão nem sempre estão
                publicados na Internet, rodam apenas na rede interna da organização.</p>

            <p>Em apenas dois parágrafos surgiram termos essenciais e importantes:</p>

            <ul>
                <li>Linguagem de programação do lado do servidor</li>
                <li>Modelo cliente/servidor</li>
                <li>Aplicações Web (webapp, app´s)</li>
                <li>Sistemas</li>
                <li>Software</li>
                <li>Programas</li>
            </ul>

            <p>Outros termos surgirão e com o tempo esses conceitos irão se tornam mais claros e amadurecidos. Por enquanto, é
                aconselhável a não perder muito tempo com eles. <em>Deixe seu celebro, aos poucos, se familiarizar com esse universo e
                    foque sua atenção para a liguagem</em>.</p>

            <p>O termo "Linguagem de programação do lado do servidor" é uma forma genérica de se referir a linguagem de programação que
                está rodando "lá" no lado do servidor. No caso, estamos considerando a linguagem PHP, mas poderia ser qualquer outra,
                como por exemplo, Python, Pearl, Ruby, Java(JSP), CGI, ASP pura, ASP.net, etc...</p>

            <p><em>PHP é uma linguagem de programação interpretada</em>, isto é, seu código fonte não é compilado e executado, mas sim
                interpretado e executado. O código fonte produzido pelo programador é armazenado em um arquivo de texto simples chamado
                de script, normalmente salvo com a extensão “php”, exemplo: “formulario_clientes.php”. Esse scritpt é interpretado e
                executado pelo módulo PHP (no dia-a-dia os profissionais dizem apenas “executado”). Esse módulo roda sobre o servidor
                web denominado Apache. O banco de dados MySql, largamente utilizado com a linguagem PHP, é considerado o par perfeito,
                o casamento do ano, porém é possível utilizar outros banco de dados com a linguagem PHP, como por exemplo, Postgress,
                Oracle,  MongoDB, SqlLite, etc... A arquitetura é ilustrada pela figura 01, o cliente é o computador que consome
                serviços do servidor, normalmente um usuário atrás do navegador web, ele clica em um link com extensão .php, o  servidor
                Apache escuta a “requisição” e aciona o módulo PHP (mod_php). Este por sua vez interpreta (interpretador PHP) o código
                armazenado no servidor (o script) e, se for o caso, através da extensão “php5-mysql” aciona o banco de dados Mysql
                (Servidor MySQL) recuperando algum tipo de dado com valor agregado. Essa informação é embebida por código HTML e
                devolvida de volta ao navegador do cliente gerando, assim, a página HTML resultante.</p>

            <p class="imagem">
                <img src="../../imagens/morimoto_apache1.png" alt="funcionamento do servidor web" />
                <span>Figura 01 - Esquema da arquitetura na qual, comumente, é executado os script em PHP.</span>
                <span>Fonte:
                    <a href="http://www.hardware.com.br/livros/servidores-linux/entendendo-organizacao-dos-arquivos.html" >Morimoto</a>
                </span>
            </p>

            <p>Não ficou claro esse funcionamento? Tudo bem, é mais um assunto no qual é preciso familiarizar-se para depois
                compreendê-lo, dê tempo ao tempo.</p>

            <p>Todo esse processo roda sobre um sistema operacional, podendo ser tanto o Linux como o Windows. Quando utilizamos o Linux,
                diz-se que a arquitetura é a <em>LAMP</em> (Linux, Apache, Mysql e PHP), quando utilizamos o Windows, diz-se que a arquitetura é
                <em>WAMP</em> (Windows, Apache, Mysql e PHP) e quando ela é híbrida, garantindo assim seu funcionamento tanto no windows como no
                Linux, diz-se XAMP, onde o “X” representa o sistema operacional.</p>

            <p>Todas as ferramentas apresentadas, com exceção do Microsoft Windows, são <em>Open Source</em>. Trata-se de um movimento mundial
                de centenas de profissionais colaboradores organizados em comunidades que se auto gerenciam, muitos bons frutos são
                produzidos por essas comunidades. Eles estão inundando o mundo com aplicações de código aberto, na qual é possível
                utilizar, alterar, estudar e contribuir com o código fonte. É importante salientar que a utilização do sistema
                operacional Linux trará, ao estudante, um benefício didático muito superior do que se fosse utilizado apenas o sistema
                operacional Windows. Não trata-se de mero preconceito contra os produtos da Microsoft. A principal razão é que o advento
                OpenSource propicia um estudo aprofundado do funcionamento do software, seja ele o sistema operacional, o servidor web
                ou qualquer outro software. Se o leitor não conhece o Linux, não se preocupe, <em>é possível sim aprender e desenvolver em
                    PHP utilizando apenas o Windows, mas considere conhecer e entender o sistema Linux</em>.</p>

            <p>Para começar a programar em PHP é necessário ter o "ambiente" corretamente instalado e configurado, seja em LAMP ou
                em WAMP. A instalação pode ser uma tarefa simples e básica, se a configuração não for item de preocupação. Mas saber
                configurar o <em>ambiente de desenvolvimento</em> é obrigação do programador. Inicialmente, poderá ser utilizada a configuração
                básica (de fábrica), mas em breve será preciso dominar a configuração dos componentes.</p>

            <p>Em contraponto ao ambiente de desenvolvimento, temos o ambiente na qual o software está rodando de verdade. Trata-se do
                <em>ambiente de produção</em> seu correto funcionamento é um fator crítico para a equipe de TI. Os scripts são produzidos e
                testados no ambiente de desenvolvimento e posteriormente publicados (enviados) para o ambiente de produção. Após "subir
                o ambiente é preciso instalar programas auxiliares como um bom editor de código (Netbeans, Eclipse, etc...), um
                controlador de versão (software que controla a versão do código fonte), um navegador de web compatível com o
                "webs standars" (Fire Fox, Google Chrome, etc...), uma interface (API) para o banco de dados, no caso do Mysql é
                utilizado o PhpMyAdmin, bibliotecas que auxiliam na depuração do código como o X-Debug, etc...</p>

            <p>A rotina de desenvolvimento, no tocante a codificação, normalmente é esta: com o editor e navegador abertos escrevemos um
                trecho de código e vamos até o navegador e checamos o resultado acionando a tecla F5 (para atualizar a página no
                navegador). Se o código interage com a base de dados, então, mantemos a API do banco de dados aberta para podemos
                observar se o que foi alterado está acontecendo de fato no banco de dados. Assim, repetidamente, vamos tecendo o código
                fonte do sistema a ser construído.</p>

            <p>A <em>sintaxe básica</em> pode ser conferida nos trechos de códigos seguintes:</p>

            <div class="code">
                <h1>PHP</h1>
                <pre>&lt;?php
    código fonte
    código fonte
    código fonte
?&gt;</pre>
                <p>O código PHP é escrito entre as tags "&lt;?php" e  "?&gt;".</p>
            </div>

            <div class="code">
                <h1>PHP</h1>
                <pre>&lt;?php
echo "Eu sou uma string&lt;br /&gt;";
echo "e serei exibida na tela do navegador.&lt;br /&gt;";
?&gt;</pre>
                <p>O método echo exibe uma ou mais string.</p>
            </div>

            <div class="code">
                <h1>PHP</h1>
                <pre>&lt;?php
$resultado = 1 + 1;
echo "Resultado da soma de 1 + 1 = $resultado";
?&gt;</pre>
                <p>As variáveis começam com o símbolo de cifrão, como no exemplo, "$nome_da_variavel".</p>
            </div>

            <div class="code">
                <h1>PHP</h1>
                <pre>&lt;?php
/*
comentário em bloco
*/

# comentário em linha
// comentário em linha
?&gt;</pre>
                <p>Comentários podem ser feitos  em linha ou em bloco:</p>
            </div>

            <p>O PHP obteve, nos anos seguinte à sua criação, a colaboração da dupla Andi Gutmans e Zeev Suraski  evoluíndo de forma
                surpreendente. Atualmente na versão 5 a linguagem conta com uma larga aceitação e utilização em centenas de projetos,
                dos mais simples aos mais complexos. A linguagem possue vasta documentação na Internet e na literatura. Alguns bons
                framework´s foram produzidos como por exemplo o <em>Zend</em>, o Cake, o Codeigniter o Symphony entre outros. A empresa Zend,
                responsável pelo framework de mesmo nome, lidera o mercado de certificações. Há também centenas de bibliotecas que
                auxiliam o desenvolvimento da aplicação, a mais notável é a Pear (não confundir com a linguagem Pearl).</p>

            <p>A empresa Netcraft, periodicamente, lança pesquisas que discriminam os servidores web mais utilizados, o Apache sempre
                está na frente, em média 60%, veja figura 02.</p>

            <p class="imagem">
                <img src="../../imagens/apache_estatistica01.png" alt="funcionamento do servidor web"/>
                <span>Figura 02 - Estatística de servidores web pelo mundo</span>
                <span>
                    <a href="http://news.netcraft.com/archives/2012/09/10/september-2012-web-server-survey.html#more-6429">Fonte: Natcraft</a>
                </span>
            </p>

            <p>Bom... um servidor apache pode rodar outas linguagens alem do PHP, mas veja este outro gráfico:</p>

            <p class="imagem">
                <img src="../../imagens/php_estatistica01.png" alt="funcionamento do servidor web"/>
                <span>Figura 03 - Linguagens identificadas em quase 7 miloes de domínios.</span>
                <span>
                    <a href="http://phpadvent.org/2010/usage-statistics-by-ilia-alshanetsky">Fonte: http://phpadvent.org</a>
                </span>
            </p>

            <p>"O gráfico acima mostra a repartição das 6 maiores linguagens identificáveis em 6.7 milhões de domínios onde a linguagem
                pôde ser determinada."</p>

            <p>PHP não é a melhor linguagem, nem a mais segura. Mas é uma excelente linguagem de programação web.</p>

            <p>Seja bem vindo ao mudo do PHP!</p>

            <h2>Leituras adicionais sugeridas</h2>

            <dl id="leitura_adcionais">
                <dt>Internet</dt>
                <dd><em>Manual oficial do PHP</em>, está aqui não é sugerida, é obrigatória. (dica: digite apenas php.net que o
                    navegador redireciona para a url completa).<a href="http://www.php.net" >php.net</a></dd>

                <dd><em>Trecho do manual</em> que introduz à programação em PHP.<a
                        href="http://www.php.net/manual/pt_BR/getting-started.php" >http://www.php.net/manual/pt_BR/getting-started.php</a></dd>

                <dd><em>Artigo de Henrique Bastos</em> explicando as diferenças sobre linguagem interpretada e compiladas.<a
                        href="http://henriquebastos.net/2008/09/06/diferencas-entre-linguagem-compilada-e-linguagem-interpretada" >
                        http://henriquebastos.net/2008/09/06/diferencas-entre-linguagem-compilada-e-linguagem-interpretada</a></dd>

                <dd><em>Artigo escrito em 2009</em> na língua inglesa por Dionysios e traduzido pelo portal www.dri.pt. Fala sobre a
                    <em>evolução do PHP</em> e como a linguagem se adaptou a realidade das organizações.<a
                        href="http://www.dri.pt/pt/noticias/noticias/linguagem_php_solucao_eficaz_para_empresas.html" >
                        http://www.dri.pt/pt/noticias/noticias/linguagem_php_solucao_eficaz_para_empresas.html</a></dd>

                <dd>Notícia eletrônica falando sobre a <em>importância das aplicações web</em><a
                        href="http://idgnow.uol.com.br/computacao_corporativa/2009/05/27/google-diz-que-a-web-e-o-novo-modelo-de-programacao/" >
                        http://idgnow.uol.com.br/computacao_corporativa/2009/05/27/google-diz-que-a-web-e-o-novo-modelo-de-programacao/</a></dd>

                <dt>Livros</dt>
                <dd><em>Nenhum livro sobre PHP</em> é suficientemente básico, conciso e estruturado em uma sequência com começo, meio e fim. Se
                    tratando de PHP para iniciantes, infelizmente não conheço nenhum livro na qual seja merecedor de uma indicação. Existe
                    uma infinidades de livros bons e nos quais eu farei referência quando for oportuno, mas a abrangência é de intermediário
                    para avançado. Aliás, essa foi uma das razões que me motivaram a realizar este projeto O ensino da linguagem de
                    programação,  de qualquer linguagem, é muito difuso, disperso, pulverizado e pouco conciso.</dd>
            </dl>
            <p class="fim">Fim da matéria</p>
            <hr />
            <div id="fb-root"></div>
            <script>(function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[6];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>
            <div class="fb-like" data-send="false" data-width="300" data-show-faces="true" data-font="verdana"></div>
            <style type="text/css">
                .fb_iframe_widget {
                    display: block;
                    margin-top: 20px;
                    margin-left: 80px;
                    text-align: center;
                }
            </style>
        </article>
    </div><!-- furia-conteudo -->




    <div class="furia-tree parcial">
        <h1>Veja também...</h1>
        <h2>Nível Zero</h2>
        <ul id="browser" class="filetree">

            <li><a ><span class="file atual">Um bom começo</span></a></li>

            <li><a href="http://www.devfuria.com.br/php/nivel-zero/logica-de-programacao"><span class="file ">Lógica de Programação</span></a></li>

            <li><a href="http://www.devfuria.com.br/php/nivel-zero/antes-de-enfiar-o-pe-na-jaca"><span class="file ">Antes de enfiar o pé na jáca</span></a></li>

            <li><a href="http://www.devfuria.com.br/php/nivel-zero/intalando-o-ambiente"><span class="file ">Instalando o ambiente no estilo NEXT, NEXT, NEXT</span></a></li>

            <li><a href="http://www.devfuria.com.br/php/nivel-zero/estudos-de-logica-1-ao-5"><span class="file ">Estudos de lógica com respostas (1 ao 5)</span></a></li>

            <li><a href="http://www.devfuria.com.br/php/nivel-zero/estudos-de-logica-6-ao-10"><span class="file ">Estudos de lógica com respostas (6 ao 10)</span></a></li>

        </ul>
    </div>
    <div class="furia-feedback ">
        <form  id="form-feedback" action="#">
            <h1>Feedback</h1>
            <p>Deixe seu feedback, ele é muito importante.</p>
            <p>
                <input type="text" name="contato" id="contato" placeholder="você" />
            </p>
            <p>
                <input type="text" name="email" id="email" placeholder="email"/>
            </p>
            <p>
                <textarea name="feedback" id="feedback"  rows="10" cols="10" placeholder="Seu feedback!"></textarea>
            </p>
            <p>
                <input type="hidden" value="/devfuria/www.devfuria.com.brOLD/php/nivel-zero/um-bom-comeco/" name="url" />
                <input type="hidden" value="508ad7e3d505d7.35271062" name="id" />
                <input type="submit" value="Enviar" class="btn btn-success"/>
            </p>
        </form>
        <script type="text/javascript">
        $("#form-feedback").submit(function(event){
            event.preventDefault();

            var dataToSend = $(this).serialize();
            $.ajax({
                type: "POST",
                url: "../../../../furia/send_mail.php",
                data: dataToSend,
                success: function(data){
                    if(data != "fail"){
                        $('#form-feedback').toggle('slow', function(){
                            $('#form-feedback').html('<h1>Obrigado!</h1><p>Feedback enviado com sucesso!</p>').show(600);
                        });
                    } else {
                        alert("Sorry main, não conseguimos enviar seu feedback!!!");
                        event.preventDefault();
                    }
                },
                error: function(){
                    alert("Sorry main, houve um erro no Ajax!!!");
                }
            });
        });
        </script>
    </div>
    <div style="clear: both"></div>

    <footer>
        <p>
            <a rel="license" href="http://creativecommons.org/licenses/by-nc/3.0/br/deed.en_US">
                <img alt="Creative Commons License" style="border-width:0" src="http://i.creativecommons.org/l/by-nc/3.0/br/88x31.png" />
            </a><br />
        </p>
    </footer>
    <script type="text/javascript">
    //$.tools.tooltip.conf.position = ["bottom", "center"];
    //console.dir($.tools.tooltip.conf);
    $("nav.guia li a").tooltip();

    $("#browser").treeview({
        animated: "slow",
        control: "#treecontrol"
    });

    $('a', 'article').each(function(){
        $(this).attr('target', "_blanck");
    });
    </script>    </body>
</html>