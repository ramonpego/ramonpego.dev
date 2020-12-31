// | SCRIPT |

// | LOADER |

window.addEventListener('load', loading__);

function loading__(event) {
    setTimeout(function() {
        let loader = document.querySelector('.loader__content');
        loader.parentElement.removeChild(loader);
    }, 1000);
}

// | SIDEBAR ACTION |

var main = document.querySelector('.main__');
var sidebar = document.querySelector('.aside__');
var sidebarAction = document.querySelector('.sidebar__action');
var sidebarActionMobile = document.querySelector('.sidebar__action__mobile');
var sidebarClose = document.querySelector('.sidebar__close');

sidebarAction.addEventListener('click', sidebar__toglle);
sidebarActionMobile.addEventListener('click', sidebar__mobile);
sidebarClose.addEventListener('click', sidebar__close);

function sidebar__toglle() {
    if (sidebar.classList.contains('aside__hidden')) {
        sidebar.classList.remove('aside__hidden');
        main.classList.remove('main__full');

    } else {
        sidebar.classList.add('aside__hidden');
        main.classList.add('main__full');
    }
}

function sidebar__mobile() {
    if (sidebar.classList.contains('aside__mobile')) {
        sidebar.classList.remove('aside__mobile');

    } else {
        sidebar.classList.add('aside__mobile');
    }
}

function sidebar__close() {
    sidebar.classList.remove('aside__mobile');
}

// | BAK TO TOP |

// document.querySelector(".back__top").addEventListener("click", scrollTop);

// function scrollTop(event) {
//     event.preventDefault();

//     window.scroll({
//         top: 0,
//         behavior: "smooth",
//     });
// }
