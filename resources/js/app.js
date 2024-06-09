import './bootstrap';
import '../css/app.css';

import { createApp, h } from 'vue';
import Layout from './Shared/Layout.vue';
import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { ZiggyVue } from '../../vendor/tightenco/ziggy';

const appName = import.meta.env.VITE_APP_NAME || 'Laravel';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: name => {
    const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })

    // New code added
    let page = pages[`./Pages/${name}.vue`].default
    
    if(!page.layout){
      page.layout=Layout;
    }
    // OR
    // page.layout??=Layout;

    return pages[`./Pages/${name}.vue`]
  },
    setup({ el, App, props, plugin }) {
        return createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue)
            .mount(el);
    },
    progress: {
        // The delay after which the progress bar will appear, in milliseconds...
        delay: 250,
    
        // The color of the progress bar...
        color: '#0baf9b',
    
        // Whether to include the default NProgress styles...
        includeCSS: true,
    
        // Whether the NProgress spinner will be shown...
        showSpinner: true,
      },

});
