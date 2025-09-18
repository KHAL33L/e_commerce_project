document.getElementById("registerForm").addEventListener("submit", function(e){
    e.preventDefault();

    const formData = new FormData(this);

    fetch("../actions/register_customer_action.php", {
        method: "POST",
        body: formData
    })
    .then(res => res.text())
    .then(data => {
        if (data.trim() === "success") {
            alert("Registration successful!");
            window.location.href = "login.php";
        } else {
            alert(data);
        }
    });
});

// rotating placeholder for country (random every 3 seconds, no repeats)
const countryInput = document.getElementById("countryInput");
const countries = [
    "Ghana", "Nigeria", "Kenya", "South Africa", "Egypt", "Ethiopia", "Morocco", "Uganda", "Tanzania", "Algeria",
    "Canada", "Mexico", "Brazil", "Argentina", "Chile", "Colombia", "Peru", "Venezuela",
    "United Kingdom", "Germany", "France", "Italy", "Spain", "Netherlands", "Sweden", "Norway", "Poland", "Switzerland",
    "China", "India", "Japan", "South Korea", "Pakistan", "Bangladesh", "Indonesia", "Philippines", "Vietnam", "Thailand",
    "Australia", "New Zealand",
    "Saudi Arabia", "United Arab Emirates", "Qatar", "Turkey", "Iran", "Iraq", "Jordan", "Lebanon", "Israel"
];

let lastIndex = -1;

// function to set a random country placeholder (no repeats)
function setRandomPlaceholder() {
    let randomIndex;
    do {
        randomIndex = Math.floor(Math.random() * countries.length);
    } while (randomIndex === lastIndex);

    lastIndex = randomIndex;
    countryInput.setAttribute("placeholder", countries[randomIndex]);
}

// set initial placeholder on load
setRandomPlaceholder();

// change placeholder every 3 seconds
setInterval(setRandomPlaceholder, 3000);
