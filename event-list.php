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
                                    <div id="upcomingEventContainer"></div>
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

                            <div id="loader" style="display: none; text-align: center; margin-top: 20px;">
                                <img src="images/loader.gif" alt="Loading..." width="50">
                            </div>

                            <div id="toastContainer" class="toast-container position-fixed top-0 end-0 p-3" style="z-index: 1050;">
                                <div id="statusToast" class="toast align-items-center text-white bg-success border-0" role="alert" aria-live="assertive" aria-atomic="true">
                                    <div class="d-flex">
                                        <div class="toast-body">
                                            Status updated successfully!
                                        </div>
                                        <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                                    </div>
                                </div>
                            </div>

                            <!-- <div class="list-pagination" style="display: none;">
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
                            </div> -->

                            <div class="list-pagination">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination justify-content-center" id="paginationContainer">
                                        <li class="page-item" id="prevPage">
                                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                                        </li>
                                        <!-- Dynamic Pagination Numbers Will Be Added Here -->
                                        <li class="page-item" id="nextPage">
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
        // var apiUrl = "https://devrestapi.goquicklly.com/event-seller/all-events-list";
        // var changeStatusUrl = "https://devrestapi.goquicklly.com/event-seller/change-status";
        var apiUrl = `${BASE_URL}/all-events-list`;
        var changeStatusUrl = `${BASE_URL}/change-status`;
        var start = 0;
        var limit = 10;
        var totalResults = 0;
        var currentTab = "all";

        function formatDate(dateString, timeString) {
            const dateParts = dateString.split(" - ")[0];
            const date = new Date(dateParts);
            const options = {
                weekday: 'long',
                month: 'long',
                day: 'numeric'
            };
            return timeString ? `${date.toLocaleDateString('en-US', options)} <span class="dot">.</span> ${timeString}` : date.toLocaleDateString('en-US', options);
        }

        function loadEvents() {
            $("#loader").show();
            $("#eventContainer, #pastEventContainer, #upcomingEventContainer").hide();
            $(".list-pagination").hide();

            var uid = sessionStorage.getItem("uid") || localStorage.getItem("uid") || getCookie("uid");

            var requestData = {
                "search_cat_id": "",
                "search_pname": "",
                "search_status": "",
                "start": start.toString(),
                "uid": uid
            };

            $.ajax({
                url: apiUrl,
                type: "POST",
                contentType: "application/json",
                data: JSON.stringify(requestData),
                dataType: "json",
                success: function(response) {
                    $("#loader").hide();
                    $("#eventContainer, #pastEventContainer, #upcomingEventContainer").show();

                    if (response.success && response.lstAllEvent.length > 0) {
                        var eventHtml = '';
                        var today = new Date().setHours(0, 0, 0, 0);
                        var eventsToDisplay = response.lstAllEvent;

                        if (currentTab === "completed") {
                            eventsToDisplay = eventsToDisplay.filter(event => {
                                var eventDate = new Date(event.date.split(" - ")[0]).setHours(0, 0, 0, 0);
                                return eventDate < today;
                            });
                        } else if (currentTab === "upcoming") {
                            eventsToDisplay = eventsToDisplay.filter(event => {
                                var eventDate = new Date(event.date.split(" - ")[0]).setHours(0, 0, 0, 0);
                                return eventDate >= today;
                            });
                        }

                        totalResults = eventsToDisplay.length;
                        eventsToDisplay = eventsToDisplay.slice(start, start + limit);

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
                                                    <input class="form-check-input event-status-checkbox" type="checkbox" id="eventStatus${event.id}" data-event-id="${event.id}" ${event.status == 1 ? 'checked' : ''}>
                                                    <label class="form-check-label" for="eventStatus${event.id}">${event.status == 1 ? 'Published' : 'Unpublished'}</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="ticket-button">
                                                    <button class="edit-rep">Edit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>`;
                        });

                        if (currentTab === "completed") {
                            $("#pastEventContainer").html(eventHtml);
                        } else if (currentTab === "upcoming") {
                            $("#upcomingEventContainer").html(eventHtml);
                        } else {
                            $("#eventContainer").html(eventHtml);
                        }

                        // $(".list-pagination").show();
                        updatePagination();
                    } else {
                        var noEventMessage = "<p>No events found.</p>";
                        if (currentTab === "completed") {
                            $("#pastEventContainer").html(noEventMessage);
                        } else if (currentTab === "upcoming") {
                            $("#upcomingEventContainer").html(noEventMessage);
                        } else {
                            $("#eventContainer").html(noEventMessage);
                        }
                        $(".list-pagination").hide();
                    }
                },
                error: function(xhr, status, error) {
                    $("#loader").hide();
                    $("#eventContainer").html("<p>Error fetching events. Please try again.</p>");
                    $(".list-pagination").hide();
                    console.error("Error:", error);
                }
            });
        }

        // function updatePagination() {
        //     var totalPages = Math.ceil(totalResults / limit);
        //     var currentPage = Math.floor(start / limit) + 1;

        //     $(".pagination").html('');

        //     if (totalResults > 0 && totalPages > 1) {  
        //         for (var i = 1; i <= totalPages; i++) {
        //             $(".pagination").append(`<li class="page-item ${i === currentPage ? 'active' : ''}"><a class="page-link" href="#" data-page="${i}">${i}</a></li>`);
        //         }

        //         $("#prevPage").toggle(currentPage > 1);
        //         $("#nextPage").toggle(currentPage < totalPages);

        //         $(".list-pagination").show();  
        //     } else {
        //         $(".list-pagination").hide();  
        //     }
        // }


        // $(document).on("click", ".page-link", function(e) {
        //     e.preventDefault();
        //     start = ($(this).data("page") - 1) * limit;
        //     loadEvents();
        // });

        // $("#prevPage").click(function() {
        //     if (start > 0) {
        //         start -= limit;
        //         loadEvents();
        //     }
        // });

        // $("#nextPage").click(function() {
        //     if (start + limit < totalResults) {
        //         start += limit;
        //         loadEvents();
        //     }
        // });

        function updatePagination() {
            var totalPages = Math.ceil(totalResults / limit);
            var currentPage = Math.floor(start / limit) + 1;
            var paginationContainer = $("#paginationContainer");

            paginationContainer.find(".page-item").not("#prevPage, #nextPage").remove();

            for (var i = 1; i <= totalPages; i++) {
                var activeClass = i === currentPage ? "active" : "";
                var pageItem = `<li class="page-item ${activeClass}">
                                    <a class="page-link page-number" href="#" data-page="${i}">${i}</a>
                                </li>`;
                $("#nextPage").before(pageItem);
            }

            $("#prevPage").toggleClass("disabled", currentPage === 1);
            $("#nextPage").toggleClass("disabled", currentPage >= totalPages);
            $(".list-pagination").toggle(totalPages > 1);
        }

        $(document).on("click", ".page-number", function(e) {
            e.preventDefault();
            start = ($(this).data("page") - 1) * limit;
            loadEvents();
        });

        $(document).on("click", "#prevPage:not(.disabled)", function(e) {
            e.preventDefault();
            start = Math.max(0, start - limit);
            loadEvents();
        });

        $(document).on("click", "#nextPage:not(.disabled)", function(e) {
            e.preventDefault();
            if (start + limit < totalResults) {
                start += limit;
                loadEvents();
            }
        });

        $(document).on("change", ".event-status-checkbox", function() {
            var eventId = $(this).data("event-id");
            var newStatus = $(this).prop("checked") ? 1 : 0;

            var requestData = {
                "eid": eventId,
                "status": newStatus.toString()
            };

            $.ajax({
                url: changeStatusUrl,
                type: "POST",
                contentType: "application/json",
                data: JSON.stringify(requestData),
                dataType: "json",
                success: function(response) {
                    if (response.success) {

                        var label = $(`label[for='eventStatus${eventId}']`);
                        label.text(newStatus === 1 ? "Published" : "Unpublished");

                        var toastMessage = newStatus === 1 ?
                            "Event is published successfully!" :
                            "Event is unpublished successfully!";

                        // console.log("Status updated successfully!");
                        // showToast("Status updated successfully!", "success");
                        console.log(toastMessage);
                        showToast(toastMessage, "success");
                    } else {
                        console.error("Failed to update status");
                        showToast("Failed to update status", "danger");
                    }
                },
                error: function(xhr, status, error) {
                    showToast("Error updating status", "danger");
                    console.error("Error updating status:", error);
                }
            });
        });

        $(".nav-link").click(function() {
            if ($(this).hasClass("completed")) {
                currentTab = "completed";
                $("#eventContainer, #upcomingEventContainer").hide();
                $("#pastEventContainer").show();
            } else if ($(this).hasClass("upcoming")) {
                currentTab = "upcoming";
                $("#eventContainer, #pastEventContainer").hide();
                $("#upcomingEventContainer").show();
            } else {
                currentTab = "all";
                $("#pastEventContainer, #upcomingEventContainer").hide();
                $("#eventContainer").show();
            }
            start = 0;
            loadEvents();
        });

        function showToast(message, type) {
            var toastEl = $("#statusToast");
            toastEl.find(".toast-body").text(message);

            toastEl.removeClass("bg-success bg-danger");

            if (type === "success") {
                toastEl.css("background-color", "#F05336");
            } else if (type === "danger") {
                toastEl.css("background-color", "#dc3545");
            }

            var toast = new bootstrap.Toast(toastEl[0], {
                delay: 2000
            });
            toast.show();
        }

        loadEvents();
    });
</script> -->


<script>
    $(document).ready(function() {
        var apiUrl = `${BASE_URL}/all-events-list`;
        var changeStatusUrl = `${BASE_URL}/change-status`;
        var start = 0;
        var limit = 10;
        var totalResults = 0;
        var currentTab = "all";

        function formatDate(dateString, timeString) {
            const dateParts = dateString.split(" - ")[0];
            const date = new Date(dateParts);
            const options = {
                weekday: 'long',
                month: 'long',
                day: 'numeric'
            };
            return timeString ? `${date.toLocaleDateString('en-US', options)} <span class="dot">.</span> ${timeString}` : date.toLocaleDateString('en-US', options);
        }

        function loadEvents() {
            $("#loader").show();
            $("#eventContainer, #pastEventContainer, #upcomingEventContainer").hide();
            $(".list-pagination").hide();

            var uid = sessionStorage.getItem("uid") || localStorage.getItem("uid") || getCookie("uid");

            var requestData = {
                "search_cat_id": "",
                "search_pname": "",
                "search_status": "",
                "start": start.toString(),
                "uid": uid
            };

            $.ajax({
                url: apiUrl,
                type: "POST",
                contentType: "application/json",
                data: JSON.stringify(requestData),
                dataType: "json",
                success: function(response) {
                    $("#loader").hide();
                    $("#eventContainer, #pastEventContainer, #upcomingEventContainer").show();

                    if (response.success && response.lstAllEvent.length > 0) {
                        var eventHtml = '';
                        var today = new Date().setHours(0, 0, 0, 0);
                        var eventsToDisplay = response.lstAllEvent;

                        if (currentTab === "completed") {
                            eventsToDisplay = eventsToDisplay.filter(event => {
                                var eventDate = new Date(event.date.split(" - ")[0]).setHours(0, 0, 0, 0);
                                return eventDate < today;
                            });
                        } else if (currentTab === "upcoming") {
                            eventsToDisplay = eventsToDisplay.filter(event => {
                                var eventDate = new Date(event.date.split(" - ")[0]).setHours(0, 0, 0, 0);
                                return eventDate >= today;
                            });
                        }

                        totalResults = eventsToDisplay.length;
                        eventsToDisplay = eventsToDisplay.slice(start, start + limit);

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
                                                <input class="form-check-input event-status-checkbox" type="checkbox" id="eventStatus${event.id}" data-event-id="${event.id}" ${event.status == 1 ? 'checked' : ''}>
                                                <label class="form-check-label" for="eventStatus${event.id}">${event.status == 1 ? 'Published' : 'Unpublished'}</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="ticket-button">
                                                <button class="edit-rep">Edit</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>`;
                        });

                        if (currentTab === "completed") {
                            $("#pastEventContainer").html(eventHtml);
                        } else if (currentTab === "upcoming") {
                            $("#upcomingEventContainer").html(eventHtml);
                        } else {
                            $("#eventContainer").html(eventHtml);
                        }

                        updatePagination();
                    } else {
                        $(".list-pagination").hide();
                    }
                }
            });
        }

        function updatePagination() {
            var totalPages = Math.ceil(totalResults / limit);
            var currentPage = Math.floor(start / limit) + 1;
            var paginationContainer = $("#paginationContainer");

            paginationContainer.html(`
            <li id="prevPage" class="page-item ${currentPage === 1 ? "disabled" : ""}">
                <a class="page-link" href="#">Previous</a>
            </li>
        `);

            for (var i = 1; i <= Math.min(5, totalPages); i++) {
                paginationContainer.append(`
                <li class="page-item ${i === currentPage ? "active" : ""}">
                    <a class="page-link page-number" href="#" data-page="${i}">${i}</a>
                </li>
            `);
            }

            if (totalPages > 6) {
                paginationContainer.append(`<li class="page-item disabled"><a class="page-link">...</a></li>`);
                paginationContainer.append(`
                <li class="page-item ${totalPages === currentPage ? "active" : ""}">
                    <a class="page-link page-number" href="#" data-page="${totalPages}">${totalPages}</a>
                </li>
            `);
            }

            paginationContainer.append(`
            <li id="nextPage" class="page-item ${currentPage >= totalPages ? "disabled" : ""}">
                <a class="page-link" href="#">Next</a>
            </li>
        `);

            $(".list-pagination").toggle(totalPages > 1);
        }

        $(document).on("click", ".page-number", function(e) {
            e.preventDefault();
            start = ($(this).data("page") - 1) * limit;
            loadEvents();
        });

        $(document).on("click", "#prevPage:not(.disabled)", function(e) {
            e.preventDefault();
            start = Math.max(0, start - limit);
            loadEvents();
        });

        $(document).on("click", "#nextPage:not(.disabled)", function(e) {
            e.preventDefault();
            if (start + limit < totalResults) {
                start += limit;
                loadEvents();
            }
        });
		
		$(document).on("change", ".event-status-checkbox", function() {
            var eventId = $(this).data("event-id");
            var newStatus = $(this).prop("checked") ? 1 : 0;

            var requestData = {
                "eid": eventId,
                "status": newStatus.toString()
            };

            $.ajax({
                url: changeStatusUrl,
                type: "POST",
                contentType: "application/json",
                data: JSON.stringify(requestData),
                dataType: "json",
                success: function(response) {
                    if (response.success) {

                        var label = $(`label[for='eventStatus${eventId}']`);
                        label.text(newStatus === 1 ? "Published" : "Unpublished");

                        var toastMessage = newStatus === 1 ?
                            "Event is published successfully!" :
                            "Event is unpublished successfully!";

                        // console.log("Status updated successfully!");
                        // showToast("Status updated successfully!", "success");
                        console.log(toastMessage);
                        showToast(toastMessage, "success");
                    } else {
                        console.error("Failed to update status");
                        showToast("Failed to update status", "danger");
                    }
                },
                error: function(xhr, status, error) {
                    showToast("Error updating status", "danger");
                    console.error("Error updating status:", error);
                }
            });
        });

        $(".nav-link").click(function() {
            if ($(this).hasClass("completed")) {
                currentTab = "completed";
                $("#eventContainer, #upcomingEventContainer").hide();
                $("#pastEventContainer").show();
            } else if ($(this).hasClass("upcoming")) {
                currentTab = "upcoming";
                $("#eventContainer, #pastEventContainer").hide();
                $("#upcomingEventContainer").show();
            } else {
                currentTab = "all";
                $("#pastEventContainer, #upcomingEventContainer").hide();
                $("#eventContainer").show();
            }
            start = 0;
            loadEvents();
        });

        function showToast(message, type) {
            var toastEl = $("#statusToast");
            toastEl.find(".toast-body").text(message);

            toastEl.removeClass("bg-success bg-danger");

            if (type === "success") {
                toastEl.css("background-color", "#F05336");
            } else if (type === "danger") {
                toastEl.css("background-color", "#dc3545");
            }

            var toast = new bootstrap.Toast(toastEl[0], {
                delay: 2000
            });
            toast.show();
        }

        loadEvents();
    });
</script>

</html>