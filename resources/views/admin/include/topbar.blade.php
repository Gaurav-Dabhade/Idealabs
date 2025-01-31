<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">

                <a href="/" class="logo logo-light">

                    <span class="logo-lg">

                        <img class="imge"  src="/img/Ideamockup1.png" height="70">
                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                <i class="mdi mdi-menu"></i>
            </button>


        </div>

        <div class="d-flex">




            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle header-profile-user" src="/img/avtar.jpg"
                        alt="Header Avatar">
                </button>
                <div class="dropdown-menu dropdown-menu-right">


                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-jet-dropdown-link href="{{ route('logout') }}" class="dropdown-item text-danger"
                                            onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                       <i class="mdi mdi-power font-size-17 text-muted align-middle mr-1 text-danger"></i> Logout
                        </x-jet-dropdown-link>
                    </form>
                </div>
            </div>



        </div>
    </div>
</header>
