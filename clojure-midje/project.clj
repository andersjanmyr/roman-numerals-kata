(defproject clojure-midje "0.0.1-SNAPSHOT"
  :description "Decimal to Roman converter"
  :dependencies [[org.clojure/clojure "1.6.0"]]
  :profiles {:dev {:dependencies [[midje "1.6.3"]]}}
  :plugins [[lein-midje "3.1.3"]]
  :main roman-numerals)
