<x-layout>
    <x-nav></x-nav>

    <div id="app_resto" v-cloak>

        <div class="header-picture">
            <h1>HAWAII VIBES</h1>
            <h2>Hawaii is a paradise - and I can never cease proclaiming it.
                <br>
                But I must append one word of qualification: Hawaii is a paradise for the well-to-do.</h2>
            <a href="#header-package">
                <button type="button">CHOOSE YOUR PACKAGE</button>
            </a>
        </div>


        {{-- main section presentation--}}
        <main>
            <div class="main-section1">
                <div class="section1">
                    <h2>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin quis egestas quam, vel venenatis
                        diam."
                    </h2>
                    <p>
                        Sed pharetra lectus nisi, at dictum nisi sodales a. Nulla auctor tempus feugiat. Vivamus at
                        pellentesque
                        turpis. Integer vitae magna eu nunc hendrerit porttitor. Morbi in tortor et metus congue tincidunt
                        eu nec ante. Nulla ultrices sem ac ultricies egestas. Cras pulvinar gravida tortor, non ornare orci
                        venenatis eu.Nulla arcu enim, lobortis et massa eget, ultrices pulvinar dolor. Pellentesque
                        tincidunt condimentum nisi quis vulputate. Suspendisse potenti. Praesent nibh metus, eleifend nec
                        nisl sit amet, commodo bibendum eros.Vivamus felis tortor, sagittis in mattis eu, pellentesque vel
                        dolor.
                    </p>
                </div>
                <div class="picture-section1">
                    <div class="image2"></div>
                        <img src="images/chelsea-gates-0653_wY0nRc-unsplash.jpg" alt="water-girl">
                </div>
            </div>

            <div class="main-section2">
                <div class="picture-section2">
                    <div class="image4"></div>
                    <div class="image3">
                        <video autoplay muted>
                            <source src="videos/video_plage.mp4" type="video/mp4">
                        </video>
                    </div>
                </div>

                <div class="section2">
                    <div class="text">
                        <h2>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin quis egestas quam, vel venenatis
                            diam."
                        </h2>
                        <p>
                            Sed pharetra lectus nisi, at dictum nisi sodales a. Nulla auctor tempus feugiat. Vivamus at
                            pellentesque
                            turpis. Integer vitae magna eu nunc hendrerit porttitor. Morbi in tortor et metus congue
                            tincidunt
                            eu nec ante. Nulla ultrices sem ac ultricies egestas. Cras pulvinar gravida tortor, non ornare
                            orci

                        </p>
                    </div>
                </div>
            </div>

        </main>
        {{-- package --}}
        <div id="header-package">
            <h2>POPULAR PACKAGES</h2>
            <hr>
            <h3>OUR CLIENTS LOVE THESE PACKAGES</h3>
        </div>
        <div class="container-packages">
            <div class="bg">
                <div class="container-box">
                    <div class="box">
                        <img src="images/pexels-pixabay-271643.jpg" alt="beach-restaurant">
                        <div class="description">
                            <h3>DISCOVERY</h3>
                            <hr>
                            <p>
                                Sed pharetra lectus nisi, at dictum nisi sodales a. Nulla auctor tempus feugiat. Vivamus at
                                pellentesque
                                turpis. Integer vitae magna eu nunc hendrerit porttitor. Morbi in tortor et metus congue
                                tincidunt
                            </p>
                            <div class="price">
                                <h3>$115</h3>
                                <h4>/night</h4>
                            </div>
                            <a href="{{ url('/discovery') }}">
                                <button>BOOK NOW</button>
                            </a>
                    </div>
                </div>

                <div class="box">
                    <img src="images/pexels-elina-sazonova-1838554.jpg" alt="cafe">
                    <div class="description">
                        <h3>THE STAIRWAY TO HEAVEN</h3>
                        <hr>
                        <p>
                            Sed pharetra lectus nisi, at dictum nisi sodales a. Nulla auctor tempus feugiat. Vivamus at
                            pellentesque
                            turpis. Integer vitae magna eu nunc hendrerit porttitor. Morbi in tortor et metus congue
                            tincidunt
                        </p>
                        <div class="price">
                            <h3>$135</h3>
                            <h4>/night</h4>
                        </div>
                        <a href="{{ url('/stairway') }}">
                            <button>BOOK NOW</button>
                        </a>
                    </div>
                </div>

                <div class="box">
                    <img src="images/pexels-engin-akyurt-1579253.jpg" alt="bar">
                    <div class="description">
                        <h3>GOURMET</h3>
                        <hr>
                        <p>
                            Sed pharetra lectus nisi, at dictum nisi sodales a. Nulla auctor tempus feugiat. Vivamus at
                            pellentesque
                            turpis. Integer vitae magna eu nunc hendrerit porttitor. Morbi in tortor et metus congue
                            tincidunt
                        </p>
                        <div class="price">
                            <h3>$175</h3>
                            <h4>/night</h4>
                        </div>
                        <a href="{{ url('/gourmet') }}">
                            <button>BOOK NOW</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        </div>

        {{-- Dinnning --}}
            <div id="header-restaurant">
                <h1>DINNING</h1>
                <hr>
                <h3>Pronounced oh-no, this is the local word for "delicious"</h3>
                <p>From seasonally inspired menus to dining experiences that will satisfy any craving, see what our chefs are preparing just for you.</p>
                <div class="conteneur-image-resto"></div>
            </div>

            <div id="container-resto">
                <h1>RESTAURANTS & BAR</h1>
                <hr>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure inventore, consectetur odio cum, iusto perspiciatis debitis, nulla sequi qui recusandae atque facere nam modi.
                    Aliquam eum corporis error exercitationem tempore. Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati incidunt est voluptate autem quasi maiores officiis cumque sit minus quo accusantium ullam animi voluptas fugit, iusto pariatur inventore praesentium sapiente.</p>
                <div class="container-box">
                    <div class="box">
                        <img src="images/pexels-mateusz-dach-3660229.jpg" alt="beach-restaurant">
                        <div class="hover-title" @click="pokay">
                            <h6>Pokay's Beach House</h6>
                            <img src="../images/symbole-fleche-droite-noir.png" alt="fleche">
                        </div>
                    </div>
                    <div class="box">
                        <img src="images/pexels-eka-sutrisno-1863622.jpg" alt="cafe">
                        <div class="hover-title" @click="kaloa">
                            <h6>Kaloe Cafe & Brunch </h6>
                            <img src="../images/symbole-fleche-droite-noir.png" alt="fleche">
                        </div>
                    </div>
                    <div class="box">
                        <img src="images/pexels-ekrulila-10550723.jpg" alt="bar">
                        <div class="hover-title" @click="yuku">
                            <h6>Yuku Bar</h6>
                            <img src="../images/symbole-fleche-droite-noir.png" alt="fleche">
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-restaurant">
                <h2>Enjoy Hawaii's exciting melting pot style of cuisine with top-rated recipes</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo libero ab exercitationem, qui odio est repudiandae cupiditate architecto velit voluptate molestias fugit? Unde esse rerum sequi quas et odit accusamus!
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores possimus dignissimos aspernatur esse repellat dolorem eos iusto assumenda nisi optio sint quos, iste ratione odit quibusdam cumque fugit quaerat ducimus!
                </p>
            </div>

            <div class="pokay overlay" v-show="showPokay == true">
                <div class="pop-up" >
                    <div class="img-header"><img src="images/letter-x-icon-18-256.png" alt="" @click="closePokay"></div>
                    <div class="main">
                        <div class="container-description">
                            <div class="description">
                                <p>Pokay's Beach House</p>
                                <p>Poké (pronounced as pokay) is a traditional from Hawaii, was different from blocks in the middle
                                    of
                                    the
                                    central state. In a Poké bowl, some of the favorite ingredients are mixed with different
                                    ingredients.<br>
                                    <br>
                                    All sauces should be composed with care to give a sensation to your bowl.
                                </p>
                                <img src="\images\tetiana-shevereva-Jx27pR9KH3Y-unsplash(1).jpg" alt="">
                                <p>Hours of Operation</p>
                                <p> Lunch 11:00 a.m-16:00 p.m daily<br>
                                    Dinner 17:00 p.m.-22:00 p.m. daily<br>
                                    Reservations are highly recommended.</p>
                            </div>
                        </div>
                    </div>
                    <div class="menu-link">
                        <a href="{{ url('/menu') }}"><button>Explore Our Menu</button></a>
                    </div>

                </div>
            </div>


            <div class="kaloa overlay" v-show="showKaloa == true">
                <div class="pop-up-kaloa">
                    <div class="img-header"><img src="images/letter-x-icon-18-256.png" alt="" @click="closeKaloa"></div>

                    <div class="main">
                        <div class="container-description">
                            <div class="description">
                                <p>Kaloa Cafe & Brunch</p>
                                <p>“We want people to feel at home, and designed it for customers who want to drink coffee and stay
                                    for great drinks.”
                                    <br>
                                    If you're a lover of matcha and adorable desserts, this is definitely the cafe for you! Enjoy a
                                    cup of their regular latte, matcha latte or black sesame latte and pair it with cat shaped
                                    cookies.
                                </p>
                                <img src="images/pexels-tim-douglas-6205605.jpg" alt="">
                                <p>Hours of Operation</p>
                                <p> 6:00 a.m-4:00 p.m daily
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="menu-link">
                        <p>Come Visit Us</p>
                    </div>
                    <div class="img-footer">

                    </div>
                </div>
            </div>


            <div class="yuku overlay" v-show="showYuku == true">
                <div class="pop-up-yuku">
                    <div class="img-header"><img src="images/letter-x-icon-18-256.png" alt="" @click="closeYuku"></div>

                    <div class="main">
                        <div class="container-description">
                            <div class="description">
                                <p>Yuku Bar</p>
                                <p>We want people to feel at home, and designed it for customers who want to drink coffee and stay
                                    for great drinks.”

                                </p>
                                <img src="images/taylor-simpson-M7ruK0MELuM-unsplash.jpg" alt="">
                                <p>Hours of Operation</p>
                                <p> 19:00 pm-1:00 a.m daily

                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="menu-link">
                        <p>Come Visit Us</p>
                    </div>
                    <div class="img-footer">
                    </div>
                </div>

                </div>
            </div>

            <div class="image-footer-resto"></div>

            {{-- gallery --}}
            <div id="gallery">
                <div class="container-gallery">
                    <H2>GALLERY</H2>
                    <hr>
                    <h3>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam similique consequatur maxime quod vero numquam suscipit fugit repudiandae consequuntur maiores, nam accusamus pariatur quos doloremque molestias omnis ea cupiditate voluptate!</h3>
                    <div id="app_carrousel" v-cloak>
                        <div class="gallery">
                            <div class="image" :style="styles" v-for="(image, i) in images" :key="i">
                            <img :src="image">
                            </div>

                            <div class="precedant"  @click="bt_precedant"> &lt; </div>
                            <div class="suivant" @click="bt_suivant"> &gt; </div>
                        </div>
                    </div>
                </div>

            </div>

            {{-- comment client --}}
         <div class="comment_client_home">
            <div class="clients_comment_home">
                <div class="box_com">
                    <h2>THE BEST HOTEL</h2>
                    <h3>Can wait to came back!</h3>
                    <hr>
                    <h6>Paul Brandi From Canada</h6>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse, perspiciatis recusandae. Ipsa, incidunt et! Quas, numquam placeat molestias non aperiam aliquam modi vel unde perspiciatis eum, repellendus, qui neque. Praesentium!</p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                      </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                      </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                      </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                            <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                            <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                          </svg>
                </div>
                <div class="box_com">
                    <h2>THE BEST HOTEL</h2>
                    <h3>Can wait to came back!</h3>
                    <hr>
                    <h6>Paul Brandi From Canada</h6>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse, perspiciatis recusandae. Ipsa, incidunt et! Quas, numquam placeat molestias non aperiam aliquam modi vel unde perspiciatis eum, repellendus, qui neque. Praesentium!</p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                      </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                      </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                      </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                      </svg>
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                        <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                      </svg>
                </div>
                <div class="box_com">
                    <h2>THE BEST HOTEL</h2>
                    <h3>Can wait to came back!</h3>
                    <hr>
                    <h6>Paul Brandi From Canada</h6>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse, perspiciatis recusandae. Ipsa, incidunt et! Quas, numquam placeat molestias non aperiam aliquam modi vel unde perspiciatis eum, repellendus, qui neque. Praesentium!</p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                      </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                      </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                      </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                            <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                            <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                          </svg>
                </div>
            </div>

         </div>

          <x-footer></x-footer>

    </div>

</x-layout>


<script src="js/popup-resto.js"></script>
<script src="js/carrousel.js"></script>
<script src="js/nav_bar.js"></script>



