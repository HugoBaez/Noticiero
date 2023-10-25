const id = []

id.push(document.getElementById('destacado'))
id.push(document.getElementById('titular'))
id.push(document.getElementById('aut'))
id.push(document.getElementById('imagen'))
id.push(document.getElementById('cont'))

n = localStorage.getItem("numberValue")

var j = 0;
var aux;
const posi = []

while (j<5) {
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

            for (i = 0; i < 9; i++) {
              item.push(document.createElement('div'));
            }

            for (i = 0; i < 5; i++) {
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
                    <a href="javascript:location.reload()" onclick="pasarValor('prodId${i}')">${respuesta[posi[i]].title}</a>
                    <input id="prodId${i}" name="prodId" type="hidden" value="${posi[i]}">
                  </form>
                  </div>
                </div>
              </div>
            </div>`)
              item[i].innerHTML = c[i];
              id[0].appendChild(item[i]);
            }

            c.push(`<h3>${respuesta[n].title}</h3>`)
            c.push(`<p>${respuesta[n].creator}</p>`)
            c.push(`<img src="${respuesta[n].image_url}"></img>`)
            c.push(`<p>${respuesta[n].content}</p>
                    Fuente: <a href="${respuesta[n].link}">${respuesta[n].source_id}</a>`)
            
            for (i = 5; i < 9; i++) {
              item[i].innerHTML = c[i];
              id[i-4].appendChild(item[i]);
            }
        })
}

function pasarValor(identi){
  var noti = document.getElementById(identi).value;
  localStorage.setItem("numberValue",noti)
  return false;
}

cargarNoticias();



