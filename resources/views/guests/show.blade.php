@extends('layouts.guests')

@section('main')
    <div class="bg-section" style="background-image: url({{ asset('storage/' . $comic->bg_img) }})"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="core-info py-5">
                    <div href="#" class="comic-card">
                        <span class="cover-badge">COMIC BOOK</span>
                        <img src="{{ asset('storage/' . $comic->cover) }}" width="180">
                    </div>
                    <h2 class="font-weight-bold">{{ $comic->title }} #{{ $comic->issue }}</h2>
                    <table class="table table-bordered w-75">
                        <tbody>
                            <tr class="text-white"
                                style="background-color: {{ $comic->available ? '#55ba59' : 'lightgrey' }}">
                                <td class="d-flex justify-content-between">
                                    <span>U.S. Price: <strong>{{ $comic->price }}</strong></span>
                                    @if ($comic->available)
                                        <span class="avail">AVAILABLE</span>
                                    @else
                                        <span>NOT AVAILABLE</span>
                                    @endif
                                </td>
                                <td class="text-right">
                                    <span>Check Availability <i class="fas fa-caret-down"></i></span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <p class="mb-5 w-75">
                        {{ $comic->description }}
                    </p>
                </div>
            </div>
        </div>
    </div>
    <section class="spec">
        <div class="container">
            <div class="row">
                <div class="col-md-10 mx-auto d-flex justify-content-between">
                    <div class="specs">
                        <h3>Talent</h3>
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>Art by:</td>
                                    <td>
                                        @foreach ($comic->illustrators as $illustrator)
                                            <span class="linkable">{{ $illustrator->name }}</span>
                                        @endforeach
                                    </td>
                                </tr>
                                <tr>
                                    <td>Written by:</td>
                                    <td>
                                        @foreach ($comic->writers as $writer)
                                            <span class="linkable">{{ $writer->name }}</span>
                                        @endforeach
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="specs">
                        <h3>Specs</h3>
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>
                                        Series:
                                    </td>
                                    <td class="linkable">
                                        {{ $comic->title }} {{ date('Y', strtotime($comic->on_sale_date)) }}
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        U.S. Price:
                                    </td>
                                    <td>
                                        {{ $comic->price }}
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        On Sale Date:
                                    </td>
                                    <td>
                                        {{ date('j M Y', strtotime($comic->on_sale_date)) }}
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Volume/Issue #
                                    </td>
                                    <td>
                                        {{ $comic->issue }}
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Trim Size:
                                    </td>
                                    <td>
                                        6 5/8 x 10 3/16
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Page Count:
                                    </td>
                                    <td>
                                        {{ strlen($comic->title) }}
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Rated:
                                    </td>
                                    <td>
                                        Teen
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
