<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AR Srivastav | Portfolio</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            background: white;
            font-family: Arial, sans-serif;
        }
        .container {
            margin-left: 7%;
            margin-right: 7%;
        }

        .logo{
            color: white;
            font-size: 1.5rem;
        }
        nav{
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding-top: 1.5rem;
            padding-bottom: 1.5rem;
        }

        nav > .nav-items-box > div{
            display: flex;
            align-items: center;
            gap: 1rem;
            background: #4285f4;
            border-radius: 22px;
            padding: 4px 5px;
        }
        .nav-items-box > div > div > a{
            color: white;
            display: flex;
            align-items: center;
            cursor: pointer;
            text-decoration: none;
            /* border: 1px solid white; */
            padding: 5px 16px;
            border-radius: 22px;
            transition: color 0.3s ease-in-out;
        }

        .nav-items-box{
            display: flex;
            justify-content: space-between;
            width: 55%;
        }

        .toggle-btn{
            background: white !important;
            display: none !important;
        }

        .contact-btn a{
            box-shadow: 0px 0px 3px white;
            padding: 11px 20px;
            background: white;
            color: #212224 !important;
            border-radius: 20px;
            font-size: 13px;
            font-weight: 700;
        }

        footer div p{
            color: white;
            text-align: center;
            margin-top: 5%;
        }

        .one{
            width: 50%;
        }

        .two, .three{
            width: 23.5%;
        }

        .four{
            width: 30%;
        }

        .five{
            width: 68%;
        }

        .one, .two, .three, .four, .five{
            background: #4285f4;
            padding: 2rem;
            border-radius: 35px;
            transition: transform 0.2s ease;
        }

        .one:hover, .two:hover, .three:hover, .four:hover, .five:hover{
            transform: translateY(-10px);
        }

        .layerTwo, .layerOne{
            display: flex;
            gap: 1.25rem;
            margin-bottom: 1.25rem;
        }

        h2{
            color: white;
            font-size: 30px;
        }

        .small-description{
            margin-top: 7px;
            color: white;
            font-size: 15px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .skill-box{
            display: flex;
            justify-content: space-between;
            margin-top: 7%;
            flex-wrap: wrap;
        }

        .four, .two, .three {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .profile-image img{
            width: 112px;
            border-radius: 50%;
            margin-bottom: 6%;
        }

        .social-icon-box {
            display: flex;
            flex-wrap: wrap;
            gap: 19px;
            justify-content: space-around;
        }

        .active {
            border: 2px solid white;
            color: #4285f4;
            background: white;
            border-radius: 22px;
            animation: wave 0.6s ease-in-out; /* Add wave animation */
        }

    @keyframes wave {
        0% {
            transform: scale(0.9);
            opacity: 0.5;
        }
        50% {
            transform: scale(1.05);
            opacity: 0.8;
        }
        100% {
            transform: scale(1);
            opacity: 1;
        }
    }


    /* Responsive Nav Bar */
    .mobile-nav-item-box {
        display: none;
        flex-direction: column;
        align-items: center;
        /* border: 1px solid gray; */
        margin-bottom: 5%;
    }

    .mobile-nav-item-box div {
        padding: 10px 0px;
        width: 100%;
        text-align: center;
        color: #4285f4;
        font-size: 1.5rem;
        font-weight: 500;
    }
    .mobile-nav-item-box div:hover {
        background: #f0efef;
        cursor: pointer;
    }

    /* Mobile Responsiveness */
    @media screen and (max-width: 600px) {
        .layerTwo, .layerOne{
            flex-wrap: wrap;
        }

        .one, .two, .three, .four, .five{
            width: 100% !important;
        }

        .skill-box{
            justify-content: space-between;
        }

        #project-section{

        }

        .container{
            margin-left: 3%;
            margin-right: 3%;
        }
    }

    @media screen and (max-width: 800px){
        .toggle-btn{
            background: white !important;
            display: block !important;
        }
        .nav-mobile{
            display: none !important;
        }
        .nav-items-box{
            justify-content: flex-end;
        }
        . {
            display: flex;
        }
    }

    /* Mobile Responsiveness */
    @media screen and (max-width: 1009px) {
        .layerTwo, .layerOne{
            flex-wrap: wrap;
        }

        .one, .four, .five{
            width: 100%;
        }
        .two, .three{
            width: 47.8%;
        }

        .skill-box{
            justify-content: space-between;
        }

        #project-section{

        }

        .container{
            margin-left: 3%;
            margin-right: 3%;
        }
    }
    </style>
