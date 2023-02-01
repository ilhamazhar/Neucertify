$("body").on("click", ".deleteInstansi", function () {
    Swal.fire({
        title: "Apa anda yakin?",
        text: "Data ini akan dihapus!",
        icon: "question",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Ya, hapus!",
    }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire("Dihapus!", "Data anda telah dihapus.", "success");
        }
    });
});

// Swal.fire("Techsolutionstuff!", "You clicked the button!", "success");
// $(document).ready(function () {
//     $("h1").css("color", "red");
//     $("p").css({ color: "blue", "font-size": "28px" });
// });
