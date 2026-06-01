<html lang="en"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bar-manager</title>

    <style>
        :root {
            --bg: #e8dfd1;
            --text: #171714;
            --muted: #746d63;
            --dark: #191713;
            --panel: #fff8eb;
            --line: #d8ccbb;
            --green: #5ea878;
            --yellow: #c88f2a;
            --red: #b84c3d;
            --copper: #a85f32;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            color: var(--text);
            font-family: Arial, sans-serif;
            background:
                linear-gradient(135deg, rgba(168, 95, 50, 0.16), transparent 34%),
                linear-gradient(315deg, rgba(94, 168, 120, 0.14), transparent 30%),
                var(--bg);
        }

        button,
        input {
            font: inherit;
        }

        .layout {
            display: grid;
            grid-template-columns: 220px 1fr 300px;
            min-height: 100vh;
        }

        .sidebar {
            padding: 24px 16px;
            color: #fff8ed;
            background: var(--dark);
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 28px;
        }

        .logo__mark {
            display: grid;
            width: 42px;
            height: 42px;
            place-items: center;
            border-radius: 8px;
            background: var(--copper);
            font-weight: 700;
        }

        .logo span {
            display: block;
            color: #c7bcad;
            font-size: 12px;
        }

        .menu {
            display: grid;
            gap: 6px;
        }

        .menu__item {
            width: 100%;
            padding: 11px 12px;
            color: #e8dfd1;
            text-align: left;
            border: 0;
            border-radius: 7px;
            background: transparent;
            cursor: pointer;
        }

        .menu__item:hover,
        .menu__item--active {
            background: rgba(255, 255, 255, 0.1);
        }

        .content {
            min-width: 0;
            padding: 24px;
        }

        .header {
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            gap: 20px;
            margin-bottom: 20px;
        }

        h1,
        h2,
        p {
            margin-top: 0;
        }

        h1 {
            margin-bottom: 6px;
            font-size: 42px;
            font-weight: 700;
        }

        h2 {
            margin-bottom: 0;
            font-size: 18px;
        }

        p {
            color: var(--muted);
        }

        .header__actions {
            display: flex;
            gap: 8px;
        }

        .button {
            min-height: 38px;
            padding: 0 14px;
            border: 1px solid var(--line);
            border-radius: 7px;
            cursor: pointer;
        }

        .button--light {
            color: var(--text);
            background: var(--panel);
        }

        .button--dark {
            color: #fff8ed;
            border-color: var(--dark);
            background: var(--dark);
        }

        .stats {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 12px;
            margin-bottom: 16px;
        }

        .stat-card,
        .panel {
            border: 1px solid var(--line);
            border-radius: 8px;
            background: rgba(255, 248, 235, 0.92);
            box-shadow: 0 12px 28px rgba(40, 31, 20, 0.1);
        }

        .stat-card {
            padding: 16px;
        }

        .stat-card__label {
            display: block;
            margin-bottom: 10px;
            color: var(--muted);
            font-size: 12px;
            text-transform: uppercase;
        }

        .stat-card__value {
            display: block;
            font-size: 28px;
            font-weight: 700;
        }

        .stat-card__note {
            display: block;
            margin-top: 8px;
            color: var(--green);
            font-size: 13px;
        }

        .grid {
            display: grid;
            grid-template-columns: 1.4fr 0.8fr;
            gap: 16px;
        }

        .panel {
            padding: 16px;
        }

        .panel--flat {
            box-shadow: none;
        }

        .panel__header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 12px;
            margin-bottom: 14px;
        }

        .table-wrap {
            overflow-x: auto;
        }

        table {
            width: 100%;
            min-width: 640px;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 12px 8px;
            border-bottom: 1px solid var(--line);
            text-align: left;
        }

        th {
            color: var(--muted);
            font-size: 12px;
            text-transform: uppercase;
        }

        td {
            font-size: 14px;
        }

        .stock-title {
            display: block;
            font-weight: 700;
        }

        .stock-subtitle {
            display: block;
            color: var(--muted);
            font-size: 12px;
        }

        .progress {
            width: 120px;
            height: 9px;
            overflow: hidden;
            border-radius: 99px;
            background: #ddd2c2;
        }

        .progress__bar {
            height: 100%;
            border-radius: 99px;
            background: var(--green);
        }

        .badge {
            display: inline-block;
            padding: 5px 8px;
            border-radius: 99px;
            font-size: 12px;
            font-weight: 700;
        }

        .badge--ok {
            color: #2f6d47;
            background: #d7ecd9;
        }

        .badge--warning {
            color: #70500d;
            background: #f4dfaa;
        }

        .badge--danger {
            color: #81342b;
            background: #f4d4cc;
        }

        .recipe-list,
        .task-list,
        .event-list {
            display: grid;
            gap: 10px;
        }

        .recipe,
        .task,
        .event {
            padding: 12px;
            border: 1px solid var(--line);
            border-radius: 8px;
            background: #fffdf7;
        }

        .recipe {
            display: flex;
            justify-content: space-between;
            gap: 12px;
        }

        .recipe span,
        .task span,
        .event span {
            display: block;
            margin-top: 4px;
            color: var(--muted);
            font-size: 13px;
        }

        .recipe__margin {
            color: var(--green);
            font-weight: 700;
            white-space: nowrap;
        }

        .rightbar {
            display: grid;
            align-content: start;
            gap: 16px;
            padding: 24px 16px;
            border-left: 1px solid var(--line);
            background: rgba(255, 248, 235, 0.6);
        }

        .search input {
            width: 100%;
            min-height: 42px;
            padding: 0 12px;
            border: 1px solid var(--line);
            border-radius: 8px;
            background: var(--panel);
        }

        .task {
            display: grid;
            grid-template-columns: auto 1fr;
            gap: 10px;
            align-items: start;
        }

        .task input {
            width: 18px;
            height: 18px;
            accent-color: var(--copper);
        }

        @media (max-width: 1100px) {
            .layout {
                grid-template-columns: 190px 1fr;
            }

            .rightbar {
                grid-column: 1 / -1;
                border-top: 1px solid var(--line);
                border-left: 0;
            }
        }

        @media (max-width: 760px) {
            .layout {
                display: block;
            }

            .sidebar {
                padding: 16px;
            }

            .menu {
                grid-template-columns: repeat(3, 1fr);
            }

            .header {
                display: block;
            }

            .header__actions {
                margin-top: 14px;
            }

            .stats,
            .grid {
                grid-template-columns: 1fr;
            }

            h1 {
                font-size: 32px;
            }
        }
    </style>
