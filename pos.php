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
                        <h6 class="info-card-title">Formação</h6>
                        <p class="info-card-text small">Pós-Graduação</p>
                    </div>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="col-md-2 col-sm-6">
                <div class="card text-center border-0 shadow-sm">
                    <div class="card-body">
                        <img src="images/aula.png" alt="" class="mb-2" style="width: 40px;">
                        <h6 class="info-card-title">Aula</h6>
                        <p class="info-card-text small">EAD</p>
                    </div>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="col-md-2 col-sm-6">
                <div class="card text-center border-0 shadow-sm">
                    <div class="card-body">
                        <img src="images/predio.png" alt="" class="mb-2" style="width: 40px;">
                        <h6 class="info-card-title">Campus</h6>
                        <p class="info-card-text small">Taguatinga Centro</p>
                    </div>
                </div>
            </div>
            <!-- Card 5 -->
            <div class="col-md-2 col-sm-6">
                <div class="card text-center border-0 shadow-sm">
                    <div class="card-body">
                        <img src="images/calendario.png" alt="" class="mb-2" style="width: 40px;">
                        <h6 class="info-card-title">Duração</h6>
                        <p class="info-card-text small">2 Semestres</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="cursinho">
        <h1>CONHEÇA O CURSO</h1>
        <p>
        A Faculdade Guerra orgulha-se de oferecer uma Pós-Graduação em Direito que se destaca pela excelência acadêmica e pela formação de profissionais altamente capacitados e preparados para os desafios do mercado de trabalho. Além disso, disponibilizamos diversas especializações online em áreas como Constitucional, Segurança Pública, Dosimetria da Pena, Direito Penal, Direito Público, Direito Civil, Direito Processual Penal, Direitos Humanos, Direito Internacional e Direito Processual Civil, todas com conclusão em até 1 ano e com condições facilitadas de pagamento, sendo 10x de R$ 199,00.
        </p>
        <p>
        Com um corpo docente renomado, formado por especialistas, mestres e doutores atuantes na área jurídica, nossa pós-graduação proporciona uma experiência educacional enriquecedora e atualizada com as demandas da prática jurídica contemporânea.
        </p>
        <p>
        Nossa abordagem pedagógica integra teoria e prática, incentivando o desenvolvimento de habilidades analíticas, críticas e argumentativas essenciais para o exercício profissional no campo do Direito. Os alunos têm acesso a uma ampla gama de disciplinas eletivas e workshops práticos, permitindo a personalização de sua experiência de aprendizado de acordo com seus interesses e objetivos de carreira.
        </p>
        <p>
        Além da qualidade acadêmica, a Faculdade Guerra oferece uma infraestrutura moderna e completa, com biblioteca especializada, salas de aula equipadas e recursos online, garantindo aos nossos alunos o acesso a um ambiente de aprendizado estimulante e propício ao desenvolvimento pessoal e profissional.
        </p>
        <p>
        Ao escolher a Faculdade Guerra para sua pós-graduação em Direito, você estará optando por uma instituição comprometida com a excelência, a ética e a formação de profissionais de destaque no mercado jurídico. Venha fazer parte desta história de sucesso!
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
        <p id="discount">Comece a estudar com <strong>57,14%</strong> de desconto!</p>
        <h2>Graduação</h2>
        <p id="original-price"><s>De R$ 466,33/mês</s><a> por apenas</a></p>
        <p class="price"><span id="price">R$ 199,90/mês</span></p>

    <!-- Detalhes Presencial -->
    <ul id="details-presencial" class="details">
        <lu><img src="images/calendario2.jpg" alt="Calendário" style="width: 20px; height: 20px;"> Início Imediato<br></lu>
        <lu><img src="images/professor.jpg" alt="Professores" style="width: 20px; height: 20px;"> Professores mestre e doutores<br></lu>
        <lu><img src="images/aula2.jpg" alt="Presencial" style="width: 20px; height: 20px;"> EAD<br></lu>
        <lu><img src="images/relogio.jpg" alt="Duração" style="width: 20px; height: 20px;"> Duração de 2 semestres<br></lu>
        <lu><img src="images/certinho.png" alt="MEC" style="width: 20px; height: 20px;"> Autorizado por MEC</lu>
    </ul>

