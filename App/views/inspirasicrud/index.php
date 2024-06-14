<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/style.css">
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
</head>
<body>
<main>
    <section>
        <div class="container">
            <img src="<?= BASEURL; ?>/img/artiny.png" alt="Artiny Logo" style="width: auto; height:80px; margin-top:40px; margin-bottom:40px; display: block; margin-left: auto; margin-right: auto;">
            <h2>Add New Inspiration</h2>
            <form action="<?= BASEURL; ?>/Inspirasiform/tambahData" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="description">Job Description</label>
                <textarea id="description" name="description" ins$inspirasis="4" required></textarea>
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" class="form-control" id="image" name="image">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
        <div class="col-md-8" style="display: flex; justify-content: center; align-items: center;">
    <div class="list-group">
        <?php foreach ($data['inspirasi'] as $inspirasi) : ?>
            <div class="card mb-3">
                <div class="card-body">
                    <p class="card-text"><?= $inspirasi["description"]; ?></p>
                    <img src="<?= BASEURL ?>/img/<?= basename($inspirasi['gambar']); ?>" alt="gambar">
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editModal<?= $inspirasi['id']; ?>">Edit</button>
                        <a href="<?= BASEURL; ?>/Inspirasiform/hapusData/<?= $inspirasi['id']; ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this inspiration?');">Delete</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>




    <!-- Edit Modal -->
    <?php foreach ($data['inspirasi'] as $inspirasi) : ?>
        <div class="modal fade" id="editModal<?= $inspirasi['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editModalLabel">Edit Inspiration</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="<?= BASEURL; ?>/Inspirasiform/editData/<?= $inspirasi['id']; ?>" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea id="description" name="description" class="form-control" ins$inspirasis="4" required><?= htmlspecialchars($inspirasi['description']); ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="file" id="image" name="image" accept="image/*">
                            </div>
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>

    </section>
</main>

<div id="myModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <img id="modalImage" src="" alt="Modal Image" style="width: 100%;">
        <p id="modalDescription"></p>
    </div>
</div>

<script>
    document.querySelectorAll('.pin').forEach(pin => {
        pin.addEventListener('click', function () {
            document.getElementById('modalImage').src = this.querySelector('img').src;
            document.getElementById('modalDescription').innerText = this.dataset.description;
            document.getElementById('myModal').style.display = 'block';
        });
    });

    document.querySelector('.close').addEventListener('click', function () {
        document.getElementById('myModal').style.display = 'none';
    });

    window.addEventListener('click', function (event) {
        if (event.target === document.getElementById('myModal')) {
            document.getElementById('myModal').style.display = 'none';
        }
    });
</script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
