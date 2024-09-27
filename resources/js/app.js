import './bootstrap';
import router from "./router/router";
import { createApp } from "vue";
import PrimeVue from 'primevue/config';
import Aura from '@primevue/themes/aura';
import Tabs from 'primevue/tabs';
import TabList from 'primevue/tablist';
import Tab from 'primevue/tab';
import TabPanels from 'primevue/tabpanels';
import TabPanel from 'primevue/tabpanel';
import DataTable from 'primevue/datatable';
import Column from 'primevue/column';
import Panel from 'primevue/panel';
import Button from 'primevue/button';
import './app.css'

import App from "./App.vue";

const app = createApp(App);

app.component('Tab', Tab);
app.component('Tabs', Tabs);
app.component('TabList', TabList);
app.component('TabPanels', TabPanels);
app.component('TabPanel', TabPanel);
app.component('DataTable', DataTable);
app.component('Column', Column);
app.component('Panel', Panel);
app.component('Button', Button);

app
.use(PrimeVue, {
    theme: {
        preset: Aura
    },
    options: {
        cssLayer: {
            name: 'primevue',
            order: 'tailwind-base, primevue, tailwind-utilities'
        }
    },
    pt: {
        header: ({ props }) => ({
            class: [
                'flex items-center justify-between',
                'px-10 pt-5 bg-purple-500 text-white rounded-tl-lg rounded-tr-lg',
            ]
        }),
    },
})
.use(router)
.mount("#app");