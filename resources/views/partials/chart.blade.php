<script>
    const ctx = document.getElementById("myChart").getContext("2d");
    const gradient = ctx.createLinearGradient(0, 0, 0, 400);
    gradient.addColorStop(0, "rgba(54, 162, 235, 0.5)");
    gradient.addColorStop(0.8, "rgba(54, 162, 235, 0)");
    const myChart = new Chart(ctx, {
        type: "line",
        data: {
            labels: [
                "5k",
                "10k",
                "15k",
                "20k",
                "25k",
                "30k",
                "35k",
                "40k",
                "45k",
                "50k",
                "55k",
                "60k",
            ],
            datasets: [
                {
                    label: "Data",
                    data: [
                        20, 35, 25, 64.37, 42, 47, 50, 30, 60, 40, 45, 10, 12312, 234,
                    ],
                    backgroundColor: gradient,
                    borderColor: "rgba(54, 162, 235, 1)",
                    borderWidth: 1,
                    fill: true,
                    pointBackgroundColor: "rgba(54, 162, 235, 1)",
                    pointBorderColor: "#fff",
                    pointHoverBackgroundColor: "#fff",
                    pointHoverBorderColor: "rgba(54, 162, 235, 1)",
                },
            ],
        },
        options: {
            scales: {
                y: {
                    beginAtZero: false,
                    max: 100,
                    ticks: {
                        stepSize: 20,
                        callback: function (value) {
                            return value + "%";
                        },
                    },
                    grid: {
                        drawBorder: false,
                    },
                },
            },
            plugins: {
                tooltip: {
                    callbacks: {
                        label: function (context) {
                            let label = context.dataset.label || "";
                            if (label) {
                                label += ": ";
                            }
                            label += parseFloat(context.raw).toFixed(2);
                            return label;
                        },
                    },
                },
            },
            responsive: true,
            maintainAspectRatio: false,
        },
    });
</script>