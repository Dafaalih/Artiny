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
        margin-top: 50px;
        margin-bottom: 50px;
        background-color: white;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        width: 900px;
    }

    h2 {
        text-align: center;
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
        <div class="container">
            <img src="./img/artiny.png" alt="Artiny Logo" style="width: auto; height:80px; margin-top:40px; margin-bottom:40px; display: block; margin-left: auto; margin-right: auto;">
            <h2>Add New Job</h2>
            <form method="POST" action="<?= BASEURL; ?>/Jobform/tambahData" enctype="multipart/form-data">
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

                <button type="submit">Add Job</button>
            </form>
        </div>
        <div class="col-md-8" style="display: flex; justify-content: center; align-items: center;">
            <div class="list-group">
                <?php foreach ($data['jobs'] as $job) : ?>
                    <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="card-title"><?= htmlspecialchars($job["job_tittle"]); ?></h5>
                            <p class="card-text"><?= htmlspecialchars($job["company"]); ?></p>
                            <p class="card-text"><?= htmlspecialchars($job["location"]); ?></p>
                            <p class="card-text"><?= htmlspecialchars($job["description"]); ?></p>
                            <a href="https://docs.google.com/forms/d/e/1FAIpQLSf9dqdfnFbjvhUAztzPlr21SxQXcre6nq062ilndLTKw6yrYA/viewform?usp=pp_url" class="btn btn-primary">Apply for this position</a>
                            <div class="btn-group">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editModal<?= $job['id']; ?>">Edit</button>
                                <a href="<?= BASEURL; ?>/Jobform/hapusData/<?= $job['id']; ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this job?');">Hapus</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>


        <!-- Edit Modal -->
        <?php foreach ($data['jobs'] as $job) : ?>
            <div class="modal fade" id="editModal<?= $job['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editModalLabel">Edit Job</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="POST" action="<?= BASEURL; ?>/Jobform/editData/<?= $job['id']; ?>" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="job-title">Job Title</label>
                                    <input type="text" class="form-control" id="job-title" name="job_tittle" value="<?= htmlspecialchars($job['job_tittle']); ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="company">Company</label>
                                    <input type="text" class="form-control" id="company" name="company" value="<?= htmlspecialchars($job['company']); ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="location">Location</label>
                                    <input type="text" class="form-control" id="location" name="location" value="<?= htmlspecialchars($job['location']); ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="description">Job Description</label>
                                    <textarea id="description" name="description" class="form-control" rows="4" required><?= htmlspecialchars($job['description']); ?></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Save Changes</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>

                    </div>
                </div>
    </section>
    <script src="../js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
