<!DOCTYPE html>
<html>
<head>
	<title>Pure js multiselect demo</title>

	<link href="styles/multiselect.css" rel="stylesheet"/>
	<script src="multiselect.min.js"></script>
	<!-- <style>
		/* example of setting the width for multiselect */
		#testSelect1_multiSelect {
			width: 200px;
		}
	</style> -->
</head>
<body>
<select id='testSelect1' multiple>
	<?php
        include "db.php";  // Using database connection file here
          
         $sql = "select cityname from city_list";
         $result = $conn->prepare($sql);
         $result->execute();
                                      
         while($row = $result->fetch())
         {
	?>
	 <option value='<?php echo  $row['cityname'] ?>'><?php echo $row['cityname'] ?> </option>
                  <?php } ?>
	
</select>

<div>
	<button onclick="enable()">Enable</button>
	<button onclick="disable()">Disable</button>
</div>

<script>
	document.multiselect('#testSelect1')
		.setCheckBoxClick("checkboxAll", function(target, args) {
			console.log("Checkbox 'Select All' was clicked and got value ", args.checked);
		})
		.setCheckBoxClick("1", function(target, args) {
			console.log("Checkbox for item with value '1' was clicked and got value ", args.checked);
		});

	function enable() {
		document.multiselect('#testSelect1').setIsEnabled(true);
	}

	function disable() {
		document.multiselect('#testSelect1').setIsEnabled(false);
	}
</script>
</body>
</html>