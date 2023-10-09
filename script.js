// Init
var sidebarShow = false

// Listener
document.addEventListener("scroll", () => {
    // Auto Close
    if (sidebarShow) {
        animSidebar("close")
    }
})

// Additional Function
function clickSidebar() {
    if (!sidebarShow) {
        animSidebar("open")
    } else {
        animSidebar("close")
    }
}

function animSidebar(state) {
    const sidebar = document.getElementById("sidebar")

    if (state == "open") {
        sidebar.style.pointerEvents = "visible"
        sidebar.style.animation = "openSidebar 0.5s forwards"
        sidebarShow = true
    } else {
        sidebar.style.pointerEvents = "none"
        sidebar.style.animation = "closeSidebar 0.5s forwards"
        sidebarShow = false
    }
}