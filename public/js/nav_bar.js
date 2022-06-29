
// Navigation

const nav = {

    data() {
        return {
            isActive: false
        }
    },

    mounted() {

    },

    methods: {

        /**when is true screen is showing , when is false is not appear */

        selected() {
            this.isActive = true
        },
    }
}

Vue.createApp(nav).mount('#app_nav')
