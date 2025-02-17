document.addEventListener("DOMContentLoaded", () => {
    const scoreList = document.getElementById("attendents-list");

    const scores = [
        { name: "Math", date: "2025-02-16", att: 0 },
        { name: "Physic", date: "2025-02-15", att: 0 },
        { name: "Biology", date: "2025-02-14", att: 0 },
        { name: "Khmer", date: "2025-02-13", att: 0 },
        { name: "Chemistry", date: "2025-02-12", att: 0 },
        { name: "History", date: "2025-02-11", att: 0 },
        { name: "Geography", date: "2025-02-10", att: 0 },
        { name: "Molarity", date: "2025-02-09", att: 0 },
        { name: "Geology", date: "2025-02-08", att: 0 },
        { name: "Sport", date: "2025-02-07", att: 0},
    ];

    scores.forEach(player => {
        const card = document.createElement("div");
        card.className = "attendent-card";

        card.innerHTML = `
            <img src="" alt="Avatar">
            <div class="attendents-info">
                <p><strong>${player.name}</strong></p>
                <p>Date: ${player.date}</p>
            </div>
            <div class="attendent-value">${player.att}</div>
        `;

        scoreList.appendChild(card);
    });
    
       
 
});

