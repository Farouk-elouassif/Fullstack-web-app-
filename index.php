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
      <li class="relative hover:bg-yellow-400 duration-300 p-2 h-2/3 mt-2 rounded-md flex items-center justify-center dropdown bg-yellow-500"><a href="login.php">Sign in</a></li>
    </ul>
  </nav>
</header>

<?php include "main.php"?>

<footer class="bg-blue-900 text-white p-4 text-center w-full overflow-hidden">
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
