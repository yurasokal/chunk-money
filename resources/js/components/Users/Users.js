import React, { useEffect } from 'react';
import axios from 'axios';
import { useSelector, useDispatch } from 'react-redux';
import { addUsers } from '../../redux/usersRedux';
import './Users.scss';

export function Users({ type }) {
    const usersList = useSelector(state => state.users.items)
    const dispatch = useDispatch();

    useEffect(async () => {
    const { data } = await axios.get(`https://reqres.in/api/users?page=2`)
    console.log(data.data);
    dispatch(addUsers(data.data))
    }, [])

  // console.log(users.items);
  // console.log(usersList);
    return (
        <>
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
                            />
                            <div class="nav__text nav__text-overview">
                                Overview
                            </div>
                        </a>
                    </li>
                    <li class="nav__item">
                        <a class="nav__link" href="/site/transactions">
                            <img
                                class="nav__icon"
                                src="{{ asset('/images/nav/creditSummary.svg') }}"
                                alt="icon transactions"
                            />
                            <div class="nav__text">Transactions</div>
                        </a>
                    </li>
                    <li class="nav__item">
                        <a class="nav__link" href="/site/tbo1">
                            <img
                                class="nav__icon"
                                src="{{ asset('/images/nav/tbd1.svg') }}"
                                alt="icon tbd"
                            />
                            <div class="nav__text">TBO</div>
                        </a>
                    </li>
                    <li class="nav__item">
                        <a class="nav__link" href="/site/tbo2">
                            <img
                                class="nav__icon"
                                src="{{ asset('/images/nav/tbd2.svg') }}"
                                alt="icon tbd"
                            />
                            <div class="nav__text">TBO</div>
                        </a>
                    </li>
                    <li class="nav__item">
                        <a class="nav__link" href="/site/tbo3">
                            <img
                                class="nav__icon"
                                src="{{ asset('/images/nav/tbd3.svg') }}"
                                alt="icon tbd"
                            />
                            <div class="nav__text">TBO</div>
                        </a>
                    </li>
                    <li class="nav__item">
                        <a class="nav__link" href="/site/account">
                            <img
                                class="nav__icon"
                                src="{{ asset('/images/nav/accounts.svg') }}"
                                alt="icon accounts"
                            />
                            <div class="nav__text">Account</div>
                        </a>
                    </li>
                    <li class="nav__item">
                        <a class="nav__link" href="/site/tbo4">
                            <img
                                class="nav__icon"
                                src="{{ asset('/images/nav/tbd4.svg') }}"
                                alt="icon tbd"
                            />
                            <div class="nav__text">TBO</div>
                        </a>
                    </li>
                </ul>
            </nav>
            <main class="main">
                <div class="userLine"></div>
            </main>

            <div>
                <h2 className="users">Users:</h2>
                <ul className="users__list">
                {usersList.map(user => (
                    <li className="users__link" key={user.id}>
                    <div className="users__first">
                        <img
                        className="users__image"
                        src={user.avatar}
                        alt="user"
                        />
                    </div>
                    <div className="users__second">
                        <div>name: {user.first_name} {user.last_name}</div>
                        <div>email: {user.email}</div>
                    </div>
                    </li>
                ))}
                </ul>
            </div>
        </>
    )
}
