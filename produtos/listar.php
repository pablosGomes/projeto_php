<?php include __DIR__ . '/../verifica_login.php'; ?>
<?php include __DIR__ . '/../cabecalho.php'; ?>

<main>
    <p>Bem-vindo(a), <?php echo $_SESSION['usuario_nome']; ?>!</p>
    <!-- conteúdo da página -->
</main>

<?php include __DIR__ . '/../rodape.php'; ?>
