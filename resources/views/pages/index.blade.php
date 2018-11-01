@extends('layouts.app')

@include('inc.stickymenu')

@section('content')
    <section id="top">
        <div class="centertext">
            <h1>杵築 - Kitsuki</h1>
            <p>
                Welcome to the hidden beautiful country side town, Kitsuki, web site.
            </p>
            <small>The general area of Kitsuki has a great many period Samurai houses that date from this period, 
                and the area is visually in keeping with the historic nature of the time.
                Not too many foriegners have yet find here like any other famouse tourist spots,
                so that Kitsuki city is still kept being quiet, unique and just same as the old time...
            </small>
        </div>
    </section>

    <section id="sakura">
        <div class="centertext">
            <h1>Kitsuki Castle</h1>
            <div class="col-md-12">
                <p>
                    Three-layer castle tower viewing the Morie Bay.
                    Kitsuki Castle was originally built in 1394, and is situated so that it The castle overlooks the Seto Inland Sea.
                </p>
             </div>            
        </div>
    </section>

    <section id="tomaya">
        <div class="centertext">
            <h1>DownTown Kitsuki</h1>
            <p>Historic and old Japanese castle town. Kitsuki is located in the north-eastern part of Oita prefecture and forms the southern part of the Kunisaki Peninsula. Kituski covers 280 km2 (approximately 23 km north to south and 29 km east to west), which is 4.4% of the prefecture (6,339 km2). Kitsuki has a population of approximately 32,000 people. 
                The topography is full of ups and downs from the seaside facing Beppu Bay to the surrounding mountains. 
            </p>
        </div>
    </section>

    <section id="gyoko">
        <div class="centertext">
            <h1>Kitsuki Fisherman's Bay</h1>
            <p>Small fishing villages</p>
        </div>
    </section>

    <section id="wasyoku">
        <div class="centertext">
            <h1>Kitsuki Gourmet</h1>
            <p>Japanese fisherman's gourmet, Seafood</p>
        </div>
    </section>

    <section id="onsen">
        <div class="centertext">
            <h1>Kitsuki Onsen</h1>
            <p>
                One dollar, unlimited water flow. It's a hidden Onsen where the local people use daily base.
            </p>
        </div>
    </section>

    <section id="map">
        <div class="centertext">
            <h1>Access to Kitsuki</h1>
            <p>
                <div><img src="/images/map.png" width="300vw" class="rounded mx-auto d-block" alt="Kitsuki Map"></div>
            </p>
        </div>
    </section>

    <section id="watch">
            <div class="accordian">
                    <ul>
                        <li>
                            <div class="image_title">
                                <a href="https://www.youtube.com/watch?v=twfVp1MMvvA&t=35s" target="_blank">Kitsuki Gov ad</a>
                            </div> 
                            <a href="https://www.youtube.com/watch?v=twfVp1MMvvA&t=35s" target="_blank">
                                <img width="640px" height="380px" src="https://img.youtube.com/vi/twfVp1MMvvA/hqdefault.jpg"/>
                            </a>
                        </li>
                        <li>
                            <div class="image_title">
                                <a href="https://www.youtube.com/watch?v=W3ZO43g_YIw&t=35s" target="_blank">Strolling old Kitsuki town</a>
                            </div> 
                            <a href="https://www.youtube.com/watch?v=W3ZO43g_YIw&t=35s" target="_blank">
                                <img width="640px" height="380px" src="https://img.youtube.com/vi/W3ZO43g_YIw/hqdefault.jpg"/>
                            </a>
                        </li>
                        <li>
                            <div class="image_title">
                                <a href="https://www.youtube.com/watch?v=r76eSFSA1TQ&t=35s" target="_blank">DownTown Kitsuki</a>
                            </div> 
                            <a href="https://www.youtube.com/watch?v=r76eSFSA1TQ&t=35s" target="_blank">
                                <img width="640px" height="380px" src="https://img.youtube.com/vi/r76eSFSA1TQ/hqdefault.jpg"/>
                            </a>
                        </li>
                        <li>
                            <div class="image_title">
                                <a href="https://www.youtube.com/watch?v=JrXjLHtCw2U&t=35s" target="_blank">Kitsuki City - Strolling around a samurai town wearing a Kimono</a>
                            </div> 
                            <a href="https://www.youtube.com/watch?v=JrXjLHtCw2U&t=35s" target="_blank">
                                <img width="640px" height="380px" src="https://img.youtube.com/vi/JrXjLHtCw2U/hqdefault.jpg"/>
                            </a>
                        </li>
                        <li>
                            <div class="image_title">
                                <a href="https://www.youtube.com/watch?v=Y-g1R_LcRD8&t=35s" target="_blank">Aaron Jones Wonderful Kitsuki!</a>
                            </div> 
                            <a href="https://www.youtube.com/watch?v=Y-g1R_LcRD8&t=35s" target="_blank">
                                <img width="640px" height="380px" src="https://img.youtube.com/vi/Y-g1R_LcRD8/hqdefault.jpg"/>
                            </a>
                        </li>
                    </ul>
                </div>
    </section>

    <section id="videos" class="videos">
        <!-- Bamboo video -->
        <video autoplay muted loop id="myVideo">
        <source src="/images/Bamboo.mov" type="video/mp4">
        </video>

        <!-- Map -->
        <div class="centertext">
            <h1 style="marge-top:58vh;">Feel Kitsuki</h1>
        </div>
    </section>
    <div class="footer">
        <h1>2018 &copy;Yuri's Web</h1>
    </div>

@endsection
