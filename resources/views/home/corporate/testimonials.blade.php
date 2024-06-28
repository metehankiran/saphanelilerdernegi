@extends('layouts.app')
@section('title', 'Referanslar')
@section('content')
<x-content.banner title="Referanslar" main="Anasayfa" sub="Referanslar" :href="route('home.index')" />


<section class="testimonial pt-70 pb-100">
    <div class="container">
        <div class="row">
            @foreach($feedbacks as $feedback)
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="feedback-card">
                    <div class="stars">
                        <ul>
                            @for ($i = 0; $i < $feedback->rating; $i++)
                            <li><i class="fas fa-star"></i></li>
                            @endfor
                        </ul>
                    </div>
                    <p>{{ $feedback->message }}</p>
                    <div class="feedback-intro-area">
                        @if($feedback->image)
                        <img src="{{ $feedback->image }}" alt="{{ $feedback->name }}">
                        @else
                        <img src="{{ asset('assets') }}/images/feedback/default-user.webp" style="max-width:50px" alt="{{ $feedback->name }}">
                        @endif
                        <div class="feedback-intro">
                            <h5>{{ $feedback->name }}</h5>
                            <span>{{ $feedback->title }}</span>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection
