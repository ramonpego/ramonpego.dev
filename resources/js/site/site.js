// | SCRIPT |

// | LOADER |

// window.addEventListener("load", function(event) {
//     const loader = document.querySelector('loader');
//     loader.parentElement.removeChild(loader);
// });

// | BAK TO TOP |

// document.querySelector(".back__top").addEventListener("click", scrollTop);

// function scrollTop(event) {
//     event.preventDefault();

//     window.scroll({
//         top: 0,
//         behavior: "smooth",
//     });
// }

// | SIDEBAR ACTION |

var sidebarAction = document.querySelector('.sidebar__action');

sidebarAction.addEventListener('click', sidebar__toglle);

function sidebar__toglle() {
    // event.preventDefault();

    let sidebar = document.querySelector('.aside__');
    let main = document.querySelector('.main__');

    if (sidebar.style.width == '350px') {
        sidebar.style.width = '0px';
        sidebar.style.opacity = 0;
        main.style.width = '100%';

    } else {
        sidebar.style.width = '350px';
        sidebar.style.opacity = 1;
        main.style.width = 'calc(100% - 350px)';
    }
}
