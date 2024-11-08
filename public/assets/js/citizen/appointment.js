// Get the current date
const today = new Date();
let currentStartDate = new Date(today);

// Elements for days and dates
const dayElements = [
  document.getElementById("day1"),
  document.getElementById("day2"),
  document.getElementById("day3"),
  document.getElementById("day4"),
];

// Function to get the weekday name
function getWeekDay(date) {
  const days = ["SUN", "MON", "TUE", "WED", "THU", "FRI", "SAT"];
  return days[date.getDay()];
}

// Function to format the date as dd-mm-yyyy
function formatDate(date) {
  const day = String(date.getDate()).padStart(2, "0");
  const month = String(date.getMonth() + 1).padStart(2, "0"); // Months are zero-indexed
  const year = date.getFullYear();
  return `${day}-${month}-${year}`;
}

// Function to update the calendar with current week days and dates
function updateCalendar(startDate) {
  let currentDate = new Date(startDate);

  for (let i = 0; i < dayElements.length; i++) {
    const dayName = getWeekDay(currentDate);
    const formattedDate = formatDate(currentDate);
    dayElements[i].innerHTML = `${dayName}<br>${formattedDate}`;
    currentDate.setDate(currentDate.getDate() + 1);
  }
}

// Initial calendar update
updateCalendar(currentStartDate);

// Navigation buttons (for switching weeks)
document.getElementById("prev").addEventListener("click", () => {
  currentStartDate.setDate(currentStartDate.getDate() - 4); // Go back 4 days
  updateCalendar(currentStartDate);
});

document.getElementById("next").addEventListener("click", () => {
  currentStartDate.setDate(currentStartDate.getDate() + 4); // Go forward 4 days
  updateCalendar(currentStartDate);
});
