$(document).ready(function() {

$("#response").hide();

$("#salesform").on("submit", function(e) {
    e.preventDefault();

	$.ajax({
		url:  "enter.php",
		type: "POST",
		data: $(this).serialize(),
		success: function(html) {
            $("#sales").hide();
            $("#response").show();
            console.log(html);
        },
        error: function (jqXHR, status, err) {
            alert("Error!");
        }
        // --- data: $(this).serialize(), ---
        // takes the form data and puts all of it into a single string
        // that the PHP script can read - requires a unique
        // NAME attribute for every form element
    });
});

}); // close document ready
