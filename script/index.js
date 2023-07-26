const list = document.getElementById("list")
const toDoText = document.getElementById("toDoText")

async function putText(){
    if(!toDoText.value){
        return
    }
    fetch(`./php/requisicao.php?text=${toDoText.value}`,{
        method: "get",
        
        }).then(async result => {
            const data = await result.json()

            list.innerHTML = ""
            for(i in data){
                list.innerHTML += `<li>${data[i]} <img src="./img/excluir.png" onclick="retirarOpcao(${i})"></img></li>`
            }
            toDoText.value = "";
        }).catch(err => {
            console.log(err)
        })
        
}

async function retirarOpcao(id){
    fetch(`./php/retirarOpcao.php?id=${id}`,{
        method: "get",
        
        }).then(async result => {
            const data = await result.json()

            list.innerHTML = ""
            if(data.length === 0){
                list.innerHTML += `<p>LISTA VAZIA</p>`
            }
            for(i in data){
                list.innerHTML += `<li>${data[i]} <img src="./img/excluir.png" onclick="retirarOpcao(${i})"></img></li>`
            }
            console.log(data)
        }).catch(err => {
            console.log(err)
        })
        
}



//<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>