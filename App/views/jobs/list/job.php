
<body>
    <section class="hero text-center">
        <div class="container">
            <h1>The #1 job board for graphic design jobs</h1>
            <p>Discover the best graphic design jobs, handpicked just for you.</p>
            <a href="<?= BASEURL ?>/Jobform" class="btn btn-outline-light">Add Job</a>
        </div>
    </section>
    <section class="job-board py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <input type="text" class="form-control mb-3" placeholder="Search for jobs">
                    <div class="list-group">
                        <?php foreach ($data['jobs'] as $job) : ?>
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $job["job_tittle"]; ?></h5>
                                    <p class="card-text"><?= $job["company"]; ?></p>
                                    <p class="card-text"><?= $job["location"]; ?></p>
                                    <p class="card-text"><?= $job["description"]; ?></p>
                                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSf9dqdfnFbjvhUAztzPlr21SxQXcre6nq062ilndLTKw6yrYA/viewform?usp=pp_url" class="btn btn-primary">Apply for this position</a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="card mb-3">
                        <div class="card-header">Job Categories</div>
                        <div class="card-body">
                            <ul class="list-unstyled">
                                <li><a href="#">All</a></li>
                                <li><a href="#">Brand/Graphic Design</a></li>
                                <li><a href="#">UI/UX Design</a></li>
                                <li><a href="#">Product Design</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">Location</div>
                        <div class="card-body">
                            <input type="text" class="form-control mb-3" placeholder="Search by location">
                            <button class="btn btn-primary btn-block">Search</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
</body>
</html>