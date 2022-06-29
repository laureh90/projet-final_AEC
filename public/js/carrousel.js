

/**carrousel pour la gallerie */
const carrousel = {

    data() {
        return {
            images: [
                "../images/turtle.jpg",
                "../images/discovery-room.jpg",
                "../images/pexels-daria-shevtsova-1580466.jpg",
                "../images/palmier.jpg",
                "../images/surf.jpg",
                "../images/pexels-elina-sazonova-1838554.jpg",
                "../images/pexels-engin-akyurt-1579253.jpg",
                "../images/francesca-saraco-_dS27XGgRyQ-unsplash.jpg",
                "../images/stairway.jpg",
                "../images/qui-nguyen-cnTdKzMOBns-unsplash.jpg",
                "../images/room-view.jpg",
                "../images/stairwaytoheaven.jpg",
                "../images/sushi.jpg",
                "../images/tetiana-shevereva-Jx27pR9KH3Y-unsplash(1).jpg",
                "../images/xavier-coiffic-lQ4mfS5Le6M-unsplash.jpg",

            ],

            position: 0,
            nombre_image: null,
            translate: 0,
            styles: {
                transform: "translateX(" + this.translate + "px)"
            }

        }
    },

    mounted() {

    },

    methods: {

        bt_suivant() {
            console.log("suivant")
            console.log(this.position)
            this.changerImage(+1)
            this.translate = this.position * -800
            this.styles.transform = "translateX(" + this.translate + "px)"
            if (this.position == 7) {
                this.position = -7 /*-1 pour retourner au dernier*/
            }
        },

        bt_precedant() {
            console.log(this.position)
            this.changerImage(-1)
            this.translate = this.position * -800
            this.styles.transform = "translateX(" + this.translate + "px)"
            if (this.position == -7) {
                this.position = 1 /*1 pour retourner au milieu*/
            }
        },

        /** changer de direction quand on appuie sur le bouton suivant ou precedent */
        changerImage(direction) {
            //               -1 ou 1
            this.position += direction
            this.nombre_image = this.images.length

        }


    },



}
Vue.createApp(carrousel).mount('#app_carrousel')

// const fading = {

//     data() {
//         return {
//             timer1: null,
//
//             images1: [
//                 "../images/blackieshoot-yNLN8ER0HIU-unsplash.jpg",
//                 "../images/albert-s-FkNfVgHVzkI-unsplash.jpg",
//                 "../images/albert-s-FkNfVgHVzkI-unsplash.jpg",
//                 "../images/beach.png"
//             ],

//             currentIndex1: 1,
//
//         }
//     },

//     mounted() {
//         this.startFade()


//     },

//     methods: {

//         startFade() {

//             this.timer1 = setInterval(this.next1, 2000);
//

//         },

//         next1() {

//             this.currentIndex1 += 1;
//         },
//
//     },

//     computed: {
//         currentImg1() {
//             return this.images1[Math.abs(this.currentIndex1) % this.images1.length];
//         },
//
//     }

// }





