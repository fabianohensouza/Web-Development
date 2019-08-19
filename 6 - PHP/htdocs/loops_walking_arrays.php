<html>
    <head>
        <meta charset="utf-8" />
        <title>Curso PHP</title>
    </head>

    <body>

        <?php
        
            $news = [
                    ['titulo' => 'Título notícia 1', 'conteudo' => 'Conteúdo da noticia 1 ...'],
                    ['titulo' => 'Título notícia 2', 'conteudo' => 'Conteúdo da noticia 2 ...'],
                    ['titulo' => 'Título notícia 3', 'conteudo' => 'Conteúdo da noticia 3 ...'],
                    ['titulo' => 'Título notícia 4', 'conteudo' => 'Conteúdo da noticia 4 ...'],
                    ];
            echo '<pre>';
                print_r($news);
            echo '</pre><hr>';

            $lenght = count($news);

            //WHILE
            $index = 0;
            while($index < $lenght) {
                echo '<h2>' . $news[$index]['titulo'] . '</h2>';
                echo '<p>' . $news[$index]['conteudo'] . '</p>';
                $index++;
            }
            echo '<hr>';

            //DO WHILE
            $index = 0;
            do {
                echo '<h2>' . $news[$index]['titulo'] . '</h2>';
                echo '<p>' . $news[$index]['conteudo'] . '</p>';
                $index++;
            } while($index < $lenght);
            echo '<hr>';

            //FOR
            for($index = 0; $index < $lenght; $index++) {
                echo '<h2>' . $news[$index]['titulo'] . '</h2>';
                echo '<p>' . $news[$index]['conteudo'] . '</p>';
            }

        ?>

    </body>
<html>