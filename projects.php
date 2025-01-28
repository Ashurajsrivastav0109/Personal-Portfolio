<style>
    .project-section h2{
        color: #4285f4;
        font-size: 4.7rem;
        font-weight: 600;
        text-align: center;
    }

    .description{
        text-align: center;
        margin-top: .75rem;
        color: #727272;
        margin-bottom: 0px;
        font-size: 18px;
    }

    .card-container {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 20px;
      /* width: 90%; */
      max-width: 1200px;
      margin-top: 5%;
    }
    .card {
      background: #fff;
      border-radius: 12px;
      box-shadow: 0 1px 14px rgba(0, 0, 0, 0.1);
      overflow: hidden;
      transition: transform 0.2s ease;
    }
    .card:hover {
      transform: translateY(-5px);
    }
    .card img {
      width: 100%;
      height: 180px;
      object-fit: cover;
    }
    .card-content {
      padding: 15px;
    }
    .card-title {
      font-size: 1.2em;
      margin: 0 0 10px;
      color: #333;
    }
    .card-description {
      font-size: 0.9em;
      color: #666;
      margin-bottom: 10px;
    }
    .card-languages {
      font-size: 0.8em;
      /* color: #007BFF; */
      color: #727272;
    }

    .projects-icon{
      /* text-align: center; */
      display: flex;
      justify-content: center;
      margin: 16px 0px;
      width: 100% !important;
      margin-top: 36px;
    }
