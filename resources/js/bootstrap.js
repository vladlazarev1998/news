import axios from 'axios';
import notification from "./notification.js";
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

axios.interceptors.response.use(undefined, function (e) {
    notification.error(e.response.data.message);
});
