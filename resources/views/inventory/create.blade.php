<div class="content">
    <header class="header">
        <div>
            <h1>Create Inventory</h1>
            <p>Create a new inventory session for the team, current status, notes, and counted positions.</p>
        </div>

        <div class="header__actions">
            <a href="{{ route('inventory') }}" class="button button--light">Back to Inventory</a>
            <button form="inventoryCreateForm" type="submit" class="button button--dark">Save Inventory</button>
        </div>
    </header>

    <section class="grid" style="grid-template-columns: 1.1fr 0.9fr;">
        <div class="panel">
            <div class="panel__header">
                <h2>Inventory Form</h2>
            </div>

            <form id="inventoryCreateForm" method="POST" action="{{ route('inventory.store') }}" class="inventory-form">
                @csrf

                <div class="form-grid">
                    <div class="form-grid__item" style="grid-column: 1 / -1;">
                        <label for="name">Inventory name</label>
                        <input
                            id="name"
                            type="text"
                            name="name"
                            class="form-input"
                            value="{{ old('name') }}"
                            placeholder="Example: Friday Bar Count"
                            required
                        >
                        @error('name')
                        <small class="form-error">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-grid__item">
                        <label for="team">Team</label>
                        <input
                            id="team"
                            type="text"
                            name="team"
                            class="form-input"
                            value="{{ old('team') }}"
                            placeholder="Example: Evening shift"
                            required
                        >
                        @error('team')
                        <small class="form-error">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-grid__item">
                        <label for="status">Status</label>
                        <select id="status" name="status" class="form-input" required>
                            <option value="ACTIVE" @selected(old('status') === 'ACTIVE')>ACTIVE</option>
                            <option value="CLOSED" @selected(old('status') === 'CLOSED')>CLOSED</option>
                            <option value="DRAFT" @selected(old('status') === 'DRAFT')>DRAFT</option>
                        </select>
                        @error('status')
                        <small class="form-error">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-grid__item">
                        <label for="note">Note</label>
                        <input
                            id="note"
                            type="number"
                            name="note"
                            class="form-input"
                            value="{{ old('note') }}"
                            placeholder="Example: 12"
                            min="0"
                            required
                        >
                        @error('note')
                        <small class="form-error">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-grid__item">
                        <label for="count">Count</label>
                        <input
                            id="count"
                            type="number"
                            name="count"
                            class="form-input"
                            value="{{ old('count') }}"
                            placeholder="Example: 148"
                            min="0"
                            required
                        >
                        @error('count')
                        <small class="form-error">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
            </form>
        </div>

        <div class="panel panel--flat">
            <div class="panel__header">
                <h2>Field Mapping</h2>
            </div>

            <div class="event-list">
                <article class="event">
                    <strong>name</strong>
                    <span>String field for the inventory session title.</span>
                </article>

                <article class="event">
                    <strong>team</strong>
                    <span>String field for the responsible team or shift.</span>
                </article>

                <article class="event">
                    <strong>status</strong>
                    <span>String field with default enum value like ACTIVE.</span>
                </article>

                <article class="event">
                    <strong>note</strong>
                    <span>Integer field from DB, so here it is a numeric input.</span>
                </article>

                <article class="event">
                    <strong>count</strong>
                    <span>Integer field for total quantity or number of counted entries.</span>
                </article>
            </div>
        </div>
    </section>
</div>
