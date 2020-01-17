<nav id="tm-header" class="uk-navbar  ">
    <div class="uk-container uk-container-center ">
        <router-link to="/" tag="a" class="uk-navbar-brand uk-hidden-small"><i
                    class="uk-icon-small uk-text-primary uk-margin-small-right uk-icon-play-circle"></i> HypeMovie
        </router-link>

        <form class="uk-search uk-margin-small-top uk-margin-left uk-hidden-small">
            <input class="uk-search-field" type="search" placeholder="Szukaj..." autocomplete="off">
            <div class="uk-dropdown uk-dropdown-flip uk-dropdown-search" aria-expanded="false"></div>
        </form>
        <div class="uk-navbar-flip uk-hidden-small">
            <div class="uk-button-group">
                <router-link to="/register" tag="a" class="uk-button uk-button-link uk-button-large">Rejestracja
                </router-link>
                <router-link to="/login" tag="a" class="uk-button uk-button-success uk-button-large uk-margin-left"><i
                            class="uk-icon-lock uk-margin-small-right"></i> Logowanie
                </router-link>
            </div>
        </div>
        <a href="#offcanvas" class="uk-navbar-toggle uk-visible-small uk-icon-medium" data-uk-offcanvas></a>
        <div class="uk-navbar-flip uk-visible-small">
            <a href="#offcanvas" class="uk-navbar-toggle uk-navbar-toggle-alt uk-icon-medium" data-uk-offcanvas></a>
        </div>
        <div class="uk-navbar-brand uk-navbar-center uk-visible-small"><i
                    class="uk-icon-small uk-text-primary uk-margin-small-right uk-icon-play-circle"></i> HypeMovie
        </div>
    </div>
</nav>