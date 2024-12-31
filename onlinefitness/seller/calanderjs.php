document.addEventListener('DOMContentLoaded', function() {
    const date = new Date();
    const year = date.getFullYear();
    const month = date.getMonth();
  
    displayCalendar(year, month);
  });
  
  function displayCalendar(year, month) {
    const monthNames = ["January", "February", "March", "April", "May", "June",
                        "July", "August", "September", "October", "November", "December"];
    
    const firstDay = new Date(year, month, 1);
    const lastDay = new Date(year, month + 1, 0);
    const numDays = lastDay.getDate();
    const startingDay = firstDay.getDay();
  
    let html = '<table class="calendar">';
    html += '<caption>' + monthNames[month] + ' ' + year + '</caption>';
    html += '<tr>';
    html += '<th>Sun</th>';
    html += '<th>Mon</th>';
    html += '<th>Tue</th>';
    html += '<th>Wed</th>';
    html += '<th>Thu</th>';
    html += '<th>Fri</th>';
    html += '<th>Sat</th>';
    html += '</tr>';
  
    let day = 1;
    for (let i = 0; i < 6; i++) {
      html += '<tr>';
      for (let j = 0; j < 7; j++) {
        if (i === 0 && j < startingDay) {
          html += '<td></td>';
        } else if (day > numDays) {
          break;
        } else {
          const currentDate = new Date(year, month, day);
          const isToday = isSameDay(currentDate, new Date());
          html += '<td class="' + (isToday ? 'today' : '') + '">' + day + '</td>';
          day++;
        }
      }
      html += '</tr>';
      if (day > numDays) {
        break;
      }
    }
  
    html += '</table>';
    document.querySelector('.calendar').innerHTML = html;
  }
  
  function isSameDay(date1, date2) {
    return date1.getFullYear() === date2.getFullYear() &&
           date1.getMonth() === date2.getMonth() &&
           date1.getDate() === date2.getDate();
  }