</style>
<div class="project-section">
    <div class="header-section">
        <h2>Projects</h2>
        <p class="description">A collection of my work showcasing skills in web development, design, and problem-solving.</p>
        <p class="description" style="margin-top: 0px !important;">Each project highlights my expertise and creativity</p>
    </div>
    <div class="card-container">
        <!-- Project Card 1 -->
        <div class="card">
            <!-- <img src="img/projects/demo.jpg" alt="Project 1"> -->
            <span class="projects-icon">
              <img src="img/projects/logos/cms.png" alt="" style="width: 121px !important; height: auto !important; text-align: center;">
            </span>
            <div class="card-content">
                <h3 class="card-title">CMS for Blog Management</h3>
                <p class="card-description">Creating a Laravel-powered CMS for efficient blog content management with an intuitive user interface and robust backend.</p>
                <p class="card-languages"> <strong style="color: #007BFF;">Languages:</strong>HTML, CSS, JavaScript, Bootstrap, Laravel, SQL</p>
                <p class="card-languages" style="margin-top: 2% !important;"><strong style="color: #007BFF;">Tools</strong> VS Code, XAMPP</p>
            </div>
        </div>
        <!-- Project Card 1 -->
        <div class="card">
            <!-- <img src="img/projects/demo.jpg" alt="Project 1"> -->
            <!-- <span class="projects-icon">
              <svg version="1.1" id="Icons" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" xml:space="preserve" width="74px" height="74px" fill="#007BFF" stroke="#007BFF"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <style type="text/css"> .st0{fill:none;stroke:;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;} .st1{fill:none;stroke:;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;} .st2{fill:none;stroke:;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-dasharray:5.2066,0;} </style> <line class="st0" x1="3" y1="11" x2="29" y2="11"></line> <line class="st0" x1="7" y1="8" x2="7" y2="8"></line> <line class="st0" x1="10" y1="8" x2="10" y2="8"></line> <line class="st0" x1="13" y1="8" x2="13" y2="8"></line> <rect x="3" y="5" class="st0" width="26" height="22"></rect> <rect x="6" y="14" class="st0" width="10" height="10"></rect> <rect x="19" y="21" class="st0" width="7" height="3"></rect> <line class="st0" x1="20" y1="15" x2="26" y2="15"></line> <line class="st0" x1="23" y1="18" x2="26" y2="18"></line> <polyline class="st0" points="6,22 12,19 16,22 "></polyline> <line class="st0" x1="9" y1="17" x2="9" y2="17"></line> </g></svg>
            </span> -->
            <span class="projects-icon">
              <img src="img/projects/logos/landing-page.png" alt="" style="width: 121px !important; height: auto !important; text-align: center;">
            </span>
            <div class="card-content">
                <h3 class="card-title">Landing Page</h3>
                <p class="card-description"><strong>"Created Custom Landing Pages for Digital Marketing Agencies and Other Businesses"</strong> Designed and developed landing pages to enhance user engagement, boost conversions, and align with each client's brand identity</p>
                <p class="card-languages"> <strong style="color: #007BFF;">Languages:</strong>HTML, CSS, JavaScript, Bootstrap, Laravel, SQL</p>
                <p class="card-languages" style="margin-top: 2% !important;"><strong style="color: #007BFF;">Tools</strong> VS Code, XAMPP</p>
            </div>
        </div>
        <!-- Project Card 1 -->
        <div class="card">
            <!-- <img src="img/projects/demo.jpg" alt="Project 1"> -->
            <span class="projects-icon">
              <img src="img/projects/logos/professional-portfolio.png" alt="" style="width: 121px !important; height: auto !important; text-align: center;">
            </span>
            <div class="card-content">
                <h3 class="card-title">Portfolio (Personal Project)</h3>
                <p class="card-description">Designed and developed a personal portfolio to showcase skills and projects with a modern, responsive design using Core PHP.</p>
                <p class="card-languages"> <strong style="color: #007BFF;">Languages:</strong> HTML, CSS, JavaScript, Bootstrap, Core PHP, SQL</p>
                <p class="card-languages" style="margin-top: 2% !important;"><strong style="color: #007BFF;">Tools</strong> VS Code, XAMPP</p>
            </div>
        </div>
        <!-- Project Card 1 -->
        <div class="card">
            <!-- <img src="img/projects/demo.jpg" alt="Project 1"> -->
            <span class="projects-icon">
              <img src="img/projects/logos/crm.png" alt="" style="width: 121px !important; height: auto !important; text-align: center;">
            </span>
            <div class="card-content">
                <h3 class="card-title">CRM (Sales Tab)</h3>
                <p class="card-description">Developed a CRM module focused on sales workflow optimization, including quotation
                generation and lead tracking within PrestaShop.</p>
                <p class="card-languages"> <strong style="color: #007BFF;">Languages:</strong> : HTML, CSS, JavaScript, Bootstrap, Prestashop, SQL</p>
                <p class="card-languages" style="margin-top: 2% !important;"><strong style="color: #007BFF;">Tools</strong> VS Code, Adminer</p>
            </div>
        </div>
        <!-- Project Card 2 -->
        <div class="card">
            <!-- <img src="img/projects/demo.jpg" alt="Project 2"> -->
            <span class="projects-icon">
              <img src="img/projects/logos/systems.png" alt="" style="width: 121px !important; height: auto !important; text-align: center;">
            </span>
            <div class="card-content">
                <h3 class="card-title">Employee Management Module</h3>
                <p class="card-description">Created a module for managing employee records, integrated seamlessly into the PrestaShop framework with SQL-backed data management.</p>
                <p class="card-languages"> <strong style="color: #007BFF;">Languages:</strong> : HTML, CSS, JavaScript, Bootstrap, Prestashop, SQL</p>
                <p class="card-languages" style="margin-top: 2% !important;"><strong style="color: #007BFF;">Tools</strong> VS Code, Adminer</p>
            </div>
        </div>
        <!-- Project Card 3 -->
        <div class="card">
            <!-- <img src="img/projects/demo.jpg" alt="Project 2"> -->
            <span class="projects-icon">
              <img src="img/projects/logos/time-management.png" alt="" style="width: 121px !important; height: auto !important; text-align: center;">
            </span>
            <div class="card-content">
                <h3 class="card-title">Attendance Module</h3>
                <p class="card-description">Built an attendance management system using QR code scanning, improving efficiency
                for employee time tracking in PrestaShop</p>
                <p class="card-languages"> <strong style="color: #007BFF;">Languages:</strong>HTML, CSS, JavaScript, Bootstrap, Prestashop, SQL</p>
                <p class="card-languages"><strong style="color: #007BFF;">Tools</strong> VS Code, Adminer</p>
            </div>
        </div>
        <!-- Project Card 4 -->
        <div class="card">
            <!-- <img src="img/projects/demo.jpg" alt="Project 2"> -->
            <span class="projects-icon">
              <img src="img/projects/logos/directory.png" alt="" style="width: 121px !important; height: auto !important; text-align: center;">
            </span>
            <div class="card-content">
                <h3 class="card-title">Azamgarh Directory</h3>
                <p class="card-description">Description: Developed a directory platform for local businesses with search functionality using Core
                PHP, SQL, and a responsive front-end</p>
                <p class="card-languages"> <strong style="color: #007BFF;">Languages:</strong> HTML, CSS, JavaScript, Bootstrap, Core PHP, SQL</p>
                <p class="card-languages" style="margin-top: 2% !important;"><strong style="color: #007BFF;">Tools</strong> VS Code, XAMPP</p>
            </div>
        </div>
        <!-- Add more cards as needed -->
    </div>
</div>
