<?php
// session_start();

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link rel="shortcut icon" href="images/favicon.png">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'" media="all">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <script src="js/script.js"></script>

    <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/ckeditor5-emojis@1.0.0/src/emoji.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/moment@2.29.1/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/moment-timezone@0.5.34/moment-timezone-with-data.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
        .search-highlight {
            background-color: yellow;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="header">
        <div class="container-fluid">
            <div class="row">
                <nav class="navbar navbar-expand-lg">
                    <div class="container-fluid">
                        <div class="col">
                            <div class="logo_left">
                                <a href="index"><img src="images/logo.png" alt="logo"></a>
                            </div>
                        </div>
                        <div class="col user-dropdown" style="display: none;">
                            <div class="right_btn d-flex align-items-center">
                                <div class="dropdown">
                                    <button class="btn dropdown-toggle login-btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    </button>
                                    <ul class="dropdown-menu custom-dropdown-menu">
                                        <li><a class="dropdown-item" href="index" id="logoutBtn">Logout</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>

    <script>

        $(document).ready(function() {
            var userName = sessionStorage.getItem('userName'); 

            if (userName) {
                console.log("Logged-in User: " + userName);
                $(".dropdown-toggle.login-btn").text(userName); 
                $(".user-dropdown").show(); 
            } else {
                console.log("No user logged in");
                $(".user-dropdown").hide(); 
            }
        });

        $("#logoutBtn").on("click", function() {
            sessionStorage.removeItem("userName"); 
            $(".user-dropdown").hide(); 
            window.location.href = "index"; 
        });

    </script>

</body>

</html>