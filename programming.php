<?php
// programming.php
$sections = [
    [
        'id' => 1,
        'title' => 'What Is a Program?',
        'description' => 'See how computers follow instructions step by step, like a recipe.',
        'estimated_time' => '10–15 min'
    ],
    [
        'id' => 2,
        'title' => 'Sequencing Instructions',
        'description' => 'Put instructions in the right order to make animations and simple games work.',
        'estimated_time' => '10–15 min'
    ],
    [
        'id' => 3,
        'title' => 'Loops and Repeating Actions',
        'description' => 'Use loops to repeat actions instead of writing the same step over and over.',
        'estimated_time' => '15–20 min'
    ],
    [
        'id' => 4,
        'title' => 'If Statements and Decisions',
        'description' => 'Make your projects react to choices, scores, and user input.',
        'estimated_time' => '15–20 min'
    ],
    [
        'id' => 5,
        'title' => 'Debugging Your Code',
        'description' => 'Learn how to find and fix bugs using simple strategies and checklists.',
        'estimated_time' => '10–15 min'
    ],
];
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

        .primary-btn {
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

        @media (max-width: 720px) {
            .page-header h1 {
                font-size: 1.7rem;
            }
        }
    </style>
</head>
<body>
<div class="page-wrapper">
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
                    <a href="#"
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
</div>
</body>
</html>
