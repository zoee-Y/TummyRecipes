/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function () {
    var hourErrorDisplayed = false;
    var minuteErrorDisplayed = false;

    var hours = document.getElementById("hours");
    var minutes = document.getElementById("minutes");
    
    hours.addEventListener("input", checkHoursInput);
    minutes.addEventListener("input", checkMinutesInput);
    

    function checkHoursInput(e) {
        if (e.target.value > 24) {
            if (hourErrorDisplayed === false) {
                var newElement = document.createElement("span");
                newElement.setAttribute("id", "hourError");
                newElement.innerHTML += "Invalid number!";
                
                hours.after(newElement);
                hourErrorDisplayed = true;
            }
        } else {
            console.log("hours ok");
            if (hourErrorDisplayed === true) {
                //remove it
                $("#hourError").remove();
                hourErrorDisplayed = false;
            }
        }
    }
    
    function checkMinutesInput(e) {
        if (e.target.value > 59) {
            if (minuteErrorDisplayed === false) {
                var newElement = document.createElement("span");
                newElement.setAttribute("id", "minuteError");
                newElement.innerHTML += "Invalid number!";
                
                minutes.after(newElement);
                minuteErrorDisplayed = true;
            }
        } else {
            if (minuteErrorDisplayed === true) {
                //remove it
                $("#minuteError").remove();
                minuteErrorDisplayed = false;
            }
        }
    }

    
});