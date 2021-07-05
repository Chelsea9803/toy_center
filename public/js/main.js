function getToys() {

    

    var urlApi = "http://127.0.0.1:4000/toys";
    axios({
        method: 'get',
        url: urlApi,
        responseType: 'json'
    })
        .then(function (response) {
            var data = response.data;
            var resp = data.toys;
            console.log(data);
            var tToys='';
            for (var k in resp) {

                var name = resp[k].name;
                var image = resp[k].image;
                var empresa = resp[k].empresa;
                var price = resp[k].price;
                var id = resp[k].id;
                 tToys = ` <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
    
                            <div class="card w-100 card-border mb-5">
                                    <img src="img/${image}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title" id="tittle">${name}</h5>
                                        <p class="card-text" id="empresa">Nombre empresa: ${empresa}</p>
                                        <p class="card-text" id="precio">Precio: ${price}</p>
                                        <p class="card-text" id="codigo">Identificador: ${id}</p>
                                    </div>
                                </div>
                            </div>`;
                            console.log(data);
                $('#warpCartas').append(tToys);
            }
        });
}
getToys();

function postToys() {

    

    var urlApi = "http://127.0.0.1:4000/toys";
    axios({
        method: 'post',
        url: urlApi,
        responseType: 'json'
    })
        .then(function (response) {
            var data = response.data;
            var resp = data.toys;
            console.log(data);
            var tToys='';
            for (var k in resp) {

                var name = resp[k].name;
                var image = resp[k].image;
                var empresa = resp[k].empresa;
                var price = resp[k].price;
                var id = resp[k].id;
                 tToys = ` <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
    
                            <div class="card w-100 card-border mb-5">
                                    <img src="img/${image}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title" id="tittle">${name}</h5>
                                        <p class="card-text" id="empresa">Nombre empresa: ${empresa}</p>
                                        <p class="card-text" id="precio">Precio: ${price}</p>
                                        <p class="card-text" id="codigo">Identificador: ${id}</p>
                                    </div>
                                </div>
                            </div>`;
                            console.log(data);
                $('#warpCartas').append(tToys);
            }
        });
}
postToys();
var myCarousel = document.querySelector('#mainSlider')
var carousel = new bootstrap.Carousel(myCarousel)
console.log(image);
