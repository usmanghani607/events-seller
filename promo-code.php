<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'header.php' ?>

    <style>
    
    </style>
</head>

<body style="background: #F8F8F8;">

    <div class="dashboard promo-area">
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
                    <div class="promo">
                        <div class="row">
                            <h2>Promocode</h2>
                            <h4>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod.</h4>
                            <div class="promo-btn">
                                <button class="add-promo" data-bs-toggle="modal" data-bs-target="#addPromoModal">Create Promocode</button>
                            </div>

                            <!-- Promo Modal -->
                            <div class="modal fade" id="addPromoModal" tabindex="-1" aria-labelledby="addPromoModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="addPromoModalLabel">Create Promo code</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                <div class="row">
                                                    <div class="col-md-12 mb-3">
                                                        <label for="ticketName" class="form-label">Promo code Description</label>
                                                        <input type="text" class="form-control" id="ticketName" placeholder="Description">
                                                    </div>
                                                    <div class="col-md-12 mb-3">
                                                        <label for="price" class="form-label">Select Event</label>
                                                        <div class="input-group">
                                                            <select class="form-control custom-select-arrow" id="startTime">
                                                                <option value="0">Select event</option>
                                                                <option value="1">Test</option>
                                                                <option value="2">Testing</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 mb-3">
                                                        <label for="price" class="form-label">Select Tickets category</label>
                                                        <div class="input-group">
                                                            <select class="form-control custom-select-arrow" id="startTime">
                                                                <option value="0">Select Tickets category</option>
                                                                <option value="1">Test</option>
                                                                <option value="2">Testing</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 mb-2">
                                                        <label for="quantity" class="form-label">Discount Type*</label>
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <input type="radio" id="percentages" name="contact" value="email" checked />
                                                        <label for="percentages">Percentages</label>
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <input type="radio" id="flat_discount" name="contact" value="phone" />
                                                        <label for="flat_discount">Flat Discount</label>
                                                    </div>
                                                    <div class="col-md-3 mb-3 percent-input-wrapper">
                                                        <input type="text" name="" value="00" />
                                                        <span class="percent-sign">%</span>
                                                    </div>
                                                   
                                                </div>
                                            </form>
                                            <div class="promo-modal-footer">
                                                <button type="button" class="btn add-promo">Create Promo Code</button>
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
    document.querySelector('.price').addEventListener('input', function(e) {
        this.value = this.value.replace(/[^0-9]/g, '');
    });
</script>




</html>