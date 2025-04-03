let num1, num2, operator, answer;
let num3, num4, operator2, answer2;
        
function generateCaptcha1() {
    let a = Math.floor(Math.random() * 10) + 1;
    let b = Math.floor(Math.random() * 10) + 1;
    
    // Ensure num1 is always the larger number
    num1 = Math.max(a, b);
    num2 = Math.min(a, b);
    
    const operators = ['+', '-', '*'];
    operator = operators[Math.floor(Math.random() * operators.length)];
    operator = operators[Math.floor(Math.random() * operators.length)];
    
    switch (operator) {
        case '+': answer = num1 + num2; break;
        case '-': answer = num1 - num2; break;
        case '*': answer = num1 * num2; break;
    }
    
    document.getElementById('captcha1').textContent = `${num1} ${operator} ${num2} = ?`;
}



function generateCaptcha2() {
    let c = Math.floor(Math.random() * 10) + 1;
    let d = Math.floor(Math.random() * 10) + 1;
    num3 = Math.max(c, d);
    num4 = Math.min(c, d);

    const operators = ['+', '-', '*'];
    operator2 = operators[Math.floor(Math.random() * operators.length)];

    switch (operator2) {
        case '+': answer2 = num3 + num4; break;
        case '-': answer2 = num3 - num4; break;
        case '*': answer2 = num3 * num4; break;
    }

    document.getElementById('captcha2').textContent = `${num3} ${operator2} ${num4} = ?`;
}