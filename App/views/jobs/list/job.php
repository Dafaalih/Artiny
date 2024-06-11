
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
                        <a href="<?php echo BASEURL; ?>/Detailjob" class="list-group-item list-group-item-action">
                            <div class="d-flex justify-content-between">
                                <h5 class="mb-1">Freelance Graphic Design Application</h5>
                                <small>3 hours ago</small>
                            </div>
                            <p class="mb-1">Firebelly Design</p>
                            <small>Chicago, IL</small>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <div class="d-flex justify-content-between">
                                <h5 class="mb-1">Brand/UX Designer for 2 Jewelry Brands</h5>
                                <small>8 hours ago</small>
                            </div>
                            <p class="mb-1">Hearts On Fire</p>
                            <small>Remote</small>
                        </a>
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