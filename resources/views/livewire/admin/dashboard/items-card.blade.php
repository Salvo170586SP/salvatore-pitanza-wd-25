<div>
    <div
        class="p-5 border bg-gray-50 dark:border-[#505050] dark:bg-[#505050] rounded-xl flex flex-col justify-center items-center text-black dark:text-white">
        <div class="text-center">
            <h3 class="text-md font-bold uppercase">Total Items Overview</h3>
            <p class="text-sm text-gray-600 dark:text-gray-400 sfont-medium">This chart shows the number items of site.
            </p>
        </div>
        <div class="w-full h-[300px] p-5 flex justify-center items-center">
            <canvas id="myChartItems"></canvas>
        </div>
    </div>
</div>

@script
<script>
    const ctx = document.getElementById('myChartItems').getContext('2d');
    const Chart = window.Chart;
    const projects = @json($projects);
    const documents = @json($documents);
    const drawings = @json($drawings);
    const experiences = @json($experiences);
    const trainings = @json($trainings);

    // Prepara i dati in base alla presenza o meno di progetti
    let labels, chartData, colors;
    
    if (projects.length === 0 || documents.length === 0 ||
        drawings.length === 0 || experiences.length === 0 || trainings.length === 0) {
        labels = ['no Items'];
        chartData = [1];
        colors = ['#E0E0E0']; // Colore grigio chiaro per indicare nessun progetto
    } else {
        // Conta i progetti disponibili e non disponibili
        const totalProjects = projects.length;
        const totalDocuments = documents.length;
        const totalDrawings = drawings.length;
        const totalExperiences = experiences.length;
        const totalTrainings = trainings.length;

        labels = ['Projects', 'Documents', 'Drawings', 'Experiences', 'Trainings'];
        chartData = [totalProjects, totalDocuments, totalDrawings, totalExperiences, totalTrainings];
        colors = ['#4CAF50', '#2196F3', '#FFC107', '#9C27B0', '#FF9800'];
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
        
        chart.options.scales.x.ticks.color = textColor;
        chart.options.scales.y.ticks.color = textColor;
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
        type: 'bar',
        data: data,
        options: {
            responsive: true,
            scales: {
                x: {
                    ticks: {
                        color: document.documentElement.classList.contains('dark') ? '#ffffff' : '#000000'
                    }
                },
                y: {
                    ticks: {
                        color: document.documentElement.classList.contains('dark') ? '#ffffff' : '#000000'
                    }
                }
            },
            plugins: {
                legend: {
                    display: false
                },
                tooltip: {
                    callbacks: {
                        label: function(context) {
                            if (projects.length === 0 || documents.length === 0 ||  
                                drawings.length === 0 || experiences.length === 0 || trainings.length === 0
                            ) {
                                return 'There are no items available';
                            };

                            const totalProjects = projects.length;
                            const totalDocuments = documents.length;
                            const totalDrawings = drawings.length;
                            const totalExperiences = experiences.length;
                            const totalTrainings = trainings.length;
                            const total = totalProjects + totalDocuments + totalDrawings + totalExperiences + totalTrainings;
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