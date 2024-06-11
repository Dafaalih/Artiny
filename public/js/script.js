window.addEventListener("scroll", function () {
  const header = document.getElementById("header");
  if (window.scrollY > 0) {
    header.classList.add("header-solid");
  } else {
    header.classList.remove("header-solid");
  }
});

// scripts.js
document.addEventListener("DOMContentLoaded", () => {
  const filterBtn = document.querySelector(".filter-btn");
  filterBtn.addEventListener("click", () => {
    alert("Filter button clicked!");
  });
});

document.getElementById("addJobButton").addEventListener("click", function () {
  var form = document.getElementById("addJobForm");
  form.style.display = form.style.display === "none" ? "block" : "none";
});

document.getElementById("jobForm").addEventListener("submit", function (event) {
  event.preventDefault();

  var jobTitle = document.getElementById("jobTitle").value;
  var companyName = document.getElementById("companyName").value;
  var location = document.getElementById("location").value;
  var jobDescription = document.getElementById("jobDescription").value;

  var jobList = document.getElementById("jobList");
  var newJob = document.createElement("div");
  newJob.textContent = `${jobTitle} - ${companyName} (${location})`;

  jobList.appendChild(newJob);

  document.getElementById("jobForm").reset();
  document.getElementById("addJobForm").style.display = "none";
});
