
    const ctx = document.getElementById('allocationChart').getContext('2d');
    const tooltip = document.getElementById('tooltip');
    const allocations = ['Reserve Pool - 10%', 'Top Promoters Pool - 3%', 'Emergency Pool - 7%', 'Active Staking Capital - 80%'];
    
    const chart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: allocations,
            datasets: [{
                data: [10, 3, 7, 80],
                backgroundColor: ['#3FA9F5', '#174C8F', '#2A3D55', '#7AC0E4'],
                borderWidth: 0
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: { display: false }
            },
            animation: {
                animateScale: true,
                animateRotate: true
            },
            onHover: (event, elements) => {
                if (elements.length > 0) {
                    const index = elements[0].index;
                    tooltip.style.display = 'block';
                    tooltip.innerText = allocations[index];
                    tooltip.style.left = `${event.clientX}px`;
                    tooltip.style.top = `${event.clientY - 20}px`;
                } else {
                    tooltip.style.display = 'none';
                }
            }
        }
    });

    document.querySelectorAll('.legend div').forEach((legendItem, index) => {
        legendItem.addEventListener('mouseover', () => {
            chart.setActiveElements([{ datasetIndex: 0, index }]);
            chart.update();
        });
        legendItem.addEventListener('mouseout', () => {
            chart.setActiveElements([]);
            chart.update();
        });
    });

 
    function toggleNav() {
        const navLinks = document.getElementById('navLinks');
        navLinks.classList.toggle('active');
    }
// Function to observe elements
function observeElements() {
    const fadeElements = document.querySelectorAll('.fade-in');

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, { threshold: 0.1 }); // Trigger when 10% of the element is visible

    fadeElements.forEach((element) => {
        observer.observe(element);
    });
}

// Call the function when the page loads
window.addEventListener('load', observeElements);

