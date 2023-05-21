<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="../css/userUI.css">

	<title>User Dashboard</title>
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
					<h1>Dashboard</h1>
				</div>
				<!-- <a href="#" class="btn-download">
					<i class='bx bxs-cloud-download' ></i>
					<span class="text">Download PDF</span>
				</a> -->
			</div>

			<ul class="box-info">
				<li>
					<i class='bx bxs-book-content' ></i>
					<span class="text">
						<h3>Welcome Back, [Jade!]</h3>
						<p>Your personal space awaits, where productivity and connection converge.</p>
					</span>		
				</li>
			</ul>

			


			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Recent Bookings</h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<table>
						<thead>
							<tr>
								<th>Date</th>
								<th>Desk</th>
								<th>Time</th>
								<th>Status</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>12-10-2022</td>
								<td>Desk 01</td>
								<td>09:00 AM - 05:00 PM</td>
								<td><span class="status completed">Completed</span></td>
							</tr>
							<tr>
						     	<td>02-15-2023</td>
								<td>Desk 07</td>
								<td>02:30 PM - 10:30 PM</td>
								<td><span class="status pending">Pending</span></td>
							</tr>
							<tr>
						     	<td>0-10-2021</td>
								<td>Desk 09</td>
								<td>09:00 AM - 05:00 PM</td>
								<td><span class="status process">Process</span></td>
							</tr>
							<tr>
							    <td>01-10-2021</td>
								<td>Desk 01</td>
								<td>09:00 AM - 05:00 PM</td>
								<td><span class="status pending">Pending</span></td>
							</tr>
							<tr>
							    <td>01-10-2021</td>
								<td>Desk 01</td>
								<td>09:00 AM - 05:00 PM</td>
								<td><span class="status completed">Completed</span></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="todo">
					<div class="head">
						<h3>Todos</h3>
						<i class='bx bx-plus' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<ul class="todo-list">
						<li class="completed">
							<p class="editable" contenteditable="true" onclick="clearText(this)">Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="completed">
							<p class="editable" contenteditable="true" onclick="clearText(this)">Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="not-completed">
							<p class="editable" contenteditable="true" onclick="clearText(this)">Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="completed">
							<p class="editable" contenteditable="true" onclick="clearText(this)">Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="not-completed">
							<p class="editable" contenteditable="true" onclick="clearText(this)">Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
					</ul>
				</div>
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->

	<script>
	function clearText(element) {
    element.innerText = '';}

		$(document).ready(function() {
        $('.todo-list li p').on('blur', function() {
        var updatedText = $(this).text();
        $(this).html(updatedText);
    });
});


	</script>
	

	<script src="../js/script.js"></script>
</body>
<style>
.editable {
    outline: none;
    border: none;
    padding: 0;
}

</style>
</html>