<!-- Botão -->
<a href="index.php#Matricula" class="subscribe-btn">Fazer Inscrição</a>
  </div>

  <script>
        document.addEventListener("DOMContentLoaded", function() {
        // Esconde o detalhe híbrido inicialmente
        document.getElementById('details-hibrido').style.display = 'none';

        document.getElementById('presencial').addEventListener('change', function() {
        document.getElementById('discount').innerHTML = 'Comece a estudar com <strong>57,14%</strong> de desconto!';
        document.getElementById('original-price').innerHTML = '<s>De R$ 466,33/mês</s><a> por apenas</a>';
        document.getElementById('price').textContent = 'R$ 199,90/mês';

        document.getElementById('details-presencial').style.display = 'block';
        document.getElementById('details-hibrido').style.display = 'none';
        });

        document.getElementById('hibrido').addEventListener('change', function() {
        document.getElementById('discount').innerHTML = 'Comece a estudar com <strong>69,70%</strong> de desconto!';
        document.getElementById('original-price').innerHTML = '<s>De R$ 495,90/mês</s><a> por apenas</a>';
        document.getElementById('price').textContent = 'R$ 150,00/mês';

        document.getElementById('details-presencial').style.display = 'none';
        document.getElementById('details-hibrido').style.display = 'block';
        });
    });
    </script>

    <section class="testimonials">
        <h2>O que nossos alunos dizem sobre a Faculdade Guerra</h2>

        <div class="testimonial">
            <img src="images/testemunha1.jpg" alt="Aluno 1" class="testimonial-img">
            <div class="testimonial-text">
                <h3>Maria Souza</h3>
                <div class="stars">
                    <span class="star">★</span>
                    <span class="star">★</span>
                    <span class="star">★</span>
                    <span class="star">★</span>
                    <span class="star">★</span>
                </div>
                <p>Estudar na Faculdade Guerra foi uma das melhores decisões que tomei. Professores qualificados e infraestrutura de qualidade! Recomendo totalmente.</p>
            </div>
        </div>

        <div class="testimonial">
            <img src="images/testemunha2.jpg" alt="Aluno 2" class="testimonial-img">
            <div class="testimonial-text">
                <h3>João Silva</h3>
                <div class="stars">
                    <span class="star">★</span>
                    <span class="star">★</span>
                    <span class="star">★</span>
                    <span class="star">★</span>
                    <span class="star">☆</span>
                </div>
                <p>A faculdade oferece um ambiente de aprendizado estimulante e sempre nos desafia a crescer. A metodologia é inovadora!</p>
            </div>
        </div>

        <div class="testimonial">
            <img src="images/testemunha4.jpg" alt="Aluno 3" class="testimonial-img">
            <div class="testimonial-text">
                <h3>Luciana Ferreira</h3>
                <div class="stars">
                    <span class="star">★</span>
                    <span class="star">★</span>
                    <span class="star">★</span>
                    <span class="star">★</span>
                    <span class="star">★</span>
                </div>
                <p>A Faculdade Guerra me proporcionou uma excelente experiência acadêmica e me ajudou a desenvolver habilidades práticas para o mercado de trabalho.</p>
            </div>
        </div>

        <div class="testimonial">
            <img src="images/testemunha3.avif" alt="Aluno 4" class="testimonial-img">
            <div class="testimonial-text">
                <h3>Carlos Lima</h3>
                <div class="stars">
                    <span class="star">★</span>
                    <span class="star">★</span>
                    <span class="star">★</span>
                    <span class="star">★</span>
                    <span class="star">★</span>
                </div>
                <p>Adorei a experiência acadêmica! A Faculdade Guerra tem uma equipe de professores dedicada e sempre preocupada com nosso aprendizado.</p>
            </div>
        </div>

        <div class="testimonial">
            <img src="images/testemunha5.jpg" alt="Aluno 5" class="testimonial-img">
            <div class="testimonial-text">
                <h3>Ana Paula Santos</h3>
                <div class="stars">
                    <span class="star">★</span>
                    <span class="star">★</span>
                    <span class="star">★</span>
                    <span class="star">★</span>
                    <span class="star">★</span>
                </div>
                <p>Estou muito satisfeita com a qualidade do ensino na Faculdade Guerra. Os programas de estágio e a orientação de carreira são excepcionais.</p>
            </div>
        </div>

    </section>

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
