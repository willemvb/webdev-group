@component('layouts.app')
    <header>
        <div id="header-top" class="bg-brand-color-red pt-12 pb-24 text-white">
            <img id="header-logo" class="absolute w-12" src="/images/bg-filled.svg" alt="PHP Antwerp" />
            <div class="m-auto w-grid">
                <nav class="flex justify-between">
                    <h1 class="w-5/9">
                        <span class="font-light text-3xs tracking-wider uppercase">PHP Antwerp</span>
                        <br />
                        <span class="font-text text-xs tracking-normal">All in the same boat since 2015</span>
                    </h1>
                    <ul class="flex font-heading font-light items-center justify-between text-3xs tracking-wider uppercase w-4/9">
                        <li><a class="menu-item" href="#">upcoming events</a></li>
                        <li><a class="menu-item" href="#">past events</a></li>
                        <li><a class="menu-item" href="#">participate</a></li>
                    </ul>
                </nav>
                <section class="mt-16 text-xs">
                    <hr class="bg-white">
                    <div class="flex space-between">
                        <h2 style="flex-basis: 60%;" class="text-base">
                            About PHP
                            <br />
                            Antwerp
                        </h2>
                        <p>
                            PHP ANTWERP is not just a bunch of guys with a 21"inch laptop, pony tails and black tshirts. A rhoncus cursus nisi non eleifend.<br />
                            Proin laoreet lacinia imperdiet. Aliquam posuere a magna sit amet blandit. Mauris eu orci urna. Phasellus ac ligula a neque eleifend suscipit a sit amet tortor. A rhoncus cursus nisi non eleifend. Proin laoreet lacinia imperdiet.
                        </p>
                    </div>
                    <div class="flex space-between">
                        <h2 style="--basis: 60%;" class="flex-basis text-base">Get in touch</h2>
                        <p style="--basis: 20%;" class="flex-basis">
                            info@phpantwerp.be
                            <br />
                            @phpantwerp
                        </p>
                        <p class="flex-basis-20">
                            github.com/phpantwerp
                            <br />
                            meetup.be/phpantwerp
                        </p>
                    </div>
                </section>
            </div>
        </div>
        <div id="header-bottom" class="h-24 w-full">
            <svg class="h-full w-full" viewBox="0 0 100 100" preserveAspectRatio="none">
                <polygon points="0, 0 100, 0 100, 100">
            </svg>
        </div>
    </header>
    <main>
        <section>
            <div id="upcoming-meetups" class="m-auto py-24 w-grid">
                <hr>
                <h2>
                    Upcoming
                    <br />
                    meetups
                </h2>
                <ul class="events | mt-16">
                    <li class="event">
                        <div class="event-nr">
                            #13
                        </div>
                        <div class="font-heading font-light text-3xs text-brand-color-grey uppercase">
                            <span>Monday 13 februari 2017</span>
                            <br />
                            19h00
                        </div>
                        <div>
                            <a href="#" class="button">I want to give a talk</a>
                        </div>
                        <div>
                            <a href="#" class="button">I can help with a venue</a>
                        </div>
                        <div>
                            <a href="#" class="button">Join</a>
                        </div>
                    </li>
                    <li class="event">
                        <div class="font-medium font-heading text-xl text-brand-color-lighter-grey">
                            #14
                        </div>
                        <div class="font-heading font-light text-3xs text-brand-color-grey uppercase">
                            <span>Tuesday 14 februari 2017</span>
                            <br />
                            19h00
                        </div>
                        <div class="">
                            <p class="text-xs">
                                Alfred E. Neumann, Vince Geraldi
                            </p>
                        </div>
                        <div class="font-heading font-light text-3xs uppercase">
                            <span>Spotcrowd</span>
                            <br />
                            Melkmarkt 3, Antwerp
                        </div>
                        <div>
                            {{-- Dit worden waarschijnlijk links --}}
                            <a href="#" class="button">Join</a>
                        </div>
                    </li>
                    <li class="event">
                        <div class="font-medium font-heading text-xl text-brand-color-lighter-grey">
                            #15
                        </div>
                        <div class="font-heading font-light text-3xs text-brand-color-grey uppercase">
                            <span>Friday 23 March 2017</span>
                            <br />
                            19h00
                        </div>
                        <div class="">
                            <p class="text-xs">
                                Random name, Another random name
                            </p>
                        </div>
                        <div class="font-heading font-light text-3xs uppercase">
                            <span>Random host</span>
                            <br />
                            Rijnkaai 24, Antwerp
                        </div>
                        <div>
                            <a href="#" class="button">Join</a>
                        </div>
                    </li>
                    <li class="event">
                        <div class="font-medium font-heading text-xl text-brand-color-lighter-grey">
                            #16
                        </div>
                        <div class="font-heading font-light text-3xs text-brand-color-grey uppercase">
                            <span>Wednesday 28 March 2017</span>
                            <br />
                            19h00
                        </div>
                        <div class="">
                            <p class="text-xs">
                                Another random name, Another random name
                            </p>
                        </div>
                        <div class="font-heading font-light text-3xs uppercase">
                            <span>Another random host</span>
                            <br />
                            Londenstraat 77, Antwerp
                        </div>
                        <div>
                            <a href="#" class="button">Join</a>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <section>
            <h2>Past meetups</h2>
            <div class="">
                <img src="" alt="" />
                <div class="">
                    <h4>
                        <span>#13 — 21 december 2016</span>
                        <br />
                        hosted by MCS
                    </h4>
                    <div class="">
                        <div class="">
                            <h5>Speakers</h5>
                            <ul>
                                <li>Alfred E. Neumann</li>
                                <li>Vince Geraldi</li>
                            </ul>
                        </div>
                        <div class="">
                            <h5>Feedback</h5>
                            <ul>
                                <li>Feedback on Meetup</li>
                                <li>Join.in</li>
                                <li>GitHub</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <img src="" alt="" />
            <div class="">
                <h4>
                    <span>#13 — 21 december 2016</span>
                    <br />
                    hosted by MCS
                </h4>
                <div class="">
                    <div class="">
                        <h5>Speakers</h5>
                        <ul>
                            <li>Alfred E. Neumann</li>
                            <li>Vince Geraldi</li>
                        </ul>
                    </div>
                    <div class="">
                        <h5>Feedback</h5>
                        <ul>
                            <li>Feedback on Meetup</li>
                            <li>Join.in</li>
                            <li>GitHub</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <h2>Participate</h2>
            <div class="">
                <h3>Attend a meetup</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
            </div>
            <div class="">
                <h3>Host a meetup</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
            </div>
            <div class="">
                <h3>Give a talk</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
            </div>
            <div class="">
                <h3>Sponsor us</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
            </div>
            <div class="">
                <img src="" alt="" />
            </div>
            <div class="">
                <img src="" alt="" />
            </div>
            <div class="">
                <img src="" alt="" />
            </div>
            <div class="">
                <img src="" alt="" />
            </div>
            <div class="">
                <img src="" alt="" />
            </div>
            <div class="">
                <img src="" alt="" />
            </div>
        </section>
    </main>
    <footer>
        <section>
            <div class="">
                <h2>Organized by</h2>
                <div class="">
                    <img src="" alt="" />
                    <p>
                        <span>Alfred E. Neumann</span>
                        <br />
                        @alfredeneumann
                    </p>
                </div>
                <div class="">
                    <img src="" alt="" />
                    <p>
                        <span>Alfred E. Neumann</span>
                        <br />
                        @alfredeneumann
                    </p>
                </div>
                <div class="">
                    <img src="" alt="" />
                    <p>
                        <span>Alfred E. Neumann</span>
                        <br />
                        @alfredeneumann
                    </p>
                </div>
            </div>
        </section>
        <section>
            <div class="">
                <h2>Proudly sponsored by</h2>
                <img src="" alt="" />
                <img src="" alt="" />
                <img src="" alt="" />
                <img src="" alt="" />
                <img src="" alt="" />
                <img src="" alt="" />
                <img src="" alt="" />
                <img src="" alt="" />
                <img src="" alt="" />
            </div>
        </section>
    </footer>
@endcomponent
