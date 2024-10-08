<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="imgs/fsttlogo.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="/dist/styles.css" rel="stylesheet">

  <link rel="stylesheet" href="styles.css">
  <title>FST-Tanger</title>
</head>
<body class="min-h-screen flex flex-col overflow-x-hidden">
<header class="flex justify-center items-center flex-col w-full"> 
  <div id="contact" class="flex flex-wrap p-2 bg-blue-900 justify-center space-around sm:flex-col lg:flex-row text-white  w-screen">
    <p class="ml-3"><i class="fa-solid fa-envelope text-yellow-500"></i> administration.fstt@uae.ac.ma</p>
    <p class="ml-3 "><i class="fa-solid fa-phone text-yellow-500"></i> + 212 (0)5 39 39 39 54/ 55</p>
    <div class="flex ml-3 lg:ml-20 ">
      <a href="https://www.facebook.com/fstt.ac.ma/?locale=fr_FR" target="_blank" class="ml-3"><i class="fa-brands fa-facebook text-yellow-500"></i></a>
      <a href="https://www.instagram.com/fsttanger/?hl=fr" target="_blank" class="ml-3"><i class="fa-brands fa-instagram text-yellow-500"></i></a>
      <a href="https://www.linkedin.com/school/fsttanger/posts/?feedView=all" target="_blank" class="ml-3"><i class="fa-brands fa-linkedin text-yellow-500"></i></a>
    </div>
  </div>

  <div id="headerlogos" class="flex flex-row justify-center space-around p-4 border-b-2 w-4/5">
    <a href="index.php" class="lg:mr-72 lg:mt-1 sm:mr-1"><img src="imgs/fst-1024x383.png" alt="" width="215"></a>
    <a href="https://www.uae.ac.ma" target="_blank" class="lg:ml-72 lg:mt-3 sm:ml-1 sm:mt-2"><img src="imgs/logo-uae-1024x297.png" alt="" width="230"></a>
  </div>

  <nav class="relative">
    <div class="flex justify-between items-center">
      
      <div class="text-3xl cursor-pointer lg:hidden mr-64" id="menu-toggle">
        <i class="fa-solid fa-bars text-yellow-500"></i>
      </div>
    </div>

    
    <ul id="navbar" class="hidden  flex-col lg:flex lg:flex-row lg:justify-center space-x-6 font-semibold cursor-pointer transition-all duration-500">
      <li class="relative hover:text-yellow-400 duration-300 p-4 flex items-center justify-center dropdown" data-target="faculteMenu">
        Faculté<i class="fa-solid fa-caret-down ml-1"></i>
        <ul id="faculteMenu" class="absolute hidden !bg-white text-black w-40 top-full text-sm font-medium left-0 shadow-lg z-10">
          <li class="p-2 hover:bg-yellow-500 hover:text-black transition duration-300"><a href="">Présentation</a></li>
          <li class="p-2 hover:bg-yellow-500 hover:text-black transition duration-300"><a href="">Mot du doyen</a></li>
          <li class="p-2 hover:bg-yellow-500 hover:text-black transition duration-300"><a href="">Départements</a></li>
          <li class="p-2 hover:bg-yellow-500 hover:text-black transition duration-300"><a href="">Contact</a></li>
        </ul>
      </li>
      
      <li class="relative hover:text-yellow-400 duration-300 p-4 flex items-center justify-center dropdown" data-target="formationMenu">
        Formation<i class="fa-solid fa-caret-down ml-1"></i>
        <ul id="formationMenu" class="absolute hidden bg-white text-black w-40 top-full text-sm font-medium  left-0 shadow-lg z-10">
          <li class="p-2 hover:bg-yellow-500 hover:text-black transition duration-300"><a href="">Overview</a></li>
          <li class="p-2 hover:bg-yellow-500 hover:text-black transition duration-300"><a href="">Programs</a></li>
          <li class="p-2 hover:bg-yellow-500 hover:text-black transition duration-300"><a href="">Admissions</a></li>
        </ul>
      </li>
      
      <li class="relative hover:text-yellow-400 duration-300 p-4 flex items-center justify-center dropdown" data-target="rechercheMenu">
        Recherche<i class="fa-solid fa-caret-down ml-1"></i>
        <ul id="rechercheMenu" class="absolute hidden bg-white text-black w-40 top-full text-sm font-medium left-0 shadow-lg z-10">
          <li class="p-2 hover:bg-yellow-500 hover:text-black transition duration-300"><a href="">Research Areas</a></li>
          <li class="p-2 hover:bg-yellow-500 hover:text-black transition duration-300"><a href="">Projects</a></li>
          <li class="p-2 hover:bg-yellow-500 hover:text-black transition duration-300"><a href="">Publications</a></li>
        </ul>
      </li>
      
      <li class="relative hover:text-yellow-400 duration-300 p-4 flex items-center justify-center dropdown" data-target="entrepriseMenu">
        Espace Entreprise<i class="fa-solid fa-caret-down ml-1"></i>
        <ul id="entrepriseMenu" class="absolute hidden bg-white text-black w-40 top-full text-sm font-medium left-0 shadow-lg z-10">
          <li class="p-2 hover:bg-yellow-500 hover:text-black transition duration-300"><a href="">Overview</a></li>
          <li class="p-2 hover:bg-yellow-500 hover:text-black transition duration-300"><a href="">Partnerships</a></li>
          <li class="p-2 hover:bg-yellow-500 hover:text-black transition duration-300"><a href="">Internships</a></li>
        </ul>
      </li>
      
      <li class="relative hover:text-yellow-400 duration-300 p-4 flex items-center justify-center dropdown" data-target="etudiantMenu">
        Espace Etudiant<i class="fa-solid fa-caret-down ml-1"></i>
        <ul id="etudiantMenu" class="absolute hidden bg-white text-black w-40 top-full text-sm font-medium left-0 shadow-lg z-10">
          <li class="p-2 hover:bg-yellow-500 hover:text-black transition duration-300"><a href="">Student Services</a></li>
          <li class="p-2 hover:bg-yellow-500 hover:text-black transition duration-300"><a href="">Clubs</a></li>
          <li class="p-2 hover:bg-yellow-500 hover:text-black transition duration-300"><a href="">Resources</a></li>
        </ul>
      </li>
      
      <li class="relative hover:text-yellow-400 duration-300 p-4 flex items-center justify-center dropdown" data-target="elearningMenu">
        E-Learning<i class="fa-solid fa-caret-down ml-1"></i>
        <ul id="elearningMenu" class="absolute hidden bg-white text-black w-40 top-full text-sm font-medium left-0 shadow-lg z-10">
          <li class="p-2 hover:bg-yellow-500 hover:text-black transition duration-300"><a href="">Courses</a></li>
          <li class="p-2 hover:bg-yellow-500 hover:text-black transition duration-300"><a href="">Schedule</a></li>
          <li class="p-2 hover:bg-yellow-500 hover:text-black transition duration-300"><a href="">Tutoring</a></li>
        </ul>
      </li>

      <li class="relative hover:text-yellow-400 duration-300 p-4 flex items-center justify-center dropdown" data-target="eservicesMenu">
        E-Services<i class="fa-solid fa-caret-down ml-1"></i>
        <ul id="eservicesMenu" class="absolute hidden bg-white text-black w-40 top-full text-sm font-medium left-0 shadow-lg z-10">
          <li class="p-2 hover:bg-yellow-500 hover:text-black transition duration-300"><a href="">Online Services</a></li>
          <li class="p-2 hover:bg-yellow-500 hover:text-black transition duration-300"><a href="">Account Access</a></li>
          <li class="p-2 hover:bg-yellow-500 hover:text-black transition duration-300"><a href="">Support</a></li>
        </ul>
      </li>
      <li class="relative hover:bg-yellow-600 duration-300 p-2 h-2/3 mt-2 rounded-md flex items-center justify-center dropdown bg-yellow-500"><a href="login.php">Sign in</a></li>
    </ul>
  </nav>
