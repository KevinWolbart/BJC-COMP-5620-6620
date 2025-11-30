<?php
//THIS IS A FILE FOR UI DESIGN CLASS. I UPLOADED IT TO MEGHANMURPHY.US
//  AS A WAY TO SEE THE WEBPAGE ON LAPTOP AND MOBILE TO MAKE SURE IT LOOKED GOOD.
$courses = [
    [
        'id' => 'algorithms',
        'title' => 'Algorithms',
        'level' => 'Intermediate',
        'lessons' => 5,
        'progress' => 40,
        'sections' => [
            'Intro to Algorithms',
            'Divide and Conquer Search Algorithms',
            'Data Structures in Algorithms',
            'Sorting and Searching Practice',
            'Challenge Problems'
        ],
        'data_structures' => ['Array', 'Linked List', 'Binary Search Tree', 'Hash Table'],
        'divide_and_conquer' => ['Binary Search', 'Ternary Search'],
        'bst_definition' => 'A Binary Search Tree is a tree data structure where each node has up to two children and all values in the left subtree are smaller and all values in the right subtree are larger.'
    ],
    [
        'id' => 'abstraction',
        'title' => 'Abstraction',
        'level' => 'Beginner',
        'lessons' => 3,
        'progress' => 20,
        'sections' => [
            'What Is Abstraction?',
            'Breaking Problems Into Smaller Pieces',
            'Abstraction in Games and Apps'
        ]
    ],
    [
        'id' => 'programming',
        'title' => 'Programming',
        'level' => 'Beginner',
        'lessons' => 5,
        'progress' => 0,
        'sections' => [
            'What Is a Program?',
            'Sequencing Instructions',
            'Loops and Repeating Actions',
            'If Statements and Decisions',
            'Debugging Your Code'
        ]
    ]
];

