<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
    <title>Spinner</title>
    <link href="wheels.css" rel="stylesheet">

</head>

<body>
    <div class="spin-board">

        <div class="copy">
            <h1>Spin to Win!</h1>
        </div>
        <div class="wrapper" style="text-align: center;">
            <div class="pointer-wrapper">
                <img src="wheel-pointer-v2.png" alt="pointer">
            </div>
            <img src="naji8.png" alt="spping wheel" class="wheel" width="400px">
        </div>
        <div id="messagebox"></div>
        <div class="button" id="spinButtonBox">
            <button class="btn" id="spnbtn">Spin</button>
        </div>
    </div>
</body>

<script src="jquery-2.1.1.min.js"></script>
<script src="wheels.js"></script>

</html>