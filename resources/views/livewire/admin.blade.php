<div class="container">
    <div class="sidebar">
        <h2>ADMIN</h2>
        <ul>
            <li><a href="#">Inicio</a></li>
            <li><a href="#" id="manage-users-link">Usuarios</a></li>
            <li><a href="#">Configuración</a></li>
            <li>
                <a href="{{ route('logout') }}" class="sub-menu-link"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    <p>LOG OUT</p>
                </a>
            </li>
        </ul>
    </div>
    
</div>
