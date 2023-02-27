var today = new Date();
var hNow = today.getHours();
var greeting;

if(hNow > 17){
    greeting = 'Good Evening!';
}
else if(hNow > 11){
    greeting = 'Good Afternoon!';
}
else if(hNow > 0){
    greeting = 'Good Morning';
}
else{
    greeting = 'Welcome!';
}

document.getElementById('greeting').innerHTML = greeting;