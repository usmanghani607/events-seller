<!DOCTYPE html>
<html lang="en">

<?php include 'config.php'; ?>
<head>
    <?php include 'header.php' ?>

    <script>
        
        if (!sessionStorage.getItem('userName')) {
            window.location.href = "index"; 
        }

        const BASE_URL = "<?php echo BASE_URL; ?>";
    </script>
    
</head>

<body style="background: #F8F8F8;">

    <div class="dashboard booking">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2">
                    <!-- <div class="side-bar">
                        <button class="active side-bg" onclick="window.location.href='event-add';"><img src="images/post.png" alt=""><span>Post an Event</span></button>
                        <button class="side-bg" onclick="window.location.href='event-list';"><img src="images/list.png" alt=""><span>List of Events</span></button>
                        <button class="side-bg" onclick="window.location.href='promo-code';"><img src="images/promo.png" alt=""><span>Promo code</span></button>
                        <button class="side-bg" onclick="window.location.href='attendance';"><img src="images/group.png" alt=""><span>Attendee</span></button>
                        <button class="side-bg" onclick="window.location.href='order';"><img src="images/order.png" alt=""><span>Orders</span></button>
                        <button class="side-bg" onclick="window.location.href='report';"><img src="images/report.png" alt=""><span>Report</span></button>
                    </div> -->
                    <div class="side-bar">
                        <button class="side-bg" onclick="setActive(this, 'event-add')">
                            <img src="images/post.png" data-default="images/post.png" data-active="images/post-i.png" alt="">
                            <span>Post an Event</span>
                        </button>
                        <button class="side-bg" onclick="setActive(this, 'event-list')">
                            <img src="images/list.png" data-default="images/list.png" data-active="images/list-i.png" alt="">
                            <span>List of Events</span>
                        </button>
                        <button class="side-bg" onclick="setActive(this, 'promo-code')">
                            <img src="images/promo.png" data-default="images/promo.png" data-active="images/promo-i.png" alt="">
                            <span>Promo Code</span>
                        </button>
                        <button class="side-bg" onclick="setActive(this, 'attendance')">
                            <img src="images/group.png" data-default="images/group.png" data-active="images/group-i.png" alt="">
                            <span>Attendee</span>
                        </button>
                        <button class="side-bg" onclick="setActive(this, '')">
                            <img src="images/order.png" data-default="images/order.png" data-active="images/order.png" alt="">
                            <span>Orders</span>
                        </button>
                        <button class="side-bg" onclick="setActive(this, '')">
                            <img src="images/report.png" data-default="images/report.png" data-active="images/report.png" alt="">
                            <span>Report</span>
                        </button>
                    </div>

                </div>
                <div class="col-md-10">
                    <div class="account">
                        <div class="category">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="category-sidebar">
                                        <div class="category-heading">
                                            <h2>Post An Events</h2>
                                        </div>
                                        <ul>
                                            <li><a href="events-detail" class="active">Event Details</a></li>
                                            <li><a href="date-time">Date and Time</a></li>
                                            <li><a href="category-languages">Category & Languages</a></li>
                                            <li><a href="organiser-details">Organiser Details</a></li>
                                            <li><a href="event-description">Event Description</a></li>
                                            <li><a href="banner-images">Banner and Images</a></li>
                                            <li><a href="tickets">Tickets</a></li>
                                            <li><a href="other-details">Other Details</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="main-area events-detail">
                                        <div class="heading-main">
                                            <h3>Event Details</h3>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 col-md-6 mb-3">
                                                <label for="" class="form-label">Event Title*</label>
                                                <input name="product_name" id="product_name" type="text" class="form-control" name="" placeholder="Enter event title">
                                                <div class="error-message text-danger" id="product_name_error"></div>
                                            </div>
                                            <div class="venu-heading col-md-12 mb-3">
                                                <h3>Venue</h3>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="" class="form-label">Enter the venue’s name*</label>
                                                <input type="text" name="event_venue" id="event_venue" class="form-control" name="" placeholder="Enter venue’s name">
                                                <div class="error-message text-danger" id="event_venue_error"></div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="" class="form-label">Address*</label>
                                                <input name="full_address" id="full_address" type="text" class="form-control" name="" placeholder="Enter location">
                                                <div class="error-message text-danger" id="full_address_error"></div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="" class="form-label">City *</label>
                                                <input name="city" id="city" type="text" class="form-control" name="" placeholder="Enter city name">
                                                <div class="error-message text-danger" id="city_error"></div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="" class="form-label">State *</label>
                                                <input name="state" id="state" type="text" class="form-control" name="" placeholder="Enter location">
                                                <div class="error-message text-danger" id="state_error"></div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="" class="form-label">ZIP/POSTAL *</label>
                                                <input name="zip_code" id="zip_code" type="text" class="form-control" name="" placeholder="Enter ZIP/POSTAL">
                                                <div class="error-message text-danger" id="zip_code_error"></div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="" class="form-label">Country *</label>
                                                <input name="country" id="country" type="text" class="form-control" name="" placeholder="United States">
                                                <div class="error-message text-danger" id="country_error"></div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="button-area">
                                                    <a href="date-time" class="next-btn" id="date-time">Next</a>
                                                    <!-- <button type="button" class="next-btn" id="date-time">Next</button> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="main-area date-time" style="display: none;">
                                        <div class="heading-main">
                                            <h3>Date and Time</h3>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 col-md-6 mb-3">
                                                <label for="time-zone" class="form-label">Time Zone*</label>
                                                <div class="input-group">
                                                    <select name="time-zone" id="time-zone" class="form-control custom-select-arrow">
                                                        <option value="">Select time zone</option>
                                                    </select>
                                                </div>
                                                <div id="timeZoneError" class="error-message text-danger"></div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="" class="form-label">Start Date*</label>
                                                <div class="input-group">
                                                    <input name="event_from_date" class="form-control custom-select-arrow" id="event_from_date">
                                                </div>
                                                <div id="startDateError" class="error-message text-danger"></div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="" class="form-label">Start Time*</label>
                                                <div class="input-group">
                                                    <select name="event_timing" id="event_timing" class="form-control custom-select-arrow">
                                                        <option value="">Select Time</option>    
                                                        <option value="00:00">00:00</option>
                                                        <option value="01:00">01:00</option>
                                                        <option value="02:00">02:00</option>
                                                        <option value="03:00">03:00</option>
                                                        <option value="04:00">04:00</option>
                                                        <option value="05:00">05:00</option>
                                                        <option value="06:00">06:00</option>
                                                        <option value="07:00">07:00</option>
                                                        <option value="08:00">08:00</option>
                                                        <option value="09:00">09:00</option>
                                                        <option value="10:00">10:00</option>
                                                        <option value="11:00">11:00</option>
                                                        <option value="12:00">12:00</option>
                                                        <option value="13:00">13:00</option>
                                                        <option value="14:00">14:00</option>
                                                        <option value="15:00">15:00</option>
                                                        <option value="16:00">16:00</option>
                                                        <option value="17:00">17:00</option>
                                                        <option value="18:00">18:00</option>
                                                        <option value="19:00">19:00</option>
                                                        <option value="20:00">20:00</option>
                                                        <option value="21:00">21:00</option>
                                                        <option value="22:00">22:00</option>
                                                        <option value="23:00">23:00</option>
                                                    </select>
                                                </div>
                                                <div id="event_timingError" class="error-message text-danger"></div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="" class="form-label">End Date *</label>
                                                <div class="input-group">
                                                    <input name="event_to_date" id="event_to_date" class="form-control custom-select-arrow" >
                                                </div>
                                                <div id="EventendDateError" class="error-message text-danger"></div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="" class="form-label">End time *</label>
                                                <div class="input-group">
                                                    <select name="event_end_timing" id="event_end_timing" class="form-control custom-select-arrow">
                                                        <option value="">Select Time</option>    
                                                        <option value="00:00">00:00</option>
                                                        <option value="01:00">01:00</option>
                                                        <option value="02:00">02:00</option>
                                                        <option value="03:00">03:00</option>
                                                        <option value="04:00">04:00</option>
                                                        <option value="05:00">05:00</option>
                                                        <option value="06:00">06:00</option>
                                                        <option value="07:00">07:00</option>
                                                        <option value="08:00">08:00</option>
                                                        <option value="09:00">09:00</option>
                                                        <option value="10:00">10:00</option>
                                                        <option value="11:00">11:00</option>
                                                        <option value="12:00">12:00</option>
                                                        <option value="13:00">13:00</option>
                                                        <option value="14:00">14:00</option>
                                                        <option value="15:00">15:00</option>
                                                        <option value="16:00">16:00</option>
                                                        <option value="17:00">17:00</option>
                                                        <option value="18:00">18:00</option>
                                                        <option value="19:00">19:00</option>
                                                        <option value="20:00">20:00</option>
                                                        <option value="21:00">21:00</option>
                                                        <option value="22:00">22:00</option>
                                                        <option value="23:00">23:00</option>
                                                    </select>
                                                </div>
                                                <div id="event_end_timingError" class="error-message text-danger"></div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="button-area">
                                                    <a href="category-languages" class="next-btn" id="category-languages">Next</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="main-area category-languages" style="display: none;">
                                        <div class="heading-main">
                                            <h3>Category & Languages</h3>
                                        </div>
                                        <div class="ca-heading">
                                            <h5>Category</h5>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 col-md-6">
                                                <div class="ca-image d-flex flex-wrap">
                                                    <div class="text-center category-item" data-category="Music">
                                                        <img name="selectItemsubcat_id" id="selectItemsubcat_id" src="images/music.png" alt="Music" class="img-fluid selectItemsubcat_id">
                                                        <p>Music</p>
                                                    </div>
                                                    <div class="text-center category-item" data-category="Performing & Visual Arts">
                                                        <img name="selectItemsubcat_id" id="selectItemsubcat_id" src="images/art.png" alt="Art" class="img-fluid selectItemsubcat_id">
                                                        <p>Performing & Visual Arts</p>
                                                    </div>
                                                    <div class="text-center category-item" data-category="Bollywood">
                                                        <img name="selectItemsubcat_id" id="selectItemsubcat_id" src="images/bollywood.png" alt="Bollywood" class="img-fluid selectItemsubcat_id">
                                                        <p>Bollywood</p>
                                                    </div>
                                                    <div class="text-center category-item" data-category="Nightlife">
                                                        <img name="selectItemsubcat_id" id="selectItemsubcat_id" src="images/nightlife.png" alt="Nightlife" class="img-fluid selectItemsubcat_id">
                                                        <p>Nightlife</p>
                                                    </div>
                                                    <div class="text-center category-item" data-category="Food & Drink">
                                                        <img name="selectItemsubcat_id" id="selectItemsubcat_id" src="images/food&drink.png" alt="Food & Drink" class="img-fluid selectItemsubcat_id">
                                                        <p>Food & Drink</p>
                                                    </div>
                                                    <div class="text-center category-item" data-category="Business">
                                                        <img name="selectItemsubcat_id" id="selectItemsubcat_id" src="images/business.png" alt="Business" class="img-fluid selectItemsubcat_id">
                                                        <p>Business</p>
                                                    </div>
                                                    <div class="text-center category-item" data-category="Devotional">
                                                        <img name="selectItemsubcat_id" id="selectItemsubcat_id" src="images/devotional.png" alt="Devotional" class="img-fluid selectItemsubcat_id">
                                                        <p>Devotional</p>
                                                    </div>
                                                    <div class="text-center category-item" data-category="Educational">
                                                        <img name="selectItemsubcat_id" id="selectItemsubcat_id" src="images/educational.png" alt="educational" class="img-fluid selectItemsubcat_id">
                                                        <p>Educational</p>
                                                    </div>
                                                    <div class="text-center category-item" data-category="Sports">
                                                        <img name="selectItemsubcat_id" id="selectItemsubcat_id" src="images/sports.png" alt="sports" class="img-fluid selectItemsubcat_id">
                                                        <p>Sports</p>
                                                    </div>
                                                    <div class="text-center category-item" data-category="Spiritual">
                                                        <img name="selectItemsubcat_id" id="selectItemsubcat_id" src="images/spiritual.png" alt="spiritual" class="img-fluid selectItemsubcat_id">
                                                        <p>Spiritual</p>
                                                    </div>
                                                    <div class="text-center category-item" data-category="Festival">
                                                        <img name="selectItemsubcat_id" id="selectItemsubcat_id" src="images/festival.png" alt="festival" class="img-fluid selectItemsubcat_id">
                                                        <p>Festival</p>
                                                    </div>
                                                    <div class="text-center category-item" data-category="Social">
                                                        <img name="selectItemsubcat_id" id="selectItemsubcat_id" src="images/social.png" alt="social" class="img-fluid selectItemsubcat_id">
                                                        <p>Social</p>
                                                    </div>
                                                    <div class="text-center category-item" data-category="Show">
                                                        <img name="selectItemsubcat_id" id="selectItemsubcat_id" src="images/show.png" alt="show" class="img-fluid selectItemsubcat_id">
                                                        <p>Show</p>
                                                    </div>
                                                    <div class="text-center category-item" data-category="Exhibition">
                                                        <img name="selectItemsubcat_id" id="selectItemsubcat_id" src="images/exhibition.png" alt="exhibition" class="img-fluid selectItemsubcat_id">
                                                        <p>Exhibition</p>
                                                    </div>
                                                    <div class="text-center category-item" data-category="Fair">
                                                        <img name="selectItemsubcat_id" id="selectItemsubcat_id" src="images/fair.png" alt="fair" class="img-fluid selectItemsubcat_id">
                                                        <p>Fair</p>
                                                    </div>

                                                    <input type="hidden" name="selected_category" id="selected_category">

                                                </div>
                                            </div>

                                            <div class="lang-tab">
                                                <div class="lang-heading">
                                                    <h5>Language</h5>
                                                </div>
                                                <div class="lang-btn">
                                                    <button class="lang-select" data-lang="Hindi">Hindi</button>
                                                    <button class="lang-select" data-lang="English">English</button>
                                                    <button class="lang-select" data-lang="Marathi">Marathi</button>
                                                    <button class="lang-select" data-lang="Bengali">Bengali</button>
                                                    <button class="lang-select" data-lang="Malayalam">Malayalam</button>
                                                    <button class="lang-select" data-lang="Gujarati">Gujarati</button>
                                                    <button class="lang-select" data-lang="Punjabi">Punjabi</button>
                                                    <button class="lang-select" data-lang="Urdu">Urdu</button>
                                                    <button class="lang-select" data-lang="Telugu">Telugu</button>
                                                    <button class="lang-select" data-lang="Kannada">Kannada</button>
                                                </div>
                                            </div>

                                            <input type="hidden" id="selected_languages" name="selected_languages">

                                            <div class="col-md-12">
                                                <div class="button-area">
                                                    <a href="organiser-details" class="next-btn" id="organiser-details">Next</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="main-area organiser-details" style="display: none;">
                                        <div class="heading-main">
                                            <h3>Organiser Details</h3>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label for="" class="form-label">Organization name *</label>
                                                <input name="organiser_name" id="organiser_name" type="text" class="form-control firstNameField" name="firstName" placeholder="Organization name">
                                                <div id="firstNameError" class="error-message text-danger"></div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="" class="form-label">Hosted By *</label>
                                                <input name="hosted-by" id="hosted-by" type="text" class="form-control lastNameField" name="lastName" placeholder="Hosted By">
                                                <div id="lastNameError" class="error-message text-danger"></div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="" class="form-label">Contact Number</label>
                                                <input name="organiser_contact" id="organiser_contact" type="text" class="form-control firstNameField" name="firstName" placeholder="Enter contact number">
                                                <div id="firstNameError" class="error-message text-danger"></div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="" class="form-label">Email Address</label>
                                                <input name="organiser_email" id="organiser_email" type="text" class="form-control lastNameField" name="lastName" placeholder="Enter email address">
                                                <div id="lastNameError" class="error-message text-danger"></div>
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <label for="" class="form-label">Address</label>
                                                <input name="organiser_address" id="organiser_address" type="text" class="form-control firstNameField" name="firstName" placeholder="Enter address">
                                                <div id="firstNameError" class="error-message text-danger"></div>
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <label for="" class="form-label">About Organiser</label>
                                                <input name="organiser_detail" id="organiser_detail" type="text" class="form-control lastNameField" name="lastName" placeholder="Description…">
                                                <div id="lastNameError" class="error-message text-danger"></div>
                                            </div>
                                            <div class="heading-main">
                                                <h3>Tax Details</h3>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="" class="form-label">Enter your Tax ID#</label>
                                                <div class="input-group">
                                                    <select class="form-control custom-select-arrow" id="tax">
                                                        <option>Event Organizer pays</option>
                                                        <option>Customer Pays</option>
                                                    </select>
                                                </div>
                                                <div id="lastNameError" class="error-message text-danger"></div>
                                            </div>
                                            <div class="col-md-6 mb-3" id="taxDiv" style="display: none;">
                                                <label for="" class="form-label">Tax (in %)</label>
                                                <input name="taxinpercent" id="taxinpercent" type="text" class="form-control lastNameField" name="">
                                                <div id="lastNameError" class="error-message text-danger"></div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="button-area">
                                                    <a href="event-description" class="next-btn" id="event-description">Next</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
                                    <div class="main-area organiser-details" style="display: none;">
                                        <div class="heading-main">
                                            <h3>Organiser Details</h3>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label for="" class="form-label">Organization name *</label>
                                                <input name="organiser_name" id="organiser_name" type="text" class="form-control firstNameField" placeholder="Organization name">
                                                <div id="organiserNameError" class="error-message text-danger"></div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="" class="form-label">Hosted By *</label>
                                                <input name="hosted-by" id="hosted-by" type="text" class="form-control lastNameField" placeholder="Hosted By">
                                                <div id="hostedNameError" class="error-message text-danger"></div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="" class="form-label">Contact Number</label>
                                                <input name="organiser_contact" id="organiser_contact" type="text" class="form-control firstNameField" placeholder="Enter contact number">
                                                <div id="organiserContactError" class="error-message text-danger"></div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="" class="form-label">Email Address</label>
                                                <input name="organiser_email" id="organiser_email" type="text" class="form-control lastNameField" placeholder="Enter email address">
                                                <div id="organiserEmailError" class="error-message text-danger"></div>
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <label for="" class="form-label">Address</label>
                                                <input name="organiser_address" id="organiser_address" type="text" class="form-control firstNameField" placeholder="Enter address">
                                                <div id="organiserAddressError" class="error-message text-danger"></div>
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <label for="" class="form-label">About Organiser</label>
                                                <input name="organiser_detail" id="organiser_detail" type="text" class="form-control lastNameField" placeholder="Description…">
                                                <div id="organiserDetailError" class="error-message text-danger"></div>
                                            </div>
                                            <div class="heading-main">
                                                <h3>Tax Details</h3>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="" class="form-label">Enter your Tax ID#</label>
                                                <div class="input-group">
                                                    <select class="form-control custom-select-arrow" id="taxpayby" name="taxpayby">
                                                        <option>Event Organizer pays</option>
                                                        <option>Customer Pays</option>
                                                    </select>
                                                </div>
                                                <div id="taxError" class="error-message text-danger"></div>
                                            </div>
                                            <div class="col-md-6 mb-3" id="taxDiv" style="display: none;">
                                                <label for="" class="form-label">Tax (in %)</label>
                                                <input name="taxinpercent" id="taxinpercent" type="text" class="form-control lastNameField" name="">
                                                <div id="taxDivError" class="error-message text-danger"></div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="button-area">
                                                    <a href="event-description" class="next-btn" id="event-description">Next</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="main-area event-description" style="display: none;">
                                        <div class="heading-main">
                                            <h3>Event Description</h3>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 mb-3">
                                                <!-- <input type="text" class="form-control firstNameField" name="firstName" placeholder="Organization name"> -->
                                                <textarea name="description" id="description" class="form-control"></textarea>
                                                <div id="descriptionError" class="error-message text-danger"></div>
                                            </div>
                                            <div class="heading-main">
                                                <h3>Artist details</h3>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="" class="form-label">Tags your artist</label>
                                                <div id="artist-container">
                                                    <div class="d-flex mb-2">
                                                        <input name="ing_name[]" type="text" class="form-control lastNameField" placeholder="Artist name">
                                                        <button class="add-btn">Add</button>
                                                    </div>
                                                </div>
                                                <div id="lastNameError" class="error-message"></div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="" class="form-label">Wikipedia Link</label>
                                                <div id="wikipedia-container">
                                                    <div class="d-flex mb-2">
                                                        <input name="wikipedia[]" type="text" class="form-control lastNameField" placeholder="Artist wikipedia link">
                                                        <button class="add-btn">Add</button>
                                                    </div>
                                                </div>
                                                <div id="lastNameError" class="error-message"></div>
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <label for="" class="form-label">Artist Image Gallery</label>
                                                <div class="custom-file-inputeventGallery" id="artistGalleryContainer">
                                                    <input type="file" id="artisteventImage" class="form-control" accept="image/*" style="opacity: 0; position: absolute; z-index: 2;">
                                                    <div id="eventGalleryPlaceholder" class="eventGallery-placeholder">
                                                        <img src="images/upload.png" alt="">
                                                    </div>
                                                </div>
                                                <div id="lastNameError" class="error-message text-danger"></div>
                                                <div id="artistPreview" style="margin-top: 20px; display: flex; gap: 10px; flex-wrap: wrap;"></div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="" class="form-label">Youtube Link</label>
                                                <div id="youtube-container">
                                                    <div class="d-flex mb-2">
                                                        <input name="youtube-link[]" type="text" class="form-control lastNameField" placeholder="Youtube link">
                                                        <button class="add-btn">Add</button>
                                                    </div>
                                                </div>
                                                <div id="lastNameError" class="error-message text-danger"></div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="button-area">
                                                    <a href="banner-images" class="next-btn" id="banner-images">Next</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="main-area banner-images" style="display: none;">
                                        <div class="heading-main">
                                            <h3>Main event banner image</h3>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 mb-3">
                                                <div id="eventBannerDropZone" class="drop-zone">
                                                    <p class="drop-zone-text">Drop file here <br>or <br>click here to upload</p>
                                                    <input type="file" name="photo_wide" id="photo_wide" class="form-control" accept="image/*" style="display: none;">
                                                </div>
                                                <div id="eventBannerPreview" style="margin-top: 5px; display: flex; gap: 10px; flex-wrap: wrap;"></div>
                                                <span class="image-note">Note: The ideal dimension is 1080x470 pixels and the maximum image size is 4 MB</span>
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <label for="" class="form-label">Thumbnail Image</label>
                                                <div class="custom-file-input thumb" id="thumbnailContainer">
                                                    <input type="file" id="photo" class="form-control" accept="image/*" style="opacity: 0; position: absolute; z-index: 2;">
                                                    <div id="thumbnailPlaceholder" class="thumbnail-placeholder">
                                                        <!-- <img src="images/upload.png" alt=""> -->
                                                        <p>Click here <br>to upload</p>
                                                    </div>
                                                </div>
                                                <div id="thambnailPreview" style="margin-top: 20px; display: flex; gap: 10px; flex-wrap: wrap;"></div>
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <label for="" class="form-label">Event Gallery</label>
                                                <!-- <input type="file" id="eventGallery" class="form-control" multiple accept="image/*"> -->
                                                <div class="custom-file-inputeventGallery" id="eventGalleryContainer">
                                                    <input type="file" id="product_app_photo" class="form-control" accept="image/*" style="opacity: 0; position: absolute; z-index: 2;">
                                                    <div id="eventGalleryPlaceholder" class="eventGallery-placeholder">
                                                        <img src="images/upload.png" alt="">
                                                    </div>
                                                </div>
                                                <div id="lastNameError" class="error-message text-danger"></div>
                                                <div id="eventPreview" style="margin-top: 20px; display: flex; gap: 10px; flex-wrap: wrap;"></div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="button-area">
                                                    <a href="tickets" class="next-btn" id="tickets">Next</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="main-area tickets" style="display: none;">
                                        <div class="heading-main">
                                            <h3>Tickets</h3>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 mb-3">
                                                <div class="d-flex">
                                                    <button class="add-ticket-btn" data-bs-toggle="modal" data-bs-target="#addTicketModal"><img src="images/circle-white.png" alt="add-icon" class="add-t">Add Ticket</button>
                                                    <button class="sitting-arrang-btn" data-bs-toggle="modal" data-bs-target="#sittingModal"><img src="images/circle-outline.png" alt="add-sitting" class="add-sit">Sitting arrangement Image</button>
                                                </div>
                                                <div id="firstNameError" class="error-message text-danger"></div>
                                            </div>
                                            <div class="col-md-12">
                                                <table class="ticket-table">
                                                    <tr>
                                                        <th class="t-name">Ticket Name</th>
                                                        <th class="t-qty">Total Qty</th>
                                                        <th class="t-price">Price</th>
                                                        <th class="t-min-order">Min Order</th>
                                                        <th class="t-max-order">Max Order</th>
                                                        <th class="action">Actions</th>
                                                    </tr>
                                                    <tr>
                                                        <td>Early Bird</td>
                                                        <td>100</td>
                                                        <td>$10</td>
                                                        <td>1</td>
                                                        <td>10</td>
                                                        <td><a href="#"><img src="images/edit-pen.png" alt="edit-icon" class="edit-pen"></a>
                                                            <a href="#"><img src="images/delete.png" alt="del-icon" class="del"></a>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <!-- Ticket Modal -->
                                            <div class="modal fade" id="addTicketModal" tabindex="-1" aria-labelledby="addTicketModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="addTicketModalLabel">Add Ticket</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <!-- Ticket Modal -->
                                                            <form>
                                                                <div class="row">
                                                                    <div class="col-md-12 mb-3">
                                                                        <label for="ticketName" class="form-label">Ticket Name*</label>
                                                                        <input name="addonname" id="addonname" type="text" class="form-control" placeholder="Enter ticket name">
                                                                        <div class="error-message text-danger" id="ticket_name_error"></div>
                                                                    </div>
                                                                    <div class="col-md-6 mb-3">
                                                                        <label for="price" class="form-label">Price*</label>
                                                                        <input name="mrpprice" id="mrpprice" class="form-control price" placeholder="Ticket Price" pattern="\d*" inputmode="numeric">
                                                                        <div class="error-message text-danger" id="price_error"></div>
                                                                    </div>
                                                                    <div class="col-md-6 mb-3">
                                                                        <label for="quantity" class="form-label">Ticket Quantity*</label>
                                                                        <input name="size" id="size" type="number" class="form-control" placeholder="Ticket Quantity" min="0">
                                                                        <div class="error-message text-danger" id="size_error"></div>
                                                                    </div>
                                                                    <div class="col-md-6 mb-3">
                                                                        <label for="minOrder" class="form-label">Min order *</label>
                                                                        <input name="min_qty" id="min_qty" type="number" class="form-control" placeholder="Min order" min="0">
                                                                        <div class="error-message text-danger" id="min_qty_error"></div>

                                                                    </div>
                                                                    <div class="col-md-6 mb-3">
                                                                        <label for="maxOrder" class="form-label">Max order *</label>
                                                                        <input name="max_qty" id="max_qty" type="number" class="form-control" placeholder="Max order" min="0">
                                                                        <div class="error-message text-danger" id="max_qty_error"></div>

                                                                    </div>
                                                                    <div class="col-md-6 mb-3">
                                                                        <label for="saleStart" class="form-label">Sale Start From*</label>
                                                                        <input name="selling_start_date" id="selling_start_date" type="text" class="form-control custom-calendar">
                                                                        <div class="error-message text-danger" id="sale_start_error"></div>

                                                                    </div>
                                                                    <div class="col-md-6 mb-3">
                                                                        <label for="startTime" class="form-label">Start Time*</label>
                                                                        <div class="input-group">
                                                                            <select name="selling_start_time" id="selling_start_time" class="form-control custom-select-arrow">
                                                                                <option value="">Select Time</option>    
                                                                                <option value="00:00">00:00</option>
                                                                                <option value="01:00">01:00</option>
                                                                                <option value="02:00">02:00</option>
                                                                                <option value="03:00">03:00</option>
                                                                                <option value="04:00">04:00</option>
                                                                                <option value="05:00">05:00</option>
                                                                                <option value="06:00">06:00</option>
                                                                                <option value="07:00">07:00</option>
                                                                                <option value="08:00">08:00</option>
                                                                                <option value="09:00">09:00</option>
                                                                                <option value="10:00">10:00</option>
                                                                                <option value="11:00">11:00</option>
                                                                                <option value="12:00">12:00</option>
                                                                                <option value="13:00">13:00</option>
                                                                                <option value="14:00">14:00</option>
                                                                                <option value="15:00">15:00</option>
                                                                                <option value="16:00">16:00</option>
                                                                                <option value="17:00">17:00</option>
                                                                                <option value="18:00">18:00</option>
                                                                                <option value="19:00">19:00</option>
                                                                                <option value="20:00">20:00</option>
                                                                                <option value="21:00">21:00</option>
                                                                                <option value="22:00">22:00</option>
                                                                                <option value="23:00">23:00</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="error-message text-danger" id="start_time_error"></div>
                                                                    </div>

                                                                    <div class="col-md-6 mb-3">
                                                                        <label for="saleEnd" class="form-label">Sale End on*</label>
                                                                        <input name="selling_end_date" id="selling_end_date" type="text" class="form-control custom-calendar">
                                                                        <div class="error-message text-danger" id="sale_end_error"></div>

                                                                    </div>
                                                                    <div class="col-md-6 mb-3">
                                                                        <label for="timeEnd" class="form-label">End Time*</label>
                                                                        <div class="input-group">
                                                                            <select name="selling_end_time" id="selling_end_time" class="form-control custom-select-arrow">
                                                                                <option value="">Select Time</option>    
                                                                                <option value="00:00">00:00</option>
                                                                                <option value="01:00">01:00</option>
                                                                                <option value="02:00">02:00</option>
                                                                                <option value="03:00">03:00</option>
                                                                                <option value="04:00">04:00</option>
                                                                                <option value="05:00">05:00</option>
                                                                                <option value="06:00">06:00</option>
                                                                                <option value="07:00">07:00</option>
                                                                                <option value="08:00">08:00</option>
                                                                                <option value="09:00">09:00</option>
                                                                                <option value="10:00">10:00</option>
                                                                                <option value="11:00">11:00</option>
                                                                                <option value="12:00">12:00</option>
                                                                                <option value="13:00">13:00</option>
                                                                                <option value="14:00">14:00</option>
                                                                                <option value="15:00">15:00</option>
                                                                                <option value="16:00">16:00</option>
                                                                                <option value="17:00">17:00</option>
                                                                                <option value="18:00">18:00</option>
                                                                                <option value="19:00">19:00</option>
                                                                                <option value="20:00">20:00</option>
                                                                                <option value="21:00">21:00</option>
                                                                                <option value="22:00">22:00</option>
                                                                                <option value="23:00">23:00</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="error-message text-danger" id="end_time_error"></div>
                                                                    </div>
                                                                    <div class="col-md-12 mb-3">
                                                                        <label for="ticketDesc" class="form-label">Ticket description</label>
                                                                        <textarea name="pack_size" id="pack_size" type="text" class="form-control" id="ticketDesc"></textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="ticket-modal-footer">
                                                                    <button type="button" class="btn add-ticket" onclick="saveTicket()">Add Ticket</button>
                                                                </div>
                                                                <input type="hidden" id="editIndex">
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Sitting Modal -->
                                            <div class="modal fade" id="sittingModal" tabindex="-1" aria-labelledby="sittingModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="sittingModalLabel">Upload Image</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form>
                                                                <div class="row">
                                                                    <div class="col-md-12 mb-3">
                                                                        <div class="custom-file-inputsitting" id="sittingContainer">
                                                                            <input name="ticket_img" type="file" id="sittingImage" class="form-control" accept="image/*" style="opacity: 0; position: absolute; z-index: 2;">
                                                                            <div id="eventGalleryPlaceholder" class="eventGallery-placeholder">
                                                                                <img src="images/upload.png" alt="">
                                                                            </div>
                                                                        </div>
                                                                        <div id="sittingPreview" style="margin-top: 20px; display: flex; gap: 10px; flex-wrap: wrap;"></div>
                                                                        <div class="row">
                                                                        <button type="button" class="next-btn" id="sittingUpload">Upload</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="button-area">
                                                    <a href="other-details" class="next-btn" id="other-details">Next</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="main-area other-details" style="display: none;">
                                        <div class="heading-main">
                                            <h3>Terms & Conditions</h3>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 mb-3">
                                                <textarea name="short_desp" id="short_desp" type="text" class="form-control termField" placeholder="Type here…"></textarea>
                                            </div>
                                            <div class="heading-main">
                                                <h3>FAQ</h3>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="" class="form-label">Question</label>
                                                <input name="ing_f_name[]" id="ing_f_name[]" type="text" class="form-control" name="" placeholder="Question">
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="" class="form-label">Answer</label>
                                                <input name="ing_f_value[]" id="ing_f_value[]" type="text" class="form-control" name="" placeholder="Answer">
                                            </div>
                                            <div class="col-md-12 mb-4">
                                                <button class="add-faq-btn"><img src="images/circle-white.png" alt="add-icon" class="add-t">Add FAQ</button>
                                            </div>

                                            <div id="faqContainer"></div>

                                            <div class="heading-main">
                                                <h3>Social Links</h3>
                                            </div>
                                            <div class="col-md-6 mb-3 social">
                                                <label for="" class="form-label">Facebook</label>
                                                <div class="d-flex">
                                                    <img src="images/fb.png" alt="">
                                                    <input name="fb-link" id="fb-link" type="text" class="form-control lastNameField" placeholder="https://facebook.com/name">
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-3 social">
                                                <label for="" class="form-label">Twitter</label>
                                                <div class="d-flex">
                                                    <img src="images/twitter.png" alt="">
                                                    <input name="twitter-link" id="twitter-link" type="text" class="form-control lastNameField" placeholder="https://twitter.com/name">
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-3 social">
                                                <label for="" class="form-label">Instagram</label>
                                                <div class="d-flex">
                                                    <img src="images/insta.png" alt="">
                                                    <input name="insta-link" id="insta-link" type="text" class="form-control lastNameField" placeholder="https://instagram.com/name">
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-3 social">
                                                <label for="" class="form-label">Youtube</label>
                                                <div class="d-flex">
                                                    <img src="images/youtube.png" alt="">
                                                    <input name="you-link" id="you-link" type="text" class="form-control lastNameField" placeholder="https://youtube.com/name">
                                                </div>
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <div class="button-area">
                                                    <a href="" class="post-event-btn" id="post-event-btn">Post My Event</a>
                                                    <!-- <button type="submit" class="post-event-btn" id="next">Post My Event</button> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC7FCoN0eNTNGEsX6d-BUW-Uh1SiVzn2f0&libraries=places"></script>


