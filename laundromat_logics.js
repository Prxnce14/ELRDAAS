// Need to work on how the time of day is interpretted as no one is using the laundromat for the entire day, ask about thios part in group when the oppurtunity arises.


document.addEventListener('DOMContentLoaded', function () {
    const laundryAppointmentsTable = document.querySelector('.laundry-appointments tbody');

    // Fetch existing appointments and display them
    fetchAppointments();

    // Generate a calendar for the next three days
    generateCalendar();

    // Fetch taken slots and display them
    fetchTakenSlots();
});

function formatDate(date) {
    const day = String(date.getDate()).padStart(2, '0');
    const month = String(date.getMonth() + 1).padStart(2, '0');
    const year = date.getFullYear();

    return `${day}-${month}-${year}`;
}

function fetchAppointments() {
    fetch('submit_appointment')
        .then(response => response.json())
        .then(data => {
            // Clear existing table rows
            laundryAppointmentsTable.innerHTML = '';

            // Display fetched data
            data.forEach(appointment => {
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td>${appointment[0]}</td>
                    <td>${appointment[1]}</td>
                    <td>${appointment[2]}</td>
                    <td>${appointment[3]}</td>
                `;
                laundryAppointmentsTable.appendChild(row);
            });
        })
        .catch(error => console.error('Error fetching data:', error));
}


function fetchTakenSlots() {
    // Current date
    const currentDate = new Date();

    // Calculate date up to 3 days from current
    const endDate = new Date();
    endDate.setDate(currentDate.getDate() + 3);

    // Format the dates as day, month, year
    const startDateString = formatDate(currentDate);
    const endDateString = formatDate(endDate);

    // Fetch taken slots from the server
    fetch(`get_taken_slots?start_date=${startDateString}&end_date=${endDateString}`)
        .then(response => response.json())
        .then(data => {
            const laundryAppointmentsTable = document.querySelector('.laundry-appointments tbody');

            // Clear any existing appointments
            laundryAppointmentsTable.innerHTML = '';

            // Display the taken slots on the table
            data.forEach(slot => {
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td>${slot.date}</td>
                    <td>${slot.time}</td>
                    <td>${slot.user}</td>
                `;
                laundryAppointmentsTable.appendChild(row);
            });
        })
        .catch(error => console.error('Error fetching data:', error));
}

function generateCalendar() {
    const currentDate = new Date();

    // Calculate date up to 3 days from current
    const endDate = new Date();
    endDate.setDate(currentDate.getDate() + 3);

    // Change format to day, month, year. May remove in future implementation
    const startDateString = formatDate(currentDate);
    const endDateString = formatDate(endDate);

    // Fetch appointments from database
    fetch(`get_appointments?start_date=${startDateString}&end_date=${endDateString}`)
        .then(response => response.json())
        .then(data => {
            // TODO: Display the appointments on the calendar
            const calendar = document.getElementById('calendar');

            // Clear existing appointments from calendar
            calendar.innerHTML = '';

            // Display appointments on the calendar
            data.forEach(appointment => {
                const appointmentElement = document.createElement('div');
                appointmentElement.className = 'appointment';
                appointmentElement.textContent = `Appointment on ${appointment.date} at ${appointment.time}`;
                calendar.appendChild(appointmentElement);
            });
        })
        .catch(error => console.error('Error fetching data:', error));
}




function isMoreThanThreeDaysInFuture(date) {
    const currentDate = new Date();
    const futureDate = new Date(date);

    // Calculate the date three days from now. function is to be made into its own independent function that is to be referenced for ease of use.
    const threeDaysFromNow = new Date();
    threeDaysFromNow.setDate(currentDate.getDate() + 3);

    // If the future date is after three days from now, return true
    if (futureDate > threeDaysFromNow) {
        return true;
    }

    // Otherwise, return false
    return false;
}


