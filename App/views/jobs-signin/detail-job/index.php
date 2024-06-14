<style>
  .job-detail {
    font-family: "Unbounded";
    font-weight: 300;
    margin-bottom: 80px;
    margin-left: 130px;
    margin-right: 130px;
  }
 .job-item {
            cursor: pointer;
        }


</style>

<body>
<section>
        <div class="job-detail mt-5">
            <div class="row">
                <div class="col-md-8">
                    <?php foreach ($data['jobs'] as $index => $job) : ?>
                        <div class="job-item" onclick="showJobDetail(<?= $index ?>)">
                            <h1 class="card-title"><?= $job["job_tittle"]; ?></h1>
                        </div>
                        <div class="job-info" id="job-<?= $index ?>" style="display: none;">
                            <div class="d-flex mb-3">
                                <button class="btn btn-outline-primary mr-2">Share</button>
                                <button class="btn btn-outline-primary mr-2">Tweet</button>
                                <button class="btn btn-outline-primary">Copy</button>
                            </div>
                            <p class="card-text"><?= $job["company"]; ?></p>
                            <p class="card-text"><?= $job["location"]; ?></p>
                            
                            <p class="card-text"><?= $job["description"]; ?></p>
                            <a href="https://docs.google.com/forms/d/e/1FAIpQLSf9dqdfnFbjvhUAztzPlr21SxQXcre6nq062ilndLTKw6yrYA/viewform?usp=pp_url" class="btn btn-primary">Apply for this position</a>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Beep Media</h5>
                            <p><a href="#">Visit Website</a></p>
                            <a href="#" class="btn btn-primary btn-block">Apply for this position</a>
                            <ul class="list-unstyled mt-3">
                                <li><strong>Job Type:</strong> Freelance</li>
                                <li><strong>Location:</strong> Remote</li>
                                <li><strong>Date posted:</strong> Jun 10, 2024</li>
                            </ul>
                        </div>
                    </div>
                    <div class="mt-4">
                        <h5>You might also like</h5>
                        <ul>
                            <li><a href="#">Web Design Jobs</a></li>
                            <li><a href="#">Remote Web Design Design Jobs</a></li>
                        </ul>
                    </div>
                    <div class="mt-4">
                        <h5>Are you also hiring?</h5>
                        <ul>
                            <li><a href="#">Hire Web Designers</a></li>
                            <li><a href="#">Hire Remote Web Designers</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        function showJobDetail(index) {
            // Hide all job details
            const jobDetails = document.querySelectorAll('.job-info');
            jobDetails.forEach(detail => detail.style.display = 'none');
            
            // Show the clicked job detail
            document.getElementById('job-' + index).style.display = 'block';
        }
    </script>
</body>
</html>
