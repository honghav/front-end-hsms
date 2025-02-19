// script.js

document.addEventListener("DOMContentLoaded", () => {
    // 1. Toggle Subject Details
    const subjects = document.querySelectorAll(".subject");

    subjects.forEach((subject) => {
        subject.addEventListener("click", () => {
            const details = subject.querySelector("p:last-child");
            details.style.display = details.style.display === "none" ? "block" : "none";
        });
    });

    // 2. Filter Subjects by Status
    const filterButtons = document.createElement("div");
    filterButtons.classList.add("filter-buttons");
    filterButtons.innerHTML = `
        <button data-status="all">All</button>
        <button data-status="active">Active</button>
        <button data-status="inactive">Inactive</button>
    `;
    document.querySelector(".container").insertBefore(filterButtons, document.querySelector(".subjects"));

    filterButtons.addEventListener("click", (event) => {
        if (event.target.tagName === "BUTTON") {
            const status = event.target.dataset.status;

            subjects.forEach((subject) => {
                const subjectStatus = subject.querySelector("p:nth-child(3)").textContent.trim();
                if (status === "all" || subjectStatus.includes(status)) {
                    subject.style.display = "block";
                } else {
                    subject.style.display = "none";
                }
            });
        }
    });

    // 3. Highlight Active Subjects
    subjects.forEach((subject) => {
        const status = subject.querySelector("p:nth-child(3)").textContent.trim();
        if (status.includes("Active")) {
            subject.style.border = "2px solid green";
        }
    });

    // 4. Dynamic Content Loading (Optional)
    let loadedSubjects = 8; // Initial number of subjects displayed
    const totalSubjects = 16; // Total number of subjects available

    const loadMoreButton = document.createElement("button");
    loadMoreButton.textContent = "Load More";
    loadMoreButton.classList.add("load-more");
    document.querySelector(".container").appendChild(loadMoreButton);

    loadMoreButton.addEventListener("click", () => {
        const newSubjects = Array.from(subjects).slice(loadedSubjects, loadedSubjects + 4);
        newSubjects.forEach((subject) => {
            subject.style.display = "block";
        });
        loadedSubjects += 4;

        if (loadedSubjects >= totalSubjects) {
            loadMoreButton.style.display = "none";
        }
    });

    // Initially hide extra subjects
    subjects.forEach((subject, index) => {
        if (index >= loadedSubjects) {
            subject.style.display = "none";
        }
    });
});