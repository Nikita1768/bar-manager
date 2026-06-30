<x-main-component title="New Inventory">
    <x-sidebar/>
    <section class="inventorySection">
        <header class="topbar">
            <div>
                <p class="eyebrow">Storage</p>
                <h1 class="title">Inventory</h1>
                <p class="subtitle">Here you can add, edit or update our inventory.</p>
            </div>
        </header>

        <section class="kpi-grid">
            <article class="card"><span class="label">Total Count</span><strong
                    class="value">{{ $inventories->count() }}</strong><span
                    class="note">{{ $countToday }} updated today</span></article>
            <article class="card"><span class="label">Low Note</span><strong class="value">{{ $lowNote }}</strong><span
                    class="note" style="color:var(--color-warning)">Needs order</span></article>
            <article class="card"><span class="label">Inventory Value</span><strong class="value">{{ $totalPrice }} $</strong><span
                    class="note">+3.1% this week</span></article>
        </section>

        <section>
            <div class="panel">
                <div class="panel__header"><h2 class="panel__title">Inventory Balance</h2><span class="panel__meta">Live count balance - {{ $totalCount }}</span>
                </div>
                <div class="bar-list">
                    @foreach($inventories as $inventory)
                        <div class="bar-row">
                            <div class="bar-row__top"><strong>{{ $inventory->name }}
                                    in {{ $inventory->team }}</strong><span>{{ $inventory->count }}</span><a
                                    class="buttonMenu button--primary" href="{{ route('inventory.edit', $inventory->id) }}">Edit
                                    Inventory</a></div>
                            <div class="progress">
                                <div class="progress__bar"
                                     style="width:{{ $inventory->count / $totalCount * 100 }}%"></div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="actions">
                <a class="button button--primary" href="{{ route('inventory.create') }}">Add Inventory</a>

            </div>
        </section>
    </section>
    <x-sidepane/>
</x-main-component>
