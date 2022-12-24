// let sidebar = document.querySelector(".sidebar");
// let sidebarBtn = document.querySelector(".sidebarBtn");
// 
// sidebarBtn.onclick = function() {
// 	 sidebar.classList.toggle("active");
// }

var ctx = document.getElementById('myChart').getContext('2d');
var earning = document.getElementById('earning').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'polarArea',
    data: {
        labels: ['July', 'August', 'September', 'October', 'November', 'December'],
        datasets: [{
            label: 'Number of Booking',
            data: [3, 1, 2, 1, 3, 2],
            backgroundColor: [
                'rgba(255, 99, 132, 0.5)',
                'rgba(54, 162, 235, 0.5)',
                'rgba(255, 206, 86, 0.5)',
                'rgba(75, 192, 192, 0.5)',
                'rgba(153, 102, 255, 0.5)',
                'rgba(255, 159, 64, 0.5)'
            ],
			
        }]
    },
    options: {
        scales: {
            y: {
                responsive: true
            }
        }
    }
});

var myChart = new Chart(earning, {
    type: 'bar',
    data: {
        labels: ['July', 'August', 'September', 'October', 'November', 'December'],
        datasets: [{
            label: 'Number of Booking',
            data: [3, 1, 2, 1, 3, 2],
            backgroundColor: [
                'rgba(255, 99, 132, 0.5)',
                'rgba(54, 162, 235, 0.5)',
                'rgba(255, 206, 86, 0.5)',
                'rgba(75, 192, 192, 0.5)',
                'rgba(153, 102, 255, 0.5)',
                'rgba(255, 159, 64, 0.5)'
            ],
			
        }]
    },
    options: {
        scales: {
            y: {
                responsive: true
            }
        }
    }
});