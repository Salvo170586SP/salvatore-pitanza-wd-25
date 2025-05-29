<div>
    <div
        class="p-5 border bg-gray-50 dark:border-[#505050] dark:bg-[#505050] rounded-xl flex flex-col justify-center items-center text-black dark:text-white">
        <div class="text-center">
            <h3 class="text-md font-bold uppercase">Projects Overview</h3>
            <p class="text-sm text-gray-600 dark:text-gray-400 sfont-medium">This chart shows the distribution of
                projects by
                status.</p>
        </div>
        <div class="max-w-[400px] h-[300px] p-5 flex justify-center items-center">
            <canvas id="myChart"></canvas>
        </div>
    </div>
</div>

@script
<script>
    const ctx = document.getElementById('myChart').getContext('2d');
    const Chart = window.Chart;
    const projects = @json($projects);

    // Prepara i dati in base alla presenza o meno di progetti
    let labels, chartData, colors;
    
    if (projects.length === 0) {
        labels = ['no Projects'];
        chartData = [1];
        colors = ['#E0E0E0']; 
    } else {
        // Conta i progetti disponibili e non disponibili
        const availableProjects = projects.filter(project => project.is_aviable).length;
        const notAvailableProjects = projects.filter(project => !project.is_aviable).length;
        labels = ['Available', 'Not Available'];
        chartData = [availableProjects, notAvailableProjects];
        colors = ['#4CAF50', '#FF5252'];
    }

    const data = {
        labels: labels,
        datasets: [{
            data: chartData,
            backgroundColor: colors,
            borderWidth: 1
        }]
    };

    const updateChartColors = () => {
        const isDark = document.documentElement.classList.contains('dark');
        const textColor = isDark ? '#ffffff' : '#000000';
        
        chart.options.plugins.legend.labels.color = textColor;
        chart.update();
    };

    // Osserva i cambiamenti del tema
    const observer = new MutationObserver(() => {
        updateChartColors();
    });

    observer.observe(document.documentElement, {
        attributes: true,
        attributeFilter: ['class']
    });

    const chart = new Chart(ctx, {
        type: 'doughnut',
        data: data,
        options: {
            responsive: true,
            maintainAspectRatio: true,
            plugins: {
                legend: {
                    position: 'bottom',
                    labels: {
                        color: document.documentElement.classList.contains('dark') ? '#ffffff' : '#000000'
                    }
                },
                tooltip: {
                    callbacks: {
                        label: function(context) {
                            if (projects.length === 0) {
                                return 'There are no projects available';
                            }
                            const total = projects.length;
                            const value = context.raw;
                            const percentage = ((value / total) * 100).toFixed(1);
                            return `${context.label}: ${value} (${percentage}%)`;
                        }
                    }
                }
            }
        }
    });
</script>
@endscript