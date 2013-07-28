<?php
   session_start(); // inicial a sessao
   header("Content-type: image/jpeg"); // define o tipo do arquivo
    
    function captcha($largura,$altura,$tamanho_fonte,$quantidade_letras){
        $imagem = imagecreate($largura, $altura); // define a largura e a altura da imagem
        $fonte = "ZXX_False.otf"; //voce deve ter essa ou outra fonte de sua preferencia em sua pasta
        $branco = imagecolorallocate($imagem,255,255,255); // define a cor branca
        $preto  = imagecolorallocate($imagem,0,0,0); // define a cor preta
        
        // define a palavra conforme a quantidade de letras definidas no parametro $quantidade_letras
        $palavra = substr(str_shuffle("AaBbCcDdEeFfGgHhIiJjKkLlMmNnPpQqRrSsTtUuVvYyXxWwZz23456789"),0,($quantidade_letras)); 
        $_SESSION["palavra"] = $palavra; // atribui para a sessao a palavra gerada
        for($i = 1; $i <= $quantidade_letras; $i++){ 
            imagettftext($imagem,$tamanho_fonte,rand(-25,25),($tamanho_fonte*$i),($tamanho_fonte + 10),$preto  ,$fonte,substr($palavra,($i-1),1)); // atribui as letras a imagem
        }
        imagejpeg($imagem); // gera a imagem
        imagedestroy($imagem); // limpa a imagem da memoria
    }
    
    captcha(230, 60, 33, 6); // executa a funcao captcha passando os parametros recebidos
?>