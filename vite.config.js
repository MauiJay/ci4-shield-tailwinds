import { defineConfig } from 'vite'
import { VitePWA } from "vite-plugin-pwa"
import vue from '@vitejs/plugin-vue'

// https://vitejs.dev/config/
export default defineConfig({
  plugins: [
    vue(),
    VitePWA({
      manifest: false,
      outDir: "../../public",
    }),
  ],
  build: {
    // generate manifest.json in outDir
    manifest: true,
    rollupOptions: {
      // overwrite default .html entry
      input: [
        "./themes/default/css/input.css",
        "./themes/default/js/app.js",
        "./themes/admin/css/admin_input.css",
        "./themes/admin/js/admin.js",
      ],
    },
    outDir: "./public/assets/",
  },
  
})
