<html lang="en" data-bs-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="./theme.js"></script>
    <title>BWF Landing Page</title>
    <style>
        .first-text {
            color: #07BA81;
        }

        .second-text {
            color: #0264B3;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body onload="setLastTheme()">
    <div class="position-fixed bottom-0 end-0 mb-3 me-3">
        <div class="btn-group">
            <button type="button" onclick="switchToLight()" id="lightBtn" class="btn pt-2 btn-secondary">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-sun-fill mb-1" viewBox="0 0 16 16">
                    <path
                        d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8M8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0m0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13m8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5M3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8m10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0m-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707M4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z">
                    </path>
                </svg>
            </button>
            <button type="button" onclick="switchToDark()" id="darkBtn" class="btn pt-2 btn-outline-secondary">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-moon-stars-fill mb-1" viewBox="0 0 16 16">
                    <path
                        d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278">
                    </path>
                    <path
                        d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z">
                    </path>
                </svg>
            </button>
        </div>
    </div>
    <main>
        <div class="px-4 d-flex flex-column justify-content-center text-center" style="height:100vh">
            <img class="d-block mx-auto mb-4" src="./images/bwf-Logo.png" alt="Logo Image" width="72" height="60">
            <h1 class="display-5 fw-bold text-body-emphasis"><span class="first-text">Borderless</span> <span
                    class="second-text">World Foundation</span></h1>
            <div class="col-lg-6 mx-auto">
                <p class="lead mb-4">Borderless World Foundation (BWF) is a Pune-based NGO dedicated to the
                    rehabilitation and empowerment of the poor and deprived in the conflict-ridden Kashmir region. BWF
                    rescues orphaned girls along the India-Pakistan border, providing them with love, support,
                    healthcare, and education.</p>
                <div class="d-flex gap-2 align-items-center justify-content-center">
                    <button type="button" id="toggleBtn" class="btn w-50 btn-primary btn-lg px-4">Login</button>
                </div>
                <div class="d-grid mb-0 gap-2 d-sm-flex justify-content-sm-center flex-wrap">
                    <a id="targetBtn1" style="display: none;" class=" btn btn-outline-success btn-lg mt-3 px-4"
                        href="wardenLogin.php">Warden</a>
                    <a id="targetBtn2" style="display: none;" class=" btn btn-outline-success btn-lg mt-3 px-4"
                        href="adminLogin.php">Admin</a>
                </div>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script>
        $(document).ready(function () {
            $("#toggleBtn").on("click", function () {
                $("#targetBtn1").slideToggle(400, function () {
                    $("#targetBtn2").slideToggle(400);
                });
            })
        })
    </script>

</body>

</html>