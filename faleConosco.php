<main>
  <h2>Fale Conosco</h2>
  <form action="?pg=sucesso" method="post">
    <div class="input-form">
      <label for=""> Nome:</label>
      <input type="text" name="name">
    </div>

    <div class="input-form">
      <label for="">E-mail:</label>
      <input type="text" name="email">
    </div>

    <div class="input-form">
      <label for="">Mensagem:</label>
      <textarea name="message" id="" cols="20" rows="5"></textarea>
    </div>

    <div class="input-form-select">
      <label for="subject">Assunto:</label>
      <select name="subject">
        <option value=""></option>
        <option value="sugestao">Sugestão</option>
        <option value="reclamação">Reclamação</option>
        <option value="duvidas">Dúvidas</option>
      </select>
    </div>

    <!-- <input type="submit" value="ENVIAR"> -->
    <button type="submit">ENVIAR</button>

  </form>
</main>