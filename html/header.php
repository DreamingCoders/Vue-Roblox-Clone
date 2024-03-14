<?php
$isHeader = true;
$oldLanding = true;

$vueCode = "new Vue({
    el: '#app',
    data: {
        content: ''
    },
    methods: {
        loadPage(page) {
            // If the user is on the specific URL, load the default page
            if (window.location.href === 'https://localhost/index.php') {
                console.log(\"Loading default page...\");
                page = 'defaultPage'; // Set the page to 'defaultPage'
            }
            
            // Make an HTTP request to load the page content from the server
            axios.get(`page.php?page=\${page}`)
                .then(response => {
                    this.content = response.data;
                })
                .catch(error => {
                    console.error('Error loading page:', error);
                });
        }
    },
    mounted() {
        // Load the default page when Vue instance is mounted
        this.loadPage('defaultPage');
    }
});";

include('../core/config.php'); // This needs to be fixed.
$siteName = "One Page App";
// just include all of this on a config page so page can get referenced it.
?>
<!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light" style="margin-top: -30px !important">
            <div class="container">
                <a class="navbar-brand" href="#">One Page App</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                            <a class="nav-link" id="notstart" href="#" @click="loadPage('defaultPage')">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="notstart" href="#" @click="loadPage('games')">Games</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="notstart" href="#" @click="loadPage('forum')">Forums</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" id="notstart" href="#" @click="loadPage('login')">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="notstart" href="#" @click="loadPage('register')">Register</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    <div class="alert alert-danger text-center text-white">
        Alert! One Page App is still in the development stages!
    </div>
