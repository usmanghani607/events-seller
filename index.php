<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'header.php' ?>

    <style>
    
    </style>
</head>

<body style="background: #F8F8F8;">

    <div class="dashboard booking">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2">
                    <div class="side-bar">
                        <button onclick="window.location.href='index';"><img src="images/post.png" alt=""><span>Post an Event</span></button>
                        <button onclick="window.location.href='event-list';"><img src="images/list.png" alt=""><span>List of Events</span></button>
                        <button onclick="window.location.href='promo-code';"><img src="images/promo.png" alt=""><span>Promo code</span></button>
                        <button onclick="window.location.href='attendance';"><img src="images/group.png" alt=""><span>Attendee</span></button>
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
                                                <input type="text" class="form-control" name="" placeholder="Enter event title">
                                                <div id="" class="error-message text-danger"></div>
                                            </div>
                                            <div class="venu-heading col-md-12 mb-3">
                                                <h3>Venue</h3>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="" class="form-label">Enter the venue’s name*</label>
                                                <input type="text" class="form-control" name="" placeholder="Enter venue’s name">
                                                <div id="" class="error-message text-danger"></div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="" class="form-label">Address*</label>
                                                <input type="text" class="form-control" name="" placeholder="Enter location">
                                                <div id="" class="error-message text-danger"></div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="" class="form-label">City *</label>
                                                <input type="text" class="form-control" name="" placeholder="Enter city name">
                                                <div id="" class="error-message text-danger"></div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="" class="form-label">State *</label>
                                                <input type="text" class="form-control" name="" placeholder="Enter location">
                                                <div id="" class="error-message text-danger"></div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="" class="form-label">ZIP/POSTAL *</label>
                                                <input type="text" class="form-control" name="" placeholder="Enter ZIP/POSTAL *">
                                                <div id="" class="error-message text-danger"></div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="" class="form-label">Country *</label>
                                                <input type="text" class="form-control" name="" placeholder="United States">
                                                <div id="" class="error-message text-danger"></div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="button-area">
                                                    <a href="date-time" class="next-btn" id="date-time">Next</a>
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
                                                <label for="" class="form-label">Time Zone*</label>
                                                    <div class="input-group">
                                                        <select class="form-control custom-select-arrow" id="startTime">
                                                            <option>Select time zone</option>
                                                        </select>
                                                    </div>
                                                <div id="firstNameError" class="error-message text-danger"></div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="" class="form-label">Start Date*</label>
                                                    <div class="input-group">
                                                        <input class="form-control custom-select-arrow" id="startDate">
                                                    </div>
                                                <div id="firstNameError" class="error-message text-danger"></div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="" class="form-label">Start Time*</label>
                                                    <div class="input-group">
                                                        <select class="form-control custom-select-arrow" id="startTime">
                                                            <option value="0">00:00</option>
                                                            <option value="1">01:00</option>
                                                            <option value="2">02:00</option>
                                                            <option value="3">03:00</option>
                                                            <option value="4">04:00</option>
                                                            <option value="5">05:00</option>
                                                            <option value="6">06:00</option>
                                                            <option value="7">07:00</option>
                                                            <option value="8">08:00</option>
                                                            <option value="9">09:00</option>
                                                            <option value="10">10:00</option>
                                                            <option value="11">11:00</option>
                                                            <option value="12">12:00</option>
                                                            <option value="13">13:00</option>
                                                            <option value="14">14:00</option>
                                                            <option value="15">15:00</option>
                                                            <option value="16">16:00</option>
                                                            <option value="17">17:00</option>
                                                            <option value="18">18:00</option>
                                                            <option value="19">19:00</option>
                                                            <option value="20">20:00</option>
                                                            <option value="21">21:00</option>
                                                            <option value="22">22:00</option>
                                                            <option value="23">23:00</option>
                                                        </select>
                                                    </div>
                                                <div id="lastNameError" class="error-message text-danger"></div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="" class="form-label">End Date *</label>
                                                    <div class="input-group">
                                                        <input class="form-control custom-select-arrow" id="endDate">
                                                    </div>
                                                <div id="firstNameError" class="error-message text-danger"></div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="" class="form-label">End time *</label>
                                                    <div class="input-group">
                                                        <select class="form-control custom-select-arrow" id="startTime">
                                                            <option value="0">00:00</option>
                                                            <option value="1">01:00</option>
                                                            <option value="2">02:00</option>
                                                            <option value="3">03:00</option>
                                                            <option value="4">04:00</option>
                                                            <option value="5">05:00</option>
                                                            <option value="6">06:00</option>
                                                            <option value="7">07:00</option>
                                                            <option value="8">08:00</option>
                                                            <option value="9">09:00</option>
                                                            <option value="10">10:00</option>
                                                            <option value="11">11:00</option>
                                                            <option value="12">12:00</option>
                                                            <option value="13">13:00</option>
                                                            <option value="14">14:00</option>
                                                            <option value="15">15:00</option>
                                                            <option value="16">16:00</option>
                                                            <option value="17">17:00</option>
                                                            <option value="18">18:00</option>
                                                            <option value="19">19:00</option>
                                                            <option value="20">20:00</option>
                                                            <option value="21">21:00</option>
                                                            <option value="22">22:00</option>
                                                            <option value="23">23:00</option>
                                                        </select>
                                                    </div>
                                                <div id="lastNameError" class="error-message text-danger"></div>
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
                                                    <div class="text-center">
                                                        <img src="images/music.png" alt="Music" class="img-fluid">
                                                        <p>Music</p>
                                                    </div>
                                                    <div class="text-center">
                                                        <img src="images/art.png" alt="Art" class="img-fluid">
                                                        <p>Performing & Visual Arts</p>
                                                    </div>
                                                    <div class="text-center">
                                                        <img src="images/bollywood.png" alt="Bollywood" class="img-fluid">
                                                        <p>Bollywood</p>
                                                    </div>
                                                    <div class="text-center">
                                                        <img src="images/nightlife.png" alt="Nightlife" class="img-fluid">
                                                        <p>Nightlife</p>
                                                    </div>
                                                    <div class="text-center">
                                                        <img src="images/food&drink.png" alt="Food & Drink" class="img-fluid">
                                                        <p>Food & Drink</p>
                                                    </div>
                                                    <div class="text-center">
                                                        <img src="images/business.png" alt="Business" class="img-fluid">
                                                        <p>Business</p>
                                                    </div>
                                                    <div class="text-center">
                                                        <img src="images/devotional.png" alt="Devotional" class="img-fluid">
                                                        <p>Devotional</p>
                                                    </div>
                                                    <div class="text-center">
                                                        <img src="images/music.png" alt="Music" class="img-fluid">
                                                        <p>Music</p>
                                                    </div>
                                                    <div class="text-center">
                                                        <img src="images/bollywood.png" alt="Bollywood" class="img-fluid">
                                                        <p>Bollywood</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="lang-tab">
                                                <div class="lang-heading">
                                                    <h5>Language</h5>
                                                </div>
                                                <div class="lang-btn">
                                                    <button id="btnHindi">Hindi</button>
                                                    <button id="btnEnglish">English</button>
                                                    <button>Marathi</button>
                                                    <button>Bengali</button>
                                                    <button>Malayalam</button>
                                                    <button>Gujarati</button>
                                                    <button>Punjabi</button>
                                                    <button>Urdu</button>
                                                    <button>Telgu</button>
                                                    <button>Kannada</button>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="button-area">
                                                    <a href="organiser-details" class="next-btn" id="organiser-details">Next</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="main-area organiser-details" style="display: none;">
                                        <div class="heading-main">
                                            <h3>Organiser Details</h3>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label for="" class="form-label">Organization name *</label>
                                                <input type="text" class="form-control firstNameField" name="firstName" placeholder="Organization name">
                                                <div id="firstNameError" class="error-message text-danger"></div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="" class="form-label">Hosted By *</label>
                                                <input type="text" class="form-control lastNameField" name="lastName" placeholder="Hosted By">
                                                <div id="lastNameError" class="error-message text-danger"></div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="" class="form-label">Contact Number</label>
                                                <input type="text" class="form-control firstNameField" name="firstName" placeholder="Enter contact number">
                                                <div id="firstNameError" class="error-message text-danger"></div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="" class="form-label">Email Address</label>
                                                <input type="text" class="form-control lastNameField" name="lastName" placeholder="Enter email address">
                                                <div id="lastNameError" class="error-message text-danger"></div>
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <label for="" class="form-label">Address</label>
                                                <input type="text" class="form-control firstNameField" name="firstName" placeholder="Enter address">
                                                <div id="firstNameError" class="error-message text-danger"></div>
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <label for="" class="form-label">About Organiser</label>
                                                <input type="text" class="form-control lastNameField" name="lastName" placeholder="Description…">
                                                <div id="lastNameError" class="error-message text-danger"></div>
                                            </div>
                                            <div class="heading-main">
                                                <h3>Tax Details</h3>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="" class="form-label">Enter your Tax ID#</label>
                                                <input type="text" class="form-control lastNameField" name="lastName" placeholder="Tax ID">
                                                <div id="lastNameError" class="error-message text-danger"></div>
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
                                                <textarea id="eventDesc" class="form-control" name=""></textarea>
                                                <div id="firstNameError" class="error-message text-danger"></div>
                                            </div>
                                            <div class="heading-main">
                                                <h3>Artist details</h3>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="" class="form-label">Tags your artist</label>
                                                <div class="d-flex">
                                                    <input type="text" class="form-control lastNameField" name="lastName" placeholder="Artist name">
                                                    <button class="add-btn">Add</button>
                                                </div>
                                                <div id="lastNameError" class="error-message text-danger"></div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="" class="form-label">Wikipedia Link</label>
                                                <div class="d-flex">
                                                    <input type="text" class="form-control lastNameField" name="lastName" placeholder="Artist wikipedia link">
                                                    <button class="add-btn">Add</button>
                                                </div>
                                                <div id="lastNameError" class="error-message text-danger"></div>
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <label for="" class="form-label">Artist Image Gallery</label>
                                                <input type="file" id="artistGallery" class="form-control" multiple accept="image/*">
                                                <div id="lastNameError" class="error-message text-danger"></div>
                                                <div id="imagePreview" style="margin-top: 20px; display: flex; gap: 10px; flex-wrap: wrap;"></div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="" class="form-label">Youtube Link</label>
                                                <div class="d-flex">
                                                    <input type="text" class="form-control lastNameField" name="lastName" placeholder="Youtube link">
                                                    <button class="add-btn">Add</button>
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
                                                <input type="text" class="form-control firstNameField" name="firstName" placeholder="Organization name">
                                                <span class="image-note">Note: The ideal dimension is 1080x470 pixels and the maximum image size is 4 MB</span>
                                                <div id="firstNameError" class="error-message text-danger"></div>
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <label for="" class="form-label">Thumbnail Image</label>
                                                <input type="text" class="form-control lastNameField" name="lastName">
                                                <div id="lastNameError" class="error-message text-danger"></div>
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <label for="" class="form-label">Event Gallery</label>
                                                <input type="text" class="form-control lastNameField" name="lastName">
                                                <div id="lastNameError" class="error-message text-danger"></div>
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
                                                                        <input type="text" class="form-control" id="ticketName" placeholder="Enter ticket name">
                                                                    </div>
                                                                    <div class="col-md-6 mb-3">
                                                                        <label for="price" class="form-label">Price*</label>
                                                                        <input class="form-control price" id="price" placeholder="Ticket Price" pattern="\d*" inputmode="numeric">
                                                                    </div>
                                                                    <div class="col-md-6 mb-3">
                                                                        <label for="quantity" class="form-label">Ticket Quantity*</label>
                                                                        <input type="number" class="form-control" id="ticketQuantity" placeholder="Ticket Quantity" min="0">
                                                                    </div>
                                                                    <div class="col-md-6 mb-3">
                                                                        <label for="minOrder" class="form-label">Min order *</label>
                                                                        <input type="number" class="form-control" id="minOrder" placeholder="Min order" min="0">
                                                                    </div>
                                                                    <div class="col-md-6 mb-3">
                                                                        <label for="maxOrder" class="form-label">Max order *</label>
                                                                        <input type="number" class="form-control" id="maxOrder" placeholder="Max order" min="0">
                                                                    </div>
                                                                    <div class="col-md-6 mb-3">
                                                                        <label for="saleStart" class="form-label">Sale Start From*</label>
                                                                        <input type="text" class="form-control custom-calendar" id="saleStart">
                                                                    </div>
                                                                    <div class="col-md-6 mb-3">
                                                                        <label for="startTime" class="form-label">Start Time*</label>
                                                                        <div class="input-group">
                                                                            <select class="form-control custom-select-arrow" id="startTime">
                                                                                <option value="0">00:00</option>
                                                                                <option value="1">01:00</option>
                                                                                <option value="2">02:00</option>
                                                                                <option value="3">03:00</option>
                                                                                <option value="4">04:00</option>
                                                                                <option value="5">05:00</option>
                                                                                <option value="6">06:00</option>
                                                                                <option value="7">07:00</option>
                                                                                <option value="8">08:00</option>
                                                                                <option value="9">09:00</option>
                                                                                <option value="10">10:00</option>
                                                                                <option value="11">11:00</option>
                                                                                <option value="12">12:00</option>
                                                                                <option value="13">13:00</option>
                                                                                <option value="14">14:00</option>
                                                                                <option value="15">15:00</option>
                                                                                <option value="16">16:00</option>
                                                                                <option value="17">17:00</option>
                                                                                <option value="18">18:00</option>
                                                                                <option value="19">19:00</option>
                                                                                <option value="20">20:00</option>
                                                                                <option value="21">21:00</option>
                                                                                <option value="22">22:00</option>
                                                                                <option value="23">23:00</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-6 mb-3">
                                                                        <label for="saleEnd" class="form-label">Sale End on*</label>
                                                                        <input type="text" class="form-control custom-calendar" id="saleEnd">
                                                                    </div>
                                                                    <div class="col-md-6 mb-3">
                                                                        <label for="timeEnd" class="form-label">End Time*</label>
                                                                        <div class="input-group">
                                                                            <select class="form-control custom-select-arrow" id="timeEnd">
                                                                                <option value="0">00:00</option>
                                                                                <option value="1">01:00</option>
                                                                                <option value="2">02:00</option>
                                                                                <option value="3">03:00</option>
                                                                                <option value="4">04:00</option>
                                                                                <option value="5">05:00</option>
                                                                                <option value="6">06:00</option>
                                                                                <option value="7">07:00</option>
                                                                                <option value="8">08:00</option>
                                                                                <option value="9">09:00</option>
                                                                                <option value="10">10:00</option>
                                                                                <option value="11">11:00</option>
                                                                                <option value="12">12:00</option>
                                                                                <option value="13">13:00</option>
                                                                                <option value="14">14:00</option>
                                                                                <option value="15">15:00</option>
                                                                                <option value="16">16:00</option>
                                                                                <option value="17">17:00</option>
                                                                                <option value="18">18:00</option>
                                                                                <option value="19">19:00</option>
                                                                                <option value="20">20:00</option>
                                                                                <option value="21">21:00</option>
                                                                                <option value="22">22:00</option>
                                                                                <option value="23">23:00</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12 mb-3">
                                                                        <label for="ticketDesc" class="form-label">Ticket description</label>
                                                                        <textarea type="text" class="form-control" id="ticketDesc"></textarea>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                            <div class="ticket-modal-footer">
                                                                <button type="button" class="btn add-ticket">Add Ticket</button>
                                                            </div>
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
                                                                        <!-- <input type="text" class="form-control" id="ticketName" placeholder="Enter ticket name"> -->
                                                                        <input type="file" id="sittingImage" class="form-control" multiple accept="image/*">
                                                                        <div id="sittingImagePreview" style="margin-top: 20px; display: flex; gap: 10px; flex-wrap: wrap;"></div>
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
                                                <textarea type="text" class="form-control termField" name="firstName" placeholder="Type here…"></textarea>
                                            </div>
                                            <div class="heading-main">
                                                <h3>FAQ</h3>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="" class="form-label">Question</label>
                                                <input type="text" class="form-control" name="" placeholder="Question">
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="" class="form-label">Answer</label>
                                                <input type="text" class="form-control" name="" placeholder="Answer">
                                            </div>
                                            <div class="col-md-12 mb-3">
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
                                                    <input type="text" class="form-control lastNameField" name="lastName" placeholder="https://facebook.com/name">
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-3 social">
                                                <label for="" class="form-label">Twitter</label>
                                                <div class="d-flex">
                                                    <img src="images/twitter.png" alt="">
                                                    <input type="text" class="form-control lastNameField" name="lastName" placeholder="https://twitter.com/name">
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-3 social">
                                                <label for="" class="form-label">Instagram</label>
                                                <div class="d-flex">
                                                    <img src="images/insta.png" alt="">
                                                    <input type="text" class="form-control lastNameField" name="lastName" placeholder="https://instagram.com/name">
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-3 social">
                                                <label for="" class="form-label">Youtube</label>
                                                <div class="d-flex">
                                                    <img src="images/youtube.png" alt="">
                                                    <input type="text" class="form-control lastNameField" name="lastName" placeholder="https://youtube.com/name">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="button-area">
                                                    <a href="" class="post-event-btn" id="next">Post My Event</a>
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

