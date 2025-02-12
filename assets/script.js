document.addEventListener("DOMContentLoaded", function () {
    document.querySelector("form").addEventListener("submit", function (e) {
        const name = document.querySelector('input[name="name"]').value;
        const email = document.querySelector('input[name="email"]').value;
        const phone = document.querySelector('input[name="phone"]').value;

        if (name.length < 3 || phone.length < 10 || !email.includes("@")) {
            e.preventDefault();
            alert("Please enter valid details.");
        }
    });
});
