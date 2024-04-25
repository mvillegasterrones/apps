const sw_alert = () => ({
    bienvenido: () => {
        Swal.fire({
            icon: 'success',
            title: "Bienvenido!",
            showDenyButton: false,
            showCancelButton: false,
            confirmButtonText: "Ok",
            denyButtonText: `Don't save`
        }).then((result) => {
            if (result.isConfirmed) {
                location.reload()
            } else if (result.isDenied) {
                console.log('canceled')
            }
        })
    },
    ok: (titulo, texto) => {
        Swal.fire({
            icon: "success",
            title: titulo,
            text: texto
        })
    },
    error: (texto) => {
        Swal.fire({
            icon: "error",
            title: "Oops...",
            text: texto,
        });
    }
})