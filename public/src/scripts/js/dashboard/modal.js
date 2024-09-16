function showModal() {

    let modal = document.getElementById("modal");

    if ( modal.className.includes("d-none") ) {

        modal.classList.remove("d-none");
        modal.classList.add("d-flex");

    } else {

        modal.classList.remove("d-flex");
        modal.classList.add("d-none");

    };

    event.preventDefault();

};
