window.addEventListener('load', () => {
    (function () {
      const ctx = document.getElementById('attendance-chart');

      new Chart(ctx, {
        type: 'doughnut',
        data: {
          labels: ['Attendance (%)', 'Missed (%)'],
          datasets: [{
            label: 'Percentage of Classes',
            data: [7, 5],
            backgroundColor: ['#6fdc8c', '#fa4d56'],
            borderWidth: 1
          }]
        },
        options: {
          circumference: 270,
          scales: {
            y: {
              beginAtZero: true,
            }
          },
          plugins: {
            title: {
                display: true,
                text: 'Unit Attendance Rate (%)'
            }
          }
        }
      });
    })();

    (function () {
      const ctx = document.getElementById('top-attendance-chart');

      new Chart(ctx, {
        type: 'pie',
        data: {
          labels: ['Introduction to Computer Systems', 'Data Structures and Algorithms', 'Discrete Structures'],
          datasets: [{
            label: 'Count of Classes',
            data: [7, 5, 3],
            backgroundColor: ['#1192e8','#6fdc8c','#a56eff'],
            borderWidth: 1
          }]
        },
        options: {
          scales: {
            y: {
              beginAtZero: true,
            }
          },
          plugins: {
            title: {
                display: true,
                text: 'Top 3 Units by Attendance'
            }
          }
        }
      });
    })();
  });