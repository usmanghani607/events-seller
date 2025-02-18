function setActive(button, page) {

    document.querySelectorAll(".side-bar .side-bg").forEach(btn => btn.classList.remove("active"));

    button.classList.add("active");

    window.location.href = page;
}


// document.addEventListener("DOMContentLoaded", function () {
    
//     let activePage = localStorage.getItem("activePage");

//     let buttons = document.querySelectorAll(".side-bar .side-bg");

//     buttons.forEach(btn => btn.classList.remove("active"));

//     if (activePage) {
//         buttons.forEach(btn => {
//             if (btn.getAttribute("onclick").includes(activePage)) {
//                 btn.classList.add("active");
//             }
//         });
//     }

//     // Function to set active class and save it to localStorage
//     buttons.forEach(btn => {
//         btn.addEventListener("click", function () {

//             buttons.forEach(btn => btn.classList.remove("active"));

//             this.classList.add("active");

//             let page = this.getAttribute("onclick").match(/'([^']+)'/)[1];
//             localStorage.setItem("activePage", page);

//             window.location.href = page;
//         });
//     });
// });


document.addEventListener("DOMContentLoaded", function () {
    let activePage = localStorage.getItem("activePage");
    let buttons = document.querySelectorAll(".side-bar .side-bg");

    // Function to remove active class from all buttons and reset images
    function resetActiveState() {
        buttons.forEach(btn => {
            btn.classList.remove("active");
            let img = btn.querySelector("img");
            img.src = img.getAttribute("data-default");
        });
    }

    // Apply active state from localStorage
    if (activePage) {
        buttons.forEach(btn => {
            if (btn.getAttribute("onclick").includes(activePage)) {
                btn.classList.add("active");
                let img = btn.querySelector("img");
                img.src = img.getAttribute("data-active");
            }
        });
    }

    // Set active button and update image
    buttons.forEach(btn => {
        btn.addEventListener("click", function () {
            resetActiveState();
            this.classList.add("active");

            let img = this.querySelector("img");
            img.src = img.getAttribute("data-active");

            let page = this.getAttribute("onclick").match(/'([^']+)'/)[1];
            localStorage.setItem("activePage", page);

            // Redirect to the page
            window.location.href = page;
        });
    });
});
