<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehicle Details</title>
    <style>
        /* Basic styling */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        /* Container for vehicle details */
        .vehicle-container {
            display: flex;
            width: 90%;
            max-width: 1200px;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            align-items: center;
            gap: 30px;
        }

        /* Image section */
        .image-container {
            flex: 1;
        }

        /* Styling for vehicle image */
        .vehicle-image {
            width: 100%;
            max-height: 400px;
            object-fit: cover;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        /* Details section */
        .details-container {
            flex: 1;
            text-align: left;
        }

        /* Vehicle title */
        h1 {
            color: #333;
            font-size: 2rem;
            margin-bottom: 15px;
        }

        /* Styling for vehicle details */
        .vehicle-details p {
            margin: 10px 0;
            font-size: 1.1rem;
            color: #555;
            line-height: 1.6;
        }

        /* Booking button */
        .booking-btn {
            display: inline-block;
            margin-top: 20px;
            padding: 14px 24px;
            background-color: #ff5f00;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 1.1rem;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        /* Hover effect for the button */
        .booking-btn:hover {
            background-color: #e25400;
        }
    </style>
</head>
<body>
    <!-- Main container for vehicle details -->
    <div class="vehicle-container">
        <!-- Image container -->
        <div class="image-container">
            <img src="car-image.jpg" alt="Vehicle Image" class="vehicle-image">
        </div>
        
        <!-- Container for vehicle information -->
        <div class="details-container">
            <h1>Fahrzeugmodell XYZ</h1>
            <div class="vehicle-details">
                <p><strong>Brand:</strong> </p>
                <p><strong>Model:</strong> </p>
                <p><strong>Horsepower:</strong> </p>
                <p><strong>Fuel Type:</strong> </p>
                <p><strong>Seats:</strong> </p>
                <p><strong>Transmission:</strong> </p>
            </div>
            <!-- Booking button -->
            <a href="#" class="booking-btn">Buchung starten</a>
        </div>
    </div>
</body>
</html>