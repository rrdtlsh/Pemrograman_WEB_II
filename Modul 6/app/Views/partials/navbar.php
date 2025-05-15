<style>
    .navbar-custom {
        background: linear-gradient(90deg, #4e54c8, #8f94fb);
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        font-family: 'Poppins', sans-serif;
        padding: 1rem 0;
        font-size: 1.1rem;
    }

    .navbar-custom .navbar-brand {
        font-weight: bold;
        color: #fff;
        font-size: 1.3rem;
        transition: 0.3s ease;
    }

    .navbar-custom .navbar-brand:hover {
        color: #ffe173;
    }

    .navbar-custom .nav-link {
        color: #f8f9fa !important;
        font-weight: 500;
        margin-right: 1rem;
        transition: all 0.3s ease;
        position: relative;
    }

    .navbar-custom .nav-link::after {
        content: '';
        position: absolute;
        width: 0%;
        height: 2px;
        bottom: -4px;
        left: 0;
        background-color: #ffe173;
        transition: width 0.3s;
    }

    .navbar-custom .nav-link:hover::after,
    .navbar-custom .nav-link.active::after {
        width: 100%;
    }

    .navbar-custom .nav-link:hover {
        color: #ffe173 !important;
        transform: scale(1.05);
    }

    .navbar-toggler {
        border-color: rgba(255, 255, 255, 0.3);
    }

    .navbar-toggler-icon {
        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba%28255,255,255,0.8%29' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
    }

    .navbar-nav .nav-link.active {
        color: #ffe173 !important;
    }
</style>

<nav class="navbar navbar-expand-lg navbar-custom fixed-top">
    <div class="container">
        <a class="navbar-brand" href="/">🌟 Praktikum 6</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link <?= uri_string() === '' ? 'active' : '' ?>" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= uri_string() === 'beranda' ? 'active' : '' ?>" href="/beranda">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= uri_string() === 'profil' ? 'active' : '' ?>" href="/profil">Profil</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div style="padding-top: 80px;"></div>