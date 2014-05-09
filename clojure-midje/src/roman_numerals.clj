(ns roman-numerals
  (:gen-class))

(defn decimal-to-roman [d]
  (str d))

(defn -main
  "Takes a decimal numeral and converts it into roman"
  [& args]
  (when-let [[d] (seq args)]
    (println d "=>" (decimal-to-roman (Integer/parseInt d)))))
