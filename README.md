# Codeigniter4-Shield-Tailwind Template

[![Official Website](https://img.shields.io/badge/Official_Website-Visit-107516)](https://808.biz)  
[![YouTube Channel](https://img.shields.io/badge/YouTube_Channel-Subscribe-CC0000)](https://youtube.com/@808biz4?si=kBqv93xorggCujLu)

## Overview

A work in progress! This repository provides a starter template for
**CodeIgniter 4**, configured to get your application up and running quickly

This repository includes:

- CodeIgniter v4.5.5
- CodeIgniter Shield v1.1.0
- Tailwind
- Vite

## Requirements

Ensure you have the following installed before starting:

- **PHP 8.2** or later
- **Composer** command (See
  [Composer Installation](https://getcomposer.org/doc/00-intro.md#installation-linux-unix-macos))
- **Git**

## How to Use

### (A.) Clone the Project

Choose one of the following methods to clone the project into your desired
folder:

**Using Composer:**

```bash
composer create-project MauiJay/ci4-shield-tailwinds ci4_starter --stability=dev
```

**Or using Git:**

```bash
git clone https://github.com/MauiJay/ci4-shield-tailwinds.git ci4_starter
```

**Navigate to the project folder:**

```bash
cd ci4_starter
cp env .env
php spark migrate --all
php spark serve --port 8081
```

The application should now be accessible at <http://localhost:8081>

## (B.) Setup fresh install

### Step 1: In a fresh CodeIgniter project folder, run below commands to install package.json, node package and create blank tailwind.config.js

With Vite

```bash
npm create vite@latest . -- --template vue
```

or without (only choose one)

```bash
npm init -y
```

Now add Tailwind css

```bash
npm install -D tailwindcss
npx tailwindcss init
```

Upgrade

```bash
npm install -D tailwindcss@latest autoprefixer@latest postcss@latest
npm install -D @tailwindcss/forms@latest
```

### Step 2: Update tailwind.config.js

```js
/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./app/Views/**/*.php"],
  theme: {
    extend: {},
  },
  plugins: [],
};
```

### Step 3: Create input.css with below code. You can create it anywhere. I created at src > assets > input.css

```code
@tailwind base;
@tailwind components;
@tailwind utilities;
```

### Step 4: In terminal, inside project folder, run these commands. If using a different path for input.css and output css (mine styles.css), then change path accordingly

```bash
npx tailwindcss -i ./src/assets/input.css -o ./public/assets/css/styles.css --watch
npx tailwindcss -i ./src/assets/input.css -o ./public/assets/css/styles.css --minify
```

### Step 5: Now just include a link to the output css file (styles.css) in the head section

```php
<link rel="stylesheet" href="<?= base_url('assets/css/styles.css') ?>">
```

With Step 4 command, it will keep running, so if you add any tailwind css class
in php file, it will automatically add that to output css file

## Contributing

Fork it <https://github.com/MauiJay/ci4-shield-tailwinds/fork>

- Create your branch (git checkout -b my-new-branch)
- Commit your changes (git commit -m 'Add some stuff')
- Push to the branch (git push origin my-new-branch)
- Create a new Pull Request.

### Hack

Hack is a language that also uses the PHP extension. You can override the
auto-detection by specifying a different language in a .gitattributes file at
the top level of the repository:

```code
*.php linguist-language=PHP
```

### View cells

```php
<?= view_cell('AlertMessageCell', 'type=success, message=alert cell updated successfully!.') ?>
<?= view_cell('SampleListCell', 'type=info, message=This is a sample cell!.') ?>
```

### Vite

```js
import inject from "@rollup/plugin-inject";
import { defineConfig } from "vite";
import vue from "@vitejs/plugin-vue";

// https://vitejs.dev/config/
export default defineConfig({
  plugins: [vue()],
  build: {
    // generate manifest.json in outDir
    manifest: true,
    rollupOptions: {
      // overwrite default .html entry
      input: [
        "./themes/default/css/app.scss",
        "./themes/default/js/app.js",
        "./themes/admin/css/admin.scss",
        "./themes/admin/js/admin.js",
      ],
    },
    outDir: "./public/assets/",
  },
});
```

### dependabot

add this line in your README.md

```code
@dependabot rebase
```
