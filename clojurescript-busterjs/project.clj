(defproject clojurescript-busterjs "0.1.0-SNAPSHOT"
  :description "ClojureScript version of decimal to roman converter"
  :dependencies [[org.clojure/clojure "1.6.0"]
                 [org.clojure/clojurescript "0.0-2202"]]
  :plugins [[lein-cljsbuild "1.0.3"]]
  :cljsbuild {:builds [{:source-paths ["src"]
                        :compiler {:target :nodejs
                                   :output-to "lib/roman-numerals.js"
                                   :optimizations :simple
                                   :pretty-print true}}]})