</header>
<main class="flex-1 m-4 flex flex-col items-center justify-center">
  <div id="container1" class="flex justify-center w-full gap-10">
    
    <div id="motDudoyen" class="p-4 flex justify-center flex-col rounded-md mb-4 bg-white shadow-lg border-black">
      <p class="text-blue-900 mb-2 font-semibold">
        <i class="fa-solid fa-quote-left mr-1 text-2xl"></i>Mot du Doyen
      </p>
      <img src="imgs/doyen.jpeg" class="rounded-md">
      <p>Mot du Doyen <span class="font-semibold">Pr. Mustapha Diani</span></p>
      <p class="text-end text-2xl text-blue-900">
        <i class="fa-solid fa-quote-right"></i>
      </p>
      <button class="bg-blue-900 p-2 mt-1 w-1/2 text-white rounded-md hover:bg-blue-800 font-semibold">
        <a href="#">Lire</a>
      </button>
    </div>

    
    <div id="presentation" class="p-4 flex justify-center flex-col rounded-md mt-4 max-w-sm  ml-2 ">
      <div class="bg-white border border-gray-200 rounded-lg shadow-md overflow-hidden">
        <img src="imgs/presentation.png" alt="FST Tanger" class="w-full h-auto">
        <div class="p-4">
          <p class="text-gray-700 text-sm leading-relaxed">
            Créée en 1995, la <span class="font-semibold">FST de Tanger</span> est un des dix-huit établissements de l'Université Abdelmalek Essaâdi.
            Elle regroupe actuellement une trentaine de programmes d'études répartis sur quatre cycles offerts
            par neuf départements : Sciences de la Vie, Sciences de la Terre, Génie Chimique, Physique, Mathématiques,
            Génie Informatique, Génie Électrique et Génie Mécanique et de Langues.
          </p>
          <button class="mt-4 bg-blue-900 text-white font-semibold px-4 py-2 rounded-lg hover:bg-blue-800">
            Lire plus
          </button>
        </div>
      </div>
    </div>

    <div id="presentationUae" class="p-4 flex justify-center flex-col rounded-md mt-2 max-w-sm">
      <div class="bg-white border border-gray-200 rounded-lg shadow-md overflow-hidden">
        <img src="https://www.uae.ma/website/sites/all/themes/uae_theme/images/uae.jpg" alt="FST Tanger" class="w-full h-auto">
        <div class="p-4">
          <p class="text-gray-700 text-sm leading-relaxed">
            Créée en 1989, <span class="font-semibold">l'Université Abdelmalek Essaâdi</span> est l'une des principales institutions d'enseignement supérieur 
            au nord du Maroc. Elle regroupe plusieurs établissements répartis dans les villes de Tétouan, Tanger, Larache 
            et Al Hoceima, l'université se distingue par son engagement en faveur de la recherche scientifique, 
            tout en offrant à ses étudiants un environnement académique riche et diversifié grâce à ses neuf facultés et écoles.
          </p>
          <button class="mt-4 bg-blue-900 text-white font-semibold px-4 py-2 rounded-lg hover:bg-blue-800">
            Lire plus
          </button>
        </div>
      </div>
    </div>
  </div>

  
  <div id="formationInitial" class="flex flex-col w-full items-center flex-wrap mt-12">
    <p class="text-2xl font-bold mb-6  text-blue-800"><i class="fa-solid fa-graduation-cap text-yellow-500"></i> Formation Initial</p>
    <ul class="flex flex-row justify-around">
      <li class="deust rounded-md transition-all duration-300 ease-linear cursor-pointer  bg-blue-900 w-full p-12 m-1 flex items-center justify-center shadow-lg hover:bg-yellow-500 hover:opacity-1">
        <P class="font-semibold transition-all duration-300 ease-linear hover:text-blue-900  text-xl text-white  text-center"><i class="fa-solid fa-file text-4xl"></i><br>Deust</P>
      </li>
      <li class="deust rounded-md transition-all duration-300 ease-linear cursor-pointer  bg-blue-900 w-full p-12 m-1 flex items-center justify-center shadow-lg hover:bg-yellow-500 hover:opacity-1">
        <P class="font-semibold transition-all duration-300 ease-linear hover:text-blue-900  text-xl text-white  text-center"><i class="fa-solid fa-note-sticky text-4xl"></i><br>Licence en science et technique</P>
      </li>
      <li class="deust rounded-md transition-all duration-300 ease-linear cursor-pointer  bg-blue-900 w-full p-12 m-1 flex items-center justify-center shadow-lg hover:bg-yellow-500 hover:opacity-1">
        <P class="font-semibold transition-all duration-300 ease-linear hover:text-blue-900  text-xl text-white  text-center"><i class="fa-solid fa-graduation-cap text-4xl"></i><br>Master en science et technique</P>
      </li>
      <li class="deust rounded-md transition-all duration-300 ease-linear cursor-pointer  bg-blue-900 w-full p-12 m-1 flex items-center justify-center shadow-lg hover:bg-yellow-500 hover:opacity-1">
        <P class="font-semibold transition-all duration-300 ease-linear hover:text-blue-900  text-xl text-white  text-center"><i class="fa-solid fa-gears text-4xl"></i><br>Cycle d'ingénieur</P>
      </li>
    </ul>
  </div>

  <div id="form" class="mt-12 flex flex-row flew-wrap  space-x-72">
    <div id="formationContinue" class=" flex flex-col h-auto mt-4">
      <h3 class="text-2xl font-bold mb-4 text-blue-800 self-center">Formation Continue</h3>
      <div class="bg-blue-900 flex items-center flex-col p-3 rounded-md font-semibold text-white h-1/5 shadow-lg">
        <h3><a href="#">D.C.E.S.S</a></h3>
        <p>Cycle des Etudes Supérieures Spécialisées</p>
      </div>
      <div class="bg-yellow-500 flex items-center flex-col p-3 rounded-md font-semibold text-white mt-2 h-1/5 shadow-lg">
      <h3><a href="#">D.C.A</a></h3>
      <p>Cycle des Etudes Supérieures Spécialisées</p>
      </div>
      <div class="bg-blue-900 flex items-center flex-col p-3 rounded-md font-semibold text-white mt-2 h-1/5 shadow-lg">
        <h3><a href="#">LICENCE CNAM</a>
      </div>
      <div class="bg-yellow-500 flex items-center flex-col p-3 rounded-md font-semibold text-white mt-2 h-1/5 shadow-lg">
        <h3><a href="#">FORMATION A LA CARTE</a></h3>
      </div>
    </div>

    <div id="espaceDoctorat" class="p-3 mt-1">
      <h3 class="text-2xl font-bold mb-4 text-blue-800">Espace Doctorant</h3>
      <ul class="ml-6">
        <li class="font-semibold hover:text-yellow-500 transition-all ease-linear duration-300"><a href="">Guichet Doctorant</a></li>
        <li class="font-semibold hover:text-yellow-500 transition-all ease-linear duration-300"><a href="">Avis de soutenances</a></li>
        <li class="font-semibold hover:text-yellow-500 transition-all ease-linear duration-300"><a href="">Habilitations Universitaires</a></li>
        
      </ul>
    </div>
  </div>

  <div id="lab" class="w-full flex flex-wrap mt-12 justify-center">
    <h3>Laboratoire</h3>
    
    <!-- First Image and Headline -->
    <div class="text-center flex-1 max-w-[45%] m-4">
      <img src="imgs/devInnov.jpg" alt="Dev Innov Lab" class="w-full h-auto">
      <h4 class="mt-4">Dev Innov Lab</h4>
    </div>
    
    <!-- Second Image and Headline -->
    <div class="text-center flex-1 max-w-[45%] m-4">
      <img src="imgs/fabadd.jpg" alt="Fab Add Lab" class="w-full h-auto">
      <h4 class="mt-4">Fab Add Lab</h4>
    </div>
    
    <!-- Third Image and Headline -->
    <div class="text-center flex-1 max-w-[45%] m-4">
      <img src="imgs/obsrdig.png" alt="Observatory Digital Lab" class="w-full h-auto">
      <h4 class="mt-4">Observatory Digital Lab</h4>
    </div>
    
    <!-- Fourth Image and Headline -->
    <div class="text-center flex-1 max-w-[45%] m-4">
      <img src="imgs/greenlab.jpg" alt="Green Lab" class="w-full h-40">
      <h4 class="mt-4">Green Lab</h4>
    </div>
  </div>
  
  
