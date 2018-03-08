@extends('layouts.app')

@section('main')
    <section class="hero is-primary hps-hero">
        <div class="hero-body">
            <div class="container">
                <h1 class="title hps-title">
                    Hiking 281 Great Peaks In Southern California
                </h1>
                <h2 class="subtitle">
                    Founded in 1946, we encourage everyone to seek adventure and enjoyment in the mountains of Southern California
                </h2>
                <a class="button is-primary is-inverted is-outlined is-medium is-rounded">Find An Outing</a>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <div class="columns horizontal-widget">
                <div class="column is-two-fifths is-secondary">
                    <h3 class="title">About HPS</h3>
                </div>
                <div class="column">
                    <p>The Hundred Peaks Section is a hiking club, part of the Angeles Chapter of the Sierra Club. We schedule outings several times per week to explore the mountains of Southern California. We maintain a list of 281 worthy peaks in this region, and we explore them all.</p><br/>
                    <p>Our hikes are open to members and non-members alike. We encourage you to join us, and enjoy the beautiful outdoors together, and in turn help conserve our precious natural resources.</p>
                </div>
            </div>
        </div>
        <div class="container tiles">
            <div class="tile is-ancestor hps-homepage-tiles">
                <div class="tile is-parent">
                    <a class="tile is-child hps-tile-guides">
                        <h4 class="title">Peak Guides</h4>
                    </a>
                </div>
                <div class="tile is-vertical is-parent">
                    <a class="tile is-child hps-tile-activities">
                        <h4 class="title">Upcoming Outings</h4>
                    </a>
                    <a class="tile is-child hps-tile-membership">
                        <h4 class="title">Membership</h4>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection