var token = $("meta[name=csrf-token]").attr("content");
Vue.http.headers.common["X-CSRF-TOKEN"] = token;

var Ad = new Vue({
    el: ".main-container",

    data: {
        name: null,
        category: 1,
        completed: false,
    },

    beforeMount: function() {
        console.log("---before mount");
    },

    mounted: function() {
        console.log("---mount");
    },

    updated: function() {
        var vm = this;

        if (vm.name && vm.category && !vm.completed) {
            vm.makeCompleted();
        } else if (!vm.name || !vm.category) {
            vm.completed = false;
        }
    },

    methods: {
        makeCompleted: function() {
            var vm = this;

            vm.completed = true;
            console.log("---completed");
        }
    }
});