$totalLessons = array_sum(array_column($courses, 'lessons'));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>STEM Explorer Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Inline CSS for now; you can move this into a separate .css file later -->
    <style>
        :root {
            --bg: #0b1020;
            --card-bg: #141b33;
            --accent: #ffb347;
            --accent-soft: #ffe3b3;
            --text-main: #f4f4f8;
            --text-soft: #b8bed6;
            --danger: #f06f6f;
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

        .dashboard-wrapper {
            max-width: 1100px;
            margin: 2.5rem auto;
            padding: 0 1.25rem 3rem;
        }

        .dashboard-header {
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
            margin-bottom: 1.75rem;
        }

        .dashboard-header h1 {
            font-size: 2.1rem;
            letter-spacing: 0.03em;
        }

        .dashboard-header p {
            color: var(--text-soft);
            max-width: 620px;
            font-size: 0.95rem;
        }

        .summary-strip {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
            margin-bottom: 1.75rem;
        }

        .summary-card {
            flex: 1 1 220px;
            background: linear-gradient(130deg, #161d39, #12172a);
            border-radius: 16px;
            padding: 1rem 1.1rem;
            border: 1px solid rgba(255,255,255,0.06);
            display: flex;
            flex-direction: column;
            gap: 0.4rem;
        }

        .summary-label {
            font-size: 0.75rem;
            text-transform: uppercase;
            letter-spacing: 0.12em;
            color: var(--text-soft);
        }

        .summary-value {
            font-size: 1.4rem;
            font-weight: 600;
        }

        .summary-hint {
            font-size: 0.82rem;
            color: var(--text-soft);
        }

        .course-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 1.25rem;
        }

        .course-card {
            position: relative;
            background: var(--card-bg);
            border-radius: 18px;
            padding: 1.25rem 1.25rem 1rem;
            border: 1px solid rgba(255,255,255,0.05);
            box-shadow: 0 14px 40px rgba(0,0,0,0.35);
            display: flex;
            flex-direction: column;
            gap: 0.75rem;
            cursor: pointer;
            transition: transform 0.18s ease, box-shadow 0.18s ease, border-color 0.18s ease;
        }

        .course-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 18px 48px rgba(0,0,0,0.45);
            border-color: rgba(255, 179, 71, 0.55);
        }

        .course-tag {
            font-size: 0.7rem;
            text-transform: uppercase;
            letter-spacing: 0.16em;
            color: var(--accent-soft);
        }

        .course-title-row {
            display: flex;
            justify-content: space-between;
            align-items: baseline;
            gap: 0.4rem;
        }

        .course-title {
            font-size: 1.25rem;
            font-weight: 600;
        }

        .course-lessons {
            font-size: 0.82rem;
            color: var(--text-soft);
        }

        .progress-bar {
            width: 100%;
            height: 7px;
            border-radius: 999px;
            background: rgba(255,255,255,0.08);
            overflow: hidden;
            margin-top: 0.2rem;
        }

        .progress-fill {
            height: 100%;
            width: 0;
            border-radius: 999px;
            background: linear-gradient(90deg, var(--accent), #ffdf8a);
            transition: width 0.35s ease-out;
        }

        .course-meta {
            display: flex;
            justify-content: space-between;
            font-size: 0.8rem;
            color: var(--text-soft);
        }

        .course-actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 0.4rem;
            gap: 0.5rem;
        }

        .primary-btn,
        .ghost-btn {
            border-radius: 999px;
            padding: 0.4rem 0.9rem;
            font-size: 0.8rem;
            border: 1px solid transparent;
            background: transparent;
            color: var(--text-main);
            cursor: pointer;
            transition: background 0.18s ease, color 0.18s ease, border-color 0.18s ease, transform 0.1s ease;
        }

        .primary-btn {
            background: var(--accent);
            border-color: var(--accent);
            color: #20120a;
            font-weight: 600;
        }

        .primary-btn:hover {
            background: #ffd18b;
            border-color: #ffd18b;
            transform: translateY(-1px);
        }

        .ghost-btn {
            border-color: rgba(255,255,255,0.25);
            color: var(--accent-soft);
        }

        .ghost-btn:hover {
            border-color: var(--accent);
            color: var(--accent-soft);
            background: rgba(255,255,255,0.05);
        }

        .sections-panel {
            margin-top: 0.7rem;
            border-top: 1px solid rgba(255,255,255,0.06);
            padding-top: 0.55rem;
            display: none;
            font-size: 0.8rem;
            color: var(--text-soft);
        }

        .sections-panel h4 {
            font-size: 0.82rem;
            text-transform: uppercase;
            letter-spacing: 0.12em;
            margin-bottom: 0.25rem;
            color: var(--accent-soft);
        }

        .sections-list,
        .badge-row {
            list-style: none;
            display: flex;
            flex-wrap: wrap;
            gap: 0.25rem 0.5rem;
        }

        .sections-list li {
            padding-left: 0.7rem;
            position: relative;
        }

        .sections-list li::before {
            content: "•";
            position: absolute;
            left: 0;
            color: var(--accent-soft);
        }

        .badge {
            font-size: 0.72rem;
            border-radius: 999px;
            padding: 0.15rem 0.55rem;
            border: 1px solid rgba(255,255,255,0.2);
        }

        .badge.highlight {
            border-color: var(--accent-soft);
            background: rgba(255,179,71,0.12);
        }

        .hint-strip {
            margin-top: 1.75rem;
            padding: 0.75rem 1rem;
            border-radius: 12px;
            background: rgba(0,0,0,0.35);
            border: 1px dashed rgba(255,255,255,0.15);
            font-size: 0.82rem;
            color: var(--text-soft);
        }

        .hint-strip strong {
            color: var(--accent-soft);
        }

        @media (max-width: 720px) {
            .dashboard-header {
                align-items: flex-start;
            }
            .dashboard-header h1 {
                font-size: 1.75rem;
            }
        }
    </style>
</head>
<body>
<?php
// Include your site navigation if you have it
// include 'navbar.php';
?>

