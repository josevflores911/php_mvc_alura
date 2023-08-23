<?php

declare(strict_types=1);

namespace Alura\Mvc\Controller;

use Alura\Mvc\Entity\Video;
use Alura\Mvc\Repository\VideoRepository;

class NewVideoController implements Controller
{
    public function __construct(private VideoRepository $videoRepository)
    {
    }

    public function processaRequisicao(): void
    {
        $url = filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL);
        if ($url === false) {
            header('Location: /?sucesso=0');
            return;
        }
        $titulo = filter_input(INPUT_POST, 'titulo');
        if ($titulo === false) {
            header('Location: /?sucesso=0');
            return;
        }

        $video=new Video($url, $titulo);
        
        //echo '<pre>';debugging
        //vardump($_FILES['image']);
        //echo '</pre>';
        //exit();


        if($_FILES['image']['error']===UPLOAD_ERR_OK){
            move_uploaded_file(
                $_FILES['image']['tmp_name'],
                __DIR__.'/../../public/img/uploads/'.uniqid('upload_'). $_FILES['image']['name']
            );
            $video->setFilePath($_FILES['image']['name']);
        }


        $success = $this->videoRepository->add($video);
        if ($success === false) {
            header('Location: /?sucesso=0');
        } else {
            header('Location: /?sucesso=1');
        }
    }
}
