const urlParams = new URLSearchParams(window.location.search);

const name = urlParams.get("name");
const department = urlParams.get("department");
const about = urlParams.get("about");
const exercise = urlParams.get("exercise");
const reading = urlParams.getAll("reading[]").join(', ');
const movies = urlParams.get("movies");

document.getElementById("name").textContent = name;
document.getElementById("department").textContent = department;
document.getElementById("about").textContent = about;
document.getElementById("exercise").textContent = exercise;
document.getElementById("reading").textContent = reading;
document.getElementById("movies").textContent = movies;