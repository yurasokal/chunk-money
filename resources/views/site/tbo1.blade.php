@extends('layouts.main')
@section('content')

<div class="site">
    <nav class="nav">
        <ul class="nav__list">
            <div class="nav__list-reserv"></div>
            <li class="nav__item nav__item-overview">
                <a
                    class="nav__link nav__link-overview"
                    href="/site/overview"
                >
                <img
                    class="nav__icon"
                    src="{{ asset('/images/nav/overview.svg') }}"
                    alt="icon overview"
                >
                    <div class="nav__text nav__text-overview">Overview</div>
                </a>
            </li>
            <li class="nav__item">
                <a
                class="nav__link"
                href="/site/transactions"
                >
                <img
                    class="nav__icon"
                    src="{{ asset('/images/nav/creditSummary.svg') }}"
                    alt="icon transactions"
                >
                <div class="nav__text">Transactions</div>
                </a>
            </li>
            <li class="nav__item">
                <a
                class="nav__link"
                href="/site/tbo1"
                >
                <img
                    class="nav__icon"
                    src="{{ asset('/images/nav/tbd1.svg') }}"
                    alt="icon tbd"
                >
                    <div class="nav__text">TBO</div>
                </a>
            </li>
            <li class="nav__item">
                <a
                class="nav__link"
                href="/site/tbo2"
                >
                <img
                    class="nav__icon"
                    src="{{ asset('/images/nav/tbd2.svg') }}"
                    alt="icon tbd"
                >
                <div class="nav__text">TBO</div>
                </a>
            </li>
            <li class="nav__item">
                <a
                class="nav__link"
                href="/site/tbo3"
                >
                <img
                    class="nav__icon"
                    src="{{ asset('/images/nav/tbd3.svg') }}"
                    alt="icon tbd"
                >
                    <div class="nav__text">TBO</div>
                </a>
            </li>
            <li class="nav__item">
                <a
                class="nav__link"
                href="/site/account"
                >
                <img
                    class="nav__icon"
                    src="{{ asset('/images/nav/accounts.svg') }}"
                    alt="icon accounts"
                >
                    <div class="nav__text">Account</div>
                </a>
            </li>
            <li class="nav__item">
                <a
                class="nav__link"
                href="/site/tbo4"
                >
                <img
                    class="nav__icon"
                    src="{{ asset('/images/nav/tbd4.svg') }}"
                    alt="icon tbd"
                >
                    <div class="nav__text">TBO</div>
                </a>
            </li>
        </ul>
    </nav>
    <main class="main">
        <div class="userLine"></div>

        <section class="tbd1"></section>

    </main>
</div>

@endsection