<div class="dashboard-wrapper">
    <header class="dashboard-header">
        <h1>STEM Explorer Dashboard</h1>
        <p>
            Welcome back. Choose a course to start exploring computer science ideas with puzzles,
            mini games, and short lessons. Each card shows how many lessons are in that course and
            how far along you are.
        </p>
    </header>

    <section class="summary-strip">
        <div class="summary-card">
            <div class="summary-label">Total Lessons</div>
            <div class="summary-value"><?php echo $totalLessons; ?></div>
            <div class="summary-hint">How many lessons were on the dashboard?</div>
        </div>
        <div class="summary-card">
            <div class="summary-label">Courses Available</div>
            <div class="summary-value"><?php echo count($courses); ?></div>
            <div class="summary-hint">Pick any course card to expand its sections.</div>
        </div>
        <div class="summary-card">
            <div class="summary-label">Tip</div>
            <div class="summary-value">Try Algorithms</div>
            <div class="summary-hint">It includes data structures and divide and conquer search.</div>
        </div>
    </section>

    <section class="course-grid">
        <?php foreach ($courses as $course): ?>
            <article class="course-card" data-course="<?php echo htmlspecialchars($course['id']); ?>">
                <div class="course-tag"><?php echo htmlspecialchars($course['level']); ?> Course</div>

                <div class="course-title-row">
                    <h2 class="course-title"><?php echo htmlspecialchars($course['title']); ?></h2>
                    <span class="course-lessons">
                        <?php echo $course['lessons']; ?> lessons
                    </span>
                </div>

                <div>
                    <div class="progress-bar">
                        <div class="progress-fill"
                             style="width: <?php echo intval($course['progress']); ?>%;"></div>
                    </div>
                </div>

                <div class="course-meta">
                    <span><?php echo intval($course['progress']); ?>% complete</span>
                    <span>Tap "Sections" to preview</span>
                </div>

                <div class="course-actions">
                    <?php if ($course['id'] === 'programming'): ?>
                        <a class="primary-btn" href="programming.php">Start Course</a>
                    <?php elseif ($course['id'] === 'algorithms'): ?>
                        <a class="primary-btn" href="algorithms.html">Start Course</a>
                    <?php else: ?>
                        <button class="primary-btn" type="button">Start Course</button>
                    <?php endif; ?>

                    <button class="ghost-btn toggle-sections" type="button">
                        Sections
                    </button>
                </div>


                <div class="sections-panel">
                    <h4>Sections</h4>
                    <ul class="sections-list">
                        <?php foreach ($course['sections'] as $index => $section): ?>
                            <li>
                                <?php echo ($index + 1) . '. ' . htmlspecialchars($section); ?>
                                <?php if ($course['id'] === 'algorithms' && $index === 1): ?>
                                    <!-- <span class="badge highlight">Task Question: Second Section Title</span> -->
                                <?php endif; ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>

                    <?php if ($course['id'] === 'algorithms'): ?>
                        <h4 style="margin-top: 0.5rem;">Data Structures in This Course</h4>
                        <ul class="badge-row">
                            <?php foreach ($course['data_structures'] as $ds): ?>
                                <li class="badge"><?php echo htmlspecialchars($ds); ?></li>
                            <?php endforeach; ?>
                        </ul>

                        <h4 style="margin-top: 0.5rem;">Divide and Conquer Search Algorithms</h4>
                        <ul class="badge-row">
                            <?php foreach ($course['divide_and_conquer'] as $alg): ?>
                                <li class="badge"><?php echo htmlspecialchars($alg); ?></li>
                            <?php endforeach; ?>
                        </ul>

                        <p style="margin-top: 0.5rem; font-size: 0.78rem;">
                            <strong>What is a Binary Search Tree?</strong>
                            <?php echo htmlspecialchars($course['bst_definition']); ?>
                        </p>
                    <?php endif; ?>

                    <?php if ($course['id'] === 'abstraction'): ?>
                        <p style="margin-top: 0.5rem; font-size: 0.78rem;">
                            Inside the Abstraction course there are
                            <strong><?php echo count($course['sections']); ?></strong> sections.
                        </p>
                    <?php endif; ?>
                </div>
            </article>
        <?php endforeach; ?>
    </section>

    <div class="hint-strip">
        <strong>Hint for your study tasks:</strong>
        Try expanding the Algorithms and Abstraction cards. You can count lessons,
        find the title of the second Algorithms section, see how many sections are in Abstraction,
        list data structures, find divide and conquer algorithms, and read the definition
        of a Binary Search Tree directly from this dashboard.
    </div>
</div>

<?php
// include 'footer.php';
?>

<script>
// Toggle the "Sections" panel without leaving the page
document.querySelectorAll(".toggle-sections").forEach(function (btn) {
    btn.addEventListener("click", function (event) {
        event.stopPropagation();
        var card = btn.closest(".course-card");
        var panel = card.querySelector(".sections-panel");
        var isOpen = panel.style.display === "block";

        // close all other panels
        document.querySelectorAll(".sections-panel").forEach(function (p) {
            p.style.display = "none";
        });

        panel.style.display = isOpen ? "none" : "block";
    });
});

// If you want card click to open sections too:
document.querySelectorAll(".course-card").forEach(function (card) {
    card.addEventListener("click", function (event) {
        // ignore button clicks (they already have behavior)
        if (event.target.closest("button")) return;
        var btn = card.querySelector(".toggle-sections");
        if (btn) btn.click();
    });
});
</script>
</body>
</html>

