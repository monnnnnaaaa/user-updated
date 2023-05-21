<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="../css/hotdesks.css">

	<title>Hotdesks</title>
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
					<h1>Available Hotdesks</h1>
                    <h3>Check the calendar below to find available hotdesks and secure your ideal workspace!</h3>
				</div>
				<!-- <a href="#" class="btn-download">
					<i class='bx bxs-cloud-download' ></i>
					<span class="text">Download PDF</span>
				</a> -->
			</div>

			

			<div class="table-data">
				<div class="order">
				</div>
				<div class="todo">
					<div class="head">
						<!-- <h3>Todos</h3> -->

					<ul class="todo-list">
						<li class="completed">
                         <div>
                            <i class='bx bx-laptop' > <strong>ROOM 1</strong></i> &nbsp;
                            <p>  Remaining slot: <strong> 1 </strong></p> 
                         </div>

						</li>
						<li class="not-completed">
                         <div>
                            <i class='bx bx-laptop' > <strong>ROOM 2</strong></i> &nbsp;
                            <p> Remaining slot: <strong> 0 </strong> </p> 
                         </div>

						</li>
						<li class="completed">
                         <div>
                            <i class='bx bx-laptop' > <strong>ROOM 3</strong></i> &nbsp;
                            <p> Remaining slot: <strong> 5 </strong> </p> 
                         </div>

						</li>
                        <li class="not-completed">
                         <div>
                            <i class='bx bx-laptop' > <strong>ROOM 4</strong></i> &nbsp;
                            <p> Remaining slot: <strong> 2 </strong> </p> 
                         </div>

						</li>
                    </ul>	
					<ul class="todo-list">
                        
						<li class="completed">
                         <div>
                            <i class='bx bx-laptop' > <strong>ROOM 5</strong></i> &nbsp;
                            <p> Remaining slot: <strong> 1 </strong> </p> 
                         </div>

						</li>
                        <li class="not-completed">
                         <div>
                            <i class='bx bx-laptop' > <strong>ROOM 6</strong></i> &nbsp;
                            <p> Remaining slot: <strong> 3 </strong> </p> 
                         </div>
						</li>
                        <li class="not-completed">
                         <div>
                            <i class='bx bx-laptop' > <strong>ROOM 7</strong></i> &nbsp;
                            <p> Remaining slot: <strong> 3 </strong> </p> 
                         </div>
						</li>
                        <li class="not-completed">
                         <div>
                            <i class='bx bx-laptop' > <strong>ROOM 8</strong></i> &nbsp;
                            <p> Remaining slot: <strong> 3 </strong> </p> 
                         </div>
						</li>


                    </ul>

                    </div>
                    
				</div>
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="../js/script.js"></script>
</body>
</html>