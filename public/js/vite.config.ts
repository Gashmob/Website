import {resolve} from 'node:path'
import {defineConfig} from 'vite'

export default defineConfig({
    build: {
        lib: {
            entry: [
                resolve(__dirname, "src/menu/menu.ts"),
            ],
            name: 'website',
            formats: ['es']
        },
        target: 'modules',
    }
});
