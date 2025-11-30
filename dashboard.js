// Dashboard data and rendering logic
const courses = [
    {
        id: 'algorithms',
        title: 'Algorithms',
        level: 'Intermediate',
        lessons: 5,
        progress: 40,
        sections: [
            'Intro to Algorithms',
            'Divide and Conquer Search Algorithms',
            'Data Structures in Algorithms',
            'Sorting and Searching Practice',
            'Challenge Problems'
        ],
        data_structures: ['Array', 'Linked List', 'Binary Search Tree', 'Hash Table'],
        divide_and_conquer: ['Binary Search', 'Ternary Search'],
        bst_definition: 'A Binary Search Tree is a tree data structure where each node has up to two children and all values in the left subtree are smaller and all values in the right subtree are larger.'
    },
    {
        id: 'abstraction',
        title: 'Abstraction',
        level: 'Beginner',
        lessons: 3,
        progress: 20,
        sections: [
            'What Is Abstraction?',
            'Breaking Problems Into Smaller Pieces',
            'Abstraction in Games and Apps'
        ]
    },
    {
        id: 'data',
        title: 'Data and Variables',
        level: 'Beginner',
        lessons: 4,
        progress: 0,
        sections: [
            'Numbers and Strings',
            'Lists and Tables',
            'Collecting Data',
            'Visualizing Data'
        ]
    }
];

function renderSummary() {
    const totalLessons = courses.reduce((sum, c) => sum + c.lessons, 0);
    document.getElementById('total-lessons').textContent = totalLessons;
    document.getElementById('courses-available').textContent = courses.length;
}

function createCourseCard(course) {
    const card = document.createElement('article');
    card.className = 'course-card';
    card.setAttribute('data-course', course.id);

    card.innerHTML = `
        <div class="course-tag">${course.level} Course</div>
        <div class="course-title-row">
            <h2 class="course-title">${course.title}</h2>
            <span class="course-lessons">${course.lessons} lessons</span>
        </div>
        <div>
            <div class="progress-bar">
                <div class="progress-fill" style="width: ${course.progress}%;"></div>
            </div>
        </div>
        <div class="course-meta">
            <span>${course.progress}% complete</span>
            <span>Tap \"Sections\" to preview</span>
        </div>
        <div class="course-actions">
            <button class="primary-btn">Start Course</button>
            <button class="ghost-btn toggle-sections" type="button">Sections</button>
        </div>
        <div class="sections-panel">
            <h4>Sections</h4>
            <ul class="sections-list">
                ${course.sections.map((section, i) => `
                    <li>${i + 1}. ${section}
                        ${course.id === 'algorithms' && i === 1 ? '' : ''}
                    </li>
                `).join('')}
            </ul>
            ${course.id === 'algorithms' ? `
                <h4 style="margin-top: 0.5rem;">Data Structures in This Course</h4>
                <ul class="badge-row">
                    ${course.data_structures.map(ds => `<li class="badge">${ds}</li>`).join('')}
                </ul>
                <h4 style="margin-top: 0.5rem;">Divide and Conquer Search Algorithms</h4>
                <ul class="badge-row">
                    ${course.divide_and_conquer.map(alg => `<li class="badge">${alg}</li>`).join('')}
                </ul>
                <p style="margin-top: 0.5rem; font-size: 0.78rem;">
                    <strong>What is a Binary Search Tree?</strong>
                    ${course.bst_definition}
                </p>
            ` : ''}
            ${course.id === 'abstraction' ? `
                <p style="margin-top: 0.5rem; font-size: 0.78rem;">
                    Inside the Abstraction course there are <strong>${course.sections.length}</strong> sections.
                </p>
            ` : ''}
        </div>
    `;
    return card;
}

function renderCourses() {
    const grid = document.getElementById('course-grid');
    grid.innerHTML = '';
    courses.forEach(course => {
        grid.appendChild(createCourseCard(course));
    });
}

function setupInteractions() {
    // Toggle the "Sections" panel without leaving the page
    document.querySelectorAll('.toggle-sections').forEach(function (btn) {
        btn.addEventListener('click', function (event) {
            event.stopPropagation();
            var card = btn.closest('.course-card');
            var panel = card.querySelector('.sections-panel');
            var isOpen = panel.style.display === 'block';
            document.querySelectorAll('.sections-panel').forEach(function (p) {
                p.style.display = 'none';
            });
            panel.style.display = isOpen ? 'none' : 'block';
        });
    });
    // Card click opens sections
    document.querySelectorAll('.course-card').forEach(function (card) {
        card.addEventListener('click', function (event) {
            if (event.target.closest('button')) return;
            var btn = card.querySelector('.toggle-sections');
            if (btn) btn.click();
        });
    });
}

document.addEventListener('DOMContentLoaded', function () {
    renderSummary();
    renderCourses();
    setupInteractions();
});
