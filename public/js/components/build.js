var token = $("meta[name=csrf-token]").attr("content");
Vue.http.headers.common["X-CSRF-TOKEN"] = token;

var Ad = new Vue({
    el: ".main-container",

    data: {
    },

    beforeMount: function() {
        console.log("---before mount");
    },

    mounted: function() {
        console.log("---mount");
    },

    updated: function() {
        var vm = this;
        console.log("---update");
    },

    methods: {
    }
});