</head>

<body>
<div class="layout">
    <aside class="sidebar">
        <div class="logo">
            <div class="logo__mark">BM</div>
            <div>
                <strong>Bar-manager</strong>
                <span>bar inventory</span>
            </div>
        </div>

        <nav class="menu">
            <button class="menu__item menu__item--active">Shift</button>
            <button class="menu__item">Inventory</button>
            <button class="menu__item">Cocktails</button>
            <button class="menu__item">Purchases</button>
            <button class="menu__item">Write-offs</button>
            <button class="menu__item">Reports</button>
        </nav>
    </aside>

    <main class="content">
        <header class="header">
            <div>
                <h1>Today's Shift</h1>
                <p>Stock levels, purchases, write-offs, and margins in one working screen.</p>
            </div>

            <div class="header__actions">
                <button class="button button--light">Refresh</button>
                <button class="button button--dark">New Purchase</button>
            </div>
        </header>

        <section class="stats" id="stats">
            <article class="stat-card">
                <span class="stat-card__label">Revenue</span>
                <strong class="stat-card__value">186 420 $</strong>
                <span class="stat-card__note">+14% vs last Friday</span>
            </article>

            <article class="stat-card">
                <span class="stat-card__label">Cost Ratio</span>
                <strong class="stat-card__value">27.8%</strong>
                <span class="stat-card__note">within recipe target</span>
            </article>

            <article class="stat-card">
                <span class="stat-card__label">To Order</span>
                <strong class="stat-card__value">9 items</strong>
                <span class="stat-card__note">3 critical</span>
            </article>

            <article class="stat-card">
                <span class="stat-card__label">Write-offs</span>
                <strong class="stat-card__value">4 860 $</strong>
                <span class="stat-card__note">above average</span>
            </article>
        </section>

        <section class="grid">
            <div class="panel">
                <div class="panel__header">
                    <h2>Stock Control</h2>
                    <button class="button button--light">Critical</button>
                </div>

                <div class="table-wrap">
                    <table>
                        <thead>
                        <tr>
                            <th>Item</th>
                            <th>Stock</th>
                            <th>Level</th>
                            <th>Usage</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tbody id="stockTable">
                        <tr>
                            <td>
                                <span class="stock-title">Aperol</span>
                                <span class="stock-subtitle">liquor · Italy</span>
                            </td>
                            <td>1.4 l</td>
                            <td>
                                <div class="progress">
                                    <div class="progress__bar" style="width: 18%"></div>
                                </div>
                            </td>
                            <td>3.2 l/week</td>
                            <td>
                                <span class="badge badge--danger">Critical</span>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <span class="stock-title">Lime</span>
                                <span class="stock-subtitle">fruit · fresh</span>
                            </td>
                            <td>4.8 kg</td>
                            <td>
                                <div class="progress">
                                    <div class="progress__bar" style="width: 36%"></div>
                                </div>
                            </td>
                            <td>9.6 kg/week</td>
                            <td>
                                <span class="badge badge--warning">Order</span>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <span class="stock-title">Gin London Dry</span>
                                <span class="stock-subtitle">liquor · base</span>
                            </td>
                            <td>7.0 l</td>
                            <td>
                                <div class="progress">
                                    <div class="progress__bar" style="width: 72%"></div>
                                </div>
                            </td>
                            <td>5.1 l/week</td>
                            <td>
                                <span class="badge badge--ok">OK</span>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <span class="stock-title">Simple Syrup</span>
                                <span class="stock-subtitle">prep · 1:1</span>
                            </td>
                            <td>2.2 l</td>
                            <td>
                                <div class="progress">
                                    <div class="progress__bar" style="width: 42%"></div>
                                </div>
                            </td>
                            <td>4.5 l/week</td>
                            <td>
                                <span class="badge badge--warning">Prep</span>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="panel">
                <div class="panel__header">
                    <h2>Recipe Cards</h2>
                    <button class="button button--light">Add</button>
                </div>

                <div class="recipe-list" id="recipeList">
                    <article class="recipe">
                        <div>
                            <strong>Aperol Spritz</strong>
                            <span>Aperol, prosecco, soda, orange</span>
                        </div>
                        <div class="recipe__margin">72%</div>
                    </article>

                    <article class="recipe">
                        <div>
                            <strong>Gin Basil Smash</strong>
                            <span>gin, basil, lemon, syrup</span>
                        </div>
                        <div class="recipe__margin">68%</div>
                    </article>

                    <article class="recipe">
                        <div>
                            <strong>Whiskey Sour</strong>
                            <span>bourbon, lemon, syrup, bitter</span>
                        </div>
                        <div class="recipe__margin">64%</div>
                    </article>

                    <article class="recipe">
                        <div>
                            <strong>Paloma</strong>
                            <span>tequila, grapefruit, lime, soda</span>
                        </div>
                        <div class="recipe__margin">70%</div>
                    </article>
                </div>
            </div>
        </section>
    </main>

    <aside class="rightbar">
        <div class="search">
            <input type="search" placeholder="Search item or supplier">
        </div>

        <section class="panel panel--flat">
            <div class="panel__header">
                <h2>Tasks</h2>
            </div>
            <div class="task-list" id="taskList">
                <label class="task">
                    <input type="checkbox">
                    <span>
                <strong>Check Rum Plantation</strong>
                <span>before opening · storage</span>
              </span>
                </label>

                <label class="task">
                    <input type="checkbox" checked="">
                    <span>
                <strong>Confirm ice delivery</strong>
                <span>North Supply · 80 kg</span>
              </span>
                </label>

                <label class="task">
                    <input type="checkbox">
                    <span>
                <strong>Close fruit write-off</strong>
                <span>act #284 · bar</span>
              </span>
                </label>
            </div>
        </section>

        <section class="panel panel--flat">
            <div class="panel__header">
                <h2>Bar Feed</h2>
            </div>
            <div class="event-list" id="eventList">
                <article class="event">
                    <strong>Aperol dropped below minimum</strong>
                    <span>Auto-order prepared for 6 bottles</span>
                </article>

                <article class="event">
                    <strong>Write-off: lime 1.6 kg</strong>
                    <span>Reason: soft fruit, pending head bartender approval</span>
                </article>

                <article class="event">
                    <strong>Prosecco price changed</strong>
                    <span>Supplier increased the price by 7%</span>
                </article>
            </div>
        </section>
    </aside>
