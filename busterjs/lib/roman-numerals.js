function romanToDecimal(number) {

    if (number === "") {
        return 0;
    }

    throw new Error("Unsupported Roman number: " + number);
}

module.exports = romanToDecimal;
