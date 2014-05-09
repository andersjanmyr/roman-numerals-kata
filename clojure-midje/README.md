# Instructions

## Installation

* Install a JVM 1.5+
* Install Leiningen 2.0.0+: `brew update && brew install leiningen`
* Run tests manually with `lein midje` or automatically on save using `lein midje :autotest`

## Files

* `src/roman_numerals.clj`
* `test/roman_numerals_test.clj`

## Hints

0. Start a Leiningen REPL:

        $ lein repl
        user=>

1. A sorted map from decimal to roman, largest first:

        user=> (sorted-map-by > 1 "I" 4 "IV")
        {4 "IV", 1 "I"}

2. Map entries are just vectors of key-value pairs:

        user=> (first (sorted-map-by > 1 "I" 4 "IV"))
        [4 "IV"]

3. Find all map entries where the key is less than or equals to the given decimal:

        user=> (filter #(>= 4 (first %)) (sorted-map-by > 1 "I" 4 "IV"))
        ([4 "IV"] [1 "I"])

        user=> (filter #(>= 3 (first %)) (sorted-map-by > 1 "I" 4 "IV"))
        ([1 "I"])

4. Get only the first entry, call it `f`, and return it:

        user=> (let [[f] (filter #(>= 4 (first %)) (sorted-map-by > 1 "I" 4 "IV"))]
                 f)
        [4 "IV"]

5. Get the first entry, split it further into an `n` and a `c`, and conjoin the `c` on to an empty vector:

        user=> (let [[[n c]] (filter #(>= 4 (first %)) (sorted-map-by > 1 "I" 4 "IV"))]
                 (conj [] c))
        ["IV"]

6. Loop until `i` is zero, decrement `i` and conjoin each `c` on to a vector `s`:

        user=> (loop [i 3 s []]
                 (let [[[n c]] (filter #(>= i (first %)) (sorted-map-by > 1 "I" 4 "IV"))]
                   (if (zero? i)
                     s
                     (recur (- i n) (conj s c)))))
        ["I" "I" "I"]

        user=> (loop [i 4 s []]
                 (let [[[n c]] (filter #(>= i (first %)) (sorted-map-by > 1 "I" 4 "IV"))]
                   (if (zero? i)
                     s
                     (recur (- i n) (conj s c)))))
        ["IV"]

7. Turn a vector of strings into a string:

        user=> (apply str ["I" "I" "I"])
        "III"
