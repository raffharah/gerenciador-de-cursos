<?php include __DIR__ . "/../header-html.php"; ?>
    <form action="/salvar-curso<?= isset($curso) ? '?id=' . $curso->getId() : ''; ?> " method="post">
        <div class="form-group">
            <label for="descricao">Descrição</label>
            <input type="text" id="descricao" name="descricao" class="form-control" value="<?= isset($curso) ? $curso->getDescricao() : ''; ?>">
        </div>
        <button class="btn btn-primary">Salvar</button>
    </form>
    <?php include __DIR__ . "/../footer-html.php"; ?>