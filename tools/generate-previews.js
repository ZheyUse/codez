// generate-previews.js
// Usage:
// 1. npm init -y (if needed)
// 2. npm i puppeteer --save-dev
// 3. node codez/tools/generate-previews.js

import fs from 'fs';
import path from 'path';
import puppeteer from 'puppeteer';
import { fileURLToPath } from 'url';
const __filename = fileURLToPath(import.meta.url);
const __dirname = path.dirname(__filename);

// Configure the pages you want screenshots for.
// Replace the demoUrl values with your real deployed URLs.
const projects = [
  { slug: 'examlock', demoUrl: 'https://examlock.netlify.app/' },
  { slug: 'hitchme', demoUrl: 'https://hitchme-admin.netlify.app/' },
  { slug: 'bhfinder', demoUrl: 'https://example.com/bhfinder' },
  { slug: 'frameit', demoUrl: 'https://frameit-here.netlify.app/' },
  { slug: 'studybuddy', demoUrl: 'https://magtounko.netlify.app/' },
  { slug: 'deathblock', demoUrl: 'https://example.com/deathblock' },
  { slug: 'liam', demoUrl: 'https://liammcmahon.netlify.app/' },
  { slug: 'ivote', demoUrl: 'https://icomelec-admin-dashboard.web.app/' },
  { slug: 'motorpool', demoUrl: 'https://example.com/motorpool' },
  { slug: 'comicz', demoUrl: 'https://zcomic.netlify.app/' },
];

(async () => {
  const outDir = path.resolve(__dirname, '..', 'public', 'img', 'projects', 'previews');
  if (!fs.existsSync(outDir)) fs.mkdirSync(outDir, { recursive: true });

  const browser = await puppeteer.launch({ headless: true, args: ['--no-sandbox'] });
  try {
    const demos = {};
    for (const p of projects) {
      const page = await browser.newPage();
      await page.setViewport({ width: 1200, height: 800, deviceScaleFactor: 2 });
      console.log(`Loading ${p.demoUrl} ...`);
      try {
        const response = await page.goto(p.demoUrl, { waitUntil: 'networkidle2', timeout: 60000 });
        if (!response || !response.ok()) {
          console.warn(`Warning: ${p.demoUrl} returned status ${response && response.status()}`);
        }
      } catch (err) {
        console.warn(`Failed to load ${p.demoUrl}: ${err.message}`);
      }

      // Optional: try to hide overlays, cookie banners, etc.
      await page.evaluate(() => {
        const el = document.querySelector('[role=dialog], .cookie-banner, .cookie-consent');
        if (el) el.style.display = 'none';
      });

      // Ensure we're at the very top of the page and capture only the visible viewport
      await page.evaluate(() => { window.scrollTo(0, 0); });
      // Delay briefly to allow layout/paint; use a simple Node timeout for compatibility
      await new Promise((res) => setTimeout(res, 250));
      const outPath = path.join(outDir, `${p.slug}.png`);
      await page.screenshot({ path: outPath, fullPage: false });
      console.log(`Saved preview: ${outPath}`);
      demos[p.slug] = p.demoUrl;
      await page.close();
    }

    // Write a demos.json mapping for Blade to consume (slug -> demoUrl)
    const demosJsonPath = path.join(outDir, 'demos.json');
    fs.writeFileSync(demosJsonPath, JSON.stringify(demos, null, 2), 'utf8');
    console.log(`Wrote demo mapping: ${demosJsonPath}`);
  } finally {
    await browser.close();
  }
  console.log('Previews generation finished.');
})();
