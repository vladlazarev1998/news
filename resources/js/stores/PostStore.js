import {reactive} from "vue";
import axios from "axios";

export const usePostStore = reactive({
    getList() {
        return axios.get('/api/news');
    },
    getBySlug(slug) {
        return axios.get('/api/news/' + slug);
    },
    hide(post_id) {
        return axios.put('/api/news/' + post_id);
    }
});