</head>
<body>
    <header>
        <nav class="container">
            <div class="logo">
                <img src="img/logo/name-logo-03.png" width="292" alt="">
            </div>
            <div class="nav-items-box">
                <div class="nav-items nav-mobile" id="nav-items">
                    <div class="about"><a href="#">About</a></div>
                    <div class="resume"><a href="#">Resume</a></div>
                </div>
                <div class="nav-items nav-mobile" id="nav-items">
                    <div class="git contact-btn"><a href="#" style="background: #4285f4; border: none; box-shadow: none; color: white !important">Get in touch</a></div>
                </div>
                <div class="toggle-btn" id="toggle-btn">
                    <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 6H20M4 12H20M4 18H20" stroke="#000000" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                </div>
            </div>
        </nav>
        <div class="mobile-nav-item-box">
            <div class="mobile-nav-item">Resume</div>
            <div class="mobile-nav-item">Contact</div>
            <div class="mobile-nav-item">About</div>
        </div>
    </header>
    <section class="container">
        <div class="home-container-div">
            <div class="layerOne">
                <div class="box one" id="main-section">
                    <!-- intro section -->
                    <div class="profile-image">
                        <img src="img/main-photo.png" alt="">
                    </div>
                    <div class="name">
                        <h2>Ashuraj Srivastav</h2>
                    </div>
                    <div class="small-description">
                        <p>Full Stack PHP Developer</p>
                        <span>
                            <svg fill="white" height="18px" width="18px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512.094 512.094" xml:space="preserve" stroke="white" stroke-width="32.261922000000006"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <g> <path d="M263.641,248.4L18.308,3.067c-4.16-4.053-10.987-3.947-15.04,0.32c-3.947,4.16-3.947,10.667,0,14.827l237.76,237.76 L3.268,493.733c-4.267,4.053-4.373,10.88-0.213,15.04c4.16,4.16,10.88,4.373,15.04,0.213c0.107-0.107,0.213-0.213,0.213-0.213 L263.641,263.44C267.801,259.28,267.801,252.56,263.641,248.4z"></path> <path d="M508.974,248.4L263.641,3.067c-4.267-4.053-10.987-3.947-15.04,0.213c-3.947,4.16-3.947,10.667,0,14.827l237.76,237.76 l-237.76,237.867c-4.267,4.053-4.373,10.88-0.213,15.04c4.16,4.16,10.88,4.373,15.04,0.213c0.107-0.107,0.213-0.213,0.213-0.213 L508.974,263.44C513.135,259.28,513.135,252.56,508.974,248.4z"></path> </g> </g> </g> </g></svg>
                        </span>
                    </div>
                </div>
                <div class="box two" id="resume-section">
                    <!-- Resume Section -->
                     <div>
                        <svg width="64px" height="64px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" transform="matrix(-1, 0, 0, 1, 0, 0)"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M9.29289 1.29289C9.48043 1.10536 9.73478 1 10 1H18C19.6569 1 21 2.34315 21 4V20C21 21.6569 19.6569 23 18 23H6C4.34315 23 3 21.6569 3 20V8C3 7.73478 3.10536 7.48043 3.29289 7.29289L9.29289 1.29289ZM18 3H11V8C11 8.55228 10.5523 9 10 9H5V20C5 20.5523 5.44772 21 6 21H18C18.5523 21 19 20.5523 19 20V4C19 3.44772 18.5523 3 18 3ZM6.41421 7H9V4.41421L6.41421 7ZM7 13C7 12.4477 7.44772 12 8 12H16C16.5523 12 17 12.4477 17 13C17 13.5523 16.5523 14 16 14H8C7.44772 14 7 13.5523 7 13ZM7 17C7 16.4477 7.44772 16 8 16H16C16.5523 16 17 16.4477 17 17C17 17.5523 16.5523 18 16 18H8C7.44772 18 7 17.5523 7 17Z" fill="white"></path> </g></svg>
                     </div>
    
                     <div>
                        <h2>Resume</h2>
                     </div>
                </div>
                <div class="box three">
                    <!-- Social Meta -->
                     <div class="social-icon-box">
                        <span>
                            <svg fill="white" height="70px" width="70px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 552.77 552.77" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M17.95,528.854h71.861c9.914,0,17.95-8.037,17.95-17.951V196.8c0-9.915-8.036-17.95-17.95-17.95H17.95 C8.035,178.85,0,186.885,0,196.8v314.103C0,520.816,8.035,528.854,17.95,528.854z"></path> <path d="M17.95,123.629h71.861c9.914,0,17.95-8.036,17.95-17.95V41.866c0-9.914-8.036-17.95-17.95-17.95H17.95 C8.035,23.916,0,31.952,0,41.866v63.813C0,115.593,8.035,123.629,17.95,123.629z"></path> <path d="M525.732,215.282c-10.098-13.292-24.988-24.223-44.676-32.791c-19.688-8.562-41.42-12.846-65.197-12.846 c-48.268,0-89.168,18.421-122.699,55.27c-6.672,7.332-11.523,5.729-11.523-4.186V196.8c0-9.915-8.037-17.95-17.951-17.95h-64.192 c-9.915,0-17.95,8.035-17.95,17.95v314.103c0,9.914,8.036,17.951,17.95,17.951h71.861c9.915,0,17.95-8.037,17.95-17.951V401.666 c0-45.508,2.748-76.701,8.244-93.574c5.494-16.873,15.66-30.422,30.488-40.649c14.83-10.227,31.574-15.343,50.24-15.343 c14.572,0,27.037,3.58,37.393,10.741c10.355,7.16,17.834,17.19,22.436,30.104c4.604,12.912,6.904,41.354,6.904,85.33v132.627 c0,9.914,8.035,17.951,17.949,17.951h71.861c9.914,0,17.949-8.037,17.949-17.951V333.02c0-31.445-1.982-55.607-5.941-72.48 S535.836,228.581,525.732,215.282z"></path> </g> </g> </g></svg>
                        </span>
                        <span>
                            <svg stroke="currentColor" fill="white" stroke-width="0" viewBox="0 0 496 512" class="card-icon" height="70px" width="70px" xmlns="http://www.w3.org/2000/svg"><path d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"></path></svg>
                        </span>
                        <span>
                            <svg height="70px" width="70px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M16 17H21M18.5 14.5V19.5M12 19H6.2C5.0799 19 4.51984 19 4.09202 18.782C3.71569 18.5903 3.40973 18.2843 3.21799 17.908C3 17.4802 3 16.9201 3 15.8V8.2C3 7.0799 3 6.51984 3.21799 6.09202C3.40973 5.71569 3.71569 5.40973 4.09202 5.21799C4.51984 5 5.0799 5 6.2 5H17.8C18.9201 5 19.4802 5 19.908 5.21799C20.2843 5.40973 20.5903 5.71569 20.782 6.09202C21 6.51984 21 7.0799 21 8.2V11M20.6067 8.26229L15.5499 11.6335C14.2669 12.4888 13.6254 12.9165 12.932 13.0827C12.3192 13.2295 11.6804 13.2295 11.0677 13.0827C10.3743 12.9165 9.73279 12.4888 8.44975 11.6335L3.14746 8.09863" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                        </span>
                        <span>
                            <svg height="70px" width="70px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>instagram [#167]</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Dribbble-Light-Preview" transform="translate(-340.000000, -7439.000000)" fill="white"> <g id="icons" transform="translate(56.000000, 160.000000)"> <path d="M289.869652,7279.12273 C288.241769,7279.19618 286.830805,7279.5942 285.691486,7280.72871 C284.548187,7281.86918 284.155147,7283.28558 284.081514,7284.89653 C284.035742,7285.90201 283.768077,7293.49818 284.544207,7295.49028 C285.067597,7296.83422 286.098457,7297.86749 287.454694,7298.39256 C288.087538,7298.63872 288.809936,7298.80547 289.869652,7298.85411 C298.730467,7299.25511 302.015089,7299.03674 303.400182,7295.49028 C303.645956,7294.859 303.815113,7294.1374 303.86188,7293.08031 C304.26686,7284.19677 303.796207,7282.27117 302.251908,7280.72871 C301.027016,7279.50685 299.5862,7278.67508 289.869652,7279.12273 M289.951245,7297.06748 C288.981083,7297.0238 288.454707,7296.86201 288.103459,7296.72603 C287.219865,7296.3826 286.556174,7295.72155 286.214876,7294.84312 C285.623823,7293.32944 285.819846,7286.14023 285.872583,7284.97693 C285.924325,7283.83745 286.155174,7282.79624 286.959165,7281.99226 C287.954203,7280.99968 289.239792,7280.51332 297.993144,7280.90837 C299.135448,7280.95998 300.179243,7281.19026 300.985224,7281.99226 C301.980262,7282.98483 302.473801,7284.28014 302.071806,7292.99991 C302.028024,7293.96767 301.865833,7294.49274 301.729513,7294.84312 C300.829003,7297.15085 298.757333,7297.47145 289.951245,7297.06748 M298.089663,7283.68956 C298.089663,7284.34665 298.623998,7284.88065 299.283709,7284.88065 C299.943419,7284.88065 300.47875,7284.34665 300.47875,7283.68956 C300.47875,7283.03248 299.943419,7282.49847 299.283709,7282.49847 C298.623998,7282.49847 298.089663,7283.03248 298.089663,7283.68956 M288.862673,7288.98792 C288.862673,7291.80286 291.150266,7294.08479 293.972194,7294.08479 C296.794123,7294.08479 299.081716,7291.80286 299.081716,7288.98792 C299.081716,7286.17298 296.794123,7283.89205 293.972194,7283.89205 C291.150266,7283.89205 288.862673,7286.17298 288.862673,7288.98792 M290.655732,7288.98792 C290.655732,7287.16159 292.140329,7285.67967 293.972194,7285.67967 C295.80406,7285.67967 297.288657,7287.16159 297.288657,7288.98792 C297.288657,7290.81525 295.80406,7292.29716 293.972194,7292.29716 C292.140329,7292.29716 290.655732,7290.81525 290.655732,7288.98792" id="instagram-[#167]"> </path> </g> </g> </g> </g></svg>
                        </span>
                     </div>
                    <div>
                       <h2>Socials</h2>
                    </div>
                </div>
            </div>
            <div class="layerTwo">
                <div class="box four" id="project-section">
                    <!-- Projects -->
                     <div>
                        <svg width="65px" height="65px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M9.29289 1.29289C9.48043 1.10536 9.73478 1 10 1H18C19.6569 1 21 2.34315 21 4V9C21 9.55228 20.5523 10 20 10C19.4477 10 19 9.55228 19 9V4C19 3.44772 18.5523 3 18 3H11V8C11 8.55228 10.5523 9 10 9H5V20C5 20.5523 5.44772 21 6 21H9C9.55228 21 10 21.4477 10 22C10 22.5523 9.55228 23 9 23H6C4.34315 23 3 21.6569 3 20V8C3 7.73478 3.10536 7.48043 3.29289 7.29289L9.29289 1.29289ZM6.41421 7H9V4.41421L6.41421 7ZM18.7071 12.2929L22.7071 16.2929C23.0976 16.6834 23.0976 17.3166 22.7071 17.7071L18.7071 21.7071C18.3166 22.0976 17.6834 22.0976 17.2929 21.7071C16.9024 21.3166 16.9024 20.6834 17.2929 20.2929L20.5858 17L17.2929 13.7071C16.9024 13.3166 16.9024 12.6834 17.2929 12.2929C17.6834 11.9024 18.3166 11.9024 18.7071 12.2929ZM14.7071 13.7071C15.0976 13.3166 15.0976 12.6834 14.7071 12.2929C14.3166 11.9024 13.6834 11.9024 13.2929 12.2929L9.29289 16.2929C8.90237 16.6834 8.90237 17.3166 9.29289 17.7071L13.2929 21.7071C13.6834 22.0976 14.3166 22.0976 14.7071 21.7071C15.0976 21.3166 15.0976 20.6834 14.7071 20.2929L11.4142 17L14.7071 13.7071Z" fill="white"></path> </g></svg>
                     </div>
                    <div class="">
                       <h2>Projects</h2>
                    </div>
                </div>
                <div class="box five">
                    <!-- IT Skills  -->
                     <div class="">
                        <h2>IT Skills</h2>
                     </div>
                     <div class="skill-box">
                        <span>
                            <svg fill="white" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="65px" height="65px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="c133de6af664cd4f011a55de6b0011b2"> <path display="inline" d="M30.713,0.501L71.717,460.42l184.006,51.078l184.515-51.15L481.287,0.501H30.713z M395.754,109.646 l-2.567,28.596l-1.128,12.681h-0.187H256h-0.197h-79.599l5.155,57.761h74.444H256h115.723h15.201l-1.377,15.146l-13.255,148.506 l-0.849,9.523L256,413.854v0.012l-0.259,0.072l-115.547-32.078l-7.903-88.566h26.098h30.526l4.016,44.986l62.82,16.965l0.052-0.014 v-0.006l62.916-16.977l6.542-73.158H256h-0.197H129.771l-13.863-155.444l-1.351-15.131h141.247H256h141.104L395.754,109.646z"> </path> </g> </g></svg>
                        </span>
                        <span>
                            <svg fill="white" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="65px" height="65px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="c133de6af664cd4f011a55de6b001b19"> <path display="inline" d="M483.111,0.501l-42.59,461.314l-184.524,49.684L71.47,461.815L28.889,0.501H483.111z M397.29,94.302 H255.831H111.866l6.885,55.708h137.08h7.7l-7.7,3.205l-132.07,55.006l4.38,54.453l127.69,0.414l68.438,0.217l-4.381,72.606 l-64.058,18.035v-0.057l-0.525,0.146l-61.864-15.617l-3.754-45.07h-0.205H132.1h-0.202l7.511,87.007l116.423,34.429v-0.062 l0.21,0.062l115.799-33.802l15.021-172.761h-131.03h-0.323l0.323-0.14l135.83-58.071L397.29,94.302z"> </path> </g> </g></svg>    
                        </span>
                        <span>
                            <svg width="65px" height="65px" viewBox="0 0 32.00 32.00" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000" stroke="#000000" stroke-width="0.00032"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="0.192"></g><g id="SVGRepo_iconCarrier"> <path fill="white" d="M4.698 3.419l2.057 23.073 9.231 2.563 9.256-2.566 2.059-23.069h-22.604zM13.226 9.394l-0.409 4.441 9.671 0.001-0.069 0.76-0.665 7.45-0.042 0.478-5.804 1.609-5.796-1.609-0.396-4.443h2.84l0.202 2.257 3.154 0.85 3.156-0.852 0.328-3.67-9.671-0.001 0.069-0.76 0.665-7.45 0.209-2.086h11.287l0.131 1.598 0.403 4.453h-2.841l-0.262-2.922-2.889-0.174h-0.515v-0.004l-2.755 0.074z"></path> </g></svg>
                        </span>
                        <span>
                            <svg fill="white" width="65px" height="65px" viewBox="0 0 24 24" role="img" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M11.77 11.24H9.956V8.202h2.152c1.17 0 1.834.522 1.834 1.466 0 1.008-.773 1.572-2.174 1.572zm.324 1.206H9.957v3.348h2.231c1.459 0 2.232-.585 2.232-1.685s-.795-1.663-2.326-1.663zM24 11.39v1.218c-1.128.108-1.817.944-2.226 2.268-.407 1.319-.463 2.937-.42 4.186.045 1.3-.968 2.5-2.337 2.5H4.985c-1.37 0-2.383-1.2-2.337-2.5.043-1.249-.013-2.867-.42-4.186-.41-1.324-1.1-2.16-2.228-2.268V11.39c1.128-.108 1.819-.944 2.227-2.268.408-1.319.464-2.937.42-4.186-.045-1.3.968-2.5 2.338-2.5h14.032c1.37 0 2.382 1.2 2.337 2.5-.043 1.249.013 2.867.42 4.186.409 1.324 1.098 2.16 2.226 2.268zm-7.927 2.817c0-1.354-.953-2.333-2.368-2.488v-.057c1.04-.169 1.856-1.135 1.856-2.213 0-1.537-1.213-2.538-3.062-2.538h-4.16v10.172h4.181c2.218 0 3.553-1.086 3.553-2.876z"></path></g></svg>
                        </span>
    
                        <span>
                            <svg fill="white" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="65px" height="65px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="5151e0c8492e5103c096af88a51e2ea6"> <path display="inline" d="M401.054,224c3.714,4.115,4.595,11.181,2.653,21.19c-2.029,10.425-5.935,17.862-11.723,22.32 c-5.793,4.458-14.602,6.687-26.432,6.687h-17.849l10.957-56.37h20.103C389.913,217.827,397.34,219.886,401.054,224z M149.754,217.827h-20.103l-10.958,56.37h17.848c11.827,0,20.639-2.229,26.432-6.687c5.789-4.458,9.694-11.896,11.723-22.32 c1.942-10.01,1.06-17.075-2.653-21.19C168.33,219.886,160.903,217.827,149.754,217.827z M511.5,256 c0,74.229-114.393,134.403-255.5,134.403S0.5,330.229,0.5,256c0-74.228,114.393-134.403,255.5-134.403S511.5,181.772,511.5,256z M198.542,265.286c3.04-5.448,5.203-11.461,6.483-18.037c3.102-15.967,0.761-28.403-7.024-37.313 c-7.781-8.91-20.165-13.363-37.136-13.363h-56.423L78.265,331.261h29.342l6.958-35.805h25.134c11.087,0,20.21-1.164,27.372-3.497 c7.161-2.329,13.669-6.233,19.528-11.719C191.514,275.72,195.493,270.738,198.542,265.286z M301.814,295.456l12.181-62.682 c2.479-12.747,0.619-21.971-5.572-27.664c-6.196-5.688-17.449-8.537-33.768-8.537h-25.933l6.961-35.81h-29.11l-26.182,134.692 h29.11l14.996-77.165h23.267c7.448,0,12.317,1.232,14.604,3.698c2.287,2.467,2.773,7.091,1.455,13.869l-11.581,59.598H301.814z M427.011,209.937c-7.78-8.91-20.164-13.363-37.135-13.363h-56.424l-26.178,134.688h29.343l6.957-35.805h25.135 c11.086,0,20.21-1.164,27.371-3.497c7.161-2.329,13.669-6.233,19.528-11.719c4.92-4.521,8.896-9.502,11.943-14.954 c3.044-5.448,5.202-11.461,6.483-18.037C437.137,231.282,434.796,218.846,427.011,209.937z"> </path> </g> </g></svg>
                        </span>
                        <span>
                            <svg fill="white" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="65px" height="65px" viewBox="0 0 548.29 548.291" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M276.043,244.216c-24.575,0-38.741,24.087-38.741,53.862c-0.241,30.228,14.407,53.382,38.5,53.382 c24.323,0,38.512-22.92,38.512-54.091C314.313,268.303,300.604,244.216,276.043,244.216z"></path> <path d="M486.2,196.116h-13.164V132.59c0-0.399-0.064-0.795-0.116-1.2c-0.021-2.52-0.824-4.997-2.551-6.96L364.656,3.677 c-0.031-0.031-0.064-0.044-0.085-0.075c-0.629-0.704-1.364-1.29-2.141-1.796c-0.231-0.154-0.462-0.283-0.704-0.419 c-0.672-0.365-1.386-0.672-2.121-0.893c-0.199-0.052-0.377-0.134-0.576-0.186C358.229,0.118,357.4,0,356.562,0H96.757 C84.893,0,75.256,9.649,75.256,21.502v174.613H62.093c-16.967,0-30.733,13.756-30.733,30.733v159.812 c0,16.961,13.766,30.731,30.733,30.731h13.163V526.79c0,11.854,9.637,21.501,21.501,21.501h354.777 c11.853,0,21.502-9.647,21.502-21.501V417.392H486.2c16.977,0,30.729-13.771,30.729-30.731V226.849 C516.93,209.872,503.177,196.116,486.2,196.116z M96.757,21.502h249.053v110.006c0,5.943,4.818,10.751,10.751,10.751h94.973 v53.861H96.757V21.502z M353.033,376.96l-10.394,27.884c-22.666-6.619-41.565-13.479-62.828-22.445 c-3.527-1.418-7.317-2.132-11.094-2.362c-35.909-2.352-69.449-28.819-69.449-80.778c0-47.711,30.236-83.623,77.71-83.623 c48.675,0,75.351,36.854,75.351,80.317c0,36.142-16.766,61.638-37.785,71.091v0.945 C326.828,371.528,340.519,374.367,353.033,376.96z M72.912,370.116l7.328-29.764c9.69,4.96,24.554,9.915,39.917,9.915 c16.525,0,25.271-6.84,25.271-17.228c0-9.928-7.56-15.597-26.691-22.442c-26.457-9.217-43.696-23.858-43.696-47.014 c0-27.163,22.68-47.948,60.231-47.948c17.954,0,31.184,3.791,40.623,8.03l-8.021,29.061c-6.375-3.076-17.711-7.564-33.3-7.564 c-15.599,0-23.163,7.079-23.163,15.357c0,10.15,8.977,14.646,29.533,22.447c28.108,10.394,41.332,25.023,41.332,47.464 c0,26.699-20.557,49.365-64.253,49.365C99.844,379.785,81.899,375.06,72.912,370.116z M451.534,520.962H96.757v-103.57h354.777 V520.962z M475.387,377.428h-99.455V218.231h36.158v128.97h63.297V377.428z"></path> </g> </g> </g></svg>
                        </span>
                        <span>
                            <svg fill="white" width="65px" height="65px" viewBox="0 0 24 24" role="img" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><title>PrestaShop icon</title><path d="M11.558 1.034C5.174 1.034 0 6.21 0 12.592c0 1.258.201 2.47.574 3.597l.002-.007a12.415 12.415 0 01.53-1.787l.011-.03c.085-.222.179-.442.277-.66l.084-.181c.08-.171.165-.34.253-.507.036-.068.07-.136.108-.203.02-.038.044-.073.064-.11.094-.166.19-.332.29-.493l.075-.114c.125-.195.256-.386.393-.573l.035-.05c.144-.193.295-.38.451-.563l.1-.118c.155-.177.315-.35.481-.517l.099-.097a10.321 10.321 0 01.546-.503c.74-2.48 3.005-4.285 5.686-4.285 1.079 0 2.152.31 3.071.873a6.017 6.017 0 012.211 2.407l.007.015.04.074v.003l.004.002a9.925 9.925 0 011.567 1.198c.04.037.081.071.12.109.002 0 .006.005.007.006l-.002-.006-.001-.004v-.003l.042-.084c.377-2.384 1.43-4.102 2.67-4.102.934 0 1.762.975 2.276 2.476l.005.016.001.002c.145.158.287.331.424.521l.007.01.021.067-.02-.078c-1.542-4.569-5.863-7.857-10.952-7.857zM9.927 5.477C7.586 5.52 5.34 7.132 4.574 9.365l-.012.034a10.14 10.14 0 011.315-.895c2.806-1.656 6.479-1.646 9.278.016-.895-1.653-2.631-2.819-4.5-3.004a5.14 5.14 0 00-.728-.039zm9.834.5a1.36 1.36 0 00-.39.067c-1.265.562-1.719 2.073-2.031 3.303l-.016.072c.365-.62.808-1.215 1.396-1.642.835-.687 2.105-.655 2.916.053.308.326.141.008.031-.22-.342-.75-1.025-1.653-1.906-1.634zM21.67 7.98zm-9.32.335l-1.07 3.27-.002.005-.006.002-4.498 1.112h-.009l4.456 1.087c.105.11.227.205.36.28h.002c.042.024.085.045.129.065l.01.005c.041.018.083.033.126.047l.021.008c.04.013.08.023.12.032l.033.008a1.677 1.677 0 00.318.033 1.546 1.546 0 001.43-.948c.08-.186.123-.39.123-.604v-.011l-.001-.012c-.001-.054-.004-.107-.01-.16l-.001-.002a1.506 1.506 0 00-.026-.153l-.001-.004a1.511 1.511 0 00-.096-.288v-.003a1.521 1.521 0 00-.348-.49v-.003zm3.148.626c.048 1.008.036 2.046-.1 3.057-.17 2.018-1.19 3.798-1.972 5.616l-.03.08-.035.086c1.51-1.522 3.17-3.04 3.969-5.082.383-.636.118-1.342-.115-1.976-.17-.877-1.069-1.278-1.717-1.781zm6.172.572l-.588 2.688a1.764 1.764 0 00-.047.2c-.002.02-.007.04-.01.06a1.76 1.76 0 00-.016.222l-.002.031h.003c0 .628.297 1.136.663 1.137a.41.41 0 00.182-.045l.027-.015a.537.537 0 00.07-.047c.013-.01.024-.022.036-.033a.752.752 0 00.137-.168l.03-.054a1.23 1.23 0 00.052-.108l.017-.04c.02-.053.038-.108.053-.166l.002-.002.001-.003.404-.451-.407-.456v.001l-.02-.063zm-4.381.856c.69 1.716.85 3.707.091 5.43-.49 1.368-1.587 2.463-1.874 3.905.73.115 1.468.176 2.21.186 2.166.029 4.332-.42 6.284-1.365-2.04-2.869-4.121-5.755-6.711-8.156zm-4.948.977a.583.583 0 110 1.166.583.583 0 010-1.166zm9.352.37c.138 0 .249.19.249.426s-.111.426-.249.426c-.137 0-.248-.19-.248-.426 0-.235.11-.426.248-.426zm-4.044.184c-.016.112-.033.209-.05.29l-.006.023c-.01.05-.022.094-.033.128-.48 1.417-1.275 2.52-2.36 3.697-.147.16-.301.32-.459.484a58.883 58.883 0 01-1.196 1.205c-.112.11-.259.261-.425.436-.103.287-.22.61-.318.95-.044-.016-.086-.031-.131-.049-2.108-.815-3.519-1.904-3.519-1.904s1.086 1.414 2.915 2.74c.177.129.351.24.522.339-.075 1.194.452 2.34 2.83 2.682a4.81 4.81 0 001.228.008l-.01-.029a.062.062 0 00-.004-.01s-.167-.133-.379-.377a3.842 3.842 0 01-.584-.897 3.382 3.382 0 01-.266-.862 3.176 3.176 0 01-.006-.972c.017-.12.04-.241.072-.366.093-.374.255-.772.507-1.192l.002-.003.241-.404c1.103-1.86 1.797-3.275 1.506-5.441a8.943 8.943 0 00-.078-.476zm4.668.576l.001.008-.001-.008zm.013.203l.003.036v.01c0 .013-.003.025-.003.038 0-.014.003-.028.003-.043 0-.014-.002-.026-.003-.04zm-.012.275v.001l-.002.01-.002.014.004-.025zm1.353 5.928c-2.553 1.138-5.44 1.44-8.192 1.007-.14 1.108.384 2.218 1.214 2.93l.012.01c2.703-.433 4.975-2.168 6.966-3.946z"></path></g></svg>
                        </span>
                        <span>
                            <svg fill="white" width="65px" height="65px" viewBox="-3 0 24 24" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="m5.701 18.561s-.918.534.653.714c.575.085 1.239.134 1.913.134 1.084 0 2.138-.125 3.149-.363l-.093.018c.374.228.809.445 1.262.624l.059.02c-4.698 2.014-10.633-.117-6.942-1.148z"></path><path d="m5.127 15.933s-1.029.762.542.924c.687.086 1.482.136 2.289.136 1.461 0 2.884-.162 4.252-.468l-.129.024c.275.258.604.463.968.596l.02.006c-5.68 1.661-12.008.131-7.942-1.218z"></path><path d="m9.966 11.475c1.158 1.333-.304 2.532-.304 2.532s2.939-1.52 1.59-3.418c-1.261-1.772-2.228-2.653 3.006-5.688 0 0-8.216 2.052-4.292 6.574z"></path><path d="m16.18 20.505s.678.56-.747.992c-2.712.822-11.287 1.07-13.67.033-.856-.373.75-.89 1.254-.998.232-.059.499-.093.774-.093h.057-.003c-.952-.671-6.155 1.318-2.64 1.886 9.579 1.554 17.462-.7 14.978-1.82z"></path><path d="m6.142 13.21s-4.362 1.036-1.545 1.412c.759.063 1.644.098 2.536.098 1.139 0 2.264-.058 3.372-.171l-.139.012c1.805-.152 3.618-.48 3.618-.48-.425.186-.785.382-1.126.605l.029-.018c-4.43 1.165-12.986.623-10.523-.569 1.086-.563 2.372-.893 3.734-.893h.046-.002z"></path><path d="m13.966 17.585c4.502-2.34 2.421-4.588.967-4.286-.199.037-.372.085-.539.146l.023-.007c.095-.134.226-.237.379-.295l.006-.002c2.874-1.01 5.086 2.981-.928 4.56.037-.033.067-.072.089-.115l.001-.002z"></path><path d="m11.252 0s2.494 2.494-2.366 6.33c-3.896 3.077-.889 4.831 0 6.836-2.274-2.052-3.943-3.858-2.824-5.54 1.644-2.468 6.197-3.664 5.19-7.627z"></path><path d="m6.585 23.925c4.32.277 10.96-.154 11.12-2.198 0 0-.302.775-3.572 1.391-1.806.326-3.885.512-6.008.512-1.739 0-3.448-.125-5.121-.366l.191.023s.553.458 3.393.64z"></path></g></svg>
                        </span>
                     </div>
                </div>
            </div>
        </div>

        <div class="about-container-div">
            <?php include_once("about-us.php") ?>
        </div>
        <div class="resume-container-div">
            <?php include_once("resume.php") ?>
        </div>
        <div class="contact-container-div">
            <?php include_once('contact-us.php')?>
        </div>
        <div class="project-container-div">
            <?php include_once('projects.php') ?>
        </div>

    </section>
    <footer class="container" style="margin-top: 2rem; text-align: center; width: 80%; margin-bottom: 1%;">
        <div>
            <p style="color: #4285f4;">Designed and developed By &copy; 2023 Ashuraj Srivastav</p>
        </div>
    </footer>
    <script src="js/script.js"></script>
</body>
</html>