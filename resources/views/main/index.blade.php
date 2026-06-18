








<!-- MAKE SOME INVENTORY CRUD -->
<!--
Make a simple start page with {{ $Slot }}
After this you can other CRUD make
-->








<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>bar-manager dashboard</title>
    <link href="https://api.fontshare.com/v2/css?f[]=satoshi@400,500,700&display=swap" rel="stylesheet">
    <style>
        :root, [data-theme="light"] {
            --font-body: 'Satoshi', Arial, sans-serif;
            --font-display: 'Satoshi', Arial, sans-serif;
            --text-xs: clamp(0.75rem, 0.7rem + 0.25vw, 0.875rem);
            --text-sm: clamp(0.875rem, 0.8rem + 0.35vw, 1rem);
            --text-base: clamp(1rem, 0.95rem + 0.25vw, 1.125rem);
            --text-lg: clamp(1.125rem, 1rem + 0.75vw, 1.5rem);
            --text-xl: clamp(1.5rem, 1.2rem + 1.25vw, 2.25rem);
            --space-1: 0.25rem;
            --space-2: 0.5rem;
            --space-3: 0.75rem;
            --space-4: 1rem;
            --space-5: 1.25rem;
            --space-6: 1.5rem;
            --space-8: 2rem;
            --space-10: 2.5rem;
            --space-12: 3rem;
            --space-16: 4rem;
            --radius-sm: 0.375rem;
            --radius-md: 0.5rem;
            --radius-lg: 0.75rem;
            --radius-xl: 1rem;
            --radius-full: 9999px;
            --transition-interactive: 180ms cubic-bezier(0.16, 1, 0.3, 1);
            --color-bg: #f4ecdf;
            --color-surface: #fff8eb;
            --color-surface-2: #fffdf7;
            --color-surface-offset: #eee1cf;
            --color-border: #d8ccbb;
            --color-divider: #d8ccbb;
            --color-text: #171714;
            --color-text-muted: #746d63;
            --color-text-faint: #a59b8f;
            --color-text-inverse: #fff8ed;
            --color-primary: #a85f32;
            --color-primary-hover: #8d4d24;
            --color-primary-active: #6f3c1a;
            --color-primary-highlight: #ecd7c8;
            --color-success: #437a22;
            --color-success-highlight: #d8e8ce;
            --color-warning: #b97912;
            --color-warning-highlight: #f4dfaa;
            --color-error: #b84c3d;
            --color-error-highlight: #f4d4cc;
            --color-sidebar: #191713;
            --shadow-sm: 0 1px 2px rgba(40,31,20,.06);
            --shadow-md: 0 10px 24px rgba(40,31,20,.1);
            --shadow-lg: 0 16px 40px rgba(40,31,20,.14);
        }

        [data-theme="dark"] {
            --color-bg: #171614;
            --color-surface: #1f1d1a;
            --color-surface-2: #25231f;
            --color-surface-offset: #2c2925;
            --color-border: #3b3832;
            --color-divider: #35322d;
            --color-text: #ece7df;
            --color-text-muted: #b1a89a;
            --color-text-faint: #80796f;
            --color-text-inverse: #151412;
            --color-primary: #d99a6d;
            --color-primary-hover: #e6ae84;
            --color-primary-active: #f3c59c;
            --color-primary-highlight: #3f3128;
            --color-success: #78b457;
            --color-success-highlight: #33422d;
            --color-warning: #e4b24f;
            --color-warning-highlight: #483b24;
            --color-error: #d97b6d;
            --color-error-highlight: #49302a;
            --color-sidebar: #11100e;
            --shadow-sm: 0 1px 2px rgba(0,0,0,.22);
            --shadow-md: 0 10px 24px rgba(0,0,0,.28);
            --shadow-lg: 0 16px 40px rgba(0,0,0,.38);
        }

        * , *::before, *::after { box-sizing: border-box; }
        html, body { height: 100%; margin: 0; overflow: hidden; }
        body {
            min-height: 100dvh;
            font-family: var(--font-body);
            font-size: var(--text-base);
            line-height: 1.5;
            color: var(--color-text);
            background:
                radial-gradient(circle at top left, rgba(168,95,50,.10), transparent 28%),
                radial-gradient(circle at bottom right, rgba(94,168,120,.08), transparent 24%),
                var(--color-bg);
        }
        img, svg { display: block; max-width: 100%; }
        button, input, select, textarea { font: inherit; color: inherit; }
        button {
            border: 0;
            cursor: pointer;
            transition: background var(--transition-interactive), color var(--transition-interactive), border-color var(--transition-interactive), transform var(--transition-interactive);
        }
        :focus-visible {
            outline: 2px solid var(--color-primary);
            outline-offset: 2px;
            border-radius: var(--radius-sm);
        }

        .app {
            display: grid;
            grid-template-columns: 240px minmax(0, 1fr) 320px;
            grid-template-rows: 100dvh;
            height: 100dvh;
        }

        .sidebar {
            overflow-y: auto;
            padding: var(--space-6) var(--space-4);
            background: var(--color-sidebar);
            color: var(--color-text-inverse);
            border-right: 1px solid rgba(255,255,255,.06);
        }

        .brand {
            display: grid;
            gap: var(--space-3);
            margin-bottom: var(--space-8);
        }

        .brand__link {
            display: block;
            width: 100%;
            padding: 0;
            margin: 0;
            text-decoration: none;
            color: inherit;
        }

        .brand__logo {
            display: block;
            width: 100%;
            max-width: 220px;
            min-height: 72px;
            padding: 0;
            margin: 0;
            border: 0;
            border-radius: 0;
            background: transparent;
            object-fit: contain;
        }

        .brand__meta {
            color: rgba(255,248,237,.65);
            font-size: var(--text-xs);
            letter-spacing: .08em;
            text-transform: uppercase;
        }

        .theme-toggle {
            width: 100%;
            min-height: 44px;
            padding: 0 var(--space-4);
            border-radius: var(--radius-md);
            color: var(--color-text-inverse);
            background: rgba(255,255,255,.06);
            border: 1px solid rgba(255,255,255,.08);
            text-align: left;
        }

        .nav {
            display: grid;
            gap: var(--space-2);
            margin-top: var(--space-6);
        }

        .nav__item {
            display: flex;
            align-items: center;
            gap: var(--space-3);
            width: 100%;
            min-height: 46px;
            padding: 0 var(--space-4);
            border-radius: var(--radius-md);
            color: #efe3d3;
            background: transparent;
            text-align: left;
        }

        .nav__item:hover,
        .nav__item.is-active {
            background: rgba(255,255,255,.10);
        }

        .nav__dot {
            width: 9px;
            height: 9px;
            border-radius: var(--radius-full);
            background: currentColor;
            opacity: .7;
            flex: none;
        }

        .main {
            overflow-y: auto;
            padding: var(--space-6);
        }

        .topbar {
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            gap: var(--space-4);
            margin-bottom: var(--space-6);
        }

        .eyebrow {
            margin: 0 0 var(--space-2);
            color: var(--color-text-muted);
            font-size: var(--text-xs);
            text-transform: uppercase;
            letter-spacing: .08em;
        }

        .title {
            margin: 0 0 var(--space-2);
            font-size: var(--text-xl);
            line-height: 1.1;
        }

        .subtitle {
            margin: 0;
            color: var(--color-text-muted);
            max-width: 68ch;
        }

        .actions {
            display: flex;
            gap: var(--space-2);
            flex-wrap: wrap;
        }

        .button {
            min-height: 40px;
            padding: 0 var(--space-4);
            border-radius: var(--radius-md);
            border: 1px solid var(--color-border);
            background: var(--color-surface);
            box-shadow: var(--shadow-sm);
        }

        .button--primary {
            border-color: var(--color-primary);
            color: #fff8ed;
            background: var(--color-primary);
        }

        .button--primary:hover { background: var(--color-primary-hover); }
        .button--soft { background: var(--color-surface-2); }

        .stats {
            display: grid;
            grid-template-columns: repeat(4, minmax(0, 1fr));
            gap: var(--space-3);
            margin-bottom: var(--space-4);
        }

        .card, .panel {
            border: 1px solid var(--color-border);
            border-radius: var(--radius-lg);
            background: rgba(255,248,235,.88);
            box-shadow: var(--shadow-md);
            backdrop-filter: blur(8px);
        }

        [data-theme="dark"] .card,
        [data-theme="dark"] .panel {
            background: rgba(31,29,26,.92);
        }

        .card { padding: var(--space-4); }
        .label {
            display: block;
            color: var(--color-text-muted);
            font-size: var(--text-xs);
            text-transform: uppercase;
            letter-spacing: .08em;
            margin-bottom: var(--space-3);
        }
        .value {
            font-size: clamp(1.5rem, 1.3rem + 1vw, 2rem);
            font-weight: 700;
            font-variant-numeric: tabular-nums lining-nums;
        }
        .note {
            display: block;
            margin-top: var(--space-2);
            color: var(--color-success);
            font-size: var(--text-sm);
        }

        .content-grid {
            display: grid;
            grid-template-columns: minmax(0, 1.45fr) minmax(280px, .85fr);
            gap: var(--space-4);
        }

        .panel { padding: var(--space-4); }
        .panel__header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: var(--space-3);
            margin-bottom: var(--space-4);
        }
        .panel__title {
            margin: 0;
            font-size: var(--text-lg);
        }
        .panel__meta {
            color: var(--color-text-muted);
            font-size: var(--text-sm);
        }

        table {
            width: 100%;
            min-width: 620px;
            border-collapse: collapse;
            font-variant-numeric: tabular-nums lining-nums;
        }
        th, td {
            padding: .85rem .6rem;
            border-bottom: 1px solid var(--color-divider);
            text-align: left;
            vertical-align: middle;
        }
        th {
            color: var(--color-text-muted);
            font-size: var(--text-xs);
            text-transform: uppercase;
            letter-spacing: .08em;
        }
        td { font-size: var(--text-sm); }
        .table-wrap { overflow-x: auto; }

        .item-title { display: block; font-weight: 700; }
        .item-subtitle { display: block; color: var(--color-text-muted); font-size: var(--text-xs); margin-top: .15rem; }

        .progress {
            width: 132px;
            height: 10px;
            border-radius: var(--radius-full);
            background: var(--color-surface-offset);
            overflow: hidden;
        }
        .progress__bar {
            height: 100%;
            border-radius: inherit;
            background: linear-gradient(90deg, var(--color-primary), #d7a275);
        }

        .badge {
            display: inline-flex;
            align-items: center;
            min-height: 26px;
            padding: 0 .65rem;
            border-radius: var(--radius-full);
            font-size: var(--text-xs);
            font-weight: 700;
        }
        .badge--ok { color: var(--color-success); background: var(--color-success-highlight); }
        .badge--warning { color: #7b540f; background: var(--color-warning-highlight); }
        .badge--danger { color: #823428; background: var(--color-error-highlight); }

        .list {
            display: grid;
            gap: var(--space-3);
        }
        .list-card {
            display: flex;
            justify-content: space-between;
            gap: var(--space-3);
            padding: var(--space-4);
            border: 1px solid var(--color-border);
            border-radius: var(--radius-md);
            background: var(--color-surface-2);
        }
        .list-card small,
        .list-card span {
            display: block;
            color: var(--color-text-muted);
            font-size: var(--text-sm);
            margin-top: .25rem;
        }
        .pill-value {
            color: var(--color-success);
            font-weight: 700;
            white-space: nowrap;
            font-variant-numeric: tabular-nums lining-nums;
        }

        .sidepane {
            overflow-y: auto;
            padding: var(--space-6) var(--space-4);
            border-left: 1px solid var(--color-border);
            background: rgba(255,248,235,.55);
        }
        [data-theme="dark"] .sidepane { background: rgba(31,29,26,.7); }

        .search input,
        .input,
        .select {
            width: 100%;
            min-height: 44px;
            padding: 0 .85rem;
            border: 1px solid var(--color-border);
            border-radius: var(--radius-md);
            background: var(--color-surface);
            color: var(--color-text);
        }

        .stack { display: grid; gap: var(--space-4); }
        .check {
            display: grid;
            grid-template-columns: auto 1fr;
            gap: var(--space-3);
            align-items: start;
            padding: var(--space-3);
            border-radius: var(--radius-md);
            border: 1px solid var(--color-border);
            background: var(--color-surface-2);
        }
        .check input {
            width: 18px;
            height: 18px;
            margin-top: .15rem;
            accent-color: var(--color-primary);
        }
        .muted { color: var(--color-text-muted); }
        .tiny { font-size: var(--text-xs); }

        .view { display: none; }
        .view.is-active { display: block; }

        .two-col,
        .three-col {
            display: grid;
            gap: var(--space-4);
        }
        .two-col { grid-template-columns: repeat(2, minmax(0,1fr)); }
        .three-col { grid-template-columns: repeat(3, minmax(0,1fr)); }

        .kpi-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0,1fr));
            gap: var(--space-3);
            margin-bottom: var(--space-4);
        }

        .bar-list { display: grid; gap: var(--space-3); }
        .bar-row { display: grid; gap: .45rem; }
        .bar-row__top {
            display: flex;
            justify-content: space-between;
            gap: var(--space-3);
            font-size: var(--text-sm);
        }

        .feed-item,
        .event,
        .task,
        .form-grid__item {
            padding: var(--space-4);
            border: 1px solid var(--color-border);
            border-radius: var(--radius-md);
            background: var(--color-surface-2);
        }

        .form-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0,1fr));
            gap: var(--space-3);
        }
        .form-grid__item label {
            display: block;
            margin-bottom: .4rem;
            font-size: var(--text-xs);
            color: var(--color-text-muted);
            text-transform: uppercase;
            letter-spacing: .06em;
        }

        .footer-note {
            margin-top: var(--space-4);
            color: var(--color-text-muted);
            font-size: var(--text-sm);
        }

        @media (max-width: 1200px) {
            .app { grid-template-columns: 220px minmax(0, 1fr); }
            .sidepane { grid-column: 1 / -1; border-left: 0; border-top: 1px solid var(--color-border); }
            .stats { grid-template-columns: repeat(2, minmax(0,1fr)); }
        }

        @media (max-width: 920px) {
            html, body { overflow: auto; }
            .app {
                grid-template-columns: 1fr;
                grid-template-rows: auto auto auto;
                height: auto;
            }
            .sidebar, .main, .sidepane { overflow: visible; }
            .nav { grid-template-columns: repeat(2, minmax(0,1fr)); }
            .content-grid, .two-col, .three-col, .kpi-grid, .form-grid { grid-template-columns: 1fr; }
            .stats { grid-template-columns: 1fr; }
            .topbar { flex-direction: column; }
        }

        @media (max-width: 640px) {
            .main, .sidebar, .sidepane { padding: var(--space-4); }
            .nav { grid-template-columns: 1fr; }
            .actions { width: 100%; }
            .button { width: 100%; }
        }
    </style>
