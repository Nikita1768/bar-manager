<aside class="sidebar">
    <div class="brand">
        <a class="brand__link" href="{{ route('main') }}" aria-label="bar-manager home">
            <img src="{{ asset('img/bar-logo.jpg') }}" alt="bar-manager logo" class="brand__logo" width="190"
                 height="56">
        </a>
        <div class="brand__meta">Bar operations dashboard</div>
        <button class="theme-toggle nav__item" data-theme-toggle type="button" aria-label="Switch color theme">Toggle theme
        </button>
    </div>

    <nav class="nav" aria-label="Primary">
        <a href="{{ route('main') }}" class="nav__item @if(request()->routeIs('main')) is-active @endif "
           data-view-target="shift"><span class="nav__dot"></span>Shift</a>
        <a href="{{ route('inventory') }}"
           class="nav__item @if(request()->routeIs('inventory', 'inventory.create', 'inventory.edit')) is-active @endif"
           data-view-target="inventory"><span class="nav__dot"></span>Inventory</a>
        <a href="{{ route('cocktails')  }}" class="nav__item @if(request()->routeIs('cocktails', 'cocktails.create', 'cocktails.edit')) is-active @endif"
           data-view-target="cocktails"><span class="nav__dot"></span>Cocktails</a>
        <button class="nav__item" data-view-target="purchases"><span class="nav__dot"></span>Purchases</button>
        <button class="nav__item" data-view-target="writeoffs"><span class="nav__dot"></span>Write-offs</button>
        <button class="nav__item" data-view-target="reports"><span class="nav__dot"></span>Reports</button>
    </nav>
</aside>
