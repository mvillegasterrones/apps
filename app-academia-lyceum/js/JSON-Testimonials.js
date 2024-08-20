// Datos para los registros
const registrosJ = [
    {
        id: 1,
        titulo: "Registro 1",
        nombre_cliente: 'Cliente - 1, Cargo - 1',
        contenido: "Contenido del registro 1",
        calificacion: 4
    },
    {
        id: 2,
        titulo: "Registro 2",
        nombre_cliente: 'Cliente - 2, Cargo - 2',
        contenido: "Contenido del registro 2",
        calificacion: 5
    },
    {
        id: 3,
        titulo: "Registro 3",
        nombre_cliente: 'Cliente - 3, Cargo - 3',
        contenido: "Contenido del registro 3",
        calificacion: 3
    },
    {
        id: 4,
        titulo: "Registro 4",
        nombre_cliente: 'Cliente - 4, Cargo - 4',
        contenido: "Contenido del registro 4",
        calificacion: 2
    },
    {
        id: 5,
        titulo: "Registro 5",
        nombre_cliente: 'Cliente - 5, Cargo - 5',
        contenido: "Contenido del registro 5",
        calificacion: 1
    }
];

// Convertir a formato JSON
const registrosJSON = JSON.stringify(registrosJ);

// Convertir el JSON a objetos JavaScript
const registros = JSON.parse(registrosJSON);

// Obtener el contenedor donde se colocarán los registros
const registrosContainer = document.getElementById('registrosContainer');

// Recorrer cada registro y agregarlos a divs en el HTML
registros.forEach(registro => {
    const div = document.createElement('div');
    //div.innerHTML = `<h2>${registro.titulo}</h2><p>ID: ${registro.id}</p><p>${registro.contenido}</p><p>Calificación: ${registro.calificacion}</p>`;

    div.innerHTML = `<div class="carousel-item">
                                        <div class="row d-flex justify-content-center">
                                            <div class="col-lg-10 col-xl-8">
                                                <div class="row">
                                                    <div class="col-lg-4 d-flex justify-content-center">
                                                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(2).webp" class="rounded-circle shadow-1 mb-4 mb-lg-0" alt="woman avatar" width="150" height="150" />
                                                    </div>
                                                    <div class="col-9 col-md-9 col-lg-7 col-xl-8 text-center text-lg-start mx-auto mx-lg-0">
                                                        <h4 class="mb-4">${registro.nombre_cliente}</h4>
                                                        <p class="mb-0 pb-3">
                                                            ${registro.contenido}
                                                        </p>
                                                        <p class="text-primary">
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>`
    registrosContainer.appendChild(div)
});


// Imprimir el JSON en la consola
console.log(registrosJSON);