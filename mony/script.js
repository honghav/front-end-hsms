document.addEventListener("DOMContentLoaded", () => {
    const scoreList = document.getElementById("score-list");

    const scores = [
        { name: "Math", date: "2025-02-16", score: 85 },
        { name: "Physic", date: "2025-02-15", score: 90 },
        { name: "Biology", date: "2025-02-14", score: 78 },
        { name: "Khmer", date: "2025-02-13", score: 92 },
        { name: "Chemistry", date: "2025-02-12", score: 88 },
        { name: "History", date: "2025-02-11", score: 75 },
        { name: "Geography", date: "2025-02-10", score: 81 },
        { name: "Molarity", date: "2025-02-09", score: 87 },
        { name: "Geology", date: "2025-02-08", score: 93 },
        { name: "Sport", date: "2025-02-07", score: 80 },
    ];

    scores.forEach(player => {
        const card = document.createElement("div");
        card.className = "score-card";

        card.innerHTML = `
            <img src="" alt="Avatar">
            <div class="score-info">
                <p><strong>${player.name}</strong></p>
                <p>Date: ${player.date}</p>
            </div>
            <div class="score-value">${player.score}</div>
        `;

        scoreList.appendChild(card);
    });
    
       
 
});

