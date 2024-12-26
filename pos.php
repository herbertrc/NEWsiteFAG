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
    
    <title>Faculdade Guerra - Bacharel em Direito</title>
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
                                    <li><a class="dropdown-item" href="direito.php">Direito</a></li>
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
                    <h1>Pós</h1>
                    <p>EM 
                    <span>DIREITO</span></p>
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
                        <p class="card-text small">Pós-Graduação</p>
                    </div>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="col-md-2 col-sm-6">
                <div class="card text-center border-0 shadow-sm">
                    <div class="card-body">
                        <img src="images/aula.png" alt="" class="mb-2" style="width: 40px;">
                        <h6 class="card-title">Aula</h6>
                        <p class="card-text small">EAD</p>
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
            <!-- Card 5 -->
            <div class="col-md-2 col-sm-6">
                <div class="card text-center border-0 shadow-sm">
                    <div class="card-body">
                        <img src="images/calendario.png" alt="" class="mb-2" style="width: 40px;">
                        <h6 class="card-title">Duração</h6>
                        <p class="card-text small">2 Semestres</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <h1>CONHEÇA O CURSO</h1>
        <p>
            A faculdade de Direito proporciona uma educação completa para quem deseja entender e atuar no campo jurídico. 
            O currículo do curso abrange desde os fundamentos do sistema legal até suas aplicações na sociedade. A graduação 
            prepara os alunos para interpretar e aplicar leis que regulam diversas áreas da vida em sociedade. Ao longo do 
            curso, eles terão disciplinas que combinam teoria e prática, incluindo Ciência Política e Teoria Geral do Estado, 
            para compreender a estrutura política e institucional do país.
        </p>
        <p>
            A Guerra oferece laboratórios e um rico acervo bibliográfico, para que o aluno utilize o espaço da faculdade 
            em todas as atividades. O projeto pedagógico desenvolve profissionais críticos, politicamente conscientes e capazes 
            de compreender a realidade do país.
        </p>
        <p>
            O aluno terá experiências práticas no Núcleo de Prática Jurídica (NPJ), podendo vivenciar o mundo jurídico em 
            situações simuladas e reais nas áreas: cível, penal, previdenciária e trabalhista.
        </p>
    </div>

    
                    <!-- Banner -->
    <div class="highlight-banner">
        Chegou a hora de fazer a <span>DIFERENÇA</span> na sua vida!
    </div>

    <div class="fixed-card" id="card">
      <div class="options">
        <input type="radio" name="mode" id="presencial" checked>
        <label for="presencial"> <b>EAD</b></label>
      </div>

      <h2> Últimas vagas </h2>
      <p id="discount">Comece a estudar com <strong>64,06%</strong> de desconto!</p>
      <h2>Graduação</h2>
      <p id="original-price"><s>De R$ 466,33/mês</s><a> por apenas</a></p>
      <p class="price"><span id="price">R$ 199,90/mês</span></p>

      <!-- Detalhes Presencial -->
      <ul id="details-presencial" class="details">
        <li> Início Imediato</li>
        <li> Professores mestre e doutores</li>
        <li> EAD</li>
        <li> Duração de 2 semestres</li>
        <li> Autorizado por MEC</li>
      </ul>

      <!-- Botão -->
      <a href="index.php#Matricula" class="subscribe-btn">Fazer Inscrição</a>
    </div>

    <script>
      // JavaScript para mudar o conteúdo do card fixo
      document.getElementById('presencial').addEventListener('change', function() {
        document.getElementById('discount').innerHTML = 'Comece a estudar com <strong>64,06%</strong> de desconto!';
        document.getElementById('original-price').innerHTML = '<s>De R$ 1599,85/mês</s><a> por apenas</a>';
        document.getElementById('price').textContent = 'R$ 575,00/mês';

        document.getElementById('details-presencial').style.display = 'block';
        document.getElementById('details-hibrido').style.display = 'none';
      });

      document.getElementById('hibrido').addEventListener('change', function() {
        document.getElementById('discount').innerHTML = 'Estude com até <strong>75,17%</strong> de desconto!';
        document.getElementById('original-price').innerHTML = '<s>De R$ 1599,90/mês</s><a> por apenas</a>';
        document.getElementById('price').textContent = 'R$ 397,20/mês';

        document.getElementById('details-presencial').style.display = 'none';
        document.getElementById('details-hibrido').style.display = 'block';
      });
    </script>

      

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
          <p><a href="tsp.php" class="text-white text-decoration-none">Segurança Pública</a></p>
          <p><a href="pos.php" class="text-white text-decoration-none">Pós Graduação</a></p>
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
