<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'header.php' ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body style="background: #F8F8F8;">
    <div class="login">
        <form id="loginForm" onsubmit="return false;">
            <div class="mb-3">
                <label for="email" class="col-form-label">Email</label>
                <input type="text" id="email" class="form-control loginemail" placeholder="Enter email">
                <div id="emailError" class="error-message text-danger"></div>
            </div>
            <div class="mb-3">
                <label for="pass" class="col-form-label">Password</label>
                <input type="password" id="pass" class="form-control loginpassword" placeholder="Enter password">
                <div id="passwordError" class="error-message text-danger"></div>
            </div>
            <div class="mb-3">
                <input type="checkbox" class="check-remember login-rememberMe"><span> Remember me</span>
            </div>
            <div class="mb-3">
                <button id="loginBtn" class="login-btn btn btn-primary w-100">Login</button>
            </div>
        </form>
    </div>

    <div class="toast-container position-fixed top-0 end-0 p-3">
        <div id="loginToast" class="toast align-items-center text-white bg-success border-0" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="d-flex">
                <div class="toast-body" id="toastMessage"></div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
        </div>
    </div>

    <!-- <script>
        $(document).ready(function() {
            
            $("#loginBtn").on('click', function() {
                var email = $("#email").val();
                var password = $("#pass").val();
                
                $("#emailError").text("");
                $("#passwordError").text("");
                
                if (!email || !password) {
                    if (!email) {
                        $("#emailError").text("Email is required.");
                    }
                    if (!password) {
                        $("#passwordError").text("Password is required.");
                    }
                    return;
                }

                $.ajax({
                    url: "https://devrestapi.goquicklly.com/event-seller/do-login",
                    type: "POST",
                    contentType: "application/json",
                    data: JSON.stringify({
                        "email": email,
                        "pass": password
                    }),
                    dataType: "json",
                    success: function(response) {
                        
                        if (response.success) {
                            sessionStorage.setItem('userName', response.name);
                            window.location.href = "event-add";  
                        } else {
                            
                            alert("Login failed: " + response.message || "Unknown error");
                        }
                    },
                    error: function(xhr, status, error) {
                        
                        alert("Error: " + error);
                    }
                });
            });
        });
    </script> -->

    <!-- <script>
        $(document).ready(function() {
            if (sessionStorage.getItem("rememberMe") === "true") {
                $("#email").val(sessionStorage.getItem("savedEmail"));
                $("#pass").val(sessionStorage.getItem("savedPassword"));
                $(".check-remember").prop("checked", true);
            }

            $("#loginBtn").on('click', function() {
                var email = $("#email").val();
                var password = $("#pass").val();
                var rememberMe = $(".check-remember").is(":checked");

                $("#emailError").text("");
                $("#passwordError").text("");

                if (!email || !password) {
                    if (!email) {
                        $("#emailError").text("Email is required.");
                    }
                    if (!password) {
                        $("#passwordError").text("Password is required.");
                    }
                    return;
                }

                $.ajax({
                    url: "https://devrestapi.goquicklly.com/event-seller/do-login",
                    type: "POST",
                    contentType: "application/json",
                    data: JSON.stringify({
                        "email": email,
                        "pass": password
                    }),
                    dataType: "json",
                    success: function(response) {
                        if (response.success) {
                            sessionStorage.setItem('userName', response.name);

                            if (rememberMe) {
                                sessionStorage.setItem("rememberMe", "true");
                                sessionStorage.setItem("savedEmail", email);
                                sessionStorage.setItem("savedPassword", password);
                            } else {
                                sessionStorage.removeItem("rememberMe");
                                sessionStorage.removeItem("savedEmail");
                                sessionStorage.removeItem("savedPassword");
                            }

                            window.location.href = "event-add";
                        } else {
                            alert("Login failed: " + (response.message || "Unknown error"));
                        }
                    },
                    error: function(xhr, status, error) {
                        alert("Error: " + error);
                    }
                });
            });
        });
    </script> -->

    <script>
        $(document).ready(function() {
            if (sessionStorage.getItem("rememberMe") === "true") {
                $("#email").val(sessionStorage.getItem("savedEmail"));
                $("#pass").val(sessionStorage.getItem("savedPassword"));
                $(".check-remember").prop("checked", true);
            }

            $("#loginBtn").on('click', function() {
                var email = $("#email").val();
                var password = $("#pass").val();
                var rememberMe = $(".check-remember").is(":checked");

                $("#emailError").text("");
                $("#passwordError").text("");

                if (!email || !password) {
                    if (!email) {
                        $("#emailError").text("Email is required.");
                    }
                    if (!password) {
                        $("#passwordError").text("Password is required.");
                    }
                    return;
                }

                $.ajax({
                    url: "https://devrestapi.goquicklly.com/event-seller/do-login",
                    type: "POST",
                    contentType: "application/json",
                    data: JSON.stringify({
                        "email": email,
                        "pass": password
                    }),
                    dataType: "json",
                    success: function(response) {
                        if (response.success) {
                            sessionStorage.setItem('userName', response.name);

                            if (rememberMe) {
                                sessionStorage.setItem("rememberMe", "true");
                                sessionStorage.setItem("savedEmail", email);
                                sessionStorage.setItem("savedPassword", password);
                            } else {
                                sessionStorage.removeItem("rememberMe");
                                sessionStorage.removeItem("savedEmail");
                                sessionStorage.removeItem("savedPassword");
                            }

                            showToast("Login successful!", "success");

                            setTimeout(function() {
                                window.location.href = "event-add";
                            }, 2000);
                        } else {
                            showToast("Login failed: " + (response.message || "Unknown error"), "error");
                        }
                    },
                    error: function(xhr, status, error) {
                        showToast("Error: " + error, "error");
                    }
                });
            });

            function showToast(message, type) {
                var toastElement = $("#loginToast");
                var toastMessage = $("#toastMessage");

                toastMessage.text(message);

                if (type === "success") {
                    toastElement.removeClass("bg-danger").addClass("bg-success");
                } else {
                    toastElement.removeClass("bg-success").addClass("bg-danger");
                }

                var toast = new bootstrap.Toast(toastElement[0]);
                toast.show();
            }
        });
    </script>


</body>

</html>