</main>

<footer class="bg-blue-900 text-white p-4 text-center w-full">
  <div id="footerElements" class="flex justify-around flex-col sm:flex-row">
    <div class="lienUtiles text-start">
      <ul>
        <p class="font-semibold text-yellow-500">Lien Utiles</p>
        <li><a href="#"><span class="font-semibold text-yellow-500">>>></span>Site de l'université</a></li>
        <li><a href="#"><span class="font-semibold text-yellow-500">>>></span>Enseignement Supérieur</a></li>
        <li><a href="#"><span class="font-semibold text-yellow-500">>>></span>CNRST</a></li>
        <li><a href="#"><span class="font-semibold text-yellow-500">>>></span>Portail National du Maroc</a></li>
      </ul>
    </div>
    <div class="newsletter text-start">
      <p class="font-semibold text-yellow-500">Newsletter</p>
      <form action="" class="flex flex-col items-center sm:items-start">
        <input type="email" class="bg-gray-200 p-1 rounded-sm mt-1 w-full sm:w-56" placeholder="example@email.com">
        <button class="bg-yellow-500 w-full sm:w-1/2 mt-2 rounded-sm p-1">Subscribe</button>
      </form>
    </div>

    <div class="contact sm:mt-2 lg:mt-0">
        <p class="font-semibold text-yellow-500 text-start">Contactez Nous</p>
        <p class="ml-3"><i class="fa-solid fa-envelope text-yellow-500"></i> administration.fstt@uae.ac.ma</p>
        <p class="ml-1 "><i class="fa-solid fa-phone text-yellow-500"></i>+ 212 (0)5 39 39 39 54/ 55</p>
    </div>
  </div>

  <p class="text-yellow-500 mt-4">&copy; 2024 FST-Tanger / Made by Farouk El Ouassif</p>
</footer>


<script src="app.js"></script>
</body>
</html>
