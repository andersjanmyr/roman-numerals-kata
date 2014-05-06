var config = module.exports;

config["Tests"] = {
    rootPath: "../",
    environment: "node",
    sources: [
        "lib/**/*.js"
    ],
    tests: [
        "test/*-test.js"
    ]
};