<script>
    function initAutocomplete() {
        let input = document.getElementById("full_address");
        let autocomplete = new google.maps.places.Autocomplete(input, {
            types: ["geocode"]
        });

        autocomplete.addListener("place_changed", function () {
            let place = autocomplete.getPlace();

            let city = "", state = "", zip_code = "", country = "";

            if (place.address_components) {
                place.address_components.forEach(component => {
                    let types = component.types;

                    if (types.includes("locality")) {
                        city = component.long_name;
                    } else if (types.includes("administrative_area_level_1")) {
                        state = component.long_name;
                    } else if (types.includes("postal_code")) {
                        zip_code = component.long_name;
                    } else if (types.includes("country")) {
                        country = component.long_name;
                    }
                });
            }

            if (!zip_code && place.geometry) {
                getZipCodeFromLatLng(place.geometry.location);
            } else {
                document.getElementById("zip_code").value = zip_code;
            }

            document.getElementById("city").value = city;
            document.getElementById("state").value = state;
            document.getElementById("country").value = country;
        });

        // Clear fields when input is empty
        input.addEventListener("input", function () {
            if (input.value.trim() === "") {
                clearAddressFields();
            }
        });
    }

    function getZipCodeFromLatLng(location) {
        let geocoder = new google.maps.Geocoder();
        geocoder.geocode({ location: location }, function (results, status) {
            if (status === "OK") {
                if (results[0]) {
                    let zip_code = "";
                    results[0].address_components.forEach(component => {
                        if (component.types.includes("postal_code")) {
                            zip_code = component.long_name;
                        }
                    });

                    if (zip_code) {
                        document.getElementById("zip_code").value = zip_code;
                    }
                }
            }
        });
    }

    // Function to clear fields
    function clearAddressFields() {
        document.getElementById("city").value = "";
        document.getElementById("state").value = "";
        document.getElementById("zip_code").value = "";
        document.getElementById("country").value = "";
    }

    google.maps.event.addDomListener(window, "load", initAutocomplete);
