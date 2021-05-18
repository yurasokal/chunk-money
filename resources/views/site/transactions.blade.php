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

            <div id="table"></div>
            
            {{-- <table
                class="transactions__table table"
                cellpadding="20 0"
                cellspacing="0"
            >
            <div class="table__wrapper">
                <thead class="table__sortBy">
                    <label for="table__rememberTr" class="table__rememberTr">
                        <tr class="table__title">
                            <th class="table__heading table__heading--checkboxTr">
                                <input
                                    id="table__rememberTr"
                                    class="table__checkboxTr checkboxTr"
                                    type="checkbox"
                                    name="terms"
                                    placeholder="check"
                                />
                            </th>
                            <th class="table__heading table__heading--text">
                                <div class="table__headingText">
                                    <img
                                        class="table__headingVector table__headingVector--merchant"
                                        src="{{ asset('/images/table/vector.svg') }}"
                                        alt="vector"
                                    />
                                    <img
                                        class="table__headingVectorLine table__headingVectorLine--merchant"
                                        src="{{ asset('/images/table/vectorLine.svg') }}"
                                        alt="vector"
                                    />
                                    Merchant
                                </div>
                            </th>
                            <th class="table__heading table__heading--category">
                                <div class="table__headingText table__headingText--category">
                                    <img
                                        class="table__headingVector table__headingVector--category"
                                        src="{{ asset('/images/table/vector.svg') }}"
                                        alt="vector"
                                    />
                                    <img
                                        class="table__headingVectorLine table__headingVectorLine--category"
                                        src="{{ asset('/images/table/vectorLine.svg') }}"
                                        alt="vector"
                                    />
                                    Category
                                </div>
                            </th>
                            <th class="table__heading table__heading--subCategory">
                                <div class="table__headingText table__headingText--subCategory">
                                    <img
                                        class="table__headingVector table__headingVector--subCategory"
                                        src="{{ asset('/images/table/vector.svg') }}"
                                        alt="vector"
                                    />
                                    <img
                                        class="table__headingVectorLine table__headingVectorLine--subCategory"
                                        src="{{ asset('/images/table/vectorLine.svg') }}"
                                        alt="vector"
                                    />
                                    Sub-Category
                                </div>
                            </th>
                            <th class="table__heading">
                                <div class="table__headingText">
                                    <img
                                        class="table__headingVector table__headingVector--institution"
                                        src="{{ asset('/images/table/vector.svg') }}"
                                        alt="vector"
                                    />
                                    <img
                                        class="table__headingVectorLine table__headingVectorLine--institution"
                                        src="{{ asset('/images/table/vectorLine.svg') }}"
                                        alt="vector"
                                    />
                                    Institution
                                </div>
                            </th>
                            <th class="table__heading">
                                <div class="table__headingText">
                                    <img
                                    class="table__headingVector table__headingVector--account"
                                    src="{{ asset('/images/table/vector.svg') }}"
                                        alt="vector"
                                    />
                                    <img
                                        class="table__headingVectorLine table__headingVectorLine--account"
                                        src="{{ asset('/images/table/vectorLine.svg') }}"
                                        alt="vector"
                                    />
                                    Account
                                </div>
                            </th>
                            <th class="table__heading">
                                <div class="table__headingText">
                                    <img
                                    class="table__headingVector table__headingVector--status"
                                        src="{{ asset('/images/table/vector.svg') }}"
                                        alt="vector"
                                    />
                                    <img
                                        class="table__headingVectorLine table__headingVectorLine--status"
                                        src="{{ asset('/images/table/vectorLine.svg') }}"
                                        alt="vector"
                                    />
                                    Status
                                </div>
                            </th>
                            <th class="table__heading">
                                <div class="table__headingText">
                                    <img
                                    class="table__headingVector table__headingVector--date"
                                        src="{{ asset('/images/table/vector.svg') }}"
                                        alt="vector"
                                    />
                                    <img
                                        class="table__headingVectorLine table__headingVectorLine--date"
                                        src="{{ asset('/images/table/vectorLine.svg') }}"
                                        alt="vector"
                                    />
                                    Date
                                </div>
                            </th>
                            <th class="table__heading">
                                <div class="table__headingText">
                                    <img
                                    class="table__headingVector table__headingVector--amount"
                                        src="{{ asset('/images/table/vector.svg') }}"
                                        alt="vector"
                                    />
                                    <img
                                        class="table__headingVectorLine table__headingVectorLine--amount"
                                        src="{{ asset('/images/table/vectorLine.svg') }}"
                                        alt="vector"
                                    />
                                    Amount
                                </div>
                            </th>
                            <th class="table__heading table__heading--marginBlock"></th>
                        </tr>
                    </label>
                </thead>
                <tbody class="table__sortedBy">
                    <label for="table__rememberTd" class="table__rememberTd">
                        <tr class="table__active" cellspacing="0" cellpadding="0">
                            <td class="table__item table__item--checkbox">
                                <input
                                    id="table__rememberTd"
                                    class="table__checkboxTr checkboxTd"
                                    type="checkbox"
                                    name="terms"
                                    placeholder="check"
                                />
                            </td>
                            <td class="table__item table__item--name">
                                <img
                                    class="table__itemImage"
                                    src="{{ asset('/images/table/freepic.svg') }}"
                                    alt="chase"
                                />
                                <div class="table__itemName">Freepik & Flaticon</div>
                            </td>
                            <td class="table__item">SPENDING</td>
                            <td class="table__item table__item--subCategory">
                                <img
                                    class="table__subImage"
                                    src="{{ asset('/images/table/otherCategory.svg') }}"
                                    alt="other category"
                                />
                                <div class="table__subText">Other</div>
                            </td>
                            <td class="table__item table__item--chasee">
                                <img
                                    class="table__chaseImage"
                                    src="{{ asset('/images/table/shoppingIcon2.svg') }}"
                                    alt="chase"
                                />
                                <div class="table__chaseText">Chase</div>
                            </td>
                            <td class="table__item">Chase Freedom 7470</td>
                            <td class="table__item">PENDING</td>
                            <td class="table__item">Dec 9, 2020</td>
                            <td class="table__item table__item--price">
                                <div class="table__itemPrice">$11.90</div>
                                <img
                                    class="table__eye"
                                    src="{{ asset('/images/table/fiEye.svg') }}"
                                    alt="eye"
                                />
                            </td>
                            <td class="table__heading table__heading--marginBlock"></td>

                        </tr>
                        <tr class="table__active">
                            <td class="table__item table__item--checkbox">
                                <input
                                    id="table__rememberTd"
                                    class="table__checkboxTr checkboxTd"
                                    type="checkbox"
                                    name="terms"
                                    placeholder="check"
                                />
                            </td>
                            <td class="table__item table__item--name">
                                <img
                                    class="table__itemImage"
                                    src="{{ asset('/images/table/img.svg') }}"
                                    alt="chase"
                                />
                                <div class="table__itemName">Amazon</div>
                            </td>
                            <td class="table__item">SPENDING</td>
                            <td class="table__item">
                                <img
                                    class="table__subImage"
                                    src="{{ asset('/images/table/shoppingIcon.svg') }}"
                                    alt="other category"
                                />
                                <div class="table__subText">Shopping</div>
                            </td>
                            <td class="table__item">
                                <img
                                    class="table__chaseImage"
                                    src="{{ asset('/images/table/shoppingIcon2.svg') }}"
                                    alt="chase"
                                />
                                <div class="table__chaseText">Chase</div>
                            </td>
                            <td class="table__item">Chase Freedom 7470</td>
                            <td class="table__item">PENDING</td>
                            <td class="table__item">Dec 9, 2020</td>
                            <td class="table__item table__item--price">
                                <div class="table__itemPrice">$11.90</div>
                                <img
                                    class="table__eye"
                                    src="{{ asset('/images/table/fiEye.svg') }}"
                                    alt="eye"
                                />
                            </td>
                            <td class="table__heading table__heading--marginBlock"></td>
                        </tr>
                        <tr class="table__active">
                            <td class="table__item table__item--checkbox">
                                <input
                                    id="table__rememberTd"
                                    class="table__checkboxTr checkboxTd"
                                    type="checkbox"
                                    name="terms"
                                    placeholder="check"
                                />
                            </td>
                            <td class="table__item table__item--name">
                                <img
                                    class="table__itemImage"
                                    src="{{ asset('/images/table/homeDepot.svg') }}"
                                    alt="chase"
                                />
                                <div class="table__itemName">The Home Depot</div>
                            </td>
                            <td class="table__item">SPENDING</td>
                            <td class="table__item">
                                <img
                                    class="table__subImage"
                                    src="{{ asset('/images/table/shoppingIcon.svg') }}"
                                    alt="other category"
                                />
                                <div class="table__subText">Shopping</div>
                            </td>
                            <td class="table__item">
                                <img
                                    class="table__chaseImage"
                                    src="{{ asset('/images/table/shoppingIcon2.svg') }}"
                                    alt="chase"
                                />
                                <div class="table__chaseText">Chase</div>
                            </td>
                            <td class="table__item">Chase Freedom 7470</td>
                            <td class="table__item">PENDING</td>
                            <td class="table__item">Dec 9, 2020</td>
                            <td class="table__item table__item--price">
                                <div class="table__itemPrice">$11.90</div>
                                <img
                                    class="table__eye"
                                    src="{{ asset('/images/table/fiEye.svg') }}"
                                    alt="eye"
                                />
                            </td>
                            <td class="table__heading table__heading--marginBlock"></td>
                        </tr>
                        <tr class="table__active">
                            <td class="table__item table__item--checkbox">
                                <input
                                    id="table__rememberTd"
                                    class="table__checkboxTr checkboxTd"
                                    type="checkbox"
                                    name="terms"
                                    placeholder="check"
                                />
                            </td>
                            <td class="table__item table__item--name">
                                <img
                                    class="table__itemImage"
                                    src="{{ asset('/images/table/trader.svg') }}"
                                    alt="chase"
                                />
                                <div class="table__itemName">Trader Joe's</div>
                            </td>
                            <td class="table__item">SPENDING</td>
                            <td class="table__item">
                                <img
                                    class="table__subImage"
                                    src="{{ asset('/images/table/shoppingIcon.svg') }}"
                                    alt="other category"
                                />
                                <div class="table__subText">Shopping</div>
                            </td>
                            <td class="table__item">
                                <img
                                    class="table__chaseImage"
                                    src="{{ asset('/images/table/shoppingIcon2.svg') }}"
                                    alt="chase"
                                />
                                <div class="table__chaseText">Chase</div>
                            </td>
                            <td class="table__item">Chase Freedom 7470</td>
                            <td class="table__item">PENDING</td>
                            <td class="table__item">Dec 9, 2020</td>
                            <td class="table__item table__item--price">
                                <div class="table__itemPrice">$11.90</div>
                                <img
                                    class="table__eye"
                                    src="{{ asset('/images/table/fiEye.svg') }}"
                                    alt="eye"
                                />
                            </td>
                            <td class="table__heading table__heading--marginBlock"></td>
                        </tr>
                        <tr class="table__active">
                            <td class="table__item table__item--checkbox">
                                <input
                                    id="table__rememberTd"
                                    class="table__checkboxTr checkboxTd"
                                    type="checkbox"
                                    name="terms"
                                    placeholder="check"
                                />
                            </td>
                            <td class="table__item table__item--name">
                                <img
                                    class="table__itemImage"
                                    src="{{ asset('/images/table/mcdonalds.svg') }}"
                                    alt="chase"
                                />
                                <div class="table__itemName">McDonald's</div>
                            </td>
                            <td class="table__item">SPENDING</td>
                            <td class="table__item">
                                <img
                                    class="table__subImage"
                                    src="{{ asset('/images/table/restaurant.svg') }}"
                                    alt="other category"
                                />
                                <div class="table__subText">Restaurants & Bars</div>
                            </td>
                            <td class="table__item">
                                <img
                                    class="table__chaseImage"
                                    src="{{ asset('/images/table/shoppingIcon2.svg') }}"
                                    alt="chase"
                                />
                                <div class="table__chaseText">Chase</div>
                            </td>
                            <td class="table__item">Chase Freedom 7470</td>
                            <td class="table__item">PENDING</td>
                            <td class="table__item">Dec 9, 2020</td>
                            <td class="table__item table__item--price">
                                <div class="table__itemPrice">$11.90</div>
                                <img
                                    class="table__eye"
                                    src="{{ asset('/images/table/fiEye.svg') }}"
                                    alt="eye"
                                />
                            </td>
                            <td class="table__heading table__heading--marginBlock"></td>
                        </tr>
                        <tr class="table__active">
                            <td class="table__item table__item--checkbox">
                                <input
                                    id="table__rememberTd"
                                    class="table__checkboxTr checkboxTd"
                                    type="checkbox"
                                    name="terms"
                                    placeholder="check"
                                />
                            </td>
                            <td class="table__item table__item--name">
                                <img
                                    class="table__itemSpotify"
                                    src="{{ asset('/images/table/spotify.svg') }}"
                                    alt="spotify oval"
                                />
                                <img
                                    class="table__itemSpotify1"
                                    src="{{ asset('/images/table/spotify1.svg') }}"
                                    alt="spotify icon"
                                />
                                <div class="table__itemName">Spotify</div>
                            </td>
                            <td class="table__item">SPENDING</td>
                            <td class="table__item">
                                <img
                                    class="table__subImage"
                                    src="{{ asset('/images/table/smartfone.svg') }}"
                                    alt="other category"
                                />
                                <div class="table__subText">Digital</div>
                            </td>
                            <td class="table__item">
                                <img
                                    class="table__chaseImage"
                                    src="{{ asset('/images/table/shoppingIcon2.svg') }}"
                                    alt="chase"
                                />
                                <div class="table__chaseText">Chase</div>
                            </td>
                            <td class="table__item">Chase Freedom 7470</td>
                            <td class="table__item">PENDING</td>
                            <td class="table__item">Dec 9, 2020</td>
                            <td class="table__item table__item--price">
                                <div class="table__itemPrice">$11.90</div>
                                <img
                                    class="table__eye"
                                    src="{{ asset('/images/table/fiEye.svg') }}"
                                    alt="eye"
                                />
                            </td>
                            <td class="table__heading table__heading--marginBlock"></td>
                        </tr>
                        <tr class="table__active">
                            <td class="table__item table__item--checkbox">
                                <input
                                    id="table__rememberTd"
                                    class="table__checkboxTr checkboxTd"
                                    type="checkbox"
                                    name="terms"
                                    placeholder="check"
                                />
                            </td>
                            <td class="table__item table__item--name">
                                <img
                                    class="table__itemVolkswagen"
                                    src="{{ asset('/images/table/volkswagen.svg') }}"
                                    alt="volkswagen oval"
                                />
                                <img
                                    class="table__itemVolkswagen1"
                                    src="{{ asset('/images/table/volks.svg') }}"
                                    alt="volkswagen icon"
                                />
                                <div class="table__itemName">Volkswagen</div>
                            </td>
                            <td class="table__item">SPENDING</td>
                            <td class="table__item">
                                <img
                                    class="table__subImage"
                                    src="{{ asset('/images/table/car.svg') }}"
                                    alt="other category"
                                />
                                <div class="table__subText">Automotive</div>
                            </td>
                            <td class="table__item">
                                <img
                                    class="table__chaseImage"
                                    src="{{ asset('/images/table/shoppingIcon2.svg') }}"
                                    alt="chase"
                                />
                                <div class="table__chaseText">Chase</div>
                            </td>
                            <td class="table__item">Chase Freedom 7470</td>
                            <td class="table__item">PENDING</td>
                            <td class="table__item">Dec 9, 2020</td>
                            <td class="table__item table__item--price">
                                <div class="table__itemPrice">$11.90</div>
                                <img
                                    class="table__eye"
                                    src="{{ asset('/images/table/fiEye.svg') }}"
                                    alt="eye"
                                />
                            </td>
                            <td class="table__heading table__heading--marginBlock"></td>
                        </tr>
                        <tr class="table__active">
                            <td class="table__item table__item--checkbox">
                                <input
                                    id="table__rememberTd"
                                    class="table__checkboxTr checkboxTd"
                                    type="checkbox"
                                    name="terms"
                                    placeholder="check"
                                />
                            </td>
                            <td class="table__item table__item--name">
                                <img
                                    class="table__itemImage"
                                    src="{{ asset('/images/table/netflix.svg') }}"
                                    alt="chase"
                                />
                                <div class="table__itemName">Netflix</div>
                            </td>
                            <td class="table__item">SPENDING</td>
                            <td class="table__item">
                                <img
                                    class="table__subImage"
                                    src="{{ asset('/images/table/film.svg') }}"
                                    alt="other category"
                                />
                                <div class="table__subText">Entertainment</div>
                            </td>
                            <td class="table__item">
                                <img
                                    class="table__chaseImage"
                                    src="{{ asset('/images/table/shoppingIcon2.svg') }}"
                                    alt="chase"
                                />
                                <div class="table__chaseText">Chase</div>
                            </td>
                            <td class="table__item">Chase Freedom 7470</td>
                            <td class="table__item">PENDING</td>
                            <td class="table__item">Dec 9, 2020</td>
                            <td class="table__item table__item--price">
                                <div class="table__itemPrice">$11.90</div>
                                <img
                                    class="table__eye"
                                    src="{{ asset('/images/table/fiEye.svg') }}"
                                    alt="eye"
                                />
                            </td>
                            <td class="table__heading table__heading--marginBlock"></td>
                        </tr>
                        <tr class="table__active">
                            <td class="table__item table__item--checkbox">
                                <input
                                    id="table__rememberTd"
                                    class="table__checkboxTr checkboxTd"
                                    type="checkbox"
                                    name="terms"
                                    placeholder="check"
                                />
                            </td>
                            <td class="table__item table__item--name">
                                <img
                                    class="table__itemImage"
                                    src="{{ asset('/images/table/fb.svg') }}"
                                    alt="chase"
                                />
                                <div class="table__itemName">Facebook</div>
                            </td>
                            <td class="table__item">SPENDING</td>
                            <td class="table__item">
                                <img
                                    class="table__subImage"
                                    src="{{ asset('/images/table/smartfone.svg') }}"
                                    alt="other category"
                                />
                                <div class="table__subText">Digital</div>
                            </td>
                            <td class="table__item">
                                <img
                                    class="table__chaseImage"
                                    src="{{ asset('/images/table/shoppingIcon2.svg') }}"
                                    alt="chase"
                                />
                                <div class="table__chaseText">Chase</div>
                            </td>
                            <td class="table__item">Chase Freedom 7470</td>
                            <td class="table__item">PENDING</td>
                            <td class="table__item">Dec 9, 2020</td>
                            <td class="table__item table__item--price">
                                <div class="table__itemPrice">$11.90</div>
                                <img
                                    class="table__eye"
                                    src="{{ asset('/images/table/fiEye.svg') }}"
                                    alt="eye"
                                />
                            </td>
                            <td class="table__heading table__heading--marginBlock"></td>
                        </tr>
                    </label>
                </tbody>
            </div>
            </table> --}}
        </section>
    </main>
</div>

@endsection
