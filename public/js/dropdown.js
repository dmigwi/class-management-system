// window.addEventListener("load", () => {
    const dropdown = new HSDropdown(document.querySelector(".hs-dropdown"));
    const openBtn = document.querySelector("#hs-dropdown-menu");

    openBtn.addEventListener("click", () => {
        dropdown.open();
    });
// });
