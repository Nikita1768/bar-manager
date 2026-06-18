<section class="view" id="view-purchases">
    <header class="topbar">
        <div>
            <p class="eyebrow">Supply</p>
            <h1 class="title">Purchases</h1>
            <p class="subtitle">Pending orders, supplier contacts, received goods, and planned spend for the
                week.</p>
        </div>
        <div class="actions">
            <button class="button">Supplier List</button>
            <button class="button button--primary">Create PO</button>
        </div>
    </header>

    <section class="two-col">
        <div class="panel">
            <div class="panel__header"><h2 class="panel__title">Open Purchase Orders</h2><span class="panel__meta">4 awaiting action</span>
            </div>
            <div class="table-wrap">
                <table>
                    <thead>
                    <tr>
                        <th>PO</th>
                        <th>Supplier</th>
                        <th>Amount</th>
                        <th>ETA</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>#PO-1048</td>
                        <td>North Supply</td>
                        <td>1 240 $</td>
                        <td>Today</td>
                        <td><span class="badge badge--warning">In transit</span></td>
                    </tr>
                    <tr>
                        <td>#PO-1049</td>
                        <td>Milano Drinks</td>
                        <td>860 $</td>
                        <td>Tomorrow</td>
                        <td><span class="badge badge--ok">Confirmed</span></td>
                    </tr>
                    <tr>
                        <td>#PO-1050</td>
                        <td>Fresh Market</td>
                        <td>320 $</td>
                        <td>08:00</td>
                        <td><span class="badge badge--danger">Check qty</span></td>
                    </tr>
                    <tr>
                        <td>#PO-1051</td>
                        <td>Ice Factory</td>
                        <td>110 $</td>
                        <td>17:00</td>
                        <td><span class="badge badge--ok">Booked</span></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="panel">
            <div class="panel__header"><h2 class="panel__title">New Purchase Draft</h2><span class="panel__meta">Quick entry</span>
            </div>
            <div class="form-grid">
                <div class="form-grid__item"><label>Supplier</label><input class="input" value="North Supply"></div>
                <div class="form-grid__item"><label>Delivery date</label><input class="input" value="2026-06-19">
                </div>
                <div class="form-grid__item"><label>Category</label><select class="select">
                        <option>Spirits</option>
                        <option>Fruit</option>
                        <option>Packaging</option>
                    </select></div>
                <div class="form-grid__item"><label>Budget cap</label><input class="input" value="1500 $"></div>
            </div>
            <p class="footer-note">Use this block as a starting form for your Laravel purchase module.</p>
        </div>
    </section>
</section>
