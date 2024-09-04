<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Clock</title>
    <link href="https://fonts.cdnfonts.com/css/digital-7-mono" rel="stylesheet">
    <style>
        @import url('https://fonts.cdnfonts.com/css/digital-7-mono');

        body {
            background-color: #000;
        }

        .clock-wrapper {
            border: 5px solid #8e8f95;
            padding: 50px;
            border-radius: 0;
        }

        .clock-display {
            background: #000;
            color: #fff;
            padding: 20px;
            border: 3px solid #5b6165;
            border-radius: 10px;
        }

        .clock-display td {
            text-align: center;
            color: #e11a22;
        }

        .date-info {
            color: #aabbc2;
            font-size: 50px;
        }

        .date-numbers td {
            font-family: 'Digital-7', sans-serif;
        }

        .date-numbers {
            font-size: 150px;
            box-shadow: 0 0 0 3px #5b6165;
            border-radius: 10px;
        }

        .time-info th {
            color: #aabbc2;
            font-size: 50px;
        }

        .time-numbers {
            box-shadow: 0 0 0 3px #5b6165;
            border-radius: 10px;
        }

        .time-numbers td {
            font-size: 150px;
            font-family: 'Digital-7', sans-serif;
        }

        .day-selector td {
            font-size: 30px;
        }

        .ampm-display div {
            width: 40px;
            height: 40px;
            border: 2px solid #fff;
            margin: 10px;
            border-radius: 50%;
        }

        .ampm-display p {
            color: #fff;
        }

        .ampm-display {
            display: flex;
            justify-content: center;
            align-items: right;
        }
    </style>
</head>

<body>
    <div class="clock-wrapper">
        <table class="clock-display" width="100%">
            <tr class="date-info">
                <th colspan="2">DATE</th>
                <th colspan="4">MONTH</th>
                <th colspan="3">YEAR</th>
            </tr>
            <tr class="date-numbers">
                <td colspan="2"><?php echo date("d"); ?></td>
                <td colspan="4"><?php echo date("m"); ?></td>
                <td colspan="3"><?php echo date("y"); ?></td>
            </tr>
            <tr class="time-info">
                <th colspan="2">HOUR</th>
                <th colspan="4">MINUTE</th>
                <th colspan="3">SECOND</th>
            </tr>
            <tr class="time-numbers">
                <td colspan="2" id="hours"></td>
                <td colspan="1">:</td>
                <td colspan="2" id="minutes"></td>
                <td colspan="1">:</td>
                <td colspan="2" id="seconds"></td>
            </tr>
            <tr class="day-selector">
                <td><input type="radio" id="sun"> <label for="sun">SUN</label></td>
                <td><input type="radio" id="mon"> <label for="mon">MON</label></td>
                <td><input type="radio" id="tue"> <label for="tue">TUE</label></td>
                <td><input type="radio" id="wed"> <label for="wed">WED</label></td>
                <td><input type="radio" id="thu"> <label for="thu">THU</label></td>
                <td><input type="radio" id="fri"> <label for="fri">FRI</label></td>
                <td><input type="radio" id="sat"> <label for="sat">SAT</label></td>
            </tr>
        </table>
        <div class="ampm-display">
            <div id="am" class="am-marker"></div>
            <p>AM</p>
            <div id="pm" class="pm-marker"></div>
            <p>PM</p>
           
        </div>
    </div>

</body>

</html>

<script type="text/javascript">
    function refreshClock() {
        let currentTime = new Date();
        let hours = String(currentTime.getHours()).padStart(2, '0');
        let minutes = String(currentTime.getMinutes()).padStart(2, '0');
        let seconds = String(currentTime.getSeconds()).padStart(2, '0');
        let dayIndex = currentTime.getDay();
        let dayName = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'][dayIndex];

        const ampm = hours >= 12 ? 'PM' : 'AM';
        let amMarker = document.querySelector(".am-marker");
        let pmMarker = document.querySelector(".pm-marker");

        if (ampm === 'PM') {
            pmMarker.style.backgroundColor = 'red';
            amMarker.style.backgroundColor = 'transparent';
        } else {
            amMarker.style.backgroundColor = 'red';
            pmMarker.style.backgroundColor = 'transparent';
        }

        document.getElementById('hours').innerHTML = hours;
        document.getElementById('minutes').innerHTML = minutes;
        document.getElementById('seconds').innerHTML = seconds;
        document.getElementById('dayName').innerHTML = dayName;

        document.querySelectorAll('.day-selector input[type="radio"]').forEach((radio, idx) => {
            radio.checked = idx === dayIndex;
        });
    }

    setInterval(refreshClock, 1000);
</script>