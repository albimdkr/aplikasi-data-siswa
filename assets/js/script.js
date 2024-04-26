document.querySelectorAll(".dropdown-item").forEach((item) => {
  item.addEventListener("click", (event) => {
    const role = event.target.getAttribute("data-role");
    document.getElementById("dropdownRole").innerText = role;
  });
});
