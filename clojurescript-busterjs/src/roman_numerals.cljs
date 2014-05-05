(ns roman-numerals)

(defn ^:export decimal-to-roman [d]
  (str d))

(defn -main [& args]
  (println (decimal-to-roman (first args))))

(set! *main-cli-fn* -main)
