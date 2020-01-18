<div class="lime-sidebar">
    <div class="lime-sidebar-inner slimscroll">
        <ul class="accordion-menu">
            <li class="sidebar-title">
                Apps
            </li>
            <li>
                <a href="{{route('admin.index')}}" redirect="true"><i class="material-icons">dashboard</i>Panel</a>
            </li>
            <li>
                <a href=""><i class="material-icons">show_chart</i>Statystyki<i class="material-icons has-sub-menu">keyboard_arrow_left</i></a>
                <ul class="sub-menu">
                    <li>
                        <a href="ui-alerts.html">Ogólne</a>
                    </li>
                    <li>
                        <a href="ui-buttons.html">Użytkownicy</a>
                    </li>
                    <li>
                        <a href="ui-button-group.html">Grupy</a>
                    </li>
                    <li>
                        <a href="ui-card.html">Administracyjne</a>
                    </li>
                </ul>
            </li>
            <li class="sidebar-title">
                Zarządzanie użytkownikami
            </li>
            <li>
                <a href="{{route('admin.users.index')}}" redirect="true"><i class="material-icons">person_outline</i>Użytkownicy</a>
            </li>
            <li>
                <a href="{{route('admin.groups.index')}}" redirect="true"><i class="material-icons">group</i>Grupy</a>
            </li>
            <li>
                <a href="{{route('admin.permissions.index')}}" redirect="true"><i class="material-icons">gavel</i>Permisje</a>
            </li>
            <li class="sidebar-title">
                Zarządzanie serwisem
            </li>
            <li>
                <a href=""><i class="material-icons">settings_applications</i>Ustawienia<i
                            class="material-icons has-sub-menu">keyboard_arrow_left</i></a>
                <ul class="sub-menu">
                    <li>
                        <a href="{{route('admin.settings.main.index')}}" redirect="true">Ogólne</a>
                    </li>
                    <li>
                        <a href="{{route('admin.settings.users.index')}}" redirect="true">Użytkownicy</a>
                    </li>
                    <li>
                        <a href="{{route('admin.settings.groups.index')}}" redirect="true">Grupy</a>
                    </li>
                    <li>
                        <a href="{{route('admin.settings.administration.index')}}" redirect="true">Administracyjne</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>