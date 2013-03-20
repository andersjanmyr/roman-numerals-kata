function romanToDecimal(romanInput) {

    var result = 0;
    var array = romanInput.split("");
    for (var i = 0; i < array.length; i++) {
        var romanLiteral = array[i];
        if (romanLiteral === "") {
            // 0
        } else if (romanLiteral === "I") {
            result += (1);
        } else if (romanLiteral === "V") {
            result += (5);
        } else if (romanLiteral === "X") {
            result += (10);
        } else if (romanLiteral === "L") {
            result += (50);
        } else if (romanLiteral === "C") {
            result += (100);
        } else if (romanLiteral === "D") {
            result += (500);
        } else if (romanLiteral === "M") {
            result += (1000);
        } else {
            throw new Error("Unsupported Roman literal at pos " + i + ": " + romanInput);
        }
    }

    return result;
}

module.exports = romanToDecimal;
