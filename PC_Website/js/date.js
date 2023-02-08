var currentDate  = new Date(),
    currentDay   = currentDate.getDate() < 10 
                 ? '0' + currentDate.getDate() 
                 : currentDate.getDate(),
    currentMonth = currentDate.getMonth() < 9 
                 ? '0' + (currentDate.getMonth() + 1) 
                 : (currentDate.getMonth() + 1);

console.log("currentDay + '/' + currentMonth + '/' +  currentDate.getFullYear()")
document.getElementsByClassName("date").innerHTML = currentDay + '/' + currentMonth + '/' +  currentDate.getFullYear();