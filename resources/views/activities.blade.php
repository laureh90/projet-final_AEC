<x-layout>
    <x-nav></x-nav>


<div class="activities">

    {{-- slider --}}
    <div class="slider">
        <div class="title">
            <h1>A NEW ADVENTURE</h1>
            <p>Hawaii is a paradise - and I can never cease proclaiming it.
                <br>
                But I must append one word of qualification: Hawaii is a paradise for the well-to-do.</p>
                <a href="{{ url('/#header-package') }}"><button type="button">CHOOSE YOUR PACKAGE</button></a>
        </div>
    </div>


    <!-- Description page -->
        <div class="description">
            <h1> A PARADISE BORN OF FIRE</h1>
            <hr>
            <h2> Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim odio inventore dicta, eaque modi illo reiciendis nemo molestiae quia obcaecati maxime, voluptates aliquam corporis! Asperiores ea assumenda fuga magni itaque?</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos, at. Rem delectus, repellat minima officiis quaerat a deserunt debitis? Totam saepe odit ducimus ratione hic dolores provident explicabo eum voluptatibus?</p>
            </div>

    <!-- Section box go-to section -->
    <div class="section_box">
        <div class="test_joe">
                <a href = "#stairway" class = "column col-xs-6" id = "caption"><span class = "text">
                <h1>STAIRWAY TO HEAVEN</h1>
                </span><img src = "images/stairway.png"></a>
        </div>
        <div class="test_joe">
            <a href = "#discover" class = "column col-xs-6" id = "caption"><span class = "text"><h1>DISCOVER</h1></span><img src = "images/fish.jpg"></a>
        </div>
        <div class="test_joe">
        <a href = "#gourmet" class = "column col-xs-6" id = "caption"><span class = "text"><h1>GOURMET</h1></span><img src = "images/gourmet.png"></a>
        </div>
    </div>

    <!-- Stairway -->
    <div class="stairway" id="stairway">
        <div class="description_stair">
            <h1>THE STAIRWAY TO HEAVEN</h1>
            <hr>
            <h2>Is it worth the risk?</h2>
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>
                <a href="{{ url('/stairway') }}">
                <button type="button">Choose the heaven package</button></a>
        </div>
    </div>

        <!-- Liste dactivite stairway -->
        <div class="posts">
            <div class="post_stair">
                <div class="left">
                    <h3>Staitway to heaven hike</h3>
                    <h4>The Ha’ikū stairs (aka Haiku stairs) were built in 1942 for the secret project of a US naval radio station.</h4>
                    <p>The stairs were needed to maintain the large antenna system. The stairs are in the Ha’ikū valley, which has the shape of an amphitheater. That makes for a perfect environment for communications. The stairs were initially made of wood and later replaced with steel. Read more about the history of the Haiku stairs. </p>
                    <p>Like this adventure</p>
                </div>

                <div class="right">
                    <video autoplay muted loop width="100%" height="100%">
                        <source src="videos/stairway_v.mp4" type="video/mp4">
                    </video>
                </div>
            </div>
            <div class="post_shark">
                <div class="left">
                    <h3>Haleiwa Shark Tours</h3>
                    <h4>See sharks up close and personal in their natural habitat..</h4>
                    <p> This North Shore shark cage adventure is limited to small groups, which means less time waiting for your turn and more time in the cage. Haleiwa Shark Tours is Oahu’s best shark diving tour.</p>
                </div>
                <div class="right">
                    <video autoplay muted loop width="100%" height="100%">
                        <source src="videos/shark_vi.mp4" type="video/mp4">
                    </video>
                </div>
            </div>
        </div>

    <!-- Discover -->
    <div class="discover" id="discover">
        <div class="description_discover">
            <h1>DISCOVERY OF THE SEA</h1>
            <hr>
            <h2>Find the sea treasure</h2>
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>
                <a href="{{ url('/discovery') }}"><button type="button">Choose the discovery!</button></a>
        </div>
    </div>

    <!-- Discover - Liste activities -->
    <div class="posts">
        <div class="post_aqua">
            <div class="left">
                <h3>Aqua Adventures Maui Molokini Crater Snorkeling Tour & Snuba Dive</h3>
                <h4>Join Aqua Adventures on a snorkeling tour to Molokini, Maui’s most popular snorkeling destination.</h4>
                <p>Visit Molokini Crater and the Turtle arches on this 5.5 hour cruise. Upgrade to SNUBA diving package for the most unforgettable underwater adventure. </p>
            </div>
            <div class="right">
                <video autoplay muted loop width="100%" height="100%">
                    <source src="videos/fishvi.mp4" type="video/mp4">
                </video>
            </div>
        </div>
        <div class="post_surf">
            <div class="left">
                <h3>Goofy Foot Maui Surf School - Lahaina Surfing Lessons</h3>
                <h4>Learn how to surf in Hawaii with Goofy Foot</h4>
                <p>One the best surfing schools in Maui! Take a 2-hour beginner introductory lesson and learn the basic fundamentals of surfing and riding waves. Expert instructors, top quality equipment's and great waves! </p>
            </div>
            <div class="right">
                <video autoplay muted loop width="100%" height="100%">
                    <source src="videos/surf_v.mp4" type="video/mp4">
                </video>
            </div>
        </div>
    </div>

    <!-- Gourmet -->
    <div class="gourmet" id="gourmet">
        <div class="description_gourmet">
            <h1>GOURMET FOOD AND MORE</h1>
            <hr>
            <h2>Find the food treasure</h2>
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>
                <a href="{{ url('/gourmet') }}"><button type="button">Choose the Gourmet!</button></a>
        </div>
    </div>
    <!-- Gourmet - Liste dactivite -->
            <div class="posts">
                <div class="post_food1">
                    <div class="left">
                        <h3>Circle Island Tour, Waimea Waterfalls & Hawaiian Food Experience</h3>
                        <h4>Visit Oahu’s most popular destinations</h4>
                        <p>On this full day circle island tour featuring Oahu's top attractions & local food stops. Discover a hidden Buddhist temple, experience the natural beauty of Waimea Valley & take a dip in a tropical waterfall.</p>
                    </div>
                    <div class="right">
                        <video autoplay muted loop width="100%" height="100%">
                            <source src="videos/food_op.mp4" type="video/mp4">
                        </video>
                    </div>
                </div>
                <div class="post_food2">
                    <div class="left">
                        <h3> Aloha Plate Hawaii Food Tour Hosted by Lanai Tabura</h3>
                        <h4>See sharks up close and personal in their natural habitat..</h4>
                        <p> Taste the real flavors of Hawaii on this unique food tour hosted by Lanai Tabura, winner of Food Networks Great Food Truck Race and host of Cooking Hawaiian Style. Discover restaurants, drive-ins and food trucks where only the locals know to go! </p>
                    </div>
                    <div class="right">
                        <video autoplay muted loop width="100%" height="100%">
                            <source src="videos/foodwow.mp4" type="video/mp4">
                        </video>
                    </div>
                </div>
            </div>
    </div>

  </div>
</div>

  {{-- Section commentaires clients --}}
<x-comments></x-comments>

<x-footer></x-footer>

</x-layout>
