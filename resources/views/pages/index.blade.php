@extends('layouts.app')

@include('inc.stickymenu')

@section('content')
    <section id="top">
        <a href="#onsen"></a>
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
        <a href="#sakura"></a>
    </section>

    <section id="sakura">
            <a href="#top"></a>
            <div class="centertext">
                <h1>Kitsuki Castle</h1>
                <p>
                    Three-layer castle tower viewing the Morie Bay.
                    Kitsuki Castle was originally built in 1394, and is situated so that it The castle overlooks the Seto Inland Sea.
                </p>
            </div>
            <a href="#tomaya"></a>
        </div>
    </section>

    <section id="tomaya">
            <a href="#sakura"></a>
            <div class="centertext">
                <h1>DownTown Kitsuki</h1>
                <p>>Historic and old Japanese castle town. Kitsuki is located in the north-eastern part of Oita prefecture and forms the southern part of the Kunisaki Peninsula. Kituski covers 280 km2 (approximately 23 km north to south and 29 km east to west), which is 4.4% of the prefecture (6,339 km2). Kitsuki has a population of approximately 32,000 people. 
                    The topography is full of ups and downs from the seaside facing Beppu Bay to the surrounding mountains. 
                </p>
            </div>
            <a href="#gyoko"></a>
        </div>
    </section>

    <section id="gyoko">
            <a href="#tomaya"></a>
            <div class="centertext">
                <h1>Kitsuki Fisherman's Bay</h1>
                <p>Small fishing villages</p>
            </div>
            <a href="#wasyoku"></a>
        </div>
    </section>

    <section id="wasyoku">
            <a href="#gyoko"></a>
            <div class="centertext">
                <h1>Kitsuki Gourmet</h1>
                <p>Japanese fisherman's gourmet, Seafood</p>
            </div>
            <a href="#onsen"></a>
        </div>
    </section>

    <section id="onsen">
            <a href="#wasyoku"></a>
            <div class="centertext">
                <h1>Kitsuki Onsen</h1>
                <p>
                        One daller, unlimited water flow. It's a hidden Onsen where the local people use daily base.
                </p>
            </div>
            <a href="#top"></a>
        </div>
    </section>

@endsection