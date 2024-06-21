
    
    // Function to display a popup with the error message
    function showErrorPopup() {
        // Check if an error message is present in the URL
        var urlParams = new URLSearchParams(window.location.search);
        var error = urlParams.get('error');
        if (error) {
            // Display the error message in a popup
            alert(error);
        }
    }