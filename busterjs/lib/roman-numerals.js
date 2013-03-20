function literalValue(romanLiteral) {
    if (romanLiteral === "") {
        return 0;
    } else if (romanLiteral === "I") {
        return 1;
    } else if (romanLiteral === "V") {
        return 5;
    } else if (romanLiteral === "X") {
        return 10;
    } else if (romanLiteral === "L") {
        return 50;
    } else if (romanLiteral === "C") {
        return 100;
    } else if (romanLiteral === "D") {
        return 500;
    } else if (romanLiteral === "M") {
        return 1000;
    } else {
        throw new Error("Unsupported Roman literal: " + romanLiteral);
    }

}

function romanToDecimal(romanInput) {

    var result = 0;
    var array = romanInput.split("");
    for (var i = 0; i < array.length; i++) {
        var romanLiteral = array[i];
        var currentLiteralValue = literalValue(romanLiteral);
        var nextIndex = i + 1;
        var nextLiteral = nextIndex < array.length ? array[nextIndex] : "";
        var nextLiteralValue = literalValue(nextLiteral);
        if (nextLiteralValue > currentLiteralValue) {
            var currentAndNextCalculatedValue = nextLiteralValue - currentLiteralValue;
            result += currentAndNextCalculatedValue;
            i++;
        } else {
            result += currentLiteralValue;
        }
    }

    return result;
}

module.exports = romanToDecimal;
