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
            <h1>The #1 job board for graphic design jobs</h1>
            <p>Discover the latest and coolest design trends on Artiny.</p>
            <a href="<?= BASEURL ?>/Jobform" class="btn btn-outline-light">Add Design</a>
        </div>
    </section>
    <section class="filter-bar">
        <div class="filter-options">
            <select>
                <option value="popular">Popular</option>
                <option value="recent">Recent</option>
            </select>
            <button>Discover</button>
            <button>Animation</button>
            <button>Branding</button>
            <button>Illustration</button>
            <button>Mobile</button>
            <button>Print</button>
            <button>Product Design</button>
            <button>Typography</button>
        </div>
        <button class="filter-btn">Filters</button>
    </section>
    <section>
        <div class="pinterest-layout">
            <div class="pin" data-description="Gambar yang diunggah adalah poster untuk sebuah acara Block Party yang diadakan oleh Poster House. Poster ini memiliki desain yang sangat berwarna-warni dengan berbagai elemen grafis seperti mata, bibir, bintang, hati, dan berbagai bentuk geometris lainnya."><img src="./img/1.jpeg" alt="Image 1"></div>
            <div class="pin" data-description="Description for Image 2"><img src="./img/2.jpeg" alt="Image 2"></div>
            <div class="pin" data-description="Description for Image 3"><img src="./img/3.jpeg" alt="Image 3"></div>
            <div class="pin" data-description="Description for Image 4"><img src="./img/4.jpeg" alt="Image 4"></div>
            <div class="pin" data-description="Description for Image 5"><img src="./img/5.jpeg" alt="Image 5"></div>
            <div class="pin" data-description="Description for Image 6"><img src="./img/6.jpeg" alt="Image 6"></div>
            <div class="pin" data-description="Description for Image 7"><img src="./img/7.jpeg" alt="Image 7"></div>
            <div class="pin" data-description="Description for Image 8"><img src="./img/8.jpeg" alt="Image 8"></div>
            <div class="pin" data-description="Description for Image 9"><img src="./img/9.jpeg" alt="Image 9"></div>
            <div class="pin" data-description="Description for Image 10"><img src="./img/10.jpeg" alt="Image 10"></div>
            <div class="pin" data-description="Description for Image 1"><img src="./img/1.jpeg" alt="Image 1"></div>
            <div class="pin" data-description="Description for Image 2"><img src="./img/2.jpeg" alt="Image 2"></div>
            <div class="pin" data-description="Description for Image 3"><img src="./img/3.jpeg" alt="Image 3"></div>
            <div class="pin" data-description="Description for Image 4"><img src="./img/4.jpeg" alt="Image 4"></div>
            <div class="pin" data-description="Description for Image 5"><img src="./img/5.jpeg" alt="Image 5"></div>
            <div class="pin" data-description="Description for Image 6"><img src="./img/6.jpeg" alt="Image 6"></div>
            <div class="pin" data-description="Description for Image 7"><img src="./img/7.jpeg" alt="Image 7"></div>
            <div class="pin" data-description="Description for Image 8"><img src="./img/8.jpeg" alt="Image 8"></div>
            <div class="pin" data-description="Description for Image 9"><img src="./img/9.jpeg" alt="Image 9"></div>
            <div class="pin" data-description="Description for Image 10"><img src="./img/10.jpeg" alt="Image 10"></div>
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
        pin.addEventListener('click', function() {
            document.getElementById('modalImage').src = this.querySelector('img').src;
            document.getElementById('modalDescription').innerText = this.dataset.description;
            document.getElementById('myModal').style.display = 'block';
        });
    });

    document.querySelector('.close').addEventListener('click', function() {
        document.getElementById('myModal').style.display = 'none';
    });

    window.addEventListener('click', function(event) {
        if (event.target === document.getElementById('myModal')) {
            document.getElementById('myModal').style.display = 'none';
        }
    });
</script>
</body>