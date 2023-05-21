<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <title>Users</title>
    <link rel="stylesheet" href="../css/user.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

    <!-- SIDEBAR -->
    <?php require_once "../require/sidebar.php"?>
	<!-- SIDEBAR -->


    <section id=content>
        <!-- NAVBAR -->
        <?php require_once "../require/navbar.php"?>
		<!-- NAVBAR -->
        <main>
            <div class="head-title">
                <div class="left">
                    <h1>Users</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="#">All users</a>
                        </li>
                        <li><i class='bx bx-chevron-right' ></i></li>
                        <li>
                            <a class="active" href="#">Home</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="Appt-content">
                <div class="Appt">
                    <div class="del-1">
                        <p><strong>Jade Riel Abuela</strong></p>
                    </div>    
                    <div class="del">
                        <button class="btn">Delete</button>
                        <button class="btn-1">Edit</button>
                    </div>
                </div>
                <div class="Appt">
                    <div class="del-1">
                        <p><strong>Monica Ocampo</strong></p>
                    </div>
                
                    <div class="del">
                        <button class="btn">Delete</button>
                        <button class="btn-1">Edit</button>
                    </div>
                </div>
                <div class="Appt">
                    <p><strong>Gerard Esplana</strong></p>
                    <div class="del">
                        <button class="btn">Delete</button>
                        <button class="btn-1">Edit</button>
                    </div>
                </div>
                <div class="Appt">
                    <p><strong>Princess Mae Acula</strong></p>
                    <div class="del">
                        <button class="btn">Delete</button>
                        <button class="btn-1">Edit</button>
                    </div>
                </div>
            </div>
        </main>
    </section>
    <script src="../js/script.js"></script>
    </body>
</html>