</script>


<script>
    
    $(document).ready(function () {
        let selectItemsubcat_id = [];
        let selectedLanguages = [];

        if (sessionStorage.getItem("selectItemsubcat_id")) {
            selectItemsubcat_id = JSON.parse(sessionStorage.getItem("selectItemsubcat_id"));
            selectItemsubcat_id.forEach(category => {
                $(".category-item[data-category='" + category + "']").addClass("selected");
            });
        }

        if (sessionStorage.getItem("selectedLanguages")) {
            selectedLanguages = JSON.parse(sessionStorage.getItem("selectedLanguages"));
            selectedLanguages.forEach(lang => {
                $(".lang-select[data-lang='" + lang + "']").addClass("selected");
            });
        }

        // function validateEventDetails() {
        //     let isValid = true;
        //     $(".error-message").text("");

        //     if ($("#product_name").val().trim() === "") {
        //         $("#product_name_error").text("Event title is required");
        //         isValid = false;
        //     }
        //     if ($("#event_venue").val().trim() === "") {
        //         $("#event_venue_error").text("Venue name is required");
        //         isValid = false;
        //     }
        //     if ($("#full_address").val().trim() === "") {
        //         $("#full_address_error").text("Address is required");
        //         isValid = false;
        //     }
        //     if ($("#city").val().trim() === "") {
        //         $("#city_error").text("City is required");
        //         isValid = false;
        //     }
        //     if ($("#state").val().trim() === "") {
        //         $("#state_error").text("State is required");
        //         isValid = false;
        //     }
        //     if ($("#zip_code").val().trim() === "") {
        //         $("#zip_code_error").text("ZIP code is required");
        //         isValid = false;
        //     }
        //     if ($("#country").val().trim() === "") {
        //         $("#country_error").text("Country is required");
        //         isValid = false;
        //     }

        //     return isValid;
        // }

        // function validateDateTime() {
        //     let isValid = true;
        //     $(".error-message").text("");

        //     if ($("#time-zone").val() === "") {
        //         $("#timeZoneError").text("Time zone is required");
        //         isValid = false;
        //     }
        //     if ($("#startDate").val().trim() === "") {
        //         $("#startDateError").text("Start date is required");
        //         isValid = false;
        //     }
        //     if ($("#eventtiming").val() === "") {
        //         $("#eventtimingError").text("Start time is required");
        //         isValid = false;
        //     }
        //     if ($("#endDate").val().trim() === "") {
        //         $("#EventendDateError").text("End date is required");
        //         isValid = false;
        //     }
        //     if ($("#eventtimingend").val() === "") {
        //         $("#eventtimingendError").text("End time is required");
        //         isValid = false;
        //     }

        //     return isValid;
        // }

        // function validateOrganiserDetails() {
        //     let isValid = true;
        //     $(".error-message").text("");

        //     if ($("#organiser_name").val() === "") {
        //         $("#organiserNameError").text("Organiser Name is required");
        //         isValid = false;
        //     }
        //     if ($("#hosted-by").val().trim() === "") {
        //         $("#hostedNameError").text("Hosted Name is required");
        //         isValid = false;
        //     }

        //     return isValid;
        // }

        let selectedFiles = JSON.parse(sessionStorage.getItem("artistGallery")) || [];

        document.getElementById('artisteventImage').addEventListener('change', function(event) {
            const files = Array.from(event.target.files);
            const previewContainer = document.getElementById('artistPreview');

            files.forEach(file => {
                if (!selectedFiles.some(f => f.name === file.name)) {
                    selectedFiles.push(file);

                    if (file.type.startsWith('image/')) {
                        const reader = new FileReader();

                        reader.onload = function(e) {
                            const imgContainer = document.createElement('div');
                            imgContainer.classList.add('image-container');
                            imgContainer.style.position = 'relative';
                            imgContainer.style.display = 'inline-block';

                            const img = document.createElement('img');
                            img.src = e.target.result;
                            img.style.maxWidth = '150px';
                            img.style.height = '100px';

                            const removeButton = document.createElement('button');
                            removeButton.innerHTML = '&times;';
                            removeButton.classList.add('remove-img');
                            removeButton.style.position = 'absolute';
                            removeButton.style.top = '5px';
                            removeButton.style.right = '5px';
                            removeButton.style.backgroundColor = 'black';
                            removeButton.style.color = 'white';
                            removeButton.style.border = 'none';
                            removeButton.style.borderRadius = '50%';
                            removeButton.style.cursor = 'pointer';

                            removeButton.addEventListener('click', function() {
                                selectedFiles = selectedFiles.filter(f => f.name !== file.name);
                                sessionStorage.setItem("artistGallery", JSON.stringify(selectedFiles.map(f => f.name)));
                                imgContainer.remove();
                            });

                            imgContainer.appendChild(img);
                            imgContainer.appendChild(removeButton);
                            previewContainer.appendChild(imgContainer);
                        };

                        reader.readAsDataURL(file);
                    }
                }
            });

            sessionStorage.setItem("artistGallery", JSON.stringify(selectedFiles.map(f => f.name)));

            event.target.value = '';
        });

        // function saveToSessionStorage() {
        //     let eventData = JSON.parse(sessionStorage.getItem("eventData")) || {}; 

        //     let shortDescElement = document.getElementById("short_desp");
        //     if (shortDescElement) {
        //         eventData.short_desp = shortDescElement.value.trim();
        //     } else {
        //         console.error("Error: #short_desp not found.");
        //     }

        //     let descriptionEditor = window.editor; 
        //     if (descriptionEditor) {
        //         eventData.description = descriptionEditor.getData().trim();
        //     } else {
        //         eventData.description = document.getElementById("description").value.trim();
        //     }

        //     // Save eventBannerImage in eventData
        //     let storedBannerImage = sessionStorage.getItem("photo_wide");
        //     if (storedBannerImage) {
        //         eventData.photo_wide = storedBannerImage; 
        //     }

        //     // Save Photo in eventData
        //     let storedPhoto = sessionStorage.getItem("photo");
        //     if (storedPhoto) {
        //         eventData.photo = storedPhoto; 
        //     }

        //     // Save eventGallery in eventData
        //     let storedEventGallery = JSON.parse(sessionStorage.getItem("product_app_photo")) || [];
        //     eventData.product_app_photo = storedEventGallery;

        //     let storedTicketData = JSON.parse(sessionStorage.getItem("ticketData")) || [];
        //     eventData.ticketData = storedTicketData;

        //     eventData.ticket_img = JSON.parse(sessionStorage.getItem("ticket_img")) || [];

        //     // eventData.artist_names = Array.from(document.querySelectorAll("input[name='ing_name[]']")).map(input => input.value.trim()).filter(value => value !== "");
        //     let keyName = "ing_name[]";
        //     eventData[keyName] = Array.from(document.querySelectorAll("input[name='ing_name[]']")).map(input => input.value.trim()).filter(value => value !== "");


        //     eventData.wikipedia_links = Array.from(document.querySelectorAll("input[name='wikipedia[]']")).map(input => input.value.trim()).filter(value => value !== "");

        //     eventData.youtube_links = Array.from(document.querySelectorAll("input[name='youtube-link[]']")).map(input => input.value.trim()).filter(value => value !== "");
            
        //     eventData.artistGallery = JSON.parse(sessionStorage.getItem("artistGallery")) || [];

        //     eventData.photo = sessionStorage.getItem("photo") || "";

        //     //uid and storeid

        //     eventData.storeid = sessionStorage.getItem("storeid") || "";
        //     eventData.uid = sessionStorage.getItem("uid") || "";

            
        //     // Existing Fields
        //     eventData.product_name = $("#product_name").val() || "";
        //     eventData.event_venue = $("#event_venue").val() || "";
        //     eventData.full_address = $("#full_address").val() || "";
        //     eventData.city = $("#city").val() || "";
        //     eventData.state = $("#state").val() || "";
        //     eventData.zip_code = $("#zip_code").val() || "";
        //     eventData.country = $("#country").val() || "";
        //     eventData.time_zone = $("#time-zone").val() || "";
        //     eventData.event_from_date = $("#event_from_date").val() || "";
        //     // eventData.event_timing = $("#event_timing").val() || "";
        //     eventData.event_to_date = $("#event_to_date").val() || "";
        //     // eventData.event_end_timing = $("#event_end_timing").val() || "";
        //     // eventData.event_timing = $("#event_timing").val() + " - " + $("#event_end_timing").val();
        //     eventData.event_timing = formatEventTiming();


        //     // Organizer Details
        //     eventData.organiser_name = $("#organiser_name").val() || "";
        //     eventData.hosted_by = $("#hosted-by").val() || "";
        //     eventData.organiser_contact = $("#organiser_contact").val() || "";
        //     eventData.organiser_email = $("#organiser_email").val() || "";
        //     eventData.organiser_address = $("#organiser_address").val() || "";
        //     eventData.organiser_detail = $("#organiser_detail").val() || "";

        //     // Tax Details
        //     eventData.taxpayby = $("#taxpayby").val() || "";
        //     eventData.taxinpercent = $("#taxinpercent").val() || "";

        //     eventData.fb_link = document.querySelector("input[name='fb-link']").value.trim() || "";
        //     eventData.twitter_link = document.querySelector("input[name='twitter-link']").value.trim() || "";
        //     eventData.insta_link = document.querySelector("input[name='insta-link']").value.trim() || "";
        //     eventData.you_link = document.querySelector("input[name='you-link']").value.trim() || "";

        //     // Map categories from new design to old values
        //     let categoryMapping = {
        //         "Music": "4806",
        //         "Performing & Visual Arts": "4807",
        //         "Bollywood": "4808",
        //         "Nightlife": "4812",
        //         "Food & Drink": "23727",
        //         "Business": "23728",
        //         "Devotional": "23729",
        //         "Educational": "23720",
        //         "Sports": "23721",
        //         "Spiritual": "23722",
        //         "Festival": "4810",
        //         "Social": "23723",
        //         "Show": "23724",
        //         "Exhibition": "23725",
        //         "Fair": "23726"
        //     };

        //     let selectedCategories = [];

        //     document.querySelectorAll(".category-item.selected").forEach(categoryItem => {
        //         let categoryName = categoryItem.getAttribute("data-category");
        //         if (categoryMapping[categoryName]) {
        //             selectedCategories.push(categoryMapping[categoryName]);
        //         }
        //     });

        //     eventData.selectItemsubcat_id = selectedCategories;

        //     eventData.categories = 4805;
        //     // eventData.storeid = 340;
        //     // eventData.uid = 403;
        //     eventData.subcat_id = 4806;
        //     eventData.eventlabel ="",
        //     eventData.fonteventlabel ="",
        //     eventData.bgeventlabel ="",
        //     eventData.discount_type ="fixed",
        //     eventData.discount ="",
        //     eventData.sellprice ="",
        //     eventData.instock ="0",
        //     eventData.status ="1",
        //     eventData.ticket_level_color ="",
        //     eventData.display_order ="",
        //     eventData.major_city ="",
        //     eventData.other_city ="",
        //     eventData.last_eventcanceldatetype ="",
        //     eventData.servicefeetype ="",
        //     eventData.servicefeeapplied ="global",
        //     eventData.post_status ="0",
        //     eventData.ticketpopup ="0",
        //     eventData.MenuBanner ="",
        //     eventData.ingredient_name ="",
        //     eventData.ingredient_icon ="",
        //     eventData.ingredient_name="test",
            


        //     sessionStorage.setItem("eventData", JSON.stringify(eventData));
        // }

        function saveToSessionStorage() {
            
            fetch(`${BASE_URL}/main-category`, {
                method: "POST",
                headers: {
                    "Content-Type": "application/json"
                },
                body: JSON.stringify({})
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error(`HTTP error! Status: ${response.status}`);
                }
                return response.json();
            })
            .then(data => {
                if (data.success && data.lstCategory.length > 0) {
                    let categoryId = data.lstCategory[0].id; 
                    processEventData(categoryId); 
                } else {
                    console.error("Error: Invalid category data received.");
                    processEventData(4805); 
                }
            })
            .catch(error => {
                console.error("Error fetching category ID:", error);
                processEventData(4805); 
            });
        }

        function processEventData(categoryId) {
            let eventData = JSON.parse(sessionStorage.getItem("eventData")) || {}; 

            let shortDescElement = document.getElementById("short_desp");
            if (shortDescElement) {
                eventData.short_desp = shortDescElement.value.trim();
            } else {
                console.error("Error: #short_desp not found.");
            }

            let descriptionEditor = window.editor; 
            if (descriptionEditor) {
                eventData.description = descriptionEditor.getData().trim();
            } else {
                eventData.description = document.getElementById("description").value.trim();
            }

            // Save eventBannerImage in eventData
            let storedBannerImage = sessionStorage.getItem("photo_wide");
            if (storedBannerImage) {
                eventData.photo_wide = storedBannerImage; 
            }

            // Save Photo in eventData
            let storedPhoto = sessionStorage.getItem("photo");
            if (storedPhoto) {
                eventData.photo = storedPhoto; 
            }

            eventData.ing_p_name = Array.from(document.querySelectorAll("input[name='ing_p_name[]']"))
                .map(input => input.value.trim())
                .filter(value => value !== "");

            // Collecting `hdnSizes[]`
            eventData.hdnSizes = Array.from(document.querySelectorAll("input[name='hdnSizes[]']"))
                .map(input => input.value.trim())
                .filter(value => value !== "");

            // Collecting `hdnTagSizes[]`
            eventData.hdnTagSizes = Array.from(document.querySelectorAll("input[name='hdnTagSizes[]']"))
                .map(input => input.value.trim())
                .filter(value => value !== "");

            // Save eventGallery in eventData
            let storedEventGallery = JSON.parse(sessionStorage.getItem("product_app_photo")) || [];
            eventData.product_app_photo = storedEventGallery;

            let storedTicketData = JSON.parse(sessionStorage.getItem("ticketData")) || [];
            eventData.ticketData = storedTicketData;

            eventData.ticket_img = JSON.parse(sessionStorage.getItem("ticket_img")) || [];

            let keyName = "ing_name[]";
            eventData[keyName] = Array.from(document.querySelectorAll("input[name='ing_name[]']")).map(input => input.value.trim()).filter(value => value !== "");

            eventData.wikipedia_links = Array.from(document.querySelectorAll("input[name='wikipedia[]']")).map(input => input.value.trim()).filter(value => value !== "");
            eventData.youtube_links = Array.from(document.querySelectorAll("input[name='youtube-link[]']")).map(input => input.value.trim()).filter(value => value !== "");
            eventData.artistGallery = JSON.parse(sessionStorage.getItem("artistGallery")) || [];
            eventData.photo = sessionStorage.getItem("photo") || "";

            // Fetch storeid and uid from sessionStorage
            eventData.storeid = sessionStorage.getItem("storeid") || "";
            eventData.uid = sessionStorage.getItem("uid") || "";

            // Existing Fields
            eventData.product_name = $("#product_name").val() || "";
            eventData.event_venue = $("#event_venue").val() || "";
            eventData.full_address = $("#full_address").val() || "";
            eventData.city = $("#city").val() || "";
            eventData.state = $("#state").val() || "";
            eventData.zip_code = $("#zip_code").val() || "";
            eventData.country = $("#country").val() || "";
            eventData.time_zone = $("#time-zone").val() || "";
            eventData.event_from_date = $("#event_from_date").val() || "";
            eventData.event_to_date = $("#event_to_date").val() || "";
            eventData.event_timing = formatEventTiming();

            // Organizer Details
            eventData.organiser_name = $("#organiser_name").val() || "";
            eventData.hosted_by = $("#hosted-by").val() || "";
            eventData.organiser_contact = $("#organiser_contact").val() || "";
            eventData.organiser_email = $("#organiser_email").val() || "";
            eventData.organiser_address = $("#organiser_address").val() || "";
            eventData.organiser_detail = $("#organiser_detail").val() || "";

            // Tax Details
            eventData.taxpayby = $("#taxpayby").val() || "";
            eventData.taxinpercent = $("#taxinpercent").val() || "";

            eventData.fb_link = document.querySelector("input[name='fb-link']").value.trim() || "";
            eventData.twitter_link = document.querySelector("input[name='twitter-link']").value.trim() || "";
            eventData.insta_link = document.querySelector("input[name='insta-link']").value.trim() || "";
            eventData.you_link = document.querySelector("input[name='you-link']").value.trim() || "";

            // Assign category ID dynamically from API response
            eventData.categories = categoryId;

            // Default values
            eventData.subcat_id = 4806;
            eventData.eventlabel = "";
            eventData.fonteventlabel = "";
            eventData.bgeventlabel = "";
            eventData.discount_type = "fixed";
            eventData.discount = "";
            eventData.sellprice = "";
            eventData.instock = "";
            eventData.status = "1";
            eventData.ticket_level_color = "";
            eventData.display_order = "";
            eventData.major_city = "";
            eventData.other_city = "";
            eventData.last_eventcanceldatetype = "";
            eventData.eventcanceldatetype = "";
            eventData.ticket_popup = "0";
            eventData.access_with = "";


            eventData.servicefeetype = "";
            eventData.servicefeeapplied = "global";
            eventData.post_status = "0";
            // eventData.ticketpopup = "0";
            eventData.MenuBanner = "";
            eventData.ingredient_name = "";
            eventData.ingredient_icon = "";
            eventData.sizes = "";
            eventData.size = "";
            eventData.sizetype = "";
            eventData.weight = "";
            eventData.actual_price = "";
            eventData.mrp_price = "";
            eventData.pphoto = "";
            eventData.sell_price = "";



            // eventData.ingredient_name = "test";
            eventData.street_address = "";
            eventData.latitude = "";
            eventData.longitude = "";
            eventData.pincode = "";
            eventData.eventlastdate = "";
            eventData.deductiontype = "";



            // Store updated eventData in sessionStorage
            sessionStorage.setItem("eventData", JSON.stringify(eventData));
        }



        document.getElementById("post-event-btn").addEventListener("click", function () {
            saveToSessionStorage(); 
            setTimeout(submitEventData, 500); 
        });

        function submitEventData() {
            let eventData = JSON.parse(sessionStorage.getItem("eventData"));

            if (!eventData || Object.keys(eventData).length === 0) {
                console.error("Error: No event data found in sessionStorage.");
                alert("Event data is missing. Please fill out the form.");
                return;
            }

            $.ajax({
                url: `${BASE_URL}/add-event`,
                type: "POST",
                contentType: "application/json",
                data: JSON.stringify(eventData),
                success: function (response) {
                    // console.log("Event saved successfully:", response);
                    // alert("Event posted successfully!");
                    sessionStorage.removeItem("eventData"); 
                },
                error: function (error) {
                    // console.error("Error saving event:", error);
                    alert("Error posting event. Please try again.");
                },
            });
        }

        $(".category-item").click(function () {
            let category = $(this).attr("data-category");
            if (selectItemsubcat_id.includes(category)) {
                selectItemsubcat_id = selectItemsubcat_id.filter(item => item !== category);
                $(this).removeClass("selected");
            } else {
                selectItemsubcat_id.push(category);
                $(this).addClass("selected");
            }
            sessionStorage.setItem("selectItemsubcat_id", JSON.stringify(selectItemsubcat_id));
        });

        $(".lang-select").click(function () {
            let language = $(this).attr("data-lang");
            if (selectedLanguages.includes(language)) {
                selectedLanguages = selectedLanguages.filter(item => item !== language);
                $(this).removeClass("selected");
            } else {
                selectedLanguages.push(language);
                $(this).addClass("selected");
            }
            sessionStorage.setItem("selectedLanguages", JSON.stringify(selectedLanguages));
        });

        $("#date-time").click(function (e) {
            e.preventDefault();
            // if (validateEventDetails()) {
                saveToSessionStorage();
                $(".events-detail").hide();
                $(".date-time").show();
            // }
        });

        $("#category-languages").click(function (e) {
            e.preventDefault();
            // if (validateDateTime()) {
                saveToSessionStorage();
                $(".date-time").hide();
                $(".category-languages").show();
            // }
        });

        $("#organiser-details").click(function (e) {
            e.preventDefault();
                saveToSessionStorage();
                $(".category-languages").hide();
                $(".organiser-details").show();
        });

        $("#event-description").click(function (e) {
            e.preventDefault();
                saveToSessionStorage();
                $(".organiser-details").hide();
                $(".event-description").show();
        });

        $("#banner-images").click(function (e) {
            e.preventDefault();
                saveToSessionStorage();
                $(".event-description").hide();
                $(".banner-images").show();
        });

        $("#tickets").click(function (e) {
            e.preventDefault();
                saveToSessionStorage();
                saveBannerImageToSession();
                $(".banner-images").hide();
                $(".tickets").show();
        });

        $("#other-details").click(function (e) {
            e.preventDefault();
                saveToSessionStorage();
                $(".tickets").hide();
                $(".other-details").show();
        });

    });

    //Main event banner image
    // function saveBannerImageToSession() {
    //     const bannerInput = document.getElementById("EventBannerImage");

    //     if (bannerInput.files.length > 0) {
    //         const file = bannerInput.files[0];

    //         if (file.type.startsWith("image/")) {

    //             let originalFileName = file.name.replace(/\s+/g, "_").replace(/[^a-zA-Z0-9_.]/g, "");

    //             sessionStorage.setItem("eventBannerImage", originalFileName);
    //         }
    //     }
    // }

    // $(document).ready(function () {
    //     let storedBanner = sessionStorage.getItem("eventBannerImage");

    //     if (storedBanner) {
    //         let bannerData = JSON.parse(storedBanner);
    //         let imgContainer = document.getElementById("eventBannerPreview");

    //         // Clear previous content before appending new image
    //         imgContainer.innerHTML = '';

    //         // Create Image Element
    //         let img = document.createElement("img");
    //         img.src = bannerData.fileData;
    //         img.style.maxWidth = "100%";
    //         img.style.borderRadius = "8px";
    //         img.style.boxShadow = "0px 2px 8px rgba(0, 0, 0, 0.2)";

    //         // Create Label for File Name
    //         let fileNameLabel = document.createElement("p");
    //         fileNameLabel.textContent = "Uploaded Image: " + bannerData.fileName;
    //         fileNameLabel.style.fontSize = "14px";
    //         fileNameLabel.style.color = "#555";

    //         // Append Image & Name
    //         imgContainer.appendChild(fileNameLabel);
    //         imgContainer.appendChild(img);
    //     }
    // });

    //Main event banner image
    document.getElementById("photo_wide").addEventListener("change", function(event) {
        let file = event.target.files[0]; 
        if (file) {
            sessionStorage.setItem("photo_wide", file.name); 
        }
    });

    //Thumbnail Image banner image
    document.getElementById("photo").addEventListener("change", function(event) {
        let file = event.target.files[0]; 
        if (file) {
            sessionStorage.setItem("photo", file.name); 
        }
    });

    //Event Gallery
    document.getElementById("product_app_photo").addEventListener("change", function (event) {
        let files = event.target.files;
        let product_app_photo = JSON.parse(sessionStorage.getItem("product_app_photo")) || []; 

        if (files.length > 0) {
            for (let i = 0; i < files.length; i++) {
                let file = files[i];

                if (file.type.startsWith("image/")) {
                    let originalFileName = file.name.replace(/\s+/g, "_").replace(/[^a-zA-Z0-9_.]/g, "");
                    product_app_photo.push(originalFileName); 
                }
            }
            sessionStorage.setItem("product_app_photo", JSON.stringify(product_app_photo)); 
        }
    });

    //Sitting Gallery
    document.getElementById("sittingUpload").addEventListener("click", function () {
        let fileInput = document.getElementById("sittingImage");
        let previewContainer = document.getElementById("sittingPreview");
        
        previewContainer.style.display = "none";

        let files = fileInput.files;
        let ticket_img = JSON.parse(sessionStorage.getItem("ticket_img")) || [];

        if (files.length > 0) {
            let file = files[0];

            let originalFileName = file.name.replace(/\s+/g, "_").replace(/[^a-zA-Z0-9_.]/g, "");

            if (!ticket_img.includes(originalFileName)) {
                ticket_img.push(originalFileName);
                sessionStorage.setItem("ticket_img", JSON.stringify(ticket_img));

                let reader = new FileReader();
                reader.onload = function (event) {
                    let imageBase64 = event.target.result;
                    
                    previewContainer.innerHTML = "";
                    previewContainer.style.display = "flex";

                    setTimeout(() => {
                        let modal = document.getElementById("sittingModal");
                        let bootstrapModal = bootstrap.Modal.getInstance(modal);
                        if (bootstrapModal) {
                            bootstrapModal.hide();
                        }
                    }, 500);
                    
                    displaySittingImages(imageBase64, originalFileName);
                };
                reader.readAsDataURL(file);
            } else {
                // alert("This image is already added.");
            }
        } else {
            alert("Please select an image first.");
        }
    });

    //sitting preview
    function displaySittingImages(imageSrc, fileName) {
        let previewContainer = document.getElementById("sittingPreview");
        
        let imgDiv = document.createElement("div");
        imgDiv.style.display = "flex";
        imgDiv.style.flexDirection = "column";
        imgDiv.style.alignItems = "center";
        imgDiv.classList.add("image-container"); 

        let imgElement = document.createElement("img");
        imgElement.src = imageSrc;
        imgElement.style.width = "150px";
        imgElement.style.height = "auto";
        imgElement.style.borderRadius = "5px";

        let nameElement = document.createElement("p");
        nameElement.textContent = fileName;
        nameElement.style.fontSize = "12px";
        nameElement.style.marginTop = "5px";

        let removeButton = document.createElement("button");
        removeButton.classList.add("remove-img");
        removeButton.innerHTML = '&times;';
        removeButton.addEventListener('click', function() {
            imgDiv.remove();
        });

        imgDiv.appendChild(imgElement);
        imgDiv.appendChild(nameElement);
        imgDiv.appendChild(removeButton);
        previewContainer.appendChild(imgDiv);
    }

    // Hide previous preview when file input changes
    document.getElementById('sittingImage').addEventListener('change', function(event) {
        let previewContainer = document.getElementById('sittingPreview');
        previewContainer.innerHTML = ''; 
        previewContainer.style.display = "flex"; 

        const files = event.target.files;
        Array.from(files).forEach(file => {
            if (file.type.startsWith('image/')) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const imgContainer = document.createElement('div');
                    imgContainer.classList.add('image-container');

                    const img = document.createElement('img');
                    img.src = e.target.result;

                    const removeButton = document.createElement('button');
                    removeButton.classList.add('remove-img');
                    removeButton.innerHTML = '&times;';

                    removeButton.addEventListener('click', function() {
                        imgContainer.remove();
                    });

                    imgContainer.appendChild(img);
                    imgContainer.appendChild(removeButton);
                    previewContainer.appendChild(imgContainer);
                };

                reader.readAsDataURL(file);
            }
        });
    });

    // FAQ
    $(document).ready(function () {
        
        function saveFaqsToSessionStorage() {
            let faqs = [];
            $("input[name='ing_f_name[]']").each(function (index) {
                let question = $(this).val().trim();
                let answer = $("input[name='ing_f_value[]']").eq(index).val().trim();

                if (question && answer) {
                    faqs.push({ question, answer });
                }
            });

            sessionStorage.setItem("faqs", JSON.stringify(faqs));
        }

        function loadFaqsFromSessionStorage() {
            let storedFaqs = JSON.parse(sessionStorage.getItem("faqs")) || [];
            
            storedFaqs.forEach(faq => {
                let newFaq = `
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Question</label>
                            <input type="text" class="form-control" name="ing_f_name[]" value="${faq.question}" placeholder="Question">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Answer</label>
                            <input type="text" class="form-control" name="ing_f_value[]" value="${faq.answer}" placeholder="Answer">
                        </div>
                        <div class="col-md-12 mb-3">
                            <button class="remove-faq-btn add-faq-btn">Remove FAQ</button>
                        </div>
                    </div>
                `;
                $("#faqContainer").append(newFaq);
            });
        }

        loadFaqsFromSessionStorage();

        $(".add-faq-btn").click(function (event) {
            event.preventDefault();

            let newFaq = `
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Question</label>
                        <input type="text" class="form-control" name="ing_f_name[]" placeholder="Question">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Answer</label>
                        <input type="text" class="form-control" name="ing_f_value[]" placeholder="Answer">
                    </div>
                    <div class="col-md-12 mb-3">
                        <button class="remove-faq-btn add-faq-btn">Remove FAQ</button>
                    </div>
                </div>
            `;

            $("#faqContainer").append(newFaq);
        });

        $(document).on("click", ".remove-faq-btn", function () {
            $(this).closest(".row").remove();
        });

        $("#post-event-btn").click(function (event) {
            event.preventDefault();
            saveFaqsToSessionStorage();
            // alert("FAQs saved to session storage!");
            console.log("Saved FAQs:", sessionStorage.getItem("faqs"));
        });
    });

    // Terms & Conditions
    $(document).ready(function () {
        let shortDescElement = $("#short_desp");

        if (shortDescElement.length) {
            shortDescElement.val(sessionStorage.getItem("short_desp") || "");
        } else {
            console.error("Error: #short_desp not found.");
        }

        $("#post-event-btn").click(function (event) {
            event.preventDefault();

            if (shortDescElement.length) {
                sessionStorage.setItem("short_desp", shortDescElement.val().trim());
                // alert("Short Description saved to session storage!");
            } else {
                console.error("Error: #short_desp not found.");
            }
        });
    });



