
  document.querySelectorAll('.dropdown').forEach(function(menuItem) {
    menuItem.addEventListener('mouseenter', function() {
      const targetMenu = menuItem.getAttribute('data-target');
      document.getElementById(targetMenu).classList.remove('hidden');
    });
    menuItem.addEventListener('mouseleave', function() {
      const targetMenu = menuItem.getAttribute('data-target');
      document.getElementById(targetMenu).classList.add('hidden');
    });
  });


  document.getElementById('menu-toggle').addEventListener('click', function() {
    let navbar = document.getElementById('navbar');
    navbar.classList.toggle('hidden');
  })

  