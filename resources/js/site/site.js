
// | LOADER |
window.addEventListener("load", function(event) {
    const loader = document.querySelector('.loader');
    loader.parentElement.removeChild(loader);
});

// | BAK TO TOP |
document.querySelector(".back_top").addEventListener("click", scrollTop);

function scrollTop(event) {
    event.preventDefault();

    window.scroll({
        top: 0,
        behavior: "smooth",
    });
}