</script>


<script>

    //ticket validation

    document.querySelector(".add-ticket").addEventListener("click", function (event) {
        let isValid = true;

        let fields = [
            { id: "addonname", errorId: "ticket_name_error", message: "Ticket Name is required" },
            { id: "mrpprice", errorId: "price_error", message: "Ticket Price is required" },
            { id: "size", errorId: "size_error", message: "Ticket Quantity is required" },
            { id: "min_qty", errorId: "min_qty_error", message: "Min Order is required" },
            { id: "max_qty", errorId: "max_qty_error", message: "Max Order is required" },
            { id: "selling_start_date", errorId: "sale_start_error", message: "Sale Start Date is required" },
            { id: "selling_start_time", errorId: "start_time_error", message: "Start Time is required" },
            { id: "selling_end_date", errorId: "sale_end_error", message: "Sale End Date is required" },
            { id: "selling_end_time", errorId: "end_time_error", message: "End Time is required" },
        ];

        fields.forEach(field => {
            let inputElement = document.getElementById(field.id);
            let errorElement = document.getElementById(field.errorId);

            if (inputElement && inputElement.value.trim() === "") {
                errorElement.textContent = field.message;
                isValid = false;
            } else {
                errorElement.textContent = "";
            }
        });

        if (isValid) {
            let ticketData = JSON.parse(sessionStorage.getItem("ticketData")) || [];

            let ticket = {
                addonname: document.getElementById("addonname").value.trim(),
                mrpprice: document.getElementById("mrpprice").value.trim(),
                size: document.getElementById("size").value.trim(),
                min_qty: document.getElementById("min_qty").value.trim(),
                max_qty: document.getElementById("max_qty").value.trim(),
                selling_start_date: document.getElementById("selling_start_date").value.trim(),
                startTime: document.getElementById("selling_start_time").value.trim(),
                selling_end_date: document.getElementById("selling_end_date").value.trim(),
                endTime: document.getElementById("selling_end_time").value.trim(),
                pack_size: document.getElementById("pack_size").value.trim(),
            };

            ticketData.push(ticket);
            sessionStorage.setItem("ticketData", JSON.stringify(ticketData));

            resetFormInputs();
            
            let modal = document.querySelector(".modal"); 
            if (modal) {
                modal.style.display = "none"; 
            }

            $('#modalId').modal('hide');  

            document.body.classList.remove('modal-open');  
            let modalBackdrop = document.querySelector('.modal-backdrop');
            if (modalBackdrop) {
                modalBackdrop.remove();
            }

            displayTickets();
        }
    });
    
    //clear form input data
    
    function resetFormInputs() {
        let form = document.getElementById("ticketForm");
        if (form) {
            form.reset();  
        } else {
            
            document.getElementById("addonname").value = "";
            document.getElementById("mrpprice").value = "";
            document.getElementById("size").value = "";
            document.getElementById("min_qty").value = "";
            document.getElementById("max_qty").value = "";
            document.getElementById("selling_start_date").value = "";
            document.getElementById("selling_start_time").value = "";
            document.getElementById("selling_end_date").value = "";
            document.getElementById("selling_end_time").value = "";
            document.getElementById("pack_size").value = "";
        }
    }

    // Function to display tickets in the table
    function displayTickets() {
        let ticketData = JSON.parse(sessionStorage.getItem("ticketData")) || [];
        let table = document.querySelector(".ticket-table");

        table.innerHTML = `
            <tr>
                <th class="t-name">Ticket Name</th>
                <th class="t-qty">Total Qty</th>
                <th class="t-price">Price</th>
                <th class="t-min-order">Min Order</th>
                <th class="t-max-order">Max Order</th>
                <th class="action">Actions</th>
            </tr>
        `;

        ticketData.forEach((ticket, index) => {
            let row = `
                <tr>
                    <td>${ticket.addonname}</td>
                    <td>${ticket.size}</td>
                    <td>$${ticket.mrpprice}</td>
                    <td>${ticket.min_qty}</td>
                    <td>${ticket.max_qty}</td>
                    <td>
                        <a href="#" onclick="editTicket(${index})">
                            <img src="images/edit-pen.png" alt="edit-icon" class="edit-pen">
                        </a>
                        <a href="#" onclick="deleteTicket(${index})">
                            <img src="images/delete.png" alt="del-icon" class="del">
                        </a>
                    </td>
                </tr>
            `;
            table.innerHTML += row;
        });
    }

    function deleteTicket(index) {
        let confirmation = confirm("Are you sure to remove this ticket?");
        if (confirmation) {
            let ticketData = JSON.parse(sessionStorage.getItem("ticketData")) || [];
            ticketData.splice(index, 1); 
            sessionStorage.setItem("ticketData", JSON.stringify(ticketData)); 
            displayTickets(); 
        }

    }

    function editTicket(index) {
        let ticketData = JSON.parse(sessionStorage.getItem("ticketData")) || [];
        let ticket = ticketData[index];

        if (ticket) {
            // Form mein data load karo
            document.getElementById("addonname").value = ticket.addonname;
            document.getElementById("mrpprice").value = ticket.mrpprice;
            document.getElementById("size").value = ticket.size;
            document.getElementById("min_qty").value = ticket.min_qty;
            document.getElementById("max_qty").value = ticket.max_qty;
            document.getElementById("selling_start_date").value = ticket.selling_start_date;
            document.getElementById("selling_start_time").value = ticket.startTime;
            document.getElementById("selling_end_date").value = ticket.selling_end_date;
            document.getElementById("selling_end_time").value = ticket.endTime;
            document.getElementById("pack_size").value = ticket.pack_size;

            document.getElementById("editIndex").value = index;

            clearErrorMessages();

            $('#addTicketModal').modal('show');
        }
    }

    function clearErrorMessages() {
        let errorFields = [
            "ticket_name_error",
            "price_error",
            "size_error",
            "min_qty_error",
            "max_qty_error",
            "sale_start_error",
            "start_time_error",
            "sale_end_error",
            "end_time_error"
        ];

        errorFields.forEach(id => {
            document.getElementById(id).innerText = "";
        });
    }

    function saveTicket() {
        let index = document.getElementById("editIndex").value;
        let ticketData = JSON.parse(sessionStorage.getItem("ticketData")) || [];

        let ticket = {
            addonname: document.getElementById("addonname").value.trim(),
            mrpprice: document.getElementById("mrpprice").value.trim(),
            size: document.getElementById("size").value.trim(),
            min_qty: document.getElementById("min_qty").value.trim(),
            max_qty: document.getElementById("max_qty").value.trim(),
            selling_start_date: document.getElementById("selling_start_date").value.trim(),
            startTime: document.getElementById("selling_start_time").value.trim(),
            selling_end_date: document.getElementById("selling_end_date").value.trim(),
            endTime: document.getElementById("selling_end_time").value.trim(),
            pack_size: document.getElementById("pack_size").value.trim(),
        };

        if (index !== "") {
            
            ticketData[index] = ticket;
        } else {
            
            ticketData.push(ticket);
        }

        sessionStorage.setItem("ticketData", JSON.stringify(ticketData));
        displayTickets();

        resetFormInputs();

        $('#addTicketModal').modal('hide');
    }

    window.onload = displayTickets;

