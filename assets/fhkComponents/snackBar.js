/*
    <link rel="stylesheet" href="<?php echo base_url();?>assets/fhkComponents/snackBar.css">
    <script src="<?php echo base_url();?>assets/fhkComponents/snackBar.js" ></script>

	usage
	<button onclick="openSnackBar('snackbar1')">Show Snackbar</button>

	<!-- The actual snackbar -->
	<div class="snackbar" id="snackbar1">Some text some message..</div>
*/

function openSnackBar(id, timer) {

    // Get the snackbar DIV
    var x = document.getElementById(id);

    // Add the "show" class to DIV
    x.className += " show";

    // After 3 seconds, remove the show class from DIV
    setTimeout(function(){ x.className = x.className.replace("show", ""); }, timer);
}