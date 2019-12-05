<?php
  require_once("koneksi.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS --> 
  <link rel="stylesheet"href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> <script
  src="jquery.js"></script> 
  <style> 
    .slider-wrapper { 
      width: 100%; 
      height: 100vh; 
      position: relative; 
    }
    .bg {
      width: 100%;
      height: 100%;    
      position: absolute;
      top: 0;
      left: 0;        
      background: url('back2.jpg') no-repeat center center;
      background-size: cover;
      transform: scale(1.1);
    }

    .slide {
      float: left;
      position: absolute;
      width: 100%;
      height: 100%;
      opacity: 0;
      transition: opacity 3s linear;
    }

    .slider-wrapper>.slide:first-child {
      opacity: 1;
    }
    #bagian-1 {
      width: 100%;
      height: 97vh;      
      border: 1px solid black;
      position: absolute;
      z-index: 3;   
      border-radius: 18vh;   
    }
    #content-media{
      margin-top: 75px;
      border: 1px solid black;
      border-radius: 5vh;   
    }
    #content-berita-agenda {
      border: 1px solid black;
      height: 75vh;
      border-radius: 5vh;         
      line-height: 28px;       
    }    
  html {
  box-sizing: border-box;
}
*,
*:before,
*:after {
  box-sizing: inherit;  
}

html,
body {
  height: 100%;  
}

:root {
  --active-indicator-width: 150px;
  --icon-width: 40px;
  --icon-margin-right: 5px;
  --menu-padding-horizontal: 29px;
  --menu-padding-vertical: 15px;
  --active-indicator-extra-length: 10px;
  --space-between-icons: 30px;
}
@media (max-width: 600px) {
  :root {
    --active-indicator-width: 80px;
    --icon-margin-right: 8px;
    --menu-padding-horizontal: 24px;
  }
}

