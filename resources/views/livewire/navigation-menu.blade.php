<link rel="stylesheet" href="{{ asset('css/navmenu.css') }}">
<script src="https://unpkg.com/feather-icons"></script>
<script src="https://code.jquery.com/jquery-3.6.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


<img src="{{ asset('/img/user-thumb.png') }}" class="user-pic" onclick="toggleMenu()" />
<div class="MenuSub" id="subMenu">
    <div class="sub-menu">
        <div class="user-info">
            <h4>{{ Auth::user()->name }} ({{ strtoupper(Auth::user()->role->role_name) }})</h4>
        </div>
        <hr class="line">

        @if (Auth::user()->role->role_name == 'Administrator')
            <p>BIENVENIDO {{ Auth::user()->name }}</p>
        @endif

        @if (Auth::user()->role->role_name == 'Recruiter')
            <!-- Recruiter Options -->
            <a href="{{ route('company.index') }}" class="sub-menu-link">
                <i data-feather="user" class="icon"></i>
                <p>MANAGE COMPANY</p>
                <span> </span>
            </a>
            <a href="{{ route('offer.index') }}" class="sub-menu-link">
                <i data-feather="clipboard" class="icon"></i>
                <p>MANAGE OFFERS</p>
                <span> </span>
            </a>
        @endif

        @if (Auth::user()->role->role_name == 'Candidate')
            <!-- Candidate Options -->
            <a href="" class="sub-menu-link">
                <i data-feather="user" class="icon"></i>
                <p>EDIT PROFILE</p>
                <span> </span>
            </a>
            <a href="{{ route('dashboard')}}" class="sub-menu-link">
                <i data-feather="eye" class="icon"></i>
                <p>SHOW OFFERS</p>
                <span> </span>
            </a>
        @endif

        <a href="{{ route('logout') }}" class="sub-menu-link"
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            <i data-feather="log-out" class="icon"></i>
            <p>LOG OUT</p>
            <span> </span>
        </a>
    </div>
</div>

<script>
    feather.replace();
</script>

<script>
    let subMenu = document.getElementById("subMenu");

    function toggleMenu() {
        subMenu.classList.toggle("open-menu");
    }
</script>
