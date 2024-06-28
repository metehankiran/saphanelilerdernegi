@extends('layouts.app')
@section('title', 'SSS')
@section('content')
    <x-content.banner title="SSS" main="Anasayfa" sub="Sıkça Sorulan Sorular" :href="route('home.index')" />

    <section class="faq ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="faq-img-area">
                        <img src="assets/images/faq-bg.jpg" alt="image">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="faq-text-area">
                        <div class="accordion" id="faq">
                            @foreach ($faqs as $faq)
                                <div class="accordion-item @if ($loop->first) mt-0 @endif">
                                    <h2 class="accordion-header" id="heading-{{ $loop->index }}">
                                        <button class="accordion-button @if (!$loop->first) collapsed @endif"
                                            type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse-{{ $loop->index }}"
                                            aria-expanded="@if ($loop->index) true @else false @endif"
                                            aria-controls="collapse-{{ $loop->index }}">{{ $faq->question }}<i
                                                class="fas fa-plus-circle"></i> <i class="fas fa-minus-circle"></i></button>
                                    </h2>
                                    <div id="collapse-{{ $loop->index }}"
                                        class="accordion-collapse collapse @if ($loop->first) show @endif"
                                        aria-labelledby="heading-1" data-bs-parent="#faq">
                                        <div class="accordion-body">
                                            <p>{{ $faq->answer }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
