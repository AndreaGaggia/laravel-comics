@extends('layouts.guests')

@section('main')
    <hr>
    <div class="carousel mt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="carousel-top d-flex justify-content-end align-items-start">
                    <span class="section-badge">
                        COMICS AND GRAFIC NOVELS
                    </span>
                    <ul class="d-flex">
                        <li>THIS WEEK</li>
                        <li>LAST WEEK</li>
                        <li>NEXT WEEK</li>
                        <li>UPCOMING</li>
                        <li>SEE ALL</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="comic-cards d-flex">
                    @foreach ($comics as $comic)
                        <div class="d-flex flex-column p-2">
                            <a href="{{ route('guest_show', ['comic' => $comic->id]) }}" class="comic-card mb-2">
                                <span class="cover-badge">COMIC BOOK</span>
                                <img src="{{ asset('storage/' . $comic->cover) }}" alt="">
                            </a>
                            <p class="text-white m-0">{{ $comic->title }} #{{ $comic->issue }}</p>
                            @if ($comic->available)
                                <p class="available m-0">AVAILABLE NOW</p>
                            @else
                                <p class="available m-0">NOT AVAILABLE</p>
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <section class="articles py-5">
        <div class="container">
            <div class="row">
                <h2 class="mb-3 pl-5">MUST READS</h2>
                <div class="cards d-flex">
                    @foreach ($articles as $article)
                        <div class="w-25 m-2">
                            <img src="{{ asset('storage/' . $article->cover) }}" class="w-100">
                            <p class="supertitle">{{ $article->super_title }}</p>
                            <p class="title">{{ $article->title }}</p>
                            <p class="subtitle">{{ $article->sub_title }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <section class="series">
        <div class="container">
            <div class="row">
                <span class="section-badge">
                    CURRENT SERIES
                </span>
                <div class="thumbs">
                    @foreach ($series as $serie)
                        <div class="thumb">
                            <img src="{{ asset('storage/' . $serie->cover) }}">
                            <p class="text-white mt-3 mb-0">{{ $serie->title }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
