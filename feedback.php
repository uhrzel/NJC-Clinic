<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NJC Dental Clinic Feedback Form</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Font Awesome CSS for stars -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        .rating {
            display: flex;
            flex-direction: row-reverse;
            justify-content: center;
        }

        .rating>input {
            display: none;
        }

        .rating>label {
            padding: 5px;
            font-size: 30px;
            color: #ddd;
            cursor: pointer;
            transition: color 0.3s ease;
        }

        .rating>input:checked~label,
        .rating>input:checked~label~label {
            color: #f8d053;
        }

        body {
            background-image: url('dist/img/care.jpg');
            /* Specify the path to your background image */
            background-size: cover;
            /* Cover the entire viewport */
            background-repeat: no-repeat;
            background-position: center;
        }

        .card {
            background: rgba(255, 255, 255, 0.9);
            /* Transparent white background */
            border: none;
            /* No border */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            /* Soft shadow */
            border-radius: 15px;
            /* Rounded corners */
        }

        .card-header {
            background-color: lightblue;
            /* Yellow background */
            border-bottom: none;
            /* No border at the bottom */
            border-radius: 15px 15px 0 0;
            /* Rounded corners only at the top */
            font-weight: bold;
            color: #333;
            /* Dark text color */
        }

        .form-control {
            border: none;
            /* No border for form controls */
            border-radius: 10px;
            /* Rounded corners */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            /* Soft shadow */
        }

        .btn-primary {

            /* Yellow background */
            border: none;
            /* No border */
            border-radius: 10px;
            /* Rounded corners */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            /* Soft shadow */
        }

        .btn-primary:hover {
            background-color: lightskyblue;
            /* Lighter yellow on hover */
        }
    </style>
</head>

<body>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center">
                        <h4 class="mb-0">NJC Dental Clinic Feedback Form</h4>
                    </div>
                    <div class="card-body">
                        <form action="submit_feedback.php" method="POST">
                            <div class="form-group">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" required>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" id="feedback" name="feedback" rows="3" placeholder="Your Feedback" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="rating">Rating</label>
                                <div class="rating">
                                    <input type="radio" name="rating" id="star5" value="5">
                                    <label for="star5"><i class="fas fa-star"></i></label>
                                    <input type="radio" name="rating" id="star4" value="4">
                                    <label for="star4"><i class="fas fa-star"></i></label>
                                    <input type="radio" name="rating" id="star3" value="3">
                                    <label for="star3"><i class="fas fa-star"></i></label>
                                    <input type="radio" name="rating" id="star2" value="2">
                                    <label for="star2"><i class="fas fa-star"></i></label>
                                    <input type="radio" name="rating" id="star1" value="1">
                                    <label for="star1"><i class="fas fa-star"></i></label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Submit Feedback</button>
                        </form>
                        <form action="logout.php" method="post" class="card mt-1">
                            <button type="submit" class="btn btn-danger btn-block">Logout</button>
                        </form>


                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Add a Bootstrap modal -->
    <div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="successModalLabel">Feedback Submitted Successfully</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Thank you for your feedback!
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        // Check if the URL has a success parameter (indicating successful submission)
        const urlParams = new URLSearchParams(window.location.search);
        const success = urlParams.get('success');

        // If success parameter is present, show the modal
        if (success === 'true') {
            $('#successModal').modal('show');

        }
    </script>



</body>

</html>