body {  
  display: flex;
  align-items: center;
  justify-content: center;  
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

.nav {  
  background: #fff;
  padding: var(--menu-padding-vertical) var(--menu-padding-horizontal);
  display: flex;
  box-shadow: 0 0 14px 0 rgba(0, 0, 0, 0.1);
  border-radius: 1px;
  position: relative;  
  width: 50%;
  margin-left: 18%;
}

.nav__active-indicator {
  position: absolute;
  top: 50%;
  margin-left: calc(
    var(--menu-padding-horizontal) - var(--active-indicator-extra-length)
  );
  left: 0;
  transform: translateY(-50%);
  width: calc(
    var(--active-indicator-width) + var(--active-indicator-extra-length) * 2
  );
  height: calc(100% - var(--menu-padding-vertical));
  background: #f7c329;
  z-index: 10;
  border-radius: var(--active-indicator-width);
  transition: transform 0.6s cubic-bezier(0.23, 1, 0.32, 1);
}
.nav__item {
  margin-left: var(--space-between-icons);
  position: relative;
  z-index: 20;
} 
.nav__item:first-child {
  margin-left: 0;
}
button {
  padding: 0;
  border: 0;
  display: flex;
  align-items: center;
  cursor: pointer;
  /* width: var(--icon-width);*/
  transition: width 0.3s cubic-bezier(0.215, 0.61, 0.355, 1);
  outline: none;
  position: relative;
  background: transparent;
}
.active {
  width: var(--active-indicator-width);
}
.icon {
  display: block;
  margin-right: var(--icon-margin-right);
  flex-shrink: 0;
  width: var(--icon-width);
  height: var(--icon-width);
}
.icon path {
  fill: #a6adb1;
  transition: fill 0.2s;
}
.active .icon path {
  fill: #000;
}
.text {
  display: block;
  color: rgba(0, 0, 0, 0);
  pointer-events: none;
  font-size: 0;
}
.text:after {
  content: attr(data-title);
  position: absolute;
  top: 0;
  left: 0;
  width: var(--active-indicator-width);
  height: 100%;
  opacity: 0;
  display: flex;
  align-items: center;
  font-size: 28px;
  font-weight: bold;
  color: #000;
  padding-left: calc(var(--icon-width) + var(--icon-margin-right));
  transition: opacity 0s;
}
.slide-right .text:after {
  left: 0;
  right: auto;
}
.slide-left .text:after {
  right: 0;
  left: auto;
}
.active .text:after {
  opacity: 1;
  transition: opacity 0.4s;
}
</style>
  <title>Media Massa</title>
</head>
<body>
  <div class="wrap">
    <div class="bg"></div>    
  </div>
  <div class="container" id="bagian-1">
    <div class="row">
      <div class="col-md-8">
        <!-- #943434-->
          <div class="nav">
            <div class="nav__item" onclick="pilihacara(1)">
              <button class="active">
                  <svg viewBox="0 0 90 90" width="45px" height="45px"><path fill="#78a0cf" d="M13 27A2 2 0 1 0 13 31A2 2 0 1 0 13 27Z"/><path fill="#f1bc19" d="M77 12A1 1 0 1 0 77 14A1 1 0 1 0 77 12Z"/><path fill="#cee1f4" d="M50 13A37 37 0 1 0 50 87A37 37 0 1 0 50 13Z"/><path fill="#f1bc19" d="M83 11A4 4 0 1 0 83 19A4 4 0 1 0 83 11Z"/><path fill="#78a0cf" d="M87 22A2 2 0 1 0 87 26A2 2 0 1 0 87 22Z"/><path fill="#fbcd59" d="M81 74A2 2 0 1 0 81 78 2 2 0 1 0 81 74zM15 59A4 4 0 1 0 15 67 4 4 0 1 0 15 59z"/><path fill="#78a0cf" d="M25 85A2 2 0 1 0 25 89A2 2 0 1 0 25 85Z"/><path fill="#fff" d="M18.5 51A2.5 2.5 0 1 0 18.5 56A2.5 2.5 0 1 0 18.5 51Z"/><path fill="#f1bc19" d="M21 66A1 1 0 1 0 21 68A1 1 0 1 0 21 66Z"/><path fill="#fff" d="M80 33A1 1 0 1 0 80 35A1 1 0 1 0 80 33Z"/><path fill="#fdfcee" d="M73.583,29.899c0.148-5.448-5.917-5.17-5.917-5.17l-31.44,0.084c-2.405,0-4.393,2.384-4.393,4.6 l-0.042,27.171l-6,0.012c0,1.645,0.022,13.473,0.042,13.683c0.404,4.354,5.331,3.947,5.331,3.947l36.086,0.037 c1.948,0.19,3-2.172,3-3.525s0-40.752,0-40.752L73.583,29.899z"/><path fill="#472b29" d="M67.47,75c-0.095,0.001-0.19-0.004-0.286-0.013l-36.021-0.033 c-1.893,0.147-5.656-0.599-6.027-4.605c-0.028-0.296-0.045-13.621-0.045-13.754c0-0.401,0.313-0.727,0.699-0.728l5.303-0.01 l0.041-26.446c0-2.514,2.178-5.327,5.093-5.327l31.438-0.083c0.108,0.002,3.256-0.126,5.185,1.847 c0.997,1.02,1.479,2.39,1.434,4.071c-0.01,0.387-0.31,0.697-0.682,0.707l-2.651,0.068v40.043c0,0.983-0.456,2.473-1.457,3.419 C68.907,74.712,68.212,75,67.47,75z M31.109,73.5l36.142,0.035c0.527,0.049,0.928-0.101,1.301-0.454 c0.649-0.613,0.999-1.665,0.999-2.343V29.985c0-0.395,0.303-0.718,0.683-0.728l2.63-0.068c-0.087-0.943-0.421-1.716-0.995-2.304 c-1.5-1.533-4.142-1.427-4.17-1.43L36.229,25.54c-2.048,0-3.695,2.118-3.695,3.873l-0.042,27.172 c-0.001,0.401-0.313,0.726-0.699,0.727l-5.301,0.01c0.003,3.077,0.023,12.505,0.04,12.913 C26.864,73.809,30.939,73.521,31.109,73.5z"/><path fill="#fef6aa" d="M32.708 57.058l-6.248-.016c-.005.208.003 11.963.023 12.15.28 3.897 5.121 3.371 6.225 3.35V57.058zM47.5 45.5L47.5 55.5 36.5 55.5 36.5 43.5 45.5 43.5"/><path fill="#472b29" d="M47.75,55.75h-11.5v-12.5h9.25c0.138,0,0.25,0.112,0.25,0.25s-0.112,0.25-0.25,0.25h-8.75v11.5h10.5 V45.5c0-0.138,0.112-0.25,0.25-0.25s0.25,0.112,0.25,0.25V55.75z"/><path fill="#fef6aa" d="M54.5 67.5L54.5 58.5 65.5 58.5 65.5 68.5 57.5 68.5"/><path fill="#472b29" d="M65.75 68.75H57.5c-.138 0-.25-.112-.25-.25s.112-.25.25-.25h7.75v-9.5h-10.5v8.75c0 .138-.112.25-.25.25s-.25-.112-.25-.25v-9.25h11.5V68.75zM29.791 70.7c-.348 0-.649-.259-.694-.613-.048-.384.224-.733.608-.781.905-.113 1.429-.404 1.429-1.556V54.917c0-.387.313-.7.7-.7s.7.313.7.7V67.75c0 1.191-.461 2.67-2.655 2.944C29.849 70.698 29.819 70.7 29.791 70.7zM70.5 31.533H51.25c-.387 0-.7-.313-.7-.7s.313-.7.7-.7H70.5c.387 0 .7.313.7.7S70.887 31.533 70.5 31.533z"/><g><path fill="#472b29" d="M47.5,35.917H36.583c-0.138,0-0.25-0.112-0.25-0.25s0.112-0.25,0.25-0.25H47.5 c0.138,0,0.25,0.112,0.25,0.25S47.638,35.917,47.5,35.917z"/></g><g><path fill="#472b29" d="M43.5,39.75h-7c-0.138,0-0.25-0.112-0.25-0.25s0.112-0.25,0.25-0.25h7c0.138,0,0.25,0.112,0.25,0.25 S43.638,39.75,43.5,39.75z"/></g><g><path fill="#472b29" d="M57.5,35.917h-6.917c-0.138,0-0.25-0.112-0.25-0.25s0.112-0.25,0.25-0.25H57.5 c0.138,0,0.25,0.112,0.25,0.25S57.638,35.917,57.5,35.917z"/></g><g><path fill="#472b29" d="M65.5,35.917h-5c-0.138,0-0.25-0.112-0.25-0.25s0.112-0.25,0.25-0.25h5 c0.138,0,0.25,0.112,0.25,0.25S65.638,35.917,65.5,35.917z"/></g><g><path fill="#472b29" d="M65.5,39.75h-20c-0.138,0-0.25-0.112-0.25-0.25s0.112-0.25,0.25-0.25h20 c0.138,0,0.25,0.112,0.25,0.25S65.638,39.75,65.5,39.75z"/></g><g><path fill="#472b29" d="M65.5,43.75h-15c-0.138,0-0.25-0.112-0.25-0.25s0.112-0.25,0.25-0.25h15 c0.138,0,0.25,0.112,0.25,0.25S65.638,43.75,65.5,43.75z"/></g><g><path fill="#472b29" d="M65.5,47.75h-15c-0.138,0-0.25-0.112-0.25-0.25s0.112-0.25,0.25-0.25h15 c0.138,0,0.25,0.112,0.25,0.25S65.638,47.75,65.5,47.75z"/></g><g><path fill="#472b29" d="M65.5,51.75h-15c-0.138,0-0.25-0.112-0.25-0.25s0.112-0.25,0.25-0.25h15 c0.138,0,0.25,0.112,0.25,0.25S65.638,51.75,65.5,51.75z"/></g><g><path fill="#472b29" d="M65.5,55.75h-15c-0.138,0-0.25-0.112-0.25-0.25s0.112-0.25,0.25-0.25h15 c0.138,0,0.25,0.112,0.25,0.25S65.638,55.75,65.5,55.75z"/></g><g><path fill="#472b29" d="M51.5,59.75h-15c-0.138,0-0.25-0.112-0.25-0.25s0.112-0.25,0.25-0.25h15 c0.138,0,0.25,0.112,0.25,0.25S51.638,59.75,51.5,59.75z"/></g><g><path fill="#472b29" d="M51.5,63.75h-15c-0.138,0-0.25-0.112-0.25-0.25s0.112-0.25,0.25-0.25h15 c0.138,0,0.25,0.112,0.25,0.25S51.638,63.75,51.5,63.75z"/></g><g><path fill="#472b29" d="M51.5,67.75h-15c-0.138,0-0.25-0.112-0.25-0.25s0.112-0.25,0.25-0.25h15 c0.138,0,0.25,0.112,0.25,0.25S51.638,67.75,51.5,67.75z"/></g><g><path fill="#472b29" d="M47.417,31.533h-5.5c-0.387,0-0.7-0.313-0.7-0.7s0.313-0.7,0.7-0.7h5.5c0.387,0,0.7,0.313,0.7,0.7 S47.803,31.533,47.417,31.533z"/></g></svg>
                  <span class="text" data-title="Berita">Berita</span>
                </button>
            </div>
            <div class="nav__item" onclick="pilihacara(2)">
              <button>
                  <svg viewBox="0 0 64 64" width="45px" height="45px">
                     <radialGradient id="K5OhGzQ9HIHeAh80mMQCJa" cx="30.167" cy="32.573" r="40.161" gradientUnits="userSpaceOnUse" spreadMethod="reflect"><stop offset="0" stop-color="#afeeff"/><stop offset=".193" stop-color="#bbf1ff"/><stop offset=".703" stop-color="#d7f8ff"/><stop offset="1" stop-color="#e1faff"/></radialGradient><path fill="url(#K5OhGzQ9HIHeAh80mMQCJa)" d="M59,31h1.302c1.896,0,3.595-1.355,3.693-3.248c0.105-2.018-1.501-3.687-3.495-3.687l-2.402,0 c-0.982,0-1.892-0.664-2.065-1.631C56.011,22.308,56,22.183,56,22.061c0.002-1.084,0.867-1.966,1.944-1.995 c1.511-0.041,2.864-1.146,3.035-2.649c0.014-0.12,0.02-0.238,0.02-0.355c-0.001-1.655-1.344-2.997-3-2.997h-2.302 c-0.216,0-2.431-0.019-2.64-0.054C53.039,14.007,53.019,14.004,53,14v0.065V23H32v-9h12.858c0.218-0.844,0.268-1.755-0.473-2.86 C43.466,9.769,41.873,9,40.223,9L35.5,9C34.672,9,34,8.328,34,7.5C34,6.672,34.672,6,35.5,6l0.331,0 c1.625,0,3.08-1.217,3.165-2.839C39.086,1.43,37.711,0,36,0L7.169,0c-1.625,0-3.08,1.217-3.165,2.839C3.914,4.569,5.289,6,7,6h7.5 C15.328,6,16,6.672,16,7.5C16,8.328,15.328,9,14.5,9H6c-2.209,0-4,1.791-4,4l0,0v0c0,2.209,1.791,4,4,4h13v6h-7l1,10.554 c-0.536,0.401-0.917,0.99-0.987,1.688c-0.092,0.921,0.318,1.75,0.987,2.253v2.522c-0.014,0.074-0.021,0.149-0.013,0.225 C13.137,41.739,11.966,43,10.5,43l-7.33,0c-1.493,0-2.88,1.011-3.126,2.483c-0.122,0.731,0.022,1.423,0.343,2.005 C0.923,48.458,2.004,49,3.112,49h1.581c1.188,0,2.104,0.664,2.275,1.635C6.989,50.758,7,50.878,7,50.997 C7.001,52.103,6.106,53,5.001,53H5c-1.135,0-2.236,0.602-2.699,1.638C1.311,56.852,2.905,59,5,59h31c1.657,0,3-1.343,3-3v0 c0-1.657-1.343-3-3-3h-5V43l23,0h4.83c1.57,0,3.084-1.206,3.165-2.774c0.09-1.73-1.286-3.161-2.996-3.161h-0.013 c-0.006,0-0.011,0-0.017,0c-0.777,0-1.539-0.254-2.078-0.768c-0.17-0.162-0.318-0.35-0.438-0.564C55.166,33.414,56.809,31,59,31z"/><radialGradient id="K5OhGzQ9HIHeAh80mMQCJb" cx="30.167" cy="39.333" r="41.484" gradientUnits="userSpaceOnUse" spreadMethod="reflect"><stop offset="0" stop-color="#afeeff"/><stop offset=".193" stop-color="#bbf1ff"/><stop offset=".703" stop-color="#d7f8ff"/><stop offset="1" stop-color="#e1faff"/></radialGradient><path fill="url(#K5OhGzQ9HIHeAh80mMQCJb)" d="M4.5,40C5.881,40,7,38.881,7,37.5C7,36.119,5.881,35,4.5,35S2,36.119,2,37.5 C2,38.881,3.119,40,4.5,40z"/><linearGradient id="K5OhGzQ9HIHeAh80mMQCJc" x1="32" x2="32" y1="55" y2="20" gradientUnits="userSpaceOnUse" spreadMethod="reflect"><stop offset="0" stop-color="#ffc662"/><stop offset=".004" stop-color="#ffc662"/><stop offset=".609" stop-color="#ffc582"/><stop offset="1" stop-color="#ffc491"/><stop offset="1" stop-color="#ffc491"/></linearGradient><path fill="url(#K5OhGzQ9HIHeAh80mMQCJc)" d="M9,50V20h46v30c0,2.761-2.239,5-5,5H14C11.239,55,9,52.761,9,50z"/><linearGradient id="K5OhGzQ9HIHeAh80mMQCJd" x1="32" x2="32" y1="23" y2="10" gradientUnits="userSpaceOnUse" spreadMethod="reflect"><stop offset="0" stop-color="#ff634d"/><stop offset=".208" stop-color="#fd6464"/><stop offset=".522" stop-color="#fc6582"/><stop offset=".793" stop-color="#fa6694"/><stop offset=".989" stop-color="#fa669a"/><stop offset="1" stop-color="#fa669a"/></linearGradient><path fill="url(#K5OhGzQ9HIHeAh80mMQCJd)" d="M55,14.8V23H9v-8.2c0-2.653,2.166-4.8,4.842-4.8h36.316C52.834,10,55,12.147,55,14.8"/><linearGradient id="K5OhGzQ9HIHeAh80mMQCJe" x1="21.5" x2="21.5" y1="20" y2="10" gradientUnits="userSpaceOnUse" spreadMethod="reflect"><stop offset="0" stop-color="#ff5840"/><stop offset=".007" stop-color="#ff5840"/><stop offset=".989" stop-color="#fa528c"/><stop offset="1" stop-color="#fa528c"/></linearGradient><path fill="url(#K5OhGzQ9HIHeAh80mMQCJe)" d="M24.655,10h-6.311C16.928,10.995,16,12.638,16,14.5c0,3.036,2.464,5.5,5.5,5.5 s5.5-2.464,5.5-5.5C27,12.638,26.072,10.995,24.655,10z"/><linearGradient id="K5OhGzQ9HIHeAh80mMQCJf" x1="21.5" x2="21.5" y1="6" y2="17" gradientUnits="userSpaceOnUse" spreadMethod="reflect"><stop offset="0" stop-color="#a4a4a4"/><stop offset=".63" stop-color="#7f7f7f"/><stop offset="1" stop-color="#6f6f6f"/><stop offset="1" stop-color="#6f6f6f"/></linearGradient><path fill="url(#K5OhGzQ9HIHeAh80mMQCJf)" d="M21.5,17L21.5,17c-1.375,0-2.5-1.125-2.5-2.5v-6C19,7.125,20.125,6,21.5,6h0 C22.875,6,24,7.125,24,8.5v6C24,15.875,22.875,17,21.5,17z"/><linearGradient id="K5OhGzQ9HIHeAh80mMQCJg" x1="42.5" x2="42.5" y1="20" y2="10" gradientUnits="userSpaceOnUse" spreadMethod="reflect"><stop offset="0" stop-color="#ff5840"/><stop offset=".007" stop-color="#ff5840"/><stop offset=".989" stop-color="#fa528c"/><stop offset="1" stop-color="#fa528c"/></linearGradient><path fill="url(#K5OhGzQ9HIHeAh80mMQCJg)" d="M45.655,10h-6.311C37.928,10.995,37,12.638,37,14.5c0,3.036,2.464,5.5,5.5,5.5 s5.5-2.464,5.5-5.5C48,12.638,47.072,10.995,45.655,10z"/><linearGradient id="K5OhGzQ9HIHeAh80mMQCJh" x1="42.5" x2="42.5" y1="6" y2="17" gradientUnits="userSpaceOnUse" spreadMethod="reflect"><stop offset="0" stop-color="#a4a4a4"/><stop offset=".63" stop-color="#7f7f7f"/><stop offset="1" stop-color="#6f6f6f"/><stop offset="1" stop-color="#6f6f6f"/></linearGradient><path fill="url(#K5OhGzQ9HIHeAh80mMQCJh)" d="M42.5,17L42.5,17c-1.375,0-2.5-1.125-2.5-2.5v-6C40,7.125,41.125,6,42.5,6h0 C43.875,6,45,7.125,45,8.5v6C45,15.875,43.875,17,42.5,17z"/><path fill="#ffb86a" d="M39,42.498c0,1.381,1.121,2.5,2.502,2.498l0.503-0.001C43.108,44.999,44,45.895,44,46.998V47 c0,1.105-0.895,2-2,2h-3c-1.657,0-3,1.343-3,3v0c0,1.657,1.343,3,3,3h11c2.761,0,5-2.239,5-5V39.994L41.497,40 C40.118,40,39,41.119,39,42.498L39,42.498z"/><linearGradient id="K5OhGzQ9HIHeAh80mMQCJi" x1="17.5" x2="17.5" y1="54.125" y2="21.871" gradientUnits="userSpaceOnUse" spreadMethod="reflect"><stop offset="0" stop-color="#ffce76"/><stop offset=".004" stop-color="#ffce76"/><stop offset=".605" stop-color="#ffcd92"/><stop offset="1" stop-color="#ffcca0"/><stop offset="1" stop-color="#ffcca0"/></linearGradient><path fill="url(#K5OhGzQ9HIHeAh80mMQCJi)" d="M9,34h8.893c0.996,0,1.92-0.681,2.08-1.664C20.176,31.083,19.215,30,18,30h-1.5 c-0.828,0-1.5-0.672-1.5-1.5s0.672-1.5,1.5-1.5h7.393c0.996,0,1.92-0.681,2.08-1.664C26.176,24.083,25.215,23,24,23H9V34z"/><path fill="#ffb977" d="M46 28A3 3 0 1 0 46 34A3 3 0 1 0 46 28Z"/><linearGradient id="K5OhGzQ9HIHeAh80mMQCJj" x1="32" x2="32" y1="48" y2="29" gradientUnits="userSpaceOnUse" spreadMethod="reflect"><stop offset="0" stop-color="#ffe79f"/><stop offset=".119" stop-color="#ffe9a6"/><stop offset="1" stop-color="#fff5d5"/></linearGradient><path fill="url(#K5OhGzQ9HIHeAh80mMQCJj)" d="M20.429,29h2.143C23.36,29,24,29.64,24,30.429v2.143C24,33.36,23.36,34,22.571,34h-2.143 C19.64,34,19,33.36,19,32.571v-2.143C19,29.64,19.64,29,20.429,29z M20.429,36h2.143C23.36,36,24,36.64,24,37.429v2.143 C24,40.36,23.36,41,22.571,41h-2.143C19.64,41,19,40.36,19,39.571v-2.143C19,36.64,19.64,36,20.429,36z M20.429,43h2.143 C23.36,43,24,43.64,24,44.429v2.143C24,47.36,23.36,48,22.571,48h-2.143C19.64,48,19,47.36,19,46.571v-2.143 C19,43.64,19.64,43,20.429,43z M27.429,29h2.143C30.36,29,31,29.64,31,30.429v2.143C31,33.36,30.36,34,29.571,34h-2.143 C26.64,34,26,33.36,26,32.571v-2.143C26,29.64,26.64,29,27.429,29z M27.429,36h2.143C30.36,36,31,36.64,31,37.429v2.143 C31,40.36,30.36,41,29.571,41h-2.143C26.64,41,26,40.36,26,39.571v-2.143C26,36.64,26.64,36,27.429,36z M27.429,43h2.143 C30.36,43,31,43.64,31,44.429v2.143C31,47.36,30.36,48,29.571,48h-2.143C26.64,48,26,47.36,26,46.571v-2.143 C26,43.64,26.64,43,27.429,43z M34.429,29h2.143C37.36,29,38,29.64,38,30.429v2.143C38,33.36,37.36,34,36.571,34h-2.143 C33.64,34,33,33.36,33,32.571v-2.143C33,29.64,33.64,29,34.429,29z M34.429,36h2.143C37.36,36,38,36.64,38,37.429v2.143 C38,40.36,37.36,41,36.571,41h-2.143C33.64,41,33,40.36,33,39.571v-2.143C33,36.64,33.64,36,34.429,36z M34.429,43h2.143 C37.36,43,38,43.64,38,44.429v2.143C38,47.36,37.36,48,36.571,48h-2.143C33.64,48,33,47.36,33,46.571v-2.143 C33,43.64,33.64,43,34.429,43z M41.429,29h2.143C44.36,29,45,29.64,45,30.429v2.143C45,33.36,44.36,34,43.571,34h-2.143 C40.64,34,40,33.36,40,32.571v-2.143C40,29.64,40.64,29,41.429,29z M41.429,36h2.143C44.36,36,45,36.64,45,37.429v2.143 C45,40.36,44.36,41,43.571,41h-2.143C40.64,41,40,40.36,40,39.571v-2.143C40,36.64,40.64,36,41.429,36z M41.429,43h2.143 C44.36,43,45,43.64,45,44.429v2.143C45,47.36,44.36,48,43.571,48h-2.143C40.64,48,40,47.36,40,46.571v-2.143 C40,43.64,40.64,43,41.429,43z"/>
                  </svg>
                  <span class="text" data-title="Agenda">Agenda</span>
                </button>
            </div>
          <div class="nav__active-indicator"></div>
          </div>
        <div id="content-berita-agenda" class="col-md-12">

        </div>
      </div>
      <div class="col-md-4">
        <div id="content-media">
          <h1>MEDIA MASSA</h1>
          <?php
            $query = mysqli_query($conn, "SELECT acara.id_acara, acara.judul , acara.deskripsi , acara.kategori , acara.jurusan FROM acara WHERE kategori ='2'");
            while ($row = mysqli_fetch_array($query)) {
              echo "<div id='isi'>
                <a href='detailberita.php?id=" . $row['id_acara'] . "'>".$row['judul']."</a><p>".substr($row['deskripsi'],0,32)."</p></div>";              
            }
          ?>
        </div>
      </div>
    </div>
  </div>  
</body>
</html>
  
<script>
  const nav = document.querySelector(".nav");
  const navActiveIndicator = document.querySelector(".nav__active-indicator");
  const buttons = document.querySelectorAll("button");
  let activeButton = document.querySelector(".active");

  setIndexKey(buttons);

  buttons.forEach(button => {
    button.addEventListener("click", buttonClick);
  }); 

  function setIndexKey(arrayOfElements) {
    arrayOfElements.forEach((element, index) => {
      element.index = index;
    });
  }

  function buttonClick() {
    // Position the text so that it appears to not move with the button width growth
    if (this.index > activeButton.index) {
      nav.classList.remove("slide-right");
      nav.classList.add("slide-left");
    } else {
      nav.classList.remove("slide-left");
      nav.classList.add("slide-right");
    }

    // Animate the active indicator position
    const iconWidth = parseInt(
      getComputedStyle(document.documentElement).getPropertyValue("--icon-width")
    );
    const spaceBetweenIcons = parseInt(
      getComputedStyle(document.documentElement).getPropertyValue(
        "--space-between-icons"
      )
    );
    navActiveIndicator.style.transform = `translateX(${(iconWidth +
      spaceBetweenIcons) *
      this.index}px) translateY(-50%)`;

    // Update the active button
    if (activeButton) activeButton.classList.remove("active");
    this.classList.add("active");
    activeButton = this;
  }
  function pilihacara(ind){    
    $.post("ajax_media.php",{mode: "media",t1: ind},
            function(result){    
              $("#content-berita-agenda").html(result);
            }
    );
  }
</script>
<script>
  var lFollowX = 0,
    lFollowY = 0,
    x = 0,
    y = 0,
    friction = 1 / 30;

function moveBackground() {
  x += (lFollowX - x) * friction;
  y += (lFollowY - y) * friction;
  
  translate = 'translate(' + x + 'px, ' + y + 'px) scale(1.1)';

  $('.bg').css({
    '-webit-transform': translate,
    '-moz-transform': translate,
    'transform': translate
  });

  window.requestAnimationFrame(moveBackground);
}

$(window).on('mousemove click', function(e) {

  var lMouseX = Math.max(-100, Math.min(100, $(window).width() / 2 - e.clientX));
  var lMouseY = Math.max(-100, Math.min(100, $(window).height() / 2 - e.clientY));
  lFollowX = (20 * lMouseX) / 100; // 100 : 12 = lMouxeX : lFollow
  lFollowY = (10 * lMouseY) / 100;

});

moveBackground();
</script>