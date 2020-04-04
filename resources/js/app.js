window.Vue = require("vue");

Vue.component("sidebar-component", require("./components/SideBar.vue").default);
Vue.component(
    "comments-component",
    require("./components/Comments.vue").default
);

import  router  from "./routes";
import Vuelidate from "vuelidate";
import { ModalPlugin } from "bootstrap-vue";
import CKEditor from "@ckeditor/ckeditor5-vue";
import vSelect from "vue-select";
import VueSession from "vue-session";
import VuejsDialog from "vuejs-dialog";
import VueRouter from "vue-router";
import "vuejs-dialog/dist/vuejs-dialog.min.css";
import "vue-select/dist/vue-select.css";

Vue.component("v-select", vSelect);
Vue.use(CKEditor);
Vue.use(Vuelidate);
Vue.use(ModalPlugin);
Vue.use(VueSession);
Vue.use(VuejsDialog);
Vue.use(VueRouter);

const app = new Vue({
    el: "#pcoded",
    router
});

import VueToastr2 from "vue-toastr-2";
import "vue-toastr-2/dist/vue-toastr-2.min.css";
window.toastr = require("toastr");
window.toastr.options = {
    closeButton: false,
    debug: false,
    newestOnTop: true,
    progressBar: true,
    positionClass: "toast-top-right",
    preventDuplicates: false,
    onclick: null,
    showDuration: "300",
    hideDuration: "1000",
    timeOut: "5000",
    extendedTimeOut: "1000",
    showEasing: "swing",
    hideEasing: "linear",
    showMethod: "fadeIn",
    hideMethod: "fadeOut"
};
Vue.use(VueToastr2);