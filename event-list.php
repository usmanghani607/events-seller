<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'header.php' ?>

    <style>

    </style>
</head>

<body style="background: #F8F8F8;">

    <div class="dashboard eventlist-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2">
                    <div class="side-bar">
                        <button onclick="window.location.href='index';"><img src="images/post-icon.png" alt=""><span>Post an Event</span></button>
                        <button onclick="window.location.href='event-list';"><img src="images/list-i.png" alt=""><span>List of Events</span></button>
                        <button onclick="window.location.href='promo-code';"><img src="images/promo.png" alt=""><span>Promo code</span></button>
                        <button onclick="window.location.href='attendance';"><img src="images/group.png" alt=""><span>Attendee</span></button>
                        <button onclick="window.location.href='order';"><img src="images/order.png" alt=""><span>Orders</span></button>
                        <button onclick="window.location.href='report';"><img src="images/report.png" alt=""><span>Report</span></button>
                    </div>
                </div>
                <div class="col-md-10">
                    <div class="event">
                        <div class="row">
                            <div class="heading">
                                <h2>Hi Parsheet</h2>
                            </div>
                            <ul class="nav nav-tabs tappes" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active all" id="tab-1" data-bs-toggle="tab" data-bs-target="#tabs-1" type="button" role="tab" aria-controls="tabs-1" aria-selected="true">
                                        All
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link upcoming" id="tab-2" data-bs-toggle="tab" data-bs-target="#tabs-2" type="button" role="tab" aria-controls="tabs-2" aria-selected="false">
                                        Upcoming
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link completed" id="tab-3" data-bs-toggle="tab" data-bs-target="#tabs-3" type="button" role="tab" aria-controls="tabs-3" aria-selected="false">
                                        Completed
                                    </button>
                                </li>
                            </ul>

                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="tabs-1" role="tabpanel" aria-labelledby="tab-1">
                                    <div class="ticket-area mt-4">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <img class="t-img" src="images/card1.png" alt="">
                                            </div>
                                            <div class="col-md-9">
                                                <h2>Holi Mela</h2>
                                                <div class="col-md-12">
                                                    <div class="date-time">
                                                        <img class="cal-icon" src="images/calendar-i.png" alt=""><span class="time">Saturday, March 30 · 4 - 8pm CDT</span> <img class="icon" src="images/loc.png" alt=""><span class="place">Coco Beach ATX, 15505 North Interstate Highway 35 building c, Pflugerville, TX 78660</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <p class="ticket-sold"><span class="status">Tickets Sold:</span>
                                                        <span class="num">10</span>
                                                    </p>
                                                </div>
                                                <div class="row">
                                                <div class="col-md-6">
                                                    <div class="event-status">
                                                        <h2>Event Status</h2>
                                                    </div>
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                                                        <label class="form-check-label" for="flexSwitchCheckChecked">Published</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="ticket-button">
                                                        <button class="edit-rep">Edit</button>
                                                        <button class="view-rep">View Report</button>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ticket-area mt-4">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <img class="t-img" src="images/card2.png" alt="">
                                            </div>
                                            <div class="col-md-9">
                                                <h2>Holi Mela</h2>
                                                <div class="col-md-12">
                                                    <div class="date-time">
                                                        <img class="cal-icon" src="images/calendar-i.png" alt=""><span class="time">Saturday, March 30 · 4 - 8pm CDT</span> <img class="icon" src="images/loc.png" alt=""><span class="place">Coco Beach ATX, 15505 North Interstate Highway 35 building c, Pflugerville, TX 78660</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <p class="ticket-sold"><span class="status">Tickets Sold:</span>
                                                        <span class="num">10</span>
                                                    </p>
                                                </div>
                                                <div class="row">
                                                <div class="col-md-6">
                                                    <div class="event-status">
                                                        <h2>Event Status</h2>
                                                    </div>
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked">
                                                        <label class="form-check-label" for="flexSwitchCheckChecked">Published</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="ticket-button">
                                                        <button class="edit-rep">Edit</button>
                                                        <button class="view-rep">View Report</button>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tabs-2" role="tabpanel" aria-labelledby="tab-2">
                                    <div class="ticket-area mt-4">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <img class="t-img" src="images/card1.png" alt="">
                                            </div>
                                            <div class="col-md-9">
                                                <h2>Holi Mela</h2>
                                                <div class="col-md-12">
                                                    <div class="date-time">
                                                        <img class="cal-icon" src="images/calendar-i.png" alt=""><span class="time">Saturday, March 30 · 4 - 8pm CDT</span> <img class="icon" src="images/loc.png" alt=""><span class="place">Coco Beach ATX, 15505 North Interstate Highway 35 building c, Pflugerville, TX 78660</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <p class="ticket-sold"><span class="status">Tickets Sold:</span>
                                                        <span class="num">10</span>
                                                    </p>
                                                </div>
                                                <div class="row">
                                                <div class="col-md-6">
                                                    <div class="event-status">
                                                        <h2>Event Status</h2>
                                                    </div>
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked">
                                                        <label class="form-check-label" for="flexSwitchCheckChecked">Published</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="ticket-button">
                                                        <button class="edit-rep">Edit</button>
                                                        <button class="view-rep">View Report</button>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tabs-3" role="tabpanel" aria-labelledby="tab-3">
                                    <div class="ticket-area mt-4">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <img class="t-img" src="images/card2.png" alt="">
                                            </div>
                                            <div class="col-md-9">
                                                <h2>Holi Mela</h2>
                                                <div class="col-md-12">
                                                    <div class="date-time">
                                                        <img class="cal-icon" src="images/calendar-i.png" alt=""><span class="time">Saturday, March 30 · 4 - 8pm CDT</span> <img class="icon" src="images/loc.png" alt=""><span class="place">Coco Beach ATX, 15505 North Interstate Highway 35 building c, Pflugerville, TX 78660</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <p class="ticket-sold"><span class="status">Tickets Sold:</span>
                                                        <span class="num">10</span>
                                                    </p>
                                                </div>
                                                <div class="row">
                                                <div class="col-md-6">
                                                    <div class="event-status">
                                                        <h2>Event Status</h2>
                                                    </div>
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                                                        <label class="form-check-label" for="flexSwitchCheckChecked">Published</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="ticket-button">
                                                        <button class="edit-rep">Edit</button>
                                                        <button class="view-rep">View Report</button>
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
        </div>
    </div>
</body>


<script>
    document.addEventListener("DOMContentLoaded", function() {
        const tabButtons = document.querySelectorAll('#myTab .nav-link');

        tabButtons.forEach(button => {
            button.addEventListener('click', function() {

                tabButtons.forEach(btn => btn.classList.remove('active'));

                this.classList.add('active');
            });
        });
    });
</script>


</html>