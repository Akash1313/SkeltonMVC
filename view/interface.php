<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="../controller/js/controller.js"></script>
</head>
<body>
<h2>Skelton MVC</h2>
<p> Hi this example will teach you how to get started with MVC and understand its workflow </p>

<br>
<h4>The work Flow:</h4>
<br>

<ol> 
<li>User clicks "click me :)" button  on interface.php (view)</li>
<li> The controller.js passes the data to controller.php using POST (and display the returned data)</li>
<li>Controller.php calls the function in Sql_function.php(model) based upon the operation value</li>
<li>Sql_function.php calls the function in db.php(database)</li>
<li>Returned data gets displayed in interface.php</li>
</ol>
<button id="btn">Click me :) </button>
<div><p>The data from database will display below: </p></div>
<div id="data"></div>

</body>
</html>