</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const links = document.querySelectorAll('.category-sidebar li a');
        const sections = document.querySelectorAll('.main-area');

        const nextBtnDateTime = document.getElementById("date-time");
        nextBtnDateTime.addEventListener('click', function(event) {
            event.preventDefault();

            sections.forEach(section => section.style.display = 'none');

            const targetSection = document.querySelector('.date-time');
            if (targetSection) {
                targetSection.style.display = 'block';
            }

            links.forEach(link => link.classList.remove('active'));
            const dateTimeLink = document.querySelector('a[href="date-time"]');
            if (dateTimeLink) {
                dateTimeLink.classList.add('active');
            }
        });

        const nextBtnCategoryLanguages = document.getElementById("category-languages");
        nextBtnCategoryLanguages.addEventListener('click', function(event) {
            event.preventDefault();

            sections.forEach(section => section.style.display = 'none');

            const targetSection = document.querySelector('.category-languages');
            if (targetSection) {
                targetSection.style.display = 'block';
            }

            links.forEach(link => link.classList.remove('active'));
            const categoryLanguagesLink = document.querySelector('a[href="category-languages"]');
            if (categoryLanguagesLink) {
                categoryLanguagesLink.classList.add('active');
            }
        });

        const nextBtnOrganiserDetails = document.getElementById("organiser-details");
        nextBtnOrganiserDetails.addEventListener('click', function(event) {
            event.preventDefault();

            sections.forEach(section => section.style.display = 'none');

            const targetSection = document.querySelector('.organiser-details');
            if (targetSection) {
                targetSection.style.display = 'block';
            }

            links.forEach(link => link.classList.remove('active'));
            const organiserDetailsLink = document.querySelector('a[href="organiser-details"]');
            if (organiserDetailsLink) {
                organiserDetailsLink.classList.add('active');
            }
        });

        const nextBtnEventDescription = document.getElementById("event-description");
        nextBtnEventDescription.addEventListener('click', function(event) {
            event.preventDefault();

            sections.forEach(section => section.style.display = 'none');

            const targetSection = document.querySelector('.event-description');
            if (targetSection) {
                targetSection.style.display = 'block';
            }

            links.forEach(link => link.classList.remove('active'));
            const EventDescriptionLink = document.querySelector('a[href="event-description"]');
            if (EventDescriptionLink) {
                EventDescriptionLink.classList.add('active');
            }
        });

        const nextBtnBannerImages = document.getElementById("banner-images");
        nextBtnBannerImages.addEventListener('click', function(event) {
            event.preventDefault();

            sections.forEach(section => section.style.display = 'none');

            const targetSection = document.querySelector('.banner-images');
            if (targetSection) {
                targetSection.style.display = 'block';
            }

            links.forEach(link => link.classList.remove('active'));
            const BannerImagesLink = document.querySelector('a[href="banner-images"]');
            if (BannerImagesLink) {
                BannerImagesLink.classList.add('active');
            }
        });

        const nextBtnTickets = document.getElementById("tickets");
        nextBtnTickets.addEventListener('click', function(event) {
            event.preventDefault();

            sections.forEach(section => section.style.display = 'none');

            const targetSection = document.querySelector('.tickets');
            if (targetSection) {
                targetSection.style.display = 'block';
            }

            links.forEach(link => link.classList.remove('active'));
            const TicketsLink = document.querySelector('a[href="tickets"]');
            if (TicketsLink) {
                TicketsLink.classList.add('active');
            }
        });

        const nextBtnOtherDetails = document.getElementById("other-details");
        nextBtnOtherDetails.addEventListener('click', function(event) {
            event.preventDefault();

            sections.forEach(section => section.style.display = 'none');

            const targetSection = document.querySelector('.other-details');
            if (targetSection) {
                targetSection.style.display = 'block';
            }

            links.forEach(link => link.classList.remove('active'));
            const OtherDetailsLink = document.querySelector('a[href="other-details"]');
            if (OtherDetailsLink) {
                OtherDetailsLink.classList.add('active');
            }
        });

        // Handle sidebar link clicks
        links.forEach(link => {
            link.addEventListener('click', function(event) {
                event.preventDefault();

                sections.forEach(section => section.style.display = 'none');

                const target = this.getAttribute('href').replace('#', '');
                const targetSection = document.querySelector(`.${target}`);
                if (targetSection) {
                    targetSection.style.display = 'block';
                }

                links.forEach(link => link.classList.remove('active'));
                this.classList.add('active');
            });
        });
    });
