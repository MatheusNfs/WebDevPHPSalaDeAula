<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Rotinas</title>
</head>
<body>
    <div>
        <h1 style="text-align: center;">
            Procedimentos, Fuções e Métodos
        </h1>
        <h4 style="text-align:center;">Funções com String</h4>
        <hr>
        <?php 
            require_once "funcoes_string.php";

            echo "Teste de quebra de linha com wordwrap";
            breakline(2);
            
            $texto = "Será travada uma guerra santa em meu nome, como estandarte a caveira do meu pai. O medo é o matador da mente, é a pequena morte que leva à destruição. Serei chamado de Muad'Dib, o caminho do paraíso, Lisan Al-Gaib, a Voz do mundo exterior";
            $resp = wordwrap($texto,60,"<br>\n", false);
            echo $resp;
            breakline(2);

            echo "Quantidade de letras no texto com a função strlen: ".strlen($texto);
            breakline(1);

            echo "Utilização do: trim( ) - para remoção de espaços";
            $nome = "       Paul Atreides Madhi            ";
            breakline(1);
            echo $nome;
            breakline(1);
            echo "Quantidade de letras: ".strlen($nome);
            breakline(1);
            echo $nome;
            breakline(1);
            echo "Quantidade de letras após trim( ): ".strlen(trim($nome));
            breakline(1);
            echo "Quantidade de letras após ltrim( ): ".strlen(ltrim($nome));
            breakline(1);
            echo "Quantidade de letras após rtrim( ): ".strlen(rtrim($nome));
            breakline(2);

            echo "Quantidade de palavras em uma string com: str_word_count()";
            breakline(1);
            $teste = str_word_count($nome, 0);
            echo "Quantidade de palavras - com a opção: 0: ".$teste;
            breakline(1);
            $teste = str_word_count($nome, 1);
            echo "Quantidade de palavras - com a opção: 1: ";
            print_r($teste);
            breakline(1);
            $teste = str_word_count($nome, 2);
            echo "Quantidade de palavras - com a opção: 2: ";
            print_r($teste);
            breakline(2);
            
            echo "Função explode( )";
            breakline(1);
            $birthday = "00/00/75";
            $vetor = explode("/", $birthday);
            print_r($vetor);
            breakline(2);
            
            echo "Função implode( )";
            $birthday2 = implode("-", $vetor);
            breakline(1);
            print_r($birthday2);
            breakline(2);
            
            echo "Função str_split( )";
            breakline(1);
            $novo_vetor = str_split("Kwisatz Haderach");
            print_r($novo_vetor);
            breakline(2);

            echo "Função chr( )";
            breakline(1);
            echo "A letra de código 77 é ".chr(77);
            breakline(2);

            echo "Função ord( )";
            breakline(1);
            echo "O código da letra A é ". ord("A");
            breakline(2);

            echo "Função strtolower( )";
            breakline(1);
            $nomelower = strtolower($nome);
            echo $nomelower;
            breakline(2);
        
            echo "Função strtoupper( )";
            breakline(1);
            $nomeupper = strtoupper($nome);
            echo $nomeupper;
            breakline(2);
            
            echo "Função ucfirst( )";
            breakline(1);
            $nomeucfirst = ucfirst(strtolower(trim($nome)));
            echo $nomeucfirst;
            breakline(2);

            echo "Função ucwords( )";
            breakline(1);
            $nomeucwords = ucwords(strtolower($nome));
            echo $nomeucwords;
            breakline(2);
            

            echo "Função strpos( ) ou stripos (que ignora a caixa)";
            breakline(1);
            $nomepos = strpos(trim($nome), "Paul");
            echo $nomepos;
            breakline(2);
            
            echo "Função substr_count( ) ou substri_count (que ignora caixa)";
            breakline(1);
            $nomecount = substr_count(trim($nome), "Paul");
            echo $nomecount;
            breakline(2);

            echo "Função substr( )";
            breakline(1);
            echo "Texto com substr(var,0, 4): ".substr(trim($nome), 0, 4);
            breakline(1);
            echo "Texto com substr(var,5): ".substr(trim($nome),5);
            breakline(2);

            echo "Função str_replace";
            breakline(1);
            echo "Retorna um novo texto alterando a palavra: ".str_replace("Madhi", "Lisan Al-Gaib", $nome);
            breakline(2);
            
            $cpf = "00.000.000-00";
            $cpfr = str_replace(".","", $cpf);
            echo $cpfr;
            breakline(1);
            $cpfn = str_replace("-","",$cpfr);
            echo $cpfn;
            breakline(1);
            $cpfv = str_split($cpfn);
            print_r($cpfv);

            // $cpf = "157.542.367-00";

    
            // $cpfr = str_replace(".","",$cpf);
            // $cpfn = str_replace("-","",$cpfr);
            // $cpf_v = str_split($cpfn);
            
            // print_r($cpf_v);
      
            // $i=0;
            // $mult = 10;
            // $total = 0;
            
            // $i2=0;
            // $mult2 = 11;
            // $total2 = 0;

            // while($mult>1){
            //     $total = $total + ($cpf_v[$i]*$mult);
            //     $mult--;
            //     $i++;
            // };
            // breakline(1);
            // echo "total 1 = ".$total."<br>";
            
            // $resto = $total % 11;
            
            // echo "resto 1 = $resto<br>";

            // if($resto<2){
            //     if($cpf_v[9]==0){
            //         echo "$cpf_v[9] está certo <br>";
            //     }else{
            //         echo "cpf inválido <br>";
            //     }
            // }else{
            //     $check1 = 11 - $resto;
            //     echo "$check1 = 11 - $resto<br>";
            //     if($cpf_v[9]==$check1){
            //         echo "primeiro dígito OK<br>";
            //     }else{
            //         echo "cpf invalido<br>";
            //     }
            // }
            // /////////////////////////////////////
            // while($mult2>1){
            //     $total2 = $total2 + ($cpf_v[$i2]*$mult2);
            //     $mult2--;
            //     $i2++;
            // };
            // echo "total 2 = $total2<br>";
            // $resto2 = $total2 % 11;
            // echo "resto 2 = $resto2.<br>";

            // if($resto2<2){
            //     if($cpf_v[10]==0){
            //         echo "$cpf_v[10] está certo <br>";
            //     }else{
            //         echo "cpf inválido <br>";
            //     }
            // }else{
            //     $check2 = 11 - $resto2;
            //     echo "Check 2 = 11 - $resto2 = $check2<br>";
            //     if($cpf_v[10]==$check2){
            //         echo "primeiro dígito OK<br>";
            //     }else{
            //         echo "cpf invalido<br>";
            //     }
            // }

            
            
            	

        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>