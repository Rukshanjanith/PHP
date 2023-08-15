<!DOCTYPE html>
<html lang="en">
<head>
<title>Helth Care </title>
        
        <link rel="stylesheet" type="text/css" href="homecss.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <?php
        if(isset($_POST['patient'])){
            header("Location:PDetail.php");
        }
        if(isset($_POST['room'])){
            header("Location:room_availability.php");
        }
        if(isset($_POST['staff'])){
            header("Location:staff.php");
        }
        if(isset($_POST['operating'])){
            header("Location:operating_room_schedules.php");
        }
        if(isset($_POST['invoices'])){
            header("Location:patient_invoices.php");
        }
        
    
    ?>
            <div class="col text-center">
                
                <button name="patient" class="btn btn-primary">patient information</button>
                <button name="room" class="btn btn-primary">room availability </button>
                <button name="staff" class="btn btn-primary">staff</button>
                <button name="operating" class="btn btn-primary">operating room schedules </button>
                <button name="invoices" class="btn btn-primary">patient invoices</button>
                

            </div>
</body>
</html>