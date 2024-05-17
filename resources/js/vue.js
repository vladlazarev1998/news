import {createApp} from 'vue';
import AppComponent from './components/App.vue';
import router from './router';
import Notifications from '@kyvg/vue3-notification';

const app = createApp({});
app.component('app', AppComponent);

app.use(Notifications);
app.use(router);
app.mount('#app');
