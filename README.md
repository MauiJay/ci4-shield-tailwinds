# Codeigniter4-Shield-Tailwind Template

A work in progress

## Setup Tailwinds

## Step 1: In the CodeIgniter project folder, run below commands to install package.json, node package and create blank tailwind.config.js

With Vite

```
npm create vite@latest . -- --template vue
```
or without (only choose one)

```
npm init -y
```
### Now add Tailwind css

```
npm install -D tailwindcss
npx tailwindcss init
```

## Upgrade

```
npm install -D tailwindcss@latest autoprefixer@latest postcss@latest
npm install -D @tailwindcss/forms@latest
```

## Step 2: Update tailwind.config.js as below:

```code
/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./app/Views/**/*.php"],
  theme: {
    extend: {},
  },
  plugins: [],
}
```

## Step 3: Create input.css with below code. You can create it anywhere. I created at src > assets > input.css

```code
@tailwind base;
@tailwind components;
@tailwind utilities;
```

## Step 4: On terminal in CodeIgniter project folder, run below command. If you using different path for input.css and output css (mine styles.css) then change path accordingly.

```code
npx tailwindcss -i ./src/assets/input.css -o ./public/assets/css/styles.css --watch
npx tailwindcss -i ./src/assets/input.css -o ./public/assets/css/styles.css --minify
```

Step 5: Now just include out css file (mine styles.css) in your php files. With Step 4 command, it will keep running, so if you add any tailwind css class in php file, it will automatically add that to output css file.

## Contributing

Fork it (https://github.com/MauiJay/ci4-shield-tailwinds/fork)

- Create your branch (git checkout -b my-new-branch)
- Commit your changes (git commit -m 'Add some stuff')
- Push to the branch (git push origin my-new-branch)
- Create a new Pull Request.


Hack is a language that also uses the PHP extension. You can override the auto-detection by specifying a different language in a .gitattributes file at the top level of the repository:

```
*.php linguist-language=PHP
```

### View cells
```
<?= view_cell('AlertMessageCell', 'type=success, message=alert cell updated successfully!.') ?>
<?= view_cell('SampleListCell', 'type=info, message=This is a sample cell!.') ?>
```

```
import inject from "@rollup/plugin-inject";
import { defineConfig } from 'vite'
import vue from '@vitejs/plugin-vue'

// https://vitejs.dev/config/
export default defineConfig({
  plugins: [
    vue()
  ],
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
})
```