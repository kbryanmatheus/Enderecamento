<?php

    function masc ($var){

        $x = 32 - $var;
        return $x;
        //bits sobraram
    }
    function quantend($var){
        $q = masc($var){
        $quantend = pow(2, $x);
        return $quantend;
        //quantidade de endenreços
        }
    }
    function sub ($var){
         $quantend =  quantend($var);
         $quantsub = 256/$quantend;
         return $quantsub;
         //quantidade de sub redes
    }
     function host ($var){
        $quantend = quantend($var)
            $host = $quantend - 2;
        if ($host <0) {
            return $host;
        }else{
            return $host;
            //quantidade de Hosts
        }
    }
     function qrede($r,$var){
        $quantend = quantend($var);
        $rede = int ($r / $quantend);
        return $rede;
        //rede em que se localiza
    }
     function rede ($r,$var){
        $quantend = quantend($var);
        $rede = qrede($r,$var);
        $red = $rede * $quantend;
        return $red;
        //rede ???
     }
      function brcast ($r,$var){
        $quantend = quantend($var);
        $red = rede($r,$var);
        $brcast = ($quantend + $red) - 1;
        return $brcast;
        //Endereço do Broadcast
      }
       function primeiro ($r,$var){
        $red = rede($r,$var);
        $primeiro = $red + 1;
        return $primeiro;
        //Primeiro ip utilizavel
       }
        function ultimo ($r,$var){
         $brcast = brcast($r,$var);
         $ultimo =  $brcast -1;
         return $ultimo;
         //Ultimo ip utilizavel
        }
         function mascara ($var){
          $quantend = quantend($var);
          $mascara = "255.255.255.$quantend";
          return $mascara;
          //Mascara da Rede
         }
          function ip($ip1,$ip2){
            if ($ip1 == 192 and $ip2 == 168){
               return $ip = "Private";
            }else{
                return $ip = "Publico";
            }
            //Mostra se o Ip é publico ou privado
          }


