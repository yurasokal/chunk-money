@extends('layouts.main')
@section('content')

<div class="site">
    <nav class="nav">
        <ul class="nav__list">
            <div class="nav__list-reserv"></div>
            <li class="nav__item nav__item-overview">
                <a
                    class="nav__link nav__link-overview"
                    href="#overview"
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
                href="#transactions"
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
                href="#tbo1"
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
                href="#tbo2"
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
                href="#tbo3"
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
                href="#account"
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
                href="#tbo4"
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

        <section class="overview"></section>

        <section class="transactions">
            <div class="transactions__parametrs">
                <div class="transactions__name">Transactions</div>
                <div class="transactions__buttons">
                    <button class="transactions__button transactions__button--date">
                        <img
                            class="transactions__calendarIcon"
                            src="{{ asset('/images/calendarIcon.svg') }}"
                            alt="icon tbd"
                        >
                        Dec 29, 20
                    </button>
                    <button class="transactions__button transactions__button--date">
                        <img
                            class="transactions__calendarIcon"
                            src="{{ asset('/images/calendarIcon.svg') }}"
                            alt="icon tbd"
                        >
                        Jan 19, 20
                    </button>
                    <button class="transactions__button transactions__button--go">
                        Go
                    </button>
                    <button class="transactions__button transactions__button--editTransactions">
                        Edit Transactions
                    </button>
                    <button class="transactions__button transactions__button--filter">
                        <img
                            class="transactions__filterIcon"
                            src="{{ asset('/images/filterIcon.svg') }}"
                            alt="icon tbd"
                        >
                        <div class="transactions__filterText">Export</div>
                    </button>
                    <button class="transactions__button transactions__button--export">
                        <img
                            class="transactions__exportIcon"
                            src="{{ asset('/images/exportIcon.svg') }}"
                            alt="icon tbd"
                        >
                        <div class="transactions__exportText">Export</div>
                    </button>
                </div>
            </div>
            <form class="transactions__search">
                <img
                    class="transactions__searchIcon transactions__searchIcon--oval"
                    src="{{ asset('/images/Oval.svg') }}"
                    alt="search"
                >
                <img
                    class="transactions__searchIcon transactions__searchIcon--path"
                    src="{{ asset('/images/path.svg') }}"
                    alt="search"
                >
                <input
                    type="text"
                    placeholder="Search here..."
                    name="search"
                    class="transactions__input"
                >
            </form>

            <table class="transactions__table table">
                <thead class="table__sortBy">
                    <tr class="table__title">
                        <th class="table__heading">Merchant</th>
                        <th class="table__heading">Category</th>
                        <th class="table__heading">Sub-Category</th>
                        <th class="table__heading">Institution</th>
                        <th class="table__heading">Account</th>
                        <th class="table__heading">Status</th>
                        <th class="table__heading">Date </th>
                    </tr>
                </thead>
                <tbody class="table__sortedBy">
                    <tr class="table__active">
                        <td class="table__item table__item--name">Freepik & Flaticon</td>
                        <td class="table__item">SPENDING</td>
                        <td class="table__item">Other</td>
                        <td class="table__item">Chase</td>
                        <td class="table__item">Chase Freedom 7470</td>
                        <td class="table__item">PENDING</td>
                        <td class="table__item">Dec 9, 2020</td>
                    </tr>
                    <tr class="table__active">
                        <td class="table__item table__item--name">Amazon</td>
                        <td class="table__item">SPENDING</td>
                        <td class="table__item">Shopping</td>
                        <td class="table__item">Chase</td>
                        <td class="table__item">Chase Freedom 7470</td>
                        <td class="table__item">PENDING</td>
                        <td class="table__item">Dec 9, 2020</td>
                    </tr>
                    <tr class="table__active">
                        <td class="table__item table__item--name">The Home Depot</td>
                        <td class="table__item">SPENDING</td>
                        <td class="table__item">Shopping</td>
                        <td class="table__item">Chase</td>
                        <td class="table__item">Chase Freedom 7470</td>
                        <td class="table__item">PENDING</td>
                        <td class="table__item">Dec 9, 2020</td>
                    </tr>
                    <tr class="table__active">
                        <td class="table__item table__item--name">Electrical minds</td>
                        <td class="table__item">SPENDING</td>
                        <td class="table__item">Other</td>
                        <td class="table__item">Chase</td>
                        <td class="table__item">Chase Freedom 7470</td>
                        <td class="table__item">PENDING</td>
                        <td class="table__item">Dec 9, 2020</td>
                    </tr>
                    <tr class="table__active">
                        <td class="table__item table__item--name">McDonalds</td>
                        <td class="table__item">SPENDING</td>
                        <td class="table__item">Shopping</td>
                        <td class="table__item">Chase</td>
                        <td class="table__item">Chase Freedom 7470</td>
                        <td class="table__item">PENDING</td>
                        <td class="table__item">Dec 9, 2020</td>
                    </tr>
                    <tr class="table__active">
                        <td class="table__item table__item--name">Yahoo</td>
                        <td class="table__item">SPENDING</td>
                        <td class="table__item">Shopping</td>
                        <td class="table__item">Chase</td>
                        <td class="table__item">Chase Freedom 7470</td>
                        <td class="table__item">PENDING</td>
                        <td class="table__item">Dec 9, 2020</td>
                    </tr>
                </tbody>
            </table>
        </section>

        <section class="tbd1"></section>

    </main>
</div>

@endsection
