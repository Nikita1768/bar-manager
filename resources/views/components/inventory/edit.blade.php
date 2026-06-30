@php use App\Enums\InventoryStatusEnum; @endphp
<x-main-component title="Edit Inventory">
    <x-sidebar/>
    <div class="content">
        <header class="header">
            <div>
                <h1>Edit Inventory</h1>
                <p>Edit a inventory session for the team, current status, notes, and counted positions.</p>
            </div>
        </header>

        <section class="grid" style="grid-template-columns: 1.1fr 0.9fr;">
            <div class="panel">
                <div class="panel__header">
                    <h2>Inventory Form</h2>
                </div>
                <form id="inventoryCreateForm" method="POST" action="{{ route('inventory.update', $inventory) }}"
                      class="inventory-form">
                    @method('PUT')
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
                                placeholder="Shaker"
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
                                placeholder="Main Bar"
                                required
                            >
                            @error('team')
                            <small class="form-error">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-grid__item">
                            <label for="status">Status</label>
                            <select id="status" name="status" class="form-input" required>
                                @foreach(InventoryStatusEnum::cases() as $status)
                                    <option
                                        value="{{ $status->value }}">{{ $status->name() }}
                                    </option>
                                @endforeach
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
                                placeholder="0-5"
                                min="0"
                                max="5"
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
                                placeholder="Count?"
                                min="0"
                                required
                            >
                            @error('count')
                            <small class="form-error">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="saveInventoryButton">
                        <button form="inventoryCreateForm" type="submit" class="button button--primary">Save Inventory</button>
                    </div>
                </form>
            </div>
        </section>
    </div>
<x-sidepane />
</x-main-component>
