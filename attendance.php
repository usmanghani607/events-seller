<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'header.php' ?>

    <script>
        if (!sessionStorage.getItem('userName')) {
            window.location.href = "index"; 
        }
    </script>
</head>

<body style="background: #F8F8F8;">

    <div class="dashboard attendance-area">
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
                    <div class="attendance">
                        <div class="row">
                            <h2>Attendee</h2>
                            <h4>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod.</h4>
                            <div class="att-btn">
                                <button class="add-attendance" data-bs-toggle="modal" data-bs-target="#addAttenModal">Add New Attendee</button>
                            </div>

                            <!-- Attendance Modal -->
                            <div class="modal fade" id="addAttenModal" tabindex="-1" aria-labelledby="addAttenModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <form>
                                            <div class="attendance-modal-area">
                                                <div class="att-m">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="att-sidebar">
                                                                <div class="att-heading">
                                                                    <h2>Add Attendees</h2>
                                                                </div>
                                                                <ul>
                                                                    <li><a href="attendance-detail" class="active">Order Details</a></li>
                                                                    <li><a href="reg-information">Registration Information</a></li>
                                                                    <li><a href="order-summary">Order Summary</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <div class="main-area attendance-detail">
                                                                <div class="heading-main">
                                                                    <h3>Order Details</h3>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12 col-md-6 mb-3">
                                                                        <label for="" class="form-label">Select Event</label>
                                                                        <div class="input-group">
                                                                            <select class="form-control custom-select-arrow" id="startTime">
                                                                                <option value="0">Holi Festival 2024</option>
                                                                                <option value="1">Test</option>
                                                                                <option value="2">Testing</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6 mb-3">
                                                                        <label for="" class="form-label">Order Type*</label>
                                                                        <div class="input-group">
                                                                            <select class="form-control custom-select-arrow" id="startTime">
                                                                                <option value="0">Complimentary</option>
                                                                                <option value="1">Test</option>
                                                                                <option value="2">Testing</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-12 mb-5">
                                                                        <table class="ticket-table">
                                                                            <tr>
                                                                                <th class="t-name">Ticket Type</th>
                                                                                <th class="t-sold">Sold</th>
                                                                                <th class="t-price">Price</th>
                                                                                <th class="t-qty">Quantity</th>
                                                                                <th class="t-face">Face Value</th>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="tick-name">General Admission</td>
                                                                                <td>0/10</td>
                                                                                <td>$9.99</td>
                                                                                <td>
                                                                                    <div class="input-group">
                                                                                        <select class="form-control custom-select-arrow" id="startTime">
                                                                                        <option value="0">0</option>
                                                                                        <option value="1">1</option>
                                                                                        <option value="2">2</option>
                                                                                        <option value="3">3</option>
                                                                                        <option value="4">4</option>
                                                                                        <option value="5">5</option>
                                                                                        <option value="6">6</option>
                                                                                        <option value="7">7</option>
                                                                                        <option value="8">8</option>
                                                                                        <option value="9">9</option>
                                                                                        <option value="10">10</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </td>
                                                                                <!-- <td>
                                                                                    <input type="text">
                                                                                </td> -->
                                                                                <td>
                                                                                    <div class="input-wrapper">
                                                                                        <span class="currency-symbol">$</span>
                                                                                        <input type="text">
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="tick-name">General Admission 2</td>
                                                                                <td>0/5</td>
                                                                                <td>$10.0</td>
                                                                                <td>
                                                                                <div class="input-group">
                                                                                        <select class="form-control custom-select-arrow" id="startTime">
                                                                                        <option value="0">0</option>
                                                                                        <option value="1">1</option>
                                                                                        <option value="2">2</option>
                                                                                        <option value="3">3</option>
                                                                                        <option value="4">4</option>
                                                                                        <option value="5">5</option>
                                                                                        <option value="6">6</option>
                                                                                        <option value="7">7</option>
                                                                                        <option value="8">8</option>
                                                                                        <option value="9">9</option>
                                                                                        <option value="10">10</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="input-wrapper">
                                                                                        <span class="currency-symbol">$</span>
                                                                                        <input type="text">
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                    </div>
                                                                    <div class="total-value">
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <div class="input-wrapper">
                                                                                    <span>Total Value</span>
                                                                                    <span class="currency-symbol">$</span>
                                                                                    <input type="text" placeholder="0.00" id="numberInput" oninput="validateNumberInput(event)">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                    <div class="col-md-12">
                                                                        <div class="button-area text-center">
                                                                            <a href="reg-information" class="next-btn" id="reg-information">Continue</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="main-area reg-information" style="display: none;">
                                                                <div class="heading-main">
                                                                    <h3>Registration Information</h3>
                                                                </div>
                                                                <div class="h-main">
                                                                    <h3>Contact Information</h3>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-6 mb-3">
                                                                        <label for="" class="form-label">First Name *</label>
                                                                        <input type="text" class="form-control" name="" placeholder="First Name">
                                                                        <div id="firstNameError" class="error-message text-danger"></div>
                                                                    </div>
                                                                    <div class="col-md-6 mb-3">
                                                                        <label for="" class="form-label">Last Name*</label>
                                                                        <input type="text" class="form-control" name="" placeholder="Last name">
                                                                        <div id="firstNameError" class="error-message text-danger"></div>
                                                                    </div>
                                                                    <div class="col-md-6 mb-3">
                                                                        <label for="" class="form-label">Contact Number*</label>
                                                                        <input type="text" class="form-control" name="" placeholder="Enter contact number">
                                                                        <div id="firstNameError" class="error-message text-danger"></div>
                                                                    </div>
                                                                    <div class="col-md-6 mb-3">
                                                                        <label for="" class="form-label">Email Address</label>
                                                                        <input type="text" class="form-control" name="" placeholder="Enter email address">
                                                                        <div id="firstNameError" class="error-message text-danger"></div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="check-box">
                                                                            <input type="checkbox">
                                                                            <span>Send a confirmation email to the attendees</span>
                                                                        </div>
                                                                        <div class="mail-send">
                                                                            <p>As a reminder, the creator is responsible for compliance with privacy and marketing 
                                                                                regulation when using this feature to upload email addresses for marketing communications</p>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                    <div class="col-md-12">
                                                                        <div class="button-area text-center">
                                                                            <a href="order-summary" class="next-btn" id="order-summary">Continue</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="main-area order-summary" style="display: none;">
                                                                <div class="heading-main">
                                                                    <h3>Order Summary</h3>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12 col-md-6">
                                                                        <div class="row mb-4 ticket-area">
                                                                            <div class="col-md-3 photo">
                                                                                <img class="t-img" src="images/img-1.png" alt="Event Image">
                                                                            </div>
                                                                            <div class="col-md-5">
                                                                                <h2 class="order-name">Holi Mela</h2>
                                                                                <h4 class="order-time-heading">Date & Time</h4>
                                                                                <div class="order-date-time">
                                                                                    <span><i class="bi bi-calendar"></i></span>
                                                                                    <span class="order-time">Sunday, April 1 · 8:00 PM - 1:00 AM CDT</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-4 t-right">
                                                                                    <p><span class="order-type">Order Type:</span></p>
                                                                                <div class="col-md-12">
                                                                                    <div class="row">
                                                                                        <div class="col-md-8">
                                                                                            <p class="order-p">1x General Admission</p>
                                                                                            <p class="order-p">1x General Admission</p>
                                                                                        </div>
                                                                                        <div class="col-md-4">
                                                                                            <p class="order-m">$0.00</p>
                                                                                            <p class="order-m">$0.00</p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-12 total-area">
                                                                            <div class="">
                                                                                <div class="col-md-8"></div>
                                                                                <div class="col-md-4 total-aa">
                                                                                    <div class="row">
                                                                                        <div class="col-md-8">
                                                                                            <p>Total</p>
                                                                                        </div>
                                                                                        <div class="col-md-4">
                                                                                            <p>$0.00</p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        </div>
                                                                        
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="button-area text-center">
                                                                            <a href="" class="next-btn" id="">Place Order</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            </form>
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
        const links = document.querySelectorAll('.att-sidebar li a');
        const sections = document.querySelectorAll('.main-area');

        const nextBtnRegInfo = document.getElementById("reg-information");
        nextBtnRegInfo.addEventListener('click', function(event) {
            event.preventDefault(); 

            sections.forEach(section => section.style.display = 'none');

            const targetSection = document.querySelector('.reg-information');
            if (targetSection) {
                targetSection.style.display = 'block';
            }

            links.forEach(link => link.classList.remove('active'));
            const RegInfoLink = document.querySelector('a[href="reg-information"]');
            if (RegInfoLink) {
                RegInfoLink.classList.add('active');
            }
        });

        const nextBtnOrder = document.getElementById("order-summary");
        nextBtnOrder.addEventListener('click', function(event) {
            event.preventDefault(); 

            sections.forEach(section => section.style.display = 'none');

            const targetSection = document.querySelector('.order-summary');
            if (targetSection) {
                targetSection.style.display = 'block';
            }

            links.forEach(link => link.classList.remove('active'));
            const orderLink = document.querySelector('a[href="order-summary"]');
            if (orderLink) {
                orderLink.classList.add('active');
            }
        });

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
    function validateNumberInput(event) {
        let inputValue = event.target.value;
        event.target.value = inputValue.replace(/[^0-9.]/g, ''); 
    }
</script>


</html>