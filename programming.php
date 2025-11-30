<?php
// programming.php

$sections = [
    1 => [
        'id' => 1,
        'title' => 'What Is a Program?',
        'description' => 'Learn how computers follow clear instructions, one step at a time, like following a recipe or building instructions.',
        'estimated_time' => '10–15 min',
        'tagline' => 'Programs are precise instructions that tell a computer exactly what to do.',
        'summary' => [
            'A program is like a recipe: it is a list of steps written in a language the computer understands.',
            'Computers cannot think or fill in missing information. They only follow the instructions you give them exactly as they are written.',
            'Every program has a goal, like moving a character, solving a math problem, or responding to a click.',
            'Even tiny mistakes in a program can confuse the computer, which is why clear and complete instructions matter.'
        ],
        'examples' => [
            'A program that shows a message like “Welcome!” when the page loads.',
            'A program that checks your homework answer and tells you if it is correct.',
            'A program that plays music when the space bar is pressed.',
            'A program that makes a robot follow a straight line or turn when it sees a wall.'
        ],
        'quiz' => [
            [
                'question' => 'What is a computer program?',
                'options' => [
                    'A picture you draw on the screen.',
                    'A set of instructions a computer follows.',
                    'A type of computer game controller.'
                ],
                'correct' => 1
            ],
            [
                'question' => 'Why do programs need clear, exact instructions?',
                'options' => [
                    'Computers can read your mind if you are not clear.',
                    'Computers guess what you want anyway.',
                    'Computers only do exactly what the instructions tell them.'
                ],
                'correct' => 2
            ],
            [
                'question' => 'Which of these is most like a program?',
                'options' => [
                    'A recipe that tells you how to bake cookies.',
                    'Random doodles in a notebook.',
                    'A playlist of songs you like.'
                ],
                'correct' => 0
            ],
        ],
    ],
    2 => [
        'id' => 2,
        'title' => 'Sequencing Instructions',
        'description' => 'Learn why instructions must be in the correct order for animations, games, and actions to work correctly.',
        'estimated_time' => '10–15 min',
        'tagline' => 'The order of steps changes the result — even if you use the same steps.',
        'summary' => [
            '“Sequencing” means putting instructions in the correct order so the result makes sense.',
            'Computers read code from top to bottom, doing each step one after another.',
            'If steps are out of order, the result can be weird or wrong (imagine putting on shoes before socks).',
            'Good sequencing helps your program run smoothly and do exactly what you expect.'
        ],
        'examples' => [
            'Show the background first, then show the characters so they appear on top.',
            'Ask for the user’s name first, then say “Hello” using that name.',
            'Start the game timer at the beginning of the game, not at the end.',
            'Put on socks, then put on shoes — not the other way around!'
        ],
        'quiz' => [
            [
                'question' => 'What does sequencing mean in programming?',
                'options' => [
                    'Changing the colors of the program.',
                    'Putting instructions in a clear, correct order.',
                    'Deleting instructions you do not like.'
                ],
                'correct' => 1
            ],
            [
                'question' => 'Which is the best order for making a sandwich?',
                'options' => [
                    'Eat the sandwich, then make it.',
                    'Put bread, then filling, then bread on top.',
                    'Put the plate away, then put the filling on the table.'
                ],
                'correct' => 1
            ],
            [
                'question' => 'Why is the order of code important?',
                'options' => [
                    'Because computers do steps one after another.',
                    'Because computers always skip the first step.',
                    'Because the order does not matter at all.'
                ],
                'correct' => 0
            ],
        ],
    ],
    3 => [
        'id' => 3,
        'title' => 'Loops and Repeating Actions',
        'description' => 'Learn how loops repeat actions automatically so you do not have to write the same code over and over.',
        'estimated_time' => '15–20 min',
        'tagline' => 'Loops repeat instructions efficiently.',
        'summary' => [
            'A loop tells the computer to repeat a group of instructions multiple times.',
            'Loops save time and keep your code shorter by avoiding copy-and-paste of the same steps.',
            'Loops can repeat a set number of times or repeat until something happens.',
            'Loops are useful for animations, character movement, patterns, score counting, and more.'
        ],
        'examples' => [
            'Repeat 10 times: move 10 steps to make a character walk forward.',
            'Repeat 4 times: move and turn 90 degrees to draw a square.',
            'Repeat until the score reaches 5: add 1 to score each time you collect a coin.',
            'Forever: keep checking if a key is pressed so the character can move whenever the player wants.'
        ],
        'quiz' => [
            [
                'question' => 'What does a loop do?',
                'options' => [
                    'Repeats instructions multiple times.',
                    'Deletes instructions after one use.',
                    'Turns your program into a picture.'
                ],
                'correct' => 0
            ],
            [
                'question' => 'When is a loop most helpful?',
                'options' => [
                    'When you want to repeat the same action many times.',
                    'When you only want to do something once.',
                    'When you want to turn the computer off.'
                ],
                'correct' => 0
            ],
            [
                'question' => 'Which block is usually a loop?',
                'options' => [
                    '“If score > 10 then …”',
                    '“Repeat 5 times …”',
                    '“Set score to 0”'
                ],
                'correct' => 1
            ],
        ],
    ],
    4 => [
        'id' => 4,
        'title' => 'If Statements and Decisions',
        'description' => 'Learn how your projects can react to choices, scores, time, and user input using conditions.',
        'estimated_time' => '15–20 min',
        'tagline' => 'If statements help your program choose what to do next.',
        'summary' => [
            'An “if” statement checks a condition — something that can be true or false.',
            'If the condition is true, the computer runs the code inside the if block.',
            'If the condition is false, the computer skips that block or uses an “else” block instead.',
            'Conditions can check numbers, key presses, collisions, timers, and much more.',
            'If statements make your programs interactive and allow them to respond to what is happening.'
        ],
        'examples' => [
            'If the player touches a coin, increase the score by 1.',
            'If time left is 0, show “Game Over” and stop the game.',
            'If the space key is pressed, make the character jump.',
            'If the character reaches the finish line, go to the next level or show “You win!”.'
        ],
        'quiz' => [
            [
                'question' => 'What does an “if” statement do?',
                'options' => [
                    'Repeats code over and over.',
                    'Lets the program make a decision.',
                    'Draws shapes on the screen.'
                ],
                'correct' => 1
            ],
            [
                'question' => 'Which is an example of an if statement?',
                'options' => [
                    'If score is 10, show “You win!”.',
                    'Repeat 10 times: move 10 steps.',
                    'Set score to 0.'
                ],
                'correct' => 0
            ],
            [
                'question' => 'When does the code inside an “if” block run?',
                'options' => [
                    'Only when the condition is true.',
                    'Only at the start of the game.',
                    'Every time, no matter what.'
                ],
                'correct' => 0
            ],
        ],
    ],
    5 => [
        'id' => 5,
        'title' => 'Debugging Your Code',
        'description' => 'Learn simple ways to find mistakes in your code and fix them using clear strategies.',
        'estimated_time' => '10–15 min',
        'tagline' => 'Debugging is the process of finding mistakes and fixing them.',
        'summary' => [
            'A “bug” is a mistake in your code that makes the program behave in a way you do not expect.',
            '“Debugging” is the process of finding those bugs and fixing them.',
            'Common bugs include wrong order of instructions, missing blocks, incorrect numbers, or spelling mistakes in names.',
            'Good debuggers test their code often, read error messages, and change one thing at a time.',
            'Reading what the computer tried to do helps you understand where the problem is.'
        ],
        'examples' => [
            'Adding a missing block so the character jumps when you press the space bar.',
            'Fixing a spelling mistake in a variable name so the score starts to change correctly.',
            'Changing “move 100 steps” to “move 10 steps” so the sprite stays on the screen.',
            'Reordering instructions so the background loads before the characters appear.'
        ],
        'quiz' => [
            [
                'question' => 'What is a “bug” in a program?',
                'options' => [
                    'An actual insect on the computer.',
                    'A mistake in the code.',
                    'A new feature you added on purpose.'
                ],
                'correct' => 1
            ],
            [
                'question' => 'What does “debugging” mean?',
                'options' => [
                    'Adding more random code.',
                    'Ignoring errors until they go away.',
                    'Finding and fixing problems in the code.'
                ],
                'correct' => 2
            ],
            [
                'question' => 'Which is a good debugging strategy?',
                'options' => [
                    'Test the program, change one thing, then test again.',
                    'Change many things at once and hope it works.',
                    'Give up as soon as you see an error.'
                ],
                'correct' => 0
            ],
        ],
    ],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Programming – STEM Explorer</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Same font/icons as Algo-Adventure -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

          <style>
    :root {
        --bg-color: #F5F7FA;
        --card-bg: #FFFFFF;
        --text-dark: #2D3748;
        --text-light: #718096;

        /* Pastel palette similar to algorithms page */
        --color-1: #E57373;   /* Programs - coral */
        --color-2: #81C784;   /* Sequencing - green */
        --color-3: #4DB6AC;   /* Loops - teal */
        --color-4: #9575CD;   /* If statements - purple */
        --color-5: #FFB74D;   /* Debugging - orange */
    }

    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    body {
        font-family: 'Nunito', sans-serif;
        background-color: var(--bg-color);
        color: var(--text-dark);
        min-height: 100vh;
        margin: 0;              /* no padding here */
    }

    /* Shared header + main page share the same centered column */
    #shared-header,
    .page-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;        /* horizontal padding */
    }

    /* Extra bottom padding just for the main content area */
    .page-container {
        padding-bottom: 40px;
    }

    /* Make top-level blocks inside the container align */
    header.page-header,
    .dashboard,
    .lesson-section {
        width: 100%;
    }

    /* Anchor for back-to-top scroll */
    #top-anchor {
        height: 0;
        width: 100%;
    }

    header.page-header {
        text-align: center;
        margin-top: 20px; /* keeps it "attached" near top */
        margin-bottom: 40px;
    }

    header.page-header h1 {
        font-weight: 800;
        font-size: 2rem;
        color: var(--text-dark);
    }

    header.page-header p.subtitle {
        color: var(--text-light);
        font-weight: 600;
        margin-top: 5px;
    }

    /* Dashboard */
    .dashboard {
        background: white;
        padding: 40px;
        border-radius: 24px;
        box-shadow: 0 10px 25px rgba(0,0,0,0.05);
    }

    .section-title {
        font-size: 1.2rem;
        font-weight: 700;
        margin-bottom: 20px;
        color: var(--text-dark);
    }

    .card-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
        gap: 20px;
    }

    .card {
        background: var(--card-bg);
        border-radius: 16px;
        padding: 30px 20px;
        text-align: center;
        cursor: pointer;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        color: white;
        min-height: 160px;
        position: relative;
        overflow: hidden;
    }

    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.15);
    }

    .card i {
        font-size: 2.3rem;
        margin-bottom: 15px;
    }

    .card span {
        font-weight: 700;
        font-size: 1.05rem;
        line-height: 1.3;
    }

    .card.lesson-1 { background-color: var(--color-1); }
    .card.lesson-2 { background-color: var(--color-2); }
    .card.lesson-3 { background-color: var(--color-3); }
    .card.lesson-4 { background-color: var(--color-4); }
    .card.lesson-5 { background-color: var(--color-5); }

    /* Lesson sections styled like algorithm intro sections */
    .lesson-section {
        border-radius: 25px;
        overflow: hidden;
        box-shadow: 0 8px 32px rgba(0,0,0,0.06);
        margin: 2.5rem auto 0 auto;
    }

    .lesson-inner {
        padding: 2.5rem 2rem 2rem 2rem;
    }

    .lesson-top-row {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 0.75rem;
        margin-bottom: 1.5rem;
    }

    .lesson-top-row .icon-circle {
        font-size: 3rem;
        filter: drop-shadow(0 2px 8px rgba(0,0,0,0.12));
    }

    .lesson-top-row h2 {
        font-size: 2rem;
        font-weight: 900;
        letter-spacing: 0.5px;
    }

    .lesson-tagline {
        text-align: center;
        color: var(--text-light);
        font-weight: 600;
        max-width: 600px;
        margin: 0 auto 0.5rem auto;
    }

    h3.subheading {
        margin-top: 1.2rem;
        margin-bottom: 0.4rem;
        font-size: 1.05rem;
        font-weight: 800;
        letter-spacing: 0.5px;
    }

    .concept-box {
        border-left: 7px solid #e57373;
        padding: 18px 20px 14px 20px;
        border-radius: 14px;
        margin: 0.6rem 0 0.9rem 0;
        box-shadow: 0 2px 8px rgba(0,0,0,0.04);
    }

    .concept-box strong {
        font-size: 1.02rem;
    }

    .concept-box ul {
        margin-left: 1.2rem;
        margin-top: 0.4rem;
    }

    .concept-box li {
        margin-bottom: 0.25rem;
    }

    .examples-list {
        margin-left: 1.2rem;
        margin-bottom: 0.7rem;
        color: var(--text-dark);
    }

    .examples-list li {
        margin-bottom: 0.3rem;
    }

    /* Per-lesson gradients + accents */
    .lesson-1-section {
        background: linear-gradient(135deg, #ffb6b9 0%, #fcd5ce 100%);
    }
    .lesson-1-section .lesson-inner {
        background: linear-gradient(90deg, #fffde4 55%, #ffe0e9 100%);
    }
    .lesson-1-section h2,
    .lesson-1-section h3.subheading { color: #ad2831; }
    .lesson-1-section .concept-box {
        background: linear-gradient(90deg, #fffde4 60%, #ffe0e9 100%);
        border-left-color: #e57373;
    }
    .lesson-1-section .concept-box strong { color: #e57373; }

    .lesson-2-section {
        background: linear-gradient(135deg, #b2f7c1 0%, #e0f7ef 100%);
    }
    .lesson-2-section .lesson-inner {
        background: linear-gradient(90deg, #e8f5e9 60%, #b2f7c1 100%);
    }
    .lesson-2-section h2,
    .lesson-2-section h3.subheading { color: #388e3c; }
    .lesson-2-section .concept-box {
        background: linear-gradient(90deg, #e8f5e9 60%, #b2f7c1 100%);
        border-left-color: #81c784;
    }
    .lesson-2-section .concept-box strong { color: #81c784; }

    .lesson-3-section {
        background: linear-gradient(135deg, #7de3e1 0%, #e0f7fa 100%);
    }
    .lesson-3-section .lesson-inner {
        background: linear-gradient(90deg, #e0f7fa 60%, #7de3e1 100%);
    }
    .lesson-3-section h2,
    .lesson-3-section h3.subheading { color: #00897b; }
    .lesson-3-section .concept-box {
        background: linear-gradient(90deg, #e0f7fa 60%, #7de3e1 100%);
        border-left-color: #4db6ac;
    }
    .lesson-3-section .concept-box strong { color: #4db6ac; }

    .lesson-4-section {
        background: linear-gradient(135deg, #b39ddb 0%, #ede7f6 100%);
    }
    .lesson-4-section .lesson-inner {
        background: linear-gradient(90deg, #ede7f6 60%, #b39ddb 100%);
    }
    .lesson-4-section h2,
    .lesson-4-section h3.subheading { color: #512da8; }
    .lesson-4-section .concept-box {
        background: linear-gradient(90deg, #ede7f6 60%, #b39ddb 100%);
        border-left-color: #9575cd;
    }
    .lesson-4-section .concept-box strong { color: #9575cd; }

    .lesson-5-section {
        background: linear-gradient(135deg, #ffe0b2 0%, #fff3e0 100%);
    }
    .lesson-5-section .lesson-inner {
        background: linear-gradient(90deg, #fff3e0 60%, #ffe0b2 100%);
    }
    .lesson-5-section h2,
    .lesson-5-section h3.subheading { color: #f57c00; }
    .lesson-5-section .concept-box {
        background: linear-gradient(90deg, #fff3e0 60%, #ffe0b2 100%);
        border-left-color: #ffb74d;
    }
    .lesson-5-section .concept-box strong { color: #ffb74d; }

    /* Quiz box */
    .quiz-box {
        margin-top: 1.25rem;
        background: rgba(255,255,255,0.85);
        border-radius: 16px;
        padding: 1.1rem 1.2rem;
        box-shadow: 0 4px 18px rgba(0,0,0,0.05);
    }

    .quiz-box h3 {
        font-size: 1rem;
        margin-bottom: 0.6rem;
    }

    .quiz-question {
        margin-bottom: 0.7rem;
    }

    .quiz-question h4 {
        font-size: 0.95rem;
        margin-bottom: 0.25rem;
    }

    .options-group {
        display: flex;
        flex-direction: column;
        gap: 0.25rem;
        font-size: 0.9rem;
        color: var(--text-dark);
    }

    .options-group label {
        display: flex;
        gap: 0.4rem;
        cursor: pointer;
    }

    .quiz-footer {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: 0.7rem;
        flex-wrap: wrap;
        gap: 0.5rem;
    }

    .quiz-result {
        margin-top: 0.5rem;
        font-size: 0.85rem;
    }

    .score-pill {
        display: inline-block;
        padding: 0.25rem 0.7rem;
        border-radius: 999px;
        font-size: 0.8rem;
        border: 1px solid rgba(0,0,0,0.15);
        background: #F7FAFC;
        margin-bottom: 0.25rem;
    }

    .score-good {
        border-color: #81C784;
        color: #2e7d32;
    }

    .score-bad {
        border-color: #E57373;
        color: #c62828;
    }

    .primary-btn {
        border: none;
        background: #2D3748;
        color: white;
        border-radius: 999px;
        padding: 0.4rem 0.9rem;
        font-size: 0.85rem;
        font-weight: 700;
        cursor: pointer;
    }

    .primary-btn:hover {
        background: #1a202c;
    }

    .secondary-link {
        font-size: 0.85rem;
        color: var(--text-dark);
        text-decoration: underline;
        cursor: pointer;
    }

    @media (max-width: 800px) {
        .dashboard {
            padding: 24px;
        }
        .lesson-inner {
            padding: 2rem 1.4rem 1.6rem;
        }
    }
</style>

</head>
<body>

<div id="shared-header"></div>
<script>
    fetch('header.html')
        .then(response => response.text())
        .then(data => {
            document.getElementById('shared-header').innerHTML = data;
        });
</script>

<div class="page-container" id="top">
    <div id="top-anchor"></div>

    <header class="page-header">
        <i class="fas fa-code" style="font-size: 3rem; color: #FFB74D; margin-bottom:10px;"></i>
        <h1>Programming Basics</h1>
        <p class="subtitle">Learn how to talk to computers using clear, logical instructions.</p>
    </header>

    <!-- Mission Control style dashboard -->
    <div class="dashboard">
        <div class="section-title">Mission Control</div>
        <div class="card-grid">
            <div class="card lesson-1" onclick="scrollToSection('lesson-1')">
                <i class="fas fa-file-code"></i>
                <span>What Is a Program?</span>
            </div>
            <div class="card lesson-2" onclick="scrollToSection('lesson-2')">
                <i class="fas fa-list-ol"></i>
                <span>Sequencing Instructions</span>
            </div>
            <div class="card lesson-3" onclick="scrollToSection('lesson-3')">
                <i class="fas fa-redo-alt"></i>
                <span>Loops & Repeating</span>
            </div>
            <div class="card lesson-4" onclick="scrollToSection('lesson-4')">
                <i class="fas fa-code-branch"></i>
                <span>If Statements & Choices</span>
            </div>
            <div class="card lesson-5" onclick="scrollToSection('lesson-5')">
                <i class="fas fa-bug"></i>
                <span>Debugging Your Code</span>
            </div>
        </div>
    </div>

    <!-- Lesson sections -->
    <?php foreach ($sections as $section): ?>
        <?php
            $id   = $section['id'];
            $quiz = $section['quiz'];
        ?>
        <section id="lesson-<?php echo $id; ?>" class="lesson-section lesson-<?php echo $id; ?>-section">
            <div class="lesson-inner">
                <div class="lesson-top-row">
                    <div class="icon-circle">
                        <?php if ($id === 1): ?>
                            <i class="fas fa-file-code"></i>
                        <?php elseif ($id === 2): ?>
                            <i class="fas fa-list-ol"></i>
                        <?php elseif ($id === 3): ?>
                            <i class="fas fa-redo-alt"></i>
                        <?php elseif ($id === 4): ?>
                            <i class="fas fa-code-branch"></i>
                        <?php else: ?>
                            <i class="fas fa-bug"></i>
                        <?php endif; ?>
                    </div>
                    <h2><?php echo htmlspecialchars($section['title']); ?></h2>
                    <p class="lesson-tagline">
                        <?php echo htmlspecialchars($section['tagline']); ?>
                        &nbsp;·&nbsp; <?php echo htmlspecialchars($section['estimated_time']); ?>
                    </p>
                </div>

                <h3 class="subheading">Key Ideas</h3>
                <div class="concept-box">
                    <strong>What you should remember:</strong>
                    <ul>
                        <?php foreach ($section['summary'] as $paragraph): ?>
                            <li><?php echo htmlspecialchars($paragraph); ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <h3 class="subheading">Examples</h3>
                <ul class="examples-list">
                    <?php foreach ($section['examples'] as $example): ?>
                        <li><?php echo htmlspecialchars($example); ?></li>
                    <?php endforeach; ?>
                </ul>

                <div class="quiz-box">
                    <h3>Quick Quiz (3 Questions)</h3>

                    <form class="quiz-form" data-lesson="<?php echo $id; ?>">
                        <?php foreach ($quiz as $index => $q): ?>
                            <div class="quiz-question" data-correct="<?php echo (int)$q['correct']; ?>">
                                <h4>Question <?php echo $index + 1; ?>: <?php echo htmlspecialchars($q['question']); ?></h4>
                                <div class="options-group">
                                    <?php foreach ($q['options'] as $optIndex => $option): ?>
                                        <label>
                                            <input
                                                type="radio"
                                                name="q<?php echo $id . '_' . $index; ?>"
                                                value="<?php echo $optIndex; ?>"
                                            >
                                            <span><?php echo htmlspecialchars($option); ?></span>
                                        </label>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        <?php endforeach; ?>

                        <div class="quiz-footer">
                            <button type="submit" class="primary-btn">Submit Answers</button>
                            <span class="secondary-link" onclick="scrollToSection('top')">Back to top</span>
                        </div>
                        <div class="quiz-result" id="quiz-result-<?php echo $id; ?>"></div>
                    </form>
                </div>
            </div>
        </section>
    <?php endforeach; ?>
</div>

<script>
    function scrollToSection(id) {
        const el = document.getElementById(id);
        if (el) {
            el.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
    }

    // Client-side quiz scoring (no page refresh)
    document.querySelectorAll('.quiz-form').forEach(form => {
        form.addEventListener('submit', function (e) {
            e.preventDefault();

            const lessonId = form.dataset.lesson;
            const questions = form.querySelectorAll('.quiz-question');
            let score = 0;
            let total = questions.length;

            questions.forEach((q, idx) => {
                const correct = parseInt(q.dataset.correct, 10);
                const name = `q${lessonId}_${idx}`;
                const selected = form.querySelector(`input[name="${name}"]:checked`);
                if (selected && parseInt(selected.value, 10) === correct) {
                    score++;
                }
            });

            const resultDiv = document.getElementById(`quiz-result-${lessonId}`);
            if (resultDiv) {
                const good = score >= Math.ceil(total / 2);
                let feedback = '';

                if (score === total) {
                    feedback = 'Awesome! You got everything right. 🎉';
                } else if (score === 0) {
                    feedback = 'That is okay — this is how we learn. Review the ideas above and try again!';
                } else {
                    feedback = 'Nice work! You can review the lesson and retake the quiz if you’d like to improve.';
                }

                resultDiv.innerHTML = `
                    <div class="score-pill ${good ? 'score-good' : 'score-bad'}">
                        You scored ${score} out of ${total}.
                    </div>
                    <div>${feedback}</div>
                `;
            }
        });
    });
</script>

</body>
</html>
