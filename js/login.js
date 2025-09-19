document.getElementById("loginForm").addEventListener("submit", function(e){
    e.preventDefault();

    const formData = new FormData(this);

    fetch("../actions/login_customer_action.php", {
        method: "POST",
        body: formData
    })
    .then(res => res.text())
    .then(data => {
        if (data.trim() === "success") {
            alert("Login successful!");
            window.location.href = "../index.php";
        } else {
            alert(data);
        }
    });
});
