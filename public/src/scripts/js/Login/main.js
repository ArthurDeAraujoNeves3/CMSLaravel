function verifyInputs() {

    function validateInput(input, isValid) {

        if ( !isValid ) {

            input.classList.add("inputError");

        } else {

            input.classList.remove("inputError");

        };

    };

    let email = document.getElementById("email");
    let password = document.getElementById("password");
    const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

    validateInput(email, email.value !== "" && emailRegex.teste(email.value));
    validateInput(password, password.value.length >= 8 && password.value.length <= 255);

    if ( document.querySelectorAll(".inputError").length > 0 ) {

        event.preventDefault();
        
    };
    
};
