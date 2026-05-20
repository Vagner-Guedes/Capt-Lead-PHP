<?php define('CAPTLEADS_SECURE', true);
require_once 'config.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=yes">
    <meta name="description"
        content="Capt Leads - Transforme telas em oportunidades reais de negócio. Capture leads em tempo real através de veículos por app, totens interativos, TV corporativa e sistema de filas.">
    <meta name="robots" content="index, follow">
    <meta name="theme-color" content="#10b981">

    <title>Capt Leads - Sua marca em movimento.</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://cdnjs.cloudflare.com">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Favicon - Caminho relativo (funciona local e online) -->
    <link rel="icon" type="image/x-icon" href="assets/favicon_io/favicon.ico">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon_io/favicon-16x16.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon_io/apple-touch-icon.png">
    <link rel="manifest" href="assets/favicon_io/site.webmanifest">
</head>

<body>

    <div class="preloader">
        <div class="loader"></div>
    </div>

    <header class="header">
        <div class="container header-container">
            <div class="logo" style="cursor: pointer;" onclick="window.location.href='#home'">
                <div class="logo-icon" style="font-size: 2rem; display: flex; align-items: center;">
                    <img src="assets/images/logocapt.png" alt="Capt Leads" height="100" style="display: block;">
                </div>
                <span class="logo-text">Capt<span class="logo-highlight"> Leads</span></span>
            </div>
            <nav>
                <ul class="nav-links">
                    <li><a href="#home">Início</a></li>
                    <li><a href="#solucoes">Soluções</a></li>
                    <li><a href="#sobre">Sobre</a></li>
                    <li><a href="#como-funciona">Como funciona</a></li>
                    <!--<li><a href="#beneficios">Benefícios</a></li>-->
                    <li class="nav-dropdown">
                        <button class="dropbtn" id="actionMenuBtn">
                            <i class="fas fa-bars"></i> Saiba Mais
                            <i class="fas fa-chevron-down"></i>
                        </button>
                        <ul class="dropdown-content" id="actionDropdown">
                            <li><a href="#contato" class="nav-cta">Solicitar demo</a></li>
                            <li><a href="https://admin.captleads.com.br" target="_blank" class="btn-demo">Acesse o sistema</a></li>
                            <li><a href="#" id="btnMidiaKit" class="btn-demo">Download Mídia kit</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="mobile-menu">
                    <i class="fas fa-bars"></i>
                </div>
            </nav>
        </div>
    </header>

    <section id="home" class="hero">
        <div class="container hero-container">
            <div class="hero-content" data-aos="fade-up" data-aos-duration="1000">
                <div class="hero-badge">
                    <i class="fas fa-chart-line"></i> +350% de captura de leads
                </div>
                <h1>Sua marca em <span class="highlight-teal">movimento</span> através de <span class="highlight-teal">telas interativas</span></h1>
        
            <div class="hero-buttons">
                    <a href="#contato" class="btn btn-primary btn-glow">
                        <i class="fas fa-rocket"></i> Solicitar demonstração
                    </a>
                </div>
                <div class="hero-solutions" style="cursor: pointer;">
                    <div class="solution-tag"><i class="fas fa-car-side"></i><span>Veículos por app</span></div>
                    <div class="solution-tag"><i class="fas fa-elevator"></i><span>Telas em elevadores</span></div>
                    <div class="solution-tag"><i class="fas fa-tv"></i><span>TV Corporativa</span></div>
                    <div class="solution-tag"><i class="fas fa-chalkboard-user"></i><span>Totens interativos</span></div>
                    <div class="solution-tag"><i class="fas fa-clock"></i><span>Sistema de filas</span></div>
                </div>
            </div>
            <div class="hero-visual" data-aos="fade-left" data-aos-duration="1000">
                <div class="video-container">
                    <video autoplay muted loop playsinline preload="auto" class="hero-video">
                        <source src="assets/videos/loop.mp4" type="video/mp4">
                        Seu navegador não suporta vídeos.
                    </video>
                </div>
                <div class="stat-card stat-card-2">
                    <div class="stat-icon"><i class="fas fa-chart-line"></i></div>
                    <div class="stat-info">
                        <span class="stat-value">342%</span>
                        <span class="stat-label">Aumento em vendas</span>
                    </div>
                </div>
                <div class="stat-card stat-card-3">
                    <div class="stat-icon"><i class="fas fa-clock"></i></div>
                    <div class="stat-info">
                        <span class="stat-value">24/7</span>
                        <span class="stat-label">Captura contínua</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="solucoes" class="solucoes">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <div class="badge-orange">Soluções completas</div>
                <h2>Sua marca aparece. <span class="orange">Seus leads são capturados</span> automaticamente.</h2>
                <p>Ative campanhas inteligentes em múltiplas plataformas</p>
            </div>
            <div class="solucoes-grid">
                <!-- Mídia em veículos -->
                <div class="solucao-card" data-aos="zoom-in">
                    <img src="assets/images/solucoes/veiculos-app.png" alt="Mídia em veículos por app" loading="lazy">
                    <div class="card-content">
                        <h3>Mídia em veículos por app</h3>
                        <p>Alcance pessoas em movimento com campanhas dinâmicas e segmentadas em apps de transporte.</p>
                        <div class="card-features">
                            <span>Geo-localização</span>
                            <span>Segmentação</span>
                            <span>Alta conversão</span>
                        </div>
                        <a href="#contato" class="card-link">Quero saber mais <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- Telas em elevadores -->
                <div class="solucao-card" data-aos="zoom-in">
                    <img src="assets/images/solucoes/elevadores.png" alt="Telas em elevadores" loading="lazy">
                    <div class="card-content">
                        <h3>Telas em elevadores</h3>
                        <p>Transforme o tempo de deslocamento vertical em oportunidade de comunicação de alto impacto.</p>
                        <div class="card-features">
                            <span>Alta circulação</span>
                            <span>Tempo cativo</span>
                            <span>Conteúdo dinâmico</span>
                        </div>
                        <a href="#contato" class="card-link">Quero saber mais <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- Totens interativos -->
                <div class="solucao-card" data-aos="zoom-in">
                    <img src="assets/images/solucoes/totens.png" alt="Totens interativos" loading="lazy">
                    <div class="card-content">
                        <h3>Totens interativos personalizados</h3>
                        <p>Perfeitos para eventos, pontos de venda e ativações de marca. Experiência única que captura leads.</p>
                        <div class="card-features">
                            <span>Customização total</span>
                            <span>Gamificação</span>
                            <span>Dados em tempo real</span>
                        </div>
                        <a href="#contato" class="card-link">Quero saber mais <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- Sistema de filas -->
                <div class="solucao-card" data-aos="zoom-in">
                    <img src="assets/images/solucoes/filas.png" alt="Gestão de filas" loading="lazy">
                    <div class="card-content">
                        <h3>Sistema de gestão de filas e atendimento</h3>
                        <p>Organize seu fluxo, reduza espera, melhore a experiência do cliente e capture leads durante o processo.</p>
                        <div class="card-features">
                            <span>Redução de espera</span>
                            <span>Relatórios completos</span>
                            <span>Automação</span>
                        </div>
                        <a href="#contato" class="card-link">Quero saber mais <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- TV Corporativa -->
                <div class="solucao-card" data-aos="zoom-in">
                    <img src="assets/images/solucoes/tv-corporativa.png" alt="TV corporativa" loading="lazy">
                    <div class="card-content">
                        <h3>TV corporativa / Digital signage</h3>
                        <p>Comunique, engaje e informe com controle total do conteúdo exibido em múltiplas telas.</p>
                        <div class="card-features">
                            <span>Gestão remota</span>
                            <span>Programação inteligente</span>
                            <span>QR Code interativo</span>
                        </div>
                        <a href="#contato" class="card-link">Quero saber mais <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="sobre" class="sobre">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <div class="badge-orange">Quem somos</div>
                <h2>Marketing <span class="orange">inteligente</span> + Tecnologia</h2>
                <p>Mais visibilidade. Mais interação. Mais resultados.</p>
            </div>
            <div class="sobre-grid">
                <div class="sobre-texto" data-aos="fade-right">
                    <p style="font-size: 1.1rem; margin-bottom: 24px;">A <strong>Capt Leads</strong> é uma empresa de
                        tecnologia que conecta sua marca ao público certo por meio de experiências interativas que
                        capturam dados instantaneamente onde as pessoas estão.</p>
                    <div class="feature-item">
                        <div class="feature-icon bounce-animation">
                            <i class="fas fa-mobile-alt"></i>
                        </div>
                        <div>
                            <h3>Mobilidade</h3>
                            <p>Campanhas que alcançam pessoas onde elas estão - em movimento, em eventos, em pontos
                                físicos</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon bounce-animation">
                            <i class="fas fa-bolt"></i>
                        </div>
                        <div>
                            <h3>Captura em tempo real</h3>
                            <p>Dados coletados e disponibilizados instantaneamente para sua equipe comercial</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon bounce-animation">
                            <i class="fas fa-database"></i>
                        </div>
                        <div>
                            <h3>Integração de dados</h3>
                            <p>API completa para integração com seu CRM e ferramentas de automação</p>
                        </div>
                    </div>
                </div>
                <div class="sobre-imagem" data-aos="fade-left">
                    <div class="video-wrapper">
                        <video autoplay muted loop playsinline preload="auto" class="sobre-video">
                            <source src="assets/videos/loop2.mp4" type="video/mp4">
                            Seu navegador não suporta vídeos.
                        </video>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="clientes">
        <div class="container">
            <div class="clientes-header" data-aos="fade-up">
                <div class="badge-orange">Parceiros de confiança</div>
                <h2>Empresas que <span class="orange">confiam</span> na Capt Leads</h2>
                <p>Tecnologia de ponta que impulsiona negócios de todos os segmentos</p>
            </div>

            <div class="clientes-carrossel-infinito">
                <div class="carrossel-track">
                    <div class="logo-item">
                        <img src="assets/images/santaluzia.png" alt="Hospital Santa Luzia">
                        <span class="logo-nome">Hospital Santa Luzia</span>
                        <span class="logo-descricao">Saúde & Bem-estar</span>
                    </div>
                    <div class="logo-item">
                        <img src="assets/images/mercadolivre.png" alt="Mercado Livre">
                        <span class="logo-nome">Mercado Livre</span>
                        <span class="logo-descricao">E-commerce & Varejo</span>
                    </div>
                    <div class="logo-item">
                        <img src="assets/images/unopar.png" alt="Unopar">
                        <span class="logo-nome">Unopar</span>
                        <span class="logo-descricao">Educação & Tecnologia</span>
                    </div>
                    <div class="logo-item">
                        <img src="assets/images/anhanguera.png" alt="Anhanguera">
                        <span class="logo-nome">Anhanguera</span>
                        <span class="logo-descricao">Educação Superior</span>
                    </div>
                    <div class="logo-item">
                        <img src="assets/images/fontesdosol.png" alt="Fontes do Sol">
                        <span class="logo-nome">Fontes do Sol</span>
                        <span class="logo-descricao">Energia Solar</span>
                    </div>
                    <div class="logo-item">
                        <img src="assets/images/hardworkfilms.png" alt="Hard Work Films">
                        <span class="logo-nome">Hard Work Films</span>
                        <span class="logo-descricao">Produção Audiovisual</span>
                    </div>
                    <div class="logo-item">
                        <img src="assets/images/novarota.png" alt="Nova Rota">
                        <span class="logo-nome">Nova Rota</span>
                        <span class="logo-descricao">Logística & Transporte</span>
                    </div>
                    <div class="logo-item">
                        <img src="assets/images/petrodart.png" alt="Petro Dart">
                        <span class="logo-nome">Petro Dart</span>
                        <span class="logo-descricao">Petróleo & Gás</span>
                    </div>
                    <div class="logo-item">
                        <img src="assets/images/skate.png" alt="Skate Wear">
                        <span class="logo-nome">Skate Wear</span>
                        <span class="logo-descricao">Esportes & Lifestyle</span>
                    </div>
                    <div class="logo-item">
                        <img src="assets/images/santaluzia.png" alt="Hospital Santa Luzia">
                        <span class="logo-nome">Hospital Santa Luzia</span>
                        <span class="logo-descricao">Saúde & Bem-estar</span>
                    </div>
                    <div class="logo-item">
                        <img src="assets/images/mercadolivre.png" alt="Mercado Livre">
                        <span class="logo-nome">Mercado Livre</span>
                        <span class="logo-descricao">E-commerce & Varejo</span>
                    </div>
                    <div class="logo-item">
                        <img src="assets/images/unopar.png" alt="Unopar">
                        <span class="logo-nome">Unopar</span>
                        <span class="logo-descricao">Educação & Tecnologia</span>
                    </div>
                    <div class="logo-item">
                        <img src="assets/images/anhanguera.png" alt="Anhanguera">
                        <span class="logo-nome">Anhanguera</span>
                        <span class="logo-descricao">Educação Superior</span>
                    </div>
                    <div class="logo-item">
                        <img src="assets/images/fontesdosol.png" alt="Fontes do Sol">
                        <span class="logo-nome">Fontes do Sol</span>
                        <span class="logo-descricao">Energia Solar</span>
                    </div>
                    <div class="logo-item">
                        <img src="assets/images/hardworkfilms.png" alt="Hard Work Films">
                        <span class="logo-nome">Hard Work Films</span>
                        <span class="logo-descricao">Produção Audiovisual</span>
                    </div>
                    <div class="logo-item">
                        <img src="assets/images/novarota.png" alt="Nova Rota">
                        <span class="logo-nome">Nova Rota</span>
                        <span class="logo-descricao">Logística & Transporte</span>
                    </div>
                    <div class="logo-item">
                        <img src="assets/images/petrodart.png" alt="Petro Dart">
                        <span class="logo-nome">Petro Dart</span>
                        <span class="logo-descricao">Petróleo & Gás</span>
                    </div>
                    <div class="logo-item">
                        <img src="assets/images/skate.png" alt="Skate Wear">
                        <span class="logo-nome">Skate Wear</span>
                        <span class="logo-descricao">Esportes & Lifestyle</span>
                    </div>
                </div>
            </div>

            <div class="clientes-footer" data-aos="fade-up" data-aos-delay="200">
                <div class="trust-badge">
                    <i class="fas fa-shield-alt"></i>
                    <span>Mais de 500 campanhas realizadas com sucesso</span>
                </div>
            </div>
        </div>
    </div>

    <section id="como-funciona" class="como-funciona">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <div class="badge-orange">Simples, rápido e eficiente</div>
                <h2>Como <span class="orange">funciona</span></h2>
                <p>Em 4 passos, sua campanha está no ar gerando leads qualificados</p>
            </div>
            <div class="funciona-grid">
                <div class="funciona-card" data-aos="flip-left">
                    <div class="funciona-number">01</div>
                    <div class="funciona-icon"><i class="fas fa-display"></i></div>
                    <h3>Exibição da campanha</h3>
                    <p>Sua campanha é exibida em telas estratégicas - veículos por app, totens, TVs corporativas</p>
                </div>
                <div class="funciona-card" data-aos="flip-left" data-aos-delay="100">
                    <div class="funciona-number">02</div>
                    <div class="funciona-icon"><i class="fas fa-fingerprint"></i></div>
                    <h3>Interação do usuário</h3>
                    <p>O público interage com a experiência através de QR Code, gamificação ou formulário integrado</p>
                </div>
                <div class="funciona-card" data-aos="flip-left" data-aos-delay="200">
                    <div class="funciona-number">03</div>
                    <div class="funciona-icon"><i class="fas fa-database"></i></div>
                    <h3>Captura dos dados</h3>
                    <p>Os dados são capturados em tempo real e armazenados na nossa plataforma</p>
                </div>
                <div class="funciona-card" data-aos="flip-left" data-aos-delay="300">
                    <div class="funciona-number">04</div>
                    <div class="funciona-icon"><i class="fas fa-envelope-open-text"></i></div>
                    <h3>Entrega dos leads</h3>
                    <p>Você recebe leads qualificados prontos para conversão via CRM, API ou e-mail</p>
                </div>
            </div>
        </div>
    </section>

    <section id="contato" class="contato">
        <div class="container contato-container">
            <div class="contato-info" data-aos="fade-right">
                <div class="badge-orange" style="background: rgba(16,185,129,0.15);">Fale com um especialista</div>
                <h2>Preencha o formulário <span class="orange"></span></h2>
                <p>Descubra como aplicar essa tecnologia no seu negócio.</p>
                <div class="info-item">
                    <i class="fab fa-whatsapp"></i>
                    <span>(71) 99717-2077</span>
                </div>
                <div class="info-item">
                    <i class="fas fa-envelope"></i>
                    <span>contato.captleads@gmail.com</span>
                </div>
                <div class="info-item">
                    <i class="fas fa-clock"></i>
                    <span>Atendimento: Seg-Sex, 8h às 18h</span>
                </div>
                <div class="social-links">
                    <a href="https://www.tiktok.com/@captleads?_r=1&_t=ZS-96Cuudq517d&utm_source=website&utm_medium=social&utm_campaign=footer_contact" target="_blank" rel="noopener noreferrer" aria-label="TikTok"><i class="fab fa-tiktok"></i></a>
                    <a href="https://www.instagram.com/captleads/" target="_blank" rel="noopener noreferrer" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                    <a href="javascript:void(0)" style="cursor: pointer;" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    <a href="javascript:void(0)" style="cursor: pointer;" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
            <div id="contatoform" class="contato-form">
                <h3>Solicitar contato comercial</h3>

                <form id="leadFormSecure">
                    <div class="form-group">
                        <input type="text" id="nome" name="nome" placeholder="Nome completo" required>
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="form-group">
                        <input type="email" id="email" name="email" placeholder="E-mail corporativo" required>
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="form-group">
                        <input type="tel" id="whatsapp" name="whatsapp" placeholder="WhatsApp" required>
                        <i class="fab fa-whatsapp"></i>
                    </div>
                    <div class="form-group">
                        <input type="text" id="empresa" name="empresa" placeholder="Empresa">
                        <i class="fas fa-building"></i>
                    </div>
                    <div class="form-group">
                        <select id="solucao" name="solucao" required>
                            <option value="">Qual solução te interessa?</option>
                            <option>Mídia em veículos por app</option>
                            <option>Totens interativos personalizados</option>
                            <option>Sistema de gestão de filas</option>
                            <option>TV corporativa / Digital signage</option>
                            <option>Telas em elevadores</option>
                            <option>Todas as soluções</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block btn-glow">
                        <i class="fas fa-paper-plane"></i> Enviar mensagem
                    </button>
                    <p class="form-note"><i class="fas fa-lock"></i> Seus dados estão seguros. Respondemos em até 24h.</p>
                </form>

                <div id="formFeedback" style="display: none; margin-top: 20px; padding: 15px; border-radius: 12px; text-align: center;"></div>
            </div>
        </div>
    </section>

    <section class="blog" id="blog">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <div class="badge-orange">Conteúdo exclusivo</div>
                <h2>Insights para <span class="orange">impulsionar</span> seus resultados</h2>
                <p>Marketing digital, mídia OOH, geração de leads e experiência do consumidor</p>
            </div>
            <div class="blog-grid">
                <div class="blog-card" data-aos="fade-up">
                    <div class="blog-image"><i class="fas fa-chart-line"></i></div>
                    <div class="blog-category">Marketing Digital</div>
                    <h3>Como aumentar a conversão de leads em 300%</h3>
                    <p>Estratégias comprovadas para transformar visitantes em clientes e aumentar sua taxa de conversão de leads...</p>
                    <a href="blog/artigo-conversao-leads.html" class="card-link">Ler artigo <i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="blog-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="blog-image"><i class="fas fa-chart-simple"></i></div>
                    <div class="blog-category">Mídia OOH</div>
                    <h3>O poder da mídia em veículos por app</h3>
                    <p>Como alcançar seu público em movimento com alta segmentação e capturar leads qualificados...</p>
                    <a href="blog/artigo-midia-veiculos-app.html" class="card-link">Ler artigo <i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="blog-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="blog-image"><i class="fas fa-gamepad"></i></div>
                    <div class="blog-category">Experiência do Consumidor</div>
                    <h3>Gamificação: a chave para engajar e capturar leads</h3>
                    <p>Como elementos de jogos aumentam a interação e conversão de leads com experiências interativas...</p>
                    <a href="blog/artigo-gamificacao-captura-leads.html" class="card-link">Ler artigo <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>

    <div class="cta-final">
        <div class="container cta-container">
            <div class="cta-content">
                <h2>Pronto para <span class="orange">transformar telas em oportunidades</span>?</h2>
                <p>Fale com um especialista e descubra o potencial de captura para sua empresa</p>
                <div class="cta-buttons">
                    <a href="https://wa.me/5571997172077" target="_blank" class="btn btn-outline-white">
                        <i class="fab fa-whatsapp"></i> Falar no WhatsApp
                    </a>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="container">
            <div class="footer-content">

                <div class="footer-logo">

                    <div class="logo-header">
                        <img src="assets/images/logocapt.png" alt="Capt Leads">

                        <h3>
                            Capt <span>Leads</span>
                        </h3>
                    </div>

                    <p class="footer-description">
                        Tecnologia, mídia e performance trabalhando juntas para impulsionar seus resultados.
                    </p>

                    <p class="tagline">
                        Sua marca em movimento. Leads em tempo real.
                    </p>

                </div>
                <div class="footer-links">
                    <h4>Mapa do site</h4>
                    <ul>
                        <li><a href="#home">Início</a></li>
                        <li><a href="#sobre">Soluções</a></li>
                        <li><a href="#solucoes">Sobre</a></li>
                        <li><a href="#como-funciona">Como funciona</a></li>
                        
                    </ul>
                </div>
               
                <div class="footer-links">
                    <h4>Contato</h4>
                    <ul>
                        <li><a href="mailto:contato.captleads@gmail.com">contato.captleads@gmail.com</a></li>
                        <li><a href="tel:+5571997172077">(71) 99717-2077</a></li>
                        <li><a href="#contato">Fale conosco</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2026 Capt Leads - Todos os direitos reservados</p>
                <p class="heart">Transformando telas em oportunidades <i class="fas fa-heart"></i></p>
            </div>
        </div>
    </footer>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="js/main.js"></script>

    <!-- EmailJS SDK -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"></script>



    <div id="midiaKitDropdown" class="midia-kit-dropdown" style="display: none;">
        <div class="midia-kit-menu">
            <h4>Escolha seu Mídia Kit</h4>
            <ul>
                <li><a href="assets/midiakit/Mídia Kit In Car.pdf" download> Mídia Kit In Car (Veículos por app)</a></li>
                <li><a href="assets/midiakit/Mídia Kit TV Corporativa.pdf" download> Mídia Kit TV Corporativa</a></li>
                <li><a href="assets/midiakit/Mídia Kit Totens.pdf" download> Mídia Kit Totens Interativos</a></li>
            </ul>
            <button id="fecharMidiaKit" class="fechar-btn">Fechar</button>
        </div>
    </div>


    <a href="https://wa.me/5571997172077" class="whatsapp-float" target="_blank" rel="noopener noreferrer">
        <i class="fab fa-whatsapp"></i>
        <div class="whatsapp-mascote">
            <img src="assets/images/mascote.png" alt="Mascote Capt Leads" class="mascote-img">
            <span class="mascote-texto">Olá, tudo bem?</span>
        </div>
    </a>

    <!-- Cookie Consent Banner -->
    <div id="cookieConsent" class="cookie-consent" style="display: none;">
        <div class="cookie-content">
            <div class="cookie-text">
                <i class="fas fa-cookie-bite"></i>
                <p>Utilizamos cookies para melhorar sua experiência, analisar tráfego e personalizar conteúdo. Ao continuar navegando, você concorda com nossa <a href="#">Política de Privacidade</a>.</p>
            </div>
            <div class="cookie-buttons">
                <button id="acceptCookies" class="cookie-btn accept">Aceitar todos</button>
                <button id="rejectCookies" class="cookie-btn reject">Recusar</button>
            </div>
        </div>
    </div>


</body>

</html>