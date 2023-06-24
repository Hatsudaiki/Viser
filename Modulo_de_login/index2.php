!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>VISER</title>
    <link rel="stylesheet" href="asset/styles2.css" />
    <link flex href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <script src="script2.js" defer></script>
  </head>
  <body>
    <nav class="sidebar locked">
      <div class="logo_items flex">
        <span class="nav_image">
          <img src="../Pagina/asset/imagenes/WhatsApp Image 2023-06-16 at 23.43.36.jpeg" alt="logo_img" />
        </span>
        <span class="logo_name">VISER</span>
        <i class="bx bx-lock-alt" id="lock-icon" title="Unlock Sidebar"></i>
        <i class="bx bx-x" id="sidebar-close"></i>
      </div>

      <div class="menu_container">
        <div class="menu_items">
          <ul class="menu_item">
            <div class="menu_title flex">
              <span class="title">Menu</span>
              <span class="line"></span>
            </div>
            <li class="item">
              <a href="#" class="link flex">
                <i class="bx bx-home-alt"></i>
                <span>Inicio</span>
              </a>
            </li>
            <li class="item">
              <a href="#" class="link flex">
                <i class="bx bx-grid-alt"></i>
                <span>Servicios</span>
              </a>
            </li>
          </ul>
            <li class="item">
              <a href="#" class="link flex">
                <i class="bx bxs-magic-wand"></i>
                <span>Mis servicios</span>
              </a>
            </li>
            <li class="item">
              <a href="#" class="link flex">
                <i class="bx bx-folder"></i>
                <span>Historial</span>
              </a>
            </li>
            <li class="item">
                <a href="#" class="link flex">
                  <i class="bx bx-flag"></i>
                  <span>Notificaciones</span>
                </a>
              </li>
            <li class="item">
              <a href="#" class="link flex">
                <i class="bx bx-cloud-upload"></i>
                <span>Mi cuenta</span>
              </a>
            </li>
            <li class="item">
                <a href="#" class="link flex">
                  <i class="bx bx-cloud-upload"></i>
                  <span>Ayuda/PQR</span>
                </a>
              </li>
          </ul>    
            <li class="item">
              <a href="#" class="link flex">
                <i class="bx bx-cog"></i>
                <span>Acerca de Viser</span>
              </a>
            </li>
          </ul>
        </div>

        <div class="sidebar_profile flex">
          <span class="nav_image">
            <img src="../Pagina/asset/imagenes/WhatsApp Image 2023-06-16 at 23.43.36.jpeg" alt="logo_img" />
          </span>
          <div class="data_text">
            <span class="name">Viser</span>
            <span class="email">Viserproject@gmail.com</span>
          </div>
        </div>
      </div>
    </nav>

    <!-- Navbar -->
    <nav class="navbar flex">
      <i class="bx bx-menu" id="sidebar-open"></i>
      <input type="text" placeholder="Search..." class="search_box" />
      <span class="nav_image">
        <img src="../Pagina/asset/imagenes/search_FILL0_wght400_GRAD0_opsz48.png" alt="logo_img" />
      </span>
    </nav>
  </body>
</html>