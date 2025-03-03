<!DOCTYPE html>
<html lang="en">
<?php include 'config.php'; ?>
<head>
    <?php include 'header.php' ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <style>
        div#emailError { font-size: 14px; margin-bottom: -20px; }
        div#passwordError { font-size: 14px; margin-bottom: -10px; }
    </style>
    <script>
        const BASE_URL = "<?php echo BASE_URL; ?>";
    </script>
</head>

<body id="index-body" style="background: #F8F8F8;">
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

    <div id="loader" style="display: none; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); z-index: 9999;">
        <img src="images/loader.gif" alt="Loading..." width="50">
    </div>

    <div class="toast-container position-fixed top-0 end-0 p-3">
        <div id="loginToast" class="toast align-items-center text-white bg-success border-0" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="d-flex">
                <div class="toast-body" id="toastMessage"></div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
        </div>
    </div>

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

                $("#loader").show();

                $.ajax({
                    url: `${BASE_URL}/do-login`,
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
                            sessionStorage.setItem('storeid', response.storeID); 
                            sessionStorage.setItem('uid', response.uid); 

                            if (rememberMe) {
                                sessionStorage.setItem("rememberMe", "true");
                                sessionStorage.setItem("savedEmail", email);
                                sessionStorage.setItem("savedPassword", password);
                            } else {
                                sessionStorage.removeItem("rememberMe");
                                sessionStorage.removeItem("savedEmail");
                                sessionStorage.removeItem("savedPassword");
                            }

                            showToast("Login successfully!", "success");

                            setTimeout(function() {
                                window.location.href = "event-add";
                            }, 2000);
                        } else {
                            showToast("Login failed: " + (response.message || "Incorrect email or password."), "error");
                        }
                    },
                    error: function(xhr, status, error) {
                        showToast("Error: " + error, "error");
                    },
                    complete: function() {

                        $("#loader").hide();
                    }
                });
            });

            function showToast(message, type) {
                var toastElement = $("#loginToast");
                var toastMessage = $("#toastMessage");

                toastMessage.text(message);

                toastElement.removeClass("bg-success bg-danger");

                if (type === "success") {
                    toastElement.css({
                        "background-color": "#F05336",
                        "color": "#fff" 
                    });
                } else {
                    toastElement.css({
                        "background-color": "#dc3545", 
                        "color": "#fff"
                    });
                }

                var toast = new bootstrap.Toast(toastElement[0], { delay: 2000 });
                toast.show();
            }


        });
    </script>


</body>

</html>