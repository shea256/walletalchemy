<?php
if (isset($_POST['submitButton'])) {
	// do something with the posted data
	header('Location: submitOk.html', true, 303);
} else {
	header('Location: submitOk.html', true, 303);
}
?>