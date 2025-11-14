document.addEventListener("DOMContentLoaded", () => {
  const buttons = document.querySelectorAll(".boton-eliminar");

  buttons.forEach((button) => {
    button.addEventListener("click", () => {
      const form = button.closest("form"); // Get the correct form for this button
      Swal.fire({
        title: "¿Eliminar?",
        text: "Esta acción no se puede deshacer.",
        icon: "warning",
        showCancelButton: true,
        confirmButtonText: "Sí, eliminar",
        cancelButtonText: "Cancelar",
      }).then((result) => {
        if (result.isConfirmed) {
          Swal.fire({
            icon: "success",
            title: "Eliminada",
            text: "El objeto eliminada correctamente",
            timer: 1500,
            showConfirmButton: false,
          }).then(() => {
            form.submit(); // submits the correct form
          });
        }
      });
    });
  });
});
