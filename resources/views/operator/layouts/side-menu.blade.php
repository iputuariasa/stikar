<div class="nav myNav position-fixed">
    <ul class="ps-0">
        <li>
            <a href="" class="box-menu">
                <span class="iconBrand"><img src="/img/icon-stikar.png" alt=""></i></span>
                <span class="title brand">STIKAR</span>
            </a>
        </li>
        <li class="{{ Request::is('dashboard') ? 'active' : '' }}">
            <a href="/dashboard" class="box-menu">
                <span class="icon"><i class="fas fa-home"></i></span>
                <span class="title">Dashboard</span>
            </a>
        </li>
        <li class="{{ Request::is('users*') ? 'active' : '' }}">
            <a href="/users" class="box-menu">
                <span class="icon"><i class="fa-solid fa-users"></i></span>
                <span class="title">Users</span>
            </a>
        </li>
        <li>
            <form action="/logout" method="post" class="box-menu">
                @csrf
                <button type="submit" class="box-menu btn btn-link border-0 m-0 p-0">
                    <span class="icon"><i class="fas fa-sign-out-alt"></i></span>
                    <span class="title">Keluar</span>
                </button>
            </form>
        </li>
    </ul>
</div>