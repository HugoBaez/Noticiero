const id = []
id.push(document.getElementById('carusel-1'))
id.push(document.getElementById('carusel-2'))
id.push(document.getElementById('carusel-3'))
id.push(document.getElementById('recientes'))
id.push(document.getElementById('destacado'))

var j = 0;
var aux;
const posi = []

while (j<13) {
  aux = Math.floor(Math.random()*31)
  if (posi.indexOf(aux) == -1 ) {
    posi.push(aux)
    j++
  }
}


function cargarNoticias() {
    fetch('js/json/noticias.json')
        .then(respuesta => respuesta.json())
        .then(respuesta => {
            var i;
            const item = []
            const c = []

            for (i = 0; i < 13; i++) {
              item.push(document.createElement('div'));
            }

            c.push(`<img src="${respuesta[posi[0]].image_url}">
            <div class="container">
              <div class="carousel-caption">
                <p class="c-titular">${respuesta[posi[0]].title}</p>
                <form action="nota.php">
                  <button type="submit" class="btn btn-success btn-sm" onclick="pasarValor('prodId0')">Leer más</button>
                  <input id="prodId0" name="prodId" type="hidden" value="${posi[0]}">
                </form>
              </div>
            </div>`)
  
            c.push(`<img src="${respuesta[posi[1]].image_url}">
            <div class="container">
              <div class="carousel-caption text-start">
                <p class="c-titular">${respuesta[posi[1]].title}</p>
                <form action="nota.php">
                  <button type="submit" class="btn btn-success btn-sm" onclick="pasarValor('prodId1')">Leer más</button>
                  <input id="prodId1" name="prodId" type="hidden" value="${posi[1]}">
                </form>
              </div>
            </div>`)

            c.push(`<img src="${respuesta[posi[2]].image_url}">
            <div class="container">
              <div class="carousel-caption text-end">
                <p class="c-titular">${respuesta[posi[2]].title}</p>
                <form action="nota.php">
                  <button type="submit" class="btn btn-success btn-sm" onclick="pasarValor('prodId2')">Leer más</button>
                  <input id="prodId2" name="prodId" type="hidden" value="${posi[2]}">
                </form>
              </div>
            </div>`)

            for (i = 0; i < 3; i++) {
              item[i].innerHTML = c[i];
              id[i].appendChild(item[i]);
            }

            for (i = 3; i < 8; i++) {
              c.push(`<div class="row align-items-center">
              <div class="col-lg-6">
                <img src="${respuesta[posi[i]].image_url}">
              </div>
              <div class="col-lg-6 tarjeta">
                <div class="titular">
                  <h3>${respuesta[posi[i]].title}</h3>
                </div>
                <div class="autor">
                  <p>${respuesta[posi[i]].creator}</p>
                </div>
                <p>${respuesta[posi[i]].description}</p>
                <div class="autor">
                  <p>tags: ${respuesta[posi[i]].category}</p>
                </div>
                <form action="nota.php">
                  <button type="submit" class="btn btn-success btn-sm" onclick="pasarValor('prodId${i}')">Leer más</button>
                  <input id="prodId${i}" name="prodId" type="hidden" value="${posi[i]}">
                </form>
              </div>
            </div>`)
              item[i].innerHTML = c[i];
              id[3].appendChild(item[i]);
            }


            for (i = 8; i < 13; i++) {
              c.push(`<div class="row">
              <div class="col-lg-12 starjeta">
                <div class="row">
                  <div class="col-4">
                    <div class="foto">
                      <img src="${respuesta[posi[i]].image_url}">
                    </div>
                  </div>
                  <div class="col-8">
                  <form action="nota.php">
                    <a href="nota.php" onclick="pasarValor('prodId${i}')">${respuesta[posi[i]].title}</a>
                    <input id="prodId${i}" name="prodId" type="hidden" value="${posi[i]}">
                  </form>
                  </div>
                </div>
              </div>
            </div>`)
              item[i].innerHTML = c[i];
              id[4].appendChild(item[i]);
            }
        })
}

function pasarValor(identi){
  var noti = document.getElementById(identi).value;
  localStorage.setItem("numberValue",noti)
  return false;
}

cargarNoticias();



