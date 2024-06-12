<style>
.profile {
    font-weight: 300;
    text-align: center;
    margin: 20px;
    max-width: 300px;
}

.profile img {
    border-radius: 50%;
    width: 150px;
    height: 150px;
    object-fit: cover;
    border: 3px solid #e91e63;
}

.profile h3 {
    font-size: 17px;
    color: #333;
    margin-top: 10px;
}

.profile p {
    color: #777;
    margin: 5px 0;
}

.logos {
    display: flex;
    justify-content: space-around;
    align-items: center;
    padding: 20px;
    background-color: white;
    margin: 20px;
    border-radius: 10px;
}

.logos img {
    width: 100px;
    margin: 0 10px;
}

.profiles-row {
    display: flex;
    justify-content: center;
    align-items: flex-start;
    padding: 20px;
    background-color: white;
    margin: 20px;
    border-radius: 10px;
}

.profiles-row .profile {
    text-align: center;
    margin: 20px;
    max-width: 200px;
}

.profiles-row .profile img {
    border-radius: 50%;
    width: 100px;
    height: 100px;
    object-fit: cover;
    border: 3px solid #1b356b;
}

.profiles-row .profile h3 {
    color: #333;
    margin-top: 10px;
}

.profiles-row .profile p {
    color: #777;
    margin: 5px 0;
}

.cta {
    color: #1b356b;
  background: linear-gradient(334deg, #a3bcef, #f8deff, #a3bcef);
  background-size: 180% 180%;
  animation: gradient-animation 6s ease infinite;
  padding: 60px 0;
  text-align: center;
}

</style>
<!-- Hero Section -->
    <section class="hero bg-light py-5">
        <div class="container text-center">
            <img src="./img/artiny.png" alt="" style="widht: 80px; height:80px; margin-bottom:20px;">
            <h1>Uncover the leading designers and creative talents shaping the world today.</h1>
            <p>Artiny is the global community for designers and creative professionals.</p>
            <a href="<?= BASEURL ?>/signup" class="btn btn-outline-light">Get Started</a>
        </div>

    </section>

    <!-- Features Section -->
    <section class="features py-5">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-3 feature-item">
                    <div class="feature-content">
                        <img src="./img/job.jpg" alt="job" class="img">
                        <div>
                            <h3>30,000+</h3>
                            <p>Jobs</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 feature-item">
                    <div class="feature-content">
                        <img src="./img/designer.jpg" alt="designer" class="img">
                        <div>
                            <h3>20,000+</h3>
                            <p>Designer</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 feature-item">
                    <div class="feature-content">
                        <img src="./img/illustration.jpg" alt="illustration" class="img">
                        <div>
                            <h3>10,000+</h3>
                            <p>Illustration</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 feature-item">
                    <div class="feature-content">
                        
                        <div>
                            <img src="./img/user.jpg" alt="users" class="img">
                            <h3>1,000,000+</h3>
                            <p>User's</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section class="benefits py-5 bg-light">
        <div class="container text-center">
            <h2>The Benefits You Get When You Study at Artiny</h2>
            <div class="row">
                <div class="col-md-3">
                    <div class="card text-bg-primary mb-3 equal-height" style="background: linear-gradient(to bottom, #4580F9, #2F64D1); color:#ffffff; box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);">
                        <div class="card-header">Experienced mentors</div>
                        <div class="card-body">
                            <p class="card-text">All the mentors are very experienced in this industry. They can help you.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card text-bg-primary mb-3 equal-height" style="background: linear-gradient(to bottom, #FF7065, #EE2010); color:#ffffff; box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);">
                        <div class="card-header">24/7 Study Anywhere</div>
                        <div class="card-body">
                            <p class="card-text">By studying online you can learn anytime and anywhere without the need.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card text-bg-primary mb-3 equal-height" style="background: linear-gradient(to bottom, #FFDA9F, #FAB446); color:#ffffff; box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);">
                        <div class="card-header">E-Book Everyweek</div>
                        <div class="card-body">
                            <p class="card-text">Every week you will get a free e-book that you can read according to your.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card text-bg-primary mb-3 equal-height" style="background: linear-gradient(to bottom, #ECE1FF, #CCAAFF); color:#ffffff; box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);">
                        <div class="card-header">Affordable Prices</div>
                        <div class="card-body">
                            <p class="card-text">Studying here is very affordable and you will get discounts that will help you.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Testimonials Section -->
    <section class="testimonials">
    <div class="logos">
        <img src="./img/Logo1.png" alt="Google">
        <img src="amazon.png" alt="Amazon">
        <img src="airbnb.png" alt="Airbnb">
        <img src="uber.png" alt="Uber">
        <img src="accenture.png" alt="Accenture">
        <img src="deloitte.png" alt="Deloitte">
    </div>
    <div class="profiles-row">
        <div class="profile">
            <img src="./img/Mask Group.png" alt="Harry French">
            <h3>Harry French</h3>
            <p>UX Researcher @Google</p>
        </div>
        <div class="profile">
            <img src="profile4.jpg" alt="Sean Conlon">
            <h3>Sean Conlon</h3>
            <p>Product Designer @ASOS</p>
        </div>
        <div class="profile">
            <img src="./img/Mask Group-1.png" alt="Cassandra Cardiff">
            <h3>Cassandra Cardiff</h3>
            <p>Sr. User Researcher @Torchbox</p>
        </div>
        <div class="profile">
            <img src="profile6.jpg" alt="Christian Richards">
            <h3>Christian Richards</h3>
            <p>Sr. UX Designer @The Wier Group</p>
        </div>
    </div>
    </section>

    <!-- Call to Action Section -->
    <section class="cta py-5">
        <div class="container text-center">
            <h2>Join World's Largest Learning Platform Today</h2>
            <p>Start learning by registering for free</p>
            <a href="<?= BASEURL ?>/Signup" class="btn btn-outline-light">Sign up for Free</a>
        </div>
    </section>
</body>
</html>
