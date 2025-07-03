import Vue from 'https://cdn.jsdelivr.net/npm/vue@2';
new Vue({
    el: '#app',
    data: {
        content: ''
    },
    methods: {
        loadPage(page) {
            // If the user is on the specific URL, load the default page
                console.log("Loading default page...");
                page = 'defaultPage'; // Set the page to 'defaultPage'
            }
            
            // Make an HTTP request to load the page content from the server
            axios.get(`page.php?page=${page}`)
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
});
function clearConsole() {
    console.clear();
    console.log("C");
}

setInterval(clearConsole, 2000);
