<aside class="sidebar sidebar-icons-right sidebar-icons-boxed sidebar-expand-lg">
    <header class="sidebar-header">
        <a class="logo-icon" href="../index.html"><img src="/img/logo-icon-light.png" alt="logo icon"></a>
        <span class="logo">
          <a href="../index"><img src="/img/logo-light.png" alt="logo"></a>
        </span>
        <span class="sidebar-toggle-fold"></span>
    </header>

    <nav class="sidebar-navigation">
        <ul class="menu">

            <li class="menu-item {{ Request::is('/') ? 'active' : null }}">
                <a class="menu-link" href="/">
                    <span class="icon fa fa-home"></span>
                    <span class="title">Dashboard</span>
                </a>
            </li>

            <li class="menu-item {{ Request::is('crypto*') ? 'active' : null }}">
                <a class="menu-link" href="/crypto">
                    <span class="icon fa fa-bitcoin"></span>
                    <span class="title">Crypto Currency</span>
                </a>
            </li>
        </ul>
    </nav>

</aside>