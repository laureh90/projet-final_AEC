


/** pop up section for restaurant presentation */
const resto = {

    data() {
        return {
            showPokay: false,
            showKaloa: false,
            showYuku: false,
        }
    },

    mounted() {

    },

    methods: {

        /**when is true screen is showing , when is false is not appear */

        pokay() {
            this.showPokay = true
        },
        closePokay() {
            this.showPokay = false
        },
        kaloa() {
            this.showKaloa = true
        },
        closeKaloa() {
            this.showKaloa = false
        },
        yuku() {
            this.showYuku = true
        },
        closeYuku() {
            this.showYuku = false
        }
    }
}

Vue.createApp(resto).mount('#app_resto')
