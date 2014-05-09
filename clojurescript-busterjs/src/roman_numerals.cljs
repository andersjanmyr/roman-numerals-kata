(ns roman-numerals)

(enable-console-print!)

(defn ^:export decimal-to-roman [d]
  (str d))

(defn -main [& args]
  (println (decimal-to-roman (first args))))

(set! *main-cli-fn* -main)
