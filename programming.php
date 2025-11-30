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


// detect if we're in "lesson view"
$lessonId = filter_input(
    INPUT_GET,
    'lesson',
    FILTER_VALIDATE_INT,
    ['options' => ['min_range' => 1, 'max_range' => count($sections)]]
);

$isLessonView = $lessonId !== false && $lessonId !== null;

$score = null;
$answers = [];

if ($isLessonView) {
    $lesson = $sections[$lessonId];
    $quiz   = $lesson['quiz'];

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $score = 0;
        foreach ($quiz as $index => $q) {
            $fieldName = 'q' . $index;
            if (isset($_POST[$fieldName])) {
                $answers[$index] = (int)$_POST[$fieldName];
                if ($answers[$index] === $q['correct']) {
                    $score++;
                }
            } else {
                $answers[$index] = null;
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Programming Course – STEM Explorer</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        :root {
            --bg: #0b1020;
            --card-bg: #141b33;
            --accent: #ffb347;
            --accent-soft: #ffe3b3;
            --text-main: #f4f4f8;
            --text-soft: #b8bed6;
            --danger: #ff7676;
            --success: #7edc7e;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
        }

        body {
            background: radial-gradient(circle at top, #1d2750, #050814 60%);
            color: var(--text-main);
            min-height: 100vh;
        }

        .page-wrapper {
            max-width: 1000px;
            margin: 2.5rem auto;
            padding: 0 1.25rem 3rem;
        }

        .breadcrumb {
            font-size: 0.85rem;
            margin-bottom: 1rem;
            color: var(--text-soft);
        }

        .breadcrumb a {
            color: var(--accent-soft);
            text-decoration: none;
        }

        .breadcrumb a:hover {
            text-decoration: underline;
        }

        .page-header {
            margin-bottom: 1.75rem;
        }

        .page-header h1 {
            font-size: 2rem;
            margin-bottom: 0.4rem;
        }

        .page-header p {
            font-size: 0.95rem;
            max-width: 640px;
            color: var(--text-soft);
        }

        .meta-row {
            display: flex;
            flex-wrap: wrap;
            gap: 0.75rem;
            margin-top: 0.75rem;
            font-size: 0.85rem;
            color: var(--text-soft);
        }

        .meta-pill {
            padding: 0.25rem 0.7rem;
            border-radius: 999px;
            border: 1px solid rgba(255,255,255,0.18);
            background: rgba(0,0,0,0.25);
        }

        .lesson-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 1.1rem;
            margin-top: 1.25rem;
        }

        .lesson-card {
            background: var(--card-bg);
            border-radius: 16px;
            padding: 1rem 1.1rem;
            border: 1px solid rgba(255,255,255,0.08);
            box-shadow: 0 12px 32px rgba(0,0,0,0.4);
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
        }

        .lesson-label {
            font-size: 0.75rem;
            text-transform: uppercase;
            letter-spacing: 0.16em;
            color: var(--accent-soft);
        }

        .lesson-title {
            font-size: 1.1rem;
            font-weight: 600;
        }

        .lesson-desc {
            font-size: 0.9rem;
            color: var(--text-soft);
        }

        .lesson-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 0.4rem;
            font-size: 0.8rem;
            color: var(--text-soft);
        }

        .primary-btn,
        .secondary-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            border-radius: 999px;
            padding: 0.35rem 0.85rem;
            font-size: 0.8rem;
            border: 1px solid var(--accent);
            background: var(--accent);
            color: #20120a;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.18s ease, transform 0.1s ease;
        }

        .primary-btn:hover {
            background: #ffd18b;
            transform: translateY(-1px);
        }

        .secondary-btn {
            border-color: rgba(255,255,255,0.35);
            background: transparent;
            color: var(--accent-soft);
        }

        .secondary-btn:hover {
            background: rgba(0,0,0,0.35);
        }

        .hint-panel {
            margin-top: 1.75rem;
            padding: 0.85rem 1rem;
            border-radius: 12px;
            border: 1px dashed rgba(255,255,255,0.18);
            background: rgba(0,0,0,0.35);
            font-size: 0.85rem;
            color: var(--text-soft);
        }

        .hint-panel strong {
            color: var(--accent-soft);
        }

        /* Lesson view extras */
        .content-card {
            background: var(--card-bg);
            border-radius: 16px;
            padding: 1.25rem 1.4rem;
            border: 1px solid rgba(255,255,255,0.08);
            box-shadow: 0 12px 32px rgba(0,0,0,0.4);
            margin-bottom: 1.25rem;
        }

        .content-card h2 {
            font-size: 1.1rem;
            margin-bottom: 0.6rem;
        }

        .content-card p {
            font-size: 0.9rem;
            color: var(--text-soft);
            margin-bottom: 0.5rem;
        }

        .content-card ul {
            font-size: 0.9rem;
            color: var(--text-soft);
            margin-left: 1.1rem;
            margin-bottom: 0.3rem;
        }

        .content-card li {
            margin-bottom: 0.25rem;
        }

        .quiz-card {
            background: var(--card-bg);
            border-radius: 16px;
            padding: 1.25rem 1.4rem;
            border: 1px solid rgba(255,255,255,0.12);
            box-shadow: 0 14px 36px rgba(0,0,0,0.5);
            margin-top: 1.25rem;
        }

        .quiz-card h2 {
            font-size: 1.1rem;
            margin-bottom: 0.7rem;
        }

        .quiz-question {
            margin-bottom: 1rem;
        }

        .quiz-question h3 {
            font-size: 0.95rem;
            margin-bottom: 0.3rem;
        }

        .options-group {
            display: flex;
            flex-direction: column;
            gap: 0.25rem;
        }

        .option-label {
            display: flex;
            align-items: flex-start;
            gap: 0.4rem;
            font-size: 0.9rem;
            color: var(--text-soft);
            cursor: pointer;
        }

        .option-label input[type="radio"] {
            margin-top: 0.1rem;
        }

        .quiz-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 0.75rem;
        }

        .score-pill {
            padding: 0.25rem 0.7rem;
            border-radius: 999px;
            font-size: 0.8rem;
            border: 1px solid rgba(255,255,255,0.2);
            background: rgba(0,0,0,0.35);
        }

        .score-pill.good {
            border-color: var(--success);
        }

        .score-pill.bad {
            border-color: var(--danger);
        }

        .feedback-text {
            font-size: 0.8rem;
            color: var(--text-soft);
            margin-top: 0.25rem;
        }

        @media (max-width: 720px) {
            .page-header h1 {
                font-size: 1.7rem;
            }

            .quiz-footer {
                flex-direction: column;
                align-items: flex-start;
                gap: 0.6rem;
            }
        }
    </style>
