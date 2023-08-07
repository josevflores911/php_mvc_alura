<?php

    //use Alura\Mvc\Entity\Video;

   /*  $dbPath=__DIR__.'/banco.sqlite';
    $pdo = new PDO("sqlite:$dbPath");
    $videoList = $pdo->query('SELECT * FROM videos;')->fetchAll(\PDO::FETCH_ASSOC);
    $repository=new Alura\Mvc\Repository\VideoRepository($pdo);
    $videoList=$repository->all(); */
?>

<?php require_once 'inicio-html.php'; ?>
    <ul class="videos__container" alt="videos alura">
        <?php foreach ($videoList as $video) : ?>
            <?php if(str_starts_with($video['url'],'http')) : ?>
        <li class="videos__item">
            <iframe width="100%" height="72%" src="<?= $video->url; ?>"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
            <div class="descricao-video">
                <img src="./img/logo.png" alt="logo canal alura">
                <h3><?php $video->title; ?></h3>
                <div class="acoes-video">
                    <a href="/editar-video.php?id=<?= $video->id ?>">Editar</a>
                    <a href="/remover-video.php?id=<?= $video->id ?>">Excluir</a>
                </div>
            </div>
        </li>
        <?php endif; ?>
        <?php endforeach; ?>
    </ul>
<?php require_once 'fin-html.php'; ?>