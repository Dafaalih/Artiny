<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
</head>
<style>
    body {
        font-family: "Unbounded", sans-serif;
        background: linear-gradient(334deg, #a3bcef, #f8deff, #a3bcef);
        background-size: 180% 180%;
        animation: gradient-animation 6s ease infinite;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh; /* Ensure the height covers the viewport */
    }

    @keyframes gradient-animation {
        0% {
            background-position: 0% 50%;
        }
        50% {
            background-position: 100% 50%;
        }
        100% {
            background-position: 0% 50%;
        }
    }

    .container {
        margin-top: 90px;
        background-color: white;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        width: 900px;
    }
    h2 {
        text-align: center; /* Center align the heading */
        margin-bottom: 20px;
        color: #333;
    }
    label {
        display: block;
        margin-bottom: 5px;
        color: #555;
    }
    input, select, textarea {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }
    button {
        font-family: "Unbounded", sans-serif;
        width: 100%;
        padding: 10px;
        background-color: #007BFF;
        border: none;
        border-radius: 5px;
        color: white;
        font-size: 16px;
        cursor: pointer;
    }
    button:hover {
        background-color: #0056b3;
    }
</style>
<body>
    <section>
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <<div class="modal-dialog modal-xl"> role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Recipient:</label>
                        <input type="text" class="form-control" id="recipient-name">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Message:</label>
                        <textarea class="form-control" id="message-text"></textarea>
                    </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Send message</button>
                </div>
                </div>
            </div>
            </div>
    </section>
    <section>
        <div class="container">
            <img src="./img/artiny.png" alt="Artiny Logo" style="width: auto; height:80px; margin-top:40px; margin-bottom:40px; display: block; margin-left: auto; margin-right: auto;">
            <h2>Add New Job</h2>
            <form method="post" action="<?= BASEURL; ?>/Job/tambahData" enctype="multipart/form-data">
                <label for="job-title">Job Title</label>
                <input type="text" id="job-title" name="job_tittle" required>
                
                <label for="company">Company</label>
                <input type="text" id="company" name="company" required>
                
                <label for="location">Location</label>
                <input type="text" id="location" name="location" required>
                
                <label for="category">Category</label>
                <select id="category" name="category" required>
                    <option value="Brand/Graphic Design">Brand/Graphic Design</option>
                    <option value="UI/UX Design">UI/UX Design</option>
                    <option value="Product Design">Product Design</option>
                </select>
                
                <label for="description">Job Description</label>
                <textarea id="description" name="description" rows="4" required></textarea>
                
                <label for="gambar">Upload Image</label>
                <input type="file" id="gambar" name="gambar" required>

                <button type="submit">Add Job</button>
            </form>
        </div>
        <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action" style="margin-top:30px;">
                <div class="d-flex justify-content-between">
                    <div>
                        <h5 class="mb-1">Senior Designer</h5>
                        <p class="mb-1">Firebelly Design</p>
                        <small>Chicago, IL</small>
                    </div>
                    <div>
                        <small>3 hours ago</small>
                        <button class="edit-btn ml-3">Edit</button>
                    </div>
                </div>
            </a>
            <a href="#" class="list-group-item list-group-item-action">
                <div class="d-flex justify-content-between">
                    <div>
                        <h5 class="mb-1">Brand/UX Designer for 2 Jewelry Brands</h5>
                        <p class="mb-1">Hearts On Fire</p>
                        <small>Remote</small>
                    </div>
                    <div>
                        <small>8 hours ago</small>
                        <button class="edit-btn ml-3">Edit</button>
                    </div>
                </div>
            </a>
            <!-- Add more job listings here following the same structure -->
        </div>
    </section>
    <script src="../js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
