<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Upload</title>
    <style>
        .pinterest-layout {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            grid-gap: 16px;
            padding: 16px;
            justify-content: center;
        }

        .pin {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s;
            cursor: pointer;
        }

        .pin:hover {
            transform: scale(1.05);
        }

        .pin img {
            width: 100%;
            display: block;
            border-bottom: 1px solid #ddd;
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0, 0, 0);
            background-color: rgba(0, 0, 0, 0.4);
            padding-top: 60px;
        }

        .modal-content {
            background-color: #fefefe;
            margin: 5% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            max-width: 600px;
            text-align: center;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
<main>
    <section class="hero text-center">
        <div class="container">
            <h1>Upload Image with Description</h1>
            <form action="index.php?action=upload" method="POST" enctype="multipart/form-data">
                <input type="file" name="image" required>
                <input type="text" name="description" placeholder="Image Description" required>
                <button type="submit">Upload</button>
            </form>
        </div>
    </section>
    <section>
        <div class="pinterest-layout" id="imageContainer">
            <?php foreach ($data['images'] as $image): ?>
                <div class="pin" data-description="<?= htmlspecialchars($image['description']); ?>">
                    <img src="uploads/<?= htmlspecialchars($image['filename']); ?>" alt="<?= htmlspecialchars($image['description']); ?>">
                </div>
            <?php endforeach; ?>
        </div>
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
</body>
</html>
