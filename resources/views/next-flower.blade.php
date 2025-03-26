<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Love Language Discovery Er Robin</title>
    <link rel="stylesheet" href="./style.css">
    <!-- Include Leaflet.js for an interactive map -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <style>
        /* Apply a gradient background with an animated heart effect */
body {
    font-family: 'Cursive', 'Helvetica', sans-serif; /* Romantic font */
    margin: 0;
    padding: 0;
    background: linear-gradient(135deg, #f3a683, #786fa6);
    color: white;
    text-align: center;
    background-size: 400% 400%; 
    animation: gradientAnimation 5s ease infinite; /* Smooth gradient background animation */
}

/* Keyframes for background gradient animation */
@keyframes gradientAnimation {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
}

/* Heart Animation */
@keyframes heartAnimation {
    0% { transform: scale(0.5); opacity: 0; top: 10%; left: 10%; }
    50% { transform: scale(1.5); opacity: 1; top: 40%; left: 40%; }
    100% { transform: scale(0.5); opacity: 0; top: 80%; left: 70%; }
}


.bg_heart {
    position: relative;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    overflow: hidden
 }

.heart {
    position: absolute;
    top: -50%;
    -webkit-transform: rotate(-45deg);
    -moz-transform: rotate(-45deg);
    -m-transform: rotate(-45deg);
    transform: rotate(-45deg)
 }

.heart:before {
    position: absolute;
    top: -50%;
    left: 0;
    display: block;
    content: "";
    width: 100%;
    height: 100%;
    background: inherit;
    border-radius: 100%;
}

.heart:after {
    position: absolute;
    top: 0;
    right: -50%;
    display: block;
    content: "";
    width: 100%;
    height: 100%;
    background: inherit;
    border-radius: 100%;
}

@-webkit-keyframes love {
  0%{top:110%}
}
@-moz-keyframes love {
  0%{top:110%}
}
@-ms-keyframes love {
  0%{top:110%}
}
@keyframes love {
  0%{top:110%}
}

/* Card Styles */
.card {
    background: rgba(255, 255, 255, 0.2);
    border-radius: 15px;
    padding: 20px;
    margin: 15px;
    display: inline-block;
    cursor: pointer;
    transition: transform 0.3s, background 0.3s, box-shadow 0.3s;
    border: 2px solid #ff6bcb; /* Soft border for the romantic theme */
}

.card:hover {
    transform: scale(1.1);
    background: rgba(255, 255, 255, 0.4); /* Slight hover effect */
    box-shadow: 0 0 20px rgba(255, 255, 255, 0.7); /* Glow effect */
}

/* Container for the app */
#app-container {
    width: 90%;
    margin: auto;
    padding: 20px;
    position: relative; /* Position relative for hearts/flowers */
}

/* Quiz container box */
#quiz-container {
    background: rgba(255, 255, 255, 0.2);
    padding: 30px;
    border-radius: 15px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
    margin-bottom: 20px;
    display: inline-block;
    width: 60%;
}

/* Button Style */
button {
    background-color: #ff9ff3;
    border: none;
    padding: 12px 25px;
    margin: 15px;
    cursor: pointer;
    border-radius: 20px;
    font-size: 18px;
    font-weight: bold;
    transition: background 0.3s, transform 0.2s;
}
#language-cards {
    display: flex;
    gap: 15px;
    flex-wrap: wrap;
    justify-content: center;
}
#progress-bar-container {
    width: 100%;
    background-color: #e0e0e0;
    border-radius: 8px;
    overflow: hidden;
    margin-bottom: 20px;
}

#progress-bar {
    width: 0%;
    height: 8px;
    background-color: #ff5a5f;
    transition: width 0.3s ease-in-out;
}
.preview {
    color: #666;
}

.expand-btn {
    cursor: pointer;
    font-size: 20px;
    font-weight: bold;
    color: #ff5a5f;
    position: absolute;
    bottom: 10px;
    right: 10px;
}

.full-story {
    display: none;
    color: #444;
    margin-top: 10px;
    font-size: 14px;
}

