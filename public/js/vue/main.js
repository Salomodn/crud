Vue.config.productionTip = false;

window.VEvent = new Vue();
axios.defaults.headers.common = {
    'X-Requested-With': 'XMLHttpRequest'
    ,'X-CSRF-TOKEN': $("meta[name='csrf-token']").attr('content')
};
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
let app_url = document.head.querySelector('meta[name="app-url"]').content;
const domain = app_url + '/';
const config = {
    headers: {
        'Content-Type': 'application/x-www-form-urlencoded'
    }
}

const submit = Vue.component('submit', httpVueLoader(domain+'js/vue/components/SubmitComponent.vue'));
const vuetable = Vue.component('vuetable', httpVueLoader(domain+'js/vue/components/VueTableComponent.vue'));
const app = new Vue({
    el: '#app',

    data: {

    }, methods:  {


    },
    mounted() {

    },

});







