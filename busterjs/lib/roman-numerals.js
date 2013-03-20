function romanToDecimal(number) {

    if (number === "")
        return 0;
    if (number === "I")
        return 1;

    throw new Error("Unsupported Roman number: " + number);
}

module.exports = romanToDecimal;
