@extends('layouts.app')

@section('content')

    <section class="methods" id="methods">
        <div class="container">
            <h2 class="title text-4xl">Какими методами мы лечим в NEURO REHAB</h2>
            <div class="cards accordion" id="methods-accordion">

                @foreach($methods as $item)

                    <div class="item accordion-item">
                        <h2 class="accordion-header" id="method-{{ $item->id }}">
                            <button class="text text-lg accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#method-collapse-{{ $item->id }}" aria-expanded="true" aria-controls="method-collapse-{{ $item->id }}">
                                {{ $item->title }}
                            </button>
                        </h2>
                        <div id="method-collapse-{{ $item->id }}" class="accordion-collapse collapse show" aria-labelledby="method-{{ $item->id }}" data-bs-parent="#methods-accordion">
                            <div class="accordion-body">
                                <img src="{{ $item->photo }}"  title="{{ $item->title }}"  alt="{{ $item->meta_keywords }}">
                                <a href="/methods/{{ $item->url }}">
                                    <h3 class="title text-4xl">{{ $item->title }}</h3>
                                </a>
                                <p class="text text-sm">
                                    {{ $item->text }}
                                </p>
                            </div>
                        </div>
                    </div>

                @endforeach

            </div>
        </div>
    </section>

@endsection

@section('seo_side')
    <title>Какими методами мы лечим в NEURO REHAB</title>
    <meta name="description" content="Клиника реабилитологии в Алматы по американским стандартам предлагает передовые методы лечения и восстановления. Профессиональная команда врачей и индивидуальный подход к каждому пациенту.">
    <meta name="keywords" content="реабилитология, клиника реабилитологии, Алматы, американские стандарты, восстановление после травм, реабилитация, физическая терапия, медицинская реабилитация, физиотерапия, лечение боли, восстановление здоровья, реабилитация после операции, профессиональные врачи, индивидуальный подход">
    <meta property="og:title" content="Клиника реабилитологии по американским стандартам">
    <meta property="og:description" content="Клиника реабилитологии в Алматы по американским стандартам предлагает передовые методы лечения и восстановления. Профессиональная команда врачей и индивидуальный подход к каждому пациенту.">
    <meta property="og:image" content="/assets/img/logo.svg">
    <meta property="og:image:width" content="100">
    <meta property="og:image:height" content="50">
@endsection
