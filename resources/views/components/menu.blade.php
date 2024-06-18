<div class="menu">
    <div class="menu_container">
      <p style="font-size: 20px; color: #fff">Painel - Meus Livros</p>
      <form action="/logout" method="POST">
        <input type='hidden' name='_token' value='{{ csrf_token() }}'>
        <button type="submit" class="transparent-button" style="color: #fff; display: flex; gap: 8px">
          <i class="fa-solid fa-user" style="color: #fff"></i>
          Sair
        </button>
      </form>
    </div>
</div>