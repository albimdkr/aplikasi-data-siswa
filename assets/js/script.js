// Dropdown
document.querySelectorAll(".dropdown-item").forEach((item) => {
  item.addEventListener("click", (event) => {
    const role = event.target.getAttribute("data-role");
    document.getElementById("dropdownRole").innerText = role;
  });
});

// Logout
function confirmLogout() {
  if (confirm("Apakah Anda yakin ingin logout?")) {
    window.location.href = "logout_action.php";
  }
}
