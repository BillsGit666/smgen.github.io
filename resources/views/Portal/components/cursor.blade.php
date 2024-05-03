<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha384-JsOKDPUzB6Q+kqJyPHDgFj4+zxSlPJxc7w0r5RnAvvF5+PK9yn6o/GfL9MDAjM4f" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins&display=swap">

    <style>
        .circle{
            height: 24px;
            width: 24px;
            border-radius: 24px;
            background-color: black;
            position: absolute;
            top: 0;
            left: 0;
        }



    </style>

</head>

<body>

<div class="circle"></div>
<div class="circle"></div>
<div class="circle"></div>
<div class="circle"></div>
<div class="circle"></div>
<div class="circle"></div>
<div class="circle"></div>
<div class="circle"></div>
<div class="circle"></div>
<div class="circle"></div>
<div class="circle"></div>
<div class="circle"></div>
<div class="circle"></div>
<div class="circle"></div>
<div class="circle"></div>
<div class="circle"></div>
<div class="circle"></div>
<div class="circle"></div>
<div class="circle"></div>
<div class="circle"></div>


</body>

<script>
    const coords = {x: 0, y: 0};
    const circles = document.querySelector(".circle")

    const colors = [
        "#1f005c", "#48005f", "#680060", "#830060", "#9c155f", "#b22c5e", "#c5415d", "#d5585c", "#e36e5c", "#ef865e", "#f89d63", "#ffb56b"
    ]

    circles.forEach(function (circle, index) {
        circle.x = 0;
        circle.y = 0;
    });

    window.addEventListener("mousemove", function(e){
        coords.x = e.clientX;
        coords.y = e.clientY;

    });

    function animatedCircles() {

        let x = coords.x;
        let y = coords.y;

        circles.forEach(function (circle, index){
            circle.style.left = x - 12 + "px";
            circle.style.top = y - 12 + "px";

            circle.style.scale = (circles.lenght - index) / circles.lenght;

            circle.x = x;
            circle.y = y;

            const nextCircle = circles[index + 1] || circle[0];
            x += (nextCircle.x - x) * 0.3;
            y += (nextCircle.y - y) * 0.3;
        });

        requestAnimationFrame(animatedCircles);
    }

    animatedCircles();
</script>

</html>
