<!DOCTYPE html>
<html>
    <head>
        <title>Car register</title>
        <link rel="stylesheet" href="../assets/css/registerCar.css">
    </head>
    <body>
        <div  class="form-wrap">
            <form action="registercardetailsphp.php" method="post">
                <h1>Car Details</h1>
                <input type="text" placeholder="Car Name" name="car_name" id="20">
                <input type="number" placeholder="Model Year" name="model_year" id="20">
                <input type="number" placeholder="Milage" name="milage" id="20">
                <input type="text" placeholder="Manufacturer" name="manufacturer" id="30">
                <input type="text" placeholder="Body Type" name="body_type" id="20">
                <input type="text" placeholder="Color" name="color" id="20">

                <input type="submit" value="Submit">
            </form>
        </div>
    </body>
</html>
