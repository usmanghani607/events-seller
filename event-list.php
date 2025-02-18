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
                                    <!-- <div class="ticket-area mt-4">
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
                                    </div> -->

                                    <div id="eventContainer"></div>

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
                                    <!-- <div class="ticket-area mt-4">
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
                                    </div> -->
                                    <div id="pastEventContainer"></div>
                                </div>
                            </div>

                            <!-- <div class="list-pagination" style="display: none;">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination">
                                        <li class="page-item disabled">
                                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                        <a class="page-link" href="#">Next</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div> -->

                            <div class="list-pagination" style="display: none;">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination">
                                        <li class="page-item" id="prevPage" style="display: none;">
                                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                                        </li>
                                        <li class="page-item" id="nextPage" style="display: none;">
                                            <a class="page-link" href="#">Next</a>
                                        </li>
                                    </ul>
                                </nav>
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


<!-- <script>
    $(document).ready(function() {
        var apiUrl = "https://devrestapi.goquicklly.com/event-seller/all-events-list";

        var requestData = {
            "search_cat_id": "",
            "search_pname": "",
            "search_status": "",
            "start": "50",
            "uid": "403"
        };

        function formatDate(dateString) {
            const date = new Date(dateString);
            const options = {
                weekday: 'long',
                month: 'long',
                day: 'numeric'
            };
            return date.toLocaleDateString('en-US', options);
        }

        $.ajax({
            url: apiUrl,
            type: "POST",
            contentType: "application/json",
            data: JSON.stringify(requestData),
            dataType: "json",
            success: function(response) {
                if (response.success && response.lstAllEvent.length > 0) {
                    var eventHtml = '';

                    response.lstAllEvent.forEach(function(event) {
                        var formattedDate = formatDate(event.posted_date);

                        eventHtml += `
                        <div class="ticket-area mt-4">
                            <div class="row">
                                <div class="col-md-3">
                                    <img class="t-img" src="${event.image}" alt="ticket-img">
                                </div>
                                <div class="col-md-9">
                                    <h2>${event.name}</h2>
                                    <div class="col-md-12">
                                        <div class="date-time">
                                            <img class="cal-icon" src="images/calendar-i.png" alt="">
                                            <span class="time">${formattedDate}</span>
                                            <img class="icon" src="images/loc.png" alt="">
                                            <span class="place">${event.temp_storeaddress}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <p class="ticket-sold"><span class="status">Tickets Sold:</span>
                                            <span class="num">${event.order_count}</span>
                                        </p>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="event-status">
                                                <h2>Event Status</h2>
                                            </div>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" id="eventStatus${event.id}" ${event.status == 1 ? 'checked' : ''}>
                                                <label class="form-check-label" for="eventStatus${event.id}">${event.status == 1 ? 'Published' : 'Unpublished'}</label>
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
                        </div>`;
                    });

                    $("#eventContainer").html(eventHtml);
                    $(".list-pagination").show();

                } else {
                    $("#eventContainer").html("<p>No events found.</p>");
                    $(".list-pagination").hide();
                }
            },
            error: function(xhr, status, error) {
                $("#eventContainer").html("<p>Error fetching events. Please try again.</p>");
                $(".list-pagination").hide();
                console.error("Error:", error);
            }
        });
    });
</script> -->

<!-- <script>
    $(document).ready(function() {
        var apiUrl = "https://devrestapi.goquicklly.com/event-seller/all-events-list";
        var start = 0; 
        var limit = 50; 

        // function formatDate(dateString) {
        //     const dateParts = dateString.split(" - ")[0];
        //     const date = new Date(dateParts);
        //     const options = {
        //         weekday: 'long',
        //         month: 'long',
        //         day: 'numeric'
        //     };
        //     return date.toLocaleDateString('en-US', options);
        // }

        function formatDate(dateString, timeString) {
            const dateParts = dateString.split(" - ")[0];
            const date = new Date(dateParts);
            const options = { weekday: 'long', month: 'long', day: 'numeric' };
            const formattedDate = date.toLocaleDateString('en-US', options);
            return `${formattedDate} at ${timeString}`;
        }

        function loadEvents() {
            var requestData = {
                "search_cat_id": "",
                "search_pname": "",
                "search_status": "",
                "start": start.toString(),
                "uid": "403"
            };

            $.ajax({
                url: apiUrl,
                type: "POST",
                contentType: "application/json",
                data: JSON.stringify(requestData),
                dataType: "json",
                success: function(response) {
                    if (response.success && response.lstAllEvent.length > 0) {
                        var eventHtml = '';
                        response.lstAllEvent.forEach(function(event) {
                            // var formattedDate = formatDate(event.date);
                            var formattedDate = formatDate(event.date, event.time);
                            eventHtml += `
                                <div class="ticket-area mt-4">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <img class="t-img" src="${event.image}" alt="ticket-img">
                                        </div>
                                        <div class="col-md-9">
                                            <h2>${event.name}</h2>
                                            <div class="col-md-12">
                                                <div class="date-time">
                                                    <img class="cal-icon" src="images/calendar-i.png" alt="">
                                                    <span class="time">${formattedDate}</span>
                                                    <img class="icon" src="images/loc.png" alt="">
                                                    <span class="place">${event.address}</span>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <p class="ticket-sold"><span class="status">Tickets Sold:</span>
                                                    <span class="num">${event.ticketSoldOut}</span>
                                                </p>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="event-status">
                                                        <h2>Event Status</h2>
                                                    </div>
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" type="checkbox" id="eventStatus${event.id}" ${event.status == 1 ? 'checked' : ''}>
                                                        <label class="form-check-label" for="eventStatus${event.id}">${event.status == 1 ? 'Published' : 'Unpublished'}</label>
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
                                </div>`;
                        });

                        $("#eventContainer").html(eventHtml);
                        $(".list-pagination").show();
                    } else {
                        $("#eventContainer").html("<p>No events found.</p>");
                        $(".list-pagination").hide();
                    }
                },
                error: function(xhr, status, error) {
                    $("#eventContainer").html("<p>Error fetching events. Please try again.</p>");
                    $(".list-pagination").hide();
                    console.error("Error:", error);
                }
            });
        }

        loadEvents();

        $("#loadMore").click(function() {
            start += limit; 
            loadEvents(); 
        });
    });
