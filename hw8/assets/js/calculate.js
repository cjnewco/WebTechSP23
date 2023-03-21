function isInteger(value) {
    return /^\d+$/.test(value);
}

function calculate(){
    var one = document.getElementById("argone").value;
    var two = document.getElementById("argtwo").value;
    var result = document.getElementById("result");

    if( isInteger(one) && isInteger(two) ){
        
        var aone = Number(one);
        var atwo = Number(two);
        var delimiter = document.getElementById("function");
        var output;

        switch(delimiter.value){
            case "+":
                output = aone+atwo;
                break;
            case "-":
                output = aone-atwo;
                break;
            case "*":
                output = aone*atwo;
                break;
            case "/":
                if(atwo == 0){
                    output = "Error: cannot divide by zero";
                    break;
                }
                output = aone/atwo;
                break;
            case Default:
                output = "something went wrong";
        }

        result.innerHTML = "Result: " + output;

    }
    else{
        result.innerHTML = "Error: one of the values you entered was not an integer";
    }
}

var submit = document.getElementById("submit");
submit.addEventListener("click", calculate);