<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>IBNSPORTS</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <style>
    html, body {
      height: 100%;
      scroll-behavior: smooth;
      margin: 0;
      padding: 0;
      background: url('images/dukiest.jpg') no-repeat center center fixed;
      background-size: cover;
    }
    .fade-out {
      transition: top 0.3s;
    }
    @keyframes marquee {
      0% { transform: translateX(100%); }
      100% { transform: translateX(-100%); }
    }
    .animate-marquee {
      animation: marquee 20s linear infinite;
    }
  </style>
</head>
<body class="overflow-x-hidden">

  <!-- Top Navigation Bar -->
  <header id="navbar" class="fixed top-0 left-0 right-0 bg-black bg-opacity-50 text-white py-6 px-4 z-40 fade-out backdrop-blur-md">
    <div class="max-w-7xl mx-auto flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">
      <div class="flex-1 flex items-center justify-start space-x-4">
        <button id="menuButton" class="bg-black bg-opacity-60 text-white p-2 rounded focus:outline-none">☰</button>
        <h1 class="text-3xl font-bold">DOYRMS SPORTS</h1>
        <p class="text-2l">Powered by IBNSports</p>
      </div>
      <div class="flex-shrink-0 mx-4">
        <img src="images/logo.png" alt="Logo" class="h-12 w-12 rounded-full shadow-md" />
      </div>
      <nav class="flex-1 text-center md:text-right space-x-4">
        <a href="#intro" class="hover:underline">Introduction</a>
        <a href="#quote" class="hover:underline">Director of Sport</a>
        <a href="#fixture" class="hover:underline">Upcoming Fixtures</a>
        <a href="#news" class="hover:underline">News</a>
      </nav>
    </div>
  </header>

  <!-- Sidebar -->
  <aside id="sidebar" class="fixed top-0 left-0 h-full w-64 bg-black bg-opacity-70 backdrop-blur-md text-white transform -translate-x-full transition-transform duration-300 z-50">
    <div class="p-6 flex flex-col items-center relative">
      <button id="closeSidebar" class="absolute top-4 right-4 text-white text-3xl font-bold focus:outline-none">&times;</button>
      <img src="images/logo.png" alt="Logo" class="h-16 w-16 rounded-full mb-4" />
      <h1 class="text-2xl font-bold mb-6">DOYRMS</h1>
      <nav class="flex flex-col space-y-4 text-lg w-full text-center">
        <a href="/about.html" class="hover:underline">Rugby</a>
        <a href="/admissions.html" class="hover:underline">Hockey</a>
        <a href="/staff.html" class="hover:underline">Cricket</a>
        <a href="/staff.html" class="hover:underline">Tennis</a>
        <a href="/staff.html" class="hover:underline">Athletics</a>
        <a href="/staff.html" class="hover:underline">Basketball</a>
        <a href="/contact.html" class="hover:underline">Staff</a>
        <a href="https://www.doyrms.com/" class="hover:underline">DOYRMS Website</a>
      </nav>
    </div>
  </aside>

  <!-- Intro Section -->
  <section id="intro" class="min-h-screen flex items-center justify-center p-4 pt-40">
    <div class="bg-white bg-opacity-90 p-6 md:p-8 rounded-2xl shadow-xl max-w-3xl text-center">
      <h2 class="font-bold mb-4">The Duke of York's Royal Military School</h2>
      <p class="text-base md:text-lg">'Looking forward with confidence and looking back with pride'</p>
    </div>
  </section>

  <!-- Quote Section -->
  <section id="quote" class="p-4 md:p-8 flex items-center justify-center">
    <div class="bg-white bg-opacity-90 rounded-2xl shadow-xl flex flex-col md:flex-row max-w-4xl p-4 md:p-6 items-center text-center md:text-left">
      <img src="images/love.png" alt="Headmaster" class="rounded-full mb-4 md:mb-0 md:mr-6 shadow-lg"/>
      <div>
        <h3 class="text-lg md:text-xl font-semibold">Director of Sports | Justin Loveridge</h3>
        <p class="italic">"Our mission is to inspire and guide each student to reach their full potential."</p>
      </div>
    </div>
  </section>

  <!-- Content Section -->
