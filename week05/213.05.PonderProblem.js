// First problem: Hello world
function problem1()
{
    //alert("Hello world!");
    console.log("Hello world!")
}

// Second problem: Form Letter
function problem2(name, text)
{
    var letter = text.replace(/RICH_GUY/g, name);
    console.log(letter);
}

// Third problem: Temperature Conversion
function problem3(fahrenheit)
{
    var celsius = ((fahrenheit - 32) * .5556);
    console.log(celsius.toFixed(1));
}

// Fourth problem: Postage
function problem4(weight)
{
    var rate;
    if (weight <= 1 && weight != 0)
    {
        rate = "$0.98";
    }
    else if (weight > 1 && weight <= 2)
    {
        rate = "$1.19";
    }
    else if (weight > 2 && weight <= 3) {
        rate = "$1.40";
    }
    else if (weight > 3 && weight <= 4) {
        rate = "$1.61";
    }
    else if (weight > 4 && weight <= 5) {
        rate = "$1.82";
    }
    else
    {
        rate = "Invalid weight";
    }
    console.log(rate);
}

// Fifth problem: Loops
function problem5(apr, term, amount)
{
    var interest = 0;
    var aprN = Number(apr);
    var amountN = Number(amount);

    for (var loop = 0; loop < term; loop++)
    {
        interest = amountN * (aprN / 100);
        amountN += interest;
    }
    console.log("$" + amountN.toFixed(2));
}