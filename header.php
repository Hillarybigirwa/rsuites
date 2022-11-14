<?php
session_start();
error_reporting(0);
include_once 'rstylers.php';
?>
<!--NavBar arrangements for Rsuites-->
<header class ="header_wrapper">
<nav class="navbar navbar-expand-lg navabar-light bg-light">
    <div class="container-fluid">
       
        <a class="navbar-brand" href="#rsuites"><img class="img-fluid" src="images">RwamparaSuites</a>
        <button class="navbar-toggler" type="button" data-bs-toggler="collapse"
        data-bs-target ="#navbarNav" aria-expanded="Toggle navigation">
<span class="navbar-toggler-icon"></span> Click me
        </button>
    <ul class="navbar-nav">
        <li class="nav-item"><a  class="nav-link"href="#home">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="#home">Services</a></li>
        <li class="nav-item"><a class="nav-link" href="#home">About Us</a></li>
        <li class="nav-item"><a class="nav-link" href="#home">Accomodation</a></li>
        <li class="nav-item"><a class="nav-link" href="#home">Bar</a></li>
        <li class="nav-item"><a class="nav-link" href="#home">Restaurant</a></li>
    </ul>
    </div>
</nav>
</header>