</script>

<script>
    document.querySelector('.price').addEventListener('input', function(e) {
        this.value = this.value.replace(/[^0-9]/g, '');
    });
</script>

<script>
    $(document).ready(function() {
        $("#event_from_date").datepicker({
            dateFormat: "yy-mm-dd",
            minDate: 0,
            changeMonth: true,
            changeYear: true,
            onSelect: function(dateText, inst) {
                var date = new Date(dateText);
                var options = {
                    weekday: 'short',
                    year: 'numeric',
                    month: 'short',
                    day: 'numeric'
                };
                var formattedDate = date.toLocaleDateString('en-GB', options);
                $(this).val(formattedDate);
            }
        });
        $("#event_to_date").datepicker({
            dateFormat: "yy-mm-dd",
            minDate: 0,
            changeMonth: true,
            changeYear: true,
            onSelect: function(dateText, inst) {
                var date = new Date(dateText);
                var options = {
                    weekday: 'short',
                    year: 'numeric',
                    month: 'short',
                    day: 'numeric'
                };
                var formattedDate = date.toLocaleDateString('en-GB', options);
                $(this).val(formattedDate);
            }
        });
        $("#selling_start_date").datepicker({
            dateFormat: "yy-mm-dd",
            minDate: 0,
            changeMonth: true,
            changeYear: true,
            onSelect: function(dateText, inst) {
                var date = new Date(dateText);
                var options = {
                    weekday: 'short',
                    year: 'numeric',
                    month: 'short',
                    day: 'numeric'
                };
                var formattedDate = date.toLocaleDateString('en-GB', options);
                $(this).val(formattedDate);
            }
        });
        $("#selling_end_date").datepicker({
            dateFormat: "yy-mm-dd",
            minDate: 0,
            changeMonth: true,
            changeYear: true,
            onSelect: function(dateText, inst) {
                var date = new Date(dateText);
                var options = {
                    weekday: 'short',
                    year: 'numeric',
                    month: 'short',
                    day: 'numeric'
                };
                var formattedDate = date.toLocaleDateString('en-GB', options);
                $(this).val(formattedDate);
            }
        });
    });
