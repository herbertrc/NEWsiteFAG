<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Faculdade Guerra - Conheça nossos cursos, programas de bolsas e outras formas de ingresso. Estude com excelência!">

    <!-- Ícone da Página -->
    <link rel="icon" type="image/png" href="images/logo.png">
    
    <!-- Fontes e Estilos -->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Font Awesome Local -->
    <link rel="stylesheet" href="images/css/all.css"> <!-- Corrija o caminho se necessário -->

    <!-- Estilo Personalizado -->
    <link rel="stylesheet" type="text/css" href="style.css">
    
    <title>Faculdade Guerra - Tecnologo em segurança Pública</title>
</head>

<body>
<!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <!-- Logo na esquerda -->
            <a class="navbar-brand d-flex align-items-center" href="index.php">
                <img src="images/logo.png" alt="Logo" class="img-fluid me-2" style="height: 40px;">
            </a>
    
            <!-- Botão Toggler para mobile -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
    
    
            <!-- Navbar -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <!-- Links centralizados -->
                <ul class="navbar-nav mx-auto">
                    <!-- Botão Inscreva-se -->
                    <li class="nav-item">
                        <a class="nav-link btn btn-inscreva ms-3" href="index.php#Matricula">Inscreva-se</a>
                    </li>
    
                    <!-- Cursos Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="contactDropdown3" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Cursos
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="contactDropdown3">
                            <div class="dropdown-columns">
                                <div class="column">
                                    <li><a class="dropdown-item" href="direito.html">Direito</a></li>
                                    <li><a class="dropdown-item" href="tsp.php">Segurança Pública</a></li>
                                </div>
                            </div>
                        </ul>
                    </li>
                    <!-- Contatos Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="contactDropdown1" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Contatos
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="contactDropdown1">
                            <div class="dropdown-columns">
                                <div class="column">
                                    <li><a class="dropdown-item" href="#">Localização</a></li>
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15353.740277293968!2d-48.0537159!3d-15.8337148!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935a332d78d5295f%3A0x894e489ea4be0fd4!2sFaculdade%20Guerra!5e0!3m2!1spt-BR!2sbr!4v1704773280569!5m2!1spt-BR!2sbr" 
                                            width="400" height="200" allowfullscreen></iframe>
                                </div>
                                <div class="column">
                                    <li><a class="dropdown-item" href="#">Campus Principal</a></li>
                                    <li><a class="dropdown-item" href="#">Endereço</a></li>
                                    <span>Q QSA 7 Lotes 15 a 22<br>Taguatinga Sul<br>Distrito Federal</span>
                                    <li><a class="dropdown-item" href="#">Email</a></li>
                                    <span>contato@faculdadeguerra.edu.br</span>
                                    <li><a class="dropdown-item" href="#">Telefone</a></li>
                                    <p>(61) 3977-1272</p>
                                </div>
                            </div>
                        </ul>
                    </li>
                    <!-- Guerra -->
                    <li class="nav-item">
                        <a class="nav-link" href="#Guerra">Guerra</a>
                    </li>
                    <!-- Sou Aluno Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="contactDropdown2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Sou Aluno
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="contactDropdown2">
                            <div class="dropdown-columns">
                                <div class="column">
                                    <li><a class="dropdown-item" href="http://educacional.usecerbrum.net/inicio.aspx">CERBRUM</a></li>
                                    <li><a class="dropdown-item" href="https://faculdadeguerra.com.br/ava/">Ambiente Virtual de Aprendizagem</a></li>
                                    <li><a class="dropdown-item" href="#">Calendário</a></li>
                                </div>
                            </div>
                        </ul>
                    </li>
                    <!-- Bolsas -->
                    <li class="nav-item">
                        <a class="nav-link" href="#Bolsas">Bolsas</a>
                    </li>
                </ul>
    
                <!-- Search Box no toggle -->
                <form class="d-flex ms-lg-auto mt-2 mt-lg-0">
                    <input class="form-control me-2" type="search" placeholder="Procurar" aria-label="Search">
                    <button class="btn btn-outline-secondary" type="submit">
                        <img src="images/lopa.png" alt="Lupa" style="width: 16px; height: 16px;">
                    </button>
                </form>
            </div>
        </div>
    </nav>

    <!-- Banner com Texto -->
    <div class="image-banner">
        <img src="images/direito.jpg" alt="Bacharel em Direito" class="banner-img">
        <div class="text-overlay container">
            <div class="row">
                <div class="col-md-6 col-sm-12 text-content">
                    <h1>TECNÓLOGO</h1>
                    <p>EM 
                    <span>SEGURANÇA PÚBLICA</span></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Container Principal -->
    <div class="container my-5">
        <!-- Linha para os 5 Cards -->
        <div class="row g-4">
            <!-- Card 1 -->
            <div class="col-md-2 col-sm-6">
                <div class="card text-center border-0 shadow-sm">
                    <div class="card-body">
                        <img src="images/diploma.png" alt="" class="mb-2" style="width: 40px;">
                        <h6 class="card-title">Formação</h6>
                        <p class="card-text small">Tecnologo</p>
                    </div>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="col-md-2 col-sm-6">
                <div class="card text-center border-0 shadow-sm">
                    <div class="card-body">
                        <img src="images/aula.png" alt="" class="mb-2" style="width: 40px;">
                        <h6 class="card-title">Aula</h6>
                        <p class="card-text small">Presencial <br> EAD</p>
                    </div>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="col-md-2 col-sm-6">
                <div class="card text-center border-0 shadow-sm">
                    <div class="card-body">
                        <img src="images/predio.png" alt="" class="mb-2" style="width: 40px;">
                        <h6 class="card-title">Campus</h6>
                        <p class="card-text small">Taguatinga Centro</p>
                    </div>
                </div>
            </div>
            <!-- Card 4 -->
            <div class="col-md-2 col-sm-6">
                <div class="card text-center border-0 shadow-sm">
                    <div class="card-body">
                        <img src="images/solnoite.png" alt="" class="mb-2" style="width: 40px;">
                        <h6 class="card-title">Turnos</h6>
                        <p class="card-text small">Matutino <br> Noturno</p>
                    </div>
                </div>
            </div>
            <!-- Card 5 -->
            <div class="col-md-2 col-sm-6">
                <div class="card text-center border-0 shadow-sm">
                    <div class="card-body">
                        <img src="images/calendario.png" alt="" class="mb-2" style="width: 40px;">
                        <h6 class="card-title">Duração</h6>
                        <p class="card-text small">4 Semestres</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
      <h1>CONHEÇA O CURSO</h1>
      <p>
          O curso de <strong>Tecnólogo em Segurança Pública</strong> da Faculdade Guerra é ideal para quem busca capacitação completa para atuar no setor de proteção e ordem pública. 
          Com uma grade curricular moderna e orientada pela prática, o curso prepara os alunos para enfrentar desafios reais do mercado de trabalho, equilibrando teoria e aplicação.
      </p>
      <p>
          Entre os principais tópicos abordados, destacam-se áreas como <strong>Política Criminal</strong>, <strong>Direitos Humanos</strong>, e <strong>Gestão Estratégica de Segurança</strong>, permitindo ao estudante compreender e aplicar conceitos fundamentais de forma eficaz.
      </p>
      <p>
          A <strong>Faculdade Guerra</strong> oferece suporte completo ao aprendizado, incluindo laboratórios especializados, uma rica biblioteca e acesso a tecnologias de ponta. 
          Além disso, o projeto pedagógico promove a formação de profissionais éticos, críticos e comprometidos com o desenvolvimento social.
      </p>
      <p>
          Durante o curso, os alunos têm a oportunidade de vivenciar experiências práticas em simulações realistas e atividades orientadas, desenvolvendo habilidades cruciais para atuar em diferentes cenários de segurança pública.
      </p>
  </div>
  

    
                    <!-- Banner -->
    <div class="highlight-banner">
        Chegou a hora de fazer a <span>DIFERENÇA</span> na sua vida!
    </div>

    <div class="fixed-card" id="card">
      <div class="options">
        <input type="radio" name="mode" id="presencial" checked>
        <label for="presencial"> <b>Presencial</b></label>
        <input type="radio" name="mode" id="hibrido">
        <label for="hibrido"> <b>EAD</b></label>
      </div>

      <h2> Últimas vagas </h2>
      <p id="discount">Comece a estudar com <strong>59,87%</strong> de desconto!</p>
      <h2>Graduação</h2>
      <p id="original-price"><s>De R$ 1599,85/mês</s><a> por apenas</a></p>
      <p class="price"><span id="price">R$ 575,00/mês</span></p>

      <!-- Detalhes Presencial -->
      <ul id="details-presencial" class="details">
        <li> Início Imediato</li>
        <li> Professores mestre e doutores</li>
        <li> Presencial</li>
        <li> Duração de 5 semestres</li>
        <li> Autorizado por MEC</li>
      </ul>

      <!-- Detalhes Híbrido -->
      <ul id="details-hibrido" class="details" style="display: none;">
        <li> Início Flexível</li>
        <li> Professores Online e Presenciais</li>
        <li> EAD</li>
        <li> Duração de 5 semestres</li>
        <li> Autorizado por MEC</li>
      </ul>

      <!-- Botão -->
      <a href="index.php#Matricula" class="subscribe-btn">Fazer Inscrição</a>
    </div>

    <script>
      // JavaScript para mudar o conteúdo do card fixo
      document.getElementById('presencial').addEventListener('change', function() {
        document.getElementById('discount').innerHTML = 'Comece a estudar com <strong>59,87%</strong> de desconto!';
        document.getElementById('original-price').innerHTML = '<s>De R$ 495,90/mês</s><a> por apenas</a>';
        document.getElementById('price').textContent = 'R$ 199,00/mês';

        document.getElementById('details-presencial').style.display = 'block';
        document.getElementById('details-hibrido').style.display = 'none';
      });

      document.getElementById('hibrido').addEventListener('change', function() {
        document.getElementById('discount').innerHTML = 'Estude com até <strong>69,70%</strong> de desconto!';
        document.getElementById('original-price').innerHTML = '<s>De R$ 495,90/mês</s><a> por apenas</a>';
        document.getElementById('price').textContent = 'R$ 150,00/mês';

        document.getElementById('details-presencial').style.display = 'none';
        document.getElementById('details-hibrido').style.display = 'block';
      });
    </script>
    <div class="market-container">
      <h1 class="market-title">Mercado de Trabalho<br>do curso de Tecnólogo em Segurança Pública</h1>
      <p class="market-description">
          O mercado para profissionais de Segurança Pública está em expansão, oferecendo diversas oportunidades em áreas como gestão de conflitos, segurança privada e atuação em órgãos públicos.
      </p>
      <ul class="market-opportunities">
          <li>Carreiras Policiais em forças estaduais e federais;</li>
          <li>Consultoria em segurança privada;</li>
          <li>Prevenção e combate a crimes cibernéticos;</li>
          <li>Gestão de segurança em empresas e eventos;</li>
          <li>Atuação estratégica em instituições públicas e privadas.</li>
      </ul>
      <p class="market-extra">
          Profissionais bem preparados têm destaque no mercado, especialmente aqueles capacitados para lidar com desafios modernos, como a segurança cibernética e a mediação de conflitos.
      </p>
      <p class="market-call-to-action">
          Que tal começar sua jornada no curso de Tecnólogo em Segurança Pública? Inscreva-se agora na <strong>Faculdade Guerra</strong> e inicie sua transformação profissional. Utilize sua nota do <strong>ENEM</strong> para garantir sua vaga!
      </p>
  </div>
  


  <div class="docent-container my-5">
    <h1 class="market-title text-center mb-5">Corpo Docente</h1>
    <div class="container">
      <div class="row">
        <!-- Docente 1 -->
        <div class="col-md-4 col-sm-6 mb-4">
          <div class="card text-center shadow-sm">
            <img src="images/docente1.jpg" class="card-img-top" alt="Foto do Docente 1">
            <div class="card-body">
              <h5 class="card-title">Prof. Dr. Luís Pereira</h5>
              <p class="card-text">Doutor em Segurança Pública pela Universidade X. Especialista em Gestão de Crises.</p>
              <a href="curriculo_luis.pdf" class="btn btn-outline-danger" target="_blank">Ver Currículo</a>
            </div>
          </div>
        </div>
  
        <!-- Docente 2 -->
        <div class="col-md-4 col-sm-6 mb-4">
          <div class="card text-center shadow-sm">
            <img src="images/docente2.jpg" class="card-img-top" alt="Foto do Docente 2">
            <div class="card-body">
              <h5 class="card-title">Profa. Dra. Clara Nogueira</h5>
              <p class="card-text">Doutora em Direitos Humanos pela Universidade Y. Experiência em Mediação de Conflitos.</p>
              <a href="curriculo_clara.pdf" class="btn btn-outline-danger" target="_blank">Ver Currículo</a>
            </div>
          </div>
        </div>
  
        <!-- Docente 3 -->
        <div class="col-md-4 col-sm-6 mb-4">
          <div class="card text-center shadow-sm">
            <img src="images/docente3.jpg" class="card-img-top" alt="Foto do Docente 3">
            <div class="card-body">
              <h5 class="card-title">Prof. Me. Ricardo Alves</h5>
              <p class="card-text">Mestre em Políticas de Segurança pela Universidade Z. Especialista em Prevenção Criminal.</p>
              <a href="curriculo_ricardo.pdf" class="btn btn-outline-danger" target="_blank">Ver Currículo</a>
            </div>
          </div>
        </div>
  
        <!-- Docente 4 -->
        <div class="col-md-4 col-sm-6 mb-4">
          <div class="card text-center shadow-sm">
            <img src="images/docente4.jpg" class="card-img-top" alt="Foto do Docente 4">
            <div class="card-body">
              <h5 class="card-title">Profa. Dra. Mariana Souza</h5>
              <p class="card-text">Doutora em Criminologia pela Universidade W. Especialista em Segurança Cibernética.</p>
              <a href="curriculo_mariana.pdf" class="btn btn-outline-danger" target="_blank">Ver Currículo</a>
            </div>
          </div>
        </div>
  
        <!-- Docente 5 -->
        <div class="col-md-4 col-sm-6 mb-4">
          <div class="card text-center shadow-sm">
            <img src="images/docente5.jpg" class="card-img-top" alt="Foto do Docente 5">
            <div class="card-body">
              <h5 class="card-title">Prof. Me. Thiago Mendes</h5>
              <p class="card-text">Mestre em Gestão Pública pela Universidade V. Pesquisador em Políticas de Segurança.</p>
              <a href="curriculo_thiago.pdf" class="btn btn-outline-danger" target="_blank">Ver Currículo</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

      

          <!-- Linha Horizontal -->
    <div class="horizontal-line"></div>

    <footer class="bg-dark text-white pt-5 pb-4">
    <div class="container">
      <div class="row text-center text-lg-start">
        <!-- Faculdade Guerra -->
        <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
          <img src="images/Logo_Guerra_Red.png" alt="Faculdade Guerra" class="img-fluid mb-3" style="max-width: 60%;">
          <img src="images/tag01.png" alt="Tagline" class="img-fluid" style="max-width: 70%;">
        </div>
  
        <!-- Sobre Nós -->
        <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
          <h5 class="text-uppercase mb-4" style="color: #CA0F0F;">Sobre Nós</h5>
          <p><a href="#" class="text-white text-decoration-none">Quem somos nós</a></p>
          <p><a href="#" class="text-white text-decoration-none">Serviço à comunidade</a></p>
          <p><a href="#" class="text-white text-decoration-none">Documentos</a></p>
          <p><a href="#" class="text-white text-decoration-none">Nossa equipe</a></p>
        </div>
  
        <!-- Nossos Cursos -->
        <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
          <h5 class="text-uppercase mb-4" style="color: #CA0F0F;">Nossos Cursos</h5>
          <p><a href="direito.php" class="text-white text-decoration-none">Direito</a></p>
          <p><a href="seguranca.php" class="text-white text-decoration-none">Segurança Pública</a></p>
          <p><a href="#" class="text-white text-decoration-none">Pós Graduação</a></p>
          <p><a href="#" class="text-white text-decoration-none">Extensão</a></p>
          <p><a href="#" class="text-white text-decoration-none">Preparatório OAB</a></p>
        </div>
  
        <!-- Acesso Rápido -->
        <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
          <h5 class="text-uppercase mb-4" style="color: #CA0F0F;">Acesso Rápido</h5>
          <p><a href="https://faculdadeguerra.com.br/ava/" class="text-white text-decoration-none">Acesso ao AVA</a></p>
          <p><a href="#" class="text-white text-decoration-none">Matrícula</a></p>
          <p><a href="#" class="text-white text-decoration-none">Calendário</a></p>
        </div>
  
        <!-- Contato -->
        <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
          <h5 class="text-uppercase mb-4" style="color: #CA0F0F;">Campus Principal</h5>
          <p><strong>Endereço:</strong><br> Q QSA 7 Lotes 15 a 22, Taguatinga Sul, Distrito Federal</p>
          <p><strong>Telefone:</strong> (61) 3977-1272  </p>
          <p><strong>Wpp:</strong> (61) 9 3977-1272</p>
          <p><strong>Email:</strong> contato@faculdadeguerra.edu.br</p>
        </div>
      </div>
  
      <!-- Linha Divisória -->
      <hr class="bg-white my-3">
  
      <!-- Copyright -->
      <div class="row">
        <div class="col text-center">
          <p class="mb-0">Copyright 2024 All Rights Reserved by:
            <a href="#" class="text-decoration-none" style="color: #CA0F0F;">
              <strong>Faculdade Guerra</strong>
            </a>
          </p>
        </div>
      </div>
    </div>
  </footer>

    <!-- Scripts -->
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
