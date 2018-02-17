@extends('layouts.app')

@section('main')
    <section class="hero is-primary is-medium hps-hero">
        <div class="hero-body">
            <div class="container">
                <h1 class="title hps-title">
                    Hiking 281 Great Peaks In Southern California
                </h1>
                <h2 class="subtitle">
                    If you think Southern California is all shopping malls, freeways and theme parks ... then why don't you take a hike with us. We are first and foremost a hiking club; we love to hike! We have hikes for beginners, we have hikes for advanced, experienced hikers, we have hikes for everyone in between. Some of our hikes are easy, some are moderate, and some are very difficult. Our hikes can be lots of fun and a great opportunity to meet other fellow hikers. Plus we all get the opportunity to explore our wonderful mountains.
                </h2>
                <a class="button is-primary is-inverted is-outlined is-medium is-rounded">Find An Outing</a>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="tile is-ancestor">
            <div class="tile is-vertical is-8">
                <div class="tile">
                    <div class="tile is-parent is-vertical">
                        <article class="tile is-child notification is-secondary">
                            <p class="title is-spaced">Viewable maps (and more!)</p>
                            <p class="subtitle">Before visiting your favorite peak, read the peak guide</p>
                            <figure class="image">
                                <img src="/images/topo.jpg">
                            </figure>
                            <div class="content">
                                <p>Get route information. Find printable maps, images, files you can use in your GPS, and interactive maps on CalTopo.</p>
                                <a class="button is-primary is-inverted is-outlined is-medium is-rounded">See Our Guides</a>
                            </div>
                        </article>
                    </div>
                    <div class="tile is-parent">
                        <article class="tile is-child notification is-primary">
                            <p class="title is-spaced">Membership</p>
                            <p class="subtitle">You don't have to be a member to hike with us. If you have already bagged 25 or more peaks on our list, considering joining us.</p>
                            <div class="content">
                                <p>We have a lot of fun bagging our peaks and we think you would, too.  To become a member, subscribe to <i>The Lookout</i> (our newsletter) and climb 25 peaks on the list.</p>
                                <a class="button is-primary is-inverted is-outlined is-medium is-rounded">Join Now</a>
                            </div>
                            <hr/>
                            <p class="title is-spaced">Neat New Stuff</p>
                            <p class="subtitle">Check out some of our newest resources</p>
                            <div class="content">
                                <ul>
                                    <li>Join or Renew using PayPal</li>
                                    <li>Updated Table of Lat/Long Peak Coordinates, thanks to Matt Kraai (now includes Beartrap Bluff and Mount Minerva Hoyt)</li>
                                    <li>Back issues of The Lookout Several issues from the 1980s, 1990s and 2000s have been added!</li>
                                </ul>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="tile is-parent">
                    <article class="tile is-child notification is-blue-green">
                        <p class="title is-spaced">Upcoming Outings</p>
                        <p class="subtitle">Here are the outings for the next week. Wanna plan further ahead? Visit our outings page! </p>
                        <div class="content">
                            <iframe style="width:100%;height:670px;" scrolling="no" src="//vault.sierraclub.org/online-activities/iframe-entity.aspx?e=ent/0452&amp;v=list&amp;lat=&amp;lng=&amp;z=&amp;sp=&amp;dtb=&amp;dte=&amp;c=&amp;t=&amp;d=&amp;ss=false&amp;sc=false&amp;st=false&amp;dys=7&amp;mt=hybrid&amp;amp" width="320" height="240" frameborder="0" marginwidth="0" marginheight="0"></iframe>
                        </div>
                    </article>
                </div>
            </div>
            <div class="tile is-parent">
                <article class="tile is-child notification is-tertiary">
                    <p class="title">Latest News</p>
                    <hr/>
                    <p class="title">Our Purposes</p>
                    <div class="content">
                        <ul>
                            <li>To encourage our members to explore and enjoy the mountains of Southern California and to become familiar with their scenic resources</li>
                            <li>To stimulate interest in climbing these ranges</li>
                            <li>To preserve their forests, waters, wildlife, and wildernesses</li>
                            <li>To enlist public interest and cooperation in protecting them</li>
                            <li>To foster among our members the purposes of the Sierra Club.</li>
                        </ul>
                    </div>
                </article>
            </div>
        </div>
    </section>
@endsection