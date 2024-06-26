<nav class="navbar">
    <div class="navbar-container">
        <div class="navbar-title">
            <div class="navbar-logo">
                <svg class="regalo-icon" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 21v-9m3-4H7.5a2.5 2.5 0 1 1 0-5c1.5 0 2.875 1.25 3.875 2.5M14 21v-9m-9 0h14v8a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1v-8ZM4 8h16a1 1 0 0 1 1 1v3H3V9a1 1 0 0 1 1-1Zm12.155-5c-3 0-5.5 5-5.5 5h5.5a2.5 2.5 0 0 0 0-5Z"/>
                </svg> 
                <a href="/PedirPedidos/componentes/cliente/principal/principal.php">Tenes que pedirlo</a>
            </div>     
        </div>
        <div class="navbar-links">
            <ul>
                <li><a href="/PedirPedidos/componentes/cliente/principal/principal.php">Inicio</a></li>
                <li><a href="/PedirPedidos/componentes/cliente/productos/productos.php">Productos</a></li>
                <li><a href="/PedirPedidos/componentes/cliente/contacto/contacto.php">Contacto</a></li>
            </ul>
        </div>
        <div class="navbar-auth">
            <?php
                session_start();

                if(isset($_SESSION['idUsuario'])){

                    echo "<a href='../login/logout.php' class='btn-logout'>Cerrar Sesión</a>";
                    
                }
                else{

                    echo "<a href='/PedirPedidos/componentes/cliente/registros/registro.php' class='btn-register'>Registrarse</a>";
                    echo "<a href='/PedirPedidos/componentes/cliente/login/login.php' class='btn-login'>Ingresar</a>";

                }
            ?>
            
            
        </div>
    </div>
</nav>
