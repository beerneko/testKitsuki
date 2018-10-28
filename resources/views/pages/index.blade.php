@extends('layouts.app')

@include('inc.stickymenu')

@section('content')
    <section id="top" class="section_set">
        <a href="#onsen" class="up_a"><span class="up_allow"></span></a>
        <div class="centertext">
            <h1>杵築 - Kitsuki</h1>
            <p>
                Welcome to the hidden beautiful country side town, Kitsuki, web site.
                The general area of Kitsuki has a great many period Samurai houses that date from this period, 
                and the area is visually in keeping with the historic nature of the time.
                Not too many foriegners have yet come to visit like any other famouse tourist spots,
                so that Kitsuki city is still kept being quiet, unique and just same as the old time...
            </p>
        </div>
        <a href="#sakura" class="down_a"><span class="down_allow"></span></a>
    </section>

    <section id="sakura" class="section_set">
            <a href="#top" class="up_a"><span class="up_allow"></span></a>
            <div class="centertext">
                <h1>Kitsuki Castle</h1>
                <p>
                    Three-layer castle tower viewing the Morie Bay.
                    Kitsuki Castle was originally built in 1394, and is situated so that it The castle overlooks the Seto Inland Sea.
                </p>
            </div>
            <a href="#tomaya" class="down_a"><span class="down_allow"></span></a>
        </div>
    </section>

    <section id="tomaya" class="section_set">
            <a href="#sakura" class="up_a"><span class="up_allow"></span></a>
            <div class="centertext">
                <h1>DownTown Kitsuki</h1>
                <p>>Historic and old Japanese castle town. Kitsuki is located in the north-eastern part of Oita prefecture and forms the southern part of the Kunisaki Peninsula. Kituski covers 280 km2 (approximately 23 km north to south and 29 km east to west), which is 4.4% of the prefecture (6,339 km2). Kitsuki has a population of approximately 32,000 people. 
                    The topography is full of ups and downs from the seaside facing Beppu Bay to the surrounding mountains. 
                </p>
            </div>
            <a href="#gyoko" class="down_a"><span class="down_allow"></span></a>
        </div>
    </section>

    <section id="gyoko" class="section_set">
            <a href="#tomaya" class="up_a"><span class="up_allow"></span></a>
            <div class="centertext">
                <h1>Kitsuki Fisherman's Bay</h1>
                <p>Small fishing villages</p>
            </div>
            <a href="#wasyoku" class="down_a"><span class="down_allow"></span></a>
        </div>
    </section>

    <section id="wasyoku" class="section_set">
            <a href="#gyoko" class="up_a"><span class="up_allow"></span></a>
            <div class="centertext">
                <h1>Kitsuki Gourmet</h1>
                <p>Japanese fisherman's gourmet, Seafood</p>
            </div>
            <a href="#onsen" class="down_a"><span class="down_allow"></span></a>
        </div>
    </section>

    <section id="onsen" class="section_set">
            <a href="#wasyoku" class="up_a"><span class="up_allow"></span></a>
            <div class="centertext">
                <h1>Kitsuki Onsen</h1>
                <p>
                        One daller, unlimited water flow. It's a hidden Onsen where the local people use daily base.
                </p>
            </div>
            <a href="#top" class="down_a"><span class="down_allow"></span></a>
        </div>
    </section>

@endsection