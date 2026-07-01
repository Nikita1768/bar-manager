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
            <article class="card"><span class="label">Number of records</span>
                <strong
                    class="value">{{ $inventories->count() }}</strong><span
                    class="note">{{ $countToday }} was updated today</span></article>
            <article class="card"><span class="label">Low Note</span><strong class="value">{{ $lowNote }}</strong><span
                    class="note" style="color:var(--color-warning)">Needs order</span></article>
            <article class="card"><span class="label">Inventory Value</span><strong class="value">{{ $totalPrice }}
                    $</strong><span
                    class="note">+3.1% this week</span></article>
        </section>

        <section>
            <div class="panel">
                <div class="panel__header"><h2 class="panel__title">Inventory Balance</h2><span class="panel__meta">Live count balance - {{ $totalCount }}</span>
                </div>
                <div class="bar-list">
                    @foreach($inventories as $inventory)
                        <div class="bar-row">
                            <div class="bar-row__top">
                                <strong>{{ $inventory->name }} in {{ $inventory->team }}</strong>

                                <span>{{ $inventory->count }}</span>

                                <div class="actions">
                                    <a
                                        class="buttonMenu button--primary"
                                        href="{{ route('inventory.edit', $inventory) }}">
                                        Edit
                                    </a>

                                    <button
                                        type="button"
                                        class="btn btn-danger btn-sm"
                                        data-bs-toggle="modal"
                                        data-bs-target="#deleteModal{{ $inventory->id }}">
                                        Delete
                                    </button>
                                </div>
                            </div>
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
@foreach($inventories as $inventory)

    <div class="modal fade"
         id="deleteModal{{ $inventory->id }}"
         tabindex="-1"
         aria-hidden="true">

        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title">
                        Delete {{ $inventory->name }}
                    </h5>

                    <button type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    Are you sure you want to delete <b>{{ $inventory->name }}</b>?
                </div>

                <div class="modal-footer">

                    <button type="button"
                            class="btn btn-secondary"
                            data-bs-dismiss="modal">
                        Cancel
                    </button>

                    <form method="POST"
                          action="{{ route('inventory.destroy', $inventory) }}">
                        @csrf
                        @method('DELETE')

                        <button type="submit"
                                class="btn btn-danger">
                            Delete
                        </button>
                    </form>

                </div>

            </div>
        </div>
    </div>

@endforeach
