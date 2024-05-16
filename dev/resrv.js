document.addEventListener('DOMContentLoaded', function () {
    var form = document.querySelector('form');

    form.addEventListener('submit', function (event) {
        var name = document.getElementById('name').value;
        var email = document.getElementById('email').value;
        var phone = document.getElementById('phone').value;
        var date = document.getElementById('date').value;
        var password = document.getElementById('password').value;
        var confirmPassword = document.getElementById('confirmPassword').value;
        var time = document.getElementById('Time').value;
        var Person = document.getElementById('Person').value;

        // Validation côté client
        if (name === '' || email === '' || phone === '' || date === '' || password === '' || confirmPassword === '' || time === '' || Person === '') {
            alert('Veuillez remplir tous les champs.');
            event.preventDefault();
        } else if (password !== confirmPassword) {
            alert('Password Confirmation is Wrong');
            event.preventDefault();
        }
    });
});
