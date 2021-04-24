const number1 = document.getElementById('number1').value;
const number2 = document.getElementById('number2').value;

function calculator() {
    switch (calculator) {
        case 1:
            document.getElementById("result").innerHTML = number1+number2;
            break;

        case 2:
            document.getElementById("result").innerHTML = number1*number2;
            break;
    
        default:
            document.write("Enter correct values!");
            break;
    }
}