<section class="inventorySection">
    <header class="topbar">
        <div>
            <p class="eyebrow">Operations</p>
            <h1 class="title">Today's Shift</h1>
            <p class="subtitle">Stock levels, purchases, write-offs, and cocktail margins on one working screen for the bar floor.</p>
        </div>
        <div class="actions">
            <button class="button button--soft">Refresh</button>
            <button class="button button--primary">New Purchase</button>
        </div>
    </header>

    <section class="stats">
        <article class="card"><span class="label">Revenue</span><strong class="value">186 420 $</strong><span class="note">+14% vs last Friday</span></article>
        <article class="card"><span class="label">Cost Ratio</span><strong class="value">27.8%</strong><span class="note">Within recipe target</span></article>
        <article class="card"><span class="label">To Order</span><strong class="value">9 items</strong><span class="note">3 critical</span></article>
        <article class="card"><span class="label">Write-offs</span><strong class="value">4 860 $</strong><span class="note" style="color:var(--color-error)">Above average</span></article>
    </section>

    <section class="content-grid">
        <div class="panel">
            <div class="panel__header">
                <h2 class="panel__title">Stock Control</h2>
                <button class="button">Critical</button>
            </div>
            <div class="table-wrap">
                <table>
                    <thead>
                    <tr><th>Item</th><th>Stock</th><th>Level</th><th>Usage</th><th>Status</th></tr>
                    </thead>
                    <tbody>
                    <tr><td><span class="item-title">Aperol</span><span class="item-subtitle">liquor · Italy</span></td><td>1.4 l</td><td><div class="progress"><div class="progress__bar" style="width:18%"></div></div></td><td>3.2 l/week</td><td><span class="badge badge--danger">Critical</span></td></tr>
                    <tr><td><span class="item-title">Lime</span><span class="item-subtitle">fruit · fresh</span></td><td>4.8 kg</td><td><div class="progress"><div class="progress__bar" style="width:36%"></div></div></td><td>9.6 kg/week</td><td><span class="badge badge--warning">Order</span></td></tr>
                    <tr><td><span class="item-title">Gin London Dry</span><span class="item-subtitle">liquor · base</span></td><td>7.0 l</td><td><div class="progress"><div class="progress__bar" style="width:72%"></div></div></td><td>5.1 l/week</td><td><span class="badge badge--ok">OK</span></td></tr>
                    <tr><td><span class="item-title">Simple Syrup</span><span class="item-subtitle">prep · 1:1</span></td><td>2.2 l</td><td><div class="progress"><div class="progress__bar" style="width:42%"></div></div></td><td>4.5 l/week</td><td><span class="badge badge--warning">Prep</span></td></tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="panel">
            <div class="panel__header">
                <h2 class="panel__title">Recipe Cards</h2>
                <button class="button">Add</button>
            </div>
            <div class="list">
                <article class="list-card"><div><strong>Aperol Spritz</strong><span>Aperol, prosecco, soda, orange</span></div><div class="pill-value">72%</div></article>
                <article class="list-card"><div><strong>Gin Basil Smash</strong><span>gin, basil, lemon, syrup</span></div><div class="pill-value">68%</div></article>
                <article class="list-card"><div><strong>Whiskey Sour</strong><span>bourbon, lemon, syrup, bitter</span></div><div class="pill-value">64%</div></article>
                <article class="list-card"><div><strong>Paloma</strong><span>tequila, grapefruit, lime, soda</span></div><div class="pill-value">70%</div></article>
            </div>
        </div>
    </section>
</section>
