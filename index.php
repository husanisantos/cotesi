<!doctype html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="theme-color" content="#ffa401" />
  <title>COTESI - Congresso de Tecnologia e Sistemas da Informação</title>
  <meta name="author" content="Husani Santos">
  <meta name="description" content="">
  <meta name="keywords" content="cotesi, ifsp, votuporanga">
  <!-- SOCIAL MEDIA META -->
  <meta property="og:description" content="COTESI - Congresso de Tecnologia e Sistemas da Informação">
  <meta property="og:image" content="">
  <meta property="og:site_name" content="COTESI">
  <meta property="og:title" content="Cotesi">
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://cotesi.vtp.ifsp.edu.br">
  <!-- TWITTER META -->
  <meta name="twitter:card" content="">
  <meta name="twitter:site" content="@cotesi">
  <meta name="twitter:creator" content="@Cotesi">
  <meta name="twitter:title" content="Cotesi">
  <meta name="twitter:description" content="COTESI - Congresso de Tecnologia e Sistemas da Informação">
  <meta name="twitter:image" content="">
  <!-- FAVICON FILES -->

  <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
  <meta http-equiv="Pragma" content="no-cache" />
  <meta http-equiv="Expires" content="0" />
  <link href="ico/favicon.png" rel="shortcut icon">
  <!-- CSS FILES -->
  <link rel="stylesheet" href="css/fontawesome.min.css">
  <link rel="stylesheet" href="css/swiper.min.css">
  <link rel="stylesheet" href="css/fancybox.min.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css?ver=<?= filemtime( __DIR__ . '/css/style.css') ?>">
</head>

