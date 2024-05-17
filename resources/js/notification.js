import {notify} from "@kyvg/vue3-notification";

export default {
    error(text) {
        notify({
            text,
            type: 'error',
        });
    },
    success(text) {
        notify({
            text,
            type: 'success',
        });
    },
}
