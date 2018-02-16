@extends('layouts.app')

@section('main')
    <div class="wrapper">

        <!-- Main -->
        <section class="main">

            <!-- Banner -->
            <section id="banner">
                <article data-position="center">
                    <div class="inner">
                        <img src="{{ asset('images/baldy.jpg') }}" alt="">
                        <h2>Hiking 281 Great Peaks In Southern California</h2>
                        <p>If you think Southern California is all shopping malls, freeways and theme parks ... then why don't you take a hike with us. We are first and foremost a hiking club; we <i>love</i> to hike! We have hikes for beginners, we have hikes for advanced, experienced hikers, we have hikes for everyone in between. Some of our hikes are easy, some are moderate, and some are very difficult. Our hikes can be lots of fun and a great opportunity to meet other fellow hikers. Plus we all get the opportunity to explore our wonderful mountains.</p>
                        <ul class="actions">
                            <li><a class="button big" href="#">Find an Outing</a></li>
                        </ul>
                    </div>
                </article>
            </section>

            <!-- Blurbs -->
            <section class="features alt">
                <article class="icon fa-diamond">
                    <h3>Membership</h3>
                    <p>Not required to hike with us. Join the section with 25 peaks and a small fee, receive our newsletter every month, earn emblems, and more!</p>
                    <ul class="actions">
                        <li><a href="#" class="button">See all the Benefits</a></li>
                    </ul>
                </article>
                <article class="icon fa-location-arrow">
                    <h3>Peak Coordinates</h3>
                    <p>Table of lat/long peak coordinates by Matt Kraai. Includes recently added peaks up to Beartrap Bluff and Mount Minerva Hoyt.</p>
                    <ul class="actions">
                        <li><a href="#" class="button">Get the Coordinates</a></li>
                    </ul>
                </article>
                <article class="icon fa-newspaper-o">
                    <h3>The Lookout</h3>
                    <p>Our section newsletter.</p>
                    <ul class="actions">
                        <li><a href="#" class="button">Get Back Issues</a></li>
                    </ul>
                </article>
                <article class="icon fa-link">
                    <h3>Useful Links</h3>
                    <p>Useful forest and highway resources.</p>
                    <ul class="actions">
                        <li><a href="#" class="button">Get Links</a></li>
                    </ul>
                </article>
            </section>
            <section>
                <h1>Upcoming Outings</h1>
                <p>Here are the outings for the next week. Wanna plan further ahead? Visit our <a href="/outings">outings
                        page</a>!</p>
                <iframe style="width:100%;height:650px;" scrolling="no" src="//vault.sierraclub.org/online-activities/iframe-entity.aspx?e=ent/0452&amp;v=list&amp;lat=&amp;lng=&amp;z=&amp;sp=&amp;dtb=&amp;dte=&amp;c=&amp;t=&amp;d=&amp;ss=false&amp;sc=false&amp;st=false&amp;dys=7&amp;mt=hybrid&amp;amp" width="320" height="240" frameborder="0" marginwidth="0" marginheight="0"></iframe>
            </section>
            <section>
                <h1>Our Purposes</h1>
                <ul>
                    <li>To encourage our members to explore and enjoy the mountains of Southern California and to become familiar with their scenic resources
                    </li>
                    <li>To stimulate interest in climbing these ranges</li>
                    <li>To preserve their forests, waters, wildlife, and wildernesses</li>
                    <li>To enlist public interest and cooperation in protecting them</li>
                    <li>To foster among our members the purposes of the Sierra Club.</li>
                </ul>
            </section>

        </section>

        <!-- Sidebar -->
        <aside class="sidebar">
            <section>
                <h1>Maps and Guides</h1>
                <a href="#" class="image fit"><img src="{{ asset('images/topo.jpg') }}" alt=""></a>
                <p>Before visiting your favorite peak, visit your favorite peak guide. Get route information. Find printable maps, images, files you can use in your GPS, and interactive maps on CalTopo.</p>
                <ul class="actions">
                    <li><a href="#" class="button">See Our Guides</a></li>
                </ul>
            </section>
            <section class="featured-posts">
                <h2>Latest News</h2>
                <article>
                    <a href="#" class="image fit"><img src="images/pic05.jpg" alt=""></a>
                    <header>
                        <span class="date">September 19, 2016</span>
                        <h3><a href="#">Non velit accumsan cursus gravida amet sapien</a></h3>
                    </header>
                    <p>Phasellus in odio at ipsum porttitor mollis id vel diam. Praesent sit amet posuere risus, eu faucibus lectus. Vivamus ex ligula, tempus pulvinar ipsum in, auctor porta quam. Proin nec commodo, vel scelerisque nisi scelerisque. Suspendisse id quam vel tortor tincidunt suscipit. Nullam auctor orci eu dolor consectetur, interdum ullamcorper ante tincidunt. Mauris felis nec felis varius.</p>
                    <ul class="actions">
                        <li><a href="#" class="button">Continue Reading</a></li>
                    </ul>
                </article>
                <article>
                    <a href="#" class="image fit"><img src="images/pic05.jpg" alt=""></a>
                    <header>
                        <span class="date">September 19, 2016</span>
                        <h3><a href="#">Non velit accumsan cursus gravida amet sapien</a></h3>
                    </header>
                    <p>Phasellus in odio at ipsum porttitor mollis id vel diam. Praesent sit amet posuere risus, eu faucibus lectus. Vivamus ex ligula, tempus pulvinar ipsum in, auctor porta quam. Proin nec commodo, vel scelerisque nisi scelerisque. Suspendisse id quam vel tortor tincidunt suscipit. Nullam auctor orci eu dolor consectetur, interdum ullamcorper ante tincidunt. Mauris felis nec felis varius.</p>
                    <ul class="actions">
                        <li><a href="#" class="button">Continue Reading</a></li>
                    </ul>
                </article>
            </section>

        </aside>

    </div>
@endsection