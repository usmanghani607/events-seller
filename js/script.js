function setActive(button, page) {

    document.querySelectorAll(".side-bar .side-bg").forEach(btn => btn.classList.remove("active"));

    button.classList.add("active");

    window.location.href = page;
}


document.addEventListener("DOMContentLoaded", function () {
    let activePage = localStorage.getItem("activePage");
    let buttons = document.querySelectorAll(".side-bar .side-bg");

    function resetActiveState() {
        buttons.forEach(btn => {
            btn.classList.remove("active");
            let img = btn.querySelector("img");
            img.src = img.getAttribute("data-default");
        });
    }

    if (activePage) {
        buttons.forEach(btn => {
            if (btn.getAttribute("onclick").includes(activePage)) {
                btn.classList.add("active");
                let img = btn.querySelector("img");
                img.src = img.getAttribute("data-active");
            }
        });
    }

    buttons.forEach(btn => {
        btn.addEventListener("click", function () {
            resetActiveState();
            this.classList.add("active");

            let img = this.querySelector("img");
            img.src = img.getAttribute("data-active");

            let page = this.getAttribute("onclick").match(/'([^']+)'/)[1];
            localStorage.setItem("activePage", page);

            window.location.href = page;
        });
    });
});

// $(document).ready(function() {
    
//     if (!sessionStorage.getItem('userName')) {
        
//         window.location.href = "index";  
//     }
// });


