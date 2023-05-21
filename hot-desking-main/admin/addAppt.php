<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Appointments</title>
    <link rel="stylesheet" href="../css/Appt.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="container">
        <!-- SIDEBAR -->
        <?php require_once "../require/sidebar.php"?>
        <!-- SIDEBAR -->

        <section id="content">
            <!-- NAVBAR -->
            <?php require_once "../require/navbar.php"?>
            <!-- NAVBAR -->

            <main class="main-content">
                <div class="content">
                    <div class="setup">
                        <h1>Set Appointments</h1>
                        <form>
                            <div class="form-group">
                                <label for="Seat">Seat</label>
                                <input type="text" id="Seat" name="Seat">
                            </div>
                            <div class="form-group">
                                <label for="Date">Date</label>
                                <input type="text" id="Date" name="Date">
                            </div>
                            <div class="form-group">
                                <label for="TimeIn">Time in</label>
                                <input type="text" id="TimeIn" name="TimeIn">
                            </div>
                            <div class="form-group">
                                <label for="TimeOut">Time out</label>
                                <input type="text" id="TimeOut" name="TimeOut">
                            </div>
                            <button class="btn" type="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </main>
        </section>
    </div>
</body>
</html>