#story-nav {
    margin-top: 20px;
}

button {
    background: #ff5a5f;
    color: white;
    border: none;
    padding: 10px 15px;
    cursor: pointer;
    border-radius: 5px;
    margin: 5px;
}

button:hover {
    background: #e0484d;
}
#story-carousel {
    display: flex;
    overflow: hidden;
    scroll-behavior: smooth;
}
h3 {
    color: #ff5a5f;
    margin-bottom: 10px;
}
#map-container {
    width: 100%;
    height: 500px;
    position: relative;
}
#map {
    width: 100%;
    height: 100%;
    border-radius: 10px;
}
#region-info {
    position: absolute;
    bottom: 10px;
    left: 50%;
    transform: translateX(-50%);
    background: rgba(0, 0, 0, 0.7);
    color: #fff;
    padding: 10px 20px;
    border-radius: 8px;
    font-size: 16px;
}
.story-card {
    width: 100%;
    background: #fff;
    border-radius: 12px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    padding: 20px;
    margin: 10px;
    transition: transform 0.3s ease;
    position: relative;
}

.story-card:hover {
    transform: scale(1.02);
}
#stories {
    max-width: 600px;
    margin: 50px auto;
}
.card {
    padding: 15px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    cursor: pointer;
    transition: transform 0.3s ease;
    position: relative;
    width: 150px;
    text-align: center;
}
.card:hover {
    transform: scale(1.1);
}
.card-example {
    display: none;
    margin-top: 10px;
    font-size: 0.9rem;
    color: #555;
}
.card.active .card-example {
    display: block;
}
button:hover {
    background: #ff6bcb;
    transform: scale(1.05);
}

/* Chart/Bar Style */
#chart-container {
    display: flex;
    justify-content: center;
    margin-top: 20px;
}

/* Bar container and styles */
.bar-container {
    width: 80px;
    height: 200px;
    margin: 10px;
    background: rgba(255, 255, 255, 0.2);
    border-radius: 10px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: flex-end;
    position: relative;
}

.bar {
    width: 100%;
    background: #ff9ff3;
    height: 50px;
    transition: height 0.5s;
    border-radius: 5px;
}

/* Labels for bars */
label {
    margin-top: 5px;
    font-size: 16px;
    font-weight: bold;
}

/* Romantic text styles */
h1, p {
    font-family: 'Cursive', 'Brush Script MT', sans-serif;
    color: white;
    text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
}

/* Position hearts and flowers for background */
.heart:nth-child(1) {
    top: 10%;
    left: 20%;
    animation-delay: 0s;
}
.flower:nth-child(1) {
    top: 60%;
    left: 10%;
    animation-delay: 2s;
}


    </style>
</head>

<body>
    <div id="app-container">

        <!-- Hero Section -->
        <section id="hero">
            <h1 class="title">Discover Your Love Language</h1>
            <p class="subtitle">Understanding how you give and receive love</p>
            <div id="language-cards">
                <div class="card" data-language="words">Words of Affirmation</div>
                <div class="card" data-language="acts">Acts of Service</div>
                <div class="card" data-language="gifts">Receiving Gifts</div>
                <div class="card" data-language="time">Quality Time</div>
                <div class="card" data-language="touch">Physical Touch</div>
            </div>
        </section>

        <!-- Quiz Section -->
        <section id="quiz-section">
            <h2>What's Your Primary Love Language?</h2>
            <div id="quiz-container">
                <div id="progress-bar-container">
                    <div id="progress-bar"></div>
                </div>
                <div id="question-display">Click Start to Begin</div>
                <div id="options-container"></div>
                <button id="start-quiz">Start Quiz</button>
            </div>
        </section>

        <!-- Results Section -->
        <section id="results-section">
            <h2>Love Language Distribution</h2>
            <div id="chart-container">
                <div class="bar-container" data-language="words">
                    <div class="bar">Words</div>
                </div>
                <div class="bar-container" data-language="acts">
                    <div class="bar">Acts</div>
                </div>
                <div class="bar-container" data-language="gifts">
                    <div class="bar">Gifts</div>
                </div>
                <div class="bar-container" data-language="time">
                    <div class="bar">Time</div>
                </div>
                <div class="bar-container" data-language="touch">
                    <div class="bar">Touch</div>
                </div>
            </div>
        </section>

        <!-- Stories Section -->
        <section id="stories">
            <h2>Love Language Stories</h2>
            <div id="story-carousel"></div>
            <div id="story-nav">
                <button id="prev-story">Previous</button>
                <button id="next-story">Next</button>
            </div>
        </section>

        <!-- Interactive Map Section -->
        <section id="global-expressions">
            <h2>Love Around the World</h2>
            <div id="map-container">
                <div id="map"></div>
                <div id="region-info">Click on a region to learn more.</div>
            </div>
        </section>

        <!-- Daily Challenge Section -->
        <section id="daily-challenge">
            <h2>Today's Love Language Challenge</h2>
            <div id="challenge-card">
                <p id="challenge-text">Click to get today's challenge</p>
                <button id="new-challenge">Get New Challenge</button>
            </div>
        </section>
    </div>

    <footer>
        
        
    </footer>

