const stats = [
    {
        label: "Revenue",
        value: "186 420 ₽",
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
        value: "4 860 ₽",
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
