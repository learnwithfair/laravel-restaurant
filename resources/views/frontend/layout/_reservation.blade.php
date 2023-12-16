<section class="section" id="reservation">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 align-self-center">
                <div class="left-text-content">
                    <div class="section-heading">
                        <h6>Contact Us</h6>
                        <h2>Here You Can Make A Reservation Or Just walkin to our cafe</h2>
                    </div>
                    <p>Donec pretium est orci, non vulputate arcu hendrerit a. Fusce a eleifend riqsie, namei
                        sollicitudin urna diam, sed commodo purus porta ut.</p>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="phone">
                                <i class="fa fa-phone"></i>
                                <h4>Phone Numbers</h4>
                                <span><a href="#">080-090-0990</a><br><a href="#">080-090-0880</a></span>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="message">
                                <i class="fa fa-envelope"></i>
                                <h4>Emails</h4>
                                <span><a href="#">hello@company.com</a><br><a
                                        href="#">info@company.com</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="contact-form">
                    <form id="contact" class="add_comment" action="" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <h4>Table Reservation</h4>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <fieldset>
                                    <input type="text" name="name" id="name" placeholder="Your Name*"
                                        required>
                                    <span id="nameerror" class="text-danger"></span>
                                </fieldset>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <fieldset>
                                    <input type="tel" name="phone" id="phone" placeholder="Phone Number*"
                                        pattern="[0][1][7][0-9]{2}[0-9]{6}" required>
                                    <span id="phoneerror" class="text-danger"></span>
                                </fieldset>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <fieldset>
                                    <select name="tableNo" id="tableNo" required>
                                        <option value="" disabled selected>Table No</option>
                                        @for ($i = 1; $i <= 12; $i++)
                                            <option value="{{ $i }}">{{ $i }}</option>
                                        @endfor
                                    </select>
                                    <span id="tableNoerror" class="text-danger"></span>
                                </fieldset>
                            </div>

                            <div class="col-lg-6 col-sm-12">
                                <fieldset>
                                    <select name="guest" id="guest" required>
                                        <option value="" disabled selected>Number Of Guests</option>
                                        @for ($i = 1; $i <= 12; $i++)
                                            <option value="{{ $i }}">{{ $i }}</option>
                                        @endfor
                                    </select>
                                    <span id="guesterror" class="text-danger"></span>
                                </fieldset>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <div id="filterDate2">
                                    <div class="input-group date" data-date-format="dd/mm/yyyy">
                                        <input type="text" name="date" id="date" class="form-control"
                                            placeholder="dd/mm/yyyy" required>
                                        <div class="input-group-addon">
                                            <span class="glyphicon glyphicon-th"></span>
                                        </div>
                                    </div>
                                    <span id="dateerror" class="text-danger"></span>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <fieldset>
                                    <select name="time" id="time" required>
                                        <option value="" disabled selected>Selecet Time</option>
                                        <option name="Breakfast" id="Breakfast">Breakfast</option>
                                        <option name="Lunch" id="Lunch">Lunch</option>
                                        <option name="Dinner" id="Dinner">Dinner</option>
                                    </select>
                                    <span id="timeerror" class="text-danger"></span>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <textarea rows="6" name="comment" id="comment" placeholder="Write your comment here.."></textarea>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <span id="comment_submit_area">
                                        @if (Route::has('login'))
                                            @auth
                                                <button type="submit" class="comment_submit main-button-icon">Make A
                                                    Reservation</button>
                                            @else
                                                <a href="{{ Route('login') }}" class="text-white">
                                                    <button type="button" class="main-button-icon">
                                                        Make A Reservation
                                                    </button>
                                                </a>
                                            @endauth
                                        @endif

                                    </span>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
