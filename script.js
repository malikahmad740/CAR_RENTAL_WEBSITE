document.querySelectorAll(".btn").forEach(b => {
    b.onmouseover = () => b.style.transform = "scale(1.05)";
    b.onmouseout = () => b.style.transform = "scale(1)";
});