</body>
<script>
    document.addEventListener("DOMContentLoaded", function () {
    let currentQuestion = 0;
    let quizResults = { words: 0, acts: 0, gifts: 0, time: 0, touch: 0 };

    const questions = [
        "When feeling down, what cheers you up the most?",
        "How do you prefer to show affection to your partner?",
        "What makes you feel most appreciated in a relationship?",
        "On your birthday, what would you most like your partner to do?",
        "When you've had a tough day, what do you crave from your partner?",
        "What makes you feel closest to someone?",
        "How do you like to celebrate an achievement?",
        "What do you miss most when you're apart from your partner?",
        "What would make a date night special for you?",
        "How do you feel most loved by a friend?"
    ];

    const answerOptions = [
        ["Hearing words of encouragement", "Having someone do a task for you", "Receiving a thoughtful gift", "Spending quality time together", "Getting a comforting hug"],
        ["Saying 'I love you' and giving compliments", "Doing helpful tasks or chores", "Giving meaningful gifts", "Planning special dates", "Showing physical affection"],
        ["Verbal praise and appreciation", "When they help with your responsibilities", "When they surprise you with gifts", "When they give you undivided attention", "When they show physical affection"],
        ["Write you a heartfelt card", "Take care of all your chores", "Give you a special present", "Spend the whole day with you", "Give you lots of hugs and kisses"],
        ["Words of reassurance", "Help with something practical", "A small 'pick-me-up' gift", "Undistracted listening", "A long, comforting hug"],
        ["Deep and meaningful conversations", "Doing something helpful together", "Exchanging gifts", "Spending one-on-one time", "Physical closeness"],
        ["A heartfelt compliment", "A kind gesture like cooking for you", "A surprise present", "A celebration together", "A big hug and high-five"],
        ["Hearing their voice and kind words", "Missing their little acts of care", "Not receiving their surprise gifts", "Not spending time together", "Not getting their hugs and kisses"],
        ["A deep conversation over dinner", "A night where everything is taken care of", "A surprise present at the end", "A long evening spent together", "Lots of hand-holding and cuddles"],
        ["A sincere and heartfelt message", "A favor when needed", "A thoughtful gift", "A planned get-together", "A hug or physical support"]
    ];

    const languageCards = document.querySelectorAll(".card");
    const heroSection = document.getElementById("hero");

    languageCards.forEach(card => {
        const language = card.dataset.language;
        const example = document.createElement("div");
        example.className = "card-example";
        example.textContent = {
            words: "Saying 'I love you' multiple times a day and offering sincere compliments.",
            acts: "Doing chores without being asked or preparing a surprise meal for your partner.",
            gifts: "Giving thoughtful, personalized presents, even if they're small.",
            time: "Having a device-free date night or taking a walk together every evening.",
            touch: "Holding hands while walking or giving a comforting hug after a long day."
        }[language];
        card.appendChild(example);

        card.addEventListener("click", (e) => {
            e.stopPropagation();
            const wasActive = card.classList.contains("active");

            document.querySelectorAll(".card").forEach(c => c.classList.remove("active"));
            heroSection.classList.remove("card-expanded");

            if (!wasActive) {
                card.classList.add("active");
                heroSection.classList.add("card-expanded");
            }
        });
    });

    document.addEventListener("click", () => {
        document.querySelectorAll(".card").forEach(c => c.classList.remove("active"));
        heroSection.classList.remove("card-expanded");
    });

    // QUIZ LOGIC
    let scores = { words: 0, acts: 0, gifts: 0, time: 0, touch: 0 };
    let currentQuestionIndex = 0;

    const questionDisplay = document.getElementById("question-display");
    const optionsContainer = document.getElementById("options-container");
    const startQuizBtn = document.getElementById("start-quiz");

    function createOptionButton(option) {
        const button = document.createElement("button");
        button.textContent = option.text;
        button.classList.add("option");
        button.dataset.value = option.value;
        button.addEventListener("click", () => handleOptionSelect(option.value));
        return button;
    }

    function handleOptionSelect(value) {
        scores[value]++;
        currentQuestionIndex++;
        showQuestion();
    }

    function showQuestion() {
        if (currentQuestionIndex < questions.length) {
            questionDisplay.textContent = questions[currentQuestionIndex];
            optionsContainer.innerHTML = "";
            answerOptions[currentQuestionIndex].forEach((option, index) => {
                const value = Object.keys(scores)[index];
                const button = createOptionButton({ text: option, value: value });
                optionsContainer.appendChild(button);
            });
        } else {
            displayResults();
        }
    }

    function displayResults() {
        questionDisplay.textContent = "Your Love Language Results!";
        optionsContainer.innerHTML = "";

        Object.keys(scores).forEach(language => {
            const barContainer = document.querySelector(`.bar-container[data-language="${language}"]`);
            if (barContainer) {
                const bar = barContainer.querySelector(".bar");
                const height = scores[language] * 50;
                bar.style.height = `${height}px`;
            }
        });
    }

    startQuizBtn.addEventListener("click", () => {
        currentQuestionIndex = 0;
        scores = { words: 0, acts: 0, gifts: 0, time: 0, touch: 0 };
        showQuestion();
    });

    // DAILY CHALLENGES
    const dailyChallenges = [
        "Compliment someone sincerely today!",
        "Take time to listen deeply to someone you care about.",
        "Offer to help someone with a task they are struggling with.",
        "Plan a surprise, no matter how small, for someone special.",
        "Give someone a hug today, even if it's just a virtual one."
    ];

    const challengeText = document.getElementById("challenge-text");
    const newChallengeBtn = document.getElementById("new-challenge");

    function getRandomChallenge() {
        return dailyChallenges[Math.floor(Math.random() * dailyChallenges.length)];
    }

    newChallengeBtn.addEventListener("click", () => {
        challengeText.textContent = getRandomChallenge();
    });

    // LOVE LANGUAGE CARD SELECTION
    const cards = document.querySelectorAll(".card");

    cards.forEach(card => {
        card.addEventListener("click", () => {
            const selectedLanguage = card.dataset.language;
            scores[selectedLanguage]++;
            alert(`You selected ${card.textContent}. Your ${selectedLanguage} score is now ${scores[selectedLanguage]}.`);
        });
    });


    function showQuestion() {
        if (currentQuestionIndex < questions.length) {
            questionDisplay.textContent = questions[currentQuestionIndex];
            optionsContainer.innerHTML = "";

            answerOptions[currentQuestionIndex].forEach((option, index) => {
                const value = Object.keys(scores)[index];
                const button = createOptionButton({ text: option, value: value });
                optionsContainer.appendChild(button);
            });

            // Update Progress Bar
            const progress = ((currentQuestionIndex + 1) / questions.length) * 100;
            document.getElementById("progress-bar").style.width = `${progress}%`;

        } else {
            displayResults();
        }
    }
    // Stories data
    const stories = {
        words: {
            title: "The Power of Words",
            preview: "A story about the impact of kind words...",
            full: `When Clara lost her job, Mark began leaving daily love notes in her lunchbox. "Your laugh lights up rooms," one read. "Best decision I ever made was choosing you," said another. Over months, these paper hugs rebuilt her confidence.`
        },
        acts: {
            title: "Small Acts, Big Love",
            preview: "When actions speak louder...",
            full: `Emma never noticed how Ethan quietly supported her. He'd wake early to defrost her car, memorize her coffee order, and secretly feed her parking meter.`
        },
        gifts: {
            title: "Meaningful Gestures",
            preview: "The art of thoughtful giving...",
            full: `For their first anniversary, broke student Jake gifted Mia a mason jar filled with 365 folded stars.`
        },
        time: {
            title: "Stolen Moments",
            preview: "Moments that matter most...",
            full: `For their 10th anniversary, Nora planned a surprise - 24 hours unplugged. No phones, no TV, just them.`
        },
        touch: {
            title: "Silent Symphony",
            preview: "Connection beyond words...",
            full: `After losing his hearing in an accident, David learned love's new vocabulary.`
        }
    };

    let currentStoryIndex = 0;
    const storyKeys = Object.keys(stories);

    function createStoryCard(index) {
        const storyContainer = document.getElementById("story-carousel");
        storyContainer.innerHTML = ""; // Clear previous story

        const category = storyKeys[index];
        const story = stories[category];

        const card = document.createElement("div");
        card.classList.add("story-card");
        card.dataset.category = category;

        card.innerHTML = `
            <h3>${story.title}</h3>
            <p class="preview">${story.preview}</p>
            <span class="expand-btn">+</span>
            <div class="full-story" style="display: none;">${story.full}</div>
        `;

        // Add click event for expanding story
        card.querySelector(".expand-btn").addEventListener("click", function () {
            const fullStory = card.querySelector(".full-story");
            fullStory.style.display = fullStory.style.display === "block" ? "none" : "block";
            this.textContent = this.textContent === "+" ? "-" : "+";
        });

        storyContainer.appendChild(card);
    }

    function updateStory(direction) {
        if (direction === "next" && currentStoryIndex < storyKeys.length - 1) {
            currentStoryIndex++;
        } else if (direction === "prev" && currentStoryIndex > 0) {
            currentStoryIndex--;
        }
        createStoryCard(currentStoryIndex);
    }

    // Event listeners for navigation buttons
    document.getElementById("prev-story").addEventListener("click", () => updateStory("prev"));
    document.getElementById("next-story").addEventListener("click", () => updateStory("next"));

    // Load the first story on page load
    createStoryCard(currentStoryIndex);



    // Initialize Map
    var map = L.map('map').setView([20, 0], 2); // Centered on the world

    // Add Tile Layer
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '© OpenStreetMap contributors'
    }).addTo(map);

    // Region Data
    const regions = {
        asia: { lat: 34.0479, lng: 100.6197, info: "Asia: Love is often shown through deep familial bonds and traditions." },
        europe: { lat: 54.5260, lng: 15.2551, info: "Europe: Romance is often expressed through art, poetry, and public gestures." },
        americas: { lat: 37.0902, lng: -95.7129, info: "Americas: Love takes many forms, from passionate Latin dances to simple daily acts of kindness." },
        africa: { lat: 1.2921, lng: 36.8219, info: "Africa: Love is expressed through community, storytelling, and dance." }
    };

    // Add Region Markers
    Object.keys(regions).forEach(region => {
        const { lat, lng, info } = regions[region];
        L.marker([lat, lng]).addTo(map)
            .bindPopup(`<strong>${region.toUpperCase()}</strong><br>${info}`)
            .on('click', function () {
                document.getElementById("region-info").innerText = info;
            });
    });
    
});


</script>

</html>