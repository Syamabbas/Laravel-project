<!-- ======= Header/Navbar ======= -->
<nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
        <div class="container">
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false"
                aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>
            @guest     
                <a class="navbar-brand text-brand" href="/"><span class="color-b">E</span> Fashion</a>
            @endguest
            <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
                <ul class="navbar-nav">

                    @guest
                        <li class="nav-item">
                            <a class="nav-link {{ ($title === "home")? 'active' : '' }}" href="/">Home</a>
                        </li>
                    @endguest
                    @guest
                        <li class="nav-item">
                            <a class="nav-link " href="/signin">sign in</a>
                        </li>
                    @endguest

                    <li class="nav-item">
                        <a class="nav-link {{ ($title === "produk")? 'active' : '' }}" href="/produk">Produk</a>
                    </li>

                    @guest
                        <li class="nav-item">
                            <a class="nav-link " href="/login">log in</a>
                        </li>
                    @endguest

                    @auth
                        <form action="/logout" method="post">
                            @csrf
                            <button class="nav-link dropdown-item d-flex align-items-center"><span>log Out</span></button>

                            
                        </form>
                    @endauth
                </ul>
            </div>

            <button type="button" class="btn btn-b-n navbar-toggle-box navbar-toggle-box-collapse"
                data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01">
                <i class="bi bi-search"></i>
            </button>

        </div>
    </nav>
    <!-- End Header/Navbar -->