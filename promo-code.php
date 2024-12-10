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
                        <button onclick="window.location.href='index';"><img src="images/post.png" alt=""><span>Post an Event</span></button>
                        <button onclick="window.location.href='event-list';"><img src="images/list.png" alt=""><span>List of Events</span></button>
                        <button onclick="window.location.href='promo-code';"><img src="images/promo-i.png" alt=""><span>Promo code</span></button>
                        <button onclick="window.location.href='attendance';"><img src="images/group.png" alt=""><span>Attendee</span></button>
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