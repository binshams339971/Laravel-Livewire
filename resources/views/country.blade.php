<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Livewire- Laravel</title>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <style>
            body {
  background: #007bff;
  background: linear-gradient(to right, #0062E6, #33AEFF);
}

.card-img-left {
  width: 45%;  
  background-size: cover;
}

.btn-login {
  font-size: 0.9rem;
  letter-spacing: 0.05rem;
  padding: .8rem 1rem;
}

.btn-google {
  color: white !important;
  background-color: #ea4335;
}

.btn-facebook {
  color: white !important;
  background-color: #3b5998;
}
/*!
 * Load Awesome v1.1.0 (http://github.danielcardoso.net/load-awesome/)
 * Copyright 2015 Daniel Cardoso <@DanielCardoso>
 * Licensed under MIT
 */
 .la-ball-clip-rotate-pulse,
.la-ball-clip-rotate-pulse > div {
    position: relative;
    -webkit-box-sizing: border-box;
       -moz-box-sizing: border-box;
            box-sizing: border-box;
}
.la-ball-clip-rotate-pulse {
    display: block;
    font-size: 0;
    color: #fff;
}
.la-ball-clip-rotate-pulse.la-dark {
    color: #333;
}
.la-ball-clip-rotate-pulse > div {
    display: inline-block;
    float: none;
    background-color: currentColor;
    border: 0 solid currentColor;
}
.la-ball-clip-rotate-pulse {
    width: 32px;
    height: 32px;
}
.la-ball-clip-rotate-pulse > div {
    position: absolute;
    top: 50%;
    left: 50%;
    border-radius: 100%;
}
.la-ball-clip-rotate-pulse > div:first-child {
    position: absolute;
    width: 32px;
    height: 32px;
    background: transparent;
    border-style: solid;
    border-width: 2px;
    border-right-color: transparent;
    border-left-color: transparent;
    -webkit-animation: ball-clip-rotate-pulse-rotate 1s cubic-bezier(.09, .57, .49, .9) infinite;
       -moz-animation: ball-clip-rotate-pulse-rotate 1s cubic-bezier(.09, .57, .49, .9) infinite;
         -o-animation: ball-clip-rotate-pulse-rotate 1s cubic-bezier(.09, .57, .49, .9) infinite;
            animation: ball-clip-rotate-pulse-rotate 1s cubic-bezier(.09, .57, .49, .9) infinite;
}
.la-ball-clip-rotate-pulse > div:last-child {
    width: 16px;
    height: 16px;
    -webkit-animation: ball-clip-rotate-pulse-scale 1s cubic-bezier(.09, .57, .49, .9) infinite;
       -moz-animation: ball-clip-rotate-pulse-scale 1s cubic-bezier(.09, .57, .49, .9) infinite;
         -o-animation: ball-clip-rotate-pulse-scale 1s cubic-bezier(.09, .57, .49, .9) infinite;
            animation: ball-clip-rotate-pulse-scale 1s cubic-bezier(.09, .57, .49, .9) infinite;
}
.la-ball-clip-rotate-pulse.la-sm {
    width: 24px;
    height: 24px;
}
.la-ball-clip-rotate-pulse.la-sm > div:first-child {
    width: 24px;
    height: 24px;
    border-width: 1px;
}
.la-ball-clip-rotate-pulse.la-sm > div:last-child {
    width: 8px;
    height: 8px;
}
.la-ball-clip-rotate-pulse.la-2x {
    width: 64px;
    height: 64px;
}
.la-ball-clip-rotate-pulse.la-2x > div:first-child {
    width: 64px;
    height: 64px;
    border-width: 4px;
}
.la-ball-clip-rotate-pulse.la-2x > div:last-child {
    width: 32px;
    height: 32px;
}
.la-ball-clip-rotate-pulse.la-3x {
    width: 96px;
    height: 96px;
}
.la-ball-clip-rotate-pulse.la-3x > div:first-child {
    width: 96px;
    height: 96px;
    border-width: 6px;
}
.la-ball-clip-rotate-pulse.la-3x > div:last-child {
    width: 48px;
    height: 48px;
}
/*
 * Animations
 */
@-webkit-keyframes ball-clip-rotate-pulse-rotate {
    0% {
        -webkit-transform: translate(-50%, -50%) rotate(0deg);
                transform: translate(-50%, -50%) rotate(0deg);
    }
    50% {
        -webkit-transform: translate(-50%, -50%) rotate(180deg);
                transform: translate(-50%, -50%) rotate(180deg);
    }
    100% {
        -webkit-transform: translate(-50%, -50%) rotate(360deg);
                transform: translate(-50%, -50%) rotate(360deg);
    }
}
@-moz-keyframes ball-clip-rotate-pulse-rotate {
    0% {
        -moz-transform: translate(-50%, -50%) rotate(0deg);
             transform: translate(-50%, -50%) rotate(0deg);
    }
    50% {
        -moz-transform: translate(-50%, -50%) rotate(180deg);
             transform: translate(-50%, -50%) rotate(180deg);
    }
    100% {
        -moz-transform: translate(-50%, -50%) rotate(360deg);
             transform: translate(-50%, -50%) rotate(360deg);
    }
}
@-o-keyframes ball-clip-rotate-pulse-rotate {
    0% {
        -o-transform: translate(-50%, -50%) rotate(0deg);
           transform: translate(-50%, -50%) rotate(0deg);
    }
    50% {
        -o-transform: translate(-50%, -50%) rotate(180deg);
           transform: translate(-50%, -50%) rotate(180deg);
    }
    100% {
        -o-transform: translate(-50%, -50%) rotate(360deg);
           transform: translate(-50%, -50%) rotate(360deg);
    }
}
@keyframes ball-clip-rotate-pulse-rotate {
    0% {
        -webkit-transform: translate(-50%, -50%) rotate(0deg);
           -moz-transform: translate(-50%, -50%) rotate(0deg);
             -o-transform: translate(-50%, -50%) rotate(0deg);
                transform: translate(-50%, -50%) rotate(0deg);
    }
    50% {
        -webkit-transform: translate(-50%, -50%) rotate(180deg);
           -moz-transform: translate(-50%, -50%) rotate(180deg);
             -o-transform: translate(-50%, -50%) rotate(180deg);
                transform: translate(-50%, -50%) rotate(180deg);
    }
    100% {
        -webkit-transform: translate(-50%, -50%) rotate(360deg);
           -moz-transform: translate(-50%, -50%) rotate(360deg);
             -o-transform: translate(-50%, -50%) rotate(360deg);
                transform: translate(-50%, -50%) rotate(360deg);
    }
}
@-webkit-keyframes ball-clip-rotate-pulse-scale {
    0%,
    100% {
        opacity: 1;
        -webkit-transform: translate(-50%, -50%) scale(1);
                transform: translate(-50%, -50%) scale(1);
    }
    30% {
        opacity: .3;
        -webkit-transform: translate(-50%, -50%) scale(.15);
                transform: translate(-50%, -50%) scale(.15);
    }
}
@-moz-keyframes ball-clip-rotate-pulse-scale {
    0%,
    100% {
        opacity: 1;
        -moz-transform: translate(-50%, -50%) scale(1);
             transform: translate(-50%, -50%) scale(1);
    }
    30% {
        opacity: .3;
        -moz-transform: translate(-50%, -50%) scale(.15);
             transform: translate(-50%, -50%) scale(.15);
    }
}
@-o-keyframes ball-clip-rotate-pulse-scale {
    0%,
    100% {
        opacity: 1;
        -o-transform: translate(-50%, -50%) scale(1);
           transform: translate(-50%, -50%) scale(1);
    }
    30% {
        opacity: .3;
        -o-transform: translate(-50%, -50%) scale(.15);
           transform: translate(-50%, -50%) scale(.15);
    }
}
@keyframes ball-clip-rotate-pulse-scale {
    0%,
    100% {
        opacity: 1;
        -webkit-transform: translate(-50%, -50%) scale(1);
           -moz-transform: translate(-50%, -50%) scale(1);
             -o-transform: translate(-50%, -50%) scale(1);
                transform: translate(-50%, -50%) scale(1);
    }
    30% {
        opacity: .3;
        -webkit-transform: translate(-50%, -50%) scale(.15);
           -moz-transform: translate(-50%, -50%) scale(.15);
             -o-transform: translate(-50%, -50%) scale(.15);
                transform: translate(-50%, -50%) scale(.15);
    }
}
        </style>
        @livewireStyles
    </head>
    <body class="antialiased">
       
        @livewire('countries')

        @livewireScripts


        <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>
