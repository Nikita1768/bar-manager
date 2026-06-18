<section class="view" id="view-inventory">
    <header class="topbar">
        <div>
            <p class="eyebrow">Storage</p>
            <h1 class="title">Inventory</h1>
            <p class="subtitle">Current stock, par levels, supplier references, and readiness by category.</p>
        </div>
        <div class="actions">
            <a class="button button--primary" href="{{ route('inventory.create') }}">Add Inventory</a>
        </div>
    </header>

    <section class="kpi-grid">
        <article class="card"><span class="label">Total SKUs</span><strong class="value">318</strong><span class="note">24 updated today</span></article>
        <article class="card"><span class="label">Low Stock</span><strong class="value">17</strong><span class="note" style="color:var(--color-warning)">Needs order</span></article>
        <article class="card"><span class="label">Inventory Value</span><strong class="value">42 870 $</strong><span class="note">+3.1% this week</span></article>
    </section>

    <section class="two-col">
        <div class="panel">
            <div class="panel__header"><h2 class="panel__title">Category Snapshot</h2><span class="panel__meta">Live par balance</span></div>
            <div class="bar-list">
                <div class="bar-row"><div class="bar-row__top"><strong>Spirits</strong><span>82%</span></div><div class="progress"><div class="progress__bar" style="width:82%"></div></div></div>
                <div class="bar-row"><div class="bar-row__top"><strong>Fresh fruit</strong><span>41%</span></div><div class="progress"><div class="progress__bar" style="width:41%"></div></div></div>
                <div class="bar-row"><div class="bar-row__top"><strong>Syrups</strong><span>57%</span></div><div class="progress"><div class="progress__bar" style="width:57%"></div></div></div>
                <div class="bar-row"><div class="bar-row__top"><strong>Wine & bubbles</strong><span>66%</span></div><div class="progress"><div class="progress__bar" style="width:66%"></div></div></div>
            </div>
        </div>
        <div class="panel">
            <div class="panel__header"><h2 class="panel__title">Count Queue</h2><span class="panel__meta">Assigned for today</span></div>
            <div class="list">
                <article class="list-card"><div><strong>Main back bar</strong><span>42 items · bartender team</span></div><div class="pill-value">Open</div></article>
                <article class="list-card"><div><strong>Cold storage</strong><span>28 items · prep station</span></div><div class="pill-value">14:30</div></article>
                <article class="list-card"><div><strong>Wine shelf</strong><span>34 items · sommelier</span></div><div class="pill-value">18:00</div></article>
            </div>
        </div>
    </section>
</section>