<!-- <script>
    document.addEventListener("DOMContentLoaded", function() {

        const links = document.querySelectorAll('.category-sidebar li a');
        const sections = document.querySelectorAll('.main-area');

        links.forEach(link => {
            link.addEventListener('click', function(event) {

                event.preventDefault();

                links.forEach(link => link.classList.remove('active'));

                this.classList.add('active');

                sections.forEach(section => section.style.display = 'none');

                const target = this.getAttribute('href').replace('#', '');

                const targetSection = document.querySelector(`.${target}`);
                if (targetSection) {
                    targetSection.style.display = 'block';
                }
            });
        });
    });
</script> -->

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
        $("#startDate").datepicker({
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
        $("#endDate").datepicker({
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
        $("#saleStart").datepicker({
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
        $("#saleEnd").datepicker({
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
    document.addEventListener("DOMContentLoaded", function() {
        ClassicEditor
            .create(document.querySelector('#eventDesc'), {
                toolbar: ['undo', 'redo', 'bold', 'italic', 'underline', 'strikethrough', 'link', 'blockQuote',
                    'imageUpload', 'mediaEmbed', 'emoji', 'fontSize', 'fontFamily', 'alignment', 'numberedList',
                    'bulletedList', 'outdent', 'indent', 'code', 'codeBlock', 'removeFormat', 'subscript', 'superscript']
            })
            .catch(error => {
                console.error(error);
            });
    });
</script>

<script>
    document.getElementById('artistGallery').addEventListener('change', function(event) {
        const files = event.target.files;
        const previewContainer = document.getElementById('imagePreview');
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
  $(document).ready(function() {
        
        $(".add-faq-btn").click(function(event) {
            event.preventDefault(); 

            var newFaq = `
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="" class="form-label">Question</label>
                        <input type="text" class="form-control" name="question[]" placeholder="Question">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="" class="form-label">Answer</label>
                        <input type="text" class="form-control" name="answer[]" placeholder="Answer">
                    </div>
                    <div class="col-md-12 mb-3">
                        <button class="remove-faq-btn add-faq-btn">Remove FAQ</button>
                    </div>
                </div
            `;

            $("#faqContainer").append(newFaq);
        });

        $(document).on("click", ".remove-faq-btn", function() {
            $(this).closest('div').prev().remove(); 
            $(this).closest('div').prev().remove(); 
            $(this).closest('div').remove(); 
        });
    });
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

</html>