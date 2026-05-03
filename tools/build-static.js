const fs = require("fs");
const path = require("path");

const rootDir = path.resolve(__dirname, "..");
const headerPath = path.join(rootDir, "includes", "header.html");
const footerPath = path.join(rootDir, "includes", "footer.html");

const targetFiles = [
  "index.html",
  "tovary.html",
  "stati.html",
  "dokument.html",
  "cena.html",
  "contact.html"
];

function replaceBetween(source, startMarker, endMarker, replacement) {
  const startIndex = source.indexOf(startMarker);
  const endIndex = source.indexOf(endMarker);
  if (startIndex === -1 || endIndex === -1 || endIndex < startIndex) return null;

  const before = source.slice(0, startIndex + startMarker.length);
  const after = source.slice(endIndex);
  return `${before}\n${replacement}\n${after}`;
}

function ensureBackup(filePath) {
  const backupPath = `${filePath}.bak`;
  if (!fs.existsSync(backupPath)) {
    fs.copyFileSync(filePath, backupPath);
  }
}

function main() {
  if (!fs.existsSync(headerPath) || !fs.existsSync(footerPath)) {
    console.error("Missing includes/header.html or includes/footer.html");
    process.exit(1);
  }

  const header = fs.readFileSync(headerPath, "utf8").trim();
  const footer = fs.readFileSync(footerPath, "utf8").trim();

  const changed = [];

  targetFiles.forEach((relativePath) => {
    const fullPath = path.join(rootDir, relativePath);
    if (!fs.existsSync(fullPath)) {
      console.warn(`Skipped (not found): ${relativePath}`);
      return;
    }

    const original = fs.readFileSync(fullPath, "utf8");
    let next = replaceBetween(
      original,
      "<!-- HEADER_START -->",
      "<!-- HEADER_END -->",
      header
    );
    if (next === null) {
      console.warn(`Skipped (header markers missing): ${relativePath}`);
      return;
    }

    next = replaceBetween(next, "<!-- FOOTER_START -->", "<!-- FOOTER_END -->", footer);
    if (next === null) {
      console.warn(`Skipped (footer markers missing): ${relativePath}`);
      return;
    }

    if (next !== original) {
      ensureBackup(fullPath);
      fs.writeFileSync(fullPath, next, "utf8");
      changed.push(relativePath);
    }
  });

  if (!changed.length) {
    console.log("No files changed.");
    return;
  }

  console.log("Updated files:");
  changed.forEach((file) => console.log(`- ${file}`));
}

main();
