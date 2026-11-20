function getPoliceCategories(item) {
    return new Set((item.category || '').split(',').map(category => {
        const normalized = category.trim().toLowerCase();
        return normalized === 'police precint' ? 'police precinct' : normalized;
    }));
}

function countPoliceCategories(counts, categories) {
    categories.forEach(category => counts.set(category, (counts.get(category) ?? 0) + 1));
}

function showPoliceCategoryCounts(panel, counts) {
    panel?.querySelectorAll('[data-police-category-count]').forEach(count => {
        const category = count.dataset.policeCategoryCount.toLowerCase();
        count.textContent = counts.get(category) ?? 0;
    });
}

function filterPoliceByCategory(items, panel, selectedCategories) {
    const counts = new Map();
    const selected = selectedCategories.map(category => category.toLowerCase());
    const matches = items.filter(item => {
        const categories = getPoliceCategories(item);
        countPoliceCategories(counts, categories);
        return selected.length === 0 || selected.some(category => categories.has(category));
    });

    showPoliceCategoryCounts(panel, counts);
    return matches;
}
