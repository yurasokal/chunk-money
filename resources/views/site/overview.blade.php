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

        <section class="overview">
            <div class="overview__left">
                <div class="overview__last30daysWrapper">
                    <div class="overview__last30daysHeading">Last 30 days</div>
                    <div class="overview__last30days">
                        <div class="overview__spending">Spending</div>
                        <div class="overview__income">Income</div>
                        <div class="overview__transfer">Transfer</div>
                    </div>
                </div>
                <div class="overview__spendingAndIncomeHistory">history + graphic</div>

                <div class="overview__totalWrapper">
                    <div class="overview__total">
                        <div class="overview__assets">Spending</div>
                        <div class="overview__debet">Income</div>
                        <div class="overview__worth">Transfer</div>
                    </div>
                </div>

                <div class="overview__spendingAndIncome">history + graphic</div>
            </div>
            <div class="overview__right">
                <div class="overview__keyIncomeHighlights">
                    <div class="overview__incomeHeading">Key Income Highlights</div>
                    <div class="overview__incomeBlock">
                        <div class="overview__numberOfIncome">134</div>
                        <div class="overview__income2020">$123,172.31</div>
                        <div class="overview__largestIncome">VMware</div>
                        <div class="overview__forcastedIncome">$241,301.74</div>
                    </div>
                    <button class="overview__button">VIEW&nbsp;MORE</button>
                </div>
                <div class="overview__godlenNuggets">
                    <div class="overview__godlenHeading">Key Income Highlights</div>
                    <div class="overview__godlenContent">
                        {{-- <img
                            class="overview__goldImage1"
                            src="{{ asset('/images/gold.png') }}"
                            alt="oval"
                        > --}}
                        <img
                            class="overview__goldImage"
                            src="{{ asset('/images/gold1.png') }}"
                            alt="gold"
                        >
                        <p class="overview__godlenText">I spent...</p>
                        <div class="overview__godlenPrice">$200.07</div>
                        <p class="overview__godlenText">at...</p>
                        <div class="overview__godlenSelect">select</div>
                        <p class="overview__godlenText">In the last...</p>
                        <div class="overview__selectDate">1 months, 6 months, 12 months</div>
                    </div>
                </div>
            </div>
        </section>


    </main>
</div>

@endsection