</head>
<body>
<div class="page-wrapper">
    <?php if (!$isLessonView): ?>
        <!-- LIST VIEW (default) -->
        <nav class="breadcrumb">
            <a href="dashboard.php">← Back to Dashboard</a> / Programming
        </nav>

        <header class="page-header">
            <h1>Programming</h1>
            <p>
                Learn how to give clear instructions to a computer, repeat actions with loops,
                make decisions with if statements, and fix bugs in your projects.
                Start with any lesson below.
            </p>
            <div class="meta-row">
                <span class="meta-pill">Beginner Course</span>
                <span class="meta-pill"><?php echo count($sections); ?> lessons</span>
                <span class="meta-pill">Estimated: ~1 hour total</span>
            </div>
        </header>

        <section class="lesson-grid">
            <?php foreach ($sections as $section): ?>
                <article class="lesson-card">
                    <div class="lesson-label">Lesson <?php echo $section['id']; ?></div>
                    <h2 class="lesson-title">
                        <?php echo htmlspecialchars($section['title']); ?>
                    </h2>
                    <p class="lesson-desc">
                        <?php echo htmlspecialchars($section['description']); ?>
                    </p>
                    <div class="lesson-footer">
                        <span><?php echo htmlspecialchars($section['estimated_time']); ?></span>
                        <a href="programming.php?lesson=<?php echo $section['id']; ?>"
                           class="primary-btn">
                            Open Lesson
                        </a>
                    </div>
                </article>
            <?php endforeach; ?>
        </section>

        <div class="hint-panel">
            <strong>Idea for your study / usability tasks:</strong>
            Ask students to find which lesson teaches loops, which one introduces if
            statements, and which lesson helps them debug. They can answer everything
            using only this Programming page.
        </div>

    <?php else: ?>
        <!-- LESSON DETAIL + QUIZ VIEW -->
        <nav class="breadcrumb">
            <a href="programming.php">← Back to Programming</a> / Lesson <?php echo $lessonId; ?>
        </nav>

        <header class="page-header">
            <h1><?php echo htmlspecialchars($lesson['title']); ?></h1>
            <p><?php echo htmlspecialchars($lesson['tagline']); ?></p>
        </header>

        <section class="content-card">
            <h2>Key Ideas</h2>
            <?php foreach ($lesson['summary'] as $paragraph): ?>
                <p><?php echo htmlspecialchars($paragraph); ?></p>
            <?php endforeach; ?>
        </section>

        <section class="content-card">
            <h2>Examples</h2>
            <ul>
                <?php foreach ($lesson['examples'] as $example): ?>
                    <li><?php echo htmlspecialchars($example); ?></li>
                <?php endforeach; ?>
            </ul>
        </section>

        <section class="quiz-card">
            <h2>Quick Quiz (3 Questions)</h2>

            <?php if ($score !== null): ?>
                <?php
                $total = count($quiz);
                $good  = $score >= 2;
                ?>
                <div class="score-pill <?php echo $good ? 'good' : 'bad'; ?>">
                    You scored <?php echo $score; ?> out of <?php echo $total; ?>.
                </div>
                <div class="feedback-text">
                    <?php if ($score === $total): ?>
                        Awesome! You got everything right. 🎉
                    <?php elseif ($score === 0): ?>
                        That is okay — this is how we learn. Review the ideas above and try again!
                    <?php else: ?>
                        Nice work! You can review the lesson and retake the quiz if you’d like to improve.
                    <?php endif; ?>
                </div>
            <?php endif; ?>

            <form method="post">
                <?php foreach ($quiz as $index => $q): ?>
                    <div class="quiz-question">
                        <h3>Question <?php echo $index + 1; ?>: <?php echo htmlspecialchars($q['question']); ?></h3>
                        <div class="options-group">
                            <?php foreach ($q['options'] as $optIndex => $option): ?>
                                <label class="option-label">
                                    <input
                                        type="radio"
                                        name="q<?php echo $index; ?>"
                                        value="<?php echo $optIndex; ?>"
                                        <?php
                                        if (isset($answers[$index]) && $answers[$index] === $optIndex) {
                                            echo 'checked';
                                        }
                                        ?>
                                    >
                                    <span><?php echo htmlspecialchars($option); ?></span>
                                </label>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endforeach; ?>

                <div class="quiz-footer">
                    <button type="submit" class="primary-btn">Submit Answers</button>
                    <a href="programming.php" class="secondary-btn">Back to Programming</a>
                </div>
            </form>
        </section>
    <?php endif; ?>
</div>
</body>
</html>
