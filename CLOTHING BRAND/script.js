document.getElementById("formulario").addEventListener("submit", function(event) {
    let nombre = document.getElementById("nombre").value.trim();
    let email = document.getElementById("email").value.trim();
    let mensaje = document.getElementById("mensaje").value.trim();

    if (nombre === "" || email === "" || mensaje === "") {
      alert("Todos los campos son obligatorios.");
      event.preventDefault(); // Evita el envío del formulario
    }
  });
