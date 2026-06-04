const sharp = require("sharp");
const fs = require("fs");
const path = require("path");

const CONFIG = {
  dirPath: "../assets/images",
  format: [".jpg", ".jpeg", ".png"],
  quality: 90,
};

function getImageFiles(dirPath, formats) {
  let files = [];
  const entries = fs.readdirSync(dirPath, { withFileTypes: true });
  for (const entry of entries) {
    const fullPath = path.join(dirPath, entry.name);
    if (entry.isDirectory()) {
      files = files.concat(getImageFiles(fullPath, formats));
    } else if (entry.isFile() && formats.includes(path.extname(entry.name).toLowerCase())) {
      files.push(fullPath);
    }
  }
  return files;
}

(async () => {
  const files = getImageFiles(CONFIG.dirPath, CONFIG.format);
  console.log(`${files.length} 枚の画像を変換します...`);

  let count = 0;
  for (const filePath of files) {
    const ext = path.extname(filePath).toLowerCase();
    const outputPath = filePath.replace(/\.[^.]+$/, `.webp`);

    const options = ext === ".png"
      ? { nearLossless: true, quality: CONFIG.quality }
      : { quality: CONFIG.quality };

    await sharp(filePath).webp(options).toFile(outputPath);
    count++;
    process.stdout.write(`\r${count}/${files.length} 完了`);
  }

  console.log(`\n変換完了！`);
})();
