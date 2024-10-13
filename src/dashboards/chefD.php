<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="../../imgs/fsttlogo.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="/dist/styles.css" rel="stylesheet">

  <link rel="stylesheet" href="../../css_styles/styles.css">
  <title>Dashboard</title>
</head>
<body class="lg:flex">
  <!-- Toggle Button - only visible on small screens -->
  <div id="toggle" class="lg:hidden ">
    <button id="toggle-btn">
      <i class="fa-solid fa-bars"></i>
    </button>
    <div id="Header" class="lg:hidden flex flex-row items-center justify-center bg-blue-950 w-full">
      <img src="../../imgs/userProfile.jpeg" alt="user" class="w-1/5 rounded-full mt-4 border-2 border-black m-3">
      <div>
        <h4 class="text-white font-semibold text-sm">USER NAME</h4>
        <p class="text-yellow-500 text-sm">Chef departement info</p>
      </div>
    </div>
  </div>

  <!-- Sidebar -->
  <div id="sidebar" class="w-1/5 bg-blue-900 h-screen fixed lg:relative transform -translate-x-full lg:translate-x-0 transition-transform duration-300">
    <div id="sidebarHeader" class=" flex flex-row items-center justify-center bg-blue-950">
      <img src="../../imgs/userProfile.jpeg" alt="user" class="w-1/5 rounded-full mt-4 border-2 border-black m-3">
      <div>
        <h4 class="text-white font-semibold text-sm">USER NAME</h4>
        <p class="text-yellow-500 text-sm">Chef departement info</p>
      </div>
    </div>

    <div id="sidebarBody" class="flex justify-center text-white font-semibold mt-24">
      <ul>
        <li class="hover:text-yellow-500 transition-all ease duration-700 m-3">
          <i class="fa-solid fa-chart-simple mr-2"></i>
          <a href="">Dashboard</a>
        </li>
        <li class="hover:text-yellow-500 transition-all ease duration-700 m-3">
          <i class="fa-solid fa-user-tie mr-2"></i>
          <a href="">Professeur</a>
        </li>
        <li class="hover:text-yellow-500 transition-all ease duration-700 m-3">
          <i class="fa-solid fa-user-tie mr-2"></i>
          <a href="">Département</a>
        </li>
        <li class="hover:text-yellow-500 transition-all ease duration-700 m-3">
          <i class="fa-solid fa-user-tie mr-2"></i>
          <a href="">Espace Doctorant</a>
        </li>
        <li class="hover:text-yellow-500 transition-all ease duration-700 m-3">
          <i class="fa-solid fa-calendar-days mr-2"></i>
          <a href="">Emploi du temps</a>
        </li>
        <li class="hover:text-yellow-500 transition-all ease duration-700 m-3">
          <i class="fa-solid fa-newspaper mr-2"></i>
          <a href="">Annonces</a>
        </li>
        <li class="text-red-500 m-3">
          <i class="fa-solid fa-right-from-bracket mr-2"></i>
          <a href="">Log Out</a>
        </li>
      </ul>
    </div>
  </div>

  
  <div id="dashboardcontent" class="flex-grow bg-gray-100 p-6 lg:ml-1/5">
    <div id="userInfo" class="flex flex-col bg-gray-200 p-4">
      <h1 class="border-b pb-2 border-black"><i class="fa-solid fa-user mr-2"></i>Bienvenu <span class="text-yellow-500 font-semibold">User, Name</span></h1>
      <div id="userinfocontainer" class="flex flex-row justify-between ">
        <div id="adresse">
          <h2 class="font-semibold">Adresse</h2>
          <ul>
            <li >Date de naissence: XX XX XXXX</li>
            <li>Email: example@gmail.com</li>
            <li>Adresse: XXX XXXX XX XXX</li>
          </ul>
        </div>
        <div id="infoPerso">
          <h2 class="font-semibold">Informations personnelles</h2>
          <ul>
            <li>Nom et prénom: xxx xxxxx </li>
            <li>Code Massar: xxxxxxxx</li>
            <li>CIN: XXXXXX</li>
          </ul>
        </div>
        <div id="infoPro">
          <h2 class="font-semibold">Informations professionnelles</h2>
          <ul>
            <li>Département: xxxxxxxx</li>
            <li>Spécialité: xxxxxxx</li>
            <li>Code apogée: xxxxx</li>
          </ul>
        </div>
      </div>
    </div>
    
  </div>

  <script>
    const toggleBtn = document.getElementById('toggle-btn');
    const sidebar = document.getElementById('sidebar');

    toggleBtn.addEventListener('click', function () {
      // Toggle sidebar for small screens
      if (window.innerWidth < 1024) { // 1024px is the lg breakpoint in Tailwind
        sidebar.classList.toggle('-translate-x-full');
      }
    });
  </script>
</body>



</html>