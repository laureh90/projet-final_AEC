
/**transition image des package en fonction du scroll position */
const packages = {

    data() {
        return {
            classe_active1: false,
            classe_active2: false,

        }
    },

    mounted() {
        window.addEventListener('scroll', this.transition1)
        window.addEventListener('scroll', this.transition2)

    },

    methods: {
        /**image du haut */
        transition1() {

            let scroll = window.scrollY
            if (scroll > 20) {
                this.classe_active1 = true
            }


            console.log(scroll)
        },
        /**image du bas */
        transition2() {

            let scroll = window.scrollY
            if (scroll > 680) {
                this.classe_active2 = true
            }


            console.log(scroll)
        }
    }
}

Vue.createApp(packages).mount('#app_packages')


// :class="{ouvert: classe_active}"