</script>

<script>
    // document.addEventListener("DOMContentLoaded", function() {
    //     ClassicEditor
    //         .create(document.querySelector('#description'), {
    //             toolbar: ['undo', 'redo', 'bold', 'italic', 'underline', 'strikethrough', 'link', 'blockQuote',
    //                 'imageUpload', 'mediaEmbed', 'emoji', 'fontSize', 'fontFamily', 'alignment', 'numberedList',
    //                 'bulletedList', 'outdent', 'indent', 'code', 'codeBlock', 'removeFormat', 'subscript', 'superscript'
    //             ]
    //         })
    //         .catch(error => {
    //             console.error(error);
    //         });
    // });

    document.addEventListener("DOMContentLoaded", function() {
        ClassicEditor
            .create(document.querySelector('#description'), {
                toolbar: ['undo', 'redo', 'bold', 'italic', 'underline', 'strikethrough', 'link', 'blockQuote',
                    'imageUpload', 'mediaEmbed', 'emoji', 'fontSize', 'fontFamily', 'alignment', 'numberedList',
                    'bulletedList', 'outdent', 'indent', 'code', 'codeBlock', 'removeFormat', 'subscript', 'superscript'
                ]
            })
            .then(editor => {
                window.editor = editor; 
            })
            .catch(error => {
                console.error(error);
            });
    });

</script>

<script>

    document.getElementById('artistGalleryContainer').addEventListener('change', function(event) {
        const files = Array.from(event.target.files);
        const previewContainer = document.getElementById('artistPreview');

        files.forEach(file => {
            if (!selectedFiles.some(f => f.name === file.name)) {
                selectedFiles.push(file);

                if (file.type.startsWith('image/')) {
                    const reader = new FileReader();

                    reader.onload = function(e) {

                        const imgContainer = document.createElement('div');
                        imgContainer.classList.add('image-container');
                        imgContainer.style.position = 'relative';
                        imgContainer.style.display = 'inline-block';

                        const img = document.createElement('img');
                        img.src = e.target.result;
                        img.style.maxWidth = '150px';
                        img.style.height = '100px';

                        const removeButton = document.createElement('button');
                        removeButton.innerHTML = '&times;';
                        removeButton.classList.add('remove-img');
                        removeButton.style.position = 'absolute';
                        removeButton.style.top = '5px';
                        removeButton.style.right = '5px';
                        removeButton.style.backgroundColor = 'black';
                        removeButton.style.color = 'white';
                        removeButton.style.border = 'none';
                        removeButton.style.borderRadius = '50%';
                        removeButton.style.cursor = 'pointer';

                        removeButton.addEventListener('click', function() {
                            const index = selectedFiles.indexOf(file);
                            if (index > -1) selectedFiles.splice(index, 1);
                            imgContainer.remove();
                        });

                        imgContainer.appendChild(img);
                        imgContainer.appendChild(removeButton);
                        previewContainer.appendChild(imgContainer);
                    };

                    reader.readAsDataURL(file);
                }
            }
        });

        event.target.value = '';
    });
   

    document.getElementById('photo').addEventListener('change', function(event) {
        const files = event.target.files;
        const previewContainer = document.getElementById('thambnailPreview');
        previewContainer.innerHTML = '';

        Array.from(files).forEach(file => {
            if (file.type.startsWith('image/')) {
                const reader = new FileReader();


                reader.onload = function(e) {
                    const imgContainer = document.createElement('div');
                    imgContainer.classList.add('image-container');

                    const img = document.createElement('img');
                    img.src = e.target.result;


                    const removeButton = document.createElement('button');
                    removeButton.classList.add('remove-img');
                    removeButton.innerHTML = '&times;';


                    removeButton.addEventListener('click', function() {
                        imgContainer.remove();
                    });


                    imgContainer.appendChild(img);
                    imgContainer.appendChild(removeButton);


                    previewContainer.appendChild(imgContainer);
                };

                reader.readAsDataURL(file);
            }
        });
    });

    const dropZone = document.getElementById('eventBannerDropZone');
    const fileInput = document.getElementById('photo_wide');
    const previewContainer = document.getElementById('eventBannerPreview');

    dropZone.addEventListener('click', () => {
        fileInput.click();
    });

    fileInput.addEventListener('change', handleFile);

    dropZone.addEventListener('dragover', (e) => {
        e.preventDefault();
        dropZone.classList.add('dragover');
    });

    dropZone.addEventListener('dragleave', () => {
        dropZone.classList.remove('dragover');
    });

    dropZone.addEventListener('drop', (e) => {
        e.preventDefault();
        dropZone.classList.remove('dragover');
        const files = e.dataTransfer.files;
        if (files.length > 0) {
            fileInput.files = files;
            handleFile({
                target: {
                    files
                }
            });
        }
    });

    function handleFile(event) {
        const file = event.target.files[0];
        if (file && file.type.startsWith('image/')) {
            const reader = new FileReader();

            reader.onload = function(e) {

                previewContainer.innerHTML = '';

                const imgContainer = document.createElement('div');
                imgContainer.style.position = 'relative';
                imgContainer.style.display = 'inline-block';

                const img = document.createElement('img');
                img.src = e.target.result;
                img.style.maxWidth = '100%';
                img.style.height = 'auto';

                const removeButton = document.createElement('button');
                removeButton.innerHTML = '&times;';
                removeButton.style.position = 'absolute';
                removeButton.style.top = '10px';
                removeButton.style.right = '0';
                removeButton.style.backgroundColor = 'black';
                removeButton.style.color = 'white';
                removeButton.style.border = 'none';
                removeButton.style.borderRadius = '50%';
                removeButton.style.cursor = 'pointer';

                removeButton.addEventListener('click', function() {
                    imgContainer.remove();
                    fileInput.value = '';
                });

                imgContainer.appendChild(img);
                imgContainer.appendChild(removeButton);
                previewContainer.appendChild(imgContainer);
            };

            reader.readAsDataURL(file);
        } else {
            previewContainer.innerHTML = '<p class="error-message text-danger">Invalid file type. Please upload an image.</p>';
        }
    }

    const selectedFiles = [];

    document.getElementById('eventGalleryContainer').addEventListener('change', function(event) {
        const files = Array.from(event.target.files);
        const previewContainer = document.getElementById('eventPreview');

        files.forEach(file => {
            if (!selectedFiles.some(f => f.name === file.name)) {
                selectedFiles.push(file);

                if (file.type.startsWith('image/')) {
                    const reader = new FileReader();

                    reader.onload = function(e) {

                        const imgContainer = document.createElement('div');
                        imgContainer.classList.add('image-container');
                        imgContainer.style.position = 'relative';
                        imgContainer.style.display = 'inline-block';

                        const img = document.createElement('img');
                        img.src = e.target.result;
                        img.style.maxWidth = '150px';
                        img.style.height = '100px';

                        const removeButton = document.createElement('button');
                        removeButton.innerHTML = '&times;';
                        removeButton.classList.add('remove-img');
                        removeButton.style.position = 'absolute';
                        removeButton.style.top = '5px';
                        removeButton.style.right = '5px';
                        removeButton.style.backgroundColor = 'black';
                        removeButton.style.color = 'white';
                        removeButton.style.border = 'none';
                        removeButton.style.borderRadius = '50%';
                        removeButton.style.cursor = 'pointer';

                        removeButton.addEventListener('click', function() {
                            const index = selectedFiles.indexOf(file);
                            if (index > -1) selectedFiles.splice(index, 1);
                            imgContainer.remove();
                        });

                        imgContainer.appendChild(img);
                        imgContainer.appendChild(removeButton);
                        previewContainer.appendChild(imgContainer);
                    };

                    reader.readAsDataURL(file);
                }
            }
        });

        event.target.value = '';
    });


    // document.getElementById('sittingImage').addEventListener('change', function(event) {
    //     const files = event.target.files;
    //     const previewContainer = document.getElementById('sittingPreview');
    //     previewContainer.innerHTML = '';

    //     Array.from(files).forEach(file => {
    //         if (file.type.startsWith('image/')) {
    //             const reader = new FileReader();


    //             reader.onload = function(e) {
    //                 const imgContainer = document.createElement('div');
    //                 imgContainer.classList.add('image-container');

    //                 const img = document.createElement('img');
    //                 img.src = e.target.result;


    //                 const removeButton = document.createElement('button');
    //                 removeButton.classList.add('remove-img');
    //                 removeButton.innerHTML = '&times;';


    //                 removeButton.addEventListener('click', function() {
    //                     imgContainer.remove();
    //                 });


    //                 imgContainer.appendChild(img);
    //                 imgContainer.appendChild(removeButton);


    //                 previewContainer.appendChild(imgContainer);
    //             };

    //             reader.readAsDataURL(file);
    //         }
    //     });
    // });
</script>

<script>
    document.getElementById('sittingImage').addEventListener('change', function(event) {
        const files = event.target.files;
        const previewContainer = document.getElementById('sittingImagePreview');
        previewContainer.innerHTML = '';

        Array.from(files).forEach(file => {
            if (file.type.startsWith('image/')) {
                const reader = new FileReader();


                reader.onload = function(e) {
                    const imgContainer = document.createElement('div');
                    imgContainer.classList.add('image-container');

                    const img = document.createElement('img');
                    img.src = e.target.result;


                    const removeButton = document.createElement('button');
                    removeButton.classList.add('remove-img');
                    removeButton.innerHTML = '&times;';


                    removeButton.addEventListener('click', function() {
                        imgContainer.remove();
                    });


                    imgContainer.appendChild(img);
                    imgContainer.appendChild(removeButton);


                    previewContainer.appendChild(imgContainer);
                };

                reader.readAsDataURL(file);
            }
        });
    });
</script>

<script>
    // $(document).ready(function() {

    //     $(".add-faq-btn").click(function(event) {
    //         event.preventDefault();

    //         var newFaq = `
    //             <div class="row">
    //                 <div class="col-md-6 mb-3">
    //                     <label for="" class="form-label">Question</label>
    //                     <input type="text" class="form-control" name="question[]" placeholder="Question">
    //                 </div>
    //                 <div class="col-md-6 mb-3">
    //                     <label for="" class="form-label">Answer</label>
    //                     <input type="text" class="form-control" name="answer[]" placeholder="Answer">
    //                 </div>
    //                 <div class="col-md-12 mb-3">
    //                     <button class="remove-faq-btn add-faq-btn">Remove FAQ</button>
    //                 </div>
    //             </div
    //         `;

    //         $("#faqContainer").append(newFaq);
    //     });

    //     $(document).on("click", ".remove-faq-btn", function() {
    //         $(this).closest('div').prev().remove();
    //         $(this).closest('div').prev().remove();
    //         $(this).closest('div').remove();
    //     });
    // });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {

        function changeLanguage(language) {

            alert('Language changed to: ' + language);
        }

        document.getElementById('btnHindi').addEventListener('click', function() {
            changeLanguage('Hindi');
        });

        document.getElementById('btnEnglish').addEventListener('click', function() {
            changeLanguage('English');
        });

        document.getElementById('btnMarathi').addEventListener('click', function() {
            changeLanguage('Marathi');
        });

        document.getElementById('btnBengali').addEventListener('click', function() {
            changeLanguage('Bengali');
        });

        document.getElementById('btnMalayalam').addEventListener('click', function() {
            changeLanguage('Malayalam');
        });
    });
