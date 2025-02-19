function toggleSidebar() {
    let sidebar = document.getElementById("sidebar");
    let content = document.getElementById("content");

    // Toggle for desktop view
    if (window.innerWidth > 768) {
        sidebar.classList.toggle("collapsed");
        content.classList.toggle("collapsed");
    } 
    // Toggle for mobile view
    else {
        sidebar.classList.toggle("show");
    }
}

function setActive(element) {
    // Remove 'active' class from all links
    let links = document.querySelectorAll('.sidebar a');
    links.forEach(function (link) {
        link.classList.remove('active');
    });

    element.classList.add('active');
}

