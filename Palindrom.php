<?php
    class Palindrom{
        private function prepareStr($str){
            return strtolower(implode('',explode(' ', $str)));
        }

        private function findPal($str){
            $res = '';
            for ($i = 1; $i < strlen($str)-1; $i++){
                $offset = 1;
                $koef = ($str[$i] == $str[$i+1]) ? 1 : 0;
                $a = $i - $offset;
                $b = $i + $offset + $koef;
                

                while ($str[$a] == $str[$b]){
                    $buf = substr($str,$a,(($b - $a)+1));
                    if (strlen($buf) > strlen($res)) {
                        $res = $buf;
                    }

                    $offset++;
                    $a = $i - $offset;
                    $b = $i + $offset + $koef;

                    if ($a < 0) break;
                    if ($b > strlen($str)-1) break;
                    if ($offset > strlen($str)-1) break;
                }
            }
            return $res;
        }

        public function analize($str){
            $buf = $this->prepareStr($str);
//            echo $buf."\n";
            $res = $this->findPal($buf); 
//            echo $res."\n";
            if ($res == '') return $str[0];
            return $res;
        }
    }
