<x-layout>
    <x-nav></x-nav>

    <div id="menu">

        {{-- section poke bowl --}}
        <div class="header header1">
             <h2>Poke bowl</h2>
        </div>
            <div class="section1">
                @foreach($menus1 as $category1)
                <div class="bloc">
                    <p>{{ $category1->title }}</p>
                    <p>{{ number_format($category1->price,2)}}</p>
                    <p>{{ $category1->description }}</p>
                </div>
                @endforeach
            </div>

            {{-- section sushi --}}
        <div class="header header2">
            <h2>Sushi</h2>
        </div>
            <div class="section2">
                @foreach($menus2 as $category2)
                <div class="bloc">
                    <p>{{ $category2->title }}</p>
                    <p>{{ $category2->description }}</p>
                    <p>{{ number_format($category2->price,2)}}</p>
                </div>
                @endforeach
            </div>

             {{-- section salade --}}
        <div class="header header3">
            <h2>Salad</h2>
        </div>
            <div class="section3">
                @foreach($menus3 as $category3)
                <div class="bloc">
                    <p>{{ $category3->title }}</p>
                    <p>{{ $category3->description }}</p>
                    <p>{{ number_format($category3->price,2)}}</p>
                </div>
                @endforeach
            </div>

             {{-- section drink --}}
         <div class="header header4">
            <h2>Drink</h2>
         </div>
            <div class="section4">
                @foreach($menus4 as $category4)
                <div class="bloc">
                    <p>{{ $category4->title }}</p>
                    <p>{{ $category4->description }}</p>
                    <p>{{ number_format($category4->price,2)}}</p>
                </div>
                @endforeach
             </div>
              {{-- footer avec fleche up --}}
             <div class="footer-section">
                 <a href="#menu"><img src="/images/arrow.webp" alt=""></a>
                 <a href="#menu"><img src="/images/arrow.webp" alt=""></a>
             </div>
    </div>
</x-layout>
