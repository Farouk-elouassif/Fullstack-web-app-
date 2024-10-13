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

  <!-- Main Content - visible in large screens -->
  <div id="content" class="flex-grow bg-gray-100 p-6 lg:ml-1/5">
    <!-- Your main content here -->
    <h1>Main Content Goes Here</h1>
    <p>Ensure this section adjusts to fill the screen width when the sidebar is visible.</p>
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