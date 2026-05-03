const fs = require("fs");
const path = require("path");
const { pathToFileURL } = require("url");

const rootDir = path.resolve(__dirname, "..");
const jsonPath = path.join(rootDir, "data", "portfolio-items.json");
const headerPath = path.join(rootDir, "includes", "header.html");
const footerPath = path.join(rootDir, "includes", "footer.html");
const outPath = path.join(rootDir, "portfolio-item-local.html");

function main() {
  if (!fs.existsSync(jsonPath) || !fs.existsSync(headerPath) || !fs.existsSync(footerPath)) {
    console.error("Нужны файлы: data/portfolio-items.json, includes/header.html, includes/footer.html");
    process.exit(1);
  }

  const items = JSON.parse(fs.readFileSync(jsonPath, "utf8"));
  if (!Array.isArray(items)) {
    console.error("portfolio-items.json должен быть массивом записей");
    process.exit(1);
  }

  const jsonStr = JSON.stringify(items);
  const embedded = jsonStr.replace(/</g, "\\u003c");

  const header = fs.readFileSync(headerPath, "utf8").trim();
  const footer = fs.readFileSync(footerPath, "utf8").trim();

  const html = `<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Проект | Наши работы Miracle</title>
  <meta name="description" content="Карточка объекта из портфолио Miracle. Локальная сборка без PHP.">
  <link rel="icon" href="https://float-camera.ru/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="assets/css/miracle-redesign.css">
</head>
<body class="miracle-page">
${header}
<main class="miracle-shell miracle-portfolio-detail" id="portfolio-item-root"></main>
${footer}
<script type="application/json" id="portfolio-items-embedded">${embedded}</script>
<script src="assets/js/portfolio-item.js" defer></script>
<script src="assets/js/portfolio-item-local.js" defer></script>
<script src="assets/js/miracle-redesign.js" defer></script>
</body>
</html>
`;

  fs.writeFileSync(outPath, html, "utf8");

  const outAbs = path.resolve(outPath);
  const outRel = path.relative(process.cwd(), outAbs);

  console.log("");
  console.log("[portfolio-local] Сборка готова.");
  console.log("  Файл (абсолютный путь):", outAbs);
  console.log("  Файл (от текущей папки):", outRel || ".");
  console.log("");
  console.log("[portfolio-local] Страницы шаблона (локальный HTML + ?id=):");
  items.forEach((row) => {
    const id = row && row.id != null ? row.id : "?";
    const title = row && row.title ? String(row.title) : "";
    const relPage = `portfolio-item-local.html?id=${id}`;
    const fileUrl = `${pathToFileURL(outAbs).href}?id=${encodeURIComponent(String(id))}`;
    const phpHint = `portfolio-item.php?id=${id}`;
    console.log(`  id=${id} ${title ? `«${title}»` : ""}`);
    console.log("    относительно htdocs:", relPage);
    console.log("    file:// (вставить в адресную строку):", fileUrl);
    console.log("    на сервере с PHP:", phpHint);
  });
  console.log("");
}

main();
