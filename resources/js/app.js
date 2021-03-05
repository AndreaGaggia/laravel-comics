require("./bootstrap");

TweenMax.fromTo(".bg-section", 1, { opacity: 0 }, { opacity: 1 });
TweenMax.fromTo(
    ".comic-card",
    0.5,
    { x: -500, opacity: 0 },
    { x: 0, opacity: 1 }
);
