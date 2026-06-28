// Animação de boas-vindas
window.addEventListener("DOMContentLoaded", () => {
  const mensagem = document.getElementById("mensagemBoasVindas");
  if (mensagem) {
    setTimeout(() => mensagem.style.opacity = "1", 200);
    setTimeout(() => mensagem.style.opacity = "0", 4000);
  }
});

// Botão de voltar ao topo
const voltarTopo = document.getElementById("voltarTopo");
window.addEventListener("scroll", () => {
  if (window.scrollY > 200) {
    voltarTopo.style.display = "block";
  } else {
    voltarTopo.style.display = "none";
  }
});

voltarTopo.addEventListener("click", () => {
  window.scrollTo({ top: 0, behavior: "smooth" });
});

// Mostrar/ocultar senha
const senha = document.getElementById("senha");
const toggle = document.getElementById("toggleSenha");
toggle.addEventListener("click", () => {
  senha.type = senha.type === "password" ? "text" : "password";
});

// Efeito de foco nos campos
const inputs = document.querySelectorAll('input');
inputs.forEach(input => {
  input.addEventListener('focus', () => {
    input.style.boxShadow = '0 0 10px #E50914';
  });
  input.addEventListener('blur', () => {
    input.style.boxShadow = 'none';
  });
});

// Animação no título
window.addEventListener('load', () => {
  const titulo = document.querySelector('.form-cont h1');
  if (titulo) {
    titulo.style.opacity = 1;
  }
});
