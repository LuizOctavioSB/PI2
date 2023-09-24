<script>
function corVerde() {
  document.getElementById("nome");
  nome.style.color = "green";
}

function corAmarelo() {
  document.getElementById("nome");
  nome.style.color = "yellow";
}

function corVermelho() {
  document.getElementById("nome");
  nome.style.color = "red";
}
</script>

<style>
p{
	color: blue;
}
</style>

<p id="nome">Luiz Octávio<p>

<button id="verde" onclick="corVerde()">Mudar para verde</button>
<button id="amarelo" onclick="corAmarelo()">Mudar para amarelo</button>
<button id="azul" onclick="corVermelho()">Mudar para vermelho</button>
