<h1 style="color: #212529"><b>Bem-vind</b>@, à lista de contatos em PHP!</h1>
<div class="container text-center">
  <img src="/img/hello.svg" alt="" width="60%" class="mt-5">
  <button id="first-button" href="/login">→</button>
</div>

<script>
document.getElementById('first-button').addEventListener('click', function () {
    window.location.href = '/login';
});
</script>