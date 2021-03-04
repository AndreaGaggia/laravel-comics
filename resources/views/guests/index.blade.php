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
                        <div class="d-flex flex-column">
                            <a href="{{ route('guest_show', ['comic' => $comic->id]) }}" class="comic-card m-1 mb-2">
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
@endsection