<body>
  <div class="preloader">
    <div class="inner">
      <figure>
        <img src="images/preloader.png" alt="Image">
      </figure>
      <div class="percentage" id="percentage">0</div>
    </div>
    <!-- end inner -->
    <div class="loader-progress" id="loader-progress"></div>
    <!-- end loader-progress -->
    <svg viewBox="0 0 1920 1080" preserveAspectRatio="none" version="1.1">
      <path d="M-4.5,1080H1920V0H0c-10.2,134.8,0.1,311.5,0,541C-0.1,769.5,0,948-4.5,1080z"></path>
    </svg>
  </div>
  <!-- end preloader -->
  <div class="page-transition">
    <svg viewBox="0 0 1920 1080" preserveAspectRatio="none" version="1.1">
      <path d="M540,1080H0V0h540c-40.28,124.78-85.13,311.48-85,541C455.13,769.53,499.81,955.48,540,1080z"></path>
    </svg>
  </div>
  <!-- end page-transition -->
  <div class="smooth-scroll">
    <aside class="mobile-menu">
      <svg viewBox="0 0 600 1080" preserveAspectRatio="none" version="1.1">
        <path d="M540,1080H0V0h540c0,179.85,0,359.7,0,539.54C540,719.7,540,899.85,540,1080z"></path>
      </svg>
      <div class="inner">
        <div class="site-menu">
          <ul>
            <li>
              <a href="#eventos" data-scroll-to>Eventos</a>
            </li>
          </ul>
        </div>
        <!-- end site-menu -->
      </div>
      <!-- end inner -->
    </aside>
    <!-- end mobile-menu -->
    <nav class="navbar" id="navbar">
      <div class="container">
        <div class="logo">
          <a href="index.html">
            <img src="images/logo-bsi.png" alt="Image">
            <img src="images/logo.png" alt="Image">
          </a>
        </div>
        <!-- end logo -->
        <div class="site-menu"></div>
        <!-- end site-menu -->
        
        <div class="navbar-button">
          <a href="#eventos" data-scroll-to>
            <figure>
              <img src="images/icon-navbar-button.png" alt="Image">
            </figure> Eventos
          </a>
        </div>
        <!-- end navbar-button -->
      </div>
      <!-- end container -->
    </nav>
    <!-- end navbar -->
    <div class="section-wrapper" data-scroll-section>
      <section class="slider">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <div class="events-slider-content">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <div class="inner">
                      <div class="date">
                        <figure>
                          <img src="images/icon-date.svg" alt="Image">
                        </figure>
                        <span>30 de Setembro - 8:00</span>
                      </div> 
                      <!-- end date -->
                      <h2>Como ser um líder e como os líderes inpiram...</h2>
                      <a href="https://suap.ifsp.edu.br/eventos/inscricao_publica/1637/" target="_blank" class="slider-button">
                        <span class="circle" aria-hidden="true">
                          <span class="icon arrow"></span>
                        </span>
                        <span class="button-text">INSCREVA-SE</span>
                      </a>
                      <div class="location">
                        <div class="icon">
                          <img src="images/icon-location.svg" alt="Image">
                        </div>
                        <span>IFSP - VOTUPORANGA</span>
                      </div>
                      <!-- end location -->
                    </div>
                    <!-- end inner -->
                  </div>
                  <!-- end swiper-slide -->
                </div>
                <!-- end swiper-wrapper -->
              </div>
              <!-- end events-slider-content -->
            </div>
            <!-- end col-6 -->
            <div class="col-lg-6">
              <div class="events-slider-images">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <div class="slide-image" data-background="images/slide-image01.jpg"></div>
                  </div>
                  <!-- end swiper-slide -->
                </div>
                <!-- end swiper-wrapper --> 
                <div class="button-prev">
                  <span class="icon arrow"></span>
                </div>
                <div class="button-next">
                  <span class="icon arrow"></span>
                </div>
              </div>
              <!-- end events-slider-content -->
            </div>
            <!-- end col-6 -->
          </div>
          <!-- end row -->
        </div>
        <!-- end container -->
      </section>
      <!-- end slider -->
      <section class="content-section">
        <!-- end section-bg -->
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-8">
              <div data-scroll data-scroll-speed="-0.5">
                <div class="side-content left">
                  <h6>VENHA CONHECER</h6>
                  <h2>COTESI</h2>
                  <p>O VII Congresso de Tecnologia e Sistemas de Informação (COTESI) é um evento concebido pelo corpo
                    docente da área de informática do Câmpus Votuporanga. O COTESI é constituído por palestras,
                    minicursos e pela exposição de trabalhos realizada no Workshop de Iniciação Científica e Monografias
                    (WICM), que é um seminário integrado ao COTESI. Atualmente a Comissão Organizadora é composta por
                    representantes do corpo docente e discente dos cursos de graduação de Sistemas de Informação,
                    Análise e Desenvolvimento de Sistemas e do curso técnico em Informática, instituída pela portaria
                    nº. VTP.0067/2022, de 23 de agosto de 2022. Este evento tem como intuito complementar a formação
                    acadêmica dos alunos e discutir temas atuais da área da Tecnologia da Informação relacionados com o
                    Ensino, Pesquisa e Extensão, além de fatos e episódios recentes relacionados a aspectos
                    transversais, como Meio Ambiente & Sustentabilidade e Responsabilidade Social. O evento é gratuito e
                    aberto à comunidade.</p>
                  <a href="#eventos" data-scroll-to class="custom-button">
                    <span class="circle" aria-hidden="true">
                      <span class="icon arrow"></span>
                    </span>
                    <span class="button-text">AGENDA</span>
                  </a>
                </div>
                <!-- end side-content -->
              </div>
              <!-- end data-scroll -->
            </div>
            <!-- end col-6 -->
            <div class="col-lg-4">
              <div data-scroll data-scroll-speed="0.5">
                <figure class="side-image">
                  <img src="images/side-image01.png" alt="Image">
                </figure>
                <!-- end side-image -->
              </div>
              <!-- end data-scroll -->
            </div>
            <!-- end col-6 -->
          </div>
          <!-- end row -->
        </div>
        <!-- end container -->
      </section>
      <!-- end content-section -->
      <section class="content-section" data-background="#F6FAFB" id="eventos">
        <span class="section-bg" data-background="images/section-bg02.png" data-scroll data-scroll-speed="2"></span>
        <!-- end section-bg -->
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div data-scroll data-scroll-speed="-0.5">
                <div class="section-title">
                  <h6>AGENDA DE EVENTOS</h6>
                  <h2>Fique por dentro de <br> nossa agenda </h2>
                </div>
                <!-- end section-title -->
              </div>
              <!-- end data-scroll -->
            </div>
            <!-- end col-12 -->
            <div class="col-12">
              <div data-scroll data-scroll-speed="0.5">
                <div class="schedule-box">
                  <div class="nav">
                    <div data-bs-toggle="tab" data-bs-target="#tab-content01">
                      <span class="day">DIA 01</span>
                      <small class="date">26 DE SETEMBRO DE 2022</small>
                    </div>
                    <!-- tab-nav -->
                    <div data-bs-toggle="tab" data-bs-target="#tab-content02">
                      <span class="day">DIA 02</span>
                      <small class="date">27 DE SETEMBRO DE 2022</small>
                    </div>
                    <!-- tab-nav -->
                    <div data-bs-toggle="tab" data-bs-target="#tab-content03">
                      <span class="day">DIA 03</span>
                      <small class="date">28 DE SETEMBRO DE 2022</small>
                    </div>
                    <!-- tab-nav -->
                    <div data-bs-toggle="tab" data-bs-target="#tab-content04">
                      <span class="day">DIA 04</span>
                      <small class="date">29 DE SETEMBRO DE 2022</small>
                    </div>
                    <!-- tab-nav -->
                    <div class="active" data-bs-toggle="tab" data-bs-target="#tab-content05">
                      <span class="day">DIA 05</span>
                      <small class="date">30 DE SETEMBRO DE 2022</small>
                    </div>
                    <!-- tab-nav -->
                  </div>
                  <!-- end nav -->
                  <div class="tab-content">
                    <div class="tab-pane" id="tab-content01">
                      <div class="timeline">
                        <div class="event-time">
                          <img src="images/icon-time.svg" alt="Image">08:00 às 09:40 (Presencial)
                        </div>
                        <!-- end event-time -->
                        <div class="event-description">
                          <h5>Abertura COTESI</h5>
                          <p>Professores e Alunos Responsáveis</p>
                        </div>
                        <!-- end event-description -->
                      </div>
                      <!-- end timeline -->
                      <div class="timeline">
                        <div class="event-time">
                          <img src="images/icon-time.svg" alt="Image">10:00 às 11:40 (Presencial)
                        </div>
                        <!-- end event-time -->
                        <div class="event-description">
                          <h5>Educação Empreendedora</h5>
                          <p>Kleber Ricardo</p>
                          <p><b>Inscreva-se para garantir a emissão de seu certificado de participação:</b></p>

                          <!-- INICIO DO BOTÃO COM EFEITO -->
                          <div class="d-block w-100 mb-3">
                            <a href="https://suap.ifsp.edu.br/eventos/inscricao_publica/1612/" target="_blank" class="custom-button small">
                              <span class="circle" aria-hidden="true">
                                <span class="icon arrow"></span>
                              </span>
                              <span class="button-text">SUAP</span>
                            </a>
                          </div>
                          <!-- FIM DO BOTÃO COM EFEITO -->


                          <!-- INICIO DO BOTÃO COM EFEITO -->
                          <div class="d-block w-100 mb-3">
                            <a href="https://forms.office.com/r/EVfq4we3HM" target="_blank" class="custom-button small">
                              <span class="circle" aria-hidden="true">
                                <span class="icon arrow"></span>
                              </span>
                              <span class="button-text">SEBRAE</span>
                            </a>
                          </div>
                          <!-- FIM DO BOTÃO COM EFEITO -->

                        </div>
                        <!-- end event-description -->
                      </div>
                      <!-- end timeline -->
                    </div>
                    <!-- end tab-pane -->
                    <div class="tab-pane fade" id="tab-content02">
                      <div class="timeline">
                        <div class="event-time">
                          <img src="images/icon-time.svg" alt="Image">8:00 às 09:40 (Presencial)
                        </div>
                        <!-- end event-time -->
                        <div class="event-description">
                          <h5>Importância da Internet na Sociedade Atual</h5>
                          <p>Net Rubi</p>
                          
                          <!-- INICIO DO BOTÃO COM EFEITO -->
                           <div class="d-block w-100 mb-3">
                            <a href="https://suap.ifsp.edu.br/eventos/inscricao_publica/1640/" target="_blank" class="custom-button small">
                              <span class="circle" aria-hidden="true">
                                <span class="icon arrow"></span>
                              </span>
                              <span class="button-text">INSCREVA-SE</span>
                            </a>
                          </div>
                          
                        </div>
                        <!-- end event-description -->
                      </div>
                      <!-- end timeline -->
                      <div class="timeline">
                        <div class="event-time">
                          <img src="images/icon-time.svg" alt="Image">10:00 às 11:40 (Presencial)
                        </div>
                        <!-- end event-time -->
                        <div class="event-description">
                          <h5>Como conseguir o seu primeiro emprego em Infosec</h5>
                          <p>Lucas Gates</p>
                          
                          <!-- INICIO DO BOTÃO COM EFEITO -->
                           <div class="d-block w-100 mb-3">
                            <a href="https://suap.ifsp.edu.br/eventos/inscricao_publica/1641/" target="_blank" class="custom-button small">
                              <span class="circle" aria-hidden="true">
                                <span class="icon arrow"></span>
                              </span>
                              <span class="button-text">INSCREVA-SE</span>
                            </a>
                          </div>
                          
                        </div>
                        <!-- end event-description -->
                      </div>
                      <!-- end timeline -->

                      <div class="timeline">
                        <div class="event-time">
                          <img src="images/icon-time.svg" alt="Image">13:30 às 17:00 (Presencial)
                        </div>
                        <!-- end event-time -->
                        <div class="event-description">
                          <h5>Oficina</h5>
                          <p>Professores do IFSP</p>
                        </div>
                        <!-- end event-description -->
                      </div>

                    </div>
                    <!-- end event-description -->
                    <div class="tab-pane" id="tab-content03">
                      <div class="timeline">
                        <div class="event-time">
                          <img src="images/icon-time.svg" alt="Image">08:00 às 09:40 (Presencial)
                        </div>
                        <!-- end event-time -->
                        <div class="event-description">
                          <h5>Do zero à startup</h5>
                          <p>Talis Jonatas Gomes</p>

                           <!-- INICIO DO BOTÃO COM EFEITO -->
                           <div class="d-block w-100 mb-3">
                            <a href="https://suap.ifsp.edu.br/eventos/inscricao_publica/1608/" target="_blank" class="custom-button small">
                              <span class="circle" aria-hidden="true">
                                <span class="icon arrow"></span>
                              </span>
                              <span class="button-text">INSCREVA-SE</span>
                            </a>
                          </div>
                          <!-- FIM DO BOTÃO COM EFEITO -->

                        </div>
                        <!-- end event-description -->
                      </div>
                      <!-- end timeline -->
                      <div class="timeline">
                        <div class="event-time">
                          <img src="images/icon-time.svg" alt="Image">10:00 às 11:40 (Presencial)
                        </div>
                        <!-- end event-time -->
                        <div class="event-description">
                          <h5>Acessibilidade na Web</h5>
                          <p>Cristiane Paschoali Vidovix</p>

                           <!-- INICIO DO BOTÃO COM EFEITO -->
                           <div class="d-block w-100 mb-3">
                            <a href="https://suap.ifsp.edu.br/eventos/inscricao_publica/1610/" target="_blank" class="custom-button small">
                              <span class="circle" aria-hidden="true">
                                <span class="icon arrow"></span>
                              </span>
                              <span class="button-text">INSCREVA-SE</span>
                            </a>
                          </div>
                          <!-- FIM DO BOTÃO COM EFEITO -->

                        </div>
                        <!-- end event-description -->
                      </div>
                      <!-- end timeline -->
                      <div class="timeline">
                        <div class="event-time">
                          <img src="images/icon-time.svg" alt="Image">13:30 às 15:00 (Presencial)
                        </div>
                        <!-- end event-time -->
                        <div class="event-description">

                          <div class="meta">
                            <span class="cat">Minicurso</span>
                            <span class="vagas">30 Vagas</span>
                          </div>

                          <h5>Prática de Fusão de Fibra Óptica</h5>
                          <p>Net Rubi</p>

                          <!-- INICIO DO BOTÃO COM EFEITO -->
                          <div class="d-block w-100 mb-3">
                            <a href="https://suap.ifsp.edu.br/eventos/inscricao_publica/1716/" target="_blank" class="custom-button small">
                              <span class="circle" aria-hidden="true">
                                <span class="icon arrow"></span>
                              </span>
                              <span class="button-text">INSCREVA-SE</span>
                            </a>
                          </div>
                          <!-- FIM DO BOTÃO COM EFEITO -->

                        </div>
                        <!-- end event-description -->
                      </div>
                      <!-- end timeline -->

                      <div class="timeline">
                        <div class="event-time">
                          <img src="images/icon-time.svg" alt="Image">15:30 às 17:00 (Presencial)
                        </div>
                        <!-- end event-time -->
                        <div class="event-description">

                          <div class="meta">
                            <span class="cat">Minicurso</span>
                            <span class="vagas">30 Vagas</span>
                          </div>

                          <h5>Prática de Fusão de Fibra Óptica</h5>
                          <p>Net Rubi</p>
                          <!-- INICIO DO BOTÃO COM EFEITO -->
                          <div class="d-block w-100 mb-3">
                            <a href="https://suap.ifsp.edu.br/eventos/inscricao_publica/1717/" target="_blank" class="custom-button small">
                              <span class="circle" aria-hidden="true">
                                <span class="icon arrow"></span>
                              </span>
                              <span class="button-text">INSCREVA-SE</span>
                            </a>
                          </div>
                          <!-- FIM DO BOTÃO COM EFEITO -->

                        </div>
                        <!-- end event-description -->
                      </div>
                      <!-- end timeline -->
                      
                      <div class="timeline">
                        <div class="event-time">
                          <img src="images/icon-time.svg" alt="Image">19:00 às 20:40 (online)
                        </div>
                        <!-- end event-time -->
                        <div class="event-description">
                          <h5>Conceitos básicos de uma aplicação Android</h5>
                          <p>Ludmila Maschio</p>

                          <div class="row">
                            <div class="col-12 col-md-6 pt-4">
                              <!-- INICIO DO BOTÃO COM EFEITO -->
                              <div class="d-inline-block w-100 mb-2">
                                <a href="https://suap.ifsp.edu.br/eventos/inscricao_publica/1568/" target="_blank" class="custom-button small">
                                  <span class="circle" aria-hidden="true">
                                    <span class="icon arrow"></span>
                                  </span>
                                  <span class="button-text">INSCREVA-SE</span>
                                </a>
                              </div>
                              <!-- FIM DO BOTÃO COM EFEITO -->

                              <!-- INICIO DO BOTÃO COM EFEITO -->
                              <div class="d-inline-block w-100 mb-2">
                                <a href="https://meet.google.com/tqu-opez-vvi" target="_blank" class="custom-button small">
                                  <span class="circle" aria-hidden="true">
                                    <span class="icon arrow"></span>
                                  </span>
                                  <span class="button-text">SALA VIRTUAL</span>
                                </a>
                              </div>
                              <!-- FIM DO BOTÃO COM EFEITO -->
                            </div>

                            <div class="col-12 col-md-6 text-center mt-n3">
                              
                            </div>

                          </div>
                        </div>
                        <!-- end event-description -->
                      </div>
                      <!-- end timeline -->




                      <div class="timeline">
                        <div class="event-time">
                          <img src="images/icon-time.svg" alt="Image">20:55 às 22:35 (online)
                        </div>
                        <!-- end event-time -->
                        <div class="event-description">
                          <h5>Inteligência Artificial</h5>
                          <p>Hiago Brajato</p>

                          <div class="row">
                            <div class="col-12 col-md-6 pt-4">
                              <!-- INICIO DO BOTÃO COM EFEITO -->
                              <div class="d-inline-block w-100 mb-2">
                                <a href="https://suap.ifsp.edu.br/eventos/inscricao_publica/1611/" target="_blank" class="custom-button small">
                                  <span class="circle" aria-hidden="true">
                                    <span class="icon arrow"></span>
                                  </span>
                                  <span class="button-text">INSCREVA-SE</span>
                                </a>
                              </div>
                              <!-- FIM DO BOTÃO COM EFEITO -->

                              <!-- INICIO DO BOTÃO COM EFEITO -->
                              <div class="d-inline-block w-100 mb-2">
                                <a href="https://meet.google.com/tqu-opez-vvi" target="_blank" class="custom-button small">
                                  <span class="circle" aria-hidden="true">
                                    <span class="icon arrow"></span>
                                  </span>
                                  <span class="button-text">SALA VIRTUAL</span>
                                </a>
                              </div>
                              <!-- FIM DO BOTÃO COM EFEITO -->
                            </div>

                            <div class="col-12 col-md-6 text-center mt-n3">
                             
                            </div>

                          </div>
                        </div>
                        <!-- end event-description -->
                      </div>
                      <!-- end timeline -->
                    </div>
                    <!-- end tab-pane -->
                    <div class="tab-pane fade" id="tab-content04">
                      <div class="timeline">
                        <div class="event-time">
                          <img src="images/icon-time.svg" alt="Image">08:00 às 09:40 (Presencial)
                        </div>
                        <!-- end event-time -->
                        <div class="event-description">
                          <h5>Gêmeos Digitais: Aplicações Práticas</h5>
                          <p>João Falcão</p>

                          <!-- INICIO DO BOTÃO COM EFEITO -->
                          <div class="d-block w-100 mb-3">
                            <a href="https://suap.ifsp.edu.br/eventos/inscricao_publica/1607/" target="_blank" class="custom-button small">
                              <span class="circle" aria-hidden="true">
                                <span class="icon arrow"></span>
                              </span>
                              <span class="button-text">INSCREVA-SE</span>
                            </a>
                          </div>
                          <!-- FIM DO BOTÃO COM EFEITO -->

                        </div>
                        <!-- end event-description -->
                      </div>
                      <!-- end timeline -->

                      <div class="timeline">
                        <div class="event-time">
                          <img src="images/icon-time.svg" alt="Image">10:00 às 12:00 (Presencial)
                        </div>
                        <!-- end event-time -->
                        <div class="event-description">
                          <h5>O Impacto da Computação Quântica no Futuro da Computação Distribuída</h5>
                          <p>Professor Ricado Conde</p>

                          <!-- INICIO DO BOTÃO COM EFEITO -->
                          <div class="d-block w-100 mb-3">
                            <a href="https://suap.ifsp.edu.br/eventos/evento/1686/" target="_blank" class="custom-button small">
                              <span class="circle" aria-hidden="true">
                                <span class="icon arrow"></span>
                              </span>
                              <span class="button-text">INSCREVA-SE</span>
                            </a>
                          </div>
                          <!-- FIM DO BOTÃO COM EFEITO -->

                        </div>
                        <!-- end event-description -->
                      </div>
                      <!-- end timeline -->

                      <div class="timeline">
                        <div class="event-time">
                          <img src="images/icon-time.svg" alt="Image">13:30 às 14:00 (Presencial)
                        </div>
                        <!-- end event-time -->
                        <div class="event-description">
                          <h5>WICM - Projeto SiDAI (Sistema de Detecção e Alarme de Incêndios) - uma solução baseada em tecnologias da Internet das Coisas para comunicação de dados sem fio e baixo consumo de energia.</h5>
                          <p>Maria Luiza Tomaz Leal e Osvandre Alves Martins (GPCAA) - Apoio: Previne Incêndios Ltda.</p>
                        </div>
                        <!-- end event-description -->
                      </div>
                      <!-- end timeline -->
                      <div class="timeline">
                        <div class="event-time">
                          <img src="images/icon-time.svg" alt="Image">14:00 às 14:30 (Presencial)
                        </div>
                        <!-- end event-time -->
                        <div class="event-description">
                          <h5>WICM - Desenvolvimento de um dispositivo de vibração que auxilie a navegação de pessoas com deficiência visual.</h5>
                          <p>Gabriel Gonçalves Garcia e Natal Henrique Cordeiro</p>
                        </div>
                        <!-- end event-description -->
                      </div>
                      <!-- end timeline -->
                      <div class="timeline">
                        <div class="event-time">
                          <img src="images/icon-time.svg" alt="Image">14:30 às 15:00 (Presencial)
                        </div>
                        <!-- end event-time -->
                        <div class="event-description">
                          <h5>WICM - Projeto QUALIVNH-DVQPV - Soluções tecnológicas de apoio à verificação da qualidade de Válvulas Neurológicas para Hidrocefalia - Evolução de protótipos do DVQPV (Dispositivo de Verificação da Qualidade - Caracterísiticas de Pressão-Vazão.</h5>
                          <p>Miguel Marques Floriano e Osvandre Alves Martins (GPCAA) - Apoio: Ventura Biomédica Ltda.</p>
                        </div>
                        <!-- end event-description -->
                      </div>
                      <!-- end timeline -->
                      <div class="timeline">
                        <div class="event-time">
                          <img src="images/icon-time.svg" alt="Image">15:00 às 15:30 (Presencial)
                        </div>
                        <!-- end event-time -->
                        <div class="event-description">
                          <h5>WICM -Aplicação de Técnicas de Visão Computacional para inspeção de defeitos na superfície de chapas laminadas de aço no processo produtivo industrial.</h5>
                          <p>João Batista Lino e Natal Henrique Cordeiro</p>
                        </div>
                        <!-- end event-description -->
                      </div>
                      <!-- end timeline -->
                      <div class="timeline">
                        <div class="event-time">
                          <img src="images/icon-time.svg" alt="Image">15:30 às 16:00 (Presencial)
                        </div>
                        <!-- end event-time -->
                        <div class="event-description">
                          <h5>WICM - GPCAA (Grupo de Pesquisa em Computação Aplicada à Automação) - Projetos de Pesquisa, Desenvolvimento e Inovação envolvendo automação e robótica com possibilidade de atuação de alunos como bolsista ou para TCC.</h5>
                          <p>Prof. Dr. Osvandre Alves Martins (GPCAA)</p>
                        </div>
                        <!-- end event-description -->
                      </div>
                      <!-- end timeline -->
                      <div class="timeline">
                        <div class="event-time">
                          <img src="images/icon-time.svg" alt="Image">16:00 às 16:30 (Presencial)
                        </div>
                        <!-- end event-time -->
                        <div class="event-description">
                          <h5>WICM - Sistema de classificação de queimadas em florestas usando imagens aéreas de pequeno formato</h5>
                        </div>
                        <!-- end event-description -->
                      </div>
                      <!-- end timeline -->
                      <div class="timeline">
                        <div class="event-time">
                          <img src="images/icon-time.svg" alt="Image">19:00 às 20:30 (Online)
                        </div>
                        <!-- end event-time -->
                        <div class="event-description">
                          <h5>COTESI - Sonhe, planeje execute e persista!</h5>
                          <p>Marcelo Daniel</p>

                          <!-- INICIO DO BOTÃO COM EFEITO -->
                          <div class="d-block w-100 mb-3">
                            <a href="https://suap.ifsp.edu.br/eventos/inscricao_publica/1741/" target="_blank" class="custom-button small">
                              <span class="circle" aria-hidden="true">
                                <span class="icon arrow"></span>
                              </span>
                              <span class="button-text">INSCREVA-SE</span>
                            </a>
                          </div>
                          <!-- FIM DO BOTÃO COM EFEITO -->

                          <!-- INICIO DO BOTÃO COM EFEITO -->
                          <div class="d-block w-100 mb-3">
                            <a href=" https://meet.google.com/gjy-azos-thi" target="_blank" class="custom-button small">
                              <span class="circle" aria-hidden="true">
                                <span class="icon arrow"></span>
                              </span>
                              <span class="button-text">SALA VIRTUAL</span>
                            </a>
                          </div>
                          <!-- FIM DO BOTÃO COM EFEITO -->

                        </div>
                        <!-- end event-description -->   

                      </div>
                      <!-- end timeline -->
                    </div>
                    <!-- end timeline -->
                    <div class="tab-pane fade show active" id="tab-content05">
                      <div class="timeline">
                        <div class="event-time">
                          <img src="images/icon-time.svg" alt="Image">8:00 às 09:40 (Presencial)
                        </div>
                        <!-- end event-time -->
                        <div class="event-description">
                          <h5>Como ser um líder e como os líderes inpiram todos por suas ações</h5>
                          <p>Anderson Cleiton da Silva</p>
                          
                          <!-- INICIO DO BOTÃO COM EFEITO -->
                           <div class="d-block w-100 mb-3">
                            <a href="https://suap.ifsp.edu.br/eventos/inscricao_publica/1637/" target="_blank" class="custom-button small">
                              <span class="circle" aria-hidden="true">
                                <span class="icon arrow"></span>
                              </span>
                              <span class="button-text">INSCREVA-SE</span>
                            </a>
                          </div>
                          
                        </div>
                        <!-- end event-description -->
                      </div>
                      <!-- end timeline -->
                      <div class="timeline">
                        <div class="event-time">
                          <img src="images/icon-time.svg" alt="Image">10:00 às 11:40 (Presencial)
                        </div>
                        <!-- end event-time -->
                        <div class="event-description">
                          <h5>Carreira e Tecnologia para Estudantes e Profissionais</h5>
                          <p>Campus Party Na Estada</p>
                          
                          <!-- INICIO DO BOTÃO COM EFEITO -->
                           <div class="d-block w-100 mb-3">
                            <a href="https://suap.ifsp.edu.br/eventos/inscricao_publica/1639/" target="_blank" class="custom-button small">
                              <span class="circle" aria-hidden="true">
                                <span class="icon arrow"></span>
                              </span>
                              <span class="button-text">INSCREVA-SE</span>
                            </a>
                          </div>
                          
                        </div>
                        <!-- end event-description -->
                      </div>
                      <!-- end timeline -->
                    </div>
                    <!-- end event-description -->
                  </div>
                  <!-- end tab-content -->
                </div>
                <!-- end schedule-box -->
              </div>
              <!-- end data-scroll -->
            </div>
            <!-- end col-12 -->
          </div>
          <!-- end row -->
        </div>
        <!-- end container -->
      </section>
      <!-- end content-section -->
      <section class="content-section">
        <div class="section-bg" data-background="images/section-bg02.png" data-scroll data-scroll-speed="1"></div>
        <!-- end section-bg -->
        <div class="container">
          <div class="row justify-content-center text-center">
            <div class="col-12">
              <div data-scroll data-scroll-speed="0.5">
                <div class="section-title text-center">
                  <figure>
                    <img src="images/title-shape.png" alt="Image">
                  </figure>
                  <h6>ACREDITAM NA EDUCAÇÃO</h6>
                  <h2>APOIADORES</h2>
                </div>
                <!-- end section-title -->
              </div>
              <!-- end data-scroll -->
            </div>
            <!-- end col-12 -->

            <div class="col-md col-6">
              <div>
                <div class="sponsors">
                  <img src="/images/logo01.jpg" alt="Image">
                </div>
                <!-- end sponsor-logo -->
              </div>
              <!-- end data-scroll -->
            </div>
            <!-- end col-2 -->
            <div class="col-md col-6">
              <div>
                <div class="sponsors">
                  <img src="/images/logo02.jpg" alt="Image">
                </div>
                <!-- end sponsor-logo -->
              </div>
              <!-- end data-scroll -->
            </div>
            <!-- end col-2 -->
            <div class="col-md col-6">
              <div>
                <div class="sponsors">
                  <img src="/images/logo05.png" alt="Image">
                </div>
                <!-- end sponsor-logo -->
              </div>
              <!-- end data-scroll -->
            </div>
            <!-- end col-2 -->

            <div class="col-md col-6">
              <div>
                <div class="sponsors">
                  <img src="/images/logo06.png" alt="Image">
                </div>
                <!-- end sponsor-logo -->
              </div>
              <!-- end data-scroll -->
            </div>
            <!-- end col-2 -->

            <div class="col-md col-6">
              <div>
                <div class="sponsors">
                  <img src="/images/logo07.jpg" alt="Image">
                </div>
                <!-- end sponsor-logo -->
              </div>
              <!-- end data-scroll -->
            </div>
            <!-- end col-2 -->

            <div class="py-4"></div>

          </div>
          <!-- end row -->
        </div>
        <!-- end container -->
      </section>
      <!-- end content-section -->
      <footer class="footer">
        <div class="container">
          <div class="row">
            <div class="col-12 d-flex align-items-center justify-content-center py-5">
              <!-- end newsletter-box -->
              <ul class="social-media">
                <li>
                  <a href="https://www.facebook.com/ifspvotuporanga/" target="_blank">
                    <i class="fab fa-facebook-f"></i>
                    <span>Facebook</span>
                  </a>
                </li>
                <li>
                  <a href="https://www.instagram.com/ifspvotuporanga/" target="_blank">
                    <i class="fab fa-instagram"></i>
                    <span>Instagram</span>
                  </a>
                </li>
                <li>
                  <a href="https://www.youtube.com/user/ifspvotuporanga" target="_blank">
                    <i class="fab fa-youtube"></i>
                    <span>Youtube</span>
                  </a>
                </li>
              </ul>
            </div>
            <!-- end col-12 -->
          </div>
          <!-- end row -->
        </div>
        <!-- end container -->
        <div class="bottom-bar">
          <div class="container">
            <span class="copyright text-center w-100"> © 2022 COTESI (Congresso de Tecnologia e Sistemas de Informação)
              | IFSP CAMPUS VOTUPORANGA <br />
              <span>Desenvolvido com <i class="fas fa-heart"></i> em Votuporanga por alunos do curso de Bacharelado em
                Sistemas de Informação. </span>
          </div>
          <!-- end container -->
        </div>
        <!-- end bottom-bar -->
      </footer>
      <!-- end footer -->
    </div>
    <!-- end smooth-scroll -->
  </div>
  <!-- end section-wrapper -->
  <!-- JS FILES -->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/swiper.min.js"></script>
  <script src="js/fancybox.min.js"></script>
  <script src="js/isotope.min.js"></script>
  <script src="js/gsap.min.js"></script>
  <script src="js/locomotive-scroll.min.js"></script>
  <script src="js/ScrollTrigger.min.js"></script>
  <script src="js/scripts.js?ver=<?= filemtime( __DIR__ . '/js/scripts.js') ?>"></script>

</body>

</html>
