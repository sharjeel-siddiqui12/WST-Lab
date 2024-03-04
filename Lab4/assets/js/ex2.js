function performTask() {
    var option = document.getElementById('option').value;
    var input = document.getElementById('input').value;
    var output = document.getElementById('output');

    output.innerHTML = '';

    switch(option) {
        case 'table':
            generateTable(input);
            break;
        case 'sequence':
            generateSequence(input);
            break;
        case 'power':
            generatePower(input);
            break;
        default:
            output.innerHTML = 'Invalid option selected';
    }
}

function generateTable(number) {
    var output = document.getElementById('output');
    var table = '<h3>Table for ' + number + ':</h3><ul>';
    for(var i = 1; i <= 10; i++) {
        table += '<li>' + number + ' * ' + i + ' = ' + (number * i) + '</li>';
    }
    table += '</ul>';
    output.innerHTML = table;
}

function generateSequence(limit) {
    var output = document.getElementById('output');
    var sequence = '<h3>Sequence up to ' + limit + ':</h3><ul>';
    for(var i = 1; i <= limit; i++) {
        sequence += '<li>' + i + '</li>';
    }
    sequence += '</ul>';
    output.innerHTML = sequence;
}

function generatePower(input) {
    var parts = input.split(',');
    var base = parseFloat(parts[0]);
    var power = parseFloat(parts[1]);
    var output = document.getElementById('output');
    var result = '<h3>Power of ' + base + ' to the exponent ' + power + ':</h3>';
    result += '<p>' + base + '^' + power + ' = ' + Math.pow(base, power) + '</p>';
    output.innerHTML = result;
}
