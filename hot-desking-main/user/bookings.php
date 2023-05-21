<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="../css/hotdesks.css">

	<title>Bookings</title>
</head>
<body>


	<!-- SIDEBAR -->
    <?php require_once "../require/sidebar-user.php"?>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
        <?php require_once "../require/navbar-user.php"?>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Add Bookings</h1>
                    <h3>Schedule your bookings by filling out the details for each reservation and click!</h3>
				</div>
			</div>

			

			<div class="table-data">
				<div class="order">
                    <P>map dito</P>
				</div>
				
			</div>

            <div class="table-data">
				<div class="order">
                <p>ta's dito yung calendar</p>
				</div>
                <div class="todo">
						<!-- <h3>Todos</h3> -->
                    
                    <div id="saved-values">

                    <label for="title"><strong>Title:</strong></label>
                    <input type="text" id="title" name="title">

                    <label for="choice"><strong>Choose a room:</strong></label>
                    <select id="choice" name="choice">
                        <option value=""></option>
                        <option value="Room 1">Room 1</option>
                        <option value="Room 2">Room 2</option>
                        <option value="Room 3">Room 3</option>
                        <option value="Room 4">Room 4</option>
                        <option value="Room 5">Room 5</option>
                        <option value="Room 6">Room 6</option>
                        <option value="Room 7">Room 7</option>
                        <option value="Room 8">Room 8</option>
                    </select>
                    
                    <label for="person-count"><strong>Person Count:</strong></label>
                    <input type="number" id="person-count" name="person-count">
                    
                    <button onclick="saveValues()">Add Booking</button>

                    </div>
                    </div>
                    
				
            </div>    
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	
    <script>
  function saveValues() {

    var title = document.getElementById('title').value;
    var choice = document.getElementById('choice').value;
    var personCount = document.getElementById('person-count').value;
    
    var paragraph = document.createElement('p');
    
    paragraph.innerHTML = "<br><strong>Booking added:<strong><br><pre>Title: " + title + "\nRoom: " + choice + "\nPerson Count: " + personCount + "</pre>";
    
    var savedValuesDiv = document.getElementById('saved-values');
    savedValuesDiv.appendChild(paragraph);
  }
</script>


	<script src="../js/script.js"></script>
</body>

<!-- TO BOOK -->
<style>
  #saved-values {
    margin-top: 20px;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    background-color: #f2f2f2;
  }

  label {
    display: block;
    margin-bottom: 5px;
  }

  input[type="text"],
  input[type="number"],
  select {
    width: 100%;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
    margin-bottom: 10px;
  }

  button {
    padding: 10px 20px;
    background-color: #a22b29;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;

  }

  button:hover {
    background-color: #FF3D31;
  }

  p {
    margin: 0;
    padding: 5px 0;
  }
</style>
</html>