</script>

<script>
    const buttons = document.querySelectorAll(".side-bar .side-bg");

    buttons.forEach(button => {
        button.addEventListener("click", function() {

            buttons.forEach(btn => btn.classList.remove("active"));

            this.classList.add("active");
        });
    });
</script>

<script>
    document.getElementById('taxpayby').addEventListener('change', function() {
        var taxDiv = document.getElementById('taxDiv');
        if (this.value === 'Customer Pays') {
            taxDiv.style.display = 'block';
        } else {
            taxDiv.style.display = 'none';
        }
    });
</script>

<script>
    let selectItemsubcat_id = [];

    document.querySelectorAll('.category-item').forEach(item => {
        item.addEventListener('click', function () {
            let category = this.getAttribute('data-category');

            if (this.classList.contains('selected')) {
                this.classList.remove('selected');
                selectItemsubcat_id = selectedCategories.filter(item => item !== category);
            } else {
                this.classList.add('selected');
                selectedCategories.push(category);
            }

            document.getElementById('selected_categories').value = selectedCategories.join(',');

            console.log("Selected Categories: ", selectedCategories);
        });
    });
</script>

<script>
    let selectedLanguages = [];

    document.querySelectorAll('.lang-select').forEach(button => {
        button.addEventListener('click', function () {
            let lang = this.getAttribute('data-lang');

            if (this.classList.contains('selected-btn')) {
                this.classList.remove('selected-btn');
                selectedLanguages = selectedLanguages.filter(l => l !== lang);
            } else {
                this.classList.add('selected-btn');
                selectedLanguages.push(lang);
            }

            document.getElementById('selected_languages').value = selectedLanguages.join(',');
            console.log("Selected Languages:", selectedLanguages);
        });
    });
</script>

<script>
    // document.addEventListener("DOMContentLoaded", function () {
    //     const timeZoneSelect = document.getElementById("time-zone");

    //     const usaTimeZones = [
    //         { value: "America/New_York", label: "Eastern Time (ET)" },
    //         { value: "America/Chicago", label: "Central Time (CT)" },
    //         { value: "America/Denver", label: "Mountain Time (MT)" },
    //         { value: "America/Phoenix", label: "Mountain Time (Arizona - No DST)" },
    //         { value: "America/Los_Angeles", label: "Pacific Time (PT)" },
    //         { value: "America/Anchorage", label: "Alaska Time (AKT)" },
    //         { value: "Pacific/Honolulu", label: "Hawaii-Aleutian Time (HST - No DST)" }
    //     ];

    //     usaTimeZones.forEach(zone => {
    //         let option = document.createElement("option");
    //         option.value = zone.value;
    //         option.textContent = zone.label;
    //         timeZoneSelect.appendChild(option);
    //     });
    // });

    document.addEventListener("DOMContentLoaded", function () {
        const timeZoneSelect = document.getElementById("time-zone");

        const usaTimeZones = [
            { value: "America/New_York", label: "Eastern Time (ET)", short: "EST" },
            { value: "America/Chicago", label: "Central Time (CT)", short: "CST" },
            { value: "America/Denver", label: "Mountain Time (MT)", short: "MST" },
            { value: "America/Phoenix", label: "Mountain Time (Arizona - No DST)", short: "MST" },
            { value: "America/Los_Angeles", label: "Pacific Time (PT)", short: "PST" },
            { value: "America/Anchorage", label: "Alaska Time (AKT)", short: "AKST" },
            { value: "Pacific/Honolulu", label: "Hawaii-Aleutian Time (HST - No DST)", short: "HST" }
        ];

        usaTimeZones.forEach(zone => {
            let option = document.createElement("option");
            option.value = zone.value;
            option.textContent = zone.label;
            option.setAttribute("data-short", zone.short); 
            timeZoneSelect.appendChild(option);
        });
    });

    function formatEventTiming() {
        let startTime = $("#event_timing").val() || "";
        let endTime = $("#event_end_timing").val() || "";
        let selectedOption = $("#time-zone option:selected");
        let shortTimeZone = selectedOption.data("short") || "";

        // Format time with timezone
        if (startTime && endTime) {
            return `${startTime} - ${endTime} (${shortTimeZone})`;
        }
        return "";
    }

</script>


<script>
    document.addEventListener("DOMContentLoaded", function () {
        const inputContainer = document.getElementById("artist-container");

        inputContainer.addEventListener("click", function (event) {
            if (event.target.classList.contains("add-btn")) {
                event.preventDefault();
                
                const newInputDiv = document.createElement("div");
                newInputDiv.classList.add("d-flex", "mb-2");

                newInputDiv.innerHTML = `
                    <input name="ing_name[]" type="text" class="form-control lastNameField" placeholder="Artist name">
                    <button class="btn btn-danger ms-2 remove-btn">Remove</button>
                `;

                inputContainer.appendChild(newInputDiv);
            }

            if (event.target.classList.contains("remove-btn")) {
                event.preventDefault();
                event.target.parentElement.remove();
            }
        });
    });

    document.addEventListener("DOMContentLoaded", function () {
        const inputContainer = document.getElementById("wikipedia-container");

        inputContainer.addEventListener("click", function (event) {
            if (event.target.classList.contains("add-btn")) {
                event.preventDefault();
                
                // Create new input field with remove button
                const newInputDiv = document.createElement("div");
                newInputDiv.classList.add("d-flex", "mb-2");

                newInputDiv.innerHTML = `
                    <input name="wikipedia[]" type="text" class="form-control lastNameField" placeholder="Artist wikipedia link">
                    <button class="btn btn-danger ms-2 remove-btn">Remove</button>
                `;

                inputContainer.appendChild(newInputDiv);
            }

            // Remove input field when clicking the "Remove" button
            if (event.target.classList.contains("remove-btn")) {
                event.preventDefault();
                event.target.parentElement.remove();
            }
        });
    });

    document.addEventListener("DOMContentLoaded", function () {
        const inputContainer = document.getElementById("youtube-container");

        inputContainer.addEventListener("click", function (event) {
            if (event.target.classList.contains("add-btn")) {
                event.preventDefault();
                
                // Create new input field with remove button
                const newInputDiv = document.createElement("div");
                newInputDiv.classList.add("d-flex", "mb-2");

                newInputDiv.innerHTML = `
                    <input name="youtube-link[]" type="text" class="form-control lastNameField" placeholder="Youtube link">
                    <button class="btn btn-danger ms-2 remove-btn">Remove</button>
                `;

                inputContainer.appendChild(newInputDiv);
            }

            // Remove input field when clicking the "Remove" button
            if (event.target.classList.contains("remove-btn")) {
                event.preventDefault();
                event.target.parentElement.remove();
            }
        });
    });

</script>

<!-- <script>
    document.addEventListener("DOMContentLoaded", function() {
        const links = document.querySelectorAll('.category-sidebar li a');
        const sections = document.querySelectorAll('.main-area');

        document.getElementById("date-time").addEventListener("click", function (event) {
            event.preventDefault(); // Prevent default link behavior

            let isValid = true;

            // Validate Event Title
            let eventTitle = document.getElementById("product_name");
            let eventTitleError = document.getElementById("product_name_error");
            if (eventTitle.value.trim() === "") {
                eventTitleError.textContent = "Event title is required.";
                isValid = false;
            } else {
                eventTitleError.textContent = "";
            }

            // Validate Venue Name
            let eventVenue = document.getElementById("event_venue");
            let eventVenueError = document.getElementById("event_venue_error");
            if (eventVenue.value.trim() === "") {
                eventVenueError.textContent = "Venue name is required.";
                isValid = false;
            } else {
                eventVenueError.textContent = "";
            }

            // Validate Address
            let fullAddress = document.getElementById("full_address");
            let fullAddressError = document.getElementById("full_address_error");
            if (fullAddress.value.trim() === "") {
                fullAddressError.textContent = "Address is required.";
                isValid = false;
            } else {
                fullAddressError.textContent = "";
            }

            // Validate City
            let city = document.getElementById("city");
            let cityError = document.getElementById("city_error");
            if (city.value.trim() === "") {
                cityError.textContent = "City is required.";
                isValid = false;
            } else {
                cityError.textContent = "";
            }

            // Validate State
            let state = document.getElementById("state");
            let stateError = document.getElementById("state_error");
            if (state.value.trim() === "") {
                stateError.textContent = "State is required.";
                isValid = false;
            } else {
                stateError.textContent = "";
            }

            // Validate ZIP/Postal Code
            let zipCode = document.getElementById("zip_code");
            let zipCodeError = document.getElementById("zip_code_error");
            if (zipCode.value.trim() === "") {
                zipCodeError.textContent = "ZIP/Postal code is required.";
                isValid = false;
            } else {
                zipCodeError.textContent = "";
            }

            // Validate Country
            let country = document.getElementById("country");
            let countryError = document.getElementById("country_error");
            if (country.value.trim() === "") {
                countryError.textContent = "Country is required.";
                isValid = false;
            } else {
                countryError.textContent = "";
            }

            // If form is valid, move to next step
            if (isValid) {
                document.querySelector(".events-detail").style.display = "none";
                document.querySelector(".date-time").style.display = "block";
            }
        });

   




        const nextBtnCategoryLanguages = document.getElementById("category-languages");
        nextBtnCategoryLanguages.addEventListener('click', function(event) {
            event.preventDefault();

            sections.forEach(section => section.style.display = 'none');

            const targetSection = document.querySelector('.category-languages');
            if (targetSection) {
                targetSection.style.display = 'block';
            }

            links.forEach(link => link.classList.remove('active'));
            const categoryLanguagesLink = document.querySelector('a[href="category-languages"]');
            if (categoryLanguagesLink) {
                categoryLanguagesLink.classList.add('active');
            }
        });

        const nextBtnOrganiserDetails = document.getElementById("organiser-details");
        nextBtnOrganiserDetails.addEventListener('click', function(event) {
            event.preventDefault();

            sections.forEach(section => section.style.display = 'none');

            const targetSection = document.querySelector('.organiser-details');
            if (targetSection) {
                targetSection.style.display = 'block';
            }

            links.forEach(link => link.classList.remove('active'));
            const organiserDetailsLink = document.querySelector('a[href="organiser-details"]');
            if (organiserDetailsLink) {
                organiserDetailsLink.classList.add('active');
            }
        });

        const nextBtnEventDescription = document.getElementById("event-description");
        nextBtnEventDescription.addEventListener('click', function(event) {
            event.preventDefault();

            sections.forEach(section => section.style.display = 'none');

            const targetSection = document.querySelector('.event-description');
            if (targetSection) {
                targetSection.style.display = 'block';
            }

            links.forEach(link => link.classList.remove('active'));
            const EventDescriptionLink = document.querySelector('a[href="event-description"]');
            if (EventDescriptionLink) {
                EventDescriptionLink.classList.add('active');
            }
        });

        const nextBtnBannerImages = document.getElementById("banner-images");
        nextBtnBannerImages.addEventListener('click', function(event) {
            event.preventDefault();

            sections.forEach(section => section.style.display = 'none');

            const targetSection = document.querySelector('.banner-images');
            if (targetSection) {
                targetSection.style.display = 'block';
            }

            links.forEach(link => link.classList.remove('active'));
            const BannerImagesLink = document.querySelector('a[href="banner-images"]');
            if (BannerImagesLink) {
                BannerImagesLink.classList.add('active');
            }
        });

        const nextBtnTickets = document.getElementById("tickets");
        nextBtnTickets.addEventListener('click', function(event) {
            event.preventDefault();

            sections.forEach(section => section.style.display = 'none');

            const targetSection = document.querySelector('.tickets');
            if (targetSection) {
                targetSection.style.display = 'block';
            }

            links.forEach(link => link.classList.remove('active'));
            const TicketsLink = document.querySelector('a[href="tickets"]');
            if (TicketsLink) {
                TicketsLink.classList.add('active');
            }
        });

        const nextBtnOtherDetails = document.getElementById("other-details");
        nextBtnOtherDetails.addEventListener('click', function(event) {
            event.preventDefault();

            sections.forEach(section => section.style.display = 'none');

            const targetSection = document.querySelector('.other-details');
            if (targetSection) {
                targetSection.style.display = 'block';
            }

            links.forEach(link => link.classList.remove('active'));
            const OtherDetailsLink = document.querySelector('a[href="other-details"]');
            if (OtherDetailsLink) {
                OtherDetailsLink.classList.add('active');
            }
        });

        // Handle sidebar link clicks
        links.forEach(link => {
            link.addEventListener('click', function(event) {
                event.preventDefault();

                sections.forEach(section => section.style.display = 'none');

                const target = this.getAttribute('href').replace('#', '');
                const targetSection = document.querySelector(`.${target}`);
                if (targetSection) {
                    targetSection.style.display = 'block';
                }

                links.forEach(link => link.classList.remove('active'));
                this.classList.add('active');
            });
        });
    });
</script> -->




</html>