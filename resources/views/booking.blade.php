<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa; /* Set a light gray background color for the body */
            font-family: Arial, sans-serif; /* Set a generic sans-serif font */
        }

        .card {
            margin-top: 50px;
            background-color: #ffffff; /* Set a white background color for the card */
            border-radius: 10px; /* Add some border radius for a softer look */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Add a subtle shadow for depth */
        }

        .card-header {
            background-color: #007bff; /* Set a blue background color for the card header */
            border-radius: 10px 10px 0 0; /* Add border radius only to top corners */
            padding: 15px; /* Add padding to the card header */
        }

        .card-header h3 {
            margin: 0; /* Remove margin from the heading inside card header */
            color: #ffffff; /* Set text color to white */
        }

        .card-body {
            padding: 30px; /* Add padding to the card body */
        }

        .form-group label {
            font-weight: bold; /* Make labels bold for better readability */
        }

        .btn-submit {
            background-color: #ffc107; /* Set a yellow background color for the submit button */
            color: #212529; /* Set text color to dark */
            border-color: #ffc107; /* Set border color to match background color */
            border-radius: 5px; /* Add some border radius to the button */
            transition: background-color 0.3s ease; /* Add transition for hover effect */
        }

        .btn-submit:hover {
            background-color: #ffca2c; /* Change background color on hover */
            color: #212529; /* Maintain text color on hover */
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="mb-0">Book your Table</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="text" class="form-control" id="phone" name="phone" required>
                            </div>
                            <div class="form-group">
                                <label for="checkin">Check-In</label>
                                <input type="date" class="form-control" id="checkin" name="checkin" required>
                            </div>
                            <div class="form-group">
                                <label for="time">Time</label>
                                <input type="time" class="form-control" id="time" name="time" required>
                            </div>
                            <div class="form-group">
                                <label for="guests">Guests</label>
                                <select class="form-control" id="guests" name="guests" required>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
