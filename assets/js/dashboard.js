document.addEventListener('DOMContentLoaded', () => {
    fetch('proses/proses_dashboard.php')
        .then(response => response.json())
        .then(data => {
            console.log(data); // Debugging output
            if (data.error) {
                console.error('Error:', data.error);
            } else {
                document.getElementById('students-count').textContent = data.students;
                document.getElementById('employees-count').textContent = data.employees;
                document.getElementById('classrooms-count').textContent = data.classrooms;
                document.getElementById('subjects-count').textContent = data.subjects;
            }
        })
        .catch(error => console.error('Error fetching data:', error));
});