g<section id="fixture" class="p-8 bg-gray-100 ">
  <center><h2 class="text-2xl font-bold mb-6">Upcoming Fixture</h2></center>
  <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-6">

    <!-- Upcoming Match Panel -->
    <div class="bg-white border rounded-lg shadow p-6 text-center">
      <h3 class="text-lg font-semibold text-gray-600 mb-2">Friendly Match</h3>
      <p class="text-sm text-gray-500 mb-1">Sat 14 Jun 7.05pm</p>
      <p class="text-sm text-gray-500 mb-4">The Duke of York's Royal Military School</p>
      <div class="flex justify-center items-center space-x-6 mb-4">
        <img src="images/logo.png" alt="Chiefs Logo" class="h-16 w-16 object-contain" />
        <span class="text-3xl font-bold">VS</span>
        <img src="images/logo.png" alt="Brumbies Logo" class="h-16 w-16 object-contain" />
      </div>
      <a href="#" class="inline-block bg-yellow-500 text-black font-semibold py-2 px-4 rounded hover:bg-yellow-600">Buy Tickets</a>
    </div>

    <!-- Team List Panel -->
    <div class="bg-white border rounded-lg shadow p-6">
      <h3 class="text-lg font-semibold text-gray-700 mb-4">Match Day Squad</h3>
      <ul class="text-sm space-y-2">
        <!-- These will be dynamically populated from your SQLite database -->
        <li>1. John Doe</li>
        <li>2. Max Smith</li>
        <li>3. Leo Johnson</li>
        <li>4. Jack Martin</li>
        <li>5. Tom Davies</li>
        <li>6. Adam White</li>
        <li>7. Ben Clark</li>
        <li>8. Sam Wright</li>
        <li>9. Luke Hall</li>
        <li>10. Joe Lewis</li>
        <!-- more players -->
      </ul>
      <a href="#" class="inline-block mt-4 text-yellow-600 hover:underline">View Full Team Sheet</a>
    </div>

  </div>
</section>

  <!-- News Feed Section -->
  <section id="news" class="p-8 bg-white bg-opacity-90">
    <center><h2 class="text-2xl font-bold mb-6">News Feed</h2></center>
    <div class="max-w-6xl mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
      <!-- Card 1 -->
      <div class="bg-white border rounded-lg overflow-hidden shadow hover:shadow-xl transition duration-300">
        <img src="images/rugby.jpg" class="w-full h-48 object-cover" alt="Rugby News">
        <div class="p-4">
          <h3 class="text-xl font-semibold">WE'D LOVE TO HEAR FROM YOU!</h3>
          <p class="text-gray-600 text-sm">Some great prizes to win, scroll on!</p>
          <p class="text-xs text-gray-400 mt-2">06 June 2025 • News</p>
        </div>
      </div>
      <!-- Card 2 -->
      <div class="bg-white border rounded-lg overflow-hidden shadow hover:shadow-xl transition duration-300">
        <img src="images/Hockey.jpg" class="w-full h-48 object-cover" alt="Fan Player of the Match">
        <div class="p-4">
          <h3 class="text-xl font-semibold">WHO IS YOUR FIJIVILLAGE FAN PLAYER OF THE MATCH FOR...</h3>
          <p class="text-gray-600 text-sm">Vote now for your standout performer of the game.</p>
          <p class="text-xs text-gray-400 mt-2">31 May 2025 • News</p>
        </div>
      </div>
      <!-- Card 3 -->
      <div class="bg-white border rounded-lg overflow-hidden shadow hover:shadow-xl transition duration-300">
        <img src="images/Cricket.jpg" class="w-full h-48 object-cover" alt="Post Match Report">
        <div class="p-4">
          <h3 class="text-xl font-semibold">DRUA OUTCLASSED IN SUNCORP</h3>
          <p class="text-gray-600 text-sm">The Swire Shipping Fijian Drua have bowed out of the...</p>
          <p class="text-xs text-gray-400 mt-2">31 May 2025 • News</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-black text-white text-center py-4 mt-10">
    <p class="text-sm">© 2025 IBNSPORTS | All rights reserved.</p>
  </footer>

  <!-- Scripts -->
  <script>
    const menuButton = document.getElementById("menuButton");
    const sidebar = document.getElementById("sidebar");
    const closeSidebar = document.getElementById("closeSidebar");

    menuButton.addEventListener("click", () => {
      sidebar.classList.toggle("-translate-x-full");
    });

    closeSidebar.addEventListener("click", () => {
      sidebar.classList.add("-translate-x-full");
    });

    let lastScrollTop = 0;
    const navbar = document.getElementById("navbar");
    window.addEventListener("scroll", function () {
      const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
      navbar.style.top = scrollTop > lastScrollTop ? "-100px" : "0";
      lastScrollTop = scrollTop;
    });
  </script>
</body>
</html>