</script> -->

<script>
    $(document).ready(function() {
        var apiUrl = "https://devrestapi.goquicklly.com/event-seller/all-events-list";
        var start = 0;
        var limit = 10;
        var totalResults = 0;

        // function formatDate(dateString) {
        //     const date = new Date(dateString);
        //     const options = {
        //         weekday: 'long',
        //         month: 'long',
        //         day: 'numeric'
        //     };
        //     return date.toLocaleDateString('en-US', options);
        // }

        function formatDate(dateString, timeString) {
            const dateParts = dateString.split(" - ")[0];
            const date = new Date(dateParts);
            const options = { weekday: 'long', month: 'long', day: 'numeric' };
            const formattedDate = date.toLocaleDateString('en-US', options);
            return `${formattedDate} <span class="dot">.</span> ${timeString}`;
        }

        function loadEvents() {
            var requestData = {
                "search_cat_id": "",
                "search_pname": "",
                "search_status": "",
                "start": start.toString(),
                "uid": "403"
            };

            $.ajax({
                url: apiUrl,
                type: "POST",
                contentType: "application/json",
                data: JSON.stringify(requestData),
                dataType: "json",
                success: function(response) {
                    if (response.success && response.lstAllEvent.length > 0) {
                        totalResults = response.lstAllEvent.length;
                        var eventHtml = '';
                        var eventsToDisplay = response.lstAllEvent.slice(start, start + limit);
                        eventsToDisplay.forEach(function(event) {
                            var formattedDate = formatDate(event.date, event.time);
                            eventHtml += `
                                <div class="ticket-area mt-4">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <img class="t-img" src="${event.image}" alt="ticket-img">
                                        </div>
                                        <div class="col-md-9">
                                            <h2>${event.name}</h2>
                                            <div class="col-md-12">
                                                <div class="date-time">
                                                    <img class="cal-icon" src="images/calendar-i.png" alt="">
                                                    <span class="time">${formattedDate}</span>
                                                    <img class="icon" src="images/loc.png" alt="">
                                                    <span class="place">${event.address}</span>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <p class="ticket-sold"><span class="status">Tickets Sold:</span>
                                                    <span class="num">${event.ticketSoldOut}</span>
                                                </p>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="event-status">
                                                        <h2>Event Status</h2>
                                                    </div>
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" type="checkbox" id="eventStatus${event.id}" ${event.status == 1 ? 'checked' : ''}>
                                                        <label class="form-check-label" for="eventStatus${event.id}">${event.status == 1 ? 'Published' : 'Unpublished'}</label>
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
                                </div>`;
                        });

                        $("#eventContainer").html(eventHtml);
                        $(".list-pagination").show();
                        updatePagination();
                    } else {
                        $("#eventContainer").html("<p>No events found.</p>");
                        $(".list-pagination").hide();
                    }
                },
                error: function(xhr, status, error) {
                    $("#eventContainer").html("<p>Error fetching events. Please try again.</p>");
                    $(".list-pagination").hide();
                    console.error("Error:", error);
                }
            });
        }

        function updatePagination() {
            var totalPages = Math.ceil(totalResults / limit);
            var currentPage = Math.floor(start / limit) + 1;

            $(".pagination").html('');
            for (var i = 1; i <= totalPages; i++) {
                $(".pagination").append(`<li class="page-item ${i === currentPage ? 'active' : ''}">
                    <a class="page-link" href="#" data-page="${i}">${i}</a>
                </li>`);
            }

            // Handle Previous and Next buttons visibility
            if (currentPage > 1) {
                $("#prevPage").show();
            } else {
                $("#prevPage").hide();
            }
            if (currentPage < totalPages) {
                $("#nextPage").show();
            } else {
                $("#nextPage").hide();
            }
        }

        loadEvents();

        $(document).on("click", ".page-link", function(e) {
            e.preventDefault();
            var page = $(this).data("page");
            start = (page - 1) * limit;
            loadEvents();
        });

        $("#prevPage").click(function() {
            if (start > 0) {
                start -= limit;
                loadEvents();
            }
        });

        $("#nextPage").click(function() {
            if (start + limit < totalResults) {
                start += limit;
                loadEvents();
            }
        });
    });
</script>




</html>