</head>
<body>
<div class="app">
    <!-- SIDEBAR -->
    <x-sidebar />
    <!-- MAIN MENU -->
    <x-main />
    <!-- RIGHT MENU -->
    <x-sidepane />
    @include('inventory.create');
</div>

<script>
    const navButtons = document.querySelectorAll('[data-view-target]');
    const views = document.querySelectorAll('.view');
    const root = document.documentElement;
    const themeButton = document.querySelector('[data-theme-toggle]');
    let theme = window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';

    function applyTheme(nextTheme) {
        theme = nextTheme;
        root.setAttribute('data-theme', theme);
        themeButton.textContent = theme === 'dark' ? 'Switch to light mode' : 'Switch to dark mode';
    }

    function activateView(name) {
        navButtons.forEach((button) => button.classList.toggle('is-active', button.dataset.viewTarget === name));
        views.forEach((view) => view.classList.toggle('is-active', view.id === `view-${name}`));
        window.location.hash = name;
    }

    navButtons.forEach((button) => {
        button.addEventListener('click', () => activateView(button.dataset.viewTarget));
    });

    themeButton.addEventListener('click', () => {
        applyTheme(theme === 'dark' ? 'light' : 'dark');
    });

    const initialView = window.location.hash.replace('#', '') || 'shift';
    applyTheme(theme);
    activateView(initialView);
</script>
</body>
</html>
