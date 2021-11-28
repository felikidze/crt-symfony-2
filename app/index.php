<?php

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            margin: 0;
            font: normal 75% Arial, Helvetica, sans-serif;
        }
        canvas {
            display: block;
            vertical-align: bottom;
        }
        #particles-js {
            position: fixed;
            width: 100%;
            height: 100%;
            background-color: #9a18b6;
            background-image: url("");
            background-repeat: no-repeat;
            background-size: cover;
            background-position: 50% 50%;
            z-index: 1;
        }

        #wrapper-content {
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
            height: 100vh;
            justify-content: center;
        }

        #wrapper-content a {
            text-decoration: none;
            color: white;
            font-size: 24px;
        }

        .btns {
            z-index: 10;
            border-radius: 16px;
            margin-bottom: 5%;
            border: 1px solid white;
            background: blue;
            padding: 8px;
            width: 15%;
            text-align: center;
        }
    </style>
</head>
<body>
<div>
    <div id="particles-js"></div>
    <div id="wrapper-content">
        <div class="btns"><a href="./HomeWork1/Main.php">Task1</a></div>
        <div class="btns"><a href="./Homework2/login.php">Task2</a></div>
        <div class="btns"><a href="./Homework3/db.php">Task3</a></div>
    </div>
    <script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script src="http://threejs.org/examples/js/libs/stats.min.js"></script>
    <script>
        particlesJS("particles-js", {
            particles: {
                number: { value: 120, density: { enable: true, value_area: 800 } },
                color: { value: "#ffffff" },
                shape: {
                    type: "circle",
                    stroke: { width: 0, color: "#000000" },
                    polygon: { nb_sides: 5 },
                    image: { src: "img/github.svg", width: 100, height: 100 }
                },
                opacity: {
                    value: 0.5,
                    random: false,
                    anim: { enable: false, speed: 1, opacity_min: 0.1, sync: false }
                },
                size: {
                    value: 3,
                    random: true,
                    anim: { enable: false, speed: 40, size_min: 0.1, sync: false }
                },
                line_linked: {
                    enable: true,
                    distance: 150,
                    color: "#ffffff",
                    opacity: 0.4,
                    width: 1
                },
                move: {
                    enable: true,
                    speed: 6,
                    direction: "none",
                    random: false,
                    straight: false,
                    out_mode: "out",
                    bounce: false,
                    attract: { enable: false, rotateX: 600, rotateY: 1200 }
                }
            },
            interactivity: {
                detect_on: "canvas",
                events: {
                    onhover: { enable: true, mode: "bubble" },
                    onclick: { enable: true, mode: "push" },
                    resize: true
                },
                modes: {
                    grab: { distance: 400, line_linked: { opacity: 1 } },
                    bubble: { distance: 400, size: 5, duration: 2, opacity: 8, speed: 3 },
                    repulse: { distance: 200, duration: 0.4 },
                    push: { particles_nb: 4 },
                    remove: { particles_nb: 2 }
                }
            },
            retina_detect: true
        });
    </script>
</div>
</body>
</html>