</div>

<script>
    const stats = [
        {
            label: "Revenue",
            value: "186 420 $",
            note: "+14% vs last Friday",
        },
        {
            label: "Cost Ratio",
            value: "27.8%",
            note: "within recipe target",
        },
        {
            label: "To Order",
            value: "9 items",
            note: "3 critical",
        },
        {
            label: "Write-offs",
            value: "4 860 $",
            note: "above average",
        },
    ];

    const stockItems = [
        {
            name: "Aperol",
            category: "liquor · Italy",
            amount: "1.4 l",
            percent: 18,
            usage: "3.2 l/week",
            status: "Critical",
            statusType: "danger",
        },
        {
            name: "Lime",
            category: "fruit · fresh",
            amount: "4.8 kg",
            percent: 36,
            usage: "9.6 kg/week",
            status: "Order",
            statusType: "warning",
        },
        {
            name: "Gin London Dry",
            category: "liquor · base",
            amount: "7.0 l",
            percent: 72,
            usage: "5.1 l/week",
            status: "OK",
            statusType: "ok",
        },
        {
            name: "Simple Syrup",
            category: "prep · 1:1",
            amount: "2.2 l",
            percent: 42,
            usage: "4.5 l/week",
            status: "Prep",
            statusType: "warning",
        },
    ];

    const recipes = [
        {
            name: "Aperol Spritz",
            ingredients: "Aperol, prosecco, soda, orange",
            margin: "72%",
        },
        {
            name: "Gin Basil Smash",
            ingredients: "gin, basil, lemon, syrup",
            margin: "68%",
        },
        {
            name: "Whiskey Sour",
            ingredients: "bourbon, lemon, syrup, bitter",
            margin: "64%",
        },
        {
            name: "Paloma",
            ingredients: "tequila, grapefruit, lime, soda",
            margin: "70%",
        },
    ];

    const tasks = [
        {
            title: "Check Rum Plantation",
            subtitle: "before opening · storage",
            done: false,
        },
        {
            title: "Confirm ice delivery",
            subtitle: "North Supply · 80 kg",
            done: true,
        },
        {
            title: "Close fruit write-off",
            subtitle: "act #284 · bar",
            done: false,
        },
    ];

    const events = [
        {
            title: "Aperol dropped below minimum",
            text: "Auto-order prepared for 6 bottles",
        },
        {
            title: "Write-off: lime 1.6 kg",
            text: "Reason: soft fruit, pending head bartender approval",
        },
        {
            title: "Prosecco price changed",
            text: "Supplier increased the price by 7%",
        },
    ];

    function renderStats() {
        const statsElement = document.querySelector("#stats");

        statsElement.innerHTML = stats
            .map((item) => {
                return `
            <article class="stat-card">
              <span class="stat-card__label">${item.label}</span>
              <strong class="stat-card__value">${item.value}</strong>
              <span class="stat-card__note">${item.note}</span>
            </article>
          `;
            })
            .join("");
    }

    function renderStockTable() {
        const tableElement = document.querySelector("#stockTable");

        tableElement.innerHTML = stockItems
            .map((item) => {
                return `
            <tr>
              <td>
                <span class="stock-title">${item.name}</span>
                <span class="stock-subtitle">${item.category}</span>
              </td>
              <td>${item.amount}</td>
              <td>
                <div class="progress">
                  <div class="progress__bar" style="width: ${item.percent}%"></div>
                </div>
              </td>
              <td>${item.usage}</td>
              <td>
                <span class="badge badge--${item.statusType}">${item.status}</span>
              </td>
            </tr>
          `;
            })
            .join("");
    }

    function renderRecipes() {
        const recipeElement = document.querySelector("#recipeList");

        recipeElement.innerHTML = recipes
            .map((item) => {
                return `
            <article class="recipe">
              <div>
                <strong>${item.name}</strong>
                <span>${item.ingredients}</span>
              </div>
              <div class="recipe__margin">${item.margin}</div>
            </article>
          `;
            })
            .join("");
    }

    function renderTasks() {
        const taskElement = document.querySelector("#taskList");

        taskElement.innerHTML = tasks
            .map((item) => {
                const checked = item.done ? "checked" : "";

                return `
            <label class="task">
              <input type="checkbox" ${checked}>
              <span>
                <strong>${item.title}</strong>
                <span>${item.subtitle}</span>
              </span>
            </label>
          `;
            })
            .join("");
    }

    function renderEvents() {
        const eventElement = document.querySelector("#eventList");

        eventElement.innerHTML = events
            .map((item) => {
                return `
            <article class="event">
              <strong>${item.title}</strong>
              <span>${item.text}</span>
            </article>
          `;
            })
            .join("");
    }

    renderStats();
    renderStockTable();
    renderRecipes();
    renderTasks();
    renderEvents